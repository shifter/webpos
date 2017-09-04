<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        if($this->session->userdata('unit_view') == 0) {
             redirect('../Homepage');
        }
        $this->load->model('Units_model');
    }

    public function index() {
        //default resources of the active view
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation.php','',TRUE);
        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);


        $data['_title'] = 'Units';

        $this->load->view('units_view', $data);
    }

    function transaction($txn = null) {
      function replaceCharsInNumber($num, $chars) {
                       return substr((string) $num, 0, -strlen($chars)) . $chars;
                  }
        switch ($txn) {
            case 'list':
                $m_units = $this->Units_model;
                $response['data']=$m_units->get_list(array('units.is_deleted'=>FALSE));
                echo json_encode($response);
            break;

            case 'create':
                $m_units = $this->Units_model;

                $m_units->unit_name = $this->input->post('unit_name', TRUE);
                $m_units->unit_desc = $this->input->post('unit_desc', TRUE);
                $m_units->save();

                $unit_id = $m_units->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $unit_id); //5069xxx
                $ecode = $temp .'-'. $today = date("Y");

                $m_units->unit_code=$ecode;

                $m_units->modify($unit_id);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Unit information successfully created.';
                $response['row_added'] = $m_units->get_list($unit_id);
                echo json_encode($response);

            break;

            case 'delete':
                $m_units=$this->Units_model;

                $unit_id=$this->input->post('unit_id',TRUE);

                $m_units->is_deleted=1;
                if($m_units->modify($unit_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Unit information successfully deleted.';

                    echo json_encode($response);
                }

            break;

            case 'update':
                $m_units=$this->Units_model;

                $unit_id=$this->input->post('unit_id',TRUE);
                $m_units->unit_name=$this->input->post('unit_name',TRUE);
                $m_units->unit_desc=$this->input->post('unit_desc',TRUE);

                $m_units->modify($unit_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Unit information successfully updated.';
                $response['row_updated']=$m_units->get_list($unit_id);
                echo json_encode($response);

            break;
        }
    }


}
