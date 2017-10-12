


  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="assets/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="assets/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <link href="assets/plugins/notify/pnotify.css" rel="stylesheet"> <!-- notification -->
  <link href="assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet"> <!-- sweet alert -->
  <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Select2 -->
  <link rel="stylesheet" href="assets/plugins/select2/select2.min.css">
    <!-- Lightbox -->
  <link rel="stylesheet" href="assets/plugins/lightgallery/dist/css/lightgallery.css">
  <!-- pace -->
  <link rel="stylesheet" href="assets/plugins/pace/pace.css">
  <!-- custom style -->
  <link rel="stylesheet" href="assets/css/styles.css">

<!--   <link rel="stylesheet" href="assets/plugins/datetimepicker/bootstrap-datetimepicker.min.css"> -->


  <style>
    textarea{
      resize:vertical;
    }
    input{
        font-size:10pt !important;
    }
    .fa-size{
      width:15px;
    }
    .tbl-header{
      background-color: #222d32;
      color:white;
    }
    .select2{
      width:100% !important;
    }
    .form-control {
			transition: all 0.5s ease;
      border:1px solid #95a5a6 !important;
    }
    .form-control:focus {
				transition: all 0.5s ease;
        box-shadow: 1px 1px 15px black !important;
				border-radius: 5px;
				color:black;
        font-weight: bold;
        font-size:11pt;
    }
    .form-control-cc {
      transition: all 0.5s ease;
      border:1px solid #95a5a6 !important;
      height:30px;
      width:75px;
      align-self: right;
    }
    .form-control-cc:focus {
        transition: all 0.5s ease;
        box-shadow: 1px 1px 15px black !important;
        border-radius: 5px;
        color:black;
        font-weight: bold;
        font-size:11pt;
    }
    .th-right{
        text-align: right;
        padding: 10px;
    }
    /*select:focus {
			transition: all 0.5s ease;
			box-shadow: 1px 1px 15px black !important;
			border-radius: 10px;
			color:black;
        font-weight: bold;
    }*/
    .sm-pos{
      top: 0.0001%;
      bottom: 10%;
      height: auto !important;
      width:25% !important;
    }
		textarea.form-control{
			transition: all 0.5s ease;
    }
    textarea.form-control:focus {
			transition: all 0.5s ease;
			box-shadow: 1px 1px 15px black !important;
			border-radius: 10px;
			color:black;
        font-weight: bold;
    }
    input[type="checkbox"]:focus {
			transition: all 0.5s ease;
      outline:5px solid #616161 !important;
    }

		.select2 {
			transition: all 0.5s ease;
      border:1px solid #95a5a6 !important;
    }
    .select2:focus {
				transition: all 0.5s ease;
        box-shadow: 1px 1px 15px black !important;
				border-radius: 5px;
				color:black;
        font-weight: bold;
        font-size:11pt;
    }

		.btn{
			transition: all 0.5s ease;
		}

    .colorsearch{
      transition: all 0.5s ease;
    }
    .box{
      transition: all 0.5s ease;
    }

		.btn:hover{
			box-shadow: 2px 2px 10px black;
		}


    .typeahead:focus{
      transition: all 0.5s ease;
      box-shadow: 1px 1px 15px black !important;
      border-radius: 5px;
      color:black;
      font-weight: bold;
      font-size:11pt;
    }
    .ui-pnotify{
      top:50px;
    }
    /*.loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #16a085;
      background: url('assets/loader.svg') 50px 50px no-repeat rgb(249,249,249);
    }*/
    .loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url(assets/ripple.svg) center no-repeat #fff;
    }
    .odd{
      height:20px !important;
    }
    .even{
      height:20px !important;
    }
    .table{
      width:100% !important;
    }
    td.details-control {
        background: url('assets/img/open.png') no-repeat center center;
        cursor: pointer;
    }
    tr.details td.details-control {
        background: url('assets/img/close.png') no-repeat center center;
    }

    .imgwrapper img{
      box-shadow: 0px 0px 3px black !important;height: 100%;width: auto;vertical-align: middle;
      border-radius:5%;
    }
    .imgwrapper{
      box-shadow: 0px 1px 25px black !important;
      border-radius:5%;
    }
    .smalltable{
      font-size:8pt;
    }
    .noborder{
			border:none;
      background-color:transparent;
		}
    .pointer{
			cursor: pointer;
		}
    .inputsmall{
      width:100%;
    }
    .modal-header{
      cursor:move;
    }
    .btncash{
      width:100%;
      background-color:#B0BEC5;
      color:#263238 !important;
      height:60px;
      margin-top:2px;
      font-weight:bold;
      font-size:13pt;
      box-shadow: 1px 1px 2px gray;
      border:1px solid #90A4AE;
      margin-bottom: 5px !important;
    }
    .btncash:hover{
      background-color: #CFD8DC;
    }
    .amounts{
      color:#2ecc71;
      margin-right:5px;
      float:right;
      text-align:right;
      font-weight:bold;
      margin-top:0px !important;
      border:none;
      background-color:transparent;
      color:#f1c40f;
      font-size:18pt !important;
    }

    .lgtext{
      color:#e74c3c !important;
      text-align:right !important;
      font-size:30pt !important;  
      width: 95% !important;
      height: 50px !important;
      border: 0px !important;
    }

    .btn-blue{
      background-color:#2980b9;
      color:white;
    }
    #side-li
    {
      margin-left: 20px;
    }
    #side-li-journal
    {
      margin-left: 15px;
    }
    .qty-details{
      border-top: .5px solid #607D8B;
      border-left: .5px solid #607D8B;
      border-right: .5px solid #607D8B;
      background-color: #ECEFF1;
      margin-top: 10px;
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 10px;
      padding-bottom: 10px;
      font-size: 10pt;
      font-weight: bold;
      text-align: center;
    }
    .detail-td{
      padding-left: 20px;
      padding-top: 5px;
      padding-bottom: 5px;
      width: 80%;
    }
    .pro-detail{
      background-color: #fff;
      color:black;
      padding: 5px;
      border: 1px solid #B0BEC5;
    }
    .enter-qty-header{
      width: auto;
      min-width: auto;
      color: black;
      padding: 10px;
      text-align: center;
      background-color: #CFD8DC;
      font-weight: bold;
      border-left: 1px solid #607D8B;
      border-right: 1px solid #607D8B;
    }
    #pro-icon{
      background-color: #ECEFF1;
      color: #263238;
      border-top: 1px solid gray;
      border-left: 1px solid gray;
      border-bottom: 1px solid gray;
    }

      .btn-main-pos{
        text-transform: capitalize; 
        font-weight: bold; 
        height: 80px; 
        width: 120px; 
        background-color: #ECEFF1; 
        color: #263238;
      }
      .btn-main-pos:hover{
        background-color: #CFD8DC;
      }
      .btn-ins-main{
        margin: 10px
      }
      .btn-hr-main{
        margin: 0 !important; 
        padding: 0 !important; 
        border-top: 1px solid #CFD8DC;
      }
      #tbl_card, #tbl_gc, #tbl_charge, #tbl_cheque tbody tr{
        cursor: pointer;
      }
      .div-item-cart{
        overflow-x: auto;overflow-y: scroll; height: 429px;
      }
      .table-item-cart{
        border-collapse: collapse !important;
      }
      .panel-item-cart{
        padding:5px;
      }
      #tempcode{
        border:none;background-color:white !important;
      }
      #txtsearch{
        border-style: inset !important; 
        border:4px solid #607D8B !important; 
        border-radius: 2px !important; 
        height: 40px; 
        font-size: 17pt !important;
      }
      .thead-item{
        background-color: #DCEDC8 !important;
      }
      .thead-modal{
        background-color: #CFD8DC !important;
      }
      .th-item{
        border-bottom: 1px solid #90A4AE !important;
        border-top: 1px solid #90A4AE !important;
        border-left: 1px solid #90A4AE !important;
        border-right: 1px solid #90A4AE !important;
      }
      .th-modal-first{
        border-bottom: 1px solid #90A4AE !important;
        border-top: 1px solid #90A4AE !important;
        border-left: 1px solid #90A4AE !important;
        padding: 10px !important;
      }
      .th-modal-last{
        border-bottom: 1px solid #90A4AE !important;
        border-top: 1px solid #90A4AE !important;
        border-right: 1px solid #90A4AE !important;
        padding: 10px !important;
      }
      .th-modal{
        border-top: 1px solid #90A4AE !important;
        border-bottom: 1px solid #90A4AE !important;
        padding: 10px !important;
      }
      .th-qty{
        border-bottom: 1px solid #90A4AE !important;
        border-top: 1px solid #90A4AE !important;
        text-align: center !important;
        border-right: 1px solid #90A4AE !important;
      }
      .th-right-items{
        text-align: right;
        border-bottom: 1px solid #90A4AE !important;
        border-top: 1px solid #90A4AE !important;
        border-right: 1px solid #90A4AE !important;
      }
      .amount-due-right{
        margin-top:20px;
      }
      .panel-amt-due{
        background-color:#4CAF50;
        border-radius:4px; 
        padding: 10px;
      }
      .amt-due-lbl{
        word-wrap:break-word;
        margin:5px;
        color:white;
        font-weight:bold;
      }
      .hr-amt-due{
        border-top: 1px solid #CFD8DC !important; 
        margin: 0px !important;
        margin-bottom: 10px !important;
      }
      .amt-due{
        color: #DCEDC8 !important;
      }
      .custom-hr{
       margin:0 !important;
      }
      .panel-discount-due{
        background-color:#607D8B;
        border-radius:5px;
        padding: 10px;
        margin-top: 2px !important;
      }
      .disc-lbl{
        word-wrap:break-word;
        margin:5px;
        color:#fff;
        font-weight:bold;
      }
      .hr-disc{
        border-top: 1px solid #CFD8DC !important; 
        margin: 0px !important;
        margin-bottom: 10px !important;
      }
      .disc-inp{
        color: #DCEDC8 !important;
      }
      #btn_payment{
        margin-top:5px;
        width:100%; 
        padding: 10px; 
        background-color: #ECEFF1 !important; 
        font-size: 12pt !important; 
        color:#212121 !important; 
        border: 1px solid #455A64 !important;
      }
      .img-logo-pos{
        margin-top: 20px !important; 
        margin-left: 20px !important; 
        width: 90% !important;
        min-height: 200px !important;
        max-height: 200px !important;
        height: 200px !important;
        -moz-user-select: none;
      }
      .modal-pymnt{
        float:left !important;
        margin-left:18%; 
        margin-top: 5% !important;
      }
      .header-pymnt{
        background-color:#2ecc71; 
        border-bottom: 10px solid #ECEFF1 !important;
      }
      .space-mdl-pymnt{
        margin-bottom: 10px !important;
      }
      .btn-cl{
        margin-bottom:2px;
      }
      .clearcash{
        color: #e67e22 !important;
      }
      .cancelpymnt{
        color: #e74c3c !important;
      }
      .finalize{
        background-color:#78909C !important; 
        color: #ecf0f1 !important; 
        height:60px !important;
        font-size: 18pt !important;
      }
      .td-pymnt-type{
        border-bottom: 3px solid #90A4AE !important;
        font-size: 13pt;
      }
      .td-pymnt-border{
        border-bottom: 0px !important;
      }
      .fgroup{
        margin-top:5px;
      }
      .payment-details{
        margin-top: 0px !important;
      }
      .border-paymnt-details{
        border-bottom: 2px solid #90A4AE !important; 
        width: 100%;
      }
      .pymnt-details-color{
        color: #d35400 !important;
      }
      .tbl_products{
        margin: 0px !important; 
        padding: 0px !important;
      }
      .tbl_products th{
        border-bottom: 2px solid #90A4AE !important;
        font-size: 12pt !important;
      }
      .scroll-div-pro{
        overflow:scroll; 
        max-height: 420px;
        border: 1px solid #90A4AE !important; 
        margin-bottom: 20px !important;
      }
      .scroll-div-pro-cc{
        overflow:scroll; 
        max-height: 500px; 
        margin-bottom: 20px !important;
        overflow-x: hidden;
      }
      .mb-tbl-product{
        margin-left: 0px !important;
        margin-top: 10px !important; 
        padding:0px !important;
        border-top: 10px solid #ECEFF1 !important; padding: 0px !important; margin: 0px !important;
      }
      .hd-modal-pos{
        background-color:#2980b9; 
        border-bottom: 10px solid #ECEFF1 !important;
      }
      .md-pos{
        top: 5%;
        height: auto !important;
      }
      #div_product_list{
        margin-top: 10px !important;
      }
      .mb-journal{
        width: 100% !important; 
        margin: 0 !important; 
        padding: 0 !important;
      }
      .journal-panel{
        background: #ECEFF1;
        padding: 10px;
        padding-bottom: 10px; 
        border-bottom: 1px solid #B0BEC5;
        border-top: 1px solid #B0BEC5;
      }
      .scroll-div-journal{
        overflow:scroll; max-height: 400px;
      }
      .md-qty{
        top: 15%;
      }
      .mb-qty{
        margin: 0 !important; 
        padding: 0 !important;
      }
      .qty-panel, .col-pymnt-details{
        margin-bottom: 10px;
      }
      #tbl_qty{
        width: 100% !important;
      }
      #row_qty{
        height: 100px; 
        font-size: 80px !important; 
        text-align: center; 
        color: green;
      }
      .md-authorization{
        top: 30%; width: 350px !important;
      }
      .mb-authorization{
        border-top: 10px solid #ECEFF1 !important;
      }
      .addon-pos{
        background: #ECEFF1; color: #78909C;
      }
      .left-fa-inp{
        margin-top: 4px !important;margin-bottom: 3px !important;
      }
      #void_pwd{
        font-size: 15pt !important;
      }
      .mf-authorization{
        background-color: #ECEFF1; 
        border-top: 2px solid #CFD8DC !important;
      }
      .btn-authorization{
        width: 40%;
      }
      .md-card-pymnt{
        top: 15%; width: 800px !important; margin-left: 22% !important;
      }
      .hd-modal-pymnt{
        border-bottom: 2px solid #CFD8DC !important;
      }
      .mb-pymnt{
        border-top: 10px solid #ECEFF1 !important; padding: 0px !important; margin: 0px !important;
      }
      .cf-pymnt{
        margin-top: 10px !important;
      }
      .panel-pymnt{
        background-color: #ECEFF1; 
        padding: 10px; 
        margin-bottom: 0px !important;
        border-top: 1px solid #CFD8DC;
        border-left: 1px solid #CFD8DC;
        border-right: 1px solid #CFD8DC;
      }
      .scroll-panel-pymnt{
        overflow:scroll; 
        max-height: 240px;
        overflow-x: hidden; 
        border: 1px solid #CFD8DC;
        margin: 0px !important;
      }
      #tbl_cheque, #tbl_charge, #tbl_card, #tbl_gc, #tbl_products{
        width: 100% !important; margin: 0px !important; padding: 0px !important;
      }
      .fg-pymnt{
        margin-top:5px;
      }
      .icon-pymnt{
        margin-top: 4px !important;margin-bottom: 3px !important;
      }
      .inp-size{
        font-size:11pt !important;
      }
      .amnt-pymnt{
        width: 100% !important; 
        color:#2E7D32 !important;
        text-align:right;
        font-size:18pt; 
        border: 1px solid #90A4AE !important; 
        padding: 5px !important;
      }
      .mf-pymnt{
        background-color: #ECEFF1; border-top: 2px solid #CFD8DC !important;
      }
      .btn-pymnt{
        font-size: 12pt;
        width: 20%; 
        height: 40px;
      }
      .md-pymnt{
        top: 22%; width: 800px !important; margin-left: 22% !important
      }
      .mb-senior{
        border-top: 10px solid #ECEFF1 !important;
      }
      .btn-senior{
        width: 38% !important;
      }
      .custom_frame{
          border: 1px solid lightgray;
          -webkit-border-radius: 3px;
          -moz-border-radius: 3px;
          border-radius: 3px;
          padding-bottom: 20px;
      }

      #tbl_items input{
        cursor: pointer;
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
        user-select: none; /* Non-prefixed version, currently supported by Chrome and Opera */
      }
      #amountduepymt, #chngedpymnt{
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
        user-select: none; /* Non-prefixed version, currently supported by Chrome and Opera */
      }
      .pymntmthdtblinp input{
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
        user-select: none; /* Non-prefixed version, currently supported by Chrome and Opera */
        border: 0px !important;
        width: 95%; 
        font-size: 15pt !important;
      }

      #cash:focus{
        outline:none !important;
      }
      #cash{
        color: #2E7D32 !important;
      }
      #txtsearch:focus{
        outline:none !important;
      }
      .pymntmthdtbl{
        border-bottom: 1px solid #CFD8DC !important;
        font-size: 13pt;
      }
      .pymntmthd{
        text-align: right;
        font-size: 15pt !important;
      }
      .smalltable input{
        -webkit-touch-callout: none; /* iOS Safari */
        -webkit-user-select: none; /* Safari */
        -khtml-user-select: none; /* Konqueror HTML */
        -moz-user-select: none; /* Firefox */
        -ms-user-select: none; /* Internet Explorer/Edge */
        user-select: none; /* Non-prefixed version, currently supported by Chrome and Opera */
      }
      #tbl_discounts{
        font-size: 13pt !important;
      }
      #modal-senior{
        width:400px;
        top: 14% !important;
        border: 1px solid rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
        -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
        box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
        -webkit-background-clip: padding-box;
        -moz-background-clip: padding-box;
        background-clip: padding-box;
      }
      .modal-dialog{
        border: 1px solid rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
        -moz-box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
        box-shadow: 0 3px 7px rgba(0, 0, 0, 0.3);
        -webkit-background-clip: padding-box;
        -moz-background-clip: padding-box;
        background-clip: padding-box;
      }

      .twitter-typeahead, .tt-hint, .tt-input, .tt-dropdown-menu { width: 100%; }
      .swal-top{
        border-top: 1px solid #d50000;
        border-bottom: 1px solid #d50000;
      }
      .void-notif-class{
        font-size: 12pt !important;
        font-weight: bold !important;
      }
      .numeric{
          text-align: right;
      }

      .pos-body{
          -webkit-touch-callout: none; /* iOS Safari */
          -webkit-user-select: none; /* Safari */
          -khtml-user-select: none; /* Konqueror HTML */
          -moz-user-select: none; /* Firefox */
          -ms-user-select: none; /* Internet Explorer/Edge */
          user-select: none; /* Non-prefixed version, currently supported by Chrome and Opera */
      }
      #thead-fixed{
        width: 100% !important;
        padding: 10px !important;
      }
      .inp-search-pro{
        background-color: #ECEFF1 !important;
        font-size: 15pt !important;
      }
      #btn-cancel-pro{
        background-color: #f44336;
        color: #fff;
        float: right !important;
      }
      .fscreen{
        cursor: pointer;
      }
      .pos-content{
        padding-bottom:0px !important;
        margin-bottom:0px !important;
      }
      
  </style>
