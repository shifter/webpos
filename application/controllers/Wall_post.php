<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wall_post extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Wall_post_model');
    }

    public function index() {

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        /*$data['todo_list']=$this->Todo_list_model->get_list(array('todo_list.is_deleted'=>FALSE));*/
        $data['_title']='Todo';

        $this->load->view('user_view', $data);
    }

    function transaction($txn = null) {

        switch($txn){
            case 'list':/*
                $table_row_count = $this->db->count_all('wall_post');
                if($wall_count<){*/
                    /*$limit=$this->input->post('limit',TRUE);
                    $query = $this->db->query('SELECT wall_post.*,CONCAT(user_accounts.user_fname," ",user_accounts.user_mname," ",user_accounts.user_lname) as fullname,user_accounts.photo_path FROM wall_post LEFT JOIN user_accounts ON wall_post.user_id=user_accounts.user_id ORDER BY wall_post_id DESC LIMIT '.$limit);
                    $response['data']=$query->result();*/

                    $response['data']=$this->Wall_post_model->get_list(
                    null,
                    'wall_post.*,CONCAT(user_accounts.user_fname," ",user_accounts.user_mname," ",user_lname) as fullname,user_accounts.photo_path,
                    DATE_FORMAT(wall_post.date, "%M %D, %Y %H:%i:%s") as `readable`',
                    array(
                            array('user_accounts','user_accounts.user_id=wall_post.user_id','left'),
                        ),
                    'wall_post_id desc'
                    );
                
                echo json_encode($response);
                break;

            case 'count':
                $table_row_count = $this->db->count_all('wall_post');
                
                echo $response=$table_row_count;
                break;

            case 'create':
                $m_wallpost=$this->Wall_post_model;
                $m_wallpost->post_content=$this->input->post('post_content',TRUE);
                $m_wallpost->user_id = $this->session->user_id;
                $m_wallpost->save();

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Post Successfull.';
                echo json_encode($response);

                break;
            //****************************************************************************************************************

            //****************************************************************************************************************
            case 'update':
                $m_todo=$this->Todo_list_model;
                $todo_list_id=$this->input->post('todo_list_id',TRUE);
                $is_done=$this->input->post('is_done',TRUE);

                $m_todo->is_done=$is_done;
                if($m_todo->modify($todo_list_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Todo Checklist successfully updated.';
                    echo json_encode($response);
                }
                break;

            case 'delete':
                $m_todo=$this->Todo_list_model;
                $todo_list_id=$this->input->post('todo_list_id',TRUE);

                $m_todo->is_deleted=1;
                if($m_todo->modify($todo_list_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Todo Checklist successfully deleted.';
                    echo json_encode($response);
                }
                break;

            case 'upload':
                $allowed = array('png', 'jpg', 'jpeg','bmp');

                $data=array();
                $files=array();
                $directory='assets/img/user/';

                foreach($_FILES as $file){

                    $server_file_name=uniqid('');
                    $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
                    $file_path=$directory.$server_file_name.'.'.$extension;
                    $orig_file_name=$file['name'];

                    if(!in_array(strtolower($extension), $allowed)){
                        $response['title']='Invalid!';
                        $response['stat']='error';
                        $response['msg']='Image is invalid. Please select a valid photo!';
                        die(json_encode($response));
                    }

                    if(move_uploaded_file($file['tmp_name'],$file_path)){
                        $response['title']='Success!';
                        $response['stat']='success';
                        $response['msg']='Image successfully uploaded.';
                        $response['path']=$file_path;
                        echo json_encode($response);
                    }
                }
                break;

        }


    }
}
