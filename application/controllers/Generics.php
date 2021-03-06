<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generics extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        // if($this->session->userdata('right_discount_view') == 0 || $this->session->userdata('right_discount_view') == null) {
        //     redirect('../Homepage');
        // }
        $this->load->model('Brands_model');
        $this->load->model('Users_model');
        $this->load->model('Discount_model');
        $this->load->model('Card_model');
        $this->load->model('Generics_model');
    }

    public function index() {
        $m_users=$this->Users_model;
        $data2['users']=$m_users->get_list(
          'user_accounts.is_deleted=0 AND user_accounts.user_id!=1',
          'user_accounts.*,CONCAT(user_accounts.user_fname," ",user_accounts.user_mname," ",user_accounts.user_lname) as full_name,'
        );
        //default resources of the active view
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation',$data2,TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation.php','',TRUE);
        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);
        $data['_title'] = 'Generics';
        $this->load->view('generics_view', $data);
    }

    function transaction($txn = null) {
      function replaceCharsInNumber($num, $chars) {
                       return substr((string) $num, 0, -strlen($chars)) . $chars;
                  }
        switch ($txn) {
            case 'list':
                $m_generics = $this->Generics_model;
                $response['data']=$m_generics->get_list(array('generics.is_deleted'=>FALSE));
                echo json_encode($response);
            break;

            case 'create':
                $m_generics = $this->Generics_model;
                $m_generics->generic_name = $this->input->post('generic_name', TRUE);
                $m_generics->save();

                $generic_id = $m_generics->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $generic_id); //5069xxx
                $ecode = $temp .'-'. $today = date("Y");

                $m_generics->generic_code=$ecode;

                $m_generics->modify($generic_id);

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Generic information successfully created.';
                $response['row_added'] = $m_generics->get_list($generic_id);
                echo json_encode($response);

            break;

            case 'delete':
                $m_generics=$this->Generics_model;
                $generic_id=$this->input->post('generic_id',TRUE);
                $m_generics->is_deleted=1;
                //$m_generics->deleted_by = $this->session->user_id;
                //$m_generics->date_deleted=date('Y-m-d H:i:s');
                if($m_generics->modify($generic_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Generic information successfully deleted.';

                    echo json_encode($response);
                }

            break;

            case 'update':
                $m_generics=$this->Generics_model;

                $generic_id=$this->input->post('generic_id',TRUE);
                $m_generics->generic_name = $this->input->post('generic_name', TRUE);
                $m_generics->modify($generic_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Generic information successfully updated.';
                $response['row_updated']=$m_generics->get_list($generic_id);
                echo json_encode($response);

            break;
        }
    }

    // function response_rows($filter){
    //     return $this->Generics_model->get_list(
    //         $filter,
    //
    //         'products.*,categories.category_name,units.unit_name,brands.brand_name,vendors.vendor_name',
    //
    //         array(
    //             array('categories','categories.category_id=products.category_id','left'),
    //             array('units','units.unit_id=products.unit_id','left'),
		// 		array('brands','brands.brand_id=products.brand_id','left'),
		// 		array('vendors','vendors.vendor_id=products.vendor_id','left')
    //         )
    //     );
    // }
}
