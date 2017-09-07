<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pos extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Products_model');
        $this->load->model('Categories_model');
        $this->load->model('Units_model');
        $this->load->model('Purchases_model');
        $this->load->model('Purchase_items_model');
        $this->load->model('Customers_model');
        $this->load->model('Delivery_invoice_model');
        $this->load->model('Delivery_invoice_item_model');
        $this->load->model('Inventory_model');

    }

    public function index() {

        //default resources of the active view
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);

        $data['_top_navigation']=$this->load->view('template/elements/top_navigation_pos','',TRUE);
        // $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        // $data['_rights']=$this->load->view('template/elements/rights','',TRUE);
        
        $data['_title']='POINT OF SALES';
        $data['customers'] = $this->Customers_model->get_list(array('customers.is_deleted'=>FALSE),'customer_id,customer_code,customer_name');
        $data['products']=$this->Products_model->get_list();
        $this->load->view('pos_view', $data);

    }


//***************************************************************************************





}
