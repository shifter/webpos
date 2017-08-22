<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompanyInfo extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        // if($this->session->userdata('right_discount_view') == 0 || $this->session->userdata('right_discount_view') == null) {
        //     redirect('../Homepage');
        // }
        $this->load->model('Users_model');
        $this->load->model('Company_model');
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
        $data['_title'] = 'Company Setup';
        $info=$this->Company_model->get_list(null,'company_info.*');
		    $data['company']=$info[0];
        $this->load->view('company_info_view.php', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
          case 'list':
              $m_company=$this->Company_model;
              $response['data']=$m_company->get_list(
                  null,
                  'company_info.*'
              );
              echo json_encode($response);
            break;

            case 'update' :
                $m_company=$this->Company_model;
                $company_id=$this->input->post('company_id',TRUE);
                $m_company->company_name=$this->input->post('company_name',TRUE);
                $m_company->company_address=$this->input->post('company_address',TRUE);
                $m_company->email_address=$this->input->post('email_address',TRUE);
                $m_company->mobile_no=$this->input->post('mobile_no',TRUE);
                $m_company->landline=$this->input->post('landline',TRUE);
                $m_company->tin_no=$this->input->post('tin_no',TRUE);
                $m_company->tax_type_id=$this->input->post('tax_type_id',TRUE);
                $m_company->registered_to=$this->input->post('registered_to',TRUE);
                $m_company->terminal_no=$this->input->post('terminal_no',TRUE);
                $m_company->logo_path=$this->input->post('logo_path',TRUE);
                $m_company->modify($company_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Company information successfully updated.';
                echo json_encode($response);
              break;
        }
    }
}
