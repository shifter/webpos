<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        // if($this->session->userdata('right_discount_view') == 0 || $this->session->userdata('right_discount_view') == null) {
        //     redirect('../Homepage');
        // }
        $this->load->model('Users_model');
        $this->load->model('Suppliers_model');
        $this->load->model('Tax_types_model');
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
        $data['_title'] = 'Suppliers';
        $data['tax_types']=$this->Tax_types_model->get_list(
            'tax_types.is_deleted = 0'
            );
        $this->load->view('suppliers_view', $data);
        
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $m_suppliers = $this->Suppliers_model;
                $response['data']=$m_suppliers->get_list(
                    'suppliers.is_deleted=FALSE',
                    'suppliers.*,
                    tax_types.tax_type_id,
                    tax_types.tax_type as vattype',
                    array(
                        array('tax_types','suppliers.vatted=tax_types.tax_type_id','left')
                        )
                    );
                echo json_encode($response);
            break;

            case 'create':
                $m_suppliers = $this->Suppliers_model;
                $m_suppliers->supplier_name = $this->input->post('supplier_name', TRUE);
                $m_suppliers->contact_person = $this->input->post('contact_person', TRUE);
                $m_suppliers->address = $this->input->post('address', TRUE);
                $m_suppliers->email_address = $this->input->post('email_address', TRUE);
                $m_suppliers->landline = $this->input->post('landline', TRUE);
                $m_suppliers->mobile_no = $this->input->post('mobile_no', TRUE);
                $m_suppliers->date_created = date('Y-m-d H:i:s');
                $m_suppliers->tin_no = $this->input->post('tin_no');
                $m_suppliers->vatted = $this->input->post('vatted');
                $m_suppliers->created_by = $this->session->user_id;
                $m_suppliers->save();

                $supplier_id = $m_suppliers->last_insert_id();

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Supplier information successfully created.';
                $response['row_added'] = $m_suppliers->get_list(
                    $supplier_id,
                    'suppliers.*,
                    tax_types.tax_type_id,
                    tax_types.tax_type as vattype',
                    array(
                        array('tax_types','suppliers.vatted=tax_types.tax_type_id','left')
                        )
                    );
                echo json_encode($response);

            break;

            case 'delete':
                $m_suppliers=$this->Suppliers_model;
                $supplier_id=$this->input->post('supplier_id',TRUE);
                $m_suppliers->is_deleted=1;
                $m_suppliers->deleted_by = $this->session->user_id;
                $m_suppliers->date_deleted=date('Y-m-d H:i:s');
                if($m_suppliers->modify($supplier_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Supplier information successfully deleted.';
                    echo json_encode($response);
                }

            break;

            case 'update':
                $m_suppliers=$this->Suppliers_model;
                $supplier_id=$this->input->post('supplier_id',TRUE);
                $m_suppliers->supplier_name = $this->input->post('supplier_name', TRUE);
                $m_suppliers->contact_person = $this->input->post('contact_person', TRUE);
                $m_suppliers->address = $this->input->post('address', TRUE);
                $m_suppliers->email_address = $this->input->post('email_address', TRUE);
                $m_suppliers->landline = $this->input->post('landline', TRUE);
                $m_suppliers->mobile_no = $this->input->post('mobile_no', TRUE);
                $m_suppliers->date_modified = date('Y-m-d H:i:s');
                $m_suppliers->tin_no = $this->input->post('tin_no');
                $m_suppliers->vatted = $this->input->post('vatted');
                $m_suppliers->modified_by = $this->session->user_id;
                $m_suppliers->modify($supplier_id);
                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Supplier information successfully updated.';
                $response['row_updated']=$m_suppliers->get_list(
                    $supplier_id,
                    'suppliers.*,
                    tax_types.tax_type_id,
                    tax_types.tax_type as vattype',
                    array(
                        array('tax_types','suppliers.vatted=tax_types.tax_type_id','left')
                        )
                    );
                echo json_encode($response);

            break;
        }
    }

    // function response_rows($filter){
    //     return $this->Suppliers_model->get_list(
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
