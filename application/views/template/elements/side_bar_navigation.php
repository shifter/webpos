  <div id="modal_report" class="modal fade" style="z-index: 3000;" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bgm-indigo">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="xbutton">×</span></button>
            <h4 class="modal-title">Report : <transaction class="transaction"></transaction></h4>
        </div>
        <div class="modal-body main_modal">
          <form id="frm_reports_all">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="row stck">
                  <div class="form-group">
                    <label class="col-sm-4" style="margin-top:8px;" for="supplier">Date From :</label>
                      <div class="col-sm-8">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-size" aria-hidden="true"></i></span>
                                <input type="text" name="date_from" id="date_from" value="<?php echo date("m/d/Y"); ?>" class="date-picker-sb form-control" readonly>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="row stck" style="margin-top:5px;">
                  <div class="form-group">
                      <label class="col-sm-4" style="margin-top:8px;" for="supplier">Date To :</label>
                      <div class="col-sm-8">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-calendar fa-size" aria-hidden="true"></i></span>
                                  <input type="text" name="date_to" id="date_to" value="<?php echo date("m/d/Y"); ?>" class="date-picker-sb form-control" readonly>
                          </div>
                      </div>
                  </div>
                </div>
                <!-- <div class="row" style="margin-top:5px;">
                  <div class="form-group">
                      <label class="col-sm-4" style="margin-top:8px;" for="tin#">Terminal # :</label>
                      <div class="col-sm-8">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-envelope fa-size" aria-hidden="true"></i></span>
                                  <input type="text" name="tin_no" class="form-control" placeholder="TIN #">
                          </div>
                      </div>
                  </div>
                </div> -->
                <div class="row stck" style="margin-top:5px;">
                  <div class="form-group">
                      <label class="col-sm-4" style="margin-top:8px;" for="vat">Cashier :</label>
                      <div class="col-sm-8">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-user fa-size" aria-hidden="true"></i></span>
                                  <select class="form-control" name="cashier" id="cashier_report" data-error-msg="Vatted is required." required>
                                      <option value="0">ALL</option>
                                  <?php
                                  $users = $this->db->get_where('user_accounts', array('is_deleted' => FALSE));
                                  foreach($users->result() as $user)
                                  {
                                      echo '<option value="'.$user->user_id  .'">'.$user->user_fname.' '.$user->user_mname.' '.$user->user_lname.'</option>';
                                  }
                                  ?>
                                  </select>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="row" style="margin-top:5px;">
                  <div class="form-group">
                      <label class="col-sm-4" style="margin-top:8px;" for="vat">Category :</label>
                      <div class="col-sm-8">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-ellipsis-v fa-size" aria-hidden="true"></i></span>
                                  <select class="form-control" name="category" id="category_report" data-error-msg="" required>
                                      <option value="0">ALL</option>
                                  <?php
                                  $category = $this->db->get_where('categories', array('is_deleted' => FALSE));
                                  foreach($category->result() as $categ)
                                  {
                                      echo '<option value="'.$categ->category_id  .'">'.$categ->category_name.'</option>';
                                  }
                                  ?>
                                  </select>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="row" style="margin-top:5px;">
                  <div class="form-group">
                      <label class="col-sm-4" style="margin-top:8px;" for="vat">Unit :</label>
                      <div class="col-sm-8">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list fa-size" aria-hidden="true"></i></span>
                                  <select class="form-control" name="unit" id="unit_report" data-error-msg="" required>
                                      <option value="0">ALL</option>
                                  <?php
                                  $unit = $this->db->get_where('units', array('is_deleted' => FALSE));
                                  foreach($unit->result() as $units)
                                  {
                                      echo '<option value="'.$units->unit_id  .'">'.$units->unit_name.'</option>';
                                  }
                                  ?>
                                  </select>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="row" style="margin-top:5px;">
                  <div class="form-group">
                      <label class="col-sm-4" style="margin-top:8px;" for="vat">Supplier :</label>
                      <div class="col-sm-8">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-users fa-size" aria-hidden="true"></i></span>
                                  <select class="form-control" name="supplier" id="supplier_report" data-error-msg="" required>
                                      <option value="0">ALL</option>
                                  <?php
                                  $supplier = $this->db->get_where('suppliers', array('is_deleted' => FALSE));
                                  foreach($supplier->result() as $supp)
                                  {
                                      echo '<option value="'.$supp->supplier_id  .'">'.$supp->supplier_name.'</option>';
                                  }
                                  ?>
                                  </select>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="row sort" style="margin-top:5px;">
                  <div class="form-group">
                      <label class="col-sm-4" style="margin-top:8px;" for="vat">Sort by :</label>
                      <div class="col-sm-8">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-sort fa-size" aria-hidden="true"></i></span>
                                  <select class="form-control" name="sort" id="sort_report" data-error-msg="" required>
                                      <option value="qty">Quantity</option>
                                      <option value="amount">Amount</option>
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
        <div class="modal-body sub_modal">
            <div class="container-fluid">
                <div id="div_product_list">
                    <div class="row journal-panel">
                        <div class="col-md-6">
                            <label>Filter Date:</label>
                            <input type="text" value="<?php echo date("m/d/Y"); ?>" name="date_created" id="xreading_date" class="date-picker-sb form-control">
                        </div>
                    </div>
                    <div class="table-responsive ">
                        <div class="scroll-div-journal">
                            <table id="tbl_xreading" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead class="thead-modal">
                                  <tr>
                                      <center>
                                          <th class="th-modal-first"></th>
                                          <th class="th-modal" hidden>ID</th>
                                          <th class="th-modal">Cashier</th>
                                          <th class="th-modal">Amount</th>
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
      <div class="modal-footer" >
          <button id="btn_report" style="margin-top:5px;" type="button" class="btn btn-primary">Preview
          </button>
          <button type="button" style="margin-top:5px;" class="btn bgm-red" data-dismiss="modal">Close
          </button>
      </div>
    </div>
  </div>
