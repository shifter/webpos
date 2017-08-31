<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserGroups extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('User_groups_model');
        $this->load->model('User_group_rights_model');


    }


    public function index()
    {

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation','',TRUE);
        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);
        $data['_title']='User Group';
        $this->load->view('usergroups_view',$data);

    }


    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $response['data']=$this->User_groups_model->get_list(
                    array('user_groups.is_deleted'=>0),
                    'user_groups.*,user_groups_permission.*',
                    array(
                            array('user_groups_permission','user_groups_permission.user_group_id=user_groups.user_group_id','left'),
                        )
                    );
                echo json_encode($response);
                break;

            case 'create':
                $m_user_group=$this->User_groups_model;
                $m_user_group_rights=$this->User_group_rights_model;
                $m_user_group->user_group=$this->input->post('user_group',TRUE);
                $m_user_group->user_group_desc=$this->input->post('user_group_desc',TRUE);
                $m_user_group->save();
                $user_group_id=$m_user_group->last_insert_id();
                foreach($_POST as $key => $val){
                    if($key =="user_group" || $key =="user_group_desc"){

                    }
                    else{
                        $m_user_group_rights->$key=$this->input->post($key);
                    }
                }
                $m_user_group_rights->user_group_id=$user_group_id;
                // $m_user_group_rights->receiving_stock=$this->input->post('receiving',TRUE);
                // $m_user_group_rights->purchase_order=$this->input->post('purchase_order',TRUE);
                // $m_user_group_rights->issuance=$this->input->post('issuance',TRUE);
                // $m_user_group_rights->adjustment=$this->input->post('adjustment',TRUE);
                $m_user_group_rights->save();

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='User account information successfully created.';
                $response['row_added']=$m_user_group->get_list($user_group_id,
                    'user_groups.*,user_rights.*',
                    array(
                            array('user_rights','user_rights.user_group_id=user_groups.user_group_id','left'),
                        )
                    );
                echo json_encode($response);

                break;
            //****************************************************************************************************************
            case 'update' :
                $m_user_group=$this->User_groups_model;
                $m_user_group_rights=$this->User_group_rights_model;

                $user_group_id=$this->input->post('user_group_id',TRUE);
                $m_user_group->user_group=$this->input->post('user_group',TRUE);
                $m_user_group->user_group_desc=$this->input->post('user_group_desc',TRUE);
                $m_user_group->modify($user_group_id);

                $m_user_group_rights->delete_via_fk($user_group_id);

                foreach($_POST as $key => $val){
                    if($key =="user_group" || $key =="user_group_desc"){

                    }
                    else{
                        $m_user_group_rights->$key=$this->input->post($key);
                    }
                }
                // $m_user_group_rights->user_group_id=$user_group_id;
                // $m_user_group_rights->receiving_stock=$this->input->post('receiving',TRUE);
                // $m_user_group_rights->purchase_order=$this->input->post('purchase_order',TRUE);
                // $m_user_group_rights->issuance=$this->input->post('issuance',TRUE);
                // $m_user_group_rights->adjustment=$this->input->post('adjustment',TRUE);
                $m_user_group_rights->save();

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='User Group information successfully updated.';
                $response['row_updated']=$m_user_group->get_list(
                    $user_group_id,
                    'user_groups.*,user_rights.*',
                    array(
                            array('user_rights','user_rights.user_group_id=user_groups.user_group_id','left'),
                        )
                    );
                echo json_encode($response);

                break;
            //****************************************************************************************************************
            case 'delete':
                $m_user_group=$this->User_groups_model;
                $user_group_id=$this->input->post('user_group_id',TRUE);

                $m_user_group->is_deleted=1;
                if($m_user_group->modify($user_group_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='User account information successfully deleted.';
                    echo json_encode($response);
                }
                break;
        }

    }


}
