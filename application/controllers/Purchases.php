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
        $this->load->model('Seniorcitizen_model');
        $this->load->model('Pos_denomination_model');
        $this->load->model('User_inout_model');
        $this->load->model('Reports_model');

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
        	case 'endbatch':
        		$m_invoices=$this->Invoice_model;
        		$user_id=$this->session->user_id;
        		$result=$m_invoices->getTransactions($user_id);
        		if($result->num_rows()>0){//valid username and pword
                        //set session data here and response data

                        $response['stat']='success';
                        $response['msg']='Successfully authenticated.';
                        echo json_encode($response);

                    }else{ //not valid
                        $response['stat']='error';
                        $response['msg']='You are not Authorized.';
                        $response['title']='Error authentication!';
                        echo json_encode($response);
                    }

                break;
            case 'cashcount':
        		$m_denomination=$this->Pos_denomination_model;
				$cents5=$this->input->post('cents5',TRUE);
				$cents10=$this->input->post('cents10',TRUE);
				$cents25=$this->input->post('cents25',TRUE);
				$peso1=$this->input->post('peso1',TRUE);
				$peso5=$this->input->post('peso5',TRUE);
				$peso10=$this->input->post('peso10',TRUE);
				$peso20=$this->input->post('peso20',TRUE);
				$peso50=$this->input->post('peso50',TRUE);
				$peso100=$this->input->post('peso50',TRUE);
				$peso200=$this->input->post('peso200',TRUE);
				$peso500=$this->input->post('peso500',TRUE);
				$peso1000=$this->input->post('peso1000',TRUE);
				$total_cash=$this->input->post('total_cash',TRUE);
				$change_fund=$this->input->post('change_fund',TRUE);
	            $m_denomination->user_id=$this->session->user_id;
	            $m_denomination->cents5=$this->get_numeric_value($cents5);
	            $m_denomination->cents10=$this->get_numeric_value($cents10);
	            $m_denomination->cents25=$this->get_numeric_value($cents25);
	            $m_denomination->peso1=$this->get_numeric_value($peso1);
	            $m_denomination->peso5=$this->get_numeric_value($peso5);
	            $m_denomination->peso10=$this->get_numeric_value($peso10);
	            $m_denomination->peso20=$this->get_numeric_value($peso20);
	            $m_denomination->peso50=$this->get_numeric_value($peso50);
	            $m_denomination->peso100=$this->get_numeric_value($peso100);
	            $m_denomination->peso200=$this->get_numeric_value($peso200);
	            $m_denomination->peso500=$this->get_numeric_value($peso500);
	            $m_denomination->peso1000=$this->get_numeric_value($peso1000);
	            $m_denomination->total_cash=$this->get_numeric_value($total_cash);
	            $m_denomination->change_fund=$this->get_numeric_value($change_fund);
				$m_denomination->save();
				$denomination_id=$m_denomination->last_insert_id();
				$m_invoices = $this->Invoice_model;
				$m_invoices->modify_by_user($this->session->user_id,$denomination_id);
				$m_user_inout = $this->User_inout_model;
				$m_user_inout->modify_by_user($this->session->user_id,$denomination_id);
				$response['data']=$denomination_id;
				$response['stat']='success';
                $response['msg']='User successfully End Batch.';
                
                echo json_encode($response);
                break;
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
			        $summary_vatable_sales=$this->input->post('summary_vatable_sales',TRUE);
			        $summary_vat_amount=$this->input->post('summary_vat_amount',TRUE);

			        $summary_vat_exempt_sales=$this->input->post('summary_vat_exempt_sales',TRUE);
			        $summary_zero_vat_sales=$this->input->post('summary_zero_vat_sales',TRUE);

					$customers=$this->input->post('customer_code',TRUE);
					$session_id=$this->input->post('session_id',TRUE);

					$pos_invoice_summary->totaldiscount=$this->get_numeric_value($summary_discount);

			        $pos_invoice_summary->vatable_sales=$this->get_numeric_value($summary_vatable_sales);
			        $pos_invoice_summary->vat_amount=$this->get_numeric_value($summary_vat_amount);
			        $pos_invoice_summary->zero_vat_sales=$this->get_numeric_value($summary_zero_vat_sales);
		         	$pos_invoice_summary->vat_exempt_sales=$this->get_numeric_value($summary_vat_exempt_sales);

					$pos_invoice_summary->customer_code=$customers;
					$pos_invoice_summary->transaction_date=$today;
          			//$pos_invoice_summary->transaction_timestamp=$fulldate;
					$pos_invoice_summary->user_id=$this->session->user_id;
					$pos_invoice_summary->save();

					$pos_invoice_id=$pos_invoice_summary->last_insert_id();
          			$m_po_items=$this->Purchase_items_model;

			        $product_id=$this->input->post('product_id',TRUE);


			        $pos_qty=$this->input->post('pos_qty',TRUE);
			        $pos_price=$this->input->post('pos_price',TRUE);
			        $pos_cost=$this->input->post('pos_cost',TRUE);
			        $pos_discount=$this->input->post('pos_discount',TRUE);
			        $tax_rate=$this->input->post('pos_tax_rate',TRUE);
			        $tax_amount=$this->input->post('pos_tax_amount',TRUE);
			        //$total = $pos_price + $pos_qty;
			        $pos_line_total_price=$this->input->post('pos_line_total_price',TRUE);
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
								  'pos_cost' => $this->get_numeric_value($pos_cost[$i]),
								  'pos_discount' => $this->get_numeric_value($pos_discount[$i]),
								  'tax_rate' => $this->get_numeric_value($tax_rate[$i]),
								  'tax_amount' => $this->get_numeric_value($tax_amount[$i]),
								  'total' => $this->get_numeric_value($pos_line_total_price[$i])
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

			        $pos_seniorcitizen=$this->Seniorcitizen_model;
			        $post_seniorTotalDiscount=$this->input->post('seniorTotalDiscount',TRUE);

		          	if ($post_seniorTotalDiscount != ""){
	            		$pos_seniorcitizen->discountAmount=$this->get_numeric_value($post_seniorTotalDiscount);
	  					$pos_seniorcitizen->pos_payment_id=$pos_payment_id;
	  					$pos_seniorcitizen->seniorID=$this->input->post('seniorID',TRUE);
	  					$pos_seniorcitizen->seniorName=$this->input->post('seniorName',TRUE);
	  					$pos_seniorcitizen->seniorAddress=$this->input->post('seniorAddress',TRUE);
	  					$pos_seniorcitizen->save();
			        }

					$pos_paymentdetails=$this->Payment_details_model;
					$cash_amount=$this->input->post('cash_amount',TRUE);
					$check_amount=$this->input->post('check_amount',TRUE);
					$card_amount=$this->input->post('card_amount',TRUE);
					$charge_amount=$this->input->post('charge_amount',TRUE);
					$gc_amount=$this->input->post('gc_amount',TRUE);
					$check_bank=$this->input->post('check_bank',TRUE);
					$check_address=$this->input->post('check_address',TRUE);
					$check_number=$this->input->post('check_number',TRUE);
					$card_type=$this->input->post('card_type',TRUE);
					$card_holder=$this->input->post('card_holder',TRUE);
					$card_number=$this->input->post('card_number',TRUE);
					$approval_number=$this->input->post('approval_number',TRUE);
					$charge_to=$this->input->post('charge_to',TRUE);
					$charge_branch=$this->input->post('charge_branch',TRUE);
					$charge_reference=$this->input->post('charge_reference',TRUE);
					$gc_code=$this->input->post('gc_code',TRUE);
					$gc_branch=$this->input->post('gc_branch',TRUE);
					$gc_number=$this->input->post('gc_number',TRUE);
					// while($post_cashamount!="0.00"){
					// 	while ($post_method1==1) {
					$pos_paymentdetails->pos_payment_id=$pos_payment_id;
					$pos_paymentdetails->cash_amount=$this->get_numeric_value($cash_amount);
					$pos_paymentdetails->check_amount=$this->get_numeric_value($check_amount);
					$pos_paymentdetails->card_amount=$this->get_numeric_value($card_amount);
					$pos_paymentdetails->charge_amount=$this->get_numeric_value($charge_amount);
					$pos_paymentdetails->gc_amount=$this->get_numeric_value($gc_amount);
					$pos_paymentdetails->check_bank=$check_bank;
					$pos_paymentdetails->check_address=$check_address;
					$pos_paymentdetails->check_number=$check_number;
					$pos_paymentdetails->card_type=$card_type;
					$pos_paymentdetails->card_holder=$card_holder;
					$pos_paymentdetails->card_number=$card_number;
					$pos_paymentdetails->approval_number=$approval_number;
					$pos_paymentdetails->charge_to=$charge_to;
					$pos_paymentdetails->charge_branch=$charge_branch;
					$pos_paymentdetails->charge_reference=$charge_reference;
					$pos_paymentdetails->gc_code=$gc_code;
					$pos_paymentdetails->gc_branch=$gc_branch;
					$pos_paymentdetails->gc_number=$gc_number;
					$pos_paymentdetails->save();
				
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
