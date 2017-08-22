
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
        <span class="fa fa-sticky-note-o"></span> Notes Information
      </h1>
      <ol class="breadcrumb">
        <li><a href="Homepage"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Notes Information</li>
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
                                 <form id="frm_notes" role="form" class="form-horizontal row-border">
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Note 1 :</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                  </span>
                                                       <input type="hidden" name="note_id" value="<?php echo $notes->note_id; ?>">
                                                 <input type="text" name="note_1" value="<?php echo $notes->note1; ?>" class="form-control" placeholder="Note 1">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Note 2 :</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="note_2" value="<?php echo $notes->note2; ?>" class="form-control" placeholder="Note 2">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Note 3 :</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="note_3" class="form-control" value="<?php echo $notes->note3; ?>" placeholder="Note 3">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Note 4 :</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="note_4" class="form-control" value="<?php echo $notes->note4; ?>" placeholder="Note 4">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Note 5 :</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                      <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="note_5" value="<?php echo $notes->note5; ?>" class="form-control" placeholder="Note 5">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Note 6 :</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                       <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="note_6"  value="<?php echo $notes->note6; ?>" class="form-control" placeholder="Note 6">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Note 7 :</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                       <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="note_7" value="<?php echo $notes->note7; ?>" class="form-control" placeholder="Note 7">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Note 8 :</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                       <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="note_8" value="<?php echo $notes->note8; ?>" class="form-control" placeholder="Note 8">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Note 9 :</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                       <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="note_9" value="<?php echo $notes->note9; ?>" class="form-control" placeholder="Note 9">
                                             </div>
                                         </div>
                                     </div>
                                     <div class="form-group">
                                         <label class="col-md-2 col-md-offset-1 control-label"> Note 10 :</label>
                                         <div class="col-md-7">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                       <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                  </span>
                                                 <input type="text" name="note_10" value="<?php echo $notes->note9; ?>" class="form-control" placeholder="Note 10">
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
        var _data=$('#frm_notes').serializeArray();
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Notes/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    $('#btn_save').click(function(){
                updateNotesInfo().done(function(response){
                    showNotification(response);
                }).always(function(){
                    $.unblockUI();
                });
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
