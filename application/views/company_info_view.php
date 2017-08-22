
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
  <style>

  </style>
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
        <span class="fa fa-wrench"></span> Company Information
      </h1>
      <ol class="breadcrumb">
        <li><a href="Homepage"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Company Information</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                  <div class="col-md-12">
                          <div class="panel panel-default">
                              <div class="panel-body">
                                 <form id="frm_company" role="form" class="form-horizontal row-border">
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"><span style="color: red;">*</span> Company Name:</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                      <i class="fa fa-bank" aria-hidden="true"></i>
                                                  </span>
                                                       <input type="hidden" name="company_id" value="<?php echo $company->company_id; ?>">
                                                 <input type="text" name="company_name" value="<?php echo $company->company_name; ?>" class="form-control" placeholder="Company Name" data-error-msg="Company Name is required." required>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"><span style="color: red;">*</span>  Address:</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                        <i class="fa fa-home" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="company_address" value="<?php echo $company->company_address; ?>" class="form-control" placeholder="Company Address" placeholder="Company Address" data-error-msg="Company Address is required." required>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Email Address :</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="email_address" class="form-control" value="<?php echo $company->email_address; ?>" placeholder="Email Addres">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Mobile No# :</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="mobile_no" class="form-control" value="<?php echo $company->mobile_no; ?>" placeholder="Mobile No#">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Landline :</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                      <i class="fa fa-phone" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="landline" value="<?php echo $company->landline; ?>" class="form-control" placeholder="Landline">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Tin No :</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                       <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="tin_no"  value="<?php echo $company->tin_no; ?>" class="form-control" placeholder="Tin No">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Registered to :</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                       <i class="fa fa-user" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="registered_to"  value="<?php echo $company->registered_to; ?>" class="form-control" placeholder="Registered to">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Terminal #:</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                       <i class="fa fa-laptop" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="terminal_no"  value="<?php echo $company->terminal_no; ?>" class="form-control" placeholder="Terminal #">
                                             </div>
                                         </div>
                                     </div>
                                 </form>
                              </div>
                              <div class="panel-footer">
                                  <div class="row">
                                      <div class="col-sm-10 col-sm-offset-3">
                                          <button id="btn_save" class="btn-primary btn" style="text-transform: capitalize;font-family: Tahoma, Georgia, Serif;"><span class=""></span>  Save Changes</button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
            </div>
            <!-- /.box-body -->
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
<script src="assets/plugins/formatter/autoNumeric.js" type="text/javascript"></script>
<script src="assets/plugins/formatter/accounting.js" type="text/javascript"></script>
<?php echo $_rights; ?>

    <script type="text/javascript">
    var _cboBrands; var _cboBrand; var _cboUnit; var _cboVendor;

    var updateNotesInfo=function(){
        var _data=$('#frm_company').serializeArray();
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"CompanyInfo/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    $('#btn_save').click(function(){
                if(validateRequiredFields($('#frm_company'))){
                  updateNotesInfo().done(function(response){
                      showNotification(response);
                  }).always(function(){
                      $.unblockUI();
                  });
              }
    });

    var showNotification=function(obj){
        PNotify.removeAll();
        new PNotify({
            title:  obj.title,
            text:  obj.msg,
            type:  obj.stat
        });
    };

    $('.date-picker').datepicker({
      autoclose: true
    });

 </script>
</body>
</html>
