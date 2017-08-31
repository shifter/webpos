<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deliveries extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        if($this->session->userdata('receiving_stock') == 0) {
             redirect('../Homepage');
        }
        $this->load->model('Delivery_invoice_model');
        $this->load->model('Suppliers_model');
        $this->load->model('Tax_types_model');
        $this->load->model('Products_model');
        $this->load->model('Delivery_invoice_item_model');
        $this->load->model('purchase_order_model');
        $this->load->model('purchase_order_item_model');

    }

    public function index() {

        //default resources of the active view
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation.php','',TRUE);
        // $data['_rights']=$this->load->view('template/elements/rights','',TRUE);
        $data['_title']='Deliveries';


        //data required by active view
        $data['suppliers']=$this->Suppliers_model->get_list(
            'suppliers.is_deleted = 0',
            'suppliers.*,IFNULL(tax_types.tax_rate,0)as tax_rate',
            array(
                array('tax_types','tax_types.tax_type_id=suppliers.tax_type_id','left')
            )
        );
        $data['purchase_order']=$this->purchase_order_model->getPoList();

        $data['tax_types']=$this->Tax_types_model->get_list(
            'tax_types.is_deleted = 0'
            );
        $data['products']=$this->Products_model->get_list();

        $data['title'] = 'Delivery Invoice';
        $this->load->view('delivery_view', $data);


    }

    function transaction($txn = null,$id_filter=null) {
      function replaceCharsInNumber($num, $chars) {
                       return substr((string) $num, 0, -strlen($chars)) . $chars;
                  }
        switch ($txn){
            case 'list':  //this returns JSON of Purchase Order to be rendered on Datatable
                $m_delivery_invoice=$this->Delivery_invoice_model;
                $response['data']=$this->Delivery_invoice_model->get_list(
                  'delivery_invoice.is_deleted=FALSE',
                  'delivery_invoice.*,DATE_FORMAT(delivery_invoice.date_received,"%m/%d/%Y")as date_received,
                  DATE_FORMAT(delivery_invoice.date_delivered,"%m/%d/%Y")as date_delivered,
                  delivery_invoice.remarks as remarks,
                  purchase_order.purchase_order_id,
                  purchase_order.po_no,
                  suppliers.supplier_name',
                  array(
                      array('suppliers','suppliers.supplier_id=delivery_invoice.supplier_id','left'),
                      array('purchase_order','purchase_order.purchase_order_id=delivery_invoice.purchase_order_id','left')
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
                $m_delivery_invoice=$this->Delivery_invoice_model;
                $m_po_item=$this->purchase_order_item_model;
                $m_po=$this->purchase_order_model;
	              $m_products=$this->Products_model;

                //$m_delivery_invoice->dr_invoice_no=$this->input->post('dr_invoice_no',TRUE);
                $m_delivery_invoice->supplier_id=$this->input->post('supplier',TRUE);
                $m_delivery_invoice->remarks=$this->input->post('remarks',TRUE);
                $m_delivery_invoice->date_received=date('Y-m-d',strtotime($this->input->post('date_received',TRUE)));
                $m_delivery_invoice->posted_by_user=$this->session->user_id;
                $m_delivery_invoice->total_discount=$this->get_numeric_value($this->input->post('summary_discount',TRUE));
                $m_delivery_invoice->total_before_tax=$this->get_numeric_value($this->input->post('summary_before_discount',TRUE));
                $m_delivery_invoice->total_tax_amount=$this->get_numeric_value($this->input->post('summary_tax_amount',TRUE));
                $m_delivery_invoice->total_after_tax=$this->get_numeric_value($this->input->post('summary_after_tax',TRUE));
                $m_delivery_invoice->purchase_order_id=$this->get_numeric_value($this->input->post('purchase_order_id', TRUE));
                $m_delivery_invoice->save();

                $dr_invoice_id=$m_delivery_invoice->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $dr_invoice_id); //5069xxx
                $ecode = $temp .'-'. $today = date("Y");

                $m_delivery_invoice->dr_invoice_no=$ecode;
                $m_delivery_invoice->modify($dr_invoice_id);


                $m_dr_items=$this->Delivery_invoice_item_model;

                $prod_id=$this->input->post('product_id',TRUE);
                $dr_qty=$this->input->post('dr_qty',TRUE);
                $dr_price=$this->input->post('dr_price',TRUE);
                $dr_discount=$this->input->post('dr_discount',TRUE);
                $dr_line_total_discount=$this->input->post('dr_line_total_discount',TRUE);
                $dr_tax_rate=$this->input->post('dr_tax_rate',TRUE);
                $dr_line_total_price=$this->input->post('dr_line_total_price',TRUE);
                $dr_tax_amount=$this->input->post('dr_tax_amount',TRUE);
                $dr_non_tax_amount=$this->input->post('dr_non_tax_amount',TRUE);
                $po_item_id=$this->input->post('po_item_id', TRUE);
						    $i=0;
				        $m_delivery_invoice->dr_invoice_no=$this->input->post('dr_invoice_no',TRUE);
                foreach($prod_id as $item)
    						{
    							$minus="-";
    							$data[] =
    							   array(
    								  'dr_invoice_id' => $dr_invoice_id,
    								  'product_id' => $prod_id[$i],
    								  'dr_qty' => $this->get_numeric_value($dr_qty[$i]),
    								  'dr_price' => $this->get_numeric_value($dr_price[$i]),
    								  'dr_discount' => $this->get_numeric_value($dr_discount[$i]),
    								  'dr_line_total_discount' => $this->get_numeric_value($dr_line_total_discount[$i]),
    								  'dr_tax_rate' => $this->get_numeric_value($dr_tax_rate[$i]),
    								  'dr_line_total_price' => $this->get_numeric_value($dr_line_total_price[$i]),
    								  'dr_tax_amount' => $this->get_numeric_value($dr_tax_amount[$i]),
    								  'dr_non_tax_amount' => $this->get_numeric_value($dr_non_tax_amount[$i]),
                                      'po_item_id' => $po_item_id[$i]
    							   );
    							$i++;
    						}
                $x=0;
                foreach($po_item_id as $poitem)
                {
                    if($poitem > 0)
                    {
                        $m_po_item->set('delivered_qty','delivered_qty+'.$this->get_numeric_value($dr_qty[$x]));
                        $m_po_item->modify($poitem);
                    }
                    $x++;
                }
					      $this->db->insert_batch('delivery_invoice_items', $data);
                $purchase_order_id=$this->input->post('purchase_order_id', TRUE);
                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Delivery invoice successfully created.';
        		    $response['row_added']=$m_delivery_invoice->get_list(
                    $dr_invoice_id,
                    'delivery_invoice.*,DATE_FORMAT(delivery_invoice.date_received,"%m/%d/%Y")as date_received,
                    DATE_FORMAT(delivery_invoice.date_delivered,"%m/%d/%Y")as date_delivered,
                    delivery_invoice.remarks as remarks,
                    purchase_order.purchase_order_id,
                    purchase_order.po_no,
                    suppliers.supplier_name',
                    array(
                        array('suppliers','suppliers.supplier_id=delivery_invoice.supplier_id','left'),
                        array('purchase_order','purchase_order.purchase_order_id=delivery_invoice.purchase_order_id','left')
                    )
                  );

                    echo json_encode($response);



            break;


            ////***************************************update purchase invoice************************************************
            case 'update':
                $m_delivery_invoice=$this->Delivery_invoice_model;
                $m_po_item=$this->purchase_order_item_model;
		            $m_products=$this->Products_model;
                $dr_invoice_id=$this->input->post('dr_invoice_id',TRUE);
                //$m_delivery_invoice->dr_invoice_no=$this->input->post('dr_invoice_no',TRUE);
                $m_delivery_invoice->supplier_id=$this->input->post('supplier',TRUE);
                $m_delivery_invoice->remarks=$this->input->post('remarks',TRUE);
                $m_delivery_invoice->date_received=date('Y-m-d',strtotime($this->input->post('date_received',TRUE)));
                $m_delivery_invoice->posted_by_user=$this->session->user_id;
                $m_delivery_invoice->total_discount_all=$this->get_numeric_value($this->input->post('summary_discount_total',TRUE));
                $m_delivery_invoice->total_discount=$this->get_numeric_value($this->input->post('summary_discount',TRUE));
                $m_delivery_invoice->total_before_tax=$this->get_numeric_value($this->input->post('summary_before_discount',TRUE));
                $m_delivery_invoice->total_tax_amount=$this->get_numeric_value($this->input->post('summary_tax_amount',TRUE));
                $m_delivery_invoice->total_after_tax=$this->get_numeric_value($this->input->post('summary_after_tax',TRUE));
                $m_delivery_invoice->modify($dr_invoice_id);


                $m_dr_items=$this->Delivery_invoice_item_model;

                $m_dr_items->delete_via_fk($dr_invoice_id); //delete previous items then insert those new


                $prod_id=$this->input->post('product_id',TRUE);
                $po_item_id=$this->input->post('po_item_id',TRUE);
                $dr_qty=$this->input->post('dr_qty',TRUE);
                $dr_price=$this->input->post('dr_price',TRUE);
                $dr_discount=$this->input->post('dr_discount',TRUE);
                $dr_line_total_discount=$this->input->post('dr_line_total_discount',TRUE);
                $dr_tax_rate=$this->input->post('dr_tax_rate',TRUE);
                $dr_line_total_price=$this->input->post('dr_line_total_price',TRUE);
                $dr_tax_amount=$this->input->post('dr_tax_amount',TRUE);
                $dr_non_tax_amount=$this->input->post('dr_non_tax_amount',TRUE);
                $delivered_qty=$this->input->post('delivered_qty',TRUE);

                for($i=0;$i<count($prod_id);$i++){

		                $m_dr_items->dr_invoice_id=$dr_invoice_id;
                    $m_dr_items->product_id=$prod_id[$i];
                    $m_dr_items->dr_qty=$dr_qty[$i];
                    $m_dr_items->po_item_id=$po_item_id[$i];
                    $m_dr_items->dr_price=$this->get_numeric_value($dr_price[$i]);
                    $m_dr_items->dr_discount=$this->get_numeric_value($dr_discount[$i]);
                    $m_dr_items->dr_line_total_discount=$this->get_numeric_value($dr_line_total_discount[$i]);
                    $m_dr_items->dr_tax_rate=$this->get_numeric_value($dr_tax_rate[$i]);
                    $m_dr_items->dr_line_total_price=$this->get_numeric_value($dr_line_total_price[$i]);
                    $m_dr_items->dr_tax_amount=$this->get_numeric_value($dr_tax_amount[$i]);
                    $m_dr_items->dr_non_tax_amount=$this->get_numeric_value($dr_non_tax_amount[$i]);
	                  $m_dr_items->save();

                }
                $x=0;
                foreach($po_item_id as $poitem){
                    if($poitem > 0){
                      $new_dqty=(int)$dr_qty[$x] - (int)$delivered_qty[$x];
                      $m_po_item->set('delivered_qty','delivered_qty+'.$this->get_numeric_value($new_dqty));
                      $m_po_item->modify($poitem);
                    }
                    $x++;
                }

                    $response['title'] = 'Success!';
                    $response['stat'] = 'success';
                    $response['msg'] = 'Delivery invoice successfully updated.';
                    $response['row_updated']=$m_delivery_invoice->get_list(
                      $dr_invoice_id,
                      'delivery_invoice.*,DATE_FORMAT(delivery_invoice.date_received,"%m/%d/%Y")as date_received,
                      DATE_FORMAT(delivery_invoice.date_delivered,"%m/%d/%Y")as date_delivered,
                      delivery_invoice.remarks as remarks,
                      purchase_order.purchase_order_id,
                      purchase_order.po_no,
                      suppliers.supplier_name',
                      array(
                          array('suppliers','suppliers.supplier_id=delivery_invoice.supplier_id','left'),
                          array('purchase_order','purchase_order.purchase_order_id=delivery_invoice.purchase_order_id','left')
                      )
                    );

                    echo json_encode($response);


                break;

            //***************************************************************************************
            case 'delete':
                $m_delivery_invoice=$this->Delivery_invoice_model;
		            $m_products=$this->Products_model;
                $dr_invoice_id=$this->input->post('dr_invoice_id',TRUE);

                //mark purchase invoice as deleted
                $m_delivery_invoice->is_deleted=1;
                $m_delivery_invoice->modify($dr_invoice_id);

                //********************************************************************************************************************
                //

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Purchase invoice successfully deleted.';
                echo json_encode($response);

                break;
            //***************************************************************************************
        }

    }



//**************************************user defined*************************************************
    function response_rows($filter_value,$order_by=null){
        return $this->Delivery_invoice_model->get_list(
            $filter_value,
            array(
                'delivery_invoice.*',
                'DATE_FORMAT(delivery_invoice.date_received,"%m/%d/%Y")as date_received',
                'DATE_FORMAT(delivery_invoice.date_delivered,"%m/%d/%Y")as date_delivered',
                'remarks as remarks',
                'suppliers.supplier_name',
	              'suppliers.supplier_name',
            ),
            array(
                array('suppliers','suppliers.supplier_id=delivery_invoice.supplier_id','left')
            ),
            $order_by
        );
    }


    function get_po_status($id){
            //NOTE : 1 means open, 2 means Closed, 3 means partially invoice
            $m_delivery=$this->Delivery_invoice_model;

            if(count($m_delivery->get_list(
                        array('delivery_invoice.purchase_order_id'=>$id,'delivery_invoice.is_active'=>TRUE,'delivery_invoice.is_deleted'=>FALSE),
                        'delivery_invoice.dr_invoice_id'))==0 ){ //means no po found on delivery/purchase invoice that means this po is still open

                return 1;

            }else{

                $m_po=$this->Purchases_model;
                $row=$m_po->get_po_balance_qty($id);
                return ($row[0]->Balance>0?3:2);

            }

    }
//***************************************************************************************





}
