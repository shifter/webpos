
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
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo 0; ?></h3>

              <p>Sales</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer"><br><!-- More info <i class="fa fa-arrow-circle-right"></i> --></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo 0; ?></h3>

              <p>Sales</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer"><br><!-- More info <i class="fa fa-arrow-circle-right"></i> --></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo 0; ?></h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer"><br><!-- More info <i class="fa fa-arrow-circle-right"></i> --></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>3</h3>

              <p>Sales Done</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer"><br><!-- More info <i class="fa fa-arrow-circle-right"></i> --></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
              <i class="fa fa-th"></i>

              <h3 class="box-title">Sales Graph</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <!-- <button type="button" class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button> -->
              </div>
            </div>
            <div class="box-body border-radius-none">
              <div class="chart" id="line-chart" style="height: 250px;"></div>
            </div>
            <!-- /.box-body -->

            <!-- /.box-footer -->
          </div>
          <!-- /.box -->

          <!-- Chat box -->
          <div class="box box-success">
            <div class="box-header">
              <i class="fa fa-comments-o"></i>

              <h3 class="box-title">Chat</h3>

              <div class="box-tools pull-right" data-toggle="tooltip" title="Status">
                <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
              </div>
            </div>
            <div class="box-body chat wallpostview" id="chat-box">


              <!-- /.item -->
            </div>
            <!-- /.chat -->
            <div class="box-footer">
              <div class="input-group">
                <form id="frm_wall_post">
                <input class="form-control" name="post_content" placeholder="Type message..." data-error-msg="Message is required." required>
                </form>
                <div class="input-group-btn">
                  <button type="button" class="btn btn-success" id="save_post"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box (chat box) -->

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn bg-teal btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Your Location
              </h3>
            </div>
            <div class="box-body">
              <div id="map" style="height: 250px; width: 100%;color:black;"></div>
            </div>
            <!-- /.box-body-->
          </div>
          <!-- /.box -->

          <!-- Calendar -->
          <div class="box box-solid bg-green-gradient" style="height:348px;">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <!-- <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div> -->
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <!-- <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button> -->
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> Modified by JBPV
    </div>
    <strong>Copyright © 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

