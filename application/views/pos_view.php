<!DOCTYPE html>
<html class="pos-body">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $_title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $_def_css_files ?>
  <link href="assets/plugins/twittertypehead/twitter.typehead.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.dataTables.min.css">

</head>
<body>
  <div>
    <?php echo $_top_navigation;?>
        <!-- Main content -->
      <section class="content">
          <div class="box">
              <!-- /.box-header -->
              <div id="invoice_fields">
                <div class="panel panel-default">
                  <div class="panel-body panel-item-cart">
                    <div class="col-md-9 custom_frame"><br />
                      <label class="control-label boldlabel" ><strong>Enter Barcode or Search Item :</strong></label>
                        <div id="custom-templates">
                          <label class="control-label"><strong>Quantity:</strong></label><input type="text" id="tempcode" disabled>
                            <input class="typeahead" id="txtsearch" type="text" >
                              </div><br />
                                <form id="frm_items">
                                    <div class="table-responsive div-item-cart">
                                      <table id="tbl_items" class="table table-striped table-bordered table-item-cart" cellspacing="0" width="100%">
                                        <thead class="thead-item">
                                          <tr>
                                            <th width="40%" class="th-item">Item</th>
                                            <th width="10%" class="th-qty">Qty</th>
                                            <th width="12%" class="th-right-items">SRP</th>
                                            <th width="12%" class="th-right-items">Discount</th>
                                            <th hidden>T.D</th>
                                            <th hidden>Tax %</th>
                                            <th width="12%" class="th-right-items">Total</th>
                                            <th hidden>V.I</th>
                                            <th hidden>N.V</th>
                                            <th hidden>Item ID</td>
                                            <th hidden>Item Code</td>
                                            <th hidden>Disc Status</td>
                                            <th hidden>Non Vat Sales</td>
                                            <th hidden>Rate</td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                      </table>
                                    </div>
                                </form>
                                <div class="row">
                                    <div class="col-lg-3 col-lg-offset-9">
                                        <table id="tbl_purchase_summary" class="table invoice-total" hidden>
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
                              <div class="col-md-12 amount-due-right">
                                <div class="row panel-amt-due">
                                  <h3 class="amt-due-lbl">Amount Due</h3>
                                    <hr class="hr-amt-due">
                                      <input class="amounts amt-due" type="text" name="post_amountdue" value="0.00" id="amountdue" disabled>
                                </div>
                                <hr class="custom-hr">
                                <div class="row panel-discount-due">
                                  <h3 class="disc-lbl">Discount</h3>
                                    <hr class="hr-disc">
                                      <input class="amounts disc-inp" type="text" name="post_tdiscount" value="0.00" id="tdiscount" disabled>
                                </div>

                              <div class="row">
                                <label for="Customer"><strong>Customer:</strong></label>
                               <div class="input-group">
                                 <select id="customers" name="customers_name" class="form-control" >
                                   <option value="0">Walk-In</option>
                                     <?php
                                     foreach($customers as $row){
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
                                <button class="btn" id="btn_payment">Alt P - <strong>Payment</strong></button>
                              </div>
                            </div>
                            <div class="row">
                              <img src="assets/img/jdev-logo.png" class="img-logo-pos" draggable="false">
                            </div>
                          </div>
                      </div>
                      <div class="panel-footer">
                      <div class="row">
                          <div class="col-sm-12">
                            <button id="btn_bcode" class="btn-main-pos">
                                <div class="btn-ins-main">
                                  <small>Alt + S </small>
                                    <hr class="btn-hr-main">
                                      <strong>Scan Barcode</strong>
                                </div>
                            </button>
                            <button id="btn_browse" class="btn-main-pos">
                                <div class="btn-ins-main">
                                  <small> Alt + B </small>
                                    <hr class="btn-hr-main">
                                      <strong>Browse List </strong>
                                </div>
                            </button>
                            <button id="btn_qty" class="btn-main-pos">
                              <div class="btn-ins-main">
                                <small>Alt + Q </small>
                                  <hr class="btn-hr-main">
                                    <strong>Quantity</strong>
                              </div>
                            </button>
                            <button id="btn_journal" class="btn-main-pos">
                              <div class="btn-ins-main">
                                <small>Alt + J</small>
                                  <hr class="btn-hr-main">
                                    <strong>Journal</strong>
                              </div>
                            </button>
                            <button id="btn_cancel" class="btn-main-pos">
                              <div class="btn-ins-main">
                                <small>Alt + C </small>
                                  <hr class="btn-hr-main">
                                    <strong>Cancel</strong>
                              </div>
                            </button>
                            <button id="btn_void" class="btn-main-pos">
                              <div class="btn-ins-main">
                                <small>Alt + V </small>
                                  <hr class="btn-hr-main">
                                    <strong>Void</strong>
                              </div>
                            </button>
                            <button id="btn_discount" class="btn-main-pos">
                              <div class="btn-ins-main">
                                <small>Alt + T </small>
                                  <hr class="btn-hr-main">
                                    <strong>Discount</strong>
                              </div>
                            </button>
                            <button id="btn_endbatch" class="btn-main-pos">
                              <div class="btn-ins-main">
                                <small>Alt + H </small>
                                  <hr class="btn-hr-main">
                                    <strong>End Batch</strong>
                              </div>
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

    <!-- modal-payment -->
    <div id="modal_payment" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog modal-lg modal-pymnt">
            <div class="modal-content">
                <div class="modal-header header-pymnt">
                    <h4 class="modal-title">
                        <strong>PAYMENT</strong>
                    </h4>
                </div>
                <div class="modal-body">
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
                                <div class="col-md-12 space-mdl-pymnt"></div>
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
                                    <button class="btn btncash click_class2" value="4">4</button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btncash click_class2" value="5">5</button>
                                </div>
                                <div class="col-md-4">
                                    <button class="btn btncash click_class2" value="6">6</button>
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
                                    <button class="btn btncash click_class2" value="0">0</button>
                                </div>
                                <div class="col-md-4 btn-cl">
                                    <button class="btn btncash clearcash">CLEAR</button>
                                </div>
                                <div class="col-md-4 btn-cl">
                                    <button class="btn btncash cancelpymnt">CANCEL</button>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btncash finalize">ENTER</button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <table class="pymntmthdtblinp">
                                    <tr>
                                        <td colspan="2" class="td-pymnt-type">
                                            <small><strong>TYPE OF PAYMENT</strong></small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="60%" class="pymntmthdtbl">Alt 1 - Card</td>
                                        <td class="pymntmthdtbl"><input type="text" class="crd pymntmthd" value="0.00" readonly></td>
                                    </tr>
                                    <tr>
                                        <td class="pymntmthdtbl">Alt 2 - Cheque</td>
                                        <td class="pymntmthdtbl"><input type="text" class="chq pymntmthd" value="0.00" readonly></td>
                                    </tr>
                                    <tr>
                                        <td class="pymntmthdtbl">Alt 3 - GC</td>
                                        <td class="pymntmthdtbl"><input type="text" class="gc pymntmthd" value="0.00" readonly></td>
                                    </tr>
                                    <tr>
                                        <td class="pymntmthdtbl">Alt 4 - Charge</td>
                                        <td class="pymntmthdtbl"><input type="text" class="chrge pymntmthd" value="0.00" readonly></td>
                                    </tr>
                                    <tr>
                                        <td class="pymntmthdtbl">Alt 5 - Cash</td>
                                        <td class="pymntmthdtbl"><input type="text" class="csh pymntmthd" value="0.00" readonly></td>
                                    </tr>
                                    <tr>
                                        <td class="td-pymnt-border"></td>
                                        <td class="td-pymnt-border">
                                            <input type="text" class="totalpymntmthd pymntmthd" value="0.00" readonly>
                                        </td>
                                    </tr>
                                </table>
                                <div class="payment-details">
                                    <div class="form-group fgroup">
                                        <div class="border-paymnt-details">
                                            <label for="payment summary"><strong>AMOUNT DUE</strong></label>
                                        </div>
                                        <input type="text" class="lgtext pymnt-details-color" id="amountduepymt" placeholder="0.00" readonly>
                                    </div>
                                    <div class="form-group">
                                        <div class="border-paymnt-details">
                                            <label for="payment summary"><strong>TENDERED:</strong></label>
                                        </div>
                                        <input type="text" class="lgtext" id="cash" placeholder="0.00" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <div class="border-paymnt-details">
                                            <label for="payment summary"><strong>CHANGED:</strong></label>
                                        </div>
                                        <input type="text" class="lgtext pymnt-details-color" id="chngedpymnt" placeholder="0.00" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal-payment -->

    <!-- modal_browse_products -->
    <div id="modal_browse_products" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog modal-lg md-pos">
            <div class="modal-content">
                <div class="modal-header hd-modal-pymnt">
                    <button class="btn" id="btn-cancel-pro" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i> Cancel</button>
                    <h4 class="modal-title">
                        <strong>Items/Products</strong>
                    </h4>
                </div>
                <div class="modal-body mb-tbl-product">
                    <div class="container-fluid">
                        <div class="table-responsive" id="div_product_list">
                        <input type="text" class="form-control inp-search-pro">
                            <table class="thead-fixed">
                              <thead class="thead-modal"> 
                                    <tr>
                                        <th class="th-modal-first" width="22%">PLU</th>
                                        <th class="th-modal" width="35%">Description</th>
                                        <th class="th-modal" width="8%">SRP</th>
                                        <th class="th-modal" width="10%">Tax Value</th>
                                        <th class="th-modal">On hand</th>
                                        <th class="th-modal-last">Action</th>
                                    </tr>
                                </thead>
                            </table>
                            <div class="scroll-div-pro">
                                <table id="tbl_products" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                    <thead class="thead-modal" hidden> 
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
                </div>
            </div>
        </div>
    </div>
    <!-- / modal_browse_products -->

    <!-- modal_browse_discounts -->
    <div id="modal_browse_discounts" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
      <div class="modal-dialog modal-m md-pos">
        <div class="modal-content">
          <div class="modal-header hd-modal-pos">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title">
              <strong>Discounts</strong>
            </h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="table-responsive" id="div_product_list">
                  <div class="scroll-div-pro">
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
          </div>
        </div>
      </div>
    </div>
    <!-- / modal_browse_discounts -->

    <!-- modal_customers_list -->
    <div id="modal_customers_list" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static"><!--modal-->
      <div class="modal-dialog modal-m md-pos">
        <div class="modal-content">
          <div class="modal-header hd-modal-pos">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
            <h4 class="modal-title"><strong>Customers</strong></h4>
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
        </div>
      </div>
    </div>
   <!-- / modal_customers_list -->

   <!-- modal_journal_list -->
    <div id="modal_journal_list" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog modal-m md-pos">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                    <h4 class="modal-title"><strong>Journal</strong></h4>
                </div>
                <div class="modal-body mb-journal">
                    <div class="container-fluid">
                        <div id="div_product_list">
                            <div class="row journal-panel">
                                <div class="col-md-6">
                                    <label>Receipt No:</label>
                                    <input type="text" name="receipt_no" id="receipt_no" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label>Filter Date:</label>
                                    <input type="text" name="date_created" id="journal_date" class="date-picker form-control">
                                </div>
                            </div>
                            <div class="table-responsive">
                                <div class="scroll-div-journal">
                                    <table id="tbl_journal" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead class="thead-modal">
                                          <tr>
                                              <center>
                                                  <th class="th-modal-first"></th>
                                                  <th class="th-modal">Invoice #</th>
                                                  <th class="th-modal">Customer Name</th>
                                                  <th class="th-modal">Amount</th>
                                                  <th class="th-modal-last">Action</th>
                                              </center>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /modal_journal_list -->

    <!-- modal_qty -->
    <div id="modal_qty" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog modal-sm md-qty">
            <div class="modal-content">
                <div class="modal-header hd-modal-pos">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                    <h4 class="modal-title">
                        <strong>
                            <span id="qty_pro_name"></span>
                        </strong>
                    </h4>
                </div>
                <div class="modal-body mb-qty">
                    <div class="container-fluid">
                        <div class="qty-panel">
                            <form>
                              <div class="qty-details">
                                  <table id="tbl_qty">
                                      <tr>
                                          <td align="right">Barcode</td>
                                          <td class="detail-td"><div class="pro-detail"><span id="qty_bcode">1</span></div></td>
                                      </tr>
                                      <tr>
                                          <td align="right">Quantity</td>
                                          <td class="detail-td">
                                              <div class="pro-detail">
                                                  <center>
                                                      <span id="qty_prev"></span>
                                                  </center>
                                              </div>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td align="right">Price</td>
                                          <td class="detail-td">
                                              <div class="pro-detail">
                                                  <span id="qty_price"></span>
                                              </div>
                                          </td>
                                      </tr>
                                  </table>
                              </div>
                              <div class="enter-qty-header">Enter quantity</div>
                              <input type="text" name="row_qty" id="row_qty" class="numeric form-control" min="1" placeholder="0.00" autocomplete="off">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / modal_qty -->

    <!-- modal_void -->
    <div id="modal_void" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog md-authorization">
            <div class="modal-content">
                <div class="modal-header hd-modal-pymnt">
                    <h4 class="modal-title">
                        <center>
                            <strong>
                                <span class="fa fa-user fa-size"></span> Authorization
                            </strong>
                        </center>
                    </h4>
                </div>
                <div class="modal-body mb-authorization">
                    <div class="container-fluid">
                        <div class="input-group">
                            <span class="input-group-addon addon-pos">
                                <i class="fa fa-lock left-fa-inp" aria-hidden="true"></i>
                            </span>
                            <input type="password" class="form-control" name="void_pwd" id="void_pwd">
                        </div>
                    </div>
                </div>
                <div class="modal-footer mf-authorization">
                    <div class="row">
                        <center>
                            <button id="void_pwd_btn" type="button" class="btn btn-primary btn-authorization">OK</button>
                            <button type="button" class="btn btn-danger btn-authorization" data-dismiss="modal" aria-label="Close">
                              Cancel
                           </button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / modal_void -->

    <!-- modal_card_payment -->
    <div id="modal_card_payment" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog md-card-pymnt">
            <div class="modal-content">
                <div class="modal-header hd-modal-pymnt">
                    <h4 class="modal-title">
                        <center>
                            <strong>
                                <span class="fa fa-credit-card"></span> Card
                            </strong>
                        </center>
                    </h4>
                </div>
                <div class="modal-body mb-pymnt">
                    <div class="container-fluid cf-pymnt"> 
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="panel-pymnt">
                                    <strong>Card</strong>
                                </div>
                                <div class="scroll-panel-pymnt">
                                    <table id="tbl_card">
                                        <thead>
                                            <th hidden>Card</th>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <form role="form" id="frm_card_details">
                                    <div class="form-group fg-pymnt">
                                        <div class="col-pymnt-details">
                                            <label for="usr">Card Holder Name</label>
                                              <div class="input-group">
                                                  <span class="input-group-addon addon-pos">
                                                      <i class="fa fa-user icon-pymnt" aria-hidden="true"></i>
                                                  </span>
                                                  <input type="text" class="form-control inp-size" id="inp_card_holder" placeholder="Card Holder Name" name="check_bank" data-error-msg="Card Holder name is required." required>
                                              </div>
                                        </div>
                                        <div class="col-pymnt-details">
                                            <label for="usr">Approval No.</label>
                                              <div class="input-group">
                                                  <span class="input-group-addon addon-pos">
                                                      <i class="fa fa-list icon-pymnt" aria-hidden="true"></i>
                                                  </span>
                                                  <input type="text" class="form-control inp-size" id="inp_card_approval" name="check_number" placeholder="Approval No." data-error-msg="Approval No# is required." required>
                                              </div>
                                        </div>
                                        <div class="col-pymnt-details">
                                            <label for="usr">Card No.</label>
                                              <div class="input-group">
                                                  <span class="input-group-addon addon-pos">
                                                      <i class="fa fa-list icon-pymnt" aria-hidden="true"></i>
                                                  </span>
                                                  <input type="text" class="form-control inp-size" id="inp_card_no" name="check_number" placeholder="Card No." data-error-msg="Card no# is required." required>
                                              </div>
                                        </div>
                                          <label for="check amount">Amount</label>
                                          <input type="text" class="lgtext amnt-pymnt" id="cardamount" placeholder="0.00" data-error-msg="Please input an amount." required>
                                    </div>
                                      <input type="hidden" id="card_code" data-error-msg="Please choose your card." required>
                                      <input type="hidden" id="card_holder_name">
                                      <input type="hidden" id="card_approval">
                                      <input type="hidden" id="card_no">
                                      <input type="hidden" id="card_amount">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer mf-pymnt">
                  <div class="row">
                    <center>
                      <button id="btn_ok_card_payment" type="button" class="btn btn-primary btn-pymnt">
                        <strong><i class="fa fa-check-circle-o" aria-hidden="true"></i> OK</strong>
                      </button>
                      <button type="button" class="btn btn-danger btn-pymnt" data-dismiss="modal" aria-label="Close">
                        <strong><i class="fa fa-times" aria-hidden="true"></i> Cancel</strong>
                      </button>
                    </center>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / modal_card_payment -->

    <!-- modal_gift_certificate_payment -->
    <div id="modal_gift_certificate_payment" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog md-pymnt">
            <div class="modal-content">
                <div class="modal-header hd-modal-pymnt">
                    <h4 class="modal-title">
                      <center>
                        <strong>
                          <span class="fa fa-gift"></span> Gift Certificate
                        </strong>
                      </center>
                    </h4>
                  </div>
                  <div class="modal-body mb-pymnt">
                      <div class="container-fluid cf-pymnt">  
                          <div class="col-md-12">
                              <div class="col-md-4">
                                  <div class="panel-pymnt">
                                      <strong>Gift Certificate</strong>
                                  </div>
                                  <div class="scroll-panel-pymnt">
                                      <table id="tbl_gc">
                                          <thead>
                                              <th hidden>Card</th>
                                          </thead>
                                          <tbody>
                                          </tbody>
                                      </table>
                                  </div>
                              </div>
                              <div class="col-md-8">
                                  <form role="form" id="frm_gc_details">
                                      <div class="form-group fg-pymnt">
                                          <div class="col-pymnt-details">
                                              <label for="usr">Branch / Address</label>
                                              <div class="input-group">
                                                  <span class="input-group-addon addon-pos">
                                                      <i class="fa fa-home icon-pymnt" aria-hidden="true"></i>
                                                  </span>
                                                  <input type="text" class="form-control inp-size" id="inp_gc_branch" placeholder="Branch/Address" name="check_bank" data-error-msg="Branch/Address is required." required>
                                              </div>
                                          </div>
                                          <div class="col-pymnt-details">
                                              <label for="usr">Gift Certificate No.</label>
                                              <div class="input-group">
                                                  <span class="input-group-addon addon-pos">
                                                      <i class="fa fa-list icon-pymnt" aria-hidden="true"></i>
                                                  </span>
                                                  <input type="text" class="form-control inp-size" id="inp_gc_no" name="check_number" placeholder="Gift Certificate No." data-error-msg="Gift Certificate No is required." required>
                                              </div>
                                          </div>
                                            <label for="check amount">Amount</label>
                                            <input type="text" class="lgtext amnt-pymnt" id="gcamount" placeholder="0.00" data-error-msg="Please input an amount." required>
                                      </div>
                                      <input type="hidden" id="gc_code" data-error-msg="Please choose a Gift Certificate." required>
                                      <input type="hidden" id="gc_branch">
                                      <input type="hidden" id="gc_no">
                                      <input type="hidden" id="gc_amount">
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="modal-footer mf-pymnt">
                      <div class="row">
                          <center>
                              <button id="btn_ok_gc_payment" type="button" class="btn btn-primary btn-pymnt">
                                  <strong><i class="fa fa-check-circle-o" aria-hidden="true"></i> OK</strong>
                              </button>
                              <button type="button" class="btn btn-danger btn-pymnt" data-dismiss="modal" aria-label="Close">
                                  <strong><i class="fa fa-times" aria-hidden="true"></i> Cancel</strong>
                              </button>
                          </center>
                      </div>
                  </div>
              </div>
         </div>
    </div>
    <!-- / modal_gift_certificate_payment -->

    <!-- modal_cheque_payment -->
    <div id="modal_cheque_payment" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog md-pymnt">
            <div class="modal-content">
                <div class="modal-header hd-modal-pymnt">
                    <h4 class="modal-title">
                        <center>
                            <strong>
                                <span class="fa fa-gift"></span> Cheque
                            </strong>
                        </center>
                    </h4>
                </div>
                <div class="modal-body mb-pymnt">
                    <div class="container-fluid cf-pymnt">  
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="panel-pymnt">
                                    <strong>Card</strong>
                                </div>
                                <div class="scroll-panel-pymnt">
                                    <table id="tbl_cheque">
                                        <thead>
                                            <th hidden>Cheque</th>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <form role="form" id="frm_cheque_details">
                                    <div class="form-group fg-pymnt">
                                      <div class="col-pymnt-details">
                                          <label for="usr">Branch / Address</label>
                                            <div class="input-group">
                                                <span class="input-group-addon addon-pos">
                                                    <i class="fa fa-home icon-pymnt" aria-hidden="true"></i>
                                                </span>
                                              <input type="text" class="form-control inp-size" id="inp_cheque_branch" placeholder="Branch/Address" name="check_bank" data-error-msg="Branch/Address is required." required>
                                          </div>
                                        </div>
                                        <div class="col-pymnt-details">
                                            <label for="usr">Cheque No.</label>
                                              <div class="input-group">
                                                  <span class="input-group-addon addon-pos">
                                                      <i class="fa fa-list icon-pymnt" aria-hidden="true"></i>
                                                  </span>
                                                  <input type="text" class="form-control inp-size" id="inp_cheque_no" name="check_number" placeholder="Cheque No." data-error-msg="Cheque No. is required." required>
                                              </div>
                                        </div>
                                        <label for="check amount">Amount</label>
                                        <input type="text" class="lgtext amnt-pymnt" id="chequeamount" placeholder="0.00" data-error-msg="Please input an amount." required>
                                    </div>
                                    <input type="hidden" id="cheque_bank" data-error-msg="Please choose a bank." required>
                                    <input type="hidden" id="cheque_branch">
                                    <input type="hidden" id="cheque_no">
                                    <input type="hidden" id="cheque_amount">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer mf-pymnt">
                    <div class="row">
                        <center>
                            <button id="btn_ok_cheque_payment" type="button" class="btn btn-primary btn-pymnt">
                                <strong><i class="fa fa-check-circle-o" aria-hidden="true"></i> OK</strong>
                            </button>
                            <button type="button" class="btn btn-danger btn-pymnt" data-dismiss="modal" aria-label="Close">
                                <strong><i class="fa fa-times" aria-hidden="true"></i> Cancel</strong>
                            </button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / modal_cheque_payment -->

    <!-- modal_charge_payment -->
    <div id="modal_charge_payment" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog md-pymnt">
            <div class="modal-content">
                <div class="modal-header hd-modal-pymnt">
                    <h4 class="modal-title">
                        <center>
                            <strong>
                                <span class="fa fa-user"></span> Charge
                            </strong>
                        </center>
                    </h4>
                </div>
                <div class="modal-body mb-pymnt">
                    <div class="container-fluid cf-pymnt">  
                        <div class="col-md-12">
                            <div class="col-md-4">
                              <div class="panel-pymnt">
                                <strong>Charge</strong>
                              </div>
                              <div class="scroll-panel-pymnt">
                                  <table id="tbl_charge">
                                      <thead>
                                          <th hidden>Charge</th>
                                      </thead>
                                      <tbody>
                                      </tbody>
                                  </table>
                              </div>
                            </div>
                            <div class="col-md-8">
                                <form role="form" id="frm_charge_details">
                                  <div class="form-group fg-pymnt">
                                      <div class="col-pymnt-details">
                                          <label for="usr">Branch / Address</label>
                                          <div class="input-group">
                                              <span class="input-group-addon addon-pos">
                                                  <i class="fa fa-home icon-pymnt" aria-hidden="true"></i>
                                              </span>
                                              <input type="text" class="form-control inp-size" id="inp_charge_branch" placeholder="Branch/Address" name="check_bank" data-error-msg="Branch/Address is required." required>
                                          </div>
                                      </div>
                                      <div class="col-pymnt-details">
                                        <label for="usr">Reference</label>
                                          <div class="input-group">
                                              <span class="input-group-addon addon-pos">
                                                <i class="fa fa-list icon-pymnt" aria-hidden="true"></i>
                                              </span>
                                              <input type="text" class="form-control inp-size" id="inp_charge_reference" name="check_number" placeholder="Reference" data-error-msg="Reference is required." required>
                                          </div>
                                      </div>
                                      <label for="check amount">Amount</label>
                                      <input type="text" class="lgtext amnt-pymnt" id="chargeamount" placeholder="0.00" data-error-msg="Please input an amount." required>
                                  </div>
                                    <input type="hidden" id="charge_code" data-error-msg="Please choose a charge." required>
                                    <input type="hidden" id="charge_branch">
                                    <input type="hidden" id="charge_reference">
                                    <input type="hidden" id="charge_amount">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer mf-pymnt">
                    <div class="row">
                        <center>
                            <button id="btn_ok_charge_payment" type="button" class="btn btn-primary btn-pymnt">
                                <strong><i class="fa fa-check-circle-o" aria-hidden="true"></i> OK</strong>
                            </button>
                            <button type="button" class="btn btn-danger btn-pymnt" data-dismiss="modal" aria-label="Close">
                                <strong><i class="fa fa-times" aria-hidden="true"></i> Cancel</strong>
                            </button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- / modal_charge_payment-->

    <!--- modal_senior_citizen-->
    <div id="modal_senior_citizen" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog" id="modal-senior">
            <div class="modal-content">
                <div class="modal-header bgm-indigo hd-modal-pymnt">
                    <h4 class="modal-title"><center><strong>Senior Citizen Information</strong></center></h4>
                </div>
                <div class="modal-body mb-senior">
                    <form id="frm_senior">
                      <input type="hidden" id="seniorTotalDiscount" name="seniorTotalDiscount">
                      <div class="container-fluid">
                          <div class="row">
                              <div class="form-group">
                                  <div class="col-sm-12">
                                      <div class="input-group">
                                          <span class="input-group-addon addon-pos">
                                              <i class="fa fa-tags fa-size" aria-hidden="true"></i>
                                          </span>
                                          <input type="text" id="seniorID" name="seniorID" class="form-control inp-size" placeholder="Senior ID" data-error-msg="Senior ID is required." required>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row fgroup">
                              <div class="form-group">
                                  <div class="col-sm-12">
                                      <div class="input-group">
                                          <span class="input-group-addon addon-pos">
                                              <i class="fa fa-user fa-size" aria-hidden="true"></i>
                                          </span>
                                          <input type="text" id="seniorName" name="seniorName" class="form-control inp-size" placeholder="Name" data-error-msg="Senior name is required." required>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="row fgroup">
                              <div class="form-group">
                                  <div class="col-sm-12">
                                      <div class="input-group">
                                          <span class="input-group-addon addon-pos">
                                              <i class="fa fa-home fa-size" aria-hidden="true"></i>
                                          </span>
                                          <input type="text" id="seniorAddress" name="seniorAddress" class="form-control inp-size" placeholder="Address">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </form>
                </div>
                <div class="modal-footer mf-pymnt">
                    <div class="row">
                        <center>
                            <button id="c_btn" type="button" class="btn btn-primary btn-senior">OK</button>
                            <button id="cancel-btn" type="button" class="btn btn-danger btn-senior" data-dismiss="modal" aria-label="Close">
                                Cancel
                            </button>
                        </center>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--- / modal_senior_citizen-->
  </div>
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
    var pymnt_modal_status = '0';

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

        $("body").css("overflow", "hidden");

        $(document).bind("contextmenu", function (e) {
                e.preventDefault();
        });

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

          $("#cash").keydown(function (e) {
              // Allow: backspace, delete, tab, escape, enter and .
              if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                   // Allow: Ctrl+A, Command+A
                  (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
                   // Allow: home, end, left, right, down, up
                  (e.keyCode >= 35 && e.keyCode <= 40)) {
                       // let it happen, don't do anything
                       return;
              }
              // Ensure that it is a number and stop the keypress
              if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                  e.preventDefault();
              }
          });

          $("#cardamount").keydown(function (e) {
              // Allow: backspace, delete, tab, escape, enter and .
              if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                   // Allow: Ctrl+A, Command+A
                  (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
                   // Allow: home, end, left, right, down, up
                  (e.keyCode >= 35 && e.keyCode <= 40)) {
                       // let it happen, don't do anything
                       return;
              }
              // Ensure that it is a number and stop the keypress
              if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                  e.preventDefault();
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
        $('#tbl_items tbody tr').last().css('background-color','#ECEFF1');
        row.find(oTableItems.qty).find('input.numeric').css('background-color','#ECEFF1');
        row.find(oTableItems.sale_cost).find('input.numeric').css('background-color','#ECEFF1');
        row.find(oTableItems.discount).find('input.numeric').css('background-color','#ECEFF1');
        row.find(oTableItems.total).find('input.numeric').css('background-color','#ECEFF1');
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
            clearFields($('#frm_adjustment'));
            showList(false);
        });

        $('#btn_ok_card_payment').click(function(){
          if(validateRequiredFields($('#frm_card_details'))){
            var inp_card_holder = $('#inp_card_holder').val();
            var inp_card_approval = $('#inp_card_approval').val();
            var inp_card_no = $('#inp_card_no').val();
            var cardamount = $('#cardamount').val();

            $('#card_holder_name').val(inp_card_holder);
            $('#card_approval').val(inp_card_approval);
            $('#card_no').val(inp_card_no);
            $('#card_amount').val(cardamount);

            $('#modal_card_payment').modal('hide');

            $('#inp_card_holder').val("");
            $('#inp_card_approval').val("");
            $('#inp_card_no').val("");
            $('#cardamount').val("");

            var ca = $('#card_amount').val();
            var num = ca.replace(/,/gi, "");
            var num2 = num.split(/(?=(?:\d{3})+$)/).join(",");
            $('.crd').val(accounting.formatNumber(num2,2));
            $('.csh').val('0.00');
            $('#cash').val('0.00');

            reComputeChange();
          }
        });

        $('#btn_ok_cheque_payment').click(function(){
          if(validateRequiredFields($('#frm_cheque_details'))){

            var inp_cheque_branch = $('#inp_cheque_branch').val();
            var inp_cheque_no = $('#inp_cheque_no').val();
            var chequeamount = $('#chequeamount').val();

            $('#cheque_branch').val(inp_cheque_branch);
            $('#cheque_no').val(inp_cheque_no);
            $('#cheque_amount').val(chequeamount);

            $('#modal_cheque_payment').modal('hide');

            $('#inp_cheque_branch').val("");
            $('#inp_cheque_no').val("");
            $('#chequeamount').val("");

            var ca = $('#cheque_amount').val();
            var num = ca.replace(/,/gi, "");
            var num2 = num.split(/(?=(?:\d{3})+$)/).join(",");

            $('.chq').val(accounting.formatNumber(num2,2));
            $('.csh').val('0.00');
            $('#cash').val('0.00');

            reComputeChange();
          }
        });

        $('#btn_ok_gc_payment').click(function(){
          if(validateRequiredFields($('#frm_gc_details'))){

            var inp_gc_branch = $('#inp_gc_branch').val();
            var inp_gc_no = $('#inp_gc_no').val();
            var gcamount = $('#gcamount').val();

            $('#gc_branch').val(inp_gc_branch);
            $('#gc_no').val(inp_gc_no);
            $('#gc_amount').val(gcamount);

            $('#modal_gift_certificate_payment').modal('hide');

            $('#inp_gc_branch').val("");
            $('#inp_gc_no').val("");
            $('#gcamount').val("");

            var ca = $('#gc_amount').val();
            var num = ca.replace(/,/gi, "");
            var num2 = num.split(/(?=(?:\d{3})+$)/).join(",");

            $('.gc').val(accounting.formatNumber(num2,2));
            $('.csh').val('0.00');
            $('#cash').val('0.00');

            reComputeChange();
          }
        });

        $('#btn_ok_charge_payment').click(function(){
          if(validateRequiredFields($('#frm_charge_details'))){

            var inp_charge_branch = $('#inp_charge_branch').val();
            var inp_charge_reference = $('#inp_charge_reference').val();
            var chargeamount = $('#chargeamount').val();

            $('#charge_branch').val(inp_charge_branch);
            $('#charge_reference').val(inp_charge_reference);
            $('#charge_amount').val(chargeamount);

            $('#modal_charge_payment').modal('hide');

            $('#inp_charge_branch').val("");
            $('#inp_charge_reference').val("");
            $('#chargeamount').val("");

            var ca = $('#charge_amount').val();
            var num = ca.replace(/,/gi, "");
            var num2 = num.split(/(?=(?:\d{3})+$)/).join(",");

            $('.chrge').val(accounting.formatNumber(num2,2));
            $('.csh').val('0.00');
            $('#cash').val('0.00');

            reComputeChange();
          }
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
          row.css('background-color','#ECEFF1');
          row.find(oTableItems.qty).find('input.numeric').css('background-color','#ECEFF1');
          row.find(oTableItems.sale_cost).find('input.numeric').css('background-color','#ECEFF1');
          row.find(oTableItems.discount).find('input.numeric').css('background-color','#ECEFF1');
          row.find(oTableItems.total).find('input.numeric').css('background-color','#ECEFF1');
          countCart();

        });

        $('#tbl_card tbody').on('click','tr',function(){
          $('#tbl_card tbody tr').css('background-color','#fff');
          $('#tbl_card tbody tr').css('cursor','pointer');
          row=$(this).closest('tr');
          row.css('background-color','#FFF9C4');

          var data=dt.row(row).data();
          var card_code = data.card_code;
          $('#card_code').val(card_code);
        });

        $('#tbl_gc tbody').on('click','tr',function(){
          $('#tbl_gc tbody tr').css('background-color','#fff');
          $('#tbl_gc tbody tr').css('cursor','pointer');
          row=$(this).closest('tr');
          row.css('background-color','#FFF9C4');

          var data=dt.row(row).data();
          var gift_code = data.giftcard_code;
          $('#gc_code').val(gift_code);
        });

        $('#tbl_cheque tbody').on('click','tr',function(){
          $('#tbl_cheque tbody tr').css('background-color','#fff');
          $('#tbl_cheque tbody tr').css('cursor','pointer');
          row=$(this).closest('tr');
          row.css('background-color','#FFF9C4');

          var data=dt.row(row).data();
          var cheque_bank = data.bank_code;
          $('#cheque_bank').val(cheque_bank);
        });

        $('#tbl_charge tbody').on('click','tr',function(){
          $('#tbl_charge tbody tr').css('background-color','#fff');
          $('#tbl_charge tbody tr').css('cursor','pointer');
          row=$(this).closest('tr');
          row.css('background-color','#FFF9C4');

          var data=dt.row(row).data();
          var charges_code = data.charges_code;

          $('#charge_code').val(charges_code);
        });

        $(document).keydown(function(event) {
            if( event.which == 80 && event.altKey ) {
              $('#btn_payment').click();
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

        $('#txtsearch').click(function(){
          $('#txtsearch').focus(function() {
            $(this).css('background-color', '#FFFDE7');
          }).blur(function(){
            $(this).css('background-color', '#FFF');
          });
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
                   text: "Void item ["+ itemname +"]?",
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
                      $('#tbl_items tbody tr').last().css('background-color','#ECEFF1');
                      row.find(oTableItems.qty).find('input.numeric').css('background-color','#ECEFF1');
                      row.find(oTableItems.sale_cost).find('input.numeric').css('background-color','#ECEFF1');
                      row.find(oTableItems.discount).find('input.numeric').css('background-color','#ECEFF1');
                      row.find(oTableItems.total).find('input.numeric').css('background-color','#ECEFF1');
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

        $('#btn_payment').click(function(){
          if (itemcount != 0){
            pymnt_modal_status = '1';
            $('#modal_payment').modal('show');        
            var amountdueinput = $('#amountdue').val();
            $('#amountduepymt').val(amountdueinput);   
            $('.csh').val(amountdueinput);
            $('#cash').val(amountdueinput);
            $('.totalpymntmthd').val(amountdueinput);

            $('#cash').focus(500).select();

            var ttlcash = $('#cash').val();
            reComputeChange();

            var chngepmntmodal = parseFloat(amountdueinput)-parseFloat(ttlcash);
            $('#chngedpymnt').val(accounting.formatNumber(chngepmntmodal,2));
          }
        });

        $('.cancelpymnt').click(function(){
          $('#modal_payment').modal('hide'); 
          pymnt_modal_status = '0';
        });



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
        '<td style="display: none;" width="11%"><input name="pos_line_total_discount[]" style="width:40px !important;" type="text" class="numeric " value="'+ accounting.formatNumber(d.pos_line_total_discount,2)+'" readonly></td>'+
        '<td style="display: none;"><input name="pos_tax_rate[]" type="text" style="width:40px !important;" class="numeric" value="'+ accounting.formatNumber(d.pos_tax_rate,2)+'"></td>'+
        '<td width="11%" style="border: .5px solid #CFD8DC;" align="right"><input name="pos_line_total_price[]" type="text" class="numeric" value="'+ accounting.formatNumber(d.pos_line_total_price,2)+'" style="border: 0px !important; background-color: #fff; font-weight: bold; font-size: 12pt !important; width: 100%;" readonly></td>'+
        '<td style="display: none;"><input name="pos_tax_amount[]" type="text" class="numeric" style="width:40px !important;" value="'+ d.pos_tax_amount+'" readonly></td>'+
        '<td style="display: none;"><input name="pos_non_tax_amount[]" type="text" class="numeric" style="width:40px !important;" value="'+ d.pos_non_tax_amount+'" readonly></td>'+
        '<td style="display: none;"><input name="product_id[]" type="text" style="width:40px !important;" value="'+ d.product_id+'" readonly></td>'+
        '<td style="display: none;"><div class="row_bcode">'+d.product_code+'</div></td>'+
        '<td style="display: none;"><input name="disc_status[]" type="text" style="width:40px !important;" class="disc_stat" value="'+d.disc_status+'" readonly></td>'+
        '<td style="display: none;"><input name="non_vat_sales[]" type="text" class="numeric" style="width:40px !important;" value="'+ d.non_vat_sales+'" readonly></td>'+
        '<td style="display: none;"><input name="rate[]" type="text" style="width:40px !important;" class="numeric" value="'+ accounting.formatNumber(d.pos_tax_rate,2)+'"></td>'+
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
    
    $('#cash').keyup(function(){
      reChange();
      reComputeChange();
    });

    $('.click_class').click(function() {

      var value = ($(this).attr('value'));
      ClearCashInput();
      $("#cash").val(value);
      reChange();
      reComputeChange();

    });

		$('.click_class2').click(function() {
        var scurrentcash = $('#cash').val();
        var amountduepymt = $('#amountduepymt').val();

        var currentcash =  scurrentcash.replace(/,/g, "");
        var currentAmountDue = amountduepymt.replace(/,/g, "");

        var value = ($(this).attr('value'));
    
        if (currentcash == currentAmountDue){
          $('#cash').val("");
          $("#cash").val(value);
        }else{
          var cash2 = currentcash + value;
          $("#cash").val(cash2);
        }

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

			var totalcash = stotalcash.replace(/,/g, "");

			var sumofpayment = parseFloat(totalcash);

			// $("#total_payment").val(accounting.formatNumber(sumofpayment,2));
      $(".csh").val(accounting.formatNumber(sumofpayment,2));
    };

    var reComputeChange=function(){

      var chngepmntmodal;
			var stotalcash = $("#cash").val();
      var samountdue = $("#amountdue").val();

			var sumofpayment = parseFloat(totalcash);

			var amountdue = samountdue.replace(/,/g, "");
      var cassh = stotalcash.replace(/,/g, "");

      var crd = $('.crd').val();
      var chq = $('.chq').val();
      var gc = $('.gc').val();
      var chrge = $('.chrge').val();
      var csh = $('.csh').val();

      var totalcash = csh.replace(/,/g, "");
      var totalcheck = chq.replace(/,/g, "");
      var totalcard = crd.replace(/,/g, "");
      var totalcharge = chrge.replace(/,/g, "");;
      var totalgc = gc.replace(/,/g, "");

      var totalpymntmthd = parseFloat(totalcash)+parseFloat(totalcheck)+parseFloat(totalcard)+parseFloat(totalcharge)+parseFloat(totalgc);
      $('.totalpymntmthd').val(accounting.formatNumber(totalpymntmthd,2));

      var tpmthd = $('.totalpymntmthd').val();
      var paymntmethodtotal = tpmthd.replace(/,/g, "");

      var ComputeTotalCange = parseFloat(paymntmethodtotal) - parseFloat(amountdue);

			$("#cashamount").val(accounting.formatNumber(totalcash,2));
      $('#chngedpymnt').val(accounting.formatNumber(ComputeTotalCange,2));

    };

    $('.finalize').click(function(){
			var samountdue = $("#amountdue").val();
			var amountdue = samountdue.replace(/,/g, "");

      var cashinput = $("#cash").val();
      var cshinp = cashinput.replace(/,/g, "");

			synchronizeFields();

			if(amountdue==0){
				oopsnotice();
			}
			else{
  			if(parseFloat(cshinp)>=parseFloat(amountdue)){
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
            if(evt.keyCode==13){
              var scash = $("#cash").val();
              var samountdue = $("#amountdue").val();

              var amountdue = samountdue.replace(/,/g, "");
              var tcash = scash.replace(/,/g, "");

              var seniorTotalDisc = $('#seniorTotalDiscount').val();
              synchronizeFields();

              if(amountdue==0){
                oopsnotice();
              }
              else{
                if(parseFloat(tcash)>=parseFloat(amountdue))
                {
                  reComputeChange();

                    if (seniorTotalDisc != ""){
                      $('#modal_senior_citizen').modal('show');
                    }
                    else
                    {
                      validaterequirefields();
                    }
                  $('#btn_bcode').click();
                }
                else if(parseFloat(tcash)<parseFloat(amountdue)){
                  oopsfunds();
                }
                else if(parseFloat(tcash)>=parseFloat(amountdue)){
                  validaterequirefields();
                  $('#btn_bcode').click();
                }
                else{
                  oopsfunds();
                }
              }
            }  
      });

    $('#c_btn').click(function(){
      var samountdue = $("#amountdue").val();
			var amountdue = samountdue.replace(/,/g, "");

			synchronizeFields();
      if(validateRequiredFields($('#frm_senior'))){
        $('#modal_senior_citizen').modal('hide');
        validaterequirefields();
      }
    });

    var validaterequirefields=function(){

  		// var scheckamount = $('#checkamount').val();
  		// var checkamount = scheckamount.replace(/,/g, "");

  		// var scardamount = $('#cardamount').val();
  		// var cardamount = scardamount.replace(/,/g, "");

  		// var schargeamount = $('#chargeamount').val();
  		// var chargeamount = schargeamount.replace(/,/g, "");

  		// var checkbank = $('#check_bank').val();
  		// var checknumber = $('#check_number').val();
  		// var cardholder = $('#cardholder').val();
  		// var cardnumber = $('#cardnum').val();
  		// var cardapprovalnum = $('#approvalnum').val();
  		// var chargeto = $('#chargeto').val();

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
  			// var acheckbank = $("#check_bank").val();
  			// var achecknumber = $("#check_number").val();
  			// var acheckaddress = $("#check_address").val();
  			// var acheckdate = $("#check_date").val();
  			// $("#post_check_bank").val(acheckbank);
  			// $("#post_check_number").val(achecknumber);
  			// $("#post_check_address").val(acheckaddress);
  			// $("#post_check_date").val(acheckdate);

  			// var atypeofcard = $("#typeofcard").val();
  			// var acardholder = $("#cardholder").val();
  			// var acardnum = $("#cardnum").val();
  			// var aapprovalnum = $("#approvalnum").val();
  			// var acardexpiry = $("#cardexpiry").val();
  			// $("#post_card_type").val(atypeofcard);
  			// $("#post_card_holder").val(acardholder);
  			// $("#post_card_number").val(acardnum);
  			// $("#post_card_apnumber").val(aapprovalnum);
  			// $("#post_card_expdate").val(acardexpiry);

  			// var achargeto = $("#chargeto").val();
  			// var achargeremarks = $("#charge_remarks").val();
  			// var achargedate = $("#charge_date").val();
  			// $("#post_chargeto").val(achargeto);
  			// $("#post_charge_remarks").val(achargeremarks);
  			// $("#post_charge_date").val(achargedate);
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

        $('.crd').val(accounting.formatNumber(0.00,2));
        $('.chq').val(accounting.formatNumber(0.00,2));
        $('.gc').val(accounting.formatNumber(0.00,2));
        $('.chrge').val(accounting.formatNumber(0.00,2));
        $('.csh').val(accounting.formatNumber(0.00,2));

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
      $('.inp-search-pro').focus(500);
    });

    $('.inp-search-pro').keyup(function(){
      var searchinp = $('.inp-search-pro').val();
      $('#tbl_products').dataTable().fnDestroy();
      if (searchinp != ""){
        getsearchpro();
      }
      else{
        getproducts();
      }
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

    $("#modal_payment").on('hide.bs.modal', function(){
       setTimeout(function(){
        pymnt_modal_status = '0';
      });    
    });

    //Alt 1 - Card
    $(document).keydown(function(event) {
      if( event.which === 49 && event.altKey ) {
        if (pymnt_modal_status == '1'){  
          $('#tbl_card').dataTable().fnDestroy();
          getcard();

          $('#modal_card_payment').modal('show');
          $('#modal_charge_payment').modal('hide');
          $('#modal_gift_certificate_payment').modal('hide');
          $('#modal_cheque_payment').modal('hide');

          var amountduepymt = $('#amountduepymt').val();
          var tamountduepymt = amountduepymt.replace(/,/g, "");
          $('#cardamount').val(tamountduepymt);
        }
      }
    });

    //Alt 2 - Cheque
    $(document).keydown(function(event) {
      if( event.which === 50 && event.altKey ) {
        if (pymnt_modal_status == '1'){
          $('#tbl_cheque').dataTable().fnDestroy();
          getcheque();
          $('#modal_cheque_payment').modal('show');
          $('#modal_card_payment').modal('hide');
          $('#modal_charge_payment').modal('hide');
          $('#modal_gift_certificate_payment').modal('hide');

          var amountduepymt = $('#amountduepymt').val();
          var tamountduepymt = amountduepymt.replace(/,/g, "");
          $('#chequeamount').val(amountduepymt);
        }
      }
    });

    //Alt 3 - GC
    $(document).keydown(function(event) {
      if( event.which === 51 && event.altKey ) {
        if (pymnt_modal_status == '1'){
          $('#tbl_gc').dataTable().fnDestroy();
          getgc();
          $('#modal_gift_certificate_payment').modal('show');
          $('#modal_cheque_payment').modal('hide');
          $('#modal_card_payment').modal('hide');
          $('#modal_charge_payment').modal('hide');

          var amountduepymt = $('#amountduepymt').val();
          var tamountduepymt = amountduepymt.replace(/,/g, "");
          $('#gcamount').val(tamountduepymt);
        }
      }
    });

    //Alt 4 - Charge
    $(document).keydown(function(event) {
      if( event.which === 52 && event.altKey ) {
        if (pymnt_modal_status == '1'){
          $('#tbl_charge').dataTable().fnDestroy();
          getcharge();
          $('#modal_charge_payment').modal('show');
          $('#modal_cheque_payment').modal('hide');
          $('#modal_card_payment').modal('hide');
          $('#modal_gift_certificate_payment').modal('hide');

          var amountduepymt = $('#amountduepymt').val();
          var tamountduepymt = amountduepymt.replace(/,/g, "");
          $('#chargeamount').val(tamountduepymt);
        }
      }
    });

    //Alt 5 - Cash Focus
    $(document).keydown(function(event) {
      if( event.which === 53 && event.altKey ) {
        if (pymnt_modal_status == '1'){
          $('#cash').focus();
        }
      }
    });

    var getproducts=function(){
          dt=$('#tbl_products').DataTable({
             "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "dom": '<"toolbar">frtip', 
            "bPaginate": false,
            "bInfo" : false,            
            "bFilter": false,
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
                         var btn_addtocart_close='<button class="btn btn-default btn-l" style="width: 50px; height: 50px; margin-left:-15px;" name="addtocart_close" data-toggle="tooltip" data-placement="top" title="Add"><span class="glyphicon glyphicon-ok"></span> </button>';
                           return '<center>'+btn_addtocart_close+'</center>';
                     }
                 },

             ],
             "rowCallback":function( row, data, index ){

                 $(row).find('td').eq(5).attr({
                     "align": "right"
                 });

                $(row).find('td').css('border-bottom','1px solid #CFD8DC');
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
                         var btn_apply_discount='<button class="btn btn-default btn-l" name="applyDiscount"  data-toggle="tooltip" style="width:50px; height: 50px;" data-placement="top" title="Apply Discount"><span class="glyphicon glyphicon-ok"></span> </button>';

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

        var getcard=function(){
          dt=$('#tbl_card').DataTable({
            "dom": '<"toolbar">frtip', 
            "bPaginate": false,
            "bInfo" : false,            
            "bFilter": false,
             "ajax" : "Cards/transaction/list",
             "bDestroy": true,
              "language": {
                 "searchPlaceholder": "Search Card"
             },
             "columns": [
                { targets:[0],data: "card_name"},
             ],
             "rowCallback":function( row, data, index ){

                 $(row).find('td').eq(2).attr({
                     "align": "right"
                 });

                 $(row).find('td').css('padding','10px');
                 $(row).find('td').css('border-bottom','1px solid #B0BEC5');
                 }
             });
        }
          var getgc=function(){
                dt=$('#tbl_gc').DataTable({
                  "dom": '<"toolbar">frtip', 
                  "bPaginate": false,
                  "bInfo" : false,            
                  "bFilter": false,
                   "ajax" : "Giftcards/transaction/list",
                   "bDestroy": true,
                   "columns": [
                      { targets:[0],data: "giftcard_name"},
                   ],
                   "rowCallback":function( row, data, index ){

                       $(row).find('td').eq(2).attr({
                           "align": "right"
                       });

                       $(row).find('td').css('padding','10px');
                       $(row).find('td').css('border-bottom','1px solid #B0BEC5');
                   }
               });
          }

          var getcharge=function(){
                dt=$('#tbl_charge').DataTable({
                  "dom": '<"toolbar">frtip', 
                  "bPaginate": false,
                  "bInfo" : false,            
                  "bFilter": false,
                   "ajax" : "Charges/transaction/list",
                   "bDestroy": true,
                   "columns": [
                      { targets:[0],data: "charges_desc"},
                   ],
                   "rowCallback":function( row, data, index ){

                       $(row).find('td').eq(2).attr({
                           "align": "right"
                       });

                       $(row).find('td').css('padding','10px');
                       $(row).find('td').css('border-bottom','1px solid #B0BEC5');
                   }
               });
          }

          var getcheque=function(){
                dt=$('#tbl_cheque').DataTable({
                  "dom": '<"toolbar">frtip', 
                  "bPaginate": false,
                  "bInfo" : false,            
                  "bFilter": false,
                   "ajax" : "Banks/transaction/list",
                   "bDestroy": true,
                   "columns": [
                      { targets:[0],data: "bank_name"},
                   ],
                   "rowCallback":function( row, data, index ){

                       $(row).find('td').eq(2).attr({
                           "align": "right"
                       });

                       $(row).find('td').css('padding','10px');
                       $(row).find('td').css('border-bottom','1px solid #CFD8DC');
                   }
               });
          }

        var getjournal=function(){
          var _selecteddatedt = $('#journal_date').val();
          dtjournal=$('#tbl_journal').DataTable({
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
                  { targets:[2],data: "cname" },
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
                  $(row).find('td').css('border-bottom','1px solid #CFD8DC');
              }
          });
        }

        var getsearchpro = function(){
           var _searchtext = $('.inp-search-pro').val();
            dt=$('#tbl_products').DataTable({
              "dom": '<"toolbar">frtip',               
              "bFilter": false,
              "bInfo" : false, 
              "ajax": {
              "url": "Products/transaction/searchlist",
              "type": "POST",
              "bDestroy": true,
              "data": function ( d ) {
                  return $.extend( {}, d, {
                      "search_text": _searchtext
                      } );
                  }
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
                           var btn_addtocart_close='<button class="btn btn-default btn-l" style="width: 50px; height: 50px; margin-left:-15px;" name="addtocart_close" data-toggle="tooltip" data-placement="top" title="Add"><span class="glyphicon glyphicon-ok"></span> </button>';
                             return '<center>'+btn_addtocart_close+'</center>';
                       }
                   },

               ],
              "rowCallback":function( row, data, index ){

                  $(row).find('td').eq(10).attr({
                      "align": "right"
                  });
                  $(row).find('td').css('border-bottom','1px solid #CFD8DC');
              }
          });
        }

         var GetJournalReceiptFilter=function(){
          var _selectreceiptno = $('#receipt_no').val();
          dtjournal=$('#tbl_journal').DataTable({
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
                  { targets:[2],data: "cname" },                  
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
                  $(row).find('td').css('border-bottom','1px solid #ECEFF1');
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
          $('#receipt_no').val("");
          $('#journal_date').val(strDate);
          $('#tbl_journal').dataTable().fnDestroy();
          getjournal();
          $('#modal_journal_list').modal('toggle');
        });


        $('#tbl_journal tbody').on( 'click', 'tr td.details-control', function () {
            var detailRows = [];
            var tr = $(this).closest('tr');
            var row = dtjournal.row( tr );
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
                         var btn_apply_customer='<button class="btn btn-default btn-l" name="applyCustomer"  data-toggle="tooltip" data-placement="top" title="Apply Customer"><span class="glyphicon glyphicon-ok"></span> </button>';

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
    var datareceipt_no;var pos_pymnt_id;

    $('#tbl_journal tbody').on( 'click', 'button[name="refundTransaction"]', function () {
      _selectRowObj=$(this).closest('tr');
      var data=dtjournal.row(_selectRowObj).data();
      datareceipt_no = data.receipt_no;
      pos_pymnt_id = data.pos_payment_id;

      var rdetails = '<div style="text-align: left; font-size: 10pt !important; font-weight: bold; margin-left: 34px;">WARNING: ALL DATA WILL BE ZERO OUT!</div><div style="text-align: center; font-size: 10pt !important;"> <br /> Sales transaction number [ '+ datareceipt_no +' ] was selected for refund. <br> Make sure manager/supervisor approved the customer/s refund. <hr> Are you sure you want continue customer refund?</div>';
      swalpopuprefund(rdetails);
    });

      var refundTransactions=function(){
          return $.ajax({
              "dataType":"json",
              "type":"POST",
              "url":"Templates/layout/refund",
              "data":{pos_payment_id : pos_pymnt_id},
              "beforeSend": showSpinningProgress($('#'))
          });
      };

     var swalpopuprefund=function(rdetails){
      swal({
              title: "Refund",
              text: rdetails,
              html: true,
              customClass: 'swal-body',
              closeOnConfirm: true,
              closeOnCancel: true,
              showCancelButton: true,
              cancelButtonText: "No",
              confirmButtonText: "Yes",
              confirmButtonColor: '#4CAF50',
          },function(isConfirm){
              if (isConfirm) {
                 refundTransactions().done(function(response){
                  //showNotification(response);
                      dtjournal.row(_selectRowObj).remove().draw();
                   //   alert(data.ref_service_id);
                 $.unblockUI();
               });
              } else {}
          });
    };

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
        $('#tbl_items tbody tr').last().css('background-color','#ECEFF1');
        row.find(oTableItems.qty).find('input.numeric').css('background-color','#ECEFF1');
        row.find(oTableItems.sale_cost).find('input.numeric').css('background-color','#ECEFF1');
        row.find(oTableItems.discount).find('input.numeric').css('background-color','#ECEFF1');
        row.find(oTableItems.total).find('input.numeric').css('background-color','#ECEFF1');
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
        $('#tbl_items tbody tr').last().css('background-color','#ECEFF1');
        row.find(oTableItems.qty).find('input.numeric').css('background-color','#ECEFF1');
        row.find(oTableItems.sale_cost).find('input.numeric').css('background-color','#ECEFF1');
        row.find(oTableItems.discount).find('input.numeric').css('background-color','#ECEFF1');
        row.find(oTableItems.total).find('input.numeric').css('background-color','#ECEFF1');
      return false;
    });

</script>
</body>
</html>
