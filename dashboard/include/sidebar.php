<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <?php if (intval($user['type']) == 1) : ?>
        <!-- Admin Sidebar -->
        <ul>
          <li class="<?= $page == 'home' ? 'active' : '' ?>">
            <a href="?page=home"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
          </li>
          <li class="submenu">
            <a href="javascript:void(0);"><img src="assets/img/icons/users1.svg" alt="img"><span> Accounts</span> <span class="menu-arrow"></span></a>
            <ul>
              <li><a href="?page=users" class="<?= $page == 'users' ? 'active' : '' ?>">Users</a></li>
              <li><a href="?page=transporters" class="<?= $page == 'transporters' ? 'active' : '' ?>">Transporters</a></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Listings</span> <span class="menu-arrow"></span></a>
            <ul>
              <!-- <li><a href="?listing=new-listing" class="<?= $page == 'new-listing' ? 'active' : '' ?>">Add Listing</a></li> -->
              <li><a href="?listing=listings" class="<?= $page == 'listings' ? 'active' : '' ?>">All Listings</a></li>
              <!-- <li><a href="?listing=accepted" class="<?= $page == 'accepted' ? 'active' : '' ?>">Accepted By Transporters</a></li> -->
              <!-- <li><a href="?listing=pending" class="<?= $page == 'pending' ? 'active' : '' ?>">Pending</a></li> -->
              <li><a href="?listing=booked" class="<?= $page == 'booked' ? 'active' : '' ?>">Booked</a></li>
              <li><a href="?listing=pickedup" class="<?= $page == 'pickedup' ? 'active' : '' ?>">Picked-Up</a></li>
              <li><a href="?listing=in-transit" class="<?= $page == 'in-transit' ? 'active' : '' ?>">Out for Delivery</a></li>
              <li><a href="?listing=delivered" class="<?= $page == 'delivered' ? 'active' : '' ?>">Delivered</a></li>
              <li><a href="?listing=failed" class="<?= $page == 'failed' ? 'active' : '' ?>">Unsuccessful Delivery</a></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="javascript:void(0);"><img src="assets/img/icons/eye.svg" alt="img"><span> Track Listing</span> <span class="menu-arrow"></span></a>
            <ul>
              <li><a href="?page=track" class="<?= $page == 'track' ? 'active' : '' ?>">Track</a></li>
            </ul>
          </li>

          <li class="submenu">
            <a href="javascript:void(0);"><img src="assets/img/icons/transcation.svg" alt="img"><span> Report</span> <span class="menu-arrow"></span></a>
            <ul>
              <li><a href="?page=reports" class="<?= $page == 'reports' ? 'active' : '' ?>">Generate Report</a></li>
            </ul>
          </li>
          <!-- <li class="submenu">
          <a href="javascript:void(0);"><img src="assets/img/icons/quotation1.svg" alt="img"><span> Quotation</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="quotationList.html">Quotation List</a></li>
            <li><a href="addquotation.html">Add Quotation</a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:void(0);"><img src="assets/img/icons/transfer1.svg" alt="img"><span> Transfer</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="transferlist.html">Transfer List</a></li>
            <li><a href="addtransfer.html">Add Transfer </a></li>
            <li><a href="importtransfer.html">Import Transfer </a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:void(0);"><img src="assets/img/icons/return1.svg" alt="img"><span> Return</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="salesreturnlist.html">Sales Return List</a></li>
            <li><a href="createsalesreturn.html">Add Sales Return </a></li>
            <li><a href="purchasereturnlist.html">Purchase Return List</a></li>
            <li><a href="createpurchasereturn.html">Add Purchase Return </a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:void(0);"><img src="assets/img/icons/users1.svg" alt="img"><span> People</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="customerlist.html">Customer List</a></li>
            <li><a href="addcustomer.html">Add Customer </a></li>
            <li><a href="supplierlist.html">Supplier List</a></li>
            <li><a href="addsupplier.html">Add Supplier </a></li>
            <li><a href="userlist.html">User List</a></li>
            <li><a href="adduser.html">Add User</a></li>
            <li><a href="storelist.html">Store List</a></li>
            <li><a href="addstore.html">Add Store</a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:void(0);"><img src="assets/img/icons/places.svg" alt="img"><span> Places</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="newcountry.html">New Country</a></li>
            <li><a href="countrieslist.html">Countries list</a></li>
            <li><a href="newstate.html">New State </a></li>
            <li><a href="statelist.html">State list</a></li>
          </ul>
        </li>
        <li>
          <a href="components.html"><i data-feather="layers"></i><span> Components</span> </a>
        </li>
        <li>
          <a href="blankpage.html"><i data-feather="file"></i><span> Blank Page</span> </a>
        </li> -->


          <!-- <li class="submenu">
          <a href="javascript:void(0);"><i data-feather="alert-octagon"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="error-404.html">404 Error </a></li>
            <li><a href="error-500.html">500 Error </a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:void(0);"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="sweetalerts.html">Sweet Alerts</a></li>
            <li><a href="tooltip.html">Tooltip</a></li>
            <li><a href="popover.html">Popover</a></li>
            <li><a href="ribbon.html">Ribbon</a></li>
            <li><a href="clipboard.html">Clipboard</a></li>
            <li><a href="drag-drop.html">Drag & Drop</a></li>
            <li><a href="rangeslider.html">Range Slider</a></li>
            <li><a href="rating.html">Rating</a></li>
            <li><a href="toastr.html">Toastr</a></li>
            <li><a href="text-editor.html">Text Editor</a></li>
            <li><a href="counter.html">Counter</a></li>
            <li><a href="scrollbar.html">Scrollbar</a></li>
            <li><a href="spinner.html">Spinner</a></li>
            <li><a href="notification.html">Notification</a></li>
            <li><a href="lightbox.html">Lightbox</a></li>
            <li><a href="stickynote.html">Sticky Note</a></li>
            <li><a href="timeline.html">Timeline</a></li>
            <li><a href="form-wizard.html">Form Wizard</a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:void(0);"><i data-feather="bar-chart-2"></i> <span> Charts </span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="chart-apex.html">Apex Charts</a></li>
            <li><a href="chart-js.html">Chart Js</a></li>
            <li><a href="chart-morris.html">Morris Charts</a></li>
            <li><a href="chart-flot.html">Flot Charts</a></li>
            <li><a href="chart-peity.html">Peity Charts</a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:void(0);"><i data-feather="award"></i><span> Icons </span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
            <li><a href="icon-feather.html">Feather Icons</a></li>
            <li><a href="icon-ionic.html">Ionic Icons</a></li>
            <li><a href="icon-material.html">Material Icons</a></li>
            <li><a href="icon-pe7.html">Pe7 Icons</a></li>
            <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
            <li><a href="icon-themify.html">Themify Icons</a></li>
            <li><a href="icon-weather.html">Weather Icons</a></li>
            <li><a href="icon-typicon.html">Typicon Icons</a></li>
            <li><a href="icon-flag.html">Flag Icons</a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:void(0);"><i data-feather="columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
            <li><a href="form-input-groups.html">Input Groups </a></li>
            <li><a href="form-horizontal.html">Horizontal Form </a></li>
            <li><a href="form-vertical.html"> Vertical Form </a></li>
            <li><a href="form-mask.html">Form Mask </a></li>
            <li><a href="form-validation.html">Form Validation </a></li>
            <li><a href="form-select2.html">Form Select2 </a></li>
            <li><a href="form-fileupload.html">File Upload </a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:void(0);"><i data-feather="layout"></i> <span> Table </span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="tables-basic.html">Basic Tables </a></li>
            <li><a href="data-tables.html">Data Table </a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Application</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="chat.html">Chat</a></li>
            <li><a href="calendar.html">Calendar</a></li>
            <li><a href="email.html">Email</a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:void(0);"><img src="assets/img/icons/time.svg" alt="img"><span> Report</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="purchaseorderreport.html">Purchase order report</a></li>
            <li><a href="inventoryreport.html">Inventory Report</a></li>
            <li><a href="salesreport.html">Sales Report</a></li>
            <li><a href="invoicereport.html">Invoice Report</a></li>
            <li><a href="purchasereport.html">Purchase Report</a></li>
            <li><a href="supplierreport.html">Supplier Report</a></li>
            <li><a href="customerreport.html">Customer Report</a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:void(0);"><img src="assets/img/icons/users1.svg" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="newuser.html">New User </a></li>
            <li><a href="userlists.html">Users List</a></li>
          </ul>
        </li>
        <li class="submenu">
          <a href="javascript:void(0);"><img src="assets/img/icons/settings.svg" alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="generalsettings.html">General Settings</a></li>
            <li><a href="emailsettings.html">Email Settings</a></li>
            <li><a href="paymentsettings.html">Payment Settings</a></li>
            <li><a href="currencysettings.html">Currency Settings</a></li>
            <li><a href="grouppermissions.html">Group Permissions</a></li>
            <li><a href="taxrates.html">Tax Rates</a></li>
          </ul>
        </li> -->
        </ul>

      <?php elseif (intval($user['type']) == 3) : ?>
        <!-- User Sidebar -->
        <ul>
          <li class="<?= $page == 'home' ? 'active' : '' ?>">
            <a href="?page=home"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
          </li>
          <li class="submenu">
            <a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Listings</span> <span class="menu-arrow"></span></a>
            <ul>
              <li><a href="?listing=new-listing" class="<?= $page == 'new-listing' ? 'active' : '' ?>">Add Listing</a></li>
              <li><a href="?listing=listings" class="<?= $page == 'listings' ? 'active' : '' ?>">My Listings</a></li>
              <li><a href="?listing=pending" class="<?= $page == 'pending' ? 'active' : '' ?>">Pending</a></li>
              <!-- <li><a href="?listing=accepted" class="<?= $page == 'accepted' ? 'active' : '' ?>">Accepted By Transporter</a></li> -->
              <li><a href="?listing=booked" class="<?= $page == 'booked' ? 'active' : '' ?>">Booked</a></li>
              <li><a href="?listing=pickedup" class="<?= $page == 'pickedup' ? 'active' : '' ?>">Picked-Up</a></li>
              <li><a href="?listing=in-transit" class="<?= $page == 'in-transit' ? 'active' : '' ?>">Out for Delivery</a></li>
              <li><a href="?listing=delivered" class="<?= $page == 'delivered' ? 'active' : '' ?>">Delivered</a></li>
              <li><a href="?listing=failed" class="<?= $page == 'failed' ? 'active' : '' ?>">Unsuccessful Delivery</a></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="javascript:void(0);"><img src="assets/img/icons/eye.svg" alt="img"><span> Track Listing</span> <span class="menu-arrow"></span></a>
            <ul>
              <li><a href="?page=track" class="<?= $page == 'track' ? 'active' : '' ?>">Track</a></li>
            </ul>
          </li>
          <!-- 
        <li class="submenu">
          <a href="javascript:void(0);"><img src="assets/img/icons/transcation.svg" alt="img"><span> Report</span> <span class="menu-arrow"></span></a>
          <ul>
            <li><a href="?page=reports">Generate Report</a></li>
          </ul>
        </li> -->
        </ul>

      <?php elseif (intval($user['type']) == 2) : ?>
        <!-- Transporter Sidebar -->
        <ul>
          <li class="<?= $page == 'home' ? 'active' : '' ?>">
            <a href="?page=home"><img src="assets/img/icons/dashboard.svg" alt="img"><span> Dashboard</span> </a>
          </li>
          <li class="submenu">
            <a href="javascript:void(0);"><img src="assets/img/icons/product.svg" alt="img"><span> Listings</span> <span class="menu-arrow"></span></a>
            <ul>
              <!-- <li><a href="?listing=new-listing" class="<?= $page == 'new-listing' ? 'active' : '' ?>">Add Parcel</a></li> -->
              <li><a href="?listing=listings" class="<?= $page == 'listings' ? 'active' : '' ?>">Available Listings</a></li>
              <!-- <li><a href="?listing=pending" class="<?= $page == 'pending' ? 'active' : '' ?>">Pending</a></li> -->
              <!-- <li><a href="?listing=accepted" class="<?= $page == 'accepted' ? 'active' : '' ?>">Accepted</a></li> -->
              <li><a href="?listing=booked" class="<?= $page == 'booked' ? 'active' : '' ?>">Booked</a></li>
              <li><a href="?listing=pickedup" class="<?= $page == 'pickedup' ? 'active' : '' ?>">Picked-Up</a></li>
              <li><a href="?listing=in-transit" class="<?= $page == 'in-transit' ? 'active' : '' ?>">Out for Delivery</a></li>
              <li><a href="?listing=delivered" class="<?= $page == 'delivered' ? 'active' : '' ?>">Delivered</a></li>
              <li><a href="?listing=failed" class="<?= $page == 'failed' ? 'active' : '' ?>">Unsuccessful Delivery</a></li>
            </ul>
          </li>
          <li class="submenu">
            <a href="javascript:void(0);"><img src="assets/img/icons/eye.svg" alt="img"><span> Track Listing</span> <span class="menu-arrow"></span></a>
            <ul>
              <li><a href="?page=track" class="<?= $page == 'track' ? 'active' : '' ?>">Track</a></li>
            </ul>
          </li>

          <li class="submenu">
            <a href="javascript:void(0);"><img src="assets/img/icons/transcation.svg" alt="img"><span> Report</span> <span class="menu-arrow"></span></a>
            <ul>
              <li><a href="?page=reports" class="<?= $page == 'reports' ? 'active' : '' ?>">Generate Report</a></li>
            </ul>
          </li>
        </ul>

      <?php endif; ?>

    </div>
  </div>
</div>