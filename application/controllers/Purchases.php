<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchases extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Purchases_model');
        $this->load->model('Suppliers_model');
        $this->load->model('Tax_types_model');
        $this->load->model('Products_model');
        $this->load->model('Purchase_items_model');
        $this->load->model('Invoice_model');
	      $this->load->model('Pos_payment_model');
        $this->load->model('Payment_details_model');
        $this->load->model('Customers_model');

    }

    public function index() {

        //default resources of the active view
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation.php','',TRUE);
        // $data['_rights']=$this->load->view('template/elements/rights','',TRUE);
        //data required by active view
        $data['suppliers']=$this->Suppliers_model->get_list(
            null,
            'suppliers.*,IFNULL(tax_types.tax_rate,0)as tax_rate',
            array(
                array('tax_types','tax_types.tax_type_id=suppliers.tax_type_id','left')
            )
        );


        $data['tax_types']=$this->Tax_types_model->get_list();

        $data['products']=$this->Products_model->get_list();

        $data['_title'] = 'Transactions';
        $this->load->view('purchases_view', $data);


    }

    function transaction($txn = null,$id_filter=null) {
        switch ($txn){
            case 'list':  //this returns JSON of Purchase Order to be rendered on Datatable
                $m_pos_payment=$this->Pos_payment_model;
                $response['data']=$m_pos_payment->get_list(
                null,
                  'pos_payment.*,pos_payment.receipt_no,pos_invoice.*',
                   array(
                     array('pos_invoice','pos_invoice.pos_invoice_id=pos_payment.pos_invoice_id','left') //join
                   )
                );
                echo json_encode($response);
                break;

            ////****************************************items/products of selected purchase invoice***********************************************
            case 'items': //items on the specific PO, loads when edit button is called
                $m_items=$this->Delivery_invoice_item_model;
                $response['data']=$m_items->get_list(
                    array('dr_invoice_id'=>$id_filter),
                    array(
                        'delivery_invoice_items.*',
                        'products.product_code',
                        'products.product_desc',
                        'units.unit_id',
                        'units.unit_name'
                    ),
                    array(
                        array('products','products.product_id=delivery_invoice_items.product_id','left'),
                        array('units','units.unit_id=delivery_invoice_items.unit_id','left')
                    ),
                    'delivery_invoice_items.dr_invoice_item_id DESC'
                );


                echo json_encode($response);
                break;


            //***************************************create new purchase invoice************************************************
            case 'create':
          // date_default_timezone_get();
					$today = date("Y-m-d");
          // $fulldate = date('Y-m-d H:i:s');
					$pos_invoice_summary=$this->Invoice_model;
					$m_products=$this->Products_model;

					$summary_discount=$this->input->post('summary_discount',TRUE);
          $summary_before_tax=$this->input->post('summary_before_tax',TRUE);
          $summary_tax_amount=$this->input->post('summary_tax_amount',TRUE);
          $summary_after_tax=$this->input->post('summary_after_tax',TRUE);
					$customers=$this->input->post('customers_name',TRUE);
					$session_id=$this->input->post('session_id',TRUE);

					$pos_invoice_summary->totaldiscount=$this->get_numeric_value($summary_discount);
	        $pos_invoice_summary->before_tax=$this->get_numeric_value($summary_before_tax);
	        $pos_invoice_summary->tax_amount=$this->get_numeric_value($summary_tax_amount);
	        $pos_invoice_summary->total_after_tax=$this->get_numeric_value($summary_after_tax);
					$pos_invoice_summary->customer_id=$customers;
					$pos_invoice_summary->transaction_date=$today;
          //$pos_invoice_summary->transaction_timestamp=$fulldate;
					$pos_invoice_summary->user_id=$this->session->user_id;
					$pos_invoice_summary->save();

					$pos_invoice_id=$pos_invoice_summary->last_insert_id();
          $m_po_items=$this->Purchase_items_model;

          $product_id=$this->input->post('product_id',TRUE);
          $pos_qty=$this->input->post('pos_qty',TRUE);
          $pos_price=$this->input->post('pos_price',TRUE);
          $pos_discount=$this->input->post('pos_discount',TRUE);
          $tax_rate=$this->input->post('pos_tax_rate',TRUE);
          $tax_amount=$this->input->post('pos_tax_amount',TRUE);
          //$total = $pos_price + $pos_qty;
          //$total=$this->input->post('pos_line_total_price',TRUE);
					$i=0;
					$a="+";
						// New function for insert
						foreach($product_id as $item)
						{
							$minus="-";
							$data[] =
							   array(
								  'pos_invoice_id' => $pos_invoice_id,
								  'product_id' => $product_id[$i],
								  'pos_qty' => $this->get_numeric_value($pos_qty[$i]),
								  'pos_price' => $this->get_numeric_value($pos_price[$i]),
								  'pos_discount' => $this->get_numeric_value($pos_discount[$i]),
								  'tax_rate' => $this->get_numeric_value($tax_rate[$i]),
								  'tax_amount' => $this->get_numeric_value($tax_amount[$i]),
								  'total' => $this->get_numeric_value($pos_price[$i]*$pos_qty[$i])
							   );
							$i++;
						}

					$this->db->insert_batch('pos_invoice_items', $data);

					$pos_payment=$this->Pos_payment_model;
					$post_amountdue=$this->input->post('post_amountdue',TRUE);
					$post_tendered=$this->input->post('post_tendered',TRUE);
					$post_change=$this->input->post('post_change',TRUE);

          $pos_payment->amount_due=$this->get_numeric_value($post_amountdue);
          $pos_payment->tendered=$this->get_numeric_value($post_tendered);
          $pos_payment->change=$this->get_numeric_value($post_change);
					$pos_payment->pos_invoice_id=$this->get_numeric_value($pos_invoice_id);
          $pos_payment->transaction_date=$today;
					$pos_payment->set('receipt_no','cr_receipt("T1")');
					$pos_payment->save();

					$pos_payment_id=$pos_payment->last_insert_id();

					$pos_paymentdetails=$this->Payment_details_model;
					$post_cashamount=$this->input->post('post_cashamount',TRUE);
					$post_cash_remarks=$this->input->post('post_cash_remarks',TRUE);

					$post_checkamount=$this->input->post('post_checkamount',TRUE);
					$post_check_bank=$this->input->post('post_check_bank',TRUE);
					$post_check_address=$this->input->post('post_check_address',TRUE);
					$post_check_number=$this->input->post('post_check_number',TRUE);
					$post_check_date=$this->input->post('post_check_date',TRUE);

					$post_cardamount=$this->input->post('post_cardamount',TRUE);
					$post_card_type=$this->input->post('post_card_type',TRUE);
					$post_card_holder=$this->input->post('post_card_holder',TRUE);
					$post_card_number=$this->input->post('post_card_number',TRUE);
					$post_card_apnumber=$this->input->post('post_card_apnumber',TRUE);
					$post_card_expdate=$this->input->post('post_card_expdate',TRUE);


					$post_chargeamount=$this->input->post('post_chargeamount',TRUE);
					$post_chargeto=$this->input->post('post_chargeto',TRUE);
					$post_charge_remarks=$this->input->post('post_charge_remarks',TRUE);
					$post_charge_date=$this->input->post('post_charge_date',TRUE);

					$post_method1=$this->input->post('post_method1',TRUE);
					$post_method2=$this->input->post('post_method2',TRUE);
					$post_method3=$this->input->post('post_method3',TRUE);
					$post_method4=$this->input->post('post_method4',TRUE);

					while($post_cashamount!="0.00"){
						while ($post_method1==1) {
						$pos_paymentdetails->pos_payment_id=$pos_payment_id;
						$pos_paymentdetails->method_id=$post_method1;
						$pos_paymentdetails->cash_amount=$this->get_numeric_value($post_cashamount);
						$pos_paymentdetails->cash_remarks=$post_cash_remarks;
						$pos_paymentdetails->check_amount=0;
						$pos_paymentdetails->card_amount=0;
						$pos_paymentdetails->charge_amount=0;
						$pos_paymentdetails->save();
						break;
						}
					break;
					}
					while($post_checkamount!="0.00"){
						while ($post_method2==2) {
						$pos_paymentdetails->pos_payment_id=$pos_payment_id;
						$pos_paymentdetails->method_id=$post_method2;
						$pos_paymentdetails->cash_amount=0;
						$pos_paymentdetails->cash_remarks="";
						$pos_paymentdetails->check_amount=$this->get_numeric_value($post_checkamount);
						$pos_paymentdetails->check_bank=$post_check_bank;
						$pos_paymentdetails->check_address=$post_check_address;
						$pos_paymentdetails->check_number=$this->get_numeric_value($post_check_number);
						$pos_paymentdetails->check_date=$post_check_date;
						$pos_paymentdetails->charge_amount=0;
						$pos_paymentdetails->save();
						break;
						}
					break;
					}
					while($post_cardamount!="0.00"){
						while ($post_method3==3) {
						$pos_paymentdetails->pos_payment_id=$pos_payment_id;
						$pos_paymentdetails->method_id=$post_method3;
						$pos_paymentdetails->cash_amount=0;
						$pos_paymentdetails->check_amount=0;

						$pos_paymentdetails->check_bank="";
						$pos_paymentdetails->check_address="";
						$pos_paymentdetails->check_number=0;
						$pos_paymentdetails->check_date="";

						$pos_paymentdetails->card_amount=$this->get_numeric_value($post_cardamount);
						$pos_paymentdetails->card_type=$post_card_type;
						$pos_paymentdetails->card_holder=$post_card_holder;
						$pos_paymentdetails->card_number=$this->get_numeric_value($post_card_number);
						$pos_paymentdetails->approval_number=$this->get_numeric_value($post_card_apnumber);
						$pos_paymentdetails->card_expiry_date=$post_card_expdate;
						$pos_paymentdetails->charge_amount=0;
						$pos_paymentdetails->save();
						break;
						}
					break;
					}
					while($post_chargeamount!="0.00"){
						while ($post_method4==4) {
						$pos_paymentdetails->pos_payment_id=$pos_payment_id;
						$pos_paymentdetails->method_id=$post_method4;
						$pos_paymentdetails->cash_amount=0;
						$pos_paymentdetails->check_amount=0;
						$pos_paymentdetails->card_amount=0;
						$pos_paymentdetails->card_type="";
						$pos_paymentdetails->card_holder="";
						$pos_paymentdetails->card_number="";
						$pos_paymentdetails->approval_number=0;
						$pos_paymentdetails->card_expiry_date="";
						$pos_paymentdetails->charge_amount=$this->get_numeric_value($post_chargeamount);
						$pos_paymentdetails->charge_to=$post_chargeto;
						$pos_paymentdetails->charge_remarks=$post_charge_remarks;
						$pos_paymentdetails->charge_date=$post_charge_date;
						$pos_paymentdetails->save();
						break;
						}
					break;
					}
					$response['pos_payment_id'] = $pos_payment_id;
					$response['title'] = 'Success!';
          $response['stat'] = 'success';
          $response['msg'] = 'Invoice successfully created.';

          echo json_encode($response);

					$receipt = $this->Pos_payment_model->get_list($pos_payment_id,'receipt_no');
						$data['r']=$receipt[0];
                    break;
        }

    }

}
