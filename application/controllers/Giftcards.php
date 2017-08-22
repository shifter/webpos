<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GiftCards extends CORE_Controller
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
        $this->load->model('Giftcard_model');
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
        $data['_title'] = 'Giftcard';
        $this->load->view('giftcard_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $m_giftcard = $this->Giftcard_model;
                $response['data']=$m_giftcard->get_list(array('giftcards.is_deleted'=>FALSE));
                echo json_encode($response);
            break;

            case 'create':
                $m_giftcard = $this->Giftcard_model;
                $m_giftcard->giftcard_name = $this->input->post('giftcard_name', TRUE);
                $m_giftcard->save();

                $giftcard_id = $m_giftcard->last_insert_id();

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Giftcard information successfully created.';
                $response['row_added'] = $m_giftcard->get_list($giftcard_id);
                echo json_encode($response);

            break;

            case 'delete':
                $m_giftcard=$this->Giftcard_model;
                $giftcard_id=$this->input->post('giftcard_id',TRUE);
                $m_giftcard->is_deleted=1;
                //$m_giftcard->deleted_by = $this->session->user_id;
                //$m_giftcard->date_deleted=date('Y-m-d H:i:s');
                if($m_giftcard->modify($giftcard_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Giftcard information successfully deleted.';

                    echo json_encode($response);
                }

            break;

            case 'update':
                $m_giftcard=$this->Giftcard_model;

                $giftcard_id=$this->input->post('giftcard_id',TRUE);
                $m_giftcard->giftcard_name = $this->input->post('giftcard_name', TRUE);
                $m_giftcard->modify($giftcard_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Giftcard information successfully updated.';
                $response['row_updated']=$m_giftcard->get_list($giftcard_id);
                echo json_encode($response);

            break;
        }
    }

    // function response_rows($filter){
    //     return $this->Giftcard_model->get_list(
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
