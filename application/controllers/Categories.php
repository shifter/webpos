<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        if($this->session->userdata('category_view') == 0) {
             redirect('../Homepage');
        }
        $this->load->model('Categories_model');
    }

    public function index() {
        //default resources of the active view
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation.php','',TRUE);
        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);


        $data['_title'] = 'Categories';

        $this->load->view('categories_view', $data);
    }

    function transaction($txn = null) {
      function replaceCharsInNumber($num, $chars) {
                       return substr((string) $num, 0, -strlen($chars)) . $chars;
                  }
        switch ($txn) {
            case 'list':
                $m_categories = $this->Categories_model;
                $response['data']=$m_categories->get_list(array('categories.is_deleted'=>FALSE));
                echo json_encode($response);
            break;

            case 'create':
                $m_categories = $this->Categories_model;

                $m_categories->category_name = $this->input->post('category_name', TRUE);
                $m_categories->category_desc = $this->input->post('category_desc', TRUE);
                $m_categories->save();

                $category_id = $m_categories->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $category_id); //5069xxx
                $ecode = $temp .'-'. $today = date("Y");

                $m_categories->category_code=$ecode;

                $m_categories->modify($category_id);
                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Category information successfully created.';
                $response['row_added'] = $m_categories->get_list($category_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_categories=$this->Categories_model;

                $category_id=$this->input->post('category_id',TRUE);

                $m_categories->is_deleted=1;
                if($m_categories->modify($category_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Category information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_categories=$this->Categories_model;

                $category_id=$this->input->post('category_id',TRUE);
                $m_categories->category_name=$this->input->post('category_name',TRUE);
                $m_categories->category_desc=$this->input->post('category_desc',TRUE);

                $m_categories->modify($category_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Category information successfully updated.';
                $response['row_updated']=$m_categories->get_list($category_id);
                echo json_encode($response);

            break;
        }
    }





    function response_rows($filter){
        return $this->Categories_model->get_list(
            $filter,

            'products.*,categories.category_name,units.unit_name,brands.brand_name,vendors.vendor_name',

            array(
                array('categories','categories.category_id=products.category_id','left'),
                array('units','units.unit_id=products.unit_id','left'),
				array('brands','brands.brand_id=products.brand_id','left'),
				array('vendors','vendors.vendor_id=products.vendor_id','left')
            )
        );
    }


}
