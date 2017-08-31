
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
          User Accounts
          <small>accounts</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="Homepage"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active">User Accounts</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="box">
              <div class="box-header" style="">
                <button class="btn btn-primary" id="btn_new"><i class="fa fa-plus-circle" aria-hidden="true"></i> New User</button>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive" style="overflow-x:scroll;">
                <table id="tbl_users" class="table table-bordered table-striped">
                  <thead class="tbl-header">
                      <tr>
                          <th></th>
                          <th>Username</th>
                          <th>Fullname</th>
                          <th>Address</th>
                          <th>Mobile #</th>
                          <th>User Group</th>
                          <th style="text-align:center;">Action</th>
                      </tr>
                  </thead>
                  <tbody>
                  </tbody>
                  <tfoot>
                  <tr>
                      <th></th>
                      <th>Username</th>
                      <th>Fullname</th>
                      <th>Address</th>
                      <th>Mobile #</th>
                      <th>User Group</th>
                      <th style="text-align:center;">Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.box-body -->
            </div>

      <!--modal-->
          <div id="modal_users" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                      <div class="modal-header bgm-indigo">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true" class="xbutton">×</span></button>
                          <h4 class="modal-title">User Accounts</h4>
                      </div>
                      <div class="modal-body">
                          <form id="frm_users">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-md-4">
                                <center>
                                <div class="input-group">
                                     <div class="imgwrapper">

                                         <div id="div_img_customer" style="position:relative;">
                                             <img name="img_preview" src="assets/img/defaultuser.png" style="object-fit: fill; !important; height: 100%;width: 100%;" />
                                             <input type="file" name="file_upload[]" class="hidden">
                                         </div>

                                         <center>
                                         <button id="btn_browse" class="btn btn-primary" style="margin-top: 2%;margin-bottom: 2%;text-transform: capitalize;width:58%;">Browse Photo</button>
                                         <button id="btn_remove_photo"  class="btn btn-danger" style="margin-top: 2%;margin-bottom: 2%;text-transform: capitalize;width:38%;">Remove</button>
                                        </center>
                                     </div>


                                 </div>
                                 </center>
                              </div>
                              <div class="col-md-8">
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Username :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="user_name" class="form-control" placeholder="Username" data-error-msg="Username is required." required>
                                        </div>
                                        <center><small style="font-weight:bold;">Username must be unique..</small></center>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Type Of User : :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-puzzle-piece fa-size" aria-hidden="true"></i></span>
                                                <select class="form-control" name="user_group_id" id="user_group_id" data-error-msg="User group is required." required>
                                                   <option value="0">[ Create User Account Group ]</option>
                                                   <?php foreach($user_groups as $group){ ?>
                                                            <option value="<?php echo $group->user_group_id; ?>"><?php echo $group->user_group; ?></option>
                                                   <?php } ?>
                                               </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Password :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key fa-size" aria-hidden="true"></i></span>
                                                <input type="password" name="user_pword" id="user_pword" class="form-control" placeholder="Password" data-error-msg="Password is required." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Confirm Pass :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-key fa-size" aria-hidden="true"></i></span>
                                                <input type="password" name="user_confirm_pword"  id="user_confirm_pword" class="form-control" placeholder="Confirm Password" data-error-msg="Birthdate is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Firstname :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="user_fname" class="form-control" placeholder="Firstname" data-error-msg="Firstname is required." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Middlename :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="user_mname" class="form-control" placeholder="Middlename" data-error-msg="Middlename is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Lastname :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="user_lname" class="form-control" placeholder="Lastname" data-error-msg="Lastname is required." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 inlinecustomlabel-sm" for="inputEmail1">Address :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-location-arrow fa-size" aria-hidden="true"></i></span>
                                                <textarea name="user_address" rows="2" placeholder="Address" class="form-control" data-error-msg="Address is required."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Email Address :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-inbox fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="user_email" class="form-control" placeholder="Lastname" data-error-msg="Lastname is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Landline # :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="user_telephone" class="form-control" placeholder="Telephone" data-error-msg="Telephone is required.">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3" style="margin-top:8px;" for="inputEmail1">Mobile # :</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-mobile fa-size" aria-hidden="true"></i></span>
                                                <input type="text" name="user_mobile" class="form-control" placeholder="Mobile #">
                                        </div>
                                    </div>
                                </div>
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
          dt=$('#tbl_users').DataTable({
              "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
              "ajax" : "Users/transaction/list",
              "columns": [
                  {
                  "targets": [0],
                  "class":          "patient-details ",
                  "orderable":      false,
                  "data":           null,
                  "defaultContent": "<center><span class='glyphicon glyphicon-plus-sign'></span></center>",
                  "bDestroy": true,
                  },
                  { targets:[1],data: "user_name" },
                  { targets:[2],data: "full_name" },
                  { targets:[3],data: "user_address" },
                  { targets:[4],data: "user_mobile" },
                  { targets:[5],data: "user_group" },
                  {

                      targets:[6],
                      render: function (data, type, full, meta){
                      var btn_edit='<button class="btn btn-success btn-xs" name="edit_info"  style="margin-left:-15px;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
                      var btn_trash='<button class="btn btn-danger btn-xs" name="remove_info" style="margin-left:5px;" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

                      return '<center>'+btn_edit+btn_trash+'</center>';
                      }
                  }

              ],
              language: {
                           searchPlaceholder: "Search Users"
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

      $('input[name="file_upload[]"]').change(function(event){
          var _files=event.target.files;

          //$('#div_img_product').hide();
         // $('#div_img_loader').show();
          showSpinningProgressUPLOAD();

          var data=new FormData();
          $.each(_files,function(key,value){
              data.append(key,value);
          });

          console.log(_files);

          $.ajax({
              url : 'Users/transaction/upload',
              type : "POST",
              data : data,
              cache : false,
              dataType : 'json',
              processData : false,
              contentType : false,
              success : function(response){
                          //console.log(response);
                          //alert(response.photo_path);
                         // $('#div_img_loader').hide();
                         // $('#div_img_user').show();
                          showNotification(response);
                          $.unblockUI();
                          $('img[name="img_preview"]').attr('src',response.photo_path);
                          $('a[name="img_a"]').attr('href',response.photo_path);

                      }
          });
      });


      $('#btn_new').click(function(){
          _txnMode="new";
          $('#modal_users').modal('show');
          clearFields($('#frm_users'));
          $('img[name="img_preview"]').attr('src','assets/img/defaultuser.png');
          $('a[name="img_a"]').attr('href','assets/img/lab.png');
      });

      $('#btn_create').click(function(){
          if(validateRequiredFields($('#frm_users'))){
              if(_txnMode==="new"){
                  //alert("aw");
                  createUserAccount().done(function(response){
                      showNotification(response);
                      $.unblockUI();
                      dt.row.add(response.row_added[0]).draw();
                      clearFields($('#frm_users'))
                  }).always(function(){
                      $('#modal_users').modal('hide');
                  });
                  return;
              }
              if(_txnMode==="edit"){
                  //alert("update");
                  updateUserAccount().done(function(response){
                      showNotification(response);
                      $.unblockUI();
                      dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                  }).always(function(){
                      $('#modal_users').modal('hide');
                  });
                  return;
              }
          }
          else{}
      });

      $('#tbl_users tbody').on('click','button[name="edit_info"]',function(){
          _txnMode="edit";

          _selectRowObj=$(this).closest('tr');
          var data=dt.row(_selectRowObj).data();
          _selectedID=data.user_id;
          $('#user_group_id').val(data.user_group_id);

          if(data.photo_path==""){
              $('img[name="img_preview"]').attr('src','assets/img/lab.png');
              $('a[name="img_a"]').attr('href','assets/img/lab.png');
          }
          else{
              $('img[name="img_preview"]').attr('src',data.photo_path);
              $('a[name="img_a"]').attr('href',data.photo_path);
          }
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

          $('#user_pword').val('nochanges');
          $('#user_confirm_pword').val('nochanges');

          $('#modal_users').modal('toggle');

      });

      $('#tbl_users tbody').on('click','button[name="remove_info"]',function(){
          _selectRowObj=$(this).closest('tr');
          var data=dt.row(_selectRowObj).data();
          _selectedID=data.user_id;
          delete_notif();

      });

      $('#tbl_users tbody').on( 'click', 'tr td.patient-details', function () {
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

      $('#btn_remove_photo').click(function(event){
          event.preventDefault();
          $('img[name="img_preview"]').attr('src','assets/img/defaultuser.png');
      });

      var createUserAccount=function(){
          var _data=$('#frm_users').serializeArray();
          _data.push({name : "photo_path" ,value : $('img[name="img_preview"]').attr('src')});

          return $.ajax({
              "dataType":"json",
              "type":"POST",
              "url":"Users/transaction/create",
              "data":_data,
              "beforeSend": showSpinningProgress($('#btn_save'))
          });

      };

      var updateUserAccount=function(){
              var _data=$('#frm_users').serializeArray();
              _data.push({name : "photo_path" ,value : $('img[name="img_preview"]').attr('src')});
              _data.push({name : "user_id" ,value : _selectedID});

              return $.ajax({
                  "dataType":"json",
                  "type":"POST",
                  "url":"Users/transaction/update",
                  "data":_data,
                  "beforeSend": showSpinningProgress($('#btn_save'))
              });
          };

      var removeUserAccount=function(){
          return $.ajax({
              "dataType":"json",
              "type":"POST",
              "url":"Users/transaction/delete",
              "data":{user_id : _selectedID},
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

      $(".imagelight").lightGallery();

     </script>

  </body>
  </html>
