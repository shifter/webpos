<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adjustment extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        if($this->session->userdata('adjustment') == 0) {
             redirect('../Homepage');
        }
        $this->load->model('Adjustment_model');
        $this->load->model('Tax_types_model');
        $this->load->model('Products_model');
        $this->load->model('Adjustment_item_model');
        $this->load->model('Purchases_model');
        $this->load->model('Status_model');

    }

    public function index() {

        //default resources of the active view
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation.php','',TRUE);
        // $data['_rights']=$this->load->view('template/elements/rights','',TRUE);
        $data['_title']='Stock Adjustment';


        $data['tax_types']=$this->Tax_types_model->get_list();
        $data['status']=$this->Status_model->get_list(
          'status.is_deleted=0'
        );
        $data['products']=$this->Products_model->get_list();
        $this->load->view('adjustment_view', $data);

    }

    function transaction($txn = null,$id_filter=null) {
      function replaceCharsInNumber($num, $chars) {
                       return substr((string) $num, 0, -strlen($chars)) . $chars;
                  }
        switch ($txn){
          case 'list':  //this returns JSON of Purchase Order to be rendered on Datatable
              $m_adjustment=$this->Adjustment_model;
              $response['data']=$this->Adjustment_model->get_list(
                    'adjustment.is_deleted=0',
                    'adjustment.*,
                    DATE_FORMAT(adjustment.date_adjusted,"%m/%d/%Y")as date_adjusted,
                    remarks as remarks'
              );
              echo json_encode($response);
              break;

            ////****************************************items/products of selected purchase invoice***********************************************
            case 'items': //items on the specific PO, loads when edit button is called
                $m_items=$this->Adjustment_item_model;
                $response['data']=$m_items->get_list(
                    array('adjustment_id'=>$id_filter),
                    array(
                        'adjustment_items.*',
                        'products.product_code',
                        'products.product_desc'
                    ),
                    array(
                        array('products','products.product_id=adjustment_items.product_id','left')
                    ),
                    'adjustment_items.adjustment_items_id DESC'
                );


                echo json_encode($response);
                break;


            //***************************************create new purchase invoice************************************************
            case 'create':
                $m_adjustment=$this->Adjustment_model;

                $m_po=$this->Purchases_model;
	              $m_products=$this->Products_model;

                //$m_adjustment->dr_invoice_no=$this->input->post('dr_invoice_no',TRUE);
                $m_adjustment->remarks=$this->input->post('remarks',TRUE);
                $m_adjustment->date_adjusted=date('Y-m-d',strtotime($this->input->post('date_adjusted',TRUE)));
                $m_adjustment->created_by=$this->session->user_id;
                $m_adjustment->total_discount=$this->get_numeric_value($this->input->post('summary_discount',TRUE));
                $m_adjustment->total_before_tax=$this->get_numeric_value($this->input->post('summary_before_discount',TRUE));
                $m_adjustment->total_tax_amount=$this->get_numeric_value($this->input->post('summary_tax_amount',TRUE));
                $m_adjustment->total_after_tax=$this->get_numeric_value($this->input->post('summary_after_tax',TRUE));

                $m_adjustment->save();

                $adjustment_id=$m_adjustment->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $adjustment_id); //5069xxx
                $ecode = $temp .'-'. $today = date("Y");

                $m_adjustment->adjustment_no=$ecode;

                $m_adjustment->modify($adjustment_id);

                $m_adjustment_items=$this->Adjustment_item_model;

                $prod_id=$this->input->post('product_id',TRUE);
                $adj_qty=$this->input->post('adj_qty',TRUE);
                $adj_type=$this->input->post('adj_type',TRUE);
                $status=$this->input->post('status',TRUE);

    						$i=0;
    						foreach($prod_id as $item)
    						{
    							$minus="-";
    							$data[] =
    							   array(
    								  'adjustment_id' => $adjustment_id,
    								  'product_id' => $prod_id[$i],
    								  'adj_qty' => $adj_qty[$i],
    								  'adjustment_type' => $adj_type[$i],
                      'status' => $status[$i]
    							   );


    							$i++;
    						}
    					$this->db->insert_batch('adjustment_items', $data);

              $response['title'] = 'Success!';
              $response['stat'] = 'success';
              $response['msg'] = 'Adjustment successfully created.';
	            $response['row_added']=$m_adjustment->get_list(
                $adjustment_id,
                'adjustment.*,
                DATE_FORMAT(adjustment.date_adjusted,"%m/%d/%Y")as date_adjusted,
                remarks as remarks'
                );
              echo json_encode($response);
            break;


            ////***************************************update purchase invoice************************************************
            case 'update':
                $m_adjustment=$this->Adjustment_model;

                $m_po=$this->Purchases_model;
		            $m_products=$this->Products_model;
                $adjustment_id=$this->input->post('adjustment_id',TRUE);
                //$m_adjustment->dr_invoice_no=$this->input->post('dr_invoice_no',TRUE);
                $m_adjustment->remarks=$this->input->post('remarks',TRUE);
                $m_adjustment->date_adjusted=date('Y-m-d',strtotime($this->input->post('date_adjusted',TRUE)));
                $m_adjustment->modified_by=$this->session->user_id;
                $m_adjustment->total_discount=$this->get_numeric_value($this->input->post('summary_discount',TRUE));
                $m_adjustment->total_before_tax=$this->get_numeric_value($this->input->post('summary_before_discount',TRUE));
                $m_adjustment->total_tax_amount=$this->get_numeric_value($this->input->post('summary_tax_amount',TRUE));
                $m_adjustment->total_after_tax=$this->get_numeric_value($this->input->post('summary_after_tax',TRUE));
                $m_adjustment->modify($adjustment_id);


                $m_adjustment_items=$this->Adjustment_item_model;

                $m_adjustment_items->delete_via_fk($adjustment_id); //delete previous items then insert those new


                $prod_id=$this->input->post('product_id',TRUE);
                $adj_qty=$this->input->post('adj_qty',TRUE);
                $adj_type=$this->input->post('adj_type',TRUE);
                $status=$this->input->post('status',TRUE);

                for($i=0;$i<count($prod_id);$i++){

		                $m_adjustment_items->adjustment_id=$adjustment_id;
                    $m_adjustment_items->product_id=$prod_id[$i];
                    $m_adjustment_items->adj_qty=$adj_qty[$i];
                    $m_adjustment_items->adjustment_type=$adj_type[$i];
                    $m_adjustment_items->status=$this->get_numeric_value($status[$i]);
	                  $m_adjustment_items->save();

                }

                    $response['title'] = 'Success!';
                    $response['stat'] = 'success';
                    $response['msg'] = 'Adjustment successfully updated.';
                    $response['row_updated']=$m_adjustment->get_list(
                      $adjustment_id,
                      'adjustment.*,
                      DATE_FORMAT(adjustment.date_adjusted,"%m/%d/%Y")as date_adjusted,
                      remarks as remarks'
                      );
                    echo json_encode($response);


                break;


            //***************************************************************************************
            case 'delete':
                $m_adjustment=$this->Adjustment_model;
	              $m_products=$this->Products_model;
                $adjustment_id=$this->input->post('adjustment_id',TRUE);

                //mark purchase invoice as deleted
                $m_adjustment->is_deleted=1;
                $m_adjustment->modify($adjustment_id);
                //********************************************************************************************************************
                //

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Adjustment successfully deleted.';
                echo json_encode($response);

                break;
            //***************************************************************************************

            case 'test':
                $m_po=$this->Purchases_model;
                $row=$m_po->get_po_balance_qty($id_filter);
                echo json_encode($row);
                break;
            //***************************************************************************************
        }

    }

//***************************************************************************************





}
