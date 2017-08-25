<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendors extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Vendors_model');
    }

    public function index() {
        //default resources of the active view
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation.php','',TRUE);
        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);


        $data['_title'] = 'Vendors';

        $this->load->view('vendors_view', $data);
    }

    function transaction($txn = null) {
      function replaceCharsInNumber($num, $chars) {
                       return substr((string) $num, 0, -strlen($chars)) . $chars;
                  }
        switch ($txn) {
            case 'list':
                $m_vendors = $this->Vendors_model;
                $response['data']=$m_vendors->get_list(array('vendors.is_deleted'=>FALSE));
                echo json_encode($response);
            break;

            case 'create':
                $m_vendors = $this->Vendors_model;

                $m_vendors->vendor_name = $this->input->post('vendor_name', TRUE);
                $m_vendors->vendor_desc = $this->input->post('vendor_desc', TRUE);
                $m_vendors->save();

                $vendor_id = $m_vendors->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $vendor_id); //5069xxx
                $ecode = $temp .'-'. $today = date("Y");

                $m_vendors->vendor_code=$ecode;

                $m_vendors->modify($vendor_id);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Vendor information successfully created.';
                $response['row_added'] = $m_vendors->get_list($vendor_id);
                echo json_encode($response);

            break;

            case 'delete':
                $m_vendors=$this->Vendors_model;

                $vendor_id=$this->input->post('vendor_id',TRUE);

                $m_vendors->is_deleted=1;
                if($m_vendors->modify($vendor_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='category information successfully deleted.';

                    echo json_encode($response);
                }

            break;

            case 'update':
                $m_vendors=$this->Vendors_model;

                $vendor_id=$this->input->post('vendor_id',TRUE);
                $m_vendors->vendor_name = $this->input->post('vendor_name', TRUE);
                $m_vendors->vendor_desc = $this->input->post('vendor_desc', TRUE);

                $m_vendors->modify($vendor_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Vendor information successfully updated.';
                $response['row_updated']=$m_vendors->get_list($vendor_id);
                echo json_encode($response);

            break;
        }
    }


}