</div>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo $this->session->user_photo; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p> <?php echo $this->session->user_fullname; ?> </p>
          <a ><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="Homepage">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview" id="rmv_purchasing">
          <a href="">
            <i class="fa fa-university"></i>
            <span>Purchasing</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li class="right_patientinfo_view"><a href="Patient_Info"><i class="fa fa-user-md"></i> Patient Information</a></li> -->
            <li class="" id="rmv_purchase_order"><a href="Purchase_Order"><i class="fa fa-money"></i> Purchase Order</a></li>
            <li class="" id="rmv_receiving"><a href="Deliveries"><i class="fa fa-money"></i> Receiving Stock</a></li>
            <!-- <li id="process_type"><a href="javascript:void()"><i class="fa fa-file-word-o"></i> Medical Records</a></li> -->
          </ul>
        </li>
        <li class="treeview" id="rmv_issuance">
          <a href="Issuance">
            <i class="fa fa-shopping-basket"></i> <span>Issuance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="Pos" id="btn_pos">
            <i class="fa fa-shopping-cart"></i> <span>Point of Sale</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#/">
            <i class="fa fa-file"></i>
            <span>References</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="right_category_view" id="rmv_categories"><a href="Categories"><i class="fa fa-list-alt"></i> Categories</a></li>
            <li class="right_unit_view" id="rmv_unit"><a href="Unit"><i class="fa fa-list-ul"></i> Unit</a></li>
            <li class="right_brand_view" id="rmv_brands"><a href="Brands"><i class="fa fa-list"></i> Brands</a></li>
            <li class="right_discount_view" id="rmv_discount"><a href="Discount"><i class="fa fa-percent"></i> Discount</a></li>
            <li class="right_card_view" id="rmv_card"><a href="Cards"><i class="fa fa-credit-card-alt"></i> Card</a></li>
            <li class="right_generics_view" id="rmv_generic"><a href="Generics"><i class="fa fa-file"></i> Generic</a></li>
            <li class="right_gift_card_view" id="rmv_giftcard"><a href="Giftcards"><i class="fa fa-credit-card"></i> Gift Card</a></li>
            <li class="right_vendor_view" id="rmv_vendors"><a href="Vendors"><i class="fa fa-user"></i> Vendors</a></li>
            <li class="right_locations_view" id="rmv_locations"><a href="Location"><i class="fa fa-location-arrow"></i> Locations</a></li>
            <li class="right_status_view" id="rmv_status"><a href="Status"><i class="fa fa-adjust"></i> Status</a></li>
            <li class="right_charges_view" id="rmv_charges"><a href="Charges"><i class="fa fa-group"></i> Charges</a></li>
            <li class="right_banks_view" id="rmv_banks"><a href="Banks"><i class="fa fa-bank"></i> Banks</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#/">
            <i class="fa fa-book"></i>
            <span>Journal</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="" onclick="toggle_modal('Best Seller')" id="side-li-journal"><a><i class="fa fa-file"></i> Best Seller</a></li>
            <li class="" onclick="toggle_modal('Item Sales Report')" id="side-li-journal"><a><i class="fa fa-file"></i> Item Sales Report</a></li>
            <li class="" onclick="toggle_modal('Stock Onhand Report')" id="side-li-journal"><a><i class="fa fa-file"></i> Stock Onhand Reports</a></li>
            <li class="" onclick="toggle_modal('Net Profit Report')" id="side-li-journal"><a><i class="fa fa-file"></i> Net Profit Report</a></li>
            <li class="" onclick="toggle_modal('Xreading')" id="side-li-journal"><a><i class="fa fa-file"></i> X-Reading</a></li>
            <li class="" id="side-li-journal"><a href="Purchases"><i class="fa fa-file"></i> Transactions</a></li>
            <li class="" id="side-li-journal"><a href=""><i class="fa fa-file"></i>Daily Sales Reports</a></li>
            <li class="" id="side-li-journal"><a href=""><i class="fa fa-file"></i> Inventory Reports</a></li>
            <li class="" id="side-li-journal"><a href=""><i class="fa fa-file"></i> Z-Reading</a></li>
            <!-- <li class="" id="side-li-journal"><a href=""><i class="fa fa-file"></i> X1-Reading</a></li>
            <li class="" id="side-li-journal"><a href=""><i class="fa fa-file"></i> X2-Reading</a></li> -->
          </ul>
        </li>
        <li class="treeview">
          <a href="#/">
            <i class="fa fa-folder"></i>
            <span>Masterfiles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="Products"><i class="fa fa-product-hunt"></i> Products</a></li>
            <li class="right_supplier_view"><a href="Suppliers"><i class="fa fa-user"></i> Suppliers</a></li>
            <li class=""><a href="Customers"><i class="fa fa-user"></i> Customers</a></li>
            <li class="" id ="rmv_adjustment"><a href="Adjustment"><i class="fa fa-wrench"></i> Stock Adjustment</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#/">
            <i class="fa fa-cog"></i>
            <span>Admin</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class=""><a href="Users"><i class="fa fa-user"></i> User Accounts</a></li>
            <li class=""><a href="UserGroups"><i class="fa fa-users"></i> User Groups</a></li>
            <li class=""><a href="CompanyInfo"><i class="fa fa-info"></i> Company Setup</a></li>
            <li class=""><a href="Notes"><i class="fa fa-sticky-note"></i> Notes Setup</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <script type="text/javascript">
  
  </script>
