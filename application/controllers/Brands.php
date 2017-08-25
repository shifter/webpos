<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brands extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Brands_model');
    }

    public function index() {
        //default resources of the active view
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation.php','',TRUE);
        $data['_rights']=$this->load->view('template/elements/rights','',TRUE);


        $data['_title'] = 'Brands';

        $this->load->view('brands_view', $data);
    }

    function transaction($txn = null) {
      function replaceCharsInNumber($num, $chars) {
                       return substr((string) $num, 0, -strlen($chars)) . $chars;
                  }
        switch ($txn) {
            case 'list':
                $m_brands = $this->Brands_model;
                $response['data']=$m_brands->get_list(array('brands.is_deleted'=>FALSE));
                echo json_encode($response);
            break;

            case 'create':
                $m_brands = $this->Brands_model;


                $m_brands->brand_name = $this->input->post('brand_name', TRUE);
                $m_brands->brand_desc = $this->input->post('brand_desc', TRUE);
                $m_brands->save();

                $brand_id = $m_brands->last_insert_id();

                $format = "000000";
                $temp = replaceCharsInNumber($format, $brand_id); //5069xxx
                $ecode = $temp .'-'. $today = date("Y");

                $m_brands->brand_code=$ecode;

                $m_brands->modify($brand_id);
                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'Brand information successfully created.';
                $response['row_added'] = $m_brands->get_list($brand_id);
                echo json_encode($response);

            break;

            case 'delete':
                $m_brands=$this->Brands_model;

                $brand_id=$this->input->post('brand_id',TRUE);

                $m_brands->is_deleted=1;
                if($m_brands->modify($brand_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Brand information successfully deleted.';

                    echo json_encode($response);
                }

            break;

            case 'update':
                $m_brands=$this->Brands_model;

                $brand_id=$this->input->post('brand_id',TRUE);
                $m_brands->brand_name = $this->input->post('brand_name', TRUE);
                $m_brands->brand_desc = $this->input->post('brand_desc', TRUE);

                $m_brands->modify($brand_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Brand information successfully updated.';
                $response['row_updated']=$m_brands->get_list($brand_id);
                echo json_encode($response);

            break;
        }
    }





    function response_rows($filter){
        return $this->Brands_model->get_list(
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
