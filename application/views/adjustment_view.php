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
        Adjustment
        <small>Adjustment</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="Homepage"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Adjustment</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header btn_new" style="">
              <button class="btn btn-primary" id="btn_new"><i class="fa fa-barcode" aria-hidden="true"></i> Record Adjustment</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive" id="invoice_list">
              <table id="tbl_adjustment" class="table">
                <thead class="tbl-header">
                  <tr>
                    <th ></th>
                    <th >Adjustment #</th>
                    <th >Date Adjusted</th>
                    <th style="text-align:center;">Action</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
                <tfoot>
                  <tr>
                    <th ></th>
                    <th >Adjustment #</th>
                    <th >Date Adjusted</th>
                    <th style="text-align:center;">Action</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <div id="invoice_fields" style="display: none;">
              <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style="margin:10px;">Record Adjustment</h4>
                </div>
                <div class="panel-body">
                  <div class="row custom_frame container-fluid">
                      <form id="frm_adjustment" role="form" class="form-horizontal">
                    <br>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="col-md-3  control-label boldlabel">* Adj # :</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                                                <span class="input-group-addon ">
                                                                    <i class="fa fa-code"></i>
                                                                </span>
                                    <input type="text" name="adjustment_no" class="form-control" placeholder="AUTO" data-error-msg="Doc # is required." readonly>
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
                                    <input type="text" name="date_adjusted" class="date-picker form-control " value="<?php echo date("m/d/Y"); ?>" placeholder="Due Date" data-error-msg="Due Date is required!" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
                                      <th width="12%" style="text-align: right">Item Code</th>
                                      <th width="30%">Item</th>
                                      <th width="12%" style="text-align: right">Adjustment Type</th>
                                      <th width="12%" style="text-align: right">Status</th>
                                      <th width="10%"><center>Action</center></th>
                                  </tr>
                                  </thead>
                                  <tbody>

                                  </tbody>
                              </table>
                              </div>
                          </form>
                          <!-- <div class="row">
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
                          </div> -->
                      </div>
                  </div>
              </div>
              <div class="panel-footer">
                  <div class="row">
                      <div class="col-sm-12">
                          <button id="btn_save" class="btn-primary btn" style="text-transform: capitalize;"><span class=""></span>  Save Changes</button>
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
          <div class="modal-content"><!---content--->
              <div class="modal-header">
                  <button type="button" class="close"   data-dismiss="modal" aria-hidden="true">X</button>
                  <h4 class="modal-title"><span id="modal_mode"> </span>New Supplier</h4>
              </div>
              <div class="modal-body">
                  <form id="frm_supplier_new">
                      <div class="form-group">
                          <label>* Supplier :</label>
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-users"></i>
                              </span>
                              <input type="text" name="supplier_name" class="form-control" placeholder="Supplier" data-error-msg="Supplier name is required." required>
                          </div>
                      </div>
                      <div class="form-group">
                          <label>* Email :</label>
                          <div class="input-group">
                              <span class="input-group-addon">
                                  <i class="fa fa-envelope-o"></i>
                              </span>
                              <input type="text" name="email_address" class="form-control" placeholder="Email" data-error-msg="Email address is required." required>
                          </div>
                      </div>
                  </form>
              </div>
              <div class="modal-footer">
                  <button id="btn_create_user_suppliers" type="button" class="btn btn-primary"  style="text-transform: capitalize;"><span class=""></span> Create</button>
                  <button id="btn_close_user_suppliers" type="button" class="btn btn-default" data-dismiss="modal" style="text-transform: capitalize;">Cancel</button>
              </div>
          </div><!---content---->
      </div>
  </div><!---modal-->
  <div id="modal_new_status" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-md">
          <div class="modal-content">
              <div class="modal-header bgm-indigo">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true" class="xbutton">×</span></button>
                  <h4 class="modal-title">Status : <transaction class="transaction"></transaction></h4>
              </div>
              <div class="modal-body">
                  <form id="frm_status">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="form-group">
                              <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Status Code  :</label>
                              <div class="col-sm-8">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-tags fa-size" aria-hidden="true"></i></span>
                                          <input type="text" name="status_code" class="form-control" placeholder="AUTO" data-error-msg="Status Code is required." readonly>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="row" style="margin-top:5px;">
                          <div class="form-group">
                              <label class="col-sm-4" style="margin-top:8px;" for="inputEmail1">Status Name  :</label>
                              <div class="col-sm-8">
                                  <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-tags fa-size" aria-hidden="true"></i></span>
                                          <input type="text" name="status_name" class="form-control" placeholder="Card Name" data-error-msg="Card Name is required." required>
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
                  <button id="btn_create_status" style="margin-top:5px;" type="button" class="btn btn-primary">Save
                  </button>
                  <button type="button" style="margin-top:5px;" class="btn bgm-red" data-dismiss="modal">Close
                  </button>
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
      var status_class;
      var oTableItems={
            qty : 'td:eq(0)',
            unit_price : 'td:eq(2)',
            discount : 'td:eq(3)',
            total_line_discount : 'td:eq(4)',
            tax : 'td:eq(5)',
            total : 'td:eq(6)',
            vat_input : 'td:eq(7)',
            net_vat : 'td:eq(8)'


        };


        var oTableDetails={
            discount : 'tr:eq(0) > td:eq(1)',
            before_tax : 'tr:eq(1) > td:eq(1)',
            tax_amount : 'tr:eq(2) > td:eq(1)',
            after_tax : 'tr:eq(3) > td:eq(1)'
        };

        var initializeControls=function(){
        dt=$('#tbl_adjustment').DataTable({
            "aLengthMenu": [[20, 25, 50, -1], [20, 25, 50, "All"]],
            "ajax" : "Adjustment/transaction/list",
            "bStateSave": true,
            "columns": [
              {
                  "targets": [0],
                  "class":          "details-control",
                  "orderable":      false,
                  "data":           null,
                  "defaultContent": ""
              },
              { targets:[1],data: "adjustment_no" },


              { targets:[2],data: "date_adjusted" },
              {
                  targets:[3],
                  render: function (data, type, full, meta){
                      var btn_edit='<button class="btn btn-blue btn-xs" name="edit_info"  style="margin-left:-15px;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> </button>';
                      var btn_trash='<button class="btn btn-danger btn-xs" name="remove_info" style="margin-left:5px;" data-toggle="tooltip" data-placement="top" title="Move to trash"><i class="fa fa-trash-o"></i> </button>';

                      return '<center>'+btn_edit+btn_trash+'</center>';
                  }
              }

            ],
            language: {
                         searchPlaceholder: "Search Adjustment"
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
                adj_qty : "1",
                product_code : suggestion.product_code,
                product_id: suggestion.product_id,
                product_desc : suggestion.product_desc,
                adj_type : "0",
                status : "0",
                a : 0
            }));

        reInitializeNumeric();

    });

    $('div.tt-menu').on('click','table.tt-suggestion',function(){
        _objTypeHead.typeahead('val','');
    });


    var bindEventHandlers=(function(){
          var detailRows = [];

          $('#tbl_adjustment tbody').on( 'click', 'tr td.details-control', function () {
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
                    "url":"Templates/layout/adjustment/"+ d.adjustment_id,
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

        // $('#btn_create_user_suppliers').click(function(){
        //
        //     var btn=$(this);
        //
        //     if(validateRequiredFields($('#frm_supplier_new'))){
        //         var data=$('#frm_supplier_new').serializeArray();
        //
        //         $.ajax({
        //             "dataType":"json",
        //             "type":"POST",
        //             "url":"Suppliers/transaction/create",
        //             "data":data,
        //             "beforeSend" : function(){
        //                 showSpinningProgress(btn);
        //             }
        //         }).done(function(response){
        //             showNotification(response);
        //             $('#modal_new_supplier').modal('hide');
        //
        //             var _suppliers=response.row_added[0];
        //             $('#cbo_suppliers').append('<option value="'+_suppliers.supplier_id+'" selected>'+_suppliers.supplier_name+'</option>');
        //             $('#cbo_suppliers').select2('val',_suppliers.supplier_id);
        //         }).always(function(){
        //             showSpinningProgress(btn);
        //         });
        //     }
        //
        // });


        $('#btn_create_status').click(function(){

            var btn=$(this);

            if(validateRequiredFields($('#frm_status'))){
                var data=$('#frm_status').serializeArray();

                $.ajax({
                    "dataType":"json",
                    "type":"POST",
                    "url":"Status/transaction/create",
                    "data":data,
                    "beforeSend" : function(){
                        showSpinningProgress(btn);
                    }
                }).done(function(response){
                    showNotification(response);
                    $('#modal_new_status').modal('hide');
                    var _status=response.row_added[0];
                    $(status_class).append('<option value="'+_status.status_id+'" selected>'+_status.status_name+'</option>');
                    $(status_class).select2('val',_status.status_id);
                }).always(function(){
                    showSpinningProgress(btn);
                });
            }

        });


        $('#tbl_adjustment tbody').on('click','button[name="edit_info"]',function(){
              ///alert("ddd");
              _txnMode="edit";
              _selectRowObj=$(this).closest('tr');
              var data=dt.row(_selectRowObj).data();
              _selectedID=data.adjustment_id;
              $('input,textarea').each(function(){
                  var _elem=$(this);
                  $.each(data,function(name,value){
                      if(_elem.attr('name')==name&&_elem.attr('type')!='password'){
                          _elem.val(value);
                      }

                  });

              });


              $.ajax({
                  url : 'Adjustment/transaction/items/'+data.adjustment_id,
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
                      var a=1;
                      $.each(rows,function(i,value){
                          //alert(value.non_tax_amount);
                          $('#tbl_items > tbody').prepend(newRowItem({
                              adj_qty : value.adj_qty,
                              product_code : value.product_code,
                              product_id: value.product_id,
                              product_desc : value.product_desc,
                              adj_type : value.adjustment_type,
                              status : value.status,
                              adjustment_type : value.adjustment_type,
                              a : a,
                              // $(".cbo_status").select2('val', value.status);
                              // $("#cbo_adj_type").select2('val', value.adjustment_type);
                          }));

                          _cboAdjtypetemp=$('.cbo_adj_type'+a).select2({
                                  placeholder: "Select Type.",
                                  allowClear: true
                              });
                          _cboAdjtypetemp.select2('val', value.adjustment_type);
                          _cboStatus=$('.cbo_status'+a).select2({
                                  placeholder: "Select Status.",
                                  allowClear: true
                              });
                          _cboStatus.select2('val', value.status);

                          a++;
                          // $(".cbo_adj_type"+a).select2('val', value.adjustment_type);
                          //sum up all footer details
                          //total_discount+=getFloat(value.adj_line_total_discount);
                          //total_tax_amount+=getFloat(value.tax_amount);
                          //total_non_tax_amount+=getFloat(value.non_tax_amount);
                          //gross_amount+=getFloat(value.adj_line_total_price);
                          // $(".cbo_status").select2('val', value.status);
                          // $("#cbo_adj_type").select2('val', value.adjustment_type);
                      });

                      // reInitializeNumeric();
                      //write summary details
                      //var tbl_summary=$('#tbl_delivery_summary');
                      //tbl_summary.find(oTableDetails.discount).html(accounting.formatNumber(total_discount,2));
                      //tbl_summary.find(oTableDetails.before_tax).html(accounting.formatNumber(total_non_tax_amount,2));
                      //tbl_summary.find(oTableDetails.tax_amount).html(accounting.formatNumber(total_tax_amount,2));
                      //tbl_summary.find(oTableDetails.after_tax).html('<b>'+accounting.formatNumber(gross_amount,2)+'</b>');


                  }

              });
              showList(false);
        });

        $('#tbl_items tbody').on('change','select[name="status[]"]',function(){
            if($(this).val() == "newstatus")
            {
              $(this).select2('val',null)
              $('#modal_new_status').modal('show');
              status_class = $(this);
            }
        });

        $('#tbl_adjustment tbody').on('click','button[name="remove_info"]',function(){
            _selectRowObj=$(this).closest('tr');
            var data=dt.row(_selectRowObj).data();
            _selectedID=data.adjustment_id;
            delete_notif();
        });


        $('#tbl_items tbody').on('keyup','input.numeric',function(){
            var row=$(this).closest('tr');

            var price=parseFloat(accounting.unformat(row.find(oTableItems.unit_price).find('input.numeric').val()));
            var discount=parseFloat(accounting.unformat(row.find(oTableItems.discount).find('input.numeric').val()));
            var qty=parseFloat(accounting.unformat(row.find(oTableItems.qty).find('input.numeric').val()));
            var tax_rate=parseFloat(accounting.unformat(row.find(oTableItems.tax).find('input.numeric').val()))/100;

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

            //console.log(net_vat);


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
                    createAdjustment().done(function(response){
                        showNotification(response);
                        dt.row.add(response.row_added[0]).draw();
                        clearFields($('#frm_adjustment'));
                        showList(true);
                    }).always(function(){
                        showSpinningProgress($('#btn_save'));
                        showList(true);
                    });
                }else{
                    if($("#tbl_items > tbody >tr").length==0){
                      oopsnotice();
                      return false;
                    }
                    updateAdjustment().done(function(response){
                        showNotification(response);
                        dt.row(_selectRowObj).data(response.row_updated[0]).draw();
                        clearFields($('#frm_adjustment'));
                        showList(true);
                    }).always(function(){
                        showSpinningProgress($('#btn_save'));
                        showList(true);
                    });
                }

            }

        });



        $('#tbl_items > tbody').on('click','button[name="remove_item"]',function(){
            $(this).closest('tr').remove();

        });


    })();





    var createAdjustment=function(){
        var _data=$('#frm_adjustment,#frm_items').serializeArray();

        var tbl_summary=$('#tbl_delivery_summary');
        _data.push({name : "summary_discount", value : tbl_summary.find(oTableDetails.discount).text()});
        _data.push({name : "summary_before_discount", value :tbl_summary.find(oTableDetails.before_tax).text()});
        _data.push({name : "summary_tax_amount", value : tbl_summary.find(oTableDetails.tax_amount).text()});
        _data.push({name : "summary_after_tax", value : tbl_summary.find(oTableDetails.after_tax).text()});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Adjustment/transaction/create",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var updateAdjustment=function(){
        var _data=$('#frm_adjustment,#frm_items').serializeArray();

        var tbl_summary=$('#tbl_delivery_summary');
        _data.push({name : "summary_discount", value : tbl_summary.find(oTableDetails.discount).text()});
        _data.push({name : "summary_before_discount", value :tbl_summary.find(oTableDetails.before_tax).text()});
        _data.push({name : "summary_tax_amount", value : tbl_summary.find(oTableDetails.tax_amount).text()});
        _data.push({name : "summary_after_tax", value : tbl_summary.find(oTableDetails.after_tax).text()});
        _data.push({name : "adjustment_id" ,value : _selectedID});

        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Adjustment/transaction/update",
            "data":_data,
            "beforeSend": showSpinningProgress($('#btn_save'))
        });
    };

    var removeAdjustment=function(){
        return $.ajax({
            "dataType":"json",
            "type":"POST",
            "url":"Adjustment/transaction/delete",
            "data":{adjustment_id : _selectedID}
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

    var adjtype;
    var status;
    var newRowItem=function(d){

      if(d.a == 0) {
        adjtype="cbo_adj_type";
        status="cbo_status";
      }
      else {
        adjtype="cbo_adj_type"+d.a;
        status="cbo_status"+d.a;
      }


        return '<tr>'+
        '<td width="10%"><input name="adj_qty[]" type="text" class="numeric form-control" value="'+ d.adj_qty+'"></td>'+
        '<td width="12%">'+d.product_code+'</td>'+
        '<td width="30%">'+d.product_desc+'</td>'+
        '<td width="12%"><select name="adj_type[]" data-error-msg="Adjustment Type is required." class="cbo_adj_type form-control '+adjtype+'" required><option value="IN">IN</option><option value="OUT">OUT</option></select>'+
        '<td width="12%"><select name="status[]" value="'+d.status+'" data-error-msg="Status is required." class="form-control '+status+'" required><option value="newstatus">[ Create New Status ]</option><?php foreach($status as $status){ ?><option value="<?php echo $status->status_id ?>"><?php echo $status->status_name ?></option> <?php } ?></select>'+
        '<td style="display: none;"><input name="product_id[]" type="text" class="numeric form-control" value="'+ d.product_id+'" readonly></td>'+
        '<td align="center"><button type="button" name="remove_item" class="btn btn-default"><i class="fa fa-trash"></i></button></td>'+
        '</tr>';
    };

    // var reComputeTotal=function(){
    //     var rows=$('#tbl_items > tbody tr');
    //     var tbl_summary=$('#tbl_delivery_summary');
    //
    //     var discounts=0; var before_tax=0; var after_tax=0; var tax_amount=0;
    //
    //     $.each(rows,function(){
    //         discounts+=parseFloat(accounting.unformat($(oTableItems.total_line_discount,$(this)).find('input.numeric').val()));
    //         before_tax+=parseFloat(accounting.unformat($(oTableItems.net_vat,$(this)).find('input.numeric').val()));
    //         tax_amount+=parseFloat(accounting.unformat($(oTableItems.vat_input,$(this)).find('input.numeric').val()));
    //         after_tax+=parseFloat(accounting.unformat($(oTableItems.total,$(this)).find('input.numeric').val()));
    //     });
    //
    //     tbl_summary.find(oTableDetails.discount).html(accounting.formatNumber(discounts,2));
    //     tbl_summary.find(oTableDetails.before_tax).html(accounting.formatNumber(before_tax,2));
    //     tbl_summary.find(oTableDetails.tax_amount).html(accounting.formatNumber(tax_amount,2));
    //     tbl_summary.find(oTableDetails.after_tax).html('<b>'+accounting.formatNumber(after_tax,2)+'</b>');
    //
    // };



    var reInitializeNumeric=function(){
        $('.numeric').autoNumeric('init');
        _cboAdjtype=$(".cbo_adj_type").select2({
                placeholder: "Select Type.",
                allowClear: true
            });
        _cboAdjtype.select2('val',null);
        _cboStatus=$(".cbo_status").select2({
                placeholder: "Select Status.",
                allowClear: true
            });
        _cboStatus.select2('val',null);

    };



    // var resetSummary=function(){
    //     var tbl_summary=$('#tbl_delivery_summary');
    //     tbl_summary.find(oTableDetails.discount).html('0.00');
    //     tbl_summary.find(oTableDetails.before_tax).html('0.00');
    //     tbl_summary.find(oTableDetails.tax_amount).html('0.00');
    //     tbl_summary.find(oTableDetails.after_tax).html('<b>0.00</b>');
    // };

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
        title: "Ooops!",
        text: "Cart is empty.",
        imageUrl: "assets/img/warning.png"
      });
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
</script>
</body>
</html>
