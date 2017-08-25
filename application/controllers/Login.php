<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        if($this->session->user_id != '') {
            echo '<script>
            window.location.href = "Homepage";
            </script>';
        }
        else{
        }
        /*if($this->session->userdata('user_id') !== FALSE) {
            echo '<script>
            window.location.href = "Homepage";
            </script>';
        }
        else{
            redirect(base_url().'login');
        }  */
        $this->load->model('Users_model');
        $this->load->model('User_groups_model');
        /*$this->load->model('Tax_types_model');
        $this->load->model('Approval_status_model');
        $this->load->model('Order_status_model');*/

    }


    public function index()
    {
        $this->create_required_default_data();
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);

        $this->load->view('login_view',$data);

    }

    function create_required_default_data(){

        //create default user : the admin
        $m_users=$this->Users_model;
        $m_users->create_default_user();

        //create default user group : the Super User
        $m_user_groups=$this->User_groups_model;
        $m_user_groups->create_default_user_group();


    }

    function transaction($txn=null){

        switch($txn){

                //****************************************************************************
                case 'validate' :
                    $uname=$this->input->post('uname');
                    $pword=$this->input->post('pword');

                    $users=$this->Users_model;
                    $result=$users->authenticate_user($uname,$pword);

                    if($result->num_rows()>0){//valid username and pword
                        //set session data here and response data

                        $this->session->set_userdata(
                            array(
                                'user_id'=>$result->row()->user_id,
                                'user_group_id'=>$result->row()->user_group_id,
                                'user_fullname'=>$result->row()->user_fullname,
                                'user_email'=>$result->row()->user_email,
                                'user_photo'=>$result->row()->photo_path,
                                'user_group'=>$result->row()->user_group,
                                'date_created'=>$result->row()->date_created,
                            )
                        );

                        $response['stat']='success';
                        $response['msg']='User successfully authenticated.';

                        echo json_encode($response);

                    }else{ //not valid

                        $response['stat']='error';
                        $response['msg']='Invalid username or password.';
                        echo json_encode($response);

                    }

                    break;
                //****************************************************************************
                case 'logout' :
                    $this->end_session();
                //****************************************************************************


                break;

                default:


        }




    }




}
