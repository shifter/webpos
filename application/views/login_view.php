<!DOCTYPE html>
<html lang="en" class="coming-soon">


<head>
    <meta charset="utf-8">
    <title>Login Form</title>


    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="author" content="">

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- pnotify -->
    <link href="assets/plugins/notify/pnotify.css" rel="stylesheet">
    <link href="assets/ample-login/animate.css" rel="stylesheet">
  <!-- Custom CSS -->
    <link href="assets/ample-login/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="assets/ample-login/colors/default.css" id="theme"  rel="stylesheet">

    <style>
      .ui-pnotify-title {
        color: white !important;
      }
      body {
        font-family: arial;
      }
      .new-login-register .lg-info-panel .lg-content {
        margin-top: 35%;
      }
      .new-login-register .lg-info-panel .inner-panel {
          background: rgba(0, 0, 0, 0.7);
      }
      .new-login-register .lg-info-panel {
        background: url('assets/img/login.jpg') no-repeat center center / cover !important;
      }
      hr {
        border-top: 1px solid #eaeaea;
      }
                .new-login-box{
        -webkit-box-shadow: -4px 9px 300px 0px rgba(222,237,255,1);
        -moz-box-shadow: -4px 9px 300px 0px rgba(222,237,255,1);
        box-shadow: -4px 9px 300px 0px rgba(222,237,255,1);
        }
    </style>
</head>
    <body class="focused-form animated-content login-background">
<section id="wrapper" class="new-login-register">
      <div class="lg-info-panel">
          <div class="inner-panel">
              <div class="lg-content">
                  <hr><h1 style="font-family: sans-serif!important; color: white;"><b>JCORE</b> POINT OF SALES 1.0</h1><hr>
                  <h3 style="color: #03a9f4;"></h3>
                  <span style="position: absolute; bottom: -3%; right: 1%;"><p>powered by JDEV OFFICE SOLUTIONS <!-- <img src="assets/img/jdev-logo2.png" height="30" width="70"> --></p></span>
              </div>
          </div>
      </div>
      <div class="new-login-box">
        <div class="white-box">
            <h3 class="box-title m-b-0">Sign In</h3>
            <div class="form-horizontal" id="validate-form" style="margin-top: 5%;">
            <div class="form-group mb-md" id="userdiv">
              <div class="col-xs-12">
                <label>USERNAME</label>
                <input name="user_name" id="user" type="text" class="form-control " style="border-radius: 0;" placeholder="Username" data-parsley-minlength="20" placeholder="At least 6 characters" required>
              </div>
            </div>
            <div class="form-group mb-md" id="passdiv">
              <div class="col-xs-12">
                <label>PASSWORD</label>
                <input name="user_pword" id="pass" type="password" class="form-control" style="border-radius: 0;" id="exampleInputPassword1" placeholder="Password">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 hidden " style="margin-bottom: 10px;">
                <button id="btn_register" class="btn btn-info btn-block">Register</button>
              </div>
              <div class="col-sm-offset-6"></div>               
              <div class="col-xs-12 col-sm-12">
                <button id="btn_login" class="btn btn-primary btn-block btn-custom-jk" data-style="expand-left" data-spinner-color="white" data-size="s" style="margin-bottom: 50px;">
                <span class=""></span> Login
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>            

</section>
    <!-- /.login-box -->
    <script src="assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="assets/plugins/iCheck/icheck.min.js"></script>
            <!-- PNotify -->
    <script type="text/javascript" src="assets/plugins/notify/pnotify.core.js"></script>
    <script type="text/javascript" src="assets/plugins/notify/pnotify.buttons.js"></script>
    <script type="text/javascript" src="assets/plugins/notify/pnotify.nonblock.js"></script>
    <script>
      $(function () {

        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });

        var bindEventHandlers=(function(){

                $('#btn_login').click(function(){
                    validateUser().done(function(response){
                        showNotification(response);
                        if(response.stat=="success"){
                            setTimeout(function(){
                                window.location.href = "Homepage";
                            },600);
                        }

                    }).always(function(){
                        setTimeout(function(){
                                $("#btn_login").html('Login');
                            },800);
                    });


                });


                $('input').keypress(function(evt){
                    if(evt.keyCode==13){ 
                      event.preventDefault();
                      $('#btn_login').click(); 
                    }
                });


            })();





            var validateUser=(function(){

                var _data={uname : $('input[name="user_name"]').val() , pword : $('input[name="user_pword"]').val()};

                return $.ajax({
                    "dataType":"json",
                    "type":"POST",
                    "url":"Login/transaction/validate",
                    "data" : _data,
                    "beforeSend": function(){
                        $(".btn_login").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw" style="font-size:12pt;"></i>');
                    }
                });
            });


            var showNotification=function(obj){
                PNotify.removeAll(); //remove all notifications
                new PNotify({
                    title:  "Notification",
                    text:  obj.msg,
                    type:  obj.stat
                });
            };
      });
    </script>
</body>

<!-- Mirrored from avenxo.kaijuthemes.com/extras-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Jun 2016 12:14:53 GMT -->
</html>
