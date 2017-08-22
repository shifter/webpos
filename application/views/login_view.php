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
    <style>
body{

}
html{
  background: #F3904F;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #3B4371, #F3904F);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #3B4371, #F3904F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  height:100vh;
  overflow:auto;
}

.hero{
  background-color: transparent;


}

@media (min-width:992px) {
  .hero .get-it{
    text-align:right;
    margin-top:80px;
    padding-right:30px;
  }
}

@media (max-width:992px) {
  .hero .get-it{
    text-align:center;
  }
}

@media (max-width:992px) {
  .hero .phone-preview{
    text-align:center;
  }
}

.hero .get-it h1, .hero .get-it p{
  color:#fff;
  text-shadow:2px 2px 3px rgba(0,0,0,0.3);
  margin-bottom:40px;
}

.hero .get-it .btn{
  margin-left:10px;
  margin-bottom:10px;
  text-shadow:none;
}

div.iphone-mockup{
  position:relative;
  max-width:250px;
  margin:20px;
  display:inline-block;
}

.iphone-mockup img.device{
  width:100%;
  height:auto;
}

.iphone-mockup .screen{
  position:absolute;
  width:88%;
  height:77%;
  top:12%;
  border-radius:2px;
  left:6%;
  border:1px solid #444;
  background-color:#aaa;
  overflow:hidden;
  background:url(../../assets/img/screen-content-iphone-6.jpg);
  background-size:cover;
  background-position:center;
}

.iphone-mockup .screen:before{
  content:'';
  background-color:#fff;
  position:absolute;
  width:70%;
  height:140%;
  top:-12%;
  right:-60%;
  transform:rotate(-19deg);
  opacity:0.2;
}

.icon-feature{
  text-align:center;
}

.icon-feature .glyphicon{
  font-size:60px;
}

section.features{
  background-color:#369;
  padding:40px 0;
  color:#fff;
}

.features h2{
  color:#fff;
}

.features .icon-features{
  margin-top:15px;
}

.testimonials blockquote{
  text-align:center;
}

section.testimonials{
  margin:50px 0;
}

.site-footer{
  padding:20px 0;
  text-align:center;
}

@media (min-width:768px) {
  .site-footer h5{
    text-align:left;
  }
}

.site-footer h5{
  color:inherit;
  font-size:20px;
}

.site-footer .social-icons a:hover{
  opacity:1;
}

.site-footer .social-icons a{
  display:inline-block;
  width:32px;
  border:none;
  font-size:20px;
  border-radius:50%;
  margin:4px;
  color:#fff;
  text-align:center;
  background-color:#798FA5;
  height:32px;
  opacity:0.8;
  line-height:32px;
}

@media (min-width:768px) {
  .login-box-body{
    margin-top:20px;
    background-color: transparent;
    border-radius: 5px;
    color:white;
  }
}
@media (min-width:1024px) {
  .login-box-body{
    margin-top:90px;
    background-color: transparent;
    border-radius: 5px;
    color:white;
  }
}

.login-box-body{
  box-shadow: 5px 5px 50px black;
  background-color: transparent;
  border-radius: 5px;
  color:white;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
  }

.login-box-body:hover{
  box-shadow: 5px 5px 50px #ecf0f1;
  -webkit-transition: all 0.3s ease;
  -moz-transition: all 0.3s ease;
  -ms-transition: all 0.3s ease;
  -o-transition: all 0.3s ease;
  transition: all 0.3s ease;
}

