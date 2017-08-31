
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
        <i class="fa fa-location-arrow"></i> Locations
        <small>Reference</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="Homepage"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Locations</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header" style="">
              <button class="btn btn-primary" id="btn_new"><i class="fa fa-plus-circle" aria-hidden="true"></i> New Location</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tbl_location" class="table table-bordered table-striped">
                <thead class="tbl-header">
                    <tr>
                        <th>Location Code</th>
                        <th>Location Name</th>
                        <th>Location Desc</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Location Code</th>
                        <th>Location Name</th>
                        <th>Location Desc</th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

    <!--modal-->
        <div id="modal_location" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bgm-indigo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">Location : <transaction class="transaction"></transaction></h4>
                    </div>
                    <div class="modal-body">
                        <form id="frm_location">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Location Code  :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-tags fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="location_code" class="form-control" placeholder="AUTO" data-error-msg="Location Name is required." readonly>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Location Name  :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-tags fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="location_name" class="form-control" placeholder="Location Name" data-error-msg="Location Name is required." required>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Description  :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-file-text fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="location_desc" class="form-control" placeholder="Description">
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                          </div>
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
    var v = true;
    <?php
        if($this->session->locations_create == 0){
    ?>
            $("#btn_new").remove();
    <?php
        } 
    ?>
    <?php
        if($this->session->locations_update == 0 && $this->session->locations_delete == 0){
    ?>
            v = false;
    <?php
        } 
    ?>
    var btn_edit = "";
    var btn_trash = "";
    var _cboLocations; var _cboBrand; var _cboLocations; var _cboVendor;
        var initializeControls=function(){
        dt=$('#tbl_location').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax" : "Location/transaction/list",
            "columns": [
                { targets:[0],data: "location_code" },
                { targets:[1],data: "location_name" },
                { targets:[2],data: "location_desc" },
                {

                    targets:[3],
                    visible:+v,
                    render: function (data, type, full, meta){
                    <?php
                        if($this->session->locations_update == 1){
                    ?>      
                        btn_edit='<button class="btn btn-success btn-xs" name="edit_info"  style="margin-left:-15px;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
                    <?php
                        } 
                        if($this->session->locations_delete == 1){
                    ?>      
                        btn_trash='<button class="btn btn-danger btn-xs" name="remove_info" style="margin-left:5px;" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';
                    <?php
                        } 
                    ?>
                      return '<center>'+btn_edit+btn_trash+'</center>';
                    }
                }

            ],
            language: {
                         searchPlaceholder: "Search Locations"
                     },
            "rowCallback":function( row, data, index ){

                $(row).find('td').eq(10).attr({
                    "align": "right"
                });
            }
        });

    }();


    $('#btn_new').click(function(){
        _txnMode="new";
        $('.transaction').text('New');
        $('#modal_location').modal('show');
        clearFields($('#frm_location'));
    });

    $('#btn_create').click(function(){
            if(validateRequiredFields($('#frm_location'))){
                if(_txnMode==="new"){
                    //alert("aw");
                    createLocations().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_location'))
                    }).always(function(){
                        $('#modal_location').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnMode==="edit"){
                    //alert("update");
                    updateLocations().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                    }).always(function(){
                        $('#modal_location').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
            }
            else{}
        });

    $('#tbl_location tbody').on('click','button[name="edit_info"]',function(){
        _txnMode="edit";
        $('.transaction').text('Edit');
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();
        _selectedID=data.location_id;
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

        $('#modal_location').modal('toggle');

    });

    $('#tbl_location tbody').on('click','button[name="remove_info"]',function(){
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();
        _selectedID=data.location_id;
        delete_notif();

    });

    var createLocations=function(){
        var _data=$('#frm_location').serializeArray();
        /*_data.push({name : "photo_path" ,value : $('img[name="img_user"]').attr('src')});*/

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Location/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });

    };

    var updateLocations=function(){
            var _data=$('#frm_location').serializeArray();
            _data.push({name : "location_id" ,value : _selectedID});

            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Location/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
        };

    var removeLocations=function(){
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Location/transaction/delete",
                "data":{location_id : _selectedID},
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
                            removeLocations().done(function(response){
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
    };

    $('.date-picker').datepicker({
      autoclose: true
    });

 </script>
</body>
</html>
