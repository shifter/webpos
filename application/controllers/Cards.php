<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cards extends CORE_Controller
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
        $data['_title'] = 'Cards';
        $this->load->view('cards_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $m_cards = $this->Card_model;
                $response['data']=$m_cards->get_list(array('cards.is_deleted'=>FALSE));
                echo json_encode($response);
            break;

            case 'create':
                $m_cards = $this->Card_model;
                $m_cards->card_name = $this->input->post('card_name', TRUE);
                $m_cards->save();

                $card_id = $m_cards->last_insert_id();

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Card information successfully created.';
                $response['row_added'] = $m_cards->get_list($card_id);
                echo json_encode($response);

            break;

            case 'delete':
                $m_cards=$this->Card_model;
                $card_id=$this->input->post('card_id',TRUE);
                $m_cards->is_deleted=1;
                //$m_cards->deleted_by = $this->session->user_id;
                //$m_cards->date_deleted=date('Y-m-d H:i:s');
                if($m_cards->modify($card_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Card information successfully deleted.';

                    echo json_encode($response);
                }

            break;

            case 'update':
                $m_cards=$this->Card_model;

                $card_id=$this->input->post('card_id',TRUE);
                $m_cards->card_name = $this->input->post('card_name', TRUE);
                $m_cards->modify($card_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Card information successfully updated.';
                $response['row_updated']=$m_cards->get_list($card_id);
                echo json_encode($response);

            break;
        }
    }

    // function response_rows($filter){
    //     return $this->Card_model->get_list(
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
