<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Customers_model');
        $this->load->model('Tax_types_model');
    }

    public function index() {
        //default resources of the active view
        $data['_def_css_files']=$this->load->view('template/assets/css_files','',TRUE);
        $data['_def_js_files']=$this->load->view('template/assets/js_files','',TRUE);
        $data['_top_navigation']=$this->load->view('template/elements/top_navigation','',TRUE);
        $data['_side_navigation']=$this->load->view('template/elements/side_bar_navigation','',TRUE);
        $data['_right_navigation']=$this->load->view('template/elements/right_bar_navigation.php','',TRUE);
        // $data['_rights']=$this->load->view('template/elements/rights','',TRUE);
        $data['tax_types']=$this->Tax_types_model->get_list(
            'tax_types.is_deleted = 0'
            );

        $data['_title'] = 'Customers';

        $this->load->view('customers_view', $data);
    }

    function transaction($txn = null) {
      function replaceCharsInNumber($num, $chars) {
                       return substr((string) $num, 0, -strlen($chars)) . $chars;
                  }
        switch ($txn) {
            case 'list':
                $m_customers = $this->Customers_model;
                $response['data']=$m_customers->get_list(
                    'customers.is_deleted=FALSE',
                    'customers.*,
                    tax_types.tax_type_id,
                    tax_types.tax_type as vattype',
                    array(
                        array('tax_types','customers.vatted=tax_types.tax_type_id','left')
                        )
                    );
                echo json_encode($response);
            break;

            case 'create':
                $m_customers=$this->Customers_model;

                $m_customers->customer_name=$this->input->post('customer_name',TRUE);
                $m_customers->address=$this->input->post('address',TRUE);
                $m_customers->email_address=$this->input->post('email_address',TRUE);
                $m_customers->landline=$this->input->post('landline',TRUE);
                $m_customers->mobile_no=$this->input->post('mobile_no',TRUE);
                $m_customers->vatted = $this->input->post('vatted');
                //$m_customers->photo_path=$this->input->post('photo_path',TRUE);
                $m_customers->save();

                $customer_id=$m_customers->last_insert_id();//get last insert id

                $format = "000000";
                $temp = replaceCharsInNumber($format, $customer_id); //5069xxx
                $ecode = $temp .'-'. $today = date("Y");

                $m_customers->customer_code=$ecode;

                $m_customers->modify($customer_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Customer information successfully created.';
                $response['row_added']=$m_customers->get_list(
                    $customer_id,
                    'customers.*,
                    tax_types.tax_type_id,
                    tax_types.tax_type as vattype',
                    array(
                        array('tax_types','customers.vatted=tax_types.tax_type_id','left')
                        )
                    );
                echo json_encode($response);

            break;
            //****************************************************************************************************************
            case 'delete':
                $m_customers=$this->Customers_model;
                $customer_id=$this->input->post('customer_id',TRUE);

                $m_customers->is_deleted=1;
                if($m_customers->modify($customer_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Customer information successfully deleted.';
                    //$response['row_updated']=$m_customers->get_customer_list($customer_id);
                    echo json_encode($response);
                }



            break;
            //****************************************************************************************************************
            case 'update':
                $m_customers=$this->Customers_model;

                $customer_id=$this->input->post('customer_id',TRUE);
                $m_customers->customer_name=$this->input->post('customer_name',TRUE);
                $m_customers->address=$this->input->post('address',TRUE);
                $m_customers->email_address=$this->input->post('email_address',TRUE);
                $m_customers->landline=$this->input->post('landline',TRUE);
                $m_customers->mobile_no=$this->input->post('mobile_no',TRUE);
                $m_customers->vatted = $this->input->post('vatted');
                //$m_customers->photo_path=$this->input->post('photo_path',TRUE);
                $m_customers->modify($customer_id);

                $response['title']='Success!';
                $response['stat']='success';
                $response['msg']='Customer information successfully updated.';
                $response['row_updated']=$m_customers->get_list(
                    $customer_id,
                    'customers.*,
                    tax_types.tax_type_id,
                    tax_types.tax_type as vattype',
                    array(
                        array('tax_types','customers.vatted=tax_types.tax_type_id','left')
                        )
                    );
                echo json_encode($response);

            break;

            //****************************************************************************************************************
            case 'upload':
                $allowed = array('png', 'jpg', 'jpeg','bmp');

                $data=array();
                $files=array();
                $directory='assets/img/customer/';


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





    function response_rows($filter){
        return $this->Customers_model->get_list(
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
