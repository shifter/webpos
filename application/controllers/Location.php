<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Location extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        // if($this->session->userdata('right_locations_view') == 0 || $this->session->userdata('right_locations_view') == null) {
        //     redirect('../Dashboard');
        // }
        $this->load->model('Location_model');
        $this->load->model('Users_model');
    }

    public function index() {
      // $m_users=$this->Users_model;
      // $data2['users']=$m_users->get_list(
      //   'user_accounts.is_deleted=0 AND user_accounts.user_id!=1',
      //   'user_accounts.*,CONCAT(user_accounts.user_fname," ",user_accounts.user_mname," ",user_accounts.user_lname) as full_name,'
      // );
        //default resources of the active view
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation.php','',TRUE);
        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);
        $data['_title'] = 'Locations';
        $this->load->view('locations_view', $data);
    }

    function transaction($txn = null) {
      function replaceCharsInNumber($num, $chars) {
                       return substr((string) $num, 0, -strlen($chars)) . $chars;
                  }
        switch ($txn) {
            case 'list':
                $m_locations = $this->Location_model;
                $response['data']=$m_locations->get_list(array('locations.is_deleted'=>FALSE));
                echo json_encode($response);
            break;

            case 'create':
                $m_locations = $this->Location_model;
                $m_locations->location_name = $this->input->post('location_name', TRUE);
                $m_locations->location_desc = $this->input->post('location_desc', TRUE);
                $m_locations->date_created = date('Y-m-d H:i:s');
                $m_locations->created_by = $this->session->user_id;
                $m_locations->save();

                $location_id = $m_locations->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $location_id); //5069xxx
                $ecode = $temp .'-'. $today = date("Y");

                $m_locations->location_code=$ecode;

                $m_locations->modify($location_id);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Location information successfully created.';
                $response['row_added'] = $m_locations->get_list($location_id);
                echo json_encode($response);

            break;

            case 'delete':
                $m_locations=$this->Location_model;

                $location_id=$this->input->post('location_id',TRUE);

                $m_locations->is_deleted=1;
                $m_locations->date_deleted = date('Y-m-d H:i:s');
                $m_locations->deleted_by = $this->session->user_id;
                if($m_locations->modify($location_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Location information successfully deleted.';

                    echo json_encode($response);
                }

            break;

            case 'update':
                $m_locations=$this->Location_model;

                $location_id=$this->input->post('location_id',TRUE);
                $m_locations->location_name = $this->input->post('location_name', TRUE);
                $m_locations->location_desc = $this->input->post('location_desc', TRUE);
                $m_locations->date_modified = date('Y-m-d H:i:s');
                $m_locations->modified_by = $this->session->user_id;
                $m_locations->modify($location_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Location information successfully updated.';
                $response['row_updated']=$m_locations->get_list($location_id);
                echo json_encode($response);

            break;
        }
    }


    // function response_rows($filter){
    //     return $this->Location_model->get_list(
    //         $filter,
    //
    //         'products.*,categories.category_name,units.unit_name,locations.location_name,vendors.vendor_name',
    //
    //         array(
    //             array('categories','categories.category_id=products.category_id','left'),
    //             array('units','units.unit_id=products.unit_id','left'),
		// 		array('locations','locations.location_id=products.location_id','left'),
		// 		array('vendors','vendors.vendor_id=products.vendor_id','left')
    //         )
    //     );
    // }


}
