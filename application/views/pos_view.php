
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
  <!--/twitter typehead-->
  <link href="assets/plugins/twittertypehead/twitter.typehead.css" rel="stylesheet">
  <style>

/*        ::-webkit-scrollbar {
            width: 10px;
        }

        .table-responsive::-webkit-scrollbar {
            width: 10px !important;
        }
        .table-responsive::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 1px rgba(0,0,0,0.3) !important;
        }
        .table-responsive::-webkit-scrollbar-thumb {
          background-color: slategrey !important;
          outline: 1px solid darkgrey !important;
        }

         
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 1px rgba(0,0,0,0.3);
        }
        ::-webkit-scrollbar-thumb {
          background-color: slategrey;
          outline: 1px solid darkgrey;
        }*/

      .custom_frame{
          border: 1px solid lightgray;
          -webkit-border-radius: 5px;
          -moz-border-radius: 5px;
          border-radius: 5px;
      }

      .numeric{
          text-align: right;
      }

      .modal-backdrop
      {
          opacity:0.01 !important;
      }

      html {
        zoom: 95%;
      }
      .swal-top{
        border-top: 1px solid #d50000;
        border-bottom: 1px solid #d50000;
      }
      .void-notif-class{
        font-size: 12pt !important;
        font-weight: bold !important;
      }
      html body{
          -webkit-touch-callout: none; /* iOS Safari */
          -webkit-user-select: none; /* Safari */
          -khtml-user-select: none; /* Konqueror HTML */
          -moz-user-select: none; /* Firefox */
          -ms-user-select: none; /* Internet Explorer/Edge */
          user-select: none; /* Non-prefixed version, currently supported by Chrome and Opera */
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
        margin-top: 14% !important;
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
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">
    <?php echo $_top_navigation; ?>
    <?php echo $_side_navigation; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pos
        <small>Sales</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="Homepage"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">POS</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <!-- /.box-header -->
            <div id="invoice_fields">
              <div class="panel panel-default">
                <div class="panel-body" style="padding:5px;">
                      <div class="col-md-9 custom_frame"><br />
                          <label class="control-label boldlabel" ><strong>Enter Barcode or Search Item :</strong></label>
                          <div id="custom-templates">
                              <label class="control-label"><strong>Quantity:</strong></label><input style="border:none;background-color:white !important;" type="text" id="tempcode" disabled>
                              <input class="typeahead colorsearch" id="txtsearch" style="border:1px solid #27ae60 !important;" type="text" placeholder="Enter PLU or Search Item">
                          </div><br />

                          <form id="frm_items">
                              <div class="table-responsive" style="overflow-x: auto;overflow-y: scroll; height: 469px;">
                                  <table id="tbl_items" class="table table-striped table-bordered " cellspacing="0" width="100%">
                                  <thead style="background-color:#2c3e50;color:white;">
                                  <tr>
                                    <th width="40%">Item</th>
                                    <th width="10%">Qty</th>
                                    <th width="12%" style="text-align: right">SRP</th>
                                    <th width="12%" style="text-align: right">Discount</th>
                                    <th>T.D</th> <!-- total discount -->
                                    <th>Tax %</th>
                                    <th width="12%" style="text-align: right">Total</th>
                                    <th>V.I</th> <!-- vat input -->
                                    <th>N.V</th> <!-- net of vat -->
                                    <td>Item ID</td><!-- product id -->
                                    <td>Item Code</td>
                                    <td>Disc Status</td><!-- product id -->
                                    <td>Non Vat Sales</td>
                                    <td hidden>Rate</td>
                                    <!--<th><center>Action</center></th>-->
                                  </tr>
                                  </thead>
                                  <tbody>

                                  </tbody>
                              </table>
                              </div>
                          </form>
                          <div class="row">
                              <div class="col-lg-3 col-lg-offset-9">
                                  <table id="tbl_purchase_summary" class="table invoice-total" style="display: none;">
                                      <tbody>
                                      <tr>
                                          <td class="black">Discount :</td>
                                          <td align="right" class="black">0.00</td>
                                      </tr>
                                      <tr>
                                          <td class="black">Total before Tax :</td>
                                          <td align="right" class="black">0.00</td>
                                      </tr>
                                      <tr>
                                          <td class="black">Tax :</td>
                                          <td align="right" class="black">0.00</td>
                                      </tr>
                                      <tr>
                                          <td ><strong class="boldlabel">Total After Tax :</strong></td>
                                          <td class="green" align="right"><b>0.00</b></td>
                                      </tr>
                                      <tr>
                                          <td ><strong class="boldlabel">Non Vat Sales :</strong></td>
                                          <td class="green" align="right"><b>0.00</b></td>
                                      </tr>
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3 custom_frame">
                        <div class="col-md-12" style="margin-top:3px;">
                          <div class="row" style="background-color:black;border-radius:5px;">
                            <h3 style="word-wrap:break-word;margin:5px;color:white;font-weight:bold;">Amount Due</h3>
                            <input class="amounts" type="text" name="post_amountdue" value="0.00" id="amountdue" disabled>
                          </div>
                          <hr style="margin:0;">
                          <div class="row" style="background-color:black;border-radius:5px;">
                            <h3 style="word-wrap:break-word;margin:5px;color:white;font-weight:bold;">Tendered</h3>
                            <input class="amounts" type="text" name="post_tendered" value="0.00" id="tendered" disabled>
                          </div>
                          <hr style="margin:0;">
                          <div class="row" style="background-color:black;border-radius:5px;">
                            <h3 style="word-wrap:break-word;margin:5px;color:white;font-weight:bold;">Change</h3>
                            <input class="amounts" type="text" name="post_change" value="0.00" id="change" disabled>
                          </div>
                          <div class="row">
                            <h4 style="word-wrap:break-word;margin:5px;font-weight:bold;">Payment</h4>
                            <table class="table table-responsive table-striped table-bordered smalltable">
                              <thead>
                                <tr>
                                  <th>#</th>
                                  <th>Method</th>
                                  <th>Amount</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td>Cash</td>
      														<td><input type="text" class="noborder inputsmall" id="cashamount" name="post_cashamount" value="0.00" readonly></td>
      														<td><center><span class="pointer"><i  id="removecash" class="fa fa-trash-o"></i></span></center>
      														<td hidden><input type="text" class="noborder" id="post_cash_remarks" name="post_cash_remarks" value="0.00" readonly></td>
                                </tr>
                                <tr>
      														<td>2</td>
      														<td>Check</td>
      														<td><input type="text" class="noborder inputsmall" id="checkamount" name="post_checkamount" value="0.00" readonly></td>
      														<td hidden><input type="text" class="noborder" id="post_check_bank" name="post_check_bank" value="" readonly></td>
      														<td hidden><input type="text" class="noborder" id="post_check_address" name="post_check_address" value="" readonly></td>
      														<td hidden><input type="text" class="noborder" id="post_check_number" name="post_check_number" value="0.00" readonly></td>
      														<td hidden><input type="date" class="noborder" id="post_check_date" name="post_check_date" value="" readonly></td>
      														<td><center><span class="pointer" ><i id="removecheck" class="fa fa-trash-o"></i></span></center>
      														</td>
      													</tr>
      													<tr>
      														<td>3</td>
      														<td>Card</td>
      														<td><input type="text" class="noborder inputsmall" id="cardamount" name="post_cardamount" value="0.00" readonly></td>
      														<td><center><span class="pointer" ><i id="removecard" class="fa fa-trash-o"></i></span></center>
      														<td hidden><input type="text" class="noborder" id="post_card_type" name="post_card_type" value="" readonly></td>
      														<td hidden><input type="text" class="noborder" id="post_card_holder" name="post_card_holder" value="" readonly></td>
      														<td hidden><input type="text" class="noborder" id="post_card_number" name="post_card_number" value="" readonly></td>
      														<td hidden><input type="text" class="noborder" id="post_card_apnumber" name="post_card_apnumber" value="" readonly></td>
      														<td hidden><input type="date" class="noborder" id="post_card_expdate" name="post_card_expdate" value="" readonly></td>

      														</td>
      													</tr>
      													<tr>
      														<td>4</td>
      														<td>Charge</td>
      														<td><input type="text" class="noborder inputsmall" id="chargeamount" name="post_chargeamount" value="0.00" readonly></td>
      														<td hidden><input type="text" class="noborder" id="post_chargeto" name="post_chargeto" value="" readonly></td>
      														<td hidden><input type="text" class="noborder" id="post_charge_remarks" name="post_charge_remarks" value="" readonly></td>
      														<td hidden><input type="date" class="noborder" id="post_charge_date" name="post_charge_date" value="" readonly></td>
      														<td><center><span class="pointer" ><i id="removecharge" class="fa fa-trash-o"></i></span></center>
      														</td>
      													</tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="row">
                            <label for="Customer" style="font-weight:bold;">Customer:</label>
                           <div class="input-group">
                           <select id="customers" name="customers_name" class="form-control" >
                             <option value="0">Walk-In</option>
                               <?php
                               foreach($customers as $row)
                               {
                                   echo '<option value="'.$row->customer_code.'">'.$row->customer_name.'</option>';
                               }
                               ?>
                           </select>
                             <span class="input-group-btn">
                             <button class="btn btn-default" id="btn_customer" type="button"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></button>
                             </span>
                           </div>
                          </div>
                          <div class="row">
                            <button class="btn btn-primary" style="margin-top:5px;width:100%;" data-toggle="modal" data-target="#modal_payment">Alt P - Make Payment</button>
                            <button class="btn btn-success finalize" style="margin-top:5px;width:100%;margin-bottom:8px;">Finalize</button>
                          </div>
                        </div>
                      </div>
              </div>
              <div class="panel-footer">
                  <div class="row">
                      <div class="col-sm-12">
                        <button id="btn_bcode" class="btn-primary btn" style="text-transform: capitalize; font-weight: bold; height: 50px;">
                           Alt S - Scan Barcode
                        </button>
                        <button id="btn_browse" class="btn-primary btn" style="text-transform: capitalize; font-weight: bold; margin: 5px; height: 50px;">
                            Alt B - Browse List
                        </button>
                        <button id="btn_qty" class="btn-primary btn" style="text-transform: capitalize; font-weight: bold; margin: 5px; height: 50px;">
                           Alt Q - Quantity
                        </button>
                        <button id="btn_journal" class="btn-primary btn" style="text-transform: capitalize; font-weight: bold; margin: 5px; height: 50px;">
                           Alt J - Journal
                        </button>
                        <button id="btn_cancel" class="btn-primary btn" style="text-transform: capitalize; font-weight: bold; margin: 5px; height: 50px;">
                           Alt C - Cancel
                        </button>
                        <button id="btn_void" type="button" class="btn-primary btn" style="text-transform: capitalize; font-weight: bold; margin: 5px; height: 50px;">
                           Alt V - Void
                        </button>
                        <button id="btn_discount" class="btn-primary btn" style="text-transform: capitalize; font-weight: bold; margin: 5px; height: 50px;">
                           Alt T - Discount
                        </button>
                        <button id="btn_endbatch" class="btn-primary btn" style="text-transform: capitalize; font-weight: bold; height: 50px;">
                           Alt H - End Batch
                        </button>
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
  <div id="modal_payment" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
      <div class="modal-dialog modal-lg" style="float:left !important;margin-left:5%;">
          <div class="modal-content"><!---content-->
              <div class="modal-header" style="background-color:#2ecc71">
                  <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                  <h4 class="modal-title" style="color:white;">Payment</h4>

              </div>

              <div class="modal-body">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#cash_tab">Cash</a></li>
					<li><a data-toggle="tab" href="#check_tab">Check</a></li>
					<li><a data-toggle="tab" href="#card_tab">Card</a></li>
					<li><a data-toggle="tab" href="#charge_tab">Charge</a></li>

				  </ul>

				  </div>

				  <div class="tab-content">
				<div id="cash_tab" class="tab-pane fade in active">
				<div class="row">
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="col-md-4">
							<button class="btn btncash click_class" value="20">20</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_class" value="50">50</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_class" value="100">100</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_class" value="200">200</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_class" value="500">500</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_class" value="1000">1000</button>
						</div>

						<div class="col-md-4">
							<button class="btn btncash click_class2" value="1">1</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_class2" value="2">2</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_class2" value="3">3</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_class2" value="4">4</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_class2" value="5">5</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_class2" value="6">6</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_class2" value="7">7</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_class2" value="8">8</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_class2" value="9">9</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_class2" value="0">0</button>
						</div>
						<div class="col-md-4" style="margin-bottom:2px;">
							<button class="btn btncash clearcash" style="background-color:#e74c3c !important;">CLEAR</button>
						</div>
					</div>
					<div class="col-md-6">

						<form role="form">
						<div class="form-group" style="margin-top:5px;">
						 <label for="Type of Payment" style="font-weight:bold;">Remarks:</label>
						  <textarea type="text" class="form-control" id="cash_remarks"></textarea>
							 <label for="Type of Payment" style="font-weight:bold;">Cash Amount Receive:</label>
							<input type="text" class="form-control lgtext" id="cash" placeholder="0.00" style="color:#e74c3c;text-align:right;font-size:18pt" autocomplete="off">
						</div>
						</form>
						<button class="btn btncash finalize" style="background-color:#2980b9 !important; height:60px !important;">Finalize</button>
					</div>
				</div>
				</div>
				</div>
			<div id="check_tab" class="tab-pane fade in">
				<div class="row">
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="col-md-4">
							<button class="btn btncash click_check" value="20" >20</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_check" value="50">50</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_check" value="100">100</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_check" value="200">200</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_check" value="500">500</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_check" value="1000">1000</button>
						</div>

						<div class="col-md-4">
							<button class="btn btncash click_check2" value="1">1</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_check2" value="2">2</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_check2" value="3">3</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_check2" value="4">4</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_check2" value="5">5</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_check2" value="6">6</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_check2" value="7">7</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_check2" value="8">8</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_check2" value="9">9</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_check2" value="0">0</button>
						</div>
						<div class="col-md-4" style="margin-bottom:2px;">
							<button class="btn btncash clearcheck" style="background-color:#e74c3c !important;">CLEAR</button>
						</div>
					</div>
					<div class="col-md-6">

						<form role="form" name="check_payment">
						<div class="form-group" style="margin-top:5px;">
						  <label for="usr">Bank *:</label>
						  <input type="text" class="form-control" id="check_bank" placeholder="Bank" name="check_bank">
						  <label for="remarks">Address:</label>
						  <textarea type="text" class="form-control" placeholder="Address" id="check_address" name="check_address"></textarea>
							 <label for="remarks">Check # *:</label>
							<input type="text" class="form-control" id="check_number" name="check_number" placeholder="Check Number" style="font-size:18pt">
							 <label for="remarks">Check Date:</label>
							<input type="date" class="form-control" id="check_date" name="check_date" placeholder="Check Date" >
							<label for="check amount">Check Amount:</label>
							<input type="text" class="form-control lgtext" id="check" placeholder="0.00"  style="color:#e74c3c;text-align:right;font-size:18pt">
						</div>
						</form>
							<button class="btn btncash finalize" style="background-color:#2980b9 !important; height:60px !important;">Finalize</button>
					</div>
				</div>
				</div>
				</div>
			<div id="card_tab" class="tab-pane fade in">
				<div class="row">
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="col-md-4">
							<button class="btn btncash click_card" value="20" >20</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_card" value="50">50</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_card" value="100">100</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_card" value="200">200</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_card" value="500">500</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_card" value="1000">1000</button>
						</div>

						<div class="col-md-4">
							<button class="btn btncash click_card2" value="1">1</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_card2" value="2">2</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_card2" value="3">3</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_card2" value="4">4</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_card2" value="5">5</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_card2" value="6">6</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_card2" value="7">7</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_card2" value="8">8</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_card2" value="9">9</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_card2" value="0">0</button>
						</div>
						<div class="col-md-4" style="margin-bottom:2px;">
							<button class="btn btncash clearcard" style="background-color:#e74c3c !important;">CLEAR</button>
						</div>
					</div>
					<div class="col-md-6">
					<form role="form" name="card_payment">

						<div class="form-group" style="margin-top:5px;">
						 <label for="usr">Card Type *:</label>
						<select class="form-control" id="typeofcard">
							<option value="">Select Type of Card</option>
							<option value="Visa">Visa</option>
							<option value="Mastercard">Mastercard</option>
						</option>
						</select>

						  <label for="usr">Card Holder *:</label>
						  <input type="text" class="form-control" placeholder="Card Holder" id="cardholder">
						  <label for="remarks">Card # *:</label>
						 <input type="text" class="form-control" placeholder="Card #" id="cardnum">
							 <label for="remarks">Approval # *:</label>
							<input type="text" class="form-control" id="approvalnum" placeholder="Approval Number" style="font-size:18pt">
							 <label for="remarks">Expiry Date:</label>
							<input type="date" class="form-control" id="cardexpiry" placeholder="Expiry Date" >
							<label for="remarks">Card Amount:</label>
							<input type="text" class="form-control lgtext" id="card" placeholder="0.00" style="color:#e74c3c;text-align:right;font-size:18pt">
						</div>
						</form>
						<button class="btn btncash finalize" style="background-color:#2980b9 !important; height:60px !important;">Finalize</button>
					</div>
				</div>
				</div>
				</div>
			<div id="charge_tab" class="tab-pane fade in">
				<div class="row">
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="col-md-4">
							<button class="btn btncash click_charge" value="20" >20</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge" value="50">50</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge" value="100">100</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge" value="200">200</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge" value="500">500</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge" value="1000">1000</button>
						</div>

						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="1">1</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="2">2</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="3">3</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="4">4</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="5">5</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="6">6</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="7">7</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="8">8</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="9">9</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="0">0</button>
						</div>
						<div class="col-md-4" style="margin-bottom:2px;">
							<button class="btn btncash clearcharge" style="background-color:#e74c3c !important;">CLEAR</button>
						</div>
					</div>
					<div class="col-md-6">
					<form role="form" name="charge_payment">

						<div class="form-group" style="margin-top:5px;">
						  <label for="Charge to">Charge to *:</label>
						  <input type="text" class="form-control" id="chargeto" placeholder="Charge to">
						  <label for="Charge Remarks" >Remarks:</label>
						  <textarea type="text" class="form-control" id="charge_remarks"></textarea>
							 <label for="remarks">Charge Date:</label>
							<input type="date" class="form-control" id="charge_date" placeholder="Approval Number">
							 <label for="remarks">Charge Amount:</label>
							<input type="text" class="form-control lgtext" id="charge" placeholder="0.00" style="color:#e74c3c;text-align:right;font-size:18pt">
						</div>
						</form>
							<button class="btn btncash finalize" style="background-color:#2980b9 !important; height:60px !important;">Finalize</button>
					</div>
				</div>
				</div>
				</div>

			<div id="total_payment_amount" class="tab-pane fade in">
				<div class="row">
				<div class="col-md-12">
					<div class="col-md-6">
						<div class="col-md-4">
							<button class="btn btncash click_charge" value="20" disabled>20</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge" value="50" disabled>50</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge" value="100" disabled>100</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge" value="200" disabled>200</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge" value="500" disabled>500</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge" value="1000" disabled>1000</button>
						</div>

						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="1" disabled>1</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="2" disabled>2</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="3" disabled>3</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="4" disabled>4</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="5" disabled>5</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="6" disabled>6</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="7" disabled>7</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="8" disabled>8</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="9" disabled>9</button>
						</div>
						<div class="col-md-4">
							<button class="btn btncash click_charge2" value="0" disabled>0</button>
						</div>
						<div class="col-md-4" style="margin-bottom:2px;" >
							<button class="btn btncash clearcharge" style="background-color:#e74c3c !important;"  disabled>CLEAR</button>
						</div>
					</div>
					<div class="col-md-6">
					<form role="form" name="total_payment">
						<h2> Total Payment </h2>
						<div class="form-group" style="margin-top:5px;">
							<input type="text" class="form-control lgtext" id="total_payment" placeholder="0.00" style="color:#e74c3c;text-align:right;font-size:18pt">
						</div>
						</form>
							<button class="btn btncash finalize" style="background-color:#2980b9 !important; height:60px !important;">Finalize</button>
					</div>
				</div>
				</div>
				</div>
				<br><br>
				  </div><!--end of tabs -->



          </div><!---content-->
      </div>
    </div>
  </div><!---modal-->

  <div id="modal_browse_products" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
      <div class="modal-dialog modal-lg">
          <div class="modal-content"><!---content-->
            <div class="modal-header" style="background-color:#2980b9;">
                <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" style="color:white;">Items/Products</h4>

            </div>

              <div class="modal-body">
                 <div class="container-fluid">
                     <div class="table-responsive" id="div_product_list">
                        <table id="tbl_products" class="table table-striped table-bordered" cellspacing="0" width="100%" style="font-size: 13pt !important;">
                          <thead class="tbl-header">
                            <tr>
                            <th>PLU</th>
                            <th>Description</th>
                            <th>SRP</th>
                            <th>Tax Value</th>
                            <th>On hand</th>
                            <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                    </div>
               </div>
            </div>
          </div><!---content-->
      </div>
  </div><!---modal-->

  <div id="modal_browse_discounts" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
      <div class="modal-dialog modal-m" style="margin-top: 5%;">
          <div class="modal-content"><!---content-->
            <div class="modal-header" style="background-color:#2980b9;">
                <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" style="color:white;">Discounts</h4>
            </div>
              <div class="modal-body">
                 <div class="container-fluid">
                     <div id="div_product_list">
                        <table id="tbl_discounts" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead class="tbl-header">
                            <tr>
                              <th>Discount</th>
                              <th>Rate</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                    </div>
               </div>
            </div>
          </div><!---content---->
      </div>
  </div><!---modal-->

  <div id="modal_customers_list" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
      <div class="modal-dialog modal-m" style="margin-top: 5%;">
          <div class="modal-content"><!---content-->
            <div class="modal-header" style="background-color:#2980b9;">
                <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" style="color:white;">Customers</h4>
            </div>
              <div class="modal-body">
                 <div class="container-fluid">
                     <div id="div_product_list">
                        <table id="tbl_customers" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead class="tbl-header">
                            <tr>
                              <th>Code</th>
                              <th>Customer Name</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                          <tfoot>
                              <th>Code</th>
                              <th>Customer Name</th>
                              <th>Action</th>
                          </tfoot>
                        </table>
                    </div>
               </div>
            </div>
          </div><!---content---->
      </div>
  </div><!---modal-->

    <div id="modal_journal_list" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
      <div class="modal-dialog modal-m" style="margin-top: 5%;">
          <div class="modal-content"><!---content-->
            <div class="modal-header" style="background-color:#2980b9;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" style="color:white;">Journal</h4>
            </div>
              <div class="modal-body" style="width: 100% !important; margin: 0 !important; padding: 0 !important;">
                 <div class="container-fluid">
                     <div id="div_product_list">
                      <div class="row" style="background: #ECEFF1; padding: 10px;padding-bottom: 10px; border-bottom: 1px solid #B0BEC5;border-top: 1px solid #B0BEC5;">
                        <div class="col-md-6">
                           <label>Receipt No:</label>
                           <input type="text" name="receipt_no" id="receipt_no" class="form-control">
                        </div>
                       <div class="col-md-6">
                          <label>Filter Date:</label>
                          <input type="text" name="date_created" id="journal_date" class="date-picker form-control">
                        </div>
                      </div>
                        <table id="tbl_journal" class="table table-striped table-bordered" cellspacing="0" width="100%">
                          <thead class="tbl-header">
                            <tr>
                              <center>
                                <th></th>
                                <th>Invoice #</th>
                                <th>Transaction Date</th>
                                <th>Amount</th>
                                <th>Action</th>
                              </center>
                            </tr>
                          </thead>
                          <tbody>
                          </tbody>
                        </table>
                    </div>
               </div>
            </div>
          </div><!---content---->
      </div>
  </div><!---modal-->


  <div id="modal_qty" class="modal fade" tabindex="-1" role="dialog" ><!--modal-->
      <div class="modal-dialog modal-sm" style="top: 15%;">
          <div class="modal-content" style="margin: 0 auto;"><!---content-->
            <div class="modal-header" style="background-color:#2980b9;">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title"><span id="qty_pro_name" style="font-weight: bold;"></span></h4>
            </div>
              <div class="modal-body" style="margin: 0 !important; padding: 0 !important;">
                 <div class="container-fluid">
                     <div style="margin-bottom: 10px;">
                       <form >
                        <div class="qty-details">
                          <table style="width: 100%;">
                            <tr>
                              <td style="text-align: right;">Barcode</td>
                              <td class="detail-td"><div class="pro-detail"><span id="qty_bcode">1</span></div></td>
                            <tr>
                            <tr>
                              <td style="text-align: right;">Quantity</td>
                              <td class="detail-td">
                                <div class="pro-detail" style="text-align: center !important;">
                                      <span id="qty_prev"></span>
                                  </div>
                            </td>
                            <tr>
                            <tr>
                              <td style="text-align: right;">Price</td>
                              <td class="detail-td"><div class="pro-detail"><span id="qty_price"></span></div></td>
                            <tr>
                          </table>
                        </div>
                        <div class="enter-qty-header">Enter quantity</div>
                         <input type="text" name="row_qty" id="row_qty" class="numeric form-control" style="height: 100px; font-size: 80px !important; text-align: center; color: green;" min="1" placeholder="0.00" autocomplete="off">
                       </form>
                    </div>
               </div>
            </div>
          </div><!---content---->
      </div>
  </div><!---modal-->

  <div id="modal_void" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static"><!--modal-->
      <div class="modal-dialog" style="top: 25%; width: 350px !important;">
          <div class="modal-content"><!---content-->
            <div class="modal-header" style="background-color:#2980b9; border-bottom: 2px solid #CFD8DC !important; ">
                <h4 class="modal-title"><center style="font-weight: bold;"><span class="fa fa-user fa-size"></span> Authorization</center></h4>
            </div>
              <div class="modal-body" style="border-top: 10px solid #ECEFF1 !important;">
               <div class="container-fluid">
                 <div class="input-group">
                   <span class="input-group-addon" style="background: #ECEFF1; color: #78909C;">
                    <i class="fa fa-lock" style="margin-top: 4px !important;margin-bottom: 3px !important;" aria-hidden="true"></i></span>
                   <input type="password" class="form-control" name="void_pwd" id="void_pwd" style="font-size: 15pt !important;">
                 </div>
               </div>
               </div>
               <div class="modal-footer" style="background-color: #ECEFF1; border-top: 2px solid #CFD8DC !important;">
                 <div class="row" style="text-align: center !important;">
                   <button id="void_pwd_btn" type="button" style="width: 40%;" class="btn btn-primary">OK</button>
                   <button type="button" class="btn btn-danger" style="width: 40%;" data-dismiss="modal" aria-label="Close">
                       Cancel</button>
                 </div>
               </div>
          </div><!---content-->
      </div>
  </div><!---modal-->

    <div id="modal_refund" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static"><!--modal-->
      <div class="modal-dialog" style="top: 25%; width: 450px !important;">
          <div class="modal-content"><!---content-->
            <div class="modal-header" style="background-color:#2980b9; border-bottom: 2px solid #CFD8DC !important; ">
                <h4 class="modal-title"><center style="font-weight: bold;"> <span class="fa fa-reply"></span> Refund</center></h4>
            </div>
              <div class="modal-body" style="border-top: 10px solid #ECEFF1 !important;">
               <div class="container-fluid">
                <div class="refundDetails"></div>
               </div>
               </div>
               <div class="modal-footer" style="background-color: #ECEFF1; border-top: 2px solid #CFD8DC !important;">
                 <div class="row" style="text-align: center !important;">
                   <button id="refund_yes_btn" type="button" style="width: 40%;" class="btn btn-primary">Yes</button>
                   <button type="button" class="btn btn-danger" style="width: 40%;" data-dismiss="modal" aria-label="Close">
                       No</button>
                 </div>
               </div>
          </div><!---content---->
      </div>
  </div><!---modal-->


  <div id="modal_senior_citizen" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog" id="modal-senior">
          <div class="modal-content">
              <div class="modal-header bgm-indigo" style="background-color:#2980b9; border-bottom: 2px solid #CFD8DC !important; ">
                  <h4 class="modal-title"><center style="font-weight: bold;">Senior Citizen Information</center></h4>
              </div>
              <div class="modal-body" style="border-top: 10px solid #ECEFF1 !important;">
                  <form id="frm_senior">
                    <input type="text" id="seniorTotalDiscount" name="seniorTotalDiscount" style="display: none;">
                  <div class="container-fluid">
                        <div class="row">
                          <div class="form-group">
                              <div class="col-sm-12">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-tags fa-size" aria-hidden="true"></i></span>
                                          <input type="text" id="seniorID" name="seniorID" class="form-control" style="font-size: 12pt !important;" placeholder="Senior ID" data-error-msg="Senior ID is required." required>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="row" style="margin-top:5px;">
                          <div class="form-group">
                              <div class="col-sm-12">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                      <input type="text" id="seniorName" name="seniorName" class="form-control" style="font-size: 12pt !important;" placeholder="Name" data-error-msg="Senior name is required." required>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="row" style="margin-top:5px;">
                          <div class="form-group">
                              <div class="col-sm-12">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-home fa-size" aria-hidden="true"></i></span>
                                      <input type="text" id="seniorAddress" name="seniorAddress" class="form-control" style="font-size: 12pt !important;" placeholder="Address">
                                  </div>
                              </div>
                          </div>
                        </div>
                  </div>
              </div>
              </form>
              <div class="modal-footer" style="background-color: #ECEFF1; border-top: 2px solid #CFD8DC !important;">
                <div class="row" style="text-align: center !important;">
                  <button id="c_btn" type="button" style="width: 38%;" class="btn btn-primary">OK</button>
                  <button id="cancel-btn" type="button" class="btn btn-danger" style="width: 38%;" data-dismiss="modal" aria-label="Close">
                      Cancel</button>
                </div>
              </div>
          </div>
      </div>
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
<!-- twitter typehead -->
<script src="assets/plugins/twittertypehead/handlebars.js"></script>
<script src="assets/plugins/twittertypehead/bloodhound.min.js"></script>
<script src="assets/plugins/twittertypehead/typeahead.bundle.min.js"></script>
<script src="assets/plugins/twittertypehead/typeahead.jquery.min.js"></script>

<!-- numeric formatter -->
<script src="assets/plugins/formatter/autoNumeric.js" type="text/javascript"></script>
<script src="assets/plugins/formatter/accounting.js" type="text/javascript"></script>

<!-- <?php echo $_rights; ?> -->

    <script type="text/javascript">

    var dt; var _txnMode; var _selectedID; var _selectRowObj; var _cboSuppliers; var _cboTaxType;
    var row; var rowhead; var itemcount = 0; var seniorcitizenid; var dataDiscount; var dataDiscountDesc;
    var sc; var discounted_price = 0; var line_total_discount= 0; var line_total=0; var net_vat=0; var vat_input=0;
      $('#txtsearch').focus(400);
      var oTableItems={
          desc : 'td:eq(0)',
          qty : 'td:eq(1)',
          sale_cost : 'td:eq(2)',
          discount : 'td:eq(3)',
          total_line_discount : 'td:eq(4)',
          tax : 'td:eq(5)',
          total : 'td:eq(6)',
          vat_input : 'td:eq(7)',
          net_vat : 'td:eq(8)',
          bcode : 'td:eq(10)',
          disc_status : 'td:eq(11)',
          non_vat_sales: 'td:eq(12)',
          rate: 'td:eq(13)'

      };

      var oTableDetails={
          discount : 'tr:eq(0) > td:eq(1)',
          before_tax : 'tr:eq(1) > td:eq(1)',
          tax_amount : 'tr:eq(2) > td:eq(1)',
          after_tax : 'tr:eq(3) > td:eq(1)',
          summary_non_vat_sales: 'tr:eq(4) > td:eq(1)'
      };

        var countCart=function() {
          itemcount= $("#tbl_items > tbody >tr").length;
      		var total = itemcount + " Items";
      		$('#cart_count').text(total);
        };

        // $(document).bind("contextmenu", function (e) {
        //         e.preventDefault();
        //     });

        $(document).keydown(function(event){
            if(event.keyCode == 123){
              return false;  //Prevent from F12
          }
          else if(event.ctrlKey && event.shiftKey && event.keyCode == 73){
              return false;  //Prevent from ctrl+shift+i
          }
          else if(event.ctrlKey && event.keyCode == 85){
              return false;  //Prevent from ctrl+u
          }
        });

        _customers=$("#customers").select2({
            placeholder: "Select Customer.",
            allowClear: true
        });

        _customers.select2('val',"0");

    $('#btn_new').click(function(){
        _txnMode="new";
        //$('.toggle-fullscreen').click();
        clearFields($('#frm_adjustment'));
        showList(false);
    });

    var raw_data=<?php echo json_encode($products); ?>;

    var products = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('product_code','product_desc'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        local : raw_data
    });

    var _objTypeHead=$('#custom-templates .typeahead');



    _objTypeHead.typeahead(null, {
                name: 'products',
                display: 'description',
                source: products,
                templates: {
                    header: [
                        '<table width="100%"><tr><td width=20%" style="padding-left: 1%;"><b>PLU</b></td><td width="30%" align="left"><b>Description</b></td><td width="20%" align="right" style="padding-right: 2%;"><b>SRP</b></td><td width="20%" align="right" style="padding-right: 2%;" hidden><b>Tax Rate</b></td></tr></table>'
                    ].join('\n'),

                    suggestion: Handlebars.compile('<table width="100%"><tr><td width="20%" style="padding-left: 1%">{{product_code}}</td><td width="30%" align="left">{{product_desc}}</td><td width="20%" align="right" style="padding-right: 2%;">{{sale_cost}}</td><td width="20%" align="right" style="padding-right: 2%;" hidden>{{tax_rate}}</td></tr></table>')

                }
            }).on('keyup', this, function (event) {
					var codevalue = $("#txtsearch").val();
					var n = codevalue.indexOf("*");
				if(codevalue[n]=="*"){
					total="";
					for(i=0;i!=n;i++){
					total = total + codevalue[i];

					}
					$("#txtsearch").val(""); //cleart txsearcg
					$("#tempcode").val(total); //the quantity
					return;
				}
				 if(_objTypeHead.typeahead('val')==''){
					 return false; }  //if input text of typeahead  enter.log(suggestion);
                if (event.keyCode == 13) {
                    $('.tt-suggestion:first').click();
                    _objTypeHead.typeahead('close');
                    _objTypeHead.typeahead('val','');

                }

            }).bind('typeahead:select', function(ev, suggestion) {

                //console.log(suggestion);


                var tax_id="1";
                var tax_rate=getFloat(suggestion.tax_rate);

                var total=getFloat(suggestion.sale_cost);
                var net_vat=0;
                var vat_input=0;
                var n_vat_sls = 0;

                if (tax_rate != "0.00"){
                  net_vat=(total/tax_rate);
                  vat_input=total-net_vat;
                  n_vat_sls=0;
                }else{
                  net_vat=0;
                  vat_input=0;
                  n_vat_sls=total;
                }

      					var tempvalue = $("#tempcode").val();
      					var newtotal = tempvalue * total;

				      if(tempvalue==""){
			           $('#tbl_items > tbody').append(newRowItem({
                    pos_qty : "1",
                    product_code : suggestion.product_code,
                    unit_id : suggestion.unit_id,
                    unit_name : suggestion.unit_name,
                    product_id: suggestion.product_id,
                    product_desc : suggestion.product_desc,
                    pos_line_total_discount : "0.00",
                    tax_exempt : false,
                    pos_tax_rate : tax_rate,
                    pos_price : suggestion.sale_cost,
                    pos_discount : "0.00",
                    tax_type_id : null,
                    pos_line_total_price : total,
                    pos_non_tax_amount: net_vat,
                    pos_tax_amount:vat_input,
                    disc_status: "0",
                    non_vat_sales: n_vat_sls
                }));
		          }
				      else{
                $('#tbl_items > tbody').append(newRowItem({
                    pos_qty : tempvalue,
                    product_code : suggestion.product_code,
                    unit_id : suggestion.unit_id,
                    unit_name : suggestion.unit_name,
                    product_id: suggestion.product_id,
                    product_desc : suggestion.product_desc,
                    pos_line_total_discount : "0.00",
                    tax_exempt : false,
                    pos_tax_rate : tax_rate,
                    pos_price : suggestion.sale_cost,
                    pos_discount : "0.00",
                    tax_type_id : null,
                    pos_line_total_price : newtotal,
                    pos_non_tax_amount: net_vat,
                    pos_tax_amount:vat_input,
                    disc_status: "0",
                    non_vat_sales: n_vat_sls
                }));
		          }

        $("#tempcode").val("");
        reInitializeNumeric();
  			reComputeTotal();
  			reComputeChange();
  			countCart();
        $('#tbl_items tbody tr').css('background-color','#fff');
        $('#tbl_items tbody tr').css('cursor','pointer');
        $('.numeric').css('background-color','#fff');
        row=$('#tbl_items tr').last();
        $('#tbl_items tbody tr').last().css('background-color','#E0E0E0');
        row.find(oTableItems.qty).find('input.numeric').css('background-color','#E0E0E0');
        row.find(oTableItems.sale_cost).find('input.numeric').css('background-color','#E0E0E0');
        row.find(oTableItems.discount).find('input.numeric').css('background-color','#E0E0E0');
        row.find(oTableItems.total).find('input.numeric').css('background-color','#E0E0E0');
    });

    $('div.tt-menu').on('click','table.tt-suggestion',function(){
        _objTypeHead.typeahead('val','');
    });


    var bindEventHandlers=(function(){
          var detailRows = [];

          $('#tbl_pos tbody').on( 'click', 'tr td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = dt.row( tr );
            var idx = $.inArray( tr.attr('id'), detailRows );

            if ( row.child.isShown() ) {
                tr.removeClass( 'details' );
                row.child.hide();

                // Remove from the 'open' array
                detailRows.splice( idx, 1 );
            }
            else {
                tr.addClass( 'details' );
                //console.log(row.data());
                var d=row.data();

                $.ajax({
                    "dataType":"html",
                    "type":"POST",
                    "url":"Templates/layout/adjustment/"+ d.pos_invoice_id,
                    "beforeSend": showSpinningProgressEarth($('#'))
                }).done(function(response){
                    row.child( response ).show();
                    // Add to the 'open' array
                    if ( idx === -1 ) {
                        detailRows.push( tr.attr('id') );
                    }
                    $.unblockUI();
                });
            }
        });

        $('.date-picker').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true

        });

        $('#btn_new').click(function(){
            _txnMode="new";
            //$('.toggle-fullscreen').click();
            clearFields($('#frm_adjustment'));
            showList(false);
        });

        $('#btn_create_user_suppliers').click(function(){

            var btn=$(this);

            if(validateRequiredFields($('#frm_supplier_new'))){
                var data=$('#frm_supplier_new').serializeArray();

                $.ajax({
                    "dataType":"json",
                    "type":"POST",
                    "url":"Suppliers/transaction/create",
                    "data":data,
                    "beforeSend" : function(){
                        showSpinningProgress(btn);
                    }
                }).done(function(response){
                    showNotification(response);
                    $('#modal_new_supplier').modal('hide');

                    var _suppliers=response.row_added[0];

                }).always(function(){
                    showSpinningProgress(btn);
                });
            }

        });


        $('#tbl_pos tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.pos_invoice_id;
            delete_notif();
        });



        $('#tbl_items tbody').on('click','tr',function(){
          $('#tbl_items tbody tr').css('background-color','#fff');
          $('#tbl_items tbody tr').css('cursor','pointer');
          $('#tbl_items .numeric').css('background-color','#fff');
          row=$(this).closest('tr');
          row.css('background-color','#E0E0E0');
          row.find(oTableItems.qty).find('input.numeric').css('background-color','#E0E0E0');
          row.find(oTableItems.sale_cost).find('input.numeric').css('background-color','#E0E0E0');
          row.find(oTableItems.discount).find('input.numeric').css('background-color','#E0E0E0');
          row.find(oTableItems.total).find('input.numeric').css('background-color','#E0E0E0');
          countCart();

        });

        $(document).keydown(function(event) {
            if( event.which == 80 && event.altKey ) {
              $('#modal_payment').modal('show');
            }
        });

        $(document).keydown(function(event) {
            if( event.which == 74 && event.altKey ) {
              $('#btn_journal').click();
            }
        });

        $(document).keydown(function(event) {
            if( event.which == 81 && event.altKey ) {
              $('#btn_qty').click();
            }
        });

        $('#btn_qty').click(function(){
          if (itemcount != 0){
            var qty=row.find(oTableItems.qty).find('input.numeric').val();
            var srp = row.find(oTableItems.sale_cost).find('input.numeric').val();
            var desc_name = row.find(oTableItems.desc).find('.row_desc').text();
            var bcode_qty = row.find(oTableItems.bcode).find('.row_bcode').text();
            $('#qty_pro_name').text(desc_name);
            $('#qty_bcode').text(bcode_qty);
            $('#qty_price').text(srp);
            $('#qty_prev').html(qty);
            $('#row_qty').val(qty);
            $('#modal_qty').modal('show');
            $('#row_qty').focus(500).select();
          }
        });

        $(document).keydown(function(event) {
            if( event.which == 86 && event.altKey ) {
              $('#btn_void').click();
            }
        });

        $(document).keydown(function(event) {
            if( event.which == 84 && event.altKey ) {
              $('#btn_discount').click();
            }
          });

        $('#row_qty').keypress(function(evt){
            event.preventDefault();
            if(evt.keyCode==13){
              row.find(oTableItems.qty).find('input.numeric').val(parseFloat($('#row_qty').val()).toFixed(2));
              var price=parseFloat(accounting.unformat(row.find(oTableItems.sale_cost).find('input.numeric').val()));
              var discount=parseFloat(accounting.unformat(row.find(oTableItems.discount).find('input.numeric').val()));
              var qty=parseFloat(accounting.unformat(row.find(oTableItems.qty).find('input.numeric').val()));
              var tax_rate=parseFloat(accounting.unformat(row.find(oTableItems.tax).find('input.numeric').val()));

              var line_total = (price*qty)-discount;

              if (tax_rate != "0.00"){
                var net_vat = line_total;
                var vat_input = line_total - (line_total/tax_rate);
                var nvs = 0;
              }else{
                var net_vat = 0;
                var vat_input=0;
                var nvs = line_total;
              }

              $(oTableItems.total,row).find('input.numeric').val(accounting.formatNumber(line_total,2)); // line total amount
              $(oTableItems.net_vat,row).find('input.numeric').val(net_vat); //net of vat
              $(oTableItems.vat_input,row).find('input.numeric').val(vat_input); //vat input
              $(oTableItems.non_vat_sales,row).find('input.numeric').val(nvs); //vat input

              reComputeTotal();
              reComputeChange();

              $('#modal_qty').modal('hide');
              $('#txtsearch').focus();
              _objTypeHead.typeahead('close');
            }
        });

        var swalpopup=function(tswal){
          swal({
            title: tswal,
            imageUrl: "assets/img/warning.png",
            customClass: 'swal-top',
            timer: 1000,
            showConfirmButton: false,
          }).then(
            function () {},
            // handling the promise rejection
            function (dismiss) {
              if (dismiss === 'timer') {
                console.log('I was closed by the timer')
              }
            }
          )
        };

        $('#btn_discount').click(function(){
          if (itemcount != 0){
            var discount=row.find(oTableItems.discount).find('input.numeric').val();

            $('#tbl_discounts').dataTable().fnDestroy();
            getdiscounts();
            $('#modal_browse_discounts').modal('toggle');
          }
          else {
            var dtitle = "No items to apply discount.";
            swalpopup(dtitle);
          }
        });

        $('#btn_customer').click(function(){

            $('#tbl_customers').dataTable().fnDestroy();
            getcustomers();
            $('#modal_customers_list').modal('toggle');
        });

        var authorization=(function(){
           var _data={pword : $('input[name="void_pwd"]').val()};

                   return $.ajax({
                       "dataType":"json",
                       "type":"POST",
                       "url":"Authorization/transaction/chck_authorization",
                       "data" : _data,
                       "beforeSend": function(){

                       }
             });
       });

       $('#void_pwd').keypress(function(evt){
           if(evt.keyCode==13){
             $('#void_pwd_btn').click();
           }
         });

         var void_notif=function(itemname){
           swal({
                   title: "",
                   type: "warning",
                   text: "Are you sure want to void "+ itemname +"?",
                   closeOnConfirm: true,
                   allowOutsideClick: false,
                   showConfirmButton: true,
                   closeOnCancel: true,
                   confirmButtonColor: '#4CAF50',
                   cancelButtonText: "Cancel",
                   confirmButtonText: "Yes",
                   showCancelButton: true,
                   reverseButtons: true,
                   focusOnCancel: true,
                   allowEnterKey: true,
                   customClass: 'void-notif-class',
               },function(isConfirm){
                  if (isConfirm) {
                      var dsrow = row.find(oTableItems.disc_status).find('.disc_stat').val();
                      var drow = row.find(oTableItems.discount).find('input.numeric').val();
                      var st = $('#seniorTotalDiscount').val();
                      var computeVoidSeniorTotalDiscount = parseFloat(st) - parseFloat(drow);
                      if (dsrow == 0){
                        row.remove();
                      }
                      else {
                        $('#seniorTotalDiscount').val(computeVoidSeniorTotalDiscount);
                        row.remove();
                      }

                      row=$('#tbl_items tr').last();
                      $('#tbl_items tbody tr').last().css('background-color','#E0E0E0');
                      row.find(oTableItems.qty).find('input.numeric').css('background-color','#E0E0E0');
                      row.find(oTableItems.sale_cost).find('input.numeric').css('background-color','#E0E0E0');
                      row.find(oTableItems.discount).find('input.numeric').css('background-color','#E0E0E0');
                      row.find(oTableItems.total).find('input.numeric').css('background-color','#E0E0E0');
                      reComputeTotal();
                      reComputeChange();
                   }

                   countCart();
                   $('#txtsearch').focus();
                   _objTypeHead.typeahead('close');
               });
         };

       $('#void_pwd_btn').click(function(){
         authorization().done(function(response){   //End Batch
   			 var checking = response['stat'];
       			if(checking=="success")
       			{
       				$('#modal_void').modal('hide');

              if (_txnMode == "void"){
                var desc_name = row.find(oTableItems.desc).find('.row_desc').text();
                void_notif(desc_name);
              }
              else if (_txnMode == "cancel"){
                cancel_notif();
              }
       			}
       			else{
       				showNotification(response);
       			}
          countCart();
          reComputeTotal();
          reComputeChange();
   			  });
       });

        $('#refund_yes_btn').click(function(){
            
        });

        $('#btn_void').click(function(){
          if (itemcount != 0){
            _txnMode = "void";
            $('#modal_void').modal('show');
            $('#void_pwd').val("");
            $('#void_pwd').focus(500).select();
          }
          else {
            var voidtitle = "No items to void.";
            swalpopup(voidtitle);
          }
        });

        $(document).keydown(function(event) {
            if( event.which === 67 && event.altKey ) {
                $('#btn_cancel').click();
            }
        });

        var cancel_notif=function(type){
          swal({
                  title: "Are you sure want to cancel this transaction?",
                  type: "warning",
                  closeOnConfirm: true,
                  closeOnCancel: true,
                  showCancelButton: true,
                  cancelButtonText: "No",
                  confirmButtonText: "Yes",
                  confirmButtonColor: '#4CAF50',
              },function(isConfirm){
                  if (isConfirm) {
                        $('#tbl_items tbody tr').remove();
                  } else {}

                  $('#txtsearch').focus();
                  _objTypeHead.typeahead('close');
                  countCart();
                  reComputeTotal();
                  reComputeChange();
              });
        };


        $('#btn_cancel').click(function(){
          if (itemcount != 0){
            _txnMode = "cancel";
            $('#modal_void').modal('show');
            $('#void_pwd').val("");
            $('#void_pwd').focus(500).select();
          }
          else {
            var stitle = "No items to cancel.";
            swalpopup(stitle);
          }
        });

        //track every changes on numeric fields
        // $('#tbl_items tbody').on('keyup','input.numeric',function(){
        //     var row=$(this).closest('tr');
        //
        //     var price=parseFloat(accounting.unformat(row.find(oTableItems.sale_cost).find('input.numeric').val()));
        //     var discount=parseFloat(accounting.unformat(row.find(oTableItems.discount).find('input.numeric').val()));
        //     var qty=parseFloat(accounting.unformat(row.find(oTableItems.qty).find('input.numeric').val()));
        //     var tax_rate=parseFloat(accounting.unformat(row.find(oTableItems.tax).find('input.numeric').val()));
        //
        //     var discounted_price=price-discount;
        //     var line_total_discount=discount*qty;
        //     var line_total=discounted_price*qty;
        //
        //     var net_vat=line_total/(1+tax_rate);
        //     var vat_input=line_total-net_vat;
        //
        //     $(oTableItems.total,row).find('input.numeric').val(accounting.formatNumber(line_total,2)); // line total amount
        //     $(oTableItems.total_line_discount,row).find('input.numeric').val(line_total_discount); //line total discount
        //     $(oTableItems.net_vat,row).find('input.numeric').val(net_vat); //net of vat
        //     $(oTableItems.vat_input,row).find('input.numeric').val(vat_input); //vat input
        //
        //     //console.log(net_vat);
        //     reComputeTotal();
        //     reComputeChange();
        //
        // });

        $('#btn_cancel').click(function(){
            showList(true);
        });

        $('#btn_save').click(function(){

            if(validateRequiredFields($('#frm_adjustment'))){
                if(_txnMode=="new"){
                  if($("#tbl_items > tbody >tr").length==0){
                    oopsnotice();
                    return false;
                  }
                    createPurchaseOrder().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_adjustment'));
                    }).always(function(){
                        showSpinningProgress($('#btn_save'));
                        showList(true);
                    });
                }

            }

        });



        $('#tbl_items > tbody').on('click','button[name="remove_item"]',function(){

            $(this).closest('tr').remove();
            reComputeTotal();
            countCart();
        });


    })();

    var showList=function(b){
        if(b){
            $('#div_user_list').show();
            $('#div_user_fields').hide();
        }else{
            $('#div_user_list').hide();
            $('#div_user_fields').show();
        }
    };

    var showNotificationDiscount=function(obj){
        PNotify.removeAll(); //remove all notifications
        new PNotify({
            title:  obj.title,
            text:  obj.msg,
            type:  obj.stat,
            addClass: 'pnotify_class',
            nonblock: {
              nonblock: true
            }

        });
        PNotify.prototype.options.delay ? (function() {
            PNotify.prototype.options.delay = 800;
            update_timer_display();
        }()) : (alert('Timer is already at zero.'))

    };

    var showNotification=function(obj){
        PNotify.removeAll(); //remove all notifications
        new PNotify({
            title:  obj.title,
            text:  obj.msg,
            type:  obj.stat,
        });
    };

    var showSpinningProgress=function(e){
        $(e).find('span').toggleClass('glyphicon glyphicon-refresh spinning');
    };

    var clearFields=function(f){
        $('input:not(.date-picker),textarea',f).val('');
        $(f).find('input:first').focus();
        $('#tbl_items > tbody').html('');
    };

    function format ( d ) {
        //return
    };

    var getFloat=function(f){
        return parseFloat(accounting.unformat(f));
    };

    var newRowItem=function(d){


        return '<tr>'+
        '<td width="40%" style="border: .5px solid #CFD8DC;"><div class="row_desc" style="font-weight: bold; font-size: 12pt;">'+d.product_desc+'</div></td>'+
        '<td width="10%" style="border: .5px solid #CFD8DC;"><input name="pos_qty[]" type="text" class="numeric" style="border: 0px !important; background-color: #fff; font-weight: bold; font-size: 12pt !important; width: 100%;" readonly value="'+ d.pos_qty+'"></td>'+
        '<td width="11%" style="border: .5px solid #CFD8DC;"><input name="pos_price[]" type="text" class="numeric" value="'+accounting.formatNumber(d.pos_price,2)+'" style="border: 0px !important; background-color: #fff; font-weight: bold; font-size: 12pt !important; width: 100%;" readonly></td>'+
        '<td width="11%" style="border: .5px solid #CFD8DC;"><input name="pos_discount[]" type="text" class="numeric" value="'+ accounting.formatNumber(d.pos_discount,2)+'" style="border: 0px !important; background-color: #fff; font-weight: bold; font-size: 12pt !important; width: 100%;" readonly></td>'+
        '<td width="11%"><input name="pos_line_total_discount[]" style="width:40px !important;" type="text" class="numeric " value="'+ accounting.formatNumber(d.pos_line_total_discount,2)+'" readonly></td>'+
        '<td><input name="pos_tax_rate[]" type="text" style="width:40px !important;" class="numeric" value="'+ accounting.formatNumber(d.pos_tax_rate,2)+'"></td>'+
        '<td width="11%" style="border: .5px solid #CFD8DC;" align="right"><input name="pos_line_total_price[]" type="text" class="numeric" value="'+ accounting.formatNumber(d.pos_line_total_price,2)+'" style="border: 0px !important; background-color: #fff; font-weight: bold; font-size: 12pt !important; width: 100%;" readonly></td>'+
        '<td><input name="pos_tax_amount[]" type="text" class="numeric" style="width:40px !important;" value="'+ d.pos_tax_amount+'" readonly></td>'+
        '<td><input name="pos_non_tax_amount[]" type="text" class="numeric" style="width:40px !important;" value="'+ d.pos_non_tax_amount+'" readonly></td>'+
        '<td><input name="product_id[]" type="text" style="width:40px !important;" value="'+ d.product_id+'" readonly></td>'+
        '<td><div class="row_bcode">'+d.product_code+'</div></td>'+
        '<td><input name="disc_status[]" type="text" style="width:40px !important;" class="disc_stat" value="'+d.disc_status+'" readonly></td>'+
        '<td><input name="non_vat_sales[]" type="text" class="numeric" style="width:40px !important;" value="'+ d.non_vat_sales+'" readonly></td>'+
        '<td hidden><input name="rate[]" type="text" style="width:40px !important;" class="numeric" value="'+ accounting.formatNumber(d.pos_tax_rate,2)+'"></td>'+
        '</tr>';
    };

    var reComputeTotal=function(){
        var rows=$('#tbl_items > tbody tr');
        var tbl_summary=$('#tbl_purchase_summary');

        var total_discount=0;
        var total_net_vat_sale=0;
        var total_vat_sale=0;
        var total_vat_input=0;
        var total_non_vat_sale=0;
        var total_computed_vat_sale=0;
        var total_amount=0;
        $.each(rows,function(){
          total_amount+=parseFloat(accounting.unformat($(oTableItems.total,$(this)).find('input.numeric').val()));
          total_discount+=parseFloat(accounting.unformat($(oTableItems.discount,$(this)).find('input.numeric').val()));
          total_net_vat_sale+=parseFloat(accounting.unformat($(oTableItems.net_vat,$(this)).find('input.numeric').val()));
          total_vat_input+=parseFloat(accounting.unformat($(oTableItems.vat_input,$(this)).find('input.numeric').val()));
          //total_vat_input+=parseFloat(accounting.unformat($(oTableItems.total,$(this)).find('input.numeric').val()));
          total_non_vat_sale+=parseFloat(accounting.unformat($(oTableItems.non_vat_sales,$(this)).find('input.numeric').val()));
        });

        total_computed_vat_sale = total_net_vat_sale + total_vat_input;

        tbl_summary.find(oTableDetails.discount).html(accounting.formatNumber(total_discount,2));
        tbl_summary.find(oTableDetails.before_tax).html(accounting.formatNumber(total_net_vat_sale,2));
        tbl_summary.find(oTableDetails.tax_amount).html(accounting.formatNumber(total_vat_input,2));
        tbl_summary.find(oTableDetails.after_tax).html(accounting.formatNumber(total_computed_vat_sale,2));
        tbl_summary.find(oTableDetails.summary_non_vat_sales).html(accounting.formatNumber(total_non_vat_sale,2));
        $('#amountdue').val(accounting.formatNumber(total_amount,2));
    };

    var reInitializeNumeric=function(){
        $('.numeric').autoNumeric('init');
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
                        // swal("Deleted!", "Service Reference has been deleted.", "success");
                            removeAdjustment().done(function(response){
                                showNotification(response);
                                dt.row(_selectRowObj).remove().draw();
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

    var oopsnotice=function(type){
      swal({
        title: "Warning!",
        text: "Cart is empty.",
        imageUrl: "assets/img/warning.png"
      });
    };

    var oopsfunds=function(type){
      swal({
        title: "Warning!",
        text: "Not Enough Funds.",
        imageUrl: "assets/img/warning.png"
      });
    };


    // var validateRequiredFields=function(f){
    //     var stat=true;
    //
    //     $('div.form-group').removeClass('has-error');
    //     $('input[required],textarea[required],select[required]',f).each(function(){
    //
    //         if($(this).is('select')){
    //             if($(this).select2('val')==0||$(this).select2('val')==null){
    //                 showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
    //                 $(this).closest('div.form-group').addClass('has-error');
    //                 $(this).focus();
    //                 stat=false;
    //                 return false;
    //             }
    //         }
    //         else{
    //             if($(this).val()==""){
    //                 showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
    //                 $(this).closest('div.form-group').addClass('has-error');
    //                 $(this).focus();
    //                 stat=false;
    //                 return false;
    //             }
    //         }
    //
    //     });
    //
    //     return stat;
    // };

    // CALCULATOR FUNCTIONS
    $('#cash').change(function(){
      reChange();
      reComputeChange();
    });

    $('.click_class').click(function() {
		    var scurrentcash = $('#cash').val();
	      if(scurrentcash == ""){
				var value = ($(this).attr('value'));
        ClearCashInput();
				$("#cash").val(value);
				reChange();
	      reComputeChange();
			}
			else{
				var currentcash =  scurrentcash.replace(/,/g, "");
				var value = ($(this).attr('value'));
        ClearCashInput();
				$("#cash").val(value);
				reChange();
			  reComputeChange();
			}
    });

		$('.click_class2').click(function() {
        var scurrentcash = $('#cash').val();
        var currentcash =  scurrentcash.replace(/,/g, "");
        var value = ($(this).attr('value'));
        var cash2 = currentcash + value;
        $("#cash").val(cash2);
        reChange();
        reComputeChange();
    });

    $('.click_check').click(function() {
		    var scurrentcheck = $('#check').val();
	      if(scurrentcheck == ""){
  				var value = ($(this).attr('value'));
          ClearCheckInput();
          $("#check").val(value);
  				reChange();
  				reComputeChange();
		    }
			  else{
  				var currentcheck =  scurrentcheck.replace(/,/g, "");
  				var value = ($(this).attr('value'));
          ClearCheckInput();
  				$("#check").val(value);
  				reChange();
  				reComputeChange();
			  }
    });

		$('.click_check2').click(function() {
        var scurrentcheck = $('#check').val();
        var currentcheck =  scurrentcheck.replace(/,/g, "");
        var value = ($(this).attr('value'));
        var check = currentcheck + value;
        $("#check").val(check);
        reChange();
        reComputeChange();
    });

		$('.click_card').click(function() {
        var scurrentcard = $('#card').val();
          if(scurrentcard == ""){
            var value = ($(this).attr('value'));
            ClearCardInput();
            $("#card").val(value);
            reChange();
            reComputeChange();
        }
        else{
          var currentcard =  scurrentcard.replace(/,/g, "");
          var value = ($(this).attr('value'));
          ClearCardInput();
          $("#card").val(value);
          reChange();
          reComputeChange();
        }
      });

		$('.click_card2').click(function() {
        var scurrentcard = $('#card').val();
        var currentcard =  scurrentcard.replace(/,/g, "");
        var value = ($(this).attr('value'));
        var card = currentcard + value;
        $("#card").val(card);
        reChange();
        reComputeChange();
        });

		$('.click_charge').click(function() {
        var scurrentcharge = $('#charge').val();
        if(scurrentcharge == ""){
        var value = ($(this).attr('value'));
        ClearChargeInput();
        $("#charge").val(value);
        reChange();
        reComputeChange();
			}
			else{
        var currentcharge =  scurrentcharge.replace(/,/g, "");
        var value = ($(this).attr('value'));
        ClearChargeInput();
        $("#charge").val(value);
        reChange();
        reComputeChange();
			}
    });

		$('.click_charge2').click(function() {
      var scurrentcharge = $('#charge').val();
      var currentcharge =  scurrentcharge.replace(/,/g, "");
      var value = ($(this).attr('value'));
      var charge = currentcharge + value;
      $("#charge").val(charge);
      reChange();
      reComputeChange();
    });

		$('.pay').click(function() {
			$("#modal_payment").modal('hide');
			reComputeChange();
			paymentaddnotif();
			txtfocus();
    });

		$('#clear_cart').click(function(){
			$('#tbl_items > tbody').html('');
			$('#cart_count').text("0 Rows");
			clearFields();
			reComputeTotal();
			removeditemnotif();
		});

    var reChange=function(){
			var stotalcash = $("#cash").val();
			var stotalcheck = $("#check").val();
			var stotalcard = $("#card").val();
			var stotalcharge = $("#charge").val();

			var totalcash = stotalcash.replace('',0);
			var totalcheck = stotalcheck.replace('',0);
			var totalcard = stotalcard.replace('',0);
			var totalcharge = stotalcharge.replace('',0);

			var sumofpayment = parseFloat(totalcash)+parseFloat(totalcheck)+parseFloat(totalcard)+parseFloat(totalcharge);

			$("#total_payment").val(accounting.formatNumber(sumofpayment,2));

    };

    var reComputeChange=function(){
			var stotalcash = $("#cash").val();
			var stotalcheck = $("#check").val();
			var stotalcard = $("#card").val();
			var stotalcharge = $("#charge").val();

			var totalcash = stotalcash.replace('',0);
			var totalcheck = stotalcheck.replace('',0);
			var totalcard = stotalcard.replace('',0);
			var totalcharge = stotalcharge.replace('',0);

			var sumofpayment = parseFloat(totalcash)+parseFloat(totalcheck)+parseFloat(totalcard)+parseFloat(totalcharge);

			var samountdue = $("#amountdue").val();
			var amountdue = samountdue.replace(/,/g, "");
			var change = sumofpayment-parseFloat(amountdue);

			$("#cashamount").val(accounting.formatNumber(totalcash,2));
			$("#checkamount").val(accounting.formatNumber(totalcheck,2));
			$("#cardamount").val(accounting.formatNumber(totalcard,2));
			$("#chargeamount").val(accounting.formatNumber(totalcharge,2));

			$("#total_payment").val(accounting.formatNumber(sumofpayment,2));

			$("#tendered").val(accounting.formatNumber(sumofpayment,2));
			$("#change").val(accounting.formatNumber(change,2));

    };

    $('.finalize').click(function(){
			var samountdue = $("#amountdue").val();
			var amountdue = samountdue.replace(/,/g, "");
			var stendered = $("#tendered").val();
			var tendered = stendered.replace(/,/g, "");
			synchronizeFields();
			if(amountdue==0){
				oopsnotice();
			}
			else{
  			if(parseFloat(tendered)>=parseFloat(amountdue)){
          if ($('#seniorTotalDiscount').val() != ""){
            $('#modal_senior_citizen').modal('show');
          }
          else
          {
            validaterequirefields();
          }
            $('#btn_bcode').click();
  			}
  			else{
  				oopsfunds();
  			}
			}
		});

    $('#cash').keypress(function(evt){
          var scash = $("#cash").val();
          var samountdue = $("#amountdue").val();
    			var amountdue = samountdue.replace(/,/g, "");
    			var stendered = $("#tendered").val();
    			var tendered = stendered.replace(/,/g, "");
    			synchronizeFields();
    			if(amountdue==0){
    				oopsnotice();
    			}
    			else{
            if(parseFloat(scash)>=parseFloat(samountdue))
            {
              if ($('#seniorTotalDiscount').val() != ""){
                $('#modal_senior_citizen').modal('show');
              }
              else
              {
                validaterequirefields();
              }
              $('#btn_bcode').click();
            }
            else if(parseFloat(scash)<parseFloat(samountdue)){
              oopsfunds();
            }
      			else if(parseFloat(tendered)>=parseFloat(amountdue)){
        			validaterequirefields();
              $('#btn_bcode').click();
      			}
      			else{
      				oopsfunds();
      			}
    			}
      });

    $('#c_btn').click(function(){
      var samountdue = $("#amountdue").val();
			var amountdue = samountdue.replace(/,/g, "");
			var stendered = $("#tendered").val();
			var tendered = stendered.replace(/,/g, "");
			synchronizeFields();
      if(validateRequiredFields($('#frm_senior'))){
        $('#modal_senior_citizen').modal('hide');
        validaterequirefields();
      }
    });

    var validaterequirefields=function(){

			var scheckamount = $('#checkamount').val();
			var checkamount = scheckamount.replace(/,/g, "");
			var scardamount = $('#cardamount').val();
			var cardamount = scardamount.replace(/,/g, "");
			var schargeamount = $('#chargeamount').val();
			var chargeamount = schargeamount.replace(/,/g, "");
			var checkbank = $('#check_bank').val();
			var checknumber = $('#check_number').val();
			var cardholder = $('#cardholder').val();
			var cardnumber = $('#cardnum').val();
			var cardapprovalnum = $('#approvalnum').val();
			var chargeto = $('#chargeto').val();

			if(parseFloat(checkamount)!="0"){
					if(checkbank==""){
  					bankisrequired();
  					return;
					}
					if(checknumber==""){
  					checknumberisrequired();
  					return;
					}

				}
			if(parseFloat(cardamount)!="0"){
					if(cardholder==""){
  					cardholderisrequired();
  					return;
					}
					if(cardnumber==""){
  					cardnumberisrequired();
  					return;
					}
					if(cardapprovalnum==""){
  					cardapprovalisrequired();
  					return;
					}
				}

			if(parseFloat(chargeamount)!="0"){
					if(chargeto==""){
  					chargetofieldisrequired();
  					return;
					}
				}
					//if all condtion is false -> proceed
				createPurchaseOrder().done(function(response){   //Create Purchase
          showNotification(response);
  				var payment_id=response.pos_payment_id;
  				$("#payment_id").val(payment_id);
  				clearFields();
  				reComputeTotal();
          _customers.select2('val',"0");
  				$('#cart_count').text("0 rows");
  				$("#modal_payment").modal('hide');
  				window.open("Templates/layout/pospr/"+payment_id+"/print");
          countCart();
          swal("Finish!", "Transaction Complete.", "success");
          $.unblockUI();
				});
    };

    var synchronizeFields=function(){
  			var cashremarks = $("#cash_remarks").val();
  			$("#post_cash_remarks").val(cashremarks);
  			var acheckbank = $("#check_bank").val();
  			var achecknumber = $("#check_number").val();
  			var acheckaddress = $("#check_address").val();
  			var acheckdate = $("#check_date").val();
  			$("#post_check_bank").val(acheckbank);
  			$("#post_check_number").val(achecknumber);
  			$("#post_check_address").val(acheckaddress);
  			$("#post_check_date").val(acheckdate);

  			var atypeofcard = $("#typeofcard").val();
  			var acardholder = $("#cardholder").val();
  			var acardnum = $("#cardnum").val();
  			var aapprovalnum = $("#approvalnum").val();
  			var acardexpiry = $("#cardexpiry").val();
  			$("#post_card_type").val(atypeofcard);
  			$("#post_card_holder").val(acardholder);
  			$("#post_card_number").val(acardnum);
  			$("#post_card_apnumber").val(aapprovalnum);
  			$("#post_card_expdate").val(acardexpiry);

  			var achargeto = $("#chargeto").val();
  			var achargeremarks = $("#charge_remarks").val();
  			var achargedate = $("#charge_date").val();
  			$("#post_chargeto").val(achargeto);
  			$("#post_charge_remarks").val(achargeremarks);
  			$("#post_charge_date").val(achargedate);
    };

    $('.clearcash').click(function(){
			ClearCashInput();
			reChange();
			reComputeChange();
		});

		$('.clearcheck').click(function(){
			ClearCheckInput();
			reChange();
			reComputeChange();
		});

		$('.clearcard').click(function(){
			ClearCardInput();
			reComputeChange();
		});

		$('.clearcharge').click(function(){
			ClearChargeInput();
			reComputeChange();
		});

    var ClearCashInput=function() {
			//var zero = "0.00";
			$("#cash").val('');
    };

		var ClearCheckInput=function() {
			//var zero = "0.00";
			$("#check").val('');
    };

		var ClearCardInput=function() {
			//var zero = "0.00";
			$("#card").val('');
    };

		var ClearChargeInput=function() {
			//var zero = "0.00";
			$("#charge").val('');
    };

    var createPurchaseOrder=function(){
        var _data=$('#frm_items').serializeArray();
        _data.push({name : "post_amountdue" ,value : $('#amountdue').val()});
        _data.push({name : "post_tendered" ,value : $('#tendered').val()});
        _data.push({name : "post_change" ,value : $('#change').val()});
        _data.push({name : "seniorTotalDiscount" ,value : $('#seniorTotalDiscount').val()});
        _data.push({name : "seniorID" ,value : $('#seniorID').val()});
        _data.push({name : "seniorName" ,value : $('#seniorName').val()});
        _data.push({name : "seniorAddress" ,value : $('#seniorAddress').val()});
        _data.push({name : "customer_code" ,value : $('#customers').val()});

        var tbl_summary=$('#tbl_purchase_summary');
        _data.push({name : "summary_discount", value : tbl_summary.find(oTableDetails.discount).text()});
        _data.push({name : "summary_before_tax", value :tbl_summary.find(oTableDetails.before_tax).text()});
        _data.push({name : "summary_tax_amount", value : tbl_summary.find(oTableDetails.tax_amount).text()});
        _data.push({name : "summary_after_tax", value : tbl_summary.find(oTableDetails.after_tax).text()});
        _data.push({name : "summary_non_vat_sales", value : tbl_summary.find(oTableDetails.summary_non_vat_sales).text()});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Purchases/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgressPROCESSING($('#'))
        });
    };

    var clearFields=function(f){
        $('input,textarea',f).val('');
        $(f).find('input:first').focus();
        $('#tbl_items > tbody').html('');
    		$('#amountdue').val(accounting.formatNumber(0.00,2));
    		$('#tendered').val(accounting.formatNumber(0.00,2));
    		$('#change').val(accounting.formatNumber(0.00,2));

    		$('#cashamount').val(accounting.formatNumber(0.00,2));
    		$('#checkamount').val(accounting.formatNumber(0.00,2));
    		$('#cardamount').val(accounting.formatNumber(0.00,2));
    		$('#chargeamount').val(accounting.formatNumber(0.00,2));

    		$('#method1').val(1);
    		$('#method2').val(2);
    		$('#method3').val(3);
    		$('#method4').val(4);
    };

    var txtfocus=function(){
  		$('#txtsearch').focus();
  	}

    $('#removecash').click(function(){
		$("#cash").val(0);
			reComputeChange();
		});

		$('#removecheck').click(function(){
		$("#check").val(0);
			reComputeChange();
		});

		$('#removecard').click(function(){
		$("#card").val(0);
			reComputeChange();
		});

		$('#removecharge').click(function(){
		$("#charge").val(0);
			reComputeChange();
		});

    // $('#modal_show_products').click(function(){
    //   $('#tbl_products').dataTable().fnDestroy();
    //   getproducts();
    //   $('#modal_browse_products').modal('toggle');
		// });

    $('#btn_browse').click(function(){
      $('#tbl_products').dataTable().fnDestroy();
      getproducts();
      $('#modal_browse_products').modal('toggle');
    });

    $('#btn_bcode').click(function(){
      $('#txtsearch').focus();
      _objTypeHead.typeahead('close');
    });

    $(document).keydown(function(event) {
        if( event.which === 66 && event.altKey ) {
          $('#btn_browse').click();
        }
      });

    $(document).keydown(function(event) {
        if( event.which === 83 && event.altKey ) {
          $('#btn_bcode').click();
        }
      });

    var getproducts=function(){
          dt=$('#tbl_products').DataTable({
             "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
             "ajax" : "Products/transaction/list",
             "bDestroy": true,
         			"language": {
                 "searchPlaceholder": "Search Products"
             },
             "columns": [
                { targets:[0],data: "product_code"},
                { targets:[1],data: "product_desc" },
                { targets:[2],data: "sale_cost" },
                { targets:[3],data: "tax_rate" },
                { targets:[4],data: "stock_onhand" },
                {
                     targets:[5],
                     render: function (data, type, full, meta){
                         var btn_addtocart_close='<button class="btn btn-default btn-l" style="width: 50px; height: 50px; background-color: #B0BEC5;" name="addtocart_close"  style="margin-left:-15px;" data-toggle="tooltip" data-placement="top" title="Add"><span class="glyphicon glyphicon-ok" style="color: #fff;"></span> </button>';
                         // var btn_addtocart='<button class="btn btn-default btn-l" name="addtocart" style="margin-right:0px;" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i class="fa fa-plus" aria-hidden="true"></i> </button>';

                         return '<center>'+btn_addtocart_close+'</center>';
                     }
                 },

             ],
             "rowCallback":function( row, data, index ){

                 $(row).find('td').eq(5).attr({
                     "align": "right"
                 });
             }
         });
    }

    var getdiscounts=function(){
          dt=$('#tbl_discounts').DataTable({
             "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
             "ajax" : "Discount/transaction/list",
             "bDestroy": true,
              "language": {
                 "searchPlaceholder": "Search Discount"
             },
             "columns": [
                { targets:[0],data: "discount_desc"},
                { targets:[1],data: "discount_percent" },
                {
                     targets:[2],
                     render: function (data, type, full, meta){
                         var btn_apply_discount='<button class="btn btn-default btn-l" name="applyDiscount"  data-toggle="tooltip" data-placement="top" title="Apply Discount"><span class="glyphicon glyphicon-ok"></span> </button>';

                         return '<center>'+btn_apply_discount+'</center>';
                     }
                 },

             ],
             "rowCallback":function( row, data, index ){

                 $(row).find('td').eq(2).attr({
                     "align": "right"
                 });
             }
         });
    }

        var getjournal=function(){
          var _selecteddatedt = $('#journal_date').val();
          dt=$('#tbl_journal').DataTable({
              "dom": '<"toolbar">frtip',               
              "bFilter": false,
              "ajax": {
              "url": "Templates/layout/journallist",
              "type": "POST",
              "bDestroy": true,
              "data": function ( d ) {
                  return $.extend( {}, d, {
                      "journal_date": _selecteddatedt
                      } );
                  }
              },
              "columns": [
                  {
                      "targets": [0],
                      "class":          "details-control",
                      "orderable":      false,
                      "data":           null,
                      "defaultContent": ""
                  },
                  { targets:[1],data: "receipt_no" },
                  { targets:[2],data: "transaction_date" },
                  { targets:[3],data: "amount_due" },
                  {
                     targets:[4],
                     render: function (data, type, full, meta){
                         var btn_refund='<button class="btn btn-default btn-l" name="refundTransaction" style="width: 50px; height: 50px;" data-toggle="tooltip" data-placement="top" title="Refund"><i class="fa fa-reply" aria-hidden="true"></i></button>';

                         return '<center>'+btn_refund+'</center>';
                     }
                 },
              ],
              language: {
                           searchPlaceholder: "Search Transactions"
                       },
              "rowCallback":function( row, data, index ){

                  $(row).find('td').eq(10).attr({
                      "align": "right"
                  });
              }
          });

        }

         var GetJournalReceiptFilter=function(){
          var _selectreceiptno = $('#receipt_no').val();
          dt=$('#tbl_journal').DataTable({
              "dom": '<"toolbar">frtip',               
              "bFilter": false,
              "ajax": {
              "url": "Templates/layout/journallist",
              "type": "POST",
              "bDestroy": true,
              "data": function ( d ) {
                  return $.extend( {}, d, {
                      "receipt_no": _selectreceiptno
                      } );
                  }
              },
              "columns": [
                  {
                      "targets": [0],
                      "class":          "details-control",
                      "orderable":      false,
                      "data":           null,
                      "defaultContent": ""
                  },
                  { targets:[1],data: "receipt_no" },
                  { targets:[2],data: "transaction_date" },                  
                  { targets:[3],data: "amount_due" },
                  {
                     targets:[4],
                     render: function (data, type, full, meta){
                         var btn_refund='<button class="btn btn-default btn-l" name="refundTransaction" style="width: 50px; height: 50px;" data-toggle="tooltip" data-placement="top" title="Refund"><i class="fa fa-reply" aria-hidden="true"></i></button>';

                         return '<center>'+btn_refund+'</center>';
                     }
                 },
              ],
              language: {
                           searchPlaceholder: "Search Transactions"
                       },
              "rowCallback":function( row, data, index ){

                  $(row).find('td').eq(10).attr({
                      "align": "right"
                  });
              }
          });

        }

        $('#journal_date').change(function(){ 
          $('#tbl_journal').dataTable().fnDestroy();
          getjournal();
        });

        $('#receipt_no').keyup(function(){ 
          $('#tbl_journal').dataTable().fnDestroy();
          GetJournalReceiptFilter();
        });

        $('#btn_journal').click(function(){
          var d = new Date();
          var strDate =  (d.getMonth()+1) + "/" + d.getDate() + "/" + d.getFullYear();
          $('#journal_date').val(strDate);
          $('#tbl_journal').dataTable().fnDestroy();
          getjournal();
          $('#modal_journal_list').modal('toggle');
        });


        $('#tbl_journal tbody').on( 'click', 'tr td.details-control', function () {
            var detailRows = [];
            var tr = $(this).closest('tr');
            var row = dt.row( tr );
            var idx = $.inArray( tr.attr('id'), detailRows );

            if ( row.child.isShown() ) {
                tr.removeClass( 'details' );
                row.child.hide();

                // Remove from the 'open' array
                detailRows.splice( idx, 1 );
            }
            else {
                tr.addClass( 'details' );
                //console.log(row.data());
                var d=row.data();

                $.ajax({
                    "dataType":"html",
                    "type":"POST",
                    "url":"Templates/layout/pospr/"+ d.pos_payment_id,
                    "beforeSend": showSpinningProgressEarth($('#'))
                }).done(function(response){
                    row.child( response ).show();
                    // Add to the 'open' array
                    if ( idx === -1 ) {
                        detailRows.push( tr.attr('id') );
                    }
                    $.unblockUI();
                });
            }
        });

    var getcustomers=function(){
          dt=$('#tbl_customers').DataTable({
             "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
             "ajax" : "Customers/transaction/list",
             "bDestroy": true,
              "language": {
                 "searchPlaceholder": "Search Customer"
             },
             "columns": [
                { targets:[0],data: "customer_code"},
                { targets:[1],data: "customer_name" },
                {
                     targets:[2],
                     render: function (data, type, full, meta){
                         var btn_apply_customer='<button class="btn btn-default btn-l" name="applyCustomer"  data-toggle="tooltip" data-placement="top" title="Apply Discount"><span class="glyphicon glyphicon-ok"></span> </button>';

                         return '<center>'+btn_apply_customer+'</center>';
                     }
                 },

             ],
             "rowCallback":function( row, data, index ){

                 $(row).find('td').eq(2).attr({
                     "align": "right"
                 });
             }
         });
    }

      $('#tbl_customers tbody').on( 'click', 'button[name="applyCustomer"]', function () {

      var _selectRowObjcustomers=$(this).closest('tr');
      var cdata=dt.row(_selectRowObjcustomers).data();

      var customerCode = cdata.customer_code;
      var customerName = cdata.customer_name;

      _customers.select2('val',customerCode);
      $('#modal_customers_list').modal('hide');

      });

    $('#tbl_journal tbody').on( 'click', 'button[name="refundTransaction"]', function () {
      _selectRowObj=$(this).closest('tr');
      var data=dt.row(_selectRowObj).data();
      var invoice_id = data.invoice_id;
      var datareceipt_no = data.receipt_no;

      $('.refundDetails').html('<strong>WARNING: ALL DATA WILL BE ZERO OUT!</strong> <br /> Sales Transaction number [ '+ datareceipt_no +' ] was selected for refund. <br> Make sure manager/supervisor approved the customer/s refund. <hr style=""> Are you sure want to continue refund?');
      $('#modal_refund').modal('show');
    });


    $('#tbl_discounts tbody').on( 'click', 'button[name="applyDiscount"]', function () {

      _selectRowObj=$(this).closest('tr');
      var data=dt.row(_selectRowObj).data();
      var seniorcitizenid = data.discount_id;
      var dataDiscount = data.discount_percent;
      var dataDiscountDesc = data.discount_desc;
      sc = row.find(oTableItems.sale_cost).find('input.numeric').val();

      if (seniorcitizenid == 2){
        var SeniorCitizenDiscount = 0; var AmountCollectible = 0;

        var countdiscount = ((parseFloat(sc)*(dataDiscount/100)));
        var price=parseFloat(accounting.unformat(row.find(oTableItems.sale_cost).find('input.numeric').val()));
        var discount=parseFloat(accounting.unformat(row.find(oTableItems.discount).find('input.numeric').val()));
        var qty=parseFloat(accounting.unformat(row.find(oTableItems.qty).find('input.numeric').val()));
        var tax_rate=parseFloat(accounting.unformat(row.find(oTableItems.tax).find('input.numeric').val()));
        var rate=parseFloat(accounting.unformat(row.find(oTableItems.rate).find('input.numeric').val()));
        var discountCitizen = (dataDiscount/100);
        var status=row.find(oTableItems.disc_status).find('.disc_stat').val();

          if (tax_rate != 0){
            var exemptVAT = ((parseFloat(price)/parseFloat(rate)));
            SeniorCitizenDiscount = (parseFloat(exemptVAT)*parseFloat(discountCitizen));
            AmountCollectible = (parseFloat(exemptVAT)-parseFloat(SeniorCitizenDiscount));
          }else{
            if (status == 0){
              SeniorCitizenDiscount = (parseFloat(price)*parseFloat(discountCitizen));
              AmountCollectible = (parseFloat(price)-parseFloat(SeniorCitizenDiscount));
            }
            else if (status == 1) {
              var exemptVAT = ((parseFloat(price)/parseFloat(rate)));
              SeniorCitizenDiscount = (parseFloat(exemptVAT)*parseFloat(discountCitizen));
              AmountCollectible = (parseFloat(exemptVAT)-parseFloat(SeniorCitizenDiscount));
            }
          }

        var net_vat = 0;
        var vat_input = 0;
        var nvs = AmountCollectible*qty;
        var TotalSeniorCitizenDiscount = SeniorCitizenDiscount*qty;

        row.find(oTableItems.discount).find('input.numeric').val(parseFloat(TotalSeniorCitizenDiscount).toFixed(2));
        $(oTableItems.total,row).find('input.numeric').val(accounting.formatNumber(nvs,2)); // line total amount
        $(oTableItems.net_vat,row).find('input.numeric').val(net_vat); //net of vat
        $(oTableItems.vat_input,row).find('input.numeric').val(vat_input); //vat input
        $(oTableItems.non_vat_sales,row).find('input.numeric').val(nvs); //non vat sales
        $(oTableItems.tax,row).find('input.numeric').val(0.00); //new tax

        row.find(oTableItems.disc_status).find('.disc_stat').val(1);
        var std = parseFloat(TotalSeniorCitizenDiscount).toFixed(2);

          if ($('#seniorTotalDiscount').val() == ""){
            $('#seniorTotalDiscount').val(std);
          }
          else {
            var c_std = $('#seniorTotalDiscount').val();
            var computeSeniorTotalDiscount = parseFloat(c_std) + parseFloat(std);
            $('#seniorTotalDiscount').val(computeSeniorTotalDiscount);
          }
      }
      else {
        var price=parseFloat(accounting.unformat(row.find(oTableItems.sale_cost).find('input.numeric').val()));
        var discount=parseFloat(accounting.unformat(row.find(oTableItems.discount).find('input.numeric').val()));
        var qty=parseFloat(accounting.unformat(row.find(oTableItems.qty).find('input.numeric').val()));
        var tax_rate=parseFloat(accounting.unformat(row.find(oTableItems.tax).find('input.numeric').val()));

        var countdiscount = ((parseFloat(price)*(dataDiscount/100)));
        var computeTotalDiscount = countdiscount*qty;
        var computeTotalwdisc = 0; var net_vat =0;var vat_input=0;var nvs = 0;
        computeTotalwdisc = ((parseFloat(price)*qty))-computeTotalDiscount;

          if (tax_rate != "0.00"){
            net_vat = computeTotalwdisc/parseFloat(tax_rate);
            vat_input = computeTotalwdisc-net_vat;
            nvs = 0;
          }else{
            net_vat = 0;
            vat_input = 0;
            nvs = computeTotalwdisc;
          }

        row.find(oTableItems.discount).find('input.numeric').val(parseFloat(computeTotalDiscount).toFixed(2));
        $(oTableItems.total,row).find('input.numeric').val(accounting.formatNumber(computeTotalwdisc,2)); // line total amount
        $(oTableItems.net_vat,row).find('input.numeric').val(net_vat); //net of vat
        $(oTableItems.vat_input,row).find('input.numeric').val(vat_input); //vat input
        $(oTableItems.non_vat_sales,row).find('input.numeric').val(nvs); //non vat sales
      }
      reComputeTotal();
      reComputeChange();
      $('#modal_senior_citizen').modal('hide');
      $('#modal_browse_discounts').modal('hide');
      showNotificationDiscount({title:"Discount Applied",stat:"success",msg:""+dataDiscountDesc+""});
      $('#txtsearch').focus();
      _objTypeHead.typeahead('close');
    });

    $('#tbl_products tbody').on( 'click', 'button[name="addtocart_close"]', function () {
  			var tds = $(this).closest('tr').children('td');
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();

			    var tax_id="1";
          var tax_rate=data.tax_rate;
          var total=getFloat(data.sale_cost);
          var net_vat=0;
          var vat_input=0;
          var n_vat_sls = 0;

          if (tax_rate != "0.00"){
            net_vat=(total/tax_rate);
            vat_input=total-net_vat;
            n_vat_sls=0;
          }else{
            net_vat=0;
            vat_input=0;
            n_vat_sls=total;
          }

			//Use dataArray here
					$('#tbl_items > tbody').append(newRowItem({
                    pos_qty : "1",
                    product_code : data.product_code,
                    product_id: data.product_id,
                    product_desc : data.product_desc,
		                pos_line_total_price_discount : "0.00",
                    tax_exempt : false,
                    pos_tax_rate : data.tax_rate,
                    pos_price : data.sale_cost,
                    pos_discount : "0.00",
                    tax_type_id : null,
                    pos_line_total_price : total,
                    pos_non_tax_amount: net_vat,
                    pos_tax_amount: vat_input,
                    non_vat_sales: n_vat_sls
                }));
        reInitializeNumeric();
				reComputeTotal();
				reComputeChange();
				countCart();
				$('#modal_browse_products').modal('hide');
        $('#tbl_items tbody tr').css('background-color','#fff');
        $('#tbl_items tbody tr').css('cursor','pointer');
        $('.numeric').css('background-color','#fff');
        row=$('#tbl_items tr').last();
        $('#tbl_items tbody tr').last().css('background-color','#E0E0E0');
        row.find(oTableItems.qty).find('input.numeric').css('background-color','#E0E0E0');
        row.find(oTableItems.sale_cost).find('input.numeric').css('background-color','#E0E0E0');
        row.find(oTableItems.discount).find('input.numeric').css('background-color','#E0E0E0');
        row.find(oTableItems.total).find('input.numeric').css('background-color','#E0E0E0');
			return false;
    });

    //add to cart without closing modal
    $('#tbl_products tbody').on('click','button[name="addtocart"]',function(){
        var tds = $(this).closest('tr').children('td');
        _selectRowObj=$(this).closest('tr');
        var data=dt.row(_selectRowObj).data();

      // var dataArray =[];
      // for(i=1;i < tds.length;i++)
      // 	dataArray.push($(tds[i]).html());
      //
      // var d_product_code = dataArray[0];
      // var d_product_desc = dataArray[1];
      // var d_sale_cost = dataArray[2];
      // var d_tax_rate = dataArray[3];
      // var d_on_hand = dataArray[4];
      // var d_product_id = dataArray[5];

          var tax_id="1";
                var tax_rate=data.tax_rate;

                var total=getFloat(data.sale_cost);
                var net_vat=0;
                var vat_input=0;
                var n_vat_sls = 0;

                if (tax_rate != "0.00"){
                  net_vat=(total/tax_rate);
                  vat_input=total-net_vat;
                  n_vat_sls=0;
                }else{
                  net_vat=0;
                  vat_input=0;
                  n_vat_sls=total;
                }
      //Use dataArray here
          $('#tbl_items > tbody').append(newRowItem({
                    pos_qty : "1",
                    product_code : data.product_code,
                    product_id: data.product_id,
                    product_desc : data.product_desc,
                    pos_line_total_price_discount : "0.00",
                    tax_exempt : false,
                    pos_tax_rate : data.tax_rate,
                    pos_price : data.sale_cost,
                    pos_discount : "0.00",
                    tax_type_id : null,
                    pos_line_total_price : total,
                    pos_non_tax_amount: net_vat,
                    pos_tax_amount:vat_input,
                    non_vat_sales: n_vat_sls
                }));
        reInitializeNumeric();
        reComputeTotal();
        reComputeChange();
        countCart();
        $('#tbl_items tbody tr').css('background-color','#fff');
        $('#tbl_items tbody tr').css('cursor','pointer');
        $('.numeric').css('background-color','#fff');
        row=$('#tbl_items tr').last();
        $('#tbl_items tbody tr').last().css('background-color','#E0E0E0');
        row.find(oTableItems.qty).find('input.numeric').css('background-color','#E0E0E0');
        row.find(oTableItems.sale_cost).find('input.numeric').css('background-color','#E0E0E0');
        row.find(oTableItems.discount).find('input.numeric').css('background-color','#E0E0E0');
        row.find(oTableItems.total).find('input.numeric').css('background-color','#E0E0E0');
      return false;
    });

</script>
</body>
</html>