<?php echo $_right_navigation ?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php echo $_def_js_files ?>
<?php echo $_rights; ?>
<script type="text/javascript">

  var _selectedID; var _val; var limit;
  var interval = 3000;  // 1000 = 1 second, 3000 = 3 seconds

      function doAjax() {
          var _data=$('#').serializeArray();
          _data.push({name : "wall_count" ,value : wallpost});
          $.ajax({
                  type: 'POST',
                  url: 'Wall_post/transaction/count',
                  data: _data,
                  dataType: 'json',
                  success: function (response) {
                      if(response!=wallpost){
                          limit=Math.abs(wallpost-response);
                          wallpost=response;
                          setTimeout(getlist, 500);
                      }
                      else{
                          console.log('no changes');
                      }

                  },
                  complete: function (response) {
                          // Schedule the next

                          setTimeout(doAjax, interval);
                  }
          });
      }
      setTimeout(doAjax, interval);

      function getlist() {
      var _data=$('#').serializeArray();
        _data.push({name : "wall_count" ,value : wallpost});
        _data.push({name : "limit" ,value : limit});
        $.ajax({
          type: 'POST',
          url: 'Wall_post/transaction/list',
          data: _data,
          dataType: 'json',
          success: function (response) {
              /*for(var i=0;i<limit;i++){
                alert(i);
              $('.wallpostview').prepend('<div class="item">'+
                                        '<img src="'+response.data[i].photo_path+'" alt="user image" class="online">'+
                                        '<p class="message">'+
                                          '<a href="#" class="name">'+
                                            '<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>'+
                                            response.data[i].fullname+
                                            '</a>'+
                                            response.data[i].post_content+
                                    '</p></div>');
                    }*/
              var send2chat='';
              for(var i=0;i<response.data.length;i++){

              send2chat +='<div class="item">'+
                                        '<img src="'+response.data[i].photo_path+'" alt="user image" class="online">'+
                                        '<p class="message">'+
                                          '<a href="#" class="name">'+
                                            '<small class="text-muted pull-right"><i class="fa fa-clock-o"></i>'+response.data[i].readable+'</small>'+
                                            response.data[i].fullname+
                                            '</a>'+
                                            response.data[i].post_content+
                                    '</p></div>';
              }
              $('.wallpostview').empty();
              $('.wallpostview').html(send2chat);

            }
        });
      }

      $('#save_todo').click(function(){
          createTodo().done(function(response){
            showNotification(response);
            /*alert(response.row_added[0].todo_content);*/
            $('.tododatas').prepend(
                '<div class="list-group-item media">'+
                    '<div class="pull-right">'+
                        '<ul class="actions actions-alt">'+
                            '<li class="dropdown">'+
                                '<a href="#" data-toggle="dropdown">'+
                                    '<i class="zmdi zmdi-more-vert"></i>'+
                                '</a>'+
                                '<ul class="dropdown-menu dropdown-menu-right">'+
                                    '<li><a class="delete_todo" href="#/" id="'+response.row_added[0].todo_list_id+'">Delete</a></li>'+
                                '</ul>'+
                            '</li>'+
                       ' </ul>'+
                    '</div>'+
                    '<div class="media-body">'+
                        '<div class="checkbox checkbox-light">'+
                            '<label>'+
                                '<task class="checklists" name="is_done" value="0" id="'+response.row_added[0].todo_list_id+'">'+
                                        response.row_added[0].todo_content+
                                '</task>'+
                            '</label>'+
                        '</div>'+
                    '</div>'+
                '</div>');
        }).always(function(){
            $.unblockUI();
        });
      });
      $('.tododatas').on('click','.checklists',function(){
          _selectedID = $(this).attr('id');

          if($(this).attr('value')==0){
              $(this).attr('value','1');
              $(this).addClass("striketext");
              _val = 1;
          }
          else{
              $(this).attr('value','0');
              $(this).removeClass("striketext");
              _val = 0;
          }

          updateTodo().done(function(response){
                                  showNotification(response);
                              }).always(function(){
                                  $.unblockUI();
                              });

      });

      $('#save_post').click(function(){
          saveWallpost().done(function(response){
                                  showNotification(response);
                                  doAjax();
                                   clearFields($('#frm_wall_post'));
                              }).always(function(){
                                  $.unblockUI();
                              });

      });



      $('.tododatas').on('click','.delete_todo',function(){
          _selectedID = $(this).attr('id');
          var media = $(this);

          deleteTodo().done(function(response){
                                  showNotification(response);
                                  media.closest('.media').remove();
                              }).always(function(){
                                  $.unblockUI();
                              });

      });

      var createTodo=function(){
          var _data=$('#frm_todo').serializeArray();

          return $.ajax({
              "dataType":"json",
              "type":"POST",
              "url":"Todo_list/transaction/create",
              "data":_data,
              "beforeSend": showSpinningProgress($('#new_todo'))
          });
      };

      var updateTodo=function(){
          var _data=$('#frm_checklist').serializeArray();
          _data.push({name : "todo_list_id" ,value : _selectedID});
          _data.push({name : "is_done" ,value : _val});
          return $.ajax({
              "dataType":"json",
              "type":"POST",
              "url":"Todo_list/transaction/update",
              "data":_data,
              "beforeSend": showSpinningProgress($('#btn_save'))
          });
      };

      var deleteTodo=function(){
          var _data=$('#frm_checklist').serializeArray();
          _data.push({name : "todo_list_id" ,value : _selectedID});
          return $.ajax({
              "dataType":"json",
              "type":"POST",
              "url":"Todo_list/transaction/delete",
              "data":_data,
              "beforeSend": showSpinningProgress($('#btn_save'))
          });
      };

      var saveWallpost=function(){
          var _data=$('#frm_wall_post').serializeArray();

          return $.ajax({
              "dataType":"json",
              "type":"POST",
              "url":"Wall_post/transaction/create",
              "data":_data,
              "beforeSend": showSpinningProgress($('#save_post'))
          });
      };



      var showNotification=function(obj){
          PNotify.removeAll();
          new PNotify({
              title:  obj.title,
              text:  obj.msg,
              type:  obj.stat
          });
      };

      var showSpinningProgress=function(e){
          $.blockUI({ message: '<img src="assets/loader.svg" width="100px" height="100px;"></img><h3 style="color:white;font-family:Web Serveroff">Saving Changes..</h3>',
              css: {
              border: 'none',
              padding: '15px',
              backgroundColor: 'none',
              opacity: 1,
              zIndex: 20000,
          } });
          $('.blockOverlay').attr('title','Click to unblock').click($.unblockUI);
      };

      var clearFields=function(f){
          $('input,textarea',f).val('');
          $(f).find('input:first').focus();
      };

      $(document).keypress(
        function(event){
         if (event.which == '13') {
          event.preventDefault();
          if(validateRequiredFields($('#frm_wall_post'))){
            saveWallpost().done(function(response){
                                  showNotification(response);
                                  doAjax();
                                   clearFields($('#frm_wall_post'));
                              }).always(function(){
                                  $.unblockUI();
                              });
            }
          }
    });

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
      /*widgets*/

    // LINE CHART
    var line = new Morris.Line({
      element: 'line-chart',
      resize: true,
      data: [
        {y: '2015 Q1', item1: 1200},
        {y: '2015 Q2', item1: 3200},
        {y: '2015 Q3', item1: 2200},
        {y: '2015 Q4', item1: 4000},
        {y: '2016 Q1', item1: 2666},
        {y: '2016 Q2', item1: 2778},
        {y: '2016 Q3', item1: 4912},
        {y: '2016 Q4', item1: 3767},
        {y: '2017 Q1', item1: 6810},
        {y: '2017 Q2', item1: 5670},
        {y: '2017 Q3', item1: 4820},
        {y: '2017 Q4', item1: 1500},

      ],
      xkey: 'y',
      ykeys: ['item1'],
      labels: ['Item 1'],
      lineColors: ['white'],
      gridTextColor : ['white'],
      hideHover: 'auto'
    });

   </script>
   <!-- google maps api -->
   <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 15.16089, lng: 120.59183},
          zoom: 13,
          mapTypeId: 'hybrid'
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBV0qUvhphYqrwZR6wyqzGlEr-5AV3p7js&callback=initMap">
    </script>
</body>
</html>
