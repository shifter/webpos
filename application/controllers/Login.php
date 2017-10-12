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
        $this->load->model('User_inout_model');
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
                        $m_user_inout = $this->User_inout_model;
                        $s_timein = 0;
                        $is_login=$m_user_inout->inout($result->row()->user_id);
                        if($is_login->num_rows()>0){
                            $s_timein=$is_login->row()->time_in;
                        }
                        else{
                            $m_user_inout->user_id=$result->row()->user_id;
                            $m_user_inout->time_in=date('Y-m-d H:i:s');
                            $s_timein=date('Y-m-d H:i:s');
                            $m_user_inout->save();
                        }
                        $this->session->set_userdata(
                            array(
                                'user_id'=>$result->row()->user_id,
                                'user_group_id'=>$result->row()->user_group_id,
                                'user_fullname'=>$result->row()->user_fullname,
                                'user_email'=>$result->row()->user_email,
                                'user_photo'=>$result->row()->photo_path,
                                'user_group'=>$result->row()->user_group,
                                'date_created'=>$result->row()->date_created,
                                'receiving_stock'=>$result->row()->receiving_stock,
                                'purchase_order'=>$result->row()->purchase_order,
                                'issuance'=>$result->row()->issuance,
                                'adjustment'=>$result->row()->adjustment,
                                'category_view'=>$result->row()->category_view,
                                'category_create'=>$result->row()->category_create,
                                'category_update'=>$result->row()->category_update,
                                'category_delete'=>$result->row()->category_delete,
                                'unit_view'=>$result->row()->unit_view,
                                'unit_create'=>$result->row()->unit_create,
                                'unit_update'=>$result->row()->unit_update,
                                'unit_delete'=>$result->row()->unit_delete,
                                'brands_view'=>$result->row()->brands_view,
                                'brands_create'=>$result->row()->brands_create,
                                'brands_update'=>$result->row()->brands_update,
                                'brands_delete'=>$result->row()->brands_delete,
                                'discount_view'=>$result->row()->discount_view,
                                'discount_create'=>$result->row()->discount_create,
                                'discount_update'=>$result->row()->discount_update,
                                'discount_delete'=>$result->row()->discount_delete,
                                'card_view'=>$result->row()->card_view,
                                'card_create'=>$result->row()->card_create,
                                'card_update'=>$result->row()->card_update,
                                'card_delete'=>$result->row()->card_delete,
                                'generic_view'=>$result->row()->generic_view,
                                'generic_create'=>$result->row()->generic_create,
                                'generic_update'=>$result->row()->generic_update,
                                'generic_delete'=>$result->row()->generic_delete,
                                'giftcard_view'=>$result->row()->giftcard_view,
                                'giftcard_create'=>$result->row()->giftcard_create,
                                'giftcard_update'=>$result->row()->giftcard_update,
                                'giftcard_delete'=>$result->row()->giftcard_delete,
                                'vendors_view'=>$result->row()->vendors_view,
                                'vendors_create'=>$result->row()->vendors_create,
                                'vendors_update'=>$result->row()->vendors_update,
                                'vendors_delete'=>$result->row()->vendors_delete,
                                'locations_view'=>$result->row()->locations_view,
                                'locations_create'=>$result->row()->locations_create,
                                'locations_update'=>$result->row()->locations_update,
                                'locations_delete'=>$result->row()->locations_delete,
                                'status_view'=>$result->row()->status_view,
                                'status_create'=>$result->row()->status_create,
                                'status_update'=>$result->row()->status_update,
                                'status_delete'=>$result->row()->status_delete,
                                'charges_view'=>$result->row()->charges_view,
                                'charges_create'=>$result->row()->charges_create,
                                'charges_update'=>$result->row()->charges_update,
                                'charges_delete'=>$result->row()->charges_delete,
                                'banks_view'=>$result->row()->banks_view,
                                'banks_create'=>$result->row()->banks_create,
                                'banks_update'=>$result->row()->banks_update,
                                'banks_delete'=>$result->row()->banks_delete,
                                'timein'=>$s_timein
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
