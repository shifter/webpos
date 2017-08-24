
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
        Customers
        <small>Reference</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="Homepage"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Customers</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header" style="">
              <button class="btn btn-primary" id="btn_new"><i class="fa fa-tags" aria-hidden="true"></i> New Customers</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tbl_customers" class="table table-bordered table-striped">
                <thead class="tbl-header">
                    <tr>
                        <th >Customer Code</th>
                        <th >Customer Name</th>
                        <th >Email Address</th>
                        <th >Landline</th>
                        <th >Mobile No.</th>
                        <th >Vatted </th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                    <tr>
                        <th >Customer Code</th>
                        <th >Customer Name</th>
                        <th >Email Address</th>
                        <th >Landline</th>
                        <th >Mobile No.</th>
                        <th >Vatted </th>
                        <th style="text-align:center;">Action</th>
                    </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>

    <!--modal-->
        <div id="modal_customers" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" style="width:60%;">
                <div class="modal-content">
                    <div class="modal-header bgm-indigo">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="xbutton">×</span></button>
                        <h4 class="modal-title">Customers : <transaction class="transaction"></transaction></h4>
                    </div>
                    <div class="modal-body">
                        <form id="frm_customers">
                        <div class="container-fluid">
                            <h4 style="margin:0;font-weight:bold;">CUSTOMER INFORMATION</h4>
                          <hr>
                          <div class="row">
                            <div class="col-sm-4">
                              <div class="input-group">
                                   <div class="imgwrapper">

                                       <div id="div_img_customer" style="position:relative;">
                                           <img name="img_customer" src="assets/img/defaultuser.png" style="object-fit: fill; !important; height: 100%;width: 100%;" />
                                           <input type="file" name="file_upload[]" class="hidden">
                                       </div>

                                       <center>
                                       <button id="btn_browse" class="btn btn-primary" style="margin-top: 2%;margin-bottom: 2%;text-transform: capitalize;width:58%;">Browse Photo</button>
                                       <button id="btn_remove_photo"  class="btn btn-danger" style="margin-top: 2%;margin-bottom: 2%;text-transform: capitalize;width:38%;">Remove</button>
                                      </center>
                                   </div>


                               </div>
                            </div>
                            <div class="col-sm-8">
                              <div class="row" style="margin-top:10px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Customer Code  :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-tags fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="customer_code" class="form-control" placeholder="AUTO" data-error-msg="Customer Name is required." readonly>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Customer Name  :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-tags fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="customer_name" class="form-control" placeholder="Customer Name" data-error-msg="Customer Name is required." required>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Email  :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-file-text fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="email_address" class="form-control" placeholder="Email" data-error-msg="Email is required.">
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Mobile No.  :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-file-text fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="landline" class="form-control" placeholder="Mobile No." data-error-msg="Landline is required.">
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Landline  :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-file-text fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="mobile_no" class="form-control" placeholder="Landline" data-error-msg="Landline is required.">
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Address  :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-file-text fa-size" aria-hidden="true"></i></span>
                                                <textarea name="address" class="form-control" placeholder="Addresss" data-error-msg="Address is required."></textarea>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="row" style="margin-top:5px;">
                                <div class="form-group">
                                    <label class="col-sm-4" style="margin-top:8px;" for="vat">Vatted :</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone fa-size" aria-hidden="true"></i></span>
                                                <select name="vatted" id="cbo_vatted" data-error-msg="Vatted is required." required>
                                                <?php foreach($tax_types as $vat){ ?>
                                                    <option value="<?php echo $vat->tax_type_id; ?>"><?php echo $vat->tax_type; ?></option>
                                                <?php } ?>
                                                </select>
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
        var initializeControls=function(){
        dt=$('#tbl_customers').DataTable({
            "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "ajax" : "Customers/transaction/list",
            "columns": [
                { targets:[0],data: "customer_code"},
                { targets:[1],data: "customer_name" },
                { targets:[2],data: "email_address" },
                { targets:[3],data: "landline" },
                { targets:[4],data: "mobile_no" },
                { targets:[5],data: "vattype" },
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
                         searchPlaceholder: "Search Customers"
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
        $('img[name="img_customer"]').attr('src','assets/img/defaultuser.png');
        $('.transaction').text('New');
        $('#modal_customers').modal('show');
        clearFields($('#frm_customers'));
    });

    $('#btn_create').click(function(){
            if(validateRequiredFields($('#frm_customers'))){
                if(_txnMode==="new"){
                    //alert("aw");
                    createCustomers().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_customers'))
                    }).always(function(){
                        $('#modal_customers').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
                if(_txnMode==="edit"){
                    //alert("update");
                    updateCustomers().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                    }).always(function(){
                        $('#modal_customers').modal('hide');
                        $.unblockUI();
                    });
                    return;
                }
            }
            else{}
        });

    $('#tbl_customers tbody').on('click','button[name="edit_info"]',function(){
        _txnMode="edit";
        $('.transaction').text('Edit');
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();
        _selectedID=data.customer_id;
        var vats=data.vatted;
        _cboVat.select2('val',vats);
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
        if(data.photo_path){
          $('img[name="img_customer"]').attr('src',data.photo_path);
        }
        else{
          $('img[name="img_customer"]').attr('src','assets/img/defaultuser.png');
        }


        $('#modal_customers').modal('toggle');

    });

    $('#tbl_customers tbody').on('click','button[name="remove_info"]',function(){
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();
        _selectedID=data.customer_id;
        delete_notif();

    });

    $('#btn_browse').click(function(event){
            event.preventDefault();
            $('input[name="file_upload[]"]').click();
     });


    $('#btn_remove_photo').click(function(event){
        event.preventDefault();
        $('img[name="img_customer"]').attr('src','assets/img/anonymous-icon.png');
    });

    $('input[name="file_upload[]"]').change(function(event){
        var _files=event.target.files;

        $('#div_img_customer').hide();
        $('#div_img_loader').show();


        var data=new FormData();
        $.each(_files,function(key,value){
            data.append(key,value);
        });

        console.log(_files);

        $.ajax({
            url : 'Customers/transaction/upload',
            type : "POST",
            data : data,
            cache : false,
            dataType : 'json',
            processData : false,
            contentType : false,
            success : function(response){
                //console.log(response);
                //alert(response.path);
                $('#div_img_loader').hide();
                $('#div_img_customer').show();
                $('img[name="img_customer"]').attr('src',response.path);

            }
        });

    });

    _cboVat=$("#cbo_vatted").select2({
            placeholder: "Please Select.",
            allowClear: true
        });

    _cboVat.select2('val',null);

    var createCustomers=function(){
        var _data=$('#frm_customers').serializeArray();
        _data.push({name : "photo_path" ,value : $('img[name="img_customer"]').attr('src')});
        /*_data.push({name : "photo_path" ,value : $('img[name="img_user"]').attr('src')});*/

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Customers/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });

    };

    var updateCustomers=function(){
            var _data=$('#frm_customers').serializeArray();
            _data.push({name : "customer_id" ,value : _selectedID});
            _data.push({name : "photo_path" ,value : $('img[name="img_customer"]').attr('src')});
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Customers/transaction/update",
                "data":_data,
                "beforeSend": showSpinningProgress($('#btn_save'))
            });
        };

    var removeCustomers=function(){
            return $.ajax({
                "dataType":"json",
                "type":"POST",
                "url":"Customers/transaction/delete",
                "data":{customer_id : _selectedID},
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
                            removeCustomers().done(function(response){
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
