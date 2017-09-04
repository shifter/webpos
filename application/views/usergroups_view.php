
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
        User Groups
        <small>Reference</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="Homepage"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">User Group</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header" style=""><!--right_usergroup_create-->
              <button class="btn btn-primary" id="btn_new"><i class="fa fa-plus-circle" aria-hidden="true"></i> New User Group</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive" style="overflow:hidden;">
              <table id="tbl_user_group" class="table table-bordered table-striped">
                <thead class="tbl-header">
                    <tr>
                        <th>User Group</th>
                        <th>Description</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                <tr>
                    <th>User Group</th>
                    <th>Description</th>
                    <th style="text-align:center;">Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

    <!--modal-->
        <div id="modal_user_group" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bgm-indigo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">User Group</h4>
                    </div>
                    <div class="modal-body">
                        <form id="frm_UserGroups">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">User Group :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="user_group" class="form-control" placeholder="Username" data-error-msg="Username is required." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" for="inputEmail1">Description :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-location-arrow fa-size" aria-hidden="true"></i></span>
                                                <textarea name="user_group_desc" rows="2" placeholder="Description" class="form-control" data-error-msg="Address is required."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr>
                                <div class="box box-solid">
                                    <div class="box-header with-border">
                                      <center><h3 class="box-title" style="font-weight:bold;">User Rights / Permissions</h3></center>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body">
                                      <div class="box-group" id="accordion">
                                        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->

                                        <div class="panel box box-success">
                                          <div class="box-header with-border">
                                            <h4 class="box-title">
                                              <a data-toggle="collapse" data-parent="#accordion" href="#collapsereceiving" style="" class="collapsed" aria-expanded="false">
                                                Receiving Stocks
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="collapsereceiving" class="panel-collapse collapse" aria-expanded="false">
                                            <div class="box-body">
                                              <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Allow :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="receiving" class="form-control select" name="receiving_stock" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel box box-success">
                                          <div class="box-header with-border">
                                            <h4 class="box-title">
                                              <a data-toggle="collapse" data-parent="#accordion" href="#collapsepurchaseorder" style="" class="collapsed" aria-expanded="false">
                                                Purchase Order
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="collapsepurchaseorder" class="panel-collapse collapse" aria-expanded="false">
                                            <div class="box-body">
                                              <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Allow :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="purchase_order" class="form-control select" name="purchase_order" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel box box-success">
                                          <div class="box-header with-border">
                                            <h4 class="box-title">
                                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseissuance" style="" class="collapsed" aria-expanded="false">
                                                Issuance
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="collapseissuance" class="panel-collapse collapse" aria-expanded="false">
                                            <div class="box-body">
                                              <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Allow :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="issuance" class="form-control select" name="issuance" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel box box-success">
                                          <div class="box-header with-border">
                                            <h4 class="box-title">
                                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseadjustment" style="" class="collapsed" aria-expanded="false">
                                                Adjustment
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="collapseadjustment" class="panel-collapse collapse" aria-expanded="false">
                                            <div class="box-body">
                                              <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Allow :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="adjustment" class="form-control select" name="adjustment" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="panel box box-success">
                                          <div class="box-header with-border">
                                            <h4 class="box-title">
                                              <a data-toggle="collapse" data-parent="#accordion" href="#collapsecategories" style="" class="collapsed" aria-expanded="false">
                                                Categories
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="collapsecategories" class="panel-collapse collapse" aria-expanded="false">
                                              <div class="box-body">
                                                <div class="form-group">
                                                  <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                  <div class="col-sm-9">
                                                      <div class="input-group">
                                                          <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                              <select id="category_view" class="form-control select" name="category_view" >
                                                                  <option value="0">Off</option>
                                                                  <option value="1">On</option>
                                                              </select>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="form-group" style="margin-top:5px;">
                                                  <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                  <div class="col-sm-9">
                                                      <div class="input-group" style="margin-top:5px;">
                                                          <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                              <select id="category_create" class="form-control select" name="category_create" >
                                                                  <option value="0">Off</option>
                                                                  <option value="1">On</option>
                                                              </select>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="form-group" style="margin-top:5px;">
                                                  <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                  <div class="col-sm-9">
                                                      <div class="input-group" style="margin-top:5px;">
                                                          <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                              <select id="category_update" class="form-control select" name="category_update" >
                                                                  <option value="0">Off</option>
                                                                  <option value="1">On</option>
                                                              </select>
                                                      </div>
                                                  </div>
                                                </div>
                                              <div class="form-group" style="margin-top:5px;">
                                                  <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                  <div class="col-sm-9" style="margin-top:5px;">
                                                      <div class="input-group">
                                                          <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                              <select id="category_delete" class="form-control select" name="category_delete" >
                                                                  <option value="0">Off</option>
                                                                  <option value="1">On</option>
                                                              </select>
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                          </div>
                                          <div class="panel box box-success">
                                            <div class="box-header with-border">
                                              <h4 class="box-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseunit" style="" class="collapsed" aria-expanded="false">
                                                  Unit
                                                </a>
                                              </h4>
                                            </div>
                                            <div id="collapseunit" class="panel-collapse collapse" aria-expanded="false">
                                              <div class="box-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="unit_view" class="form-control select" name="unit_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                              <div class="form-group" style="margin-top:5px;">
                                                <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group" style="margin-top:5px;">
                                                        <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                            <select id="unit_create" class="form-control select" name="unit_create" >
                                                                <option value="0">Off</option>
                                                                <option value="1">On</option>
                                                            </select>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="form-group" style="margin-top:5px;">
                                                  <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                  <div class="col-sm-9">
                                                      <div class="input-group" style="margin-top:5px;">
                                                          <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                              <select id="unit_update" class="form-control select" name="unit_update" >
                                                                  <option value="0">Off</option>
                                                                  <option value="1">On</option>
                                                              </select>
                                                      </div>
                                                  </div>
                                                </div>
                                                <div class="form-group" style="margin-top:5px;">
                                                  <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                  <div class="col-sm-9" style="margin-top:5px;">
                                                      <div class="input-group">
                                                          <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                              <select id="unit_delete" class="form-control select" name="unit_delete" >
                                                                  <option value="0">Off</option>
                                                                  <option value="1">On</option>
                                                              </select>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel box box-success">
                                          <div class="box-header with-border">
                                            <h4 class="box-title">
                                              <a data-toggle="collapse" data-parent="#accordion" href="#collapsebrands" style="" class="collapsed" aria-expanded="false">
                                                Brands
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="collapsebrands" class="panel-collapse collapse" aria-expanded="false">
                                            <div class="box-body">
                                              <div class="form-group">
                                                  <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                  <div class="col-sm-9">
                                                      <div class="input-group">
                                                          <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                              <select id="brands_view" class="form-control select" name="brands_view" >
                                                                  <option value="0">Off</option>
                                                                  <option value="1">On</option>
                                                              </select>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group" style="margin-top:5px;">
                                                  <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                  <div class="col-sm-9">
                                                      <div class="input-group" style="margin-top:5px;">
                                                          <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                              <select id="brands_create" class="form-control select" name="brands_create" >
                                                                  <option value="0">Off</option>
                                                                  <option value="1">On</option>
                                                              </select>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group" style="margin-top:5px;">
                                                  <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                  <div class="col-sm-9">
                                                      <div class="input-group" style="margin-top:5px;">
                                                          <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                              <select id="brands_update" class="form-control select" name="brands_update" >
                                                                  <option value="0">Off</option>
                                                                  <option value="1">On</option>
                                                              </select>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group" style="margin-top:5px;">
                                                  <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                  <div class="col-sm-9" style="margin-top:5px;">
                                                      <div class="input-group">
                                                          <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                              <select id="brands_delete" class="form-control select" name="brands_delete" >
                                                                  <option value="0">Off</option>
                                                                  <option value="1">On</option>
                                                              </select>
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                          </div>
                                          <div class="panel box box-success">
                                          <div class="box-header with-border">
                                            <h4 class="box-title">
                                              <a data-toggle="collapse" data-parent="#accordion" href="#collapsediscount" style="" class="collapsed" aria-expanded="false">
                                                Discount
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="collapsediscount" class="panel-collapse collapse" aria-expanded="false">
                                            <div class="box-body">
                                              <div class="form-group">
                                                  <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                  <div class="col-sm-9">
                                                      <div class="input-group">
                                                          <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                              <select id="discount_view" class="form-control select" name="discount_view" >
                                                                  <option value="0">Off</option>
                                                                  <option value="1">On</option>
                                                              </select>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group" style="margin-top:5px;">
                                                  <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                  <div class="col-sm-9">
                                                      <div class="input-group" style="margin-top:5px;">
                                                          <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                              <select id="discount_create" class="form-control select" name="discount_create" >
                                                                  <option value="0">Off</option>
                                                                  <option value="1">On</option>
                                                              </select>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group" style="margin-top:5px;">
                                                  <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                  <div class="col-sm-9">
                                                      <div class="input-group" style="margin-top:5px;">
                                                          <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                              <select id="discount_update" class="form-control select" name="discount_update" >
                                                                  <option value="0">Off</option>
                                                                  <option value="1">On</option>
                                                              </select>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group" style="margin-top:5px;">
                                                  <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                  <div class="col-sm-9" style="margin-top:5px;">
                                                      <div class="input-group">
                                                          <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                              <select id="discount_delete" class="form-control select" name="discount_delete" >
                                                                  <option value="0">Off</option>
                                                                  <option value="1">On</option>
                                                              </select>
                                                      </div>
                                                  </div>
                                              </div>
                                            </div>
                                          </div>
                                          </div>
                                          <div class="panel box box-success">
                                            <div class="box-header with-border">
                                              <h4 class="box-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsecard" style="" class="collapsed" aria-expanded="false">
                                                  Card
                                                </a>
                                              </h4>
                                            </div>
                                            <div id="collapsecard" class="panel-collapse collapse" aria-expanded="false">
                                              <div class="box-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="card_view" class="form-control select" name="card_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="margin-top:5px;">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group" style="margin-top:5px;">
                                                            <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="card_create" class="form-control select" name="card_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="margin-top:5px;">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group" style="margin-top:5px;">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="card_update" class="form-control select" name="card_update" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="margin-top:5px;">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9" style="margin-top:5px;">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="card_delete" class="form-control select" name="card_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                            </div>
                                            <div class="panel box box-success">
                                              <div class="box-header with-border">
                                                <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapsegeneric" style="" class="collapsed" aria-expanded="false">
                                                    Generic
                                                  </a>
                                                </h4>
                                              </div>
                                              <div id="collapsegeneric" class="panel-collapse collapse" aria-expanded="false">
                                                <div class="box-body">
                                                  <div class="form-group">
                                                      <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                      <div class="col-sm-9">
                                                          <div class="input-group">
                                                              <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                  <select id="generic_view" class="form-control select" name="generic_view" >
                                                                      <option value="0">Off</option>
                                                                      <option value="1">On</option>
                                                                  </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group" style="margin-top:5px;">
                                                      <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                      <div class="col-sm-9">
                                                          <div class="input-group" style="margin-top:5px;">
                                                              <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                  <select id="generic_create" class="form-control select" name="generic_create" >
                                                                      <option value="0">Off</option>
                                                                      <option value="1">On</option>
                                                                  </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group" style="margin-top:5px;">
                                                      <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                      <div class="col-sm-9">
                                                          <div class="input-group" style="margin-top:5px;">
                                                              <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                  <select id="generic_update" class="form-control select" name="generic_update" >
                                                                      <option value="0">Off</option>
                                                                      <option value="1">On</option>
                                                                  </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group" style="margin-top:5px;">
                                                      <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                      <div class="col-sm-9" style="margin-top:5px;">
                                                          <div class="input-group">
                                                              <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                  <select id="generic_delete" class="form-control select" name="generic_delete" >
                                                                      <option value="0">Off</option>
                                                                      <option value="1">On</option>
                                                                  </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="panel box box-success">
                                              <div class="box-header with-border">
                                                <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapsegiftcard" style="" class="collapsed" aria-expanded="false">
                                                    Gift Card
                                                  </a>
                                                </h4>
                                              </div>
                                              <div id="collapsegiftcard" class="panel-collapse collapse" aria-expanded="false">
                                                <div class="box-body">
                                                  <div class="form-group">
                                                      <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                      <div class="col-sm-9">
                                                          <div class="input-group">
                                                              <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                  <select id="giftcard_view" class="form-control select" name="giftcard_view" >
                                                                      <option value="0">Off</option>
                                                                      <option value="1">On</option>
                                                                  </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group" style="margin-top:5px;">
                                                      <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                      <div class="col-sm-9">
                                                          <div class="input-group" style="margin-top:5px;">
                                                              <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                  <select id="giftcard_create" class="form-control select" name="giftcard_create" >
                                                                      <option value="0">Off</option>
                                                                      <option value="1">On</option>
                                                                  </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group" style="margin-top:5px;">
                                                      <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                      <div class="col-sm-9">
                                                          <div class="input-group" style="margin-top:5px;">
                                                              <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                  <select id="giftcard_update" class="form-control select" name="giftcard_update" >
                                                                      <option value="0">Off</option>
                                                                      <option value="1">On</option>
                                                                  </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group" style="margin-top:5px;">
                                                      <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                      <div class="col-sm-9" style="margin-top:5px;">
                                                          <div class="input-group">
                                                              <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                  <select id="giftcard_delete" class="form-control select" name="giftcard_delete" >
                                                                      <option value="0">Off</option>
                                                                      <option value="1">On</option>
                                                                  </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="panel box box-success">
                                              <div class="box-header with-border">
                                                <h4 class="box-title">
                                                  <a data-toggle="collapse" data-parent="#accordion" href="#collapsevendors" style="" class="collapsed" aria-expanded="false">
                                                    Vendors
                                                  </a>
                                                </h4>
                                              </div>
                                              <div id="collapsevendors" class="panel-collapse collapse" aria-expanded="false">
                                                <div class="box-body">
                                                  <div class="form-group">
                                                      <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                      <div class="col-sm-9">
                                                          <div class="input-group">
                                                              <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                  <select id="vendors_view" class="form-control select" name="vendors_view" >
                                                                      <option value="0">Off</option>
                                                                      <option value="1">On</option>
                                                                  </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group" style="margin-top:5px;">
                                                      <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                      <div class="col-sm-9">
                                                          <div class="input-group" style="margin-top:5px;">
                                                              <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                  <select id="vendors_create" class="form-control select" name="vendors_create" >
                                                                      <option value="0">Off</option>
                                                                      <option value="1">On</option>
                                                                  </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group" style="margin-top:5px;">
                                                      <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                      <div class="col-sm-9">
                                                          <div class="input-group" style="margin-top:5px;">
                                                              <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                  <select id="vendors_update" class="form-control select" name="vendors_update" >
                                                                      <option value="0">Off</option>
                                                                      <option value="1">On</option>
                                                                  </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="form-group" style="margin-top:5px;">
                                                      <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                      <div class="col-sm-9" style="margin-top:5px;">
                                                          <div class="input-group">
                                                              <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                  <select id="vendors_delete" class="form-control select" name="vendors_delete" >
                                                                      <option value="0">Off</option>
                                                                      <option value="1">On</option>
                                                                  </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="panel box box-success">
                                            <div class="box-header with-border">
                                              <h4 class="box-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapselocation" style="" class="collapsed" aria-expanded="false">
                                                  Locations
                                                </a>
                                              </h4>
                                            </div>
                                            <div id="collapselocation" class="panel-collapse collapse" aria-expanded="false">
                                              <div class="box-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="locations_view" class="form-control select" name="locations_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="margin-top:5px;">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group" style="margin-top:5px;">
                                                            <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="locations_create" class="form-control select" name="locations_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="margin-top:5px;">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group" style="margin-top:5px;">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="locations_update" class="form-control select" name="locations_update" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="margin-top:5px;">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9" style="margin-top:5px;">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="locations_delete" class="form-control select" name="locations_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="panel box box-success">
                                            <div class="box-header with-border">
                                              <h4 class="box-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsestatus" style="" class="collapsed" aria-expanded="false">
                                                  Status
                                                </a>
                                              </h4>
                                            </div>
                                            <div id="collapsestatus" class="panel-collapse collapse" aria-expanded="false">
                                              <div class="box-body">
                                                <div class="form-group">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">View :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="status_view" class="form-control select" name="status_view" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="margin-top:5px;">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Create :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group" style="margin-top:5px;">
                                                            <span class="input-group-addon" ><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="status_create" class="form-control select" name="status_create" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="margin-top:5px;">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Edit :</label>
                                                    <div class="col-sm-9">
                                                        <div class="input-group" style="margin-top:5px;">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="status_update" class="form-control select" name="status_update" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="margin-top:5px;">
                                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Delete :</label>
                                                    <div class="col-sm-9" style="margin-top:5px;">
                                                        <div class="input-group">
                                                            <span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
                                                                <select id="status_delete" class="form-control select" name="status_delete" >
                                                                    <option value="0">Off</option>
                                                                    <option value="1">On</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                              </div>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- /.box-body -->
                                    <center>
                                        <p>
                                            You must relogin user account to apply changes.
                                        </p>
                                    </center>
                                  </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="modal-footer" >
                        <button id="btn_create" style="margin-top:5px;" type="button" class="btn bgm-green">Save
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
<?php echo $_rights; ?>

    <script type="text/javascript">
        var initializeControls=function(){
        dt=$('#tbl_user_group').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax" : "UserGroups/transaction/list",
            "columns": [
                { targets:[0],data: "user_group" },
                { targets:[1],data: "user_group_desc" },
                {

                    targets:[2],
                    render: function (data, type, full, meta){
                      var btn_edit='<button class="btn btn-success btn-xs" name="edit_info"  style="margin-left:-15px;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
                      var btn_trash='<button class="btn btn-danger btn-xs" name="remove_info" style="margin-left:5px;" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

                      return '<center>'+btn_edit+btn_trash+'</center>';
                    }
                }

            ],
            language: {
                         searchPlaceholder: "Search User Groups"
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

        /*$('input[name="file_upload[]"]').change(function(event){
            var _files=event.target.files;

            //$('#div_img_product').hide();
           // $('#div_img_loader').show();
           showSpinningProgressUpload();

            var data=new FormData();
            $.each(_files,function(key,value){
                data.append(key,value);
            });

            console.log(_files);

            $.ajax({
                url : 'UserGroups/transaction/upload',
                type : "POST",
                data : data,
                cache : false,
                dataType : 'json',
                processData : false,
                contentType : false,
                success : function(response){
                            //console.log(response);
                            //alert(response.path);
                           // $('#div_img_loader').hide();
                           // $('#div_img_user').show();
                            $.unblockUI();
                            $('img[name="img_user"]').attr('src',response.path);

                        }
            });
        });*/


    $('#btn_new').click(function(){
        $('img[name="img_user"]').attr('src','assets/img/person-icon.png');
        _txnMode="new";
        $('#modal_user_group').modal('show');
        clearFields($('#frm_UserGroups'));
        $(".select").val(0);
    });

    $('#btn_create').click(function(){
        if(validateRequiredFields($('#frm_UserGroups'))){
            if(_txnMode==="new"){
                //alert("aw");
                createUserAccount().done(function(response){
                    showNotification(response);
                    dt.row.add(response.row_added[0]).draw();
                    clearFields($('#frm_UserGroups'));
                }).always(function(){
                    $('#modal_user_group').modal('hide');
                    $.unblockUI();
                });
                return;
            }
            if(_txnMode==="edit"){
                //alert("update");
                updateUserAccount().done(function(response){
                    showNotification(response);
                    dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                    clearFields($('#frm_UserGroups'));
                }).always(function(){
                    $('#modal_user_group').modal('hide');
                    $.unblockUI();
                });
                return;
            }
        }
        else{}
    });

    $('#tbl_user_group tbody').on('click','button[name="edit_info"]',function(){
        _txnMode="edit";

        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();
        _selectedID=data.user_group_id;
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
        //JBPV
        $('select').each(function(){
            var _elem=$(this);
            $.each(data,function(name,value){
                if(_elem.attr('name')==name){
                    _elem.val(value==0 || value==null ? 0 : 1);
                }
            });
        });
        // $('#receiving').val(data.receiving_stock);
        // $('#purchase_order').val(data.purchase_order);
        // $('#issuance').val(data.issuance);
        // $('#adjustment').val(data.adjustment);
        $('#modal_user_group').modal('toggle');

    });

    $('#tbl_user_group tbody').on('click','button[name="remove_info"]',function(){
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();
        _selectedID=data.user_group_id;
        /*alert(_selectedID);*/
        delete_notif();

    });

    $('#tbl_user_group tbody').on( 'click', 'tr td.patient-details', function () {
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

    var createUserAccount=function(){
        var _data=$('#frm_UserGroups').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"UserGroups/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });

    };

    var updateUserAccount=function(){
            var _data=$('#frm_UserGroups').serializeArray();
            _data.push({name : "user_group_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"UserGroups/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
        };

    var removeUserAccount=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"UserGroups/transaction/delete",
            "data":{user_group_id : _selectedID},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var delete_notif=function(type){
            swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this file!",
                    type: "warning",
                    closeOnConfirm: false,
                    closeOnCancel: false,
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel plx!",
                },function(isConfirm){
                    if (isConfirm) {
                        swal("Deleted!", "Service Reference has been deleted.", "success");
                            removeUserAccount().done(function(response){
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

    var validateRequiredFields=function(f){
    var stat=true;
    var pword=$('#user_pword').val();
    var cpword=$('#user_confirm_pword').val();
    $('div.form-group').removeClass('has-error');

        $('div.form-group').removeClass('has-error');
        $('input[required],textarea[required],select[required]',f).each(function(){

                if($(this).is('select')){
                if($(this).val()==0 || $(this).val()==null){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('.input-group').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }

                }else{
                if($(this).val()==""){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('.input-group').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }
                if(pword!=cpword){
                    showNotification({title:"Error!",stat:"error",msg:"Pasword Doesnt Match"});
                    $('#password').addClass('has-error');
                    $('#confpassword').addClass('has-error');
                    $('#user_confirm_pword').focus();
                    stat=false;
                    return false;
                }
            }




        });

        return stat;
        };

    function format ( d ) {
        return '<div class="container-fluid" style="margin:10px;">'+
        '<div class="col-md-12">'+
        '<h3 class="boldlabel"><span class="glyphicon glyphicon-user fa-lg"></span> ' + d.full_name+ '</h3>'+
        '<p>[ Username : '+d.user_name+' ] [ Account Type : '+d.user_group+' ]</p>'+
        '<hr style="height:1px;background-color:black;"></hr>'+
        '</div>'+ //First Row//
        '<div class="row">'+
        '<div class="col-md-3">'+
        '<center><img class="loadingimg" style="margin-top:4px;width:150px;height:150px;" src="'+d.photo_path+'"></img></center>'+
        '</div>'+
        '<div class="col-md-6"><p class="nomargin"><b>Gender</b> : '+d.user_email+'</p>'+
        '<p class="nomargin"><b>Birthdate</b> : '+d.user_mobile+'</p>'+
        '<p class="nomargin"><b>Civil Status</b> : '+d.user_telephone+'</p>'+
        '<p class="nomargin"><b>Blood Type</b> : '+d.user_bdate+'</p>'+
        '<p class="nomargin"><b>Blood Type</b> : '+d.user_address+'</p>'+

        '</div>'+
        '</div>'+
        '<hr style="height:1px;background-color:black;"></hr>'+
        '</div>';
    };

        $('.date-picker').datepicker({
          autoclose: true
        });

   </script>
</body>
</html>
