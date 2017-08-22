<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CORE_Controller {

    function __construct()
    {
        parent::__construct('');
        $this->validate_session();
        //$this->load->model('Todo_list_model');
        $this->load->model('Wall_post_model');
        $this->load->model('Homepage_model');

    }




    public function index()
    {

        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation','',TRUE);
        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);
        $data['_title']='Dashboard';
        $this->load->view('homepage_view',$data);

    }


}
