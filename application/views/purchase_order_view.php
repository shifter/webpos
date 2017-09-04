
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
      td.details-control {
          background: url('assets/img/open.png') no-repeat center center;
          cursor: pointer;
      }
      tr.details td.details-control {
          background: url('assets/img/close.png') no-repeat center center;
      }
      .custom_frame{

          border: 1px solid lightgray;
          margin: 1% 1% 1% 1%;
          -webkit-border-radius: 5px;
          -moz-border-radius: 5px;
          border-radius: 5px;
      }

      .numeric{
          text-align: right;
      }
      .twitter-typeahead, .tt-hint, .tt-input, .tt-dropdown-menu { width: 100%; }
  </style>
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
        Purchase Order
        <small>Purchasing</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="Deliveries"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Purchase Order</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header btn_new" style="">
              <button class="btn btn-success right_services_view" id="btn_new"><i class="fa fa-barcode" aria-hidden="true"></i> Record Purchase Order</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive" id="invoice_list">
              <table id="tbl_purchase_order" class="table">
                <thead class="tbl-header">
                  <tr>
                    <th ></th>
                    <th >Purchase Order #</th>
                    <th >Supplier</th>
                    <th >Date Received</th>
                    <th style="text-align:center;">Action</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                  <tr>
                    <th ></th>
                    <th >Purchase Order #</th>
                    <th >Supplier</th>
                    <th >Date Received</th>
                    <th style="text-align:center;">Action</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <div id="invoice_fields" style="display: none;">
              <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style="margin:10px;">Record Purchase Order</h4>
                </div>
                <div class="panel-body">
                  <div class="row custom_frame container-fluid">
                      <form id="frm_deliveries" role="form" class="form-horizontal">
                    <br>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="col-md-3  control-label boldlabel">* PO # :</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                                                <span class="input-group-addon ">
                                                                    <i class="fa fa-code"></i>
                                                                </span>
                                    <input type="text" name="po_no" class="form-control" placeholder="AUTO" data-error-msg="PO # is required." disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="col-md-3  control-label boldlabel">Date Received: </label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                         <i class="fa fa-calendar"></i>
                                    </span>
                                    <input type="text" name="date_created" class="date-picker form-control " value="<?php echo date("m/d/Y"); ?>" placeholder="Date" data-error-msg="Date is required!" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 form-group">
                          <label class="col-md-3  control-label boldlabel">Supplier: </label>
                          <div class="col-md-9">
                              <div class="input-group">
                                  <span class="input-group-addon">
                                       <i class="fa fa-calendar"></i>
                                  </span>
                                  <select name="supplier" id="cbo_suppliers" data-error-msg="Supplier is required." required>
                                      <option value="newsupp" class="">[ Create New Supplier ]</option>
                                      <?php foreach($suppliers as $supplier){ ?>
                                          <option value="<?php echo $supplier->supplier_id; ?>"><?php echo $supplier->supplier_name; ?></option>
                                      <?php } ?>
                                  </select>
                              </div>
                          </div>
                        </div>
                      <div class="col-md-6 form-group">
                          <label class="col-md-3  control-label boldlabel">Remarks: </label>
                          <div class="col-md-9">
                              <div class="input-group">
                                  <span class="input-group-addon">
                                       <i class="fa fa-calendar"></i>
                                  </span>
                                  <textarea style="border:solid 1px #27ae60;" name="remarks" class="form-control" placeholder="Remarks"></textarea>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  </form>
                  <div class="row custom_frame">
                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><br />
                          <label class="control-label boldlabel" ><strong>Enter Barcode or Search Item :</strong></label>
                          <div id="custom-templates">
                              <input class="typeahead colorsearch"type="text" placeholder="Enter PLU or Search Item">
                          </div><br />

                          <form id="frm_items">
                              <div class="table-responsive" style="overflow-x: auto;overflow-y: scroll; height: 300px;">
                                  <table id="tbl_items" class="table table-striped table-bordered " cellspacing="0" width="100%">
                                  <thead style="background-color:#2c3e50;color:white;">
                                  <tr>
                                      <th width="10%">Qty</th>
                                      <th width="25%">Item</th>
                                      <th width="10%" style="text-align: right">Cost</th>
                                      <th width="10%" style="text-align: right">Discount</th>
                                      <th style="display: none;">T.D</th> <!-- total discount -->
                                      <th width="8%" style="text-align: right">Tax %</th>
                                      <th width="12%" style="text-align: right">Total</th>
                                      <th style="display: none;">V.I</th> <!-- vat input -->
                                      <th style="display: none;">N.V</th> <!-- net of vat -->
                                      <td style="display: none;">Item ID</td><!-- product id -->
                                      <th width="12%" style="text-align: right">Delivered Qty</th>
                                      <th width="13%" style="text-align: right">Balance</th>
                                      <th><center>Action</center></th>
                                  </tr>
                                  </thead>
                                  <tbody>

                                  </tbody>
                              </table>
                              </div>
                          </form>
                          <div class="row">
                              <div class="col-lg-3 col-lg-offset-9">
                                  <table id="tbl_delivery_summary" class="table invoice-total">
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
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="panel-footer">
                  <div class="row">
                      <div class="col-sm-12">
                          <button id="btn_save" class="btn-success btn" style="text-transform: capitalize;"><span class=""></span>  Save Changes</button>
                          <button id="btn_cancel" class="btn-default btn" style="text-transform: capitalize;">Cancel</button>
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
  <div id="modal_new_supplier" class="modal fade" tabindex="-1" role="dialog"><!--modal-->
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header bgm-indigo">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="xbutton">×</span></button>
                <h4 class="modal-title">Supplier : <transaction class="transaction"></transaction></h4>
            </div>
            <div class="modal-body">
                <form id="frm_supplier_new">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="form-group">
                            <label class="col-sm-4" style="margin-top:8px;" for="supplier">Supplier Code :</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                        <input type="text" name="supplier_code" class="form-control" placeholder="AUTO" data-error-msg="Supplier Name is required." readonly>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="row" style="margin-top:5px;">
                        <div class="form-group">
                            <label class="col-sm-4" style="margin-top:8px;" for="supplier">Supplier Name :</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                        <input type="text" name="supplier_name" class="form-control" placeholder="Supplier Name" data-error-msg="Supplier Name is required." required>
                                </div>
                            </div>
                        </div>
                      </div>
                       <div class="row" style="margin-top:5px;">
                        <div class="form-group">
                            <label class="col-sm-4" style="margin-top:8px;" for="tin#">TIN # :</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa-size" aria-hidden="true"></i></span>
                                        <input type="text" name="tin_no" class="form-control" placeholder="TIN #">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="row" style="margin-top:5px;">
                        <div class="form-group">
                            <label class="col-sm-4" style="margin-top:8px;" for="contactperson">Contact Person :</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                        <input type="text" name="contact_person" class="form-control" placeholder="Contact Person">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="row" style="margin-top:5px;">
                        <div class="form-group">
                            <label class="col-sm-4" style="margin-top:8px;" for="address">Address :</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-home fa-size" aria-hidden="true"></i></span>
                                        <input type="text" name="address" class="form-control" placeholder="Address">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="row" style="margin-top:5px;">
                        <div class="form-group">
                            <label class="col-sm-4" style="margin-top:8px;" for="address">Email Address :</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa-size" aria-hidden="true"></i></span>
                                        <input type="email" name="email_address" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="row" style="margin-top:5px;">
                        <div class="form-group">
                            <label class="col-sm-4" style="margin-top:8px;" for="address">Landline :</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-size" aria-hidden="true"></i></span>
                                        <input type="text" name="landline" class="form-control" placeholder="Landline">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="row" style="margin-top:5px;">
                        <div class="form-group">
                            <label class="col-sm-4" style="margin-top:8px;" for="address">Mobile No :</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-phone fa-size" aria-hidden="true"></i></span>
                                        <input type="text" name="mobile_no" class="form-control" placeholder="Mobile No#">
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
                <button id="btn_create_user_suppliers" style="margin-top:5px;" type="button" class="btn btn-primary">Save
                </button>
                <button type="button" style="margin-top:5px;" class="btn bgm-red" data-dismiss="modal">Close
                </button>
            </div>
        </div>
    </div>
  </div><!---modal-->
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

      var oTableItems={
            qty : 'td:eq(0)',
            unit_price : 'td:eq(2)',
            discount : 'td:eq(3)',
            total_line_discount : 'td:eq(4)',
            tax : 'td:eq(5)',
            total : 'td:eq(6)',
            vat_input : 'td:eq(7)',
            net_vat : 'td:eq(8)',
            delivered_qty : 'td:eq(10)',
            balance : 'td:eq(11)'


        };


        var oTableDetails={
            discount : 'tr:eq(0) > td:eq(1)',
            before_tax : 'tr:eq(1) > td:eq(1)',
            tax_amount : 'tr:eq(2) > td:eq(1)',
            after_tax : 'tr:eq(3) > td:eq(1)'
        };

        var initializeControls=function(){
        dt=$('#tbl_purchase_order').DataTable({
            "aLengthMenu": [[20, 25, 50, -1], [20, 25, 50, "All"]],
            "ajax" : "Purchase_Order/transaction/list",
            "bStateSave": true,
            "columns": [
              {
                  "targets": [0],
                  "class":          "details-control",
                  "orderable":      false,
                  "data":           null,
                  "defaultContent": ""
              },
              { targets:[1],data: "po_no" },
              { targets:[2],data: "supplier_name" },

              { targets:[6],data: "date_created" },
              {
                  targets:[7],
                  render: function (data, type, full, meta){
                      var btn_edit='<button class="btn btn-blue btn-xs" name="edit_info"  style="margin-left:-15px;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
                      var btn_trash='<button class="btn btn-danger btn-xs" name="remove_info" style="margin-left:5px;" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

                      return '<center>'+btn_edit+btn_trash+'</center>';
                  }
              }

            ],
            language: {
                         searchPlaceholder: "Search Purchase Order"
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
        //$('.toggle-fullscreen').click();
        _cboSuppliers.select2('val',null);
        clearFields($('#frm_deliveries'));
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
                '<table width="100%"><tr><td width=20%" style="padding-left: 1%;"><b>PLU</b></td><td width="30%" align="left"><b>Description 1</b></td><td width="20%" align="right" style="padding-right: 2%;"><b>Cost</b></td><td hidden width="20%" align="left"><b>Tax Rate</b></td></tr></table>'
            ].join('\n'),

            suggestion: Handlebars.compile('<table width="100%"><tr><td width="20%" style="padding-left: 1%">{{product_code}}</td><td width="30%" align="left">{{product_desc}}</td><td width="20%" align="right" style="padding-right: 2%;">{{purchase_cost}}</td><td hidden width="20%" align="left">{{tax_rate}}</td></tr></table>')

        }
    }).on('keyup', this, function (event) {
  	if(_objTypeHead.typeahead('val')==''){
  			 return false; }  //if input text of typeahead  enter.log(suggestion);
          if (event.keyCode == 13) {

              $('.tt-suggestion:first').click();
              _objTypeHead.typeahead('close');
              _objTypeHead.typeahead('val','');
          }
      }).bind('typeahead:select', function(ev, suggestion) {
        //if(_objTypeHead.typeahead('val')==''){ return false; }
        //console.log(suggestion);

        var tax_id="1";
        var tax_rate=suggestion.tax_rate;

        var total=getFloat(suggestion.purchase_cost);
        var net_vat=0;
        var vat_input=0;

        net_vat=total/(1+(getFloat(tax_rate)/100));
        vat_input=total-net_vat;

        $('#tbl_items > tbody').prepend(newRowItem({
            po_qty : "1",
            product_code : suggestion.product_code,
            unit_id : suggestion.unit_id,
            product_id: suggestion.product_id,
            product_desc : suggestion.product_desc,
            po_line_total_discount : "0.00",
            tax_exempt : false,
            po_tax_rate : tax_rate,
            po_price : suggestion.purchase_cost,
            po_discount : "0.00",
            tax_type_id : null,
            po_line_total : total,
            non_tax_amount: net_vat,
            tax_amount:vat_input,
            delivered_qty:"0.00",
            balance:"1"
        }));

        reInitializeNumeric();
        reComputeTotal();

    });

    $('div.tt-menu').on('click','table.tt-suggestion',function(){
        _objTypeHead.typeahead('val','');
    });


    var bindEventHandlers=(function(){
        var detailRows = [];

        $('#tbl_purchase_order tbody').on( 'click', 'tr td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = dt.row( tr );
            var idx = $.inArray( tr.attr('id'), detailRows );

            if ( row.child.isShown() ) {
                tr.removeClass( 'details' );
                row.child.hide();

                // Remove from the 'open'"bStateSave": true array
                detailRows.splice( idx, 1 );
            }
            else {
                tr.addClass( 'details' );
                //console.log(row.data());
                var d=row.data();

                $.ajax({
                    "dataType":"html",
                    "type":"POST",
                    "url":"Templates/layout/purchase_order/"+ d.purchase_order_id,
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
        } );




        $('#tbl_po_list tbody').on( 'click', 'tr td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = dt_po.row( tr );
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
                _selectRowObj=$(this).closest('tr');
                var d=dt_po.row(_selectRowObj).data();

                $.ajax({
                    "dataType":"html",
                    "type":"POST",
                    "url":"Templates/layout/po/"+ d.purchase_order_id+'/contentview',
                    "beforeSend" : function(){
                        row.child( '<center><br /><img src="assets/img/loader/ajax-loader-lg.gif" /><br /><br /></center>' ).show();
                    }
                }).done(function(response){
                    row.child( response ).show();
                    // Add to the 'open' array
                    if ( idx === -1 ) {
                        detailRows.push( tr.attr('id') );
                    }
                });



            }
        } );

        $('.date-picker').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true

        });

        _cboSuppliers=$("#cbo_suppliers").select2({
            placeholder: "Please select supplier.",
            allowClear: true
        });

        _cboSuppliers.select2('val',null);

        _cboSuppliers.on("select2:select", function (e) {

        var i=$(this).select2('val');
				if(i=="newsupp"){
                _cboSuppliers.select2('val',null)
                $('#modal_new_supplier').modal('show');
                clearFields($('#modal_new_supplier').find('form'));
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
                    $('#cbo_suppliers').append('<option value="'+_suppliers.supplier_id+'" selected>'+_suppliers.supplier_name+'</option>');
                    $('#cbo_suppliers').select2('val',_suppliers.supplier_id);

                }).always(function(){
                    showSpinningProgress(btn);
                });
            }

        });


        _cboVat=$("#cbo_vatted").select2({
                placeholder: "Please Select.",
                allowClear: true
            });
        _cboVat.select2('val',null);
        $('#tbl_purchase_order tbody').on('click','button[name="edit_info"]',function(){
            ///alert("ddd");
            _txnMode="edit";
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.purchase_order_id;

            $('input,textarea').each(function(){
                var _elem=$(this);
                $.each(data,function(name,value){
                    if(_elem.attr('name')==name&&_elem.attr('type')!='password'){
                        _elem.val(value);
                    }

                });

                $('#cbo_suppliers').select2('val',data.supplier_id);
            });

            resetSummary();




            $.ajax({
                url : 'Purchase_Order/transaction/items/'+data.purchase_order_id,
                type : "GET",
                cache : false,
                dataType : 'json',
                processData : false,
                contentType : false,
                beforeSend : function(){
                   showSpinningProgressLoading();
                },
                success : function(response){
                    $.unblockUI();
                    var rows=response.data;
                    $('#tbl_items > tbody').html('');

                    //var total_discount=0;
                    //var total_tax_amount=0;
                    //var total_non_tax_amount=0;
                    //var gross_amount=0;

                    $.each(rows,function(i,value){
                        //alert(value.non_tax_amount);
                        $bal = (value.po_qty - value.delivered_qty);
                        $('#tbl_items > tbody').prepend(newRowItem({
                            po_qty : value.po_qty,
                            product_code : value.product_code,
                            product_id: value.product_id,
                            product_desc : value.product_desc,
                            po_line_total_discount : value.po_line_total_discount,
                            tax_exempt : false,
                            po_tax_rate : value.po_tax_rate,
                            po_price : value.po_price,
                            po_discount : value.po_discount,
                            tax_type_id : null,
                            po_line_total : value.po_line_total,
                            non_tax_amount: value.non_tax_amount,
                            tax_amount:value.tax_amount,
                            delivered_qty: value.delivered_qty,
                            balance: $bal
                        }));


                        //sum up all footer details
                        //total_discount+=getFloat(value.dr_line_total_discount);
                        //total_tax_amount+=getFloat(value.tax_amount);
                        //total_non_tax_amount+=getFloat(value.non_tax_amount);
                        //gross_amount+=getFloat(value.dr_line_total_price);


                    });


                    //write summary details
                    //var tbl_summary=$('#tbl_delivery_summary');
                    //tbl_summary.find(oTableDetails.discount).html(accounting.formatNumber(total_discount,2));
                    //tbl_summary.find(oTableDetails.before_tax).html(accounting.formatNumber(total_non_tax_amount,2));
                    //tbl_summary.find(oTableDetails.tax_amount).html(accounting.formatNumber(total_tax_amount,2));
                    //tbl_summary.find(oTableDetails.after_tax).html('<b>'+accounting.formatNumber(gross_amount,2)+'</b>');
                    reComputeTotal();

                }
            });




            showList(false);

        });

        $('#tbl_purchase_order tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.purchase_order_id;
            delete_notif();
            $('#modal_confirmation').modal('show');
        });


        $('#tbl_items tbody').on('keyup','input.numeric',function(){
            var row=$(this).closest('tr');

            var price=parseFloat(accounting.unformat(row.find(oTableItems.unit_price).find('input.numeric').val()));
            var discount=parseFloat(accounting.unformat(row.find(oTableItems.discount).find('input.numeric').val()));
            var qty=parseFloat(accounting.unformat(row.find(oTableItems.qty).find('input.numeric').val()));
            var tax_rate=parseFloat(accounting.unformat(row.find(oTableItems.tax).find('input.numeric').val()))/100;
            var delivered_qty=parseFloat(accounting.unformat(row.find(oTableItems.delivered_qty).find('input.numeric').val()));
            if(discount>price){
                showNotification({title:"Invalid",stat:"error",msg:"Discount must not greater than unit price."});
                row.find(oTableItems.discount).find('input.numeric').val('');
            }

            var discounted_price=price-discount;
            var line_total_discount=discount*qty;
            var line_total=discounted_price*qty;
            var net_vat=line_total/(1+tax_rate);
            var vat_input=line_total-net_vat;

            $(oTableItems.total,row).find('input.numeric').val(accounting.formatNumber(line_total,2)); // line total amount
            $(oTableItems.total_line_discount,row).find('input.numeric').val(line_total_discount); //line total discount
            $(oTableItems.net_vat,row).find('input.numeric').val(net_vat); //net of vat
            $(oTableItems.vat_input,row).find('input.numeric').val(vat_input); //vat input
            $(oTableItems.balance,row).find('input.numeric').val(qty-delivered_qty);
            //console.log(net_vat);
            reComputeTotal();


        });

        $('#btn_cancel').click(function(){
            showList(true);
        });

        $('#btn_save').click(function(){

            if(validateRequiredFields($('#frm_deliveries'))){
                if(_txnMode=="new"){
                  if($("#tbl_items > tbody >tr").length==0){
                    oopsnotice();
                    return false;
                  }
                    createDeliverInvoice().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_deliveries'));
                        showList(true);
                    }).always(function(){
                        showSpinningProgress($('#btn_save'));
                    });
                }else{
                    if($("#tbl_items > tbody >tr").length==0){
                      oopsnotice();
                      return false;
                    }
                    updatePurchaseOrder().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                        clearFields($('#frm_deliveries'));
                        showList(true);
                    }).always(function(){
                        showSpinningProgress($('#btn_save'));
                    });
                }

            }

        });



        $('#tbl_items > tbody').on('click','button[name="remove_item"]',function(){
            $(this).closest('tr').remove();
            reComputeTotal();
        });


    })();





    var createDeliverInvoice=function(){
        var _data=$('#frm_deliveries,#frm_items').serializeArray();

        var tbl_summary=$('#tbl_delivery_summary');
        _data.push({name : "summary_discount", value : tbl_summary.find(oTableDetails.discount).text()});
        _data.push({name : "summary_before_discount", value :tbl_summary.find(oTableDetails.before_tax).text()});
        _data.push({name : "summary_tax_amount", value : tbl_summary.find(oTableDetails.tax_amount).text()});
        _data.push({name : "summary_after_tax", value : tbl_summary.find(oTableDetails.after_tax).text()});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Purchase_Order/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var updatePurchaseOrder=function(){
        var _data=$('#frm_deliveries,#frm_items').serializeArray();

        var tbl_summary=$('#tbl_delivery_summary');
        _data.push({name : "summary_discount", value : tbl_summary.find(oTableDetails.discount).text()});
        _data.push({name : "summary_before_discount", value :tbl_summary.find(oTableDetails.before_tax).text()});
        _data.push({name : "summary_tax_amount", value : tbl_summary.find(oTableDetails.tax_amount).text()});
        _data.push({name : "summary_after_tax", value : tbl_summary.find(oTableDetails.after_tax).text()});
        _data.push({name : "purchase_order_id" ,value : _selectedID});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Purchase_Order/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var removePurchaseInvoice=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Purchase_Order/transaction/delete",
            "data":{purchase_order_id : _selectedID},
            "beforeSend": showSpinningProgress($('#'))
        });
    };

    var showList=function(b){
        if(b){
            $('#div_user_list').show();
            $('#div_user_fields').hide();
        }else{
            $('#div_user_list').hide();
            $('#div_user_fields').show();
        }
    };

    var showNotification=function(obj){
        PNotify.removeAll(); //remove all notifications
        new PNotify({
            title:  obj.title,
            text:  obj.msg,
            type:  obj.stat
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
        '<td width="10%"><input name="po_qty[]" type="text" class="numeric form-control" value="'+ d.po_qty+'"></td>'+

        '<td width="25%">'+d.product_desc+'</td>'+
        '<td width="10%"><input name="po_price[]" type="text" class="numeric form-control" value="'+accounting.formatNumber(d.po_price,2)+'" style="text-align:right;"></td>'+
        '<td width="10%"><input name="po_discount[]" type="text" class="numeric form-control" value="'+ accounting.formatNumber(d.po_discount,2)+'" style="text-align:right;"></td>'+
        '<td style="display: none;" width="11%"><input name="po_line_total_discount[]" type="text" class="numeric form-control" value="'+ accounting.formatNumber(d.po_line_total_discount,2)+'" readonly></td>'+
        '<td width="8%"><input name="po_tax_rate[]" type="text" class="numeric form-control" value="'+ accounting.formatNumber(d.po_tax_rate,2)+'"></td>'+
        '<td width="12%" align="right"><input name="po_line_total[]" type="text" class="numeric form-control" value="'+ accounting.formatNumber(d.po_line_total,2)+'" readonly></td>'+
        '<td style="display: none;"><input name="tax_amount[]" type="text" class="numeric form-control" value="'+ d.tax_amount+'" readonly></td>'+
        '<td style="display: none;"><input name="non_tax_amount[]" type="text" class="numeric form-control" value="'+ d.non_tax_amount+'" readonly></td>'+
        '<td style="display: none;"><input name="product_id[]" type="text" class="numeric form-control" value="'+ d.product_id+'" readonly></td>'+
        '<td width="12%"><input name="delivered_qty[]" type="text" class="numeric form-control" value="'+ accounting.formatNumber(d.delivered_qty,2)+'" style="text-align:right;" readonly></td>'+
        '<td width="13%"><input name="balance[]" type="text" class="numeric form-control" value="'+ accounting.formatNumber(d.balance,2)+'" style="text-align:right;" readonly></td>'+
        '<td align="center"><button type="button" name="remove_item" class="btn btn-default"><i class="fa fa-trash"></i></button></td>'+
        '</tr>';
    };



    var reComputeTotal=function(){
        var rows=$('#tbl_items > tbody tr');
        var tbl_summary=$('#tbl_delivery_summary');

        var discounts=0; var before_tax=0; var after_tax=0; var tax_amount=0;

        $.each(rows,function(){
            discounts+=parseFloat(accounting.unformat($(oTableItems.total_line_discount,$(this)).find('input.numeric').val()));
            before_tax+=parseFloat(accounting.unformat($(oTableItems.net_vat,$(this)).find('input.numeric').val()));
            tax_amount+=parseFloat(accounting.unformat($(oTableItems.vat_input,$(this)).find('input.numeric').val()));
            after_tax+=parseFloat(accounting.unformat($(oTableItems.total,$(this)).find('input.numeric').val()));
        });

        tbl_summary.find(oTableDetails.discount).html(accounting.formatNumber(discounts,2));
        tbl_summary.find(oTableDetails.before_tax).html(accounting.formatNumber(before_tax,2));
        tbl_summary.find(oTableDetails.tax_amount).html(accounting.formatNumber(tax_amount,2));
        tbl_summary.find(oTableDetails.after_tax).html('<b>'+accounting.formatNumber(after_tax,2)+'</b>');

    };



    var reInitializeNumeric=function(){
        $('.numeric').autoNumeric('init');
    };



    var resetSummary=function(){
        var tbl_summary=$('#tbl_delivery_summary');
        tbl_summary.find(oTableDetails.discount).html('0.00');
        tbl_summary.find(oTableDetails.before_tax).html('0.00');
        tbl_summary.find(oTableDetails.tax_amount).html('0.00');
        tbl_summary.find(oTableDetails.after_tax).html('<b>0.00</b>');
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
                            removePurchaseInvoice().done(function(response){
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
        title: "Ooops!",
        text: "Cart is empty.",
        imageUrl: "assets/img/warning.png"
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

    var showList=function(b){
        if(b){
            $('#invoice_list').show();
            $('#invoice_fields').hide();
            $('.btn_new').show();

        }else{
            $('#invoice_list').hide();
            $('#invoice_fields').show();
            $('.btn_new').hide();
        }
    };

    var showSpinningProgressLoading=function(e){
        $.blockUI({ message: '<img src="assets/img/gears.svg"/><br><h4 style="color:#ecf0f1;">Loading Data...</h4>',
            css: {
            border: 'none',
            padding: '15px',
            backgroundColor: 'none',
            opacity: 1,
            zIndex: 20000,
        } });
        $('.blockOverlay').attr('title','Click to unblock').click($.unblockUI);
    };

    var validateRequiredFields=function(f){
        var stat=true;

        $('div.form-group').removeClass('has-error');
        $('input[required],textarea[required],select[required]',f).each(function(){

            if($(this).is('select')){
                if($(this).select2('val')==0||$(this).select2('val')==null){
                    showNotification({title:"Error!",stat:"error",msg:$(this).data('error-msg')});
                    $(this).closest('div.form-group').addClass('has-error');
                    $(this).focus();
                    stat=false;
                    return false;
                }
            }
            else{
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
</script>
</body>
</html>
