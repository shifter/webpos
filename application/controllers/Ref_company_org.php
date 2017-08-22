<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ref_company_org extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->load->model('Ref_company_org_model');
        $this->validate_session();
    }


    public function index()
    {

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $this->load->view('ref_company_org_view',$data);

    }

    
    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->Ref_company_org_model->get_list(array('organization.is_deleted'=>FALSE));
                echo json_encode($response);
                break;
            case 'create':
                $m_company_org = $this->Ref_company_org_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('org_name', 'Organizaton Name', 'strip_tags|xss_clean|is_unique[organization.org_name]|required');  
                if ($this->form_validation->run() == TRUE) 
                {            
                $m_company_org->org_name = $this->input->post('org_name', TRUE);
                $m_company_org->org_address = $this->input->post('org_address', TRUE);
                $m_company_org->org_contact_person = $this->input->post('org_contact_person', TRUE);
                $m_company_org->org_telephone = $this->input->post('org_telephone', TRUE);
                $m_company_org->org_mobile = $this->input->post('org_mobile', TRUE);
                $m_company_org->org_email = $this->input->post('org_email', TRUE);
                $m_company_org->created_by = $this->session->user_id;
                $m_company_org->save();

                $org_id = $m_company_org->last_insert_id();


                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Company/Organizaton successfully created.';

                $response['row_added'] = $this->Ref_company_org_model->get_list($org_id);
                }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
               
                }
                echo json_encode($response);

                break;

            case 'delete':
                $m_company_org=$this->Ref_company_org_model;

                $org_id =$this->input->post('org_id',TRUE);
                
                $m_company_org->is_deleted=1;
                if($m_company_org ->modify($org_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Company/Organizaton information successfully deleted.';

                    echo json_encode($response);
                }

                break;

           

            case 'update':
                $m_company_org = $this->Ref_company_org_model;
                $this->load->library('form_validation');
                $this->load->helper('security');
                $this->form_validation->set_rules('org_name', 'Organizaton Name', 'strip_tags|xss_clean|required');  
                if ($this->form_validation->run() == TRUE) 
                {      
                    $org_id = $this->input->post('org_id', TRUE);      
                    $m_company_org->org_name = $this->input->post('org_name', TRUE);
                    $m_company_org->org_address = $this->input->post('org_address', TRUE);
                    $m_company_org->org_contact_person = $this->input->post('org_contact_person', TRUE);
                    $m_company_org->org_telephone = $this->input->post('org_telephone', TRUE);
                    $m_company_org->org_mobile = $this->input->post('org_mobile', TRUE);
                    $m_company_org->org_email = $this->input->post('org_email', TRUE);
                    $m_company_org->modified_by = $this->session->user_id;
                    $m_company_org->modify($org_id);

                    $response['title']='Success';
                    $response['stat']='success';
                    $response['msg']='Company/Organizaton information successfully updated.';
                    $response['row_updated']=$this->Ref_company_org_model->get_list($org_id);
                }
                else
                {
                    $response['title'] = 'Error!';
                    $response['stat'] = 'error';
                    $response['msg'] = validation_errors();
               
                }
                echo json_encode($response);

                break;
        }

    }


}
