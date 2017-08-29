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
        <li class="treeview">
          <a href="">
            <i class="fa fa-university"></i>
            <span>Purchasing</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!-- <li class="right_patientinfo_view"><a href="Patient_Info"><i class="fa fa-user-md"></i> Patient Information</a></li> -->
            <li class=""><a href="Purchase_Order"><i class="fa fa-money"></i> Purchase Order</a></li>
            <li class=""><a href="Deliveries"><i class="fa fa-money"></i> Receiving Stock</a></li>
            <!-- <li id="process_type"><a href="javascript:void()"><i class="fa fa-file-word-o"></i> Medical Records</a></li> -->
          </ul>
        </li>
        <li class="treeview">
          <a href="Issuance">
            <i class="fa fa-shopping-basket"></i> <span>Issuance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="Pos">
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
            <li class="right_category_view" id="side-li"><a href="Categories"><i class="fa fa-list-alt"></i> Categories</a></li>
            <li class="right_unit_view" id="side-li"><a href="Unit"><i class="fa fa-list-ul"></i> Unit</a></li>
            <li class="right_brand_view" id="side-li"><a href="Brands"><i class="fa fa-list"></i> Brands</a></li>
            <li class="right_discount_view" id="side-li"><a href="Discount"><i class="fa fa-percent"></i> Discount</a></li>
            <li class="right_card_view" id="side-li"><a href="Cards"><i class="fa fa-credit-card-alt"></i> Card</a></li>
            <li class="right_generics_view" id="side-li"><a href="Generics"><i class="fa fa-file"></i> Generic</a></li>
            <li class="right_gift_card_view" id="side-li"><a href="Giftcards"><i class="fa fa-credit-card"></i> Gift Card</a></li>
            <li class="right_vendor_view" id="side-li"><a href="Vendors"><i class="fa fa-user"></i> Vendors</a></li>
            <li class="right_locations_view" id="side-li"><a href="Location"><i class="fa fa-location-arrow"></i> Locations</a></li>
            <li class="right_status_view" id="side-li"><a href="Status"><i class="fa fa-adjust"></i> Status</a></li>
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
            <li class="" id="side-li-journal"><a href="Purchases"><i class="fa fa-file"></i> Transactions</a></li>
            <li class="" id="side-li-journal"><a href=""><i class="fa fa-file"></i>Daily Sales Reports</a></li>
            <li class="" id="side-li-journal"><a href=""><i class="fa fa-file"></i> Inventory Reports</a></li>
            <li class="" id="side-li-journal"><a href=""><i class="fa fa-file"></i> Z-Reading</a></li>
            <li class="" id="side-li-journal"><a href=""><i class="fa fa-file"></i> X1-Reading</a></li>
            <li class="" id="side-li-journal"><a href=""><i class="fa fa-file"></i> X2-Reading</a></li>
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
            <li class=""><a href="Adjustment"><i class="fa fa-wrench"></i> Stock Adjustment</a></li>
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