input{
  background-color: transparent !important;
  color:white !important;
  border-radius:5px !important;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
input:focus{
  background-color: #27ae60 !important;
  color:white !important;
  border:1px solid #ecf0f1 !important;
  font-weight: bold;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.btn{
  background-color:transparent;

  border:1px solid #ecf0f1;
  border-radius:5px !important;
  color:#ecf0f1;
  font-weight:bold;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;

}
.btn:hover{
  background-color:#27ae60;
  color:white;
  border:1px solid #ecf0f1;
  border-radius:5px !important;
  color:#ecf0f1;
  font-weight:bold;
-webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
.btn:focus{
  background-color:#27ae60;
  color:white;
  border:1px solid #ecf0f1;
  border-radius:5px !important;
  color:#ecf0f1;
  font-weight:bold;
}
.white{
  color:#ecf0f1 !important;
}



    </style>
</head>
    <body style="background-color:transparent;">
    <div class="jumbotron hero" style="background-color:transparent;">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 col-md-push-7 hidden-sm hidden-xs">
                      <div class="login-box-body">
                        <p class="login-box-msg" style="font-weight:bold;font-family:Web Serveroff;">Sign in to start your session</p>
                          <div class="form-group has-feedback">
                            <input type="email" class="form-control" name="user_name" placeholder="Email">
                            <span class="glyphicon glyphicon-envelope white form-control-feedback"></span>
                          </div>
                          <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="user_pword" placeholder="Password">
                            <span class="glyphicon glyphicon-lock white form-control-feedback"></span>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <button type="submit" id="btn_login" style="font-family:Web Serveroff;" class="btn btn-block btn-flat btn_login">Login</button>
                            </div>
                            <!-- /.col -->
                          </div>
                      </div>
                  </div>

                <div class="col-md-6 col-md-pull-3 get-it hidden-md hidden-lg" style="color:white;">
                  <div class="row">
                      <div class="text-center">
                          <h4 style="font-family:Web Serveroff;font-size:55pt;font-weight:bold;">JCORE</h4>

                          <span >
                              <address style="font-family:Web Serveroff;font-size:15pt;font-weight:bold;">
                                  Web Point of Sale System
                              </address>
                          </span>
                      </div>
                  </div>
                </div>

                <div class="col-md-6 col-md-pull-3 get-it hidden-sm hidden-xs" style="color:white;">
                    <div class="row">
                        <div class="text-center">
                            <h4 style="font-family:Web Serveroff;font-size:55pt;font-weight:bold;">JCORE</h4>

                            <span >
                                <address style="font-family:Web Serveroff;font-size:15pt;font-weight:bold;">
                                    Web Point of Sale System
                                </address>
                            </span>
                        </div>
                    </div>
                </div>
                <center>
                <div class="col-md-4 col-md-push-7 hidden-md hidden-lg" style="width:95%;">
                      <div class="login-box-body">
                        <p class="login-box-msg" style="font-weight:bold;font-family:Web Serveroff;">Sign in to start your session</p>
                          <div class="form-group has-feedback">
                            <input type="email" class="form-control" name="user_name1" placeholder="Email">
                            <span class="glyphicon glyphicon-envelope white form-control-feedback"></span>
                          </div>
                          <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="user_pword1" placeholder="Password">
                            <span class="glyphicon glyphicon-lock white form-control-feedback"></span>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <button type="submit" id="btn_login" style="font-family:Web Serveroff;" class="btn btn-block btn-flat btn_login">Login</button>
                            </div>
                            <!-- /.col -->
                          </div>
                      </div>
                  </div>
                </center>
            </div>
        </div>
    </div>
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

                $('.btn_login').click(function(){


                    validateUser().done(function(response){

                        showNotification(response);

                        if(response.stat=="success"){
                            setTimeout(function(){
                                window.location.href = "Homepage";
                            },600);
                        }

                    }).always(function(){
                        setTimeout(function(){
                                $(".btn_login").html('Login');
                            },800);
                    });


                });


                $('input').keypress(function(evt){
                    if(evt.keyCode==13){ $('.btn_login').click(); }
                });


            })();





            var validateUser=(function(){
              if($('input[name="user_name"]').val()==null|| $('input[name="user_name"]').val()==''){
                $('input[name="user_name"]').val($('input[name="user_name1"]').val());
                $('input[name="user_pword"]').val($('input[name="user_pword1"]').val());
              }
              else{

              }

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
