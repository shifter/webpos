<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase_Order extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();

        $this->load->model('purchase_order_model');
        $this->load->model('Suppliers_model');
        $this->load->model('Tax_types_model');
        $this->load->model('Products_model');
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
        $data['_title']='Purchase Order';


        //data required by active view
        $data['suppliers']=$this->Suppliers_model->get_list(
            'suppliers.is_deleted = 0',
            'suppliers.*,IFNULL(tax_types.tax_rate,0)as tax_rate',
            array(
                array('tax_types','tax_types.tax_type_id=suppliers.tax_type_id','left')
            )
        );

        $data['tax_types']=$this->Tax_types_model->get_list(
            'tax_types.is_deleted = 0'
            );
        

        $data['products']=$this->Products_model->get_list();

        $data['title'] = 'Purchase Order';
        $this->load->view('purchase_order_view', $data);


    }

    function transaction($txn = null,$id_filter=null) {
      function replaceCharsInNumber($num, $chars) {
                       return substr((string) $num, 0, -strlen($chars)) . $chars;
                  }
        switch ($txn){
            case 'list':  //this returns JSON of Purchase Order to be rendered on Datatable
                $m_purchase_order=$this->purchase_order_model;
                $response['data']=$this->purchase_order_model->get_list(
                  'purchase_order.is_deleted=FALSE',
                  'purchase_order.*,DATE_FORMAT(purchase_order.date_created,"%m/%d/%Y")as date_created,
                  remarks as remarks,
                  suppliers.supplier_name,
                  suppliers.supplier_name',
                  array(
                      array('suppliers','suppliers.supplier_id=purchase_order.supplier_id','left')
                  )
                );
                echo json_encode($response);
                break;

            ////****************************************items/products of selected purchase invoice***********************************************
            case 'items': //items on the specific PO, loads when edit button is called
                $m_items=$this->purchase_order_item_model;
                $response['data']=$m_items->get_list(
                    array('purchase_order_id'=>$id_filter),
                    array(
                        'purchase_order_items.*',
                        'products.product_code',
                        'products.product_desc',
                        'units.unit_id',
                        'units.unit_name'
                    ),
                    array(
                        array('products','products.product_id=purchase_order_items.product_id','left'),
                        array('units','units.unit_id=purchase_order_items.unit_id','left')
                    ),
                    'purchase_order_items.po_item_id DESC'
                );


                echo json_encode($response);
                break;


            //***************************************create new purchase invoice************************************************
            case 'create':
                $m_purchase_order=$this->purchase_order_model;

	              $m_products=$this->Products_model;

                //$m_delivery_invoice->dr_invoice_no=$this->input->post('dr_invoice_no',TRUE);

                $m_purchase_order->supplier_id=$this->input->post('supplier',TRUE);
                $m_purchase_order->remarks=$this->input->post('remarks',TRUE);
                $m_purchase_order->date_created=date('Y-m-d',strtotime($this->input->post('date_created',TRUE)));
                $m_purchase_order->posted_by_user=$this->session->user_id;
                $m_purchase_order->total_discount=$this->get_numeric_value($this->input->post('summary_discount',TRUE));
                $m_purchase_order->total_before_tax=$this->get_numeric_value($this->input->post('summary_before_discount',TRUE));
                $m_purchase_order->total_tax_amount=$this->get_numeric_value($this->input->post('summary_tax_amount',TRUE));
                $m_purchase_order->total_after_tax=$this->get_numeric_value($this->input->post('summary_after_tax',TRUE));

                $m_purchase_order->save();

                $purchase_order_id=$m_purchase_order->last_insert_id();
                $format = "000000";
                $temp = replaceCharsInNumber($format, $purchase_order_id); //5069xxx
                $ecode = $temp .'-'. $today = date("Y");

                $m_purchase_order->po_no=$ecode;
                $m_purchase_order->modify($purchase_order_id);


                $m_po_items=$this->purchase_order_item_model;

                $prod_id=$this->input->post('product_id',TRUE);
                $po_qty=$this->input->post('po_qty',TRUE);
                $po_price=$this->input->post('po_price',TRUE);
                $po_discount=$this->input->post('po_discount',TRUE);
                $po_line_total_discount=$this->input->post('po_line_total_discount',TRUE);
                $po_tax_rate=$this->input->post('po_tax_rate',TRUE);
                $po_line_total_price=$this->input->post('po_line_total',TRUE);
                $po_tax_amount=$this->input->post('tax_amount',TRUE);
                $po_non_tax_amount=$this->input->post('non_tax_amount',TRUE);
                $delivered_qty=$this->input->post('delivered_qty',TRUE);
                $balance=$this->input->post('balance',TRUE);

						$i=0;
						foreach($prod_id as $item)
						{
							$minus="-";
							$data[] =
							   array(
								  'purchase_order_id' => $purchase_order_id,
								  'product_id' => $prod_id[$i],
								  'po_qty' => $this->get_numeric_value($po_qty[$i]),
								  'po_price' => $this->get_numeric_value($po_price[$i]),
								  'po_discount' => $this->get_numeric_value($po_discount[$i]),
								  'po_line_total_discount' => $this->get_numeric_value($po_line_total_discount[$i]),
								  'po_tax_rate' => $this->get_numeric_value($po_tax_rate[$i]),
								  'po_line_total' => $this->get_numeric_value($po_line_total_price[$i]),
								  'tax_amount' => $this->get_numeric_value($po_tax_amount[$i]),
								  'non_tax_amount' => $this->get_numeric_value($po_non_tax_amount[$i]),
                  'delivered_qty' => $this->get_numeric_value($delivered_qty[$i])
							   );


							$i++;
						}
					$this->db->insert_batch('purchase_order_items', $data);

          $response['title'] = 'Success!';
          $response['stat'] = 'success';
          $response['msg'] = 'Purchase Order successfully created.';
					$response['row_added']=$m_purchase_order->get_list(
            $purchase_order_id,
            'purchase_order.*,DATE_FORMAT(purchase_order.date_created,"%m/%d/%Y")as date_created,
            remarks as remarks,
            suppliers.supplier_name,
            suppliers.supplier_name',
            array(
                array('suppliers','suppliers.supplier_id=purchase_order.supplier_id','left')
            )
          );

                    echo json_encode($response);



            break;


            ////***************************************update purchase invoice************************************************
            case 'update':
                $m_purchase_order=$this->purchase_order_model;

		            $m_products=$this->Products_model;
                $purchase_order_id=$this->input->post('purchase_order_id',TRUE);
                //$m_delivery_invoice->dr_invoice_no=$this->input->post('dr_invoice_no',TRUE);
                $m_purchase_order->supplier_id=$this->input->post('supplier',TRUE);
                $m_purchase_order->remarks=$this->input->post('remarks',TRUE);
                $m_purchase_order->date_created=date('Y-m-d',strtotime($this->input->post('date_created',TRUE)));
                $m_purchase_order->posted_by_user=$this->session->user_id;
                $m_purchase_order->total_discount=$this->get_numeric_value($this->input->post('summary_discount',TRUE));
                $m_purchase_order->total_before_tax=$this->get_numeric_value($this->input->post('summary_before_discount',TRUE));
                $m_purchase_order->total_tax_amount=$this->get_numeric_value($this->input->post('summary_tax_amount',TRUE));
                $m_purchase_order->total_after_tax=$this->get_numeric_value($this->input->post('summary_after_tax',TRUE));
                $m_purchase_order->modify($purchase_order_id);


                $m_po_items=$this->purchase_order_item_model;

                $m_po_items->delete_via_fk($purchase_order_id); //delete previous items then insert those new


                $prod_id=$this->input->post('product_id',TRUE);
                $po_qty=$this->input->post('po_qty',TRUE);
                $po_price=$this->input->post('po_price',TRUE);
                $po_discount=$this->input->post('po_discount',TRUE);
                $po_line_total_discount=$this->input->post('po_line_total_discount',TRUE);
                $po_tax_rate=$this->input->post('po_tax_rate',TRUE);
                $po_line_total_price=$this->input->post('po_line_total',TRUE);
                $tax_amount=$this->input->post('tax_amount',TRUE);
                $non_tax_amount=$this->input->post('non_tax_amount',TRUE);

                for($i=0;$i<count($prod_id);$i++){

		               $m_po_items->purchase_order_id=$purchase_order_id;
                    $m_po_items->product_id=$prod_id[$i];
                    $m_po_items->po_qty=$po_qty[$i];
                    $m_po_items->po_price=$this->get_numeric_value($po_price[$i]);
                    $m_po_items->po_discount=$this->get_numeric_value($po_discount[$i]);
                    $m_po_items->po_line_total_discount=$this->get_numeric_value($po_line_total_discount[$i]);
                    $m_po_items->po_tax_rate=$this->get_numeric_value($po_tax_rate[$i]);
                    $m_po_items->po_line_total=$this->get_numeric_value($po_line_total_price[$i]);
                    $m_po_items->tax_amount=$this->get_numeric_value($tax_amount[$i]);
                    $m_po_items->non_tax_amount=$this->get_numeric_value($non_tax_amount[$i]);
	                  $m_po_items->save();

                }

                    $response['title'] = 'Success!';
                    $response['stat'] = 'success';
                    $response['msg'] = 'Purchase Order successfully updated.';
                    $response['row_updated']=$m_purchase_order->get_list(
                      $purchase_order_id,
                      'purchase_order.*,DATE_FORMAT(purchase_order.date_created,"%m/%d/%Y")as date_created,
                      remarks as remarks,
                      suppliers.supplier_name,
                      suppliers.supplier_name',
                      array(
                          array('suppliers','suppliers.supplier_id=purchase_order.supplier_id','left')
                      )
                    );

                    echo json_encode($response);


                break;

            //***************************************************************************************
            case 'delete':
                $m_purchase_order=$this->purchase_order_model;
		            $m_products=$this->Products_model;
                $purchase_order_id=$this->input->post('purchase_order_id',TRUE);

                //mark purchase invoice as deleted
                $m_purchase_order->is_deleted=1;
                $m_purchase_order->modify($purchase_order_id);

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
        return $this->purchase_order_model->get_list(
            $filter_value,
            array(
                'purchase_order.*',
                'DATE_FORMAT(purchase_order.date_created,"%m/%d/%Y")as date_created',
                'remarks as remarks',
                'suppliers.supplier_name',
	              'suppliers.supplier_name',
            ),
            array(
                array('suppliers','suppliers.supplier_id=purchase_order.supplier_id','left')
            ),
            $order_by
        );
    }


    // function get_po_status($id){
    //         //NOTE : 1 means open, 2 means Closed, 3 means partially invoice
    //         $m_purchase_order=$this->purchase_order_model;

    //         if(count($m_purchase_order->get_list(
    //                     array('purchase_order.purchase_order_id'=>$id,'purchase_order.is_active'=>TRUE,'purchase_order.is_deleted'=>FALSE),
    //                     'purchase_order.purchase_order_id'))==0 ){ //means no po found on delivery/purchase invoice that means this po is still open

    //             return 1;

    //         }else{

    //             $m_po=$this->Purchases_model;
    //             $row=$m_po->get_po_balance_qty($id);
    //             return ($row[0]->Balance>0?3:2);

    //         }

    // }
//***************************************************************************************





}
