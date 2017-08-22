<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<!-- Mirrored from byrushan.com/projects/ma/1-7-1/jquery/light/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Dec 2016 06:39:56 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Admin</title>
        
        <!-- Vendor CSS -->
        <?php echo $_def_css_files ?> 
         <style>
            .toolbar{
                float:left !important;
                padding:5px !important;
                margin:0px !important;
            }
            .dataTables_filter{
                float:right !important;
                padding:5px !important;
                margin:0px !important;
            }
            .tbl-header{
                background-color: #346986;
            }
            td.details-control {
            background: url('assets/img/Folder_Closed.png') no-repeat center center;
            cursor: pointer;
            }
            tr.details td.details-control {
                background: url('assets/img/Folder_Opened.png') no-repeat center center;
            }
            .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
                vertical-align: middle;
            }
        </style>
    </head>
    <body>
        <?php echo $_top_navigation; ?>
        <section id="main">
        <?php echo $_side_navigation; ?>
            <section id="content">
                <div class="container">
                    <div class="block-header" style="padding:0px;">
                        <h2>Company/Organization List</h2>
                        <ul class="actions">
                            <li>
                                <a href="#modalWider" data-toggle="modal">
                                    <i class="zmdi zmdi-trending-up"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="zmdi zmdi-check-all"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown">
                                    <i class="zmdi zmdi-more-vert"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="#">Refresh</a>
                                    </li>
                                    <li>
                                        <a href="#">Manage Widgets</a>
                                    </li>
                                    <li>
                                        <a href="#">Widgets Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <div class="card">
                        </div>
                        </div>
                         <div class="table-responsive">
                            <table id="tbl_ref_department" class="table table-striped">
                                <thead class="tbl-header">
                                <tr>
                                    <th style="color:white;"><i class="zmdi zmdi-plus"></i></th>
                                    <th style="color:white;">Organization Name</th>
                                    <th style="color:white;">Organization Address</th>
                                    <th style="text-align:center;color:white;">Action</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </section>
        </section>

           <!-- Page Loader -->
        <div class="page-loader">
            <div class="preloader pls-blue">
                <svg class="pl-circular" viewBox="25 25 50 50">
                    <circle class="plc-path" cx="50" cy="50" r="20" />
                </svg>

                <p>Please wait...</p>
            </div>
        </div>
        
        <!--modal-->
        <div id="modal_company_org" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header bgm-green">
                            <h4 class="modal-title">Create Company/Organization</h4>
                        </div>
                        <div class="modal-body">
                                 <form id="frm_company_org" role="form" class="form-horizontal row-border">
                            <br><br>
                           <div class="row">
                           <div class="col-md-12">
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1">* Org. Name :</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group fg-line">  
                                                <input type="text" class="form-control input-sm" id="org_name" name="org_name"  placeholder="Organization Name" data-error-msg="Organization Name is required!" required>
                                            </div>
                                        </div>
                                       <div class="col-md-3">
                                            <label for="exampleInputEmail1"> Address :</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group fg-line">  
                                                <textarea class="form-control" name="org_address" placeholder="Address"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1"> Contact Person :</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group fg-line">  
                                                <input type="text" class="form-control input-sm" id="org_contact_person" name="org_contact_person"  placeholder="Contact Person">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1"> Telephone # :</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group fg-line">  
                                                <input type="text" class="form-control input-sm" id="org_telephone" name="org_telephone"  placeholder="Telephone">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1"> Mobile # :</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group fg-line">  
                                                <input type="text" class="form-control input-sm" id="org_mobile" name="org_mobile"  placeholder="Mobile Number">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="exampleInputEmail1"> Email Address :</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group fg-line">  
                                                <input type="text" class="form-control input-sm" id="org_email" name="org_email"  placeholder="Email address">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            </form>
                            <br>
                        <div class="modal-footer">
                            <button id="btn_create" type="button" class="btn bgm-green waves-effect">Save changes</button>
                            <button type="button" class="btn bgm-red" data-dismiss="modal">Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal dEtails -->
        <div id="modal_company_org_details" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header bgm-indigo">
                            <h4 class="modal-title"><orgname id="orgname"></orgname> Details </h4>
                        </div>
                        <div class="modal-body">
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <strong>Organization Address :</strong>
                                </div>
                                <div class="col-md-8">
                                            <p id="orgaddress" style="text-align:left;"></p>
                                </div>
                            </div>
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-4">
                                    <strong>Contact Person :</strong>
                                </div>
                                <div class="col-md-8">
                                            <p id="orgcontactperson" style="text-align:left;"></p>
                                </div>
                            </div>
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-4">
                                    <strong>Telephone # :</strong>
                                </div>
                                <div class="col-md-8">
                                            <p id="orgtelephone" style="text-align:left;"></p>
                                </div>
                            </div>
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-4">
                                    <strong>Mobile # :</strong>
                                </div>
                                <div class="col-md-8">
                                            <p id="orgmobile" style="text-align:left;"></p>
                                </div>
                            </div>
                            <div class="row" style="margin-top:5px;">
                                <div class="col-md-4">
                                    <strong>Email :</strong>
                                </div>
                                <div class="col-md-8">
                                            <p id="orgemail" style="text-align:left;"></p>
                                </div>
                            </div>

                        <div class="modal-footer">
                            <button type="button" class="btn bgm-red" data-dismiss="modal">Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </section>
        <!--js-->
        
        <?php echo $_def_js_files ?> 
        
        <script type="text/javascript">
        var dt; var _txnMode; var _selectedID; var _selectRowObj; var _btnNew;
            $(document).ready(function() {
                /*$('#data-table-basic').DataTable();
*/
          
    dt=$('#tbl_ref_department').DataTable({
    "dom": '<"toolbar">frtip',

    "bLengthChange":false,
    "ajax" : "Ref_company_org/transaction/list",
    "columns": [
        {
                    "targets": [0],
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },
        { targets:[1],data: "org_name" },
        { targets:[2],data: "org_address" },
        {
            targets:[3],
            render: function (data, type, full, meta){
                var btn_edit='<button class="btn btn-success btn-sm" name="edit_info"   data-toggle="tooltip" data-placement="left" title="Edit" style="margin-left:5px;"><i class="zmdi zmdi-edit"></i> </button>';
                var btn_trash='<button class="btn btn-danger btn-sm" name="remove_info"  data-toggle="tooltip" data-placement="left" title="Move to trash" style="margin-left:5px;"><i class="zmdi zmdi-delete"></i> </button>';

                return '<center>'+btn_edit+btn_trash+'</center>';
            }

        }
    ],
    language: {
                 searchPlaceholder: "Search Company/Organization List"
             }
   
    });

    $("div.toolbar").html('<button class="btn bgm-green waves-effect" id="btn_new">Create New Company/Organization</button> ');
    {};

    $('#btn_new').click(function(){
        _txnMode="new";
        $('#modal_company_org').modal('show');
        clearFields($('#frm_company_org'));
    });

    $('#tbl_ref_department tbody').on( 'click', 'tr td.details-control', function () {
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            $('#orgname').text(data.org_name);
            $('#orgaddress').text(data.org_address);
            $('#orgcontactperson').text(data.org_contact_person);
            $('#orgtelephone').text(data.org_telephone);
            $('#orgmobile').text(data.org_mobile);
            $('#orgemail').text(data.org_email);
            $('#modal_company_org_details').modal('toggle');
        } );

    $('#btn_create').click(function(){
        if(validateRequiredFields($('#frm_company_org'))){
           if(_txnMode=="new"){
                var type="Created";
                createRef_company_org().done(function(response){
                    showNotification(response);
                    dt.row.add(response.row_added[0]).draw();
                    clearFields($('#frm_company_org'))
                }).always(function(){
                  // $.unblockUI();
                     success_notif(type);
                    $('#modal_company_org').modal('toggle');
                });
                return;
            }
            if(_txnMode=="edit"){
                var type="Updated";
                updateRef_company_org().done(function(response){
                    showNotification(response);
                    dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                }).always(function(){
                     success_notif(type);
                    $('#modal_company_org').modal('toggle');
                });
                return;

            }

        }
    });
    $('#tbl_ref_department tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.org_id;
            delete_notif();
        });
    

    $('#tbl_ref_department tbody').on('click','button[name="edit_info"]',function(){
            _txnMode="edit";
            //$('.transaction_type').text('Edit');
            $('#modal_company_org ').modal('show');
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.org_id;

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
    });

    var createRef_company_org=function(){
        /*alert("a");*/
        var _data=$('#frm_company_org').serializeArray();

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Ref_company_org/transaction/create",
            "data":_data,
            //"beforeSend": showSpinningProgress($('#btn_save'))
        });
   
    };     

    var removeRef_company_org=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Ref_company_org/transaction/delete",
            "data":{org_id: _selectedID}
            //"beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var updateRef_company_org=function(){
        var _data=$('#frm_company_org').serializeArray();

        /*console.log(_data);*/
        _data.push({name : "org_id" ,value : _selectedID});
        //_data.push({name:"is_inventory",value: $('input[name="is_inventory"]').val()});

        //alert($('input[name="is_inventory"]').val());
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Ref_company_org/transaction/update",
            "data":_data,
          // "beforeSend": showSpinningProgress($('#btn_save'))
            
        });
    };
   
    var delete_notif=function(type){
            swal({   
                    title: "Are you sure?",   
                    text: "You will not be able to recover this imaginary file!",   
                    type: "warning",   
                    showCancelButton: true,   
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel plx!",   
                }).then(function(isConfirm){
                    if (isConfirm) {     
                        swal("Deleted!", "Your file has been deleted.", "success");
                        removeRef_company_org().done(function(response){
                            showNotification(response);
                                dt.row(_selectRowObj).remove().draw();
                             //   alert(data.ref_service_id);
                          //  $.unblockUI();
                        }); 
                    } else {     
                        swal("Cancelled", "Your file is safe :)", "error");   
                    } 
                });
        };
     //success message
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

        $('div.form-group').removeClass('has-error');
        $('input[required],textarea[required],select[required]',f).each(function(){

                if($(this).is('select')){
                if($(this).val()==0 || $(this).val()==null){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('div.form-group').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }
            
                }else{
                if($(this).val()==""){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('div.form-group').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }
            }
            



        });

        return stat;
        };

        
        });






        </script>
    </body>
  
<!-- Mirrored from byrushan.com/projects/ma/1-7-1/jquery/light/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Dec 2016 06:40:11 GMT -->
</html>