<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CORE_Controller
{

    function __construct() {
        parent::__construct('');
        $this->validate_session();
        $this->load->model('Products_model');
        $this->load->model('Categories_model');
        $this->load->model('Units_model');
    		$this->load->model('Inventory_model');
    		$this->load->model('Brands_model');
    		$this->load->model('Vendors_model');
        $this->load->model('Suppliers_model');
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
        $data['product_cat'] = $this->Categories_model->get_list(null,'category_id,category_name');
        $data['product_brand'] = $this->Brands_model->get_list(null,'brand_id,brand_name');
        $data['product_unit'] = $this->Units_model->get_list(null,'unit_id,unit_name');
        $data['product_vendor'] = $this->Vendors_model->get_list(null,'vendor_id,vendor_name');
        $data['product_supplier'] = $this->Suppliers_model->get_list(null,'supplier_id,supplier_name');
        $data['_title'] = 'Product Management';
        $data['tax_types']=$this->Tax_types_model->get_list(
            'tax_types.is_deleted = 0'
            );
        $this->load->view('products_view', $data);
    }

    function transaction($txn = null) {
        switch ($txn) {
            case 'list':
                $m_inventory = $this->Inventory_model;
                $response['data'] = $m_inventory->get_inventory_onhand_list();
                echo json_encode($response);
            break;

            case 'create':
                $m_products = $this->Products_model;
                $m_inventory = $this->Inventory_model;

                $m_products->supplier_id = $this->input->post('supplier_id', TRUE);
                $m_products->product_code = $this->input->post('product_code', TRUE);
                $m_products->product_desc = $this->input->post('product_desc', TRUE);
                $m_products->inventory_type = $this->input->post('inventory_type', TRUE);
                $m_products->category_id = $this->input->post('category_id', TRUE);
                $m_products->brand_id = $this->input->post('brand_id', TRUE);
                $m_products->unit_id = $this->input->post('unit_id', TRUE);
                $m_products->vendor_id = $this->input->post('vendor_id', TRUE);
                $m_products->markup_percent = $this->input->post('markup_percent', TRUE);
        				$m_products->min_stock =$this->get_numeric_value($this->input->post('min_stock', TRUE));
        				$m_products->max_stock =$this->get_numeric_value($this->input->post('max_stock', TRUE));
        				$m_products->sale_cost =$this->get_numeric_value($this->input->post('sale_cost', TRUE));
        				$m_products->quantity =$this->get_numeric_value($this->input->post('quantity', TRUE));
                $m_products->promo_cost=$this->get_numeric_value($this->input->post('promo_cost', TRUE));
                $m_products->discounted_cost=$this->get_numeric_value($this->input->post('discounted_cost',TRUE));
                $m_products->purchase_cost =$this->get_numeric_value($this->input->post('purchase_cost', TRUE));
        		    $m_products->tax_rate =$this->get_numeric_value($this->input->post('tax_rate', TRUE));
                $m_products->save();

                $product_id = $m_products->last_insert_id();

                $response['title'] = 'Success!';
                $response['stat'] = 'success';
                $response['msg'] = 'product information successfully created.';

                $response['row_added'] = $m_inventory->get_inventory_onhand_list_filter_id($product_id);
                echo json_encode($response);

                break;

            case 'delete':
                $m_products=$this->Products_model;

                $product_id=$this->input->post('product_id',TRUE);

                $m_products->is_deleted=1;
                if($m_products->modify($product_id)){
                    $response['title']='Success!';
                    $response['stat']='success';
                    $response['msg']='Product information successfully deleted.';

                    echo json_encode($response);
                }

                break;

            case 'update':
                $m_inventory = $this->Inventory_model;
                $m_products=$this->Products_model;

                $product_id=$this->input->post('product_id',TRUE);
                $m_products->product_code = $this->input->post('product_code', TRUE);
                $m_products->product_desc = $this->input->post('product_desc', TRUE);

                $m_products->category_id = $this->input->post('category_id', TRUE);
                $m_products->supplier_id = $this->input->post('supplier_id', TRUE);
                $m_products->brand_id = $this->input->post('brand_id', TRUE);
                $m_products->unit_id = $this->input->post('unit_id', TRUE);
                $m_products->vendor_id = $this->input->post('vendor_id', TRUE);
                $m_products->markup_percent = $this->input->post('markup_percent', TRUE);
        				$m_products->min_stock =$this->get_numeric_value($this->input->post('min_stock', TRUE));
        				$m_products->max_stock =$this->get_numeric_value($this->input->post('max_stock', TRUE));
  	            $m_products->sale_cost =$this->get_numeric_value($this->input->post('sale_cost', TRUE));
  	            $m_products->quantity =$this->get_numeric_value($this->input->post('quantity', TRUE));
                $m_products->purchase_cost =$this->get_numeric_value($this->input->post('purchase_cost', TRUE));
                $m_products->discounted_cost=$this->get_numeric_value($this->input->post('discounted_cost',TRUE));
                $m_products->promo_cost =$this->get_numeric_value($this->input->post('promo_cost', TRUE));
                $m_products->tax_rate =$this->get_numeric_value($this->input->post('tax_rate', TRUE));
                $m_products->modify($product_id);

                $response['title']=$m_products->product_desc;
                $response['stat']='success';
                $response['msg']='Product information successfully updated.';
                $response['row_updated']=$m_inventory->get_inventory_onhand_list_filter_id($product_id);
                echo json_encode($response);

                break;
        }
    }





    function response_rows($filter){
        return $this->Products_model->get_list(
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
