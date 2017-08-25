<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authorization extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->load->model('Users_model');
        $this->load->model('User_groups_model');

    }

    function transaction($txn=null){

        switch($txn){

                case 'chck_authorization' :

                  $pword=$this->input->post('pword');

                  $users=$this->Users_model;
                  $result=$users->authenticate_user_pwd($pword);

                    if($result->num_rows()>0){//valid username and pword
                        //set session data here and response data

                        $response['stat']='success';
                        $response['msg']='Successfully authenticated.';

                        echo json_encode($response);

                    }else{ //not valid
                        $response['stat']='error';
                        $response['msg']='You are not Authorized.';
                        echo json_encode($response);
                    }

                break;
        }
    }
}
