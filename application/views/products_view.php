
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $_title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $_def_css_files ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <?php echo $_top_navigation; ?>
    <?php echo $_side_navigation; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products
        <small>Management</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="Homepage"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Products</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header" style="">
              <button class="btn btn-primary" id="btn_new"><i class="fa fa-barcode" aria-hidden="true"></i> New Products</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tbl_products" class="table table-bordered table-striped">
                <thead class="tbl-header">
                    <tr>
                        <th></th>
                        <th>Barcode</th>
                        <th>Description</th>
                        <th>SRP</th>
                        <th>On Hand</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>Barcode</th>
                        <th>Description</th>
                        <th>SRP</th>
                        <th>On Hand</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

    <!--modal-->
        <div id="modal_products" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" style="width:65% !important;">
                <div class="modal-content">
                    <div class="modal-header bgm-indigo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">Products : <transaction class="transaction"></transaction></h4>
                    </div>
                    <div class="modal-body">
                        <form id="frm_products">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Barcode  :</label>
                                    <div class="col-sm-8">
                                         <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-barcode fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="product_code" class="form-control" placeholder="Barcode" data-error-msg="Barcode is required." required>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Description  :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-sticky-note fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="product_desc" class="form-control" placeholder="Description" data-error-msg="Description is required." required>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">SRP  :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-money fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="sale_cost" class="form-control numeric" placeholder="SRP" data-error-msg="SRP is required." required>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Purchase Cost  :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-money fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="purchase_cost" class="form-control numeric" placeholder="Purchase Cost" data-error-msg="Purchase Cost is required." required>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Promo Cost  :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-money fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="promo_cost" class="form-control numeric" placeholder="Promo Cost" data-error-msg="Promo Cost is required." required>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Discounted Cost  :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-money fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="discounted_cost" class="form-control numeric" placeholder="Discounted Cost" data-error-msg="Discounted Cost is required." required>
                                        </div>
                                    </div>
                                </div>
                              </div>  
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">VAT :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-percent fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="tax_rate" class="form-control numeric" placeholder="VAT">
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Mark Up % :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-percent fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="markup_percent" class="form-control numeric" placeholder="Mark Up %">
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Min Stock:</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-percent fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="min_stock" class="form-control numeric" placeholder="Min Stock">
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Max Stock:</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-percent fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="max_stock" class="form-control numeric" placeholder="Max Stock">
                                        </div>
                                    </div>
                                </div>                             
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Inventory Type :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-file fa-size" aria-hidden="true"></i></span>
                                            <select name="inventory_type" class="form-control" data-error-msg="Inventory Type is required." required>
                                              <option value="Inventory">Inventory</option>
                                              <option value="Non-Inventory">Non-Inventory</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Category :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-list fa-size" aria-hidden="true"></i></span>
                                            <select name="category_id" id="cbo_categories">
                                                <option value="newcategory" class="">[ Create New Category ]</option>
                                                <?php foreach($product_cat as $product_cat){ ?>
                                                    <option value="<?php echo $product_cat->category_id; ?>"><?php echo $product_cat->category_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Brand :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-list fa-size" aria-hidden="true"></i></span>
                                            <select name="brand_id" id="cbo_brand">
                                                <option value="newbrand">[ Create New Brand ]</option>
                                                <?php foreach($product_brand as $product_brand){ ?>
                                                    <option value="<?php echo $product_brand->brand_id; ?>"><?php echo $product_brand->brand_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Unit :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-list fa-size" aria-hidden="true"></i></span>
                                            <select name="unit_id" id="cbo_unit">
                                                <option value="newunit">[ Create New Unit ]</option>
                                                <?php foreach($product_unit as $product_unit){ ?>
                                                    <option value="<?php echo $product_unit->unit_id; ?>"><?php echo $product_unit->unit_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Vendor :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-list fa-size" aria-hidden="true"></i></span>
                                            <select name="vendor_id" id="cbo_vendor">
                                                <option value="newvendor">[ Create New Vendor ]</option>
                                                <?php foreach($product_vendor as $product_vendor){ ?>
                                                    <option value="<?php echo $product_vendor->vendor_id; ?>"><?php echo $product_vendor->vendor_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Supplier :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="pro-icon"><i class="fa fa-list fa-size" aria-hidden="true"></i></span>
                                            <select name="supplier_id" id="cbo_supplier">
                                                <option value="newsupplier">[ Create New Supplier ]</option>
                                                <?php foreach($product_supplier as $product_supplier){ ?>
                                                    <option value="<?php echo $product_supplier->supplier_id; ?>"><?php echo $product_supplier->supplier_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
                                <!-- <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Service Desc :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-barcode fa-size" aria-hidden="true"></i></span>
                                                <select name="ref_service_desc_id" class="form-control" placeholder="Service Description" data-error-msg="Service Description is required." required>
                                                    <?php
                                                        foreach($service_desc as $row)
                                                        {
                                                            echo '<option value="'.$row->ref_service_desc_id  .'">'.$row->service_desc.'</option>';
                                                        }
                                                    ?>
                                               </select>
                                        </div>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                    </form>
                    <div class="modal-footer" >
                        <button id="btn_create" style="margin-top:5px;" type="button" class="btn btn-primary">Save
                        </button>
                        <button type="button" style="margin-top:5px;" class="btn bgm-red" data-dismiss="modal">Close
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
  </div>
  <div id="modal_new_category" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
      <div class="modal-dialog modal-md">
          <div class="modal-content"><!---content--->
              <div class="modal-header">
                  <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                  <h4 class="modal-title"><span id="modal_mode"> </span>New Category</h4>
              </div>
              <div class="modal-body">
                  <form id="frm_category_new">
                      <div class="form-group">
                          <label>* Category Name :</label>
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-tags"></i>
                              </span>
                              <input type="text" name="category_name" class="form-control" placeholder="Category Name" data-error-msg="Category name is required." required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Description :</label>
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-file"></i>
                              </span>
                              <textarea name="category_desc" class="form-control" placeholder="Category Description"></textarea>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button id="btn_create_category" type="button" class="btn btn-primary"  style="text-transform: capitalize;"><span class=""></span> Create</button>
                  <button id="btn_close_category" type="button" class="btn btn-default" data-dismiss="modal" style="text-transform: capitalize;">Cancel</button>
              </div>
          </div><!---content---->
      </div>
  </div><!---modal-->
  <div id="modal_new_brand" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
      <div class="modal-dialog modal-md">
          <div class="modal-content"><!---content--->
              <div class="modal-header">
                  <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                  <h4 class="modal-title"><span id="modal_mode"> </span>New Brand</h4>
              </div>
              <div class="modal-body">
                  <form id="frm_brand_new">
                      <div class="form-group">
                          <label>* Brand Name :</label>
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-tags"></i>
                              </span>
                              <input type="text" name="brand_name" class="form-control" placeholder="Brand Name" data-error-msg="Brand name is required." required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Description :</label>
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-file"></i>
                              </span>
                              <textarea name="brand_desc" class="form-control" placeholder="Brand Description"></textarea>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button id="btn_create_brand" type="button" class="btn btn-primary"  style="text-transform: capitalize;"><span class=""></span> Create</button>
                  <button id="btn_close_brand" type="button" class="btn btn-default" data-dismiss="modal" style="text-transform: capitalize;">Cancel</button>
              </div>
          </div><!---content---->
      </div>
  </div><!---modal-->
  <div id="modal_new_unit" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
      <div class="modal-dialog modal-md">
          <div class="modal-content"><!---content--->
              <div class="modal-header">
                  <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                  <h4 class="modal-title"><span id="modal_mode"> </span>New Unit</h4>
              </div>
              <div class="modal-body">
                  <form id="frm_unit_new">
                      <div class="form-group">
                          <label>* Unit Name :</label>
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-tags"></i>
                              </span>
                              <input type="text" name="unit_name" class="form-control" placeholder="Unit Name" data-error-msg="Unit name is required." required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Description :</label>
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-file"></i>
                              </span>
                              <textarea name="unit_desc" class="form-control" placeholder="Unit Description"></textarea>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button id="btn_create_unit" type="button" class="btn btn-primary"  style="text-transform: capitalize;"><span class=""></span> Create</button>
                  <button id="btn_close_unit" type="button" class="btn btn-default" data-dismiss="modal" style="text-transform: capitalize;">Cancel</button>
              </div>
          </div><!---content---->
      </div>
  </div><!---modal-->
  <div id="modal_new_vendor" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
      <div class="modal-dialog modal-md">
          <div class="modal-content"><!---content--->
              <div class="modal-header">
                  <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                  <h4 class="modal-title"><span id="modal_mode"> </span>New Vendor</h4>
              </div>
              <div class="modal-body">
                  <form id="frm_vendor_new">
                      <div class="form-group">
                          <label>* Vendor Name :</label>
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-tags"></i>
                              </span>
                              <input type="text" name="vendor_name" class="form-control" placeholder="Vendor Name" data-error-msg="Vendor name is required." required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Description :</label>
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-file"></i>
                              </span>
                              <textarea name="vendor_desc" class="form-control" placeholder="Vendor Description"></textarea>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button id="btn_create_vendor" type="button" class="btn btn-primary"  style="text-transform: capitalize;"><span class=""></span> Create</button>
                  <button id="btn_close_vendor" type="button" class="btn btn-default" data-dismiss="modal" style="text-transform: capitalize;">Cancel</button>
              </div>
          </div><!---content---->
      </div>
  </div><!---modal-->
  <div id="modal_new_supplier" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
      <div class="modal-dialog modal-md">
          <div class="modal-content"><!---content--->
              <div class="modal-header">
                  <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                  <h4 class="modal-title"><span id="modal_mode"> </span>New Supplier</h4>
              </div>
              <div class="modal-body">
                  <form id="frm_supplier_new">
                      <div class="form-group">
                          <label>* Supplier Name :</label>
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-tags"></i>
                              </span>
                              <input type="text" name="supplier_name" class="form-control" placeholder="Supplier Name" data-error-msg="Supplier name is required." required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label> Contact Person :</label>
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-phone"></i>
                              </span>
                              <input type="text" name="contact_person" class="form-control" placeholder="Contact Person">
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button id="btn_create_supplier" type="button" class="btn btn-primary"  style="text-transform: capitalize;"><span class=""></span> Create</button>
                  <button id="btn_close_supplier" type="button" class="btn btn-default" data-dismiss="modal" style="text-transform: capitalize;">Cancel</button>
              </div>
          </div><!---content---->
      </div>
  </div><!---modal-->
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> Modified by JBPV
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

<?php echo $_right_navigation ?>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php echo $_def_js_files ?>
<script src="assets/plugins/formatter/autoNumeric.js" type="text/javascript"></script>
<script src="assets/plugins/formatter/accounting.js" type="text/javascript"></script>
<?php echo $_rights; ?>

    <script type="text/javascript">
    var _cboCategories; var _cboBrand; var _cboUnit; var _cboVendor; var _cboSuppliers;
        var initializeControls=function(){
        dt=$('#tbl_products').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax" : "Products/transaction/list",
            "columns": [
                {
                    "targets": [0],
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },
                { targets:[1],data: "product_code" },
                { targets:[2],data: "product_desc" },
                { targets:[3],data: "sale_cost" },
                { targets:[4],data: "stock_onhand" },
                {

                    targets:[5],
                    render: function (data, type, full, meta){
                      var btn_edit='<button class="btn btn-success btn-xs" name="edit_info"  style="margin-left:-15px;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
                      var btn_trash='<button class="btn btn-danger btn-xs" name="remove_info" style="margin-left:5px;" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

                      return '<center>'+btn_edit+btn_trash+'</center>';
                    }
                }

            ],
            language: {
                         searchPlaceholder: "Search Products"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }
        });

    }();

    $('#btn_browse').click(function(event){
            event.preventDefault();
            $('input[name="file_upload[]"]').click();
    });

    _cboCategories=$("#cbo_categories").select2({
        placeholder: "Please select Category.",
        allowClear: true
    });

    _cboCategories.select2('val',null);

    _cboCategories.on("select2:select", function (e) {

    var i=$(this).select2('val');
      if(i=="newcategory"){
              _cboCategories.select2('val',null)
              $('#modal_new_category').modal('show');
              clearFields($('#modal_new_category').find('form'));
      }
    });

    _cboBrand=$("#cbo_brand").select2({
        placeholder: "Please select Brand.",
        allowClear: true
    });

    _cboBrand.select2('val',null);

    _cboBrand.on("select2:select", function (e) {

    var i=$(this).select2('val');
    if(i=="newbrand"){
            _cboBrand.select2('val',null)
            $('#modal_new_brand').modal('show');
            clearFields($('#modal_new_brand').find('form'));
    }
    });

    _cboUnit=$("#cbo_unit").select2({
        placeholder: "Please select Unit.",
        allowClear: true
    });

    _cboUnit.select2('val',null);

    _cboUnit.on("select2:select", function (e) {

    var i=$(this).select2('val');
    if(i=="newunit"){
            _cboUnit.select2('val',null)
            $('#modal_new_unit').modal('show');
            clearFields($('#modal_new_unit').find('form'));
    }
    });

    _cboVendor=$("#cbo_vendor").select2({
        placeholder: "Please select Vendor.",
        allowClear: true
    });

    _cboVendor.select2('val',null);

    _cboVendor.on("select2:select", function (e) {

    var i=$(this).select2('val');
    if(i=="newvendor"){
            _cboVendor.select2('val',null)
            $('#modal_new_vendor').modal('show');
            clearFields($('#modal_new_vendor').find('form'));
    }
    });

    _cboSuppliers=$("#cbo_supplier").select2({
        placeholder: "Please select Supplier.",
        allowClear: true
    });

    _cboSuppliers.select2('val',null);

    _cboSuppliers.on("select2:select", function (e) {

    var i=$(this).select2('val');
    if(i=="newsupplier"){
            _cboSuppliers.select2('val',null)
            $('#modal_new_supplier').modal('show');
            clearFields($('#modal_new_supplier').find('form'));
    }
    });

    $('#btn_new').click(function(){
        _txnMode="new";
        $('.transaction').text('New');
        $('#modal_products').modal('show');
        clearFields($('#frm_products'));
        $('#cbo_categories').select2('val','');
        $('#cbo_brand').select2('val','');
        $('#cbo_unit').select2('val','');
        $('#cbo_vendor').select2('val','');
        $('#cbo_supplier').select2('val','');
    });

    $('#btn_create').click(function(){
            if(validateRequiredFields($('#frm_products'))){
                if(_txnMode==="new"){
                    //alert("aw");
                    createProducts().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_products'))
                    }).always(function(){
                        $('#modal_products').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnMode==="edit"){
                    //alert("update");
                    updateProducts().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                    }).always(function(){
                        $('#modal_products').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
            }
            else{}
        });

      $('#btn_create_category').click(function(){

          var btn=$(this);

          if(validateRequiredFields($('#frm_category_new'))){
              var data=$('#frm_category_new').serializeArray();

              $.ajax({
                  "dataType":"json",
                  "type":"POST",
                  "url":"Categories/transaction/create",
                  "data":data,
                  "beforeSend" : function(){
                      showSpinningProgress(btn);
                  }
              }).done(function(response){
                  showNotification(response);
                  $('#modal_new_category').modal('hide');

                  var _category=response.row_added[0];
                  $('#cbo_categories').append('<option value="'+_category.category_id+'" selected>'+_category.category_name+'</option>');
                  $('#cbo_categories').select2('val',_category.category_id);

              }).always(function(){
                  showSpinningProgress(btn);
              });
          }

      });

      $('#btn_create_brand').click(function(){

          var btn=$(this);

          if(validateRequiredFields($('#frm_brand_new'))){
              var data=$('#frm_brand_new').serializeArray();

              $.ajax({
                  "dataType":"json",
                  "type":"POST",
                  "url":"Brands/transaction/create",
                  "data":data,
                  "beforeSend" : function(){
                      showSpinningProgress(btn);
                  }
              }).done(function(response){
                  showNotification(response);
                  $('#modal_new_brand').modal('hide');

                  var _brand=response.row_added[0];
                  $('#cbo_brand').append('<option value="'+_brand.brand_id+'" selected>'+_brand.brand_name+'</option>');
                  $('#cbo_brand').select2('val',_brand.brand_id);

              }).always(function(){
                  showSpinningProgress(btn);
              });
          }

      });

      $('#btn_create_unit').click(function(){

          var btn=$(this);

          if(validateRequiredFields($('#frm_unit_new'))){
              var data=$('#frm_unit_new').serializeArray();

              $.ajax({
                  "dataType":"json",
                  "type":"POST",
                  "url":"Unit/transaction/create",
                  "data":data,
                  "beforeSend" : function(){
                      showSpinningProgress(btn);
                  }
              }).done(function(response){
                  showNotification(response);
                  $('#modal_new_unit').modal('hide');

                  var _unit=response.row_added[0];
                  $('#cbo_unit').append('<option value="'+_unit.unit_id+'" selected>'+_unit.unit_name+'</option>');
                  $('#cbo_unit').select2('val',_unit.unit_id);

              }).always(function(){
                  showSpinningProgress(btn);
              });
          }

      });

      $('#btn_create_vendor').click(function(){

          var btn=$(this);

          if(validateRequiredFields($('#frm_vendor_new'))){
              var data=$('#frm_vendor_new').serializeArray();

              $.ajax({
                  "dataType":"json",
                  "type":"POST",
                  "url":"Vendors/transaction/create",
                  "data":data,
                  "beforeSend" : function(){
                      showSpinningProgress(btn);
                  }
              }).done(function(response){
                  showNotification(response);
                  $('#modal_new_vendor').modal('hide');

                  var _vendor=response.row_added[0];
                  $('#cbo_vendor').append('<option value="'+_vendor.vendor_id+'" selected>'+_vendor.vendor_name+'</option>');
                  $('#cbo_vendor').select2('val',_vendor.vendor_id);

              }).always(function(){
                  showSpinningProgress(btn);
              });
          }

      });

      $('#btn_create_supplier').click(function(){

          var btn=$(this);

          if(validateRequiredFields($('#frm_supplier_new'))){
              var data=$('#frm_supplier_new').serializeArray();

              $.ajax({
                  "dataType":"json",
                  "type":"POST",
                  "url":"Suppliers/transaction/create",
                  "data":data,
                  "beforeSend" : function(){
                      showSpinningProgress(btn);
                  }
              }).done(function(response){
                  showNotification(response);
                  $('#modal_new_supplier').modal('hide');

                  var _supplier=response.row_added[0];
                  $('#cbo_supplier').append('<option value="'+_supplier.supplier_id+'" selected>'+_supplier.supplier_name+'</option>');
                  $('#cbo_supplier').select2('val',_supplier.supplier_id);

              }).always(function(){
                  showSpinningProgress(btn);
              });
          }

      });

    $('#tbl_products tbody').on('click','button[name="edit_info"]',function(){
        _txnMode="edit";
        $('.transaction').text('Edit');
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();
        _selectedID=data.product_id;

        //$('#emp_exemptpagibig').val(data.emp_exemptphilhealth);

       // alert($('input[name="tax_exempt"]').length);
        //$('input[name="tax_exempt"]').val(0);
        //$('input[name="inventory"]').val(data.is_inventory);

        $('input,textarea').each(function(){
            var _elem=$(this);
            $.each(data,function(name,value){
                if(_elem.attr('name')==name){
                    _elem.val(value);
                }
            });
        });


        $('#cbo_categories').val(data.category_id).trigger("change")
        $('#cbo_brand').val(data.brand_id).trigger("change")
        $('#cbo_unit').val(data.unit_id).trigger("change")
        $('#cbo_vendor').val(data.vendor_id).trigger("change")
        $('#cbo_supplier').val(data.supplier_id).trigger("change")
        // _cboCategories.select2('val',data.category_id);
        // _cboBrand.select2('val',data.brand_id);
        // _cboUnit.select2('val',data.unit_id);
        // _cboVendor.select2('val',data.vendor_id);

        $('#modal_products').modal('toggle');

    });

    $('#tbl_products tbody').on('click','button[name="remove_info"]',function(){
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();
        _selectedID=data.product_id;
        delete_notif();

    });

    $('#tbl_products tbody').on( 'click', 'tr td.details-control', function () {
            var detailRows = [];
            var tr = $(this).closest('tr');
            var row = dt.row( tr );
            var idx = $.inArray( tr.attr('id'), detailRows );

            if ( row.child.isShown() ) {
                tr.removeClass( 'details' );
                row.child.hide();

                detailRows.splice( idx, 1 );
            }
            else {
                tr.addClass( 'details' );

                row.child( format( row.data() ) ).show();

                if ( idx === -1 ) {
                    detailRows.push( tr.attr('id') );
                }
            }
        } );

    var createProducts=function(){
        var _data=$('#frm_products').serializeArray();
        /*_data.push({name : "photo_path" ,value : $('img[name="img_user"]').attr('src')});*/

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Products/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });

    };

    var updateProducts=function(){
            var _data=$('#frm_products').serializeArray();
            _data.push({name : "product_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Products/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
        };

    var removeProducts=function(){
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Products/transaction/delete",
                "data":{product_id : _selectedID},
                "beforeSend": showSpinningProgress($('#'))
            });
        };

    var delete_notif=function(type){
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this file!",
                    type: "warning",
                    closeOnConfirm: true,
                    closeOnCancel: true,
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel plx!",
                },function(isConfirm){
                    if (isConfirm) {
                            removeProducts().done(function(response){
                            showNotification(response);
                                dt.row(_selectRowObj).remove().draw();
                             //   alert(data.ref_service_id);
                           $.unblockUI();
                            });

                    } else {
                        swal("Cancelled", "Your file is safe :)", "error");
                    }
                });
    };

    var success_notif=function(type){
        swal("Good job!", "Sucessfully "+type, "success");
    };

    var showNotification=function(obj){
        PNotify.removeAll();
        new PNotify({
            title:  obj.title,
            text:  obj.msg,
            type:  obj.stat
        });
    };

    var clearFields=function(f){
        $('input,textarea',f).val('');
        $(f).find('input:first').focus();
        $('#card_type').val('');
        $('#points').val('');
        $('#description ').val('');
    };


    function format ( d ) {
        return '<div class="card">'+
                  '<div class="card-header bgm-green">'+
                      '<h2 style="font-weight:bold;font-size:18pt;">Notes'+
                      '</h2>'+
                    '</div>'+
                    '<div class="card-body card-padding">'+
                        d.note+
                    '</div>'+
                '</div>'
        /*'<h3 class="boldlabel">Notes :</h3>'+
        '<hr style="height:1px;background-color:black;"></hr>'+
        '<p class="boldlabel">'+d.ref_note+'</p>'*/
    };

    $('.date-picker').datepicker({
      autoclose: true
    });

    $('.numeric').autoNumeric('init');
    var showSpinningProgress=function(e){
        $(e).find('span').toggleClass('glyphicon glyphicon-refresh spinning');
    };

 </script>
</body>
</html>
