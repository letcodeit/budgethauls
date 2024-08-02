<?php
require '../App/init.php';
?>
<div class="page-wrapper">
  <div class="content">
    <h3 class="text-center mb-4">Welcome, <strong><?= $user['first_name'] ?></strong>. Happy Shipping!</h3>
    <?php if (intval($user['type']) == 1) :  ?>
      <!-- Admin Dashboard -->
      <div class="row">
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="dash-widget">
            <div class="dash-widgetimg">
              <span><img src="assets/img/icons/dash1.svg" alt="img"></span>
            </div>
            <div class="dash-widgetcontent">
              <h5>$<span class="counters" data-count="144.00">$144.00</span></h5>
              <h6>Total Budget</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="dash-widget dash1">
            <div class="dash-widgetimg">
              <span><img src="assets/img/icons/dash2.svg" alt="img"></span>
            </div>
            <div class="dash-widgetcontent">
              <h5>$<span class="counters" data-count="85.00">$85.00</span></h5>
              <h6>Total Spent</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="dash-widget dash2">
            <div class="dash-widgetimg">
              <span><img src="assets/img/icons/dash3.svg" alt="img"></span>
            </div>
            <div class="dash-widgetcontent">
              <h5>$<span class="counters" data-count="56.50">56.50</span></h5>
              <h6>Expenses</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12">
          <div class="dash-widget dash3">
            <div class="dash-widgetimg">
              <span><img src="assets/img/icons/dash4.svg" alt="img"></span>
            </div>
            <div class="dash-widgetcontent">
              <h5>$<span class="counters" data-count="40.00">40.00</span></h5>
              <h6>Sales</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
          <div class="dash-count">
            <div class="dash-counts">
              <h4>50</h4>
              <h5>Users</h5>
            </div>
            <div class="dash-imgs">
              <i data-feather="user"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
          <div class="dash-count das1">
            <div class="dash-counts">
              <h4>15</h4>
              <h5>Transporters</h5>
            </div>
            <div class="dash-imgs">
              <i data-feather="user-check"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
          <div class="dash-count das2">
            <div class="dash-counts">
              <h4>8</h4>
              <h5>Staff</h5>
            </div>
            <div class="dash-imgs">
              <i data-feather="file-text"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 col-12 d-flex">
          <div class="dash-count das3">
            <div class="dash-counts">
              <h4>5</h4>
              <h5>Managers</h5>
            </div>
            <div class="dash-imgs">
              <i data-feather="file"></i>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-7 col-sm-12 col-12 d-flex">
          <div class="card flex-fill">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
              <h5 class="card-title mb-0">Quick Stats</h5>
              <div class="graph-sets">
                <ul>
                  <li>
                    <span>Delivered</span>
                  </li>
                  <li>
                    <span>Failed Delivery</span>
                  </li>
                </ul>
                <div class="dropdown">
                  <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    2024 <img src="assets/img/icons/dropdown.svg" alt="img" class="ms-2">
                  </button>
                  <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li>
                    <a href="javascript:void(0);" class="dropdown-item">2024</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="dropdown-item">2021</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="dropdown-item">2020</a>
                  </li>
                </ul> -->
                </div>
              </div>
            </div>
            <div class="card-body">
              <div id="sales_charts"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-sm-12 col-12 d-flex">
          <div class="card flex-fill">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
              <h4 class="card-title mb-0">Recently Listed Items</h4>
              <div class="dropdown">
                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                  <i class="fa fa-ellipsis-v"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li>
                    <a href="#" class="dropdown-item">View All</a>
                  </li>
                  <!-- <li>
                  <a href="addproduct.html" class="dropdown-item">Product Add</a>
                </li> -->
                </ul>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive dataview">
                <table class="table datatable ">
                  <thead>
                    <tr>
                      <th>Item</th>
                      <th>Quantity</th>
                      <th>Address</th>
                      <th>Budget</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>4</td>
                      <td>4</td>
                      <td class="productimgname">
                        <!-- <a href="#" class="product-img">
                        <img src="assets/img/product/product6.jpg" alt="product">
                      </a> -->
                        <a href="#">Macbook Pro</a>
                      </td>
                      <td>$2920</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-4">
        <div class="card-body">
          <h4 class="card-title">Recently Delivered Parcels</h4>
          <div class="table-responsive dataview">
            <table class="table datatable ">
              <thead>
                <tr>
                  <th>Parcel Code</th>
                  <th>Item Name</th>
                  <th>User </th>
                  <th>Transporter</th>
                  <th>To Address</th>
                  <th>Delivery Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="javascript:void(0);">BH0004</a></td>
                  <td class="productimgname">
                    <!-- <a class="product-img" href="#">
                    <img src="assets/img/product/product5.jpg" alt="product">
                  </a> -->
                    <a href="#">Avocat</a>
                  </td>
                  <td>Jerry</td>
                  <td>Johnny</td>
                  <td>Nigeria</td>
                  <td>27-07-2024</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <?php elseif (intval($user['type']) == 2) : ?>

      <!-- Transporters -->
      <div class="row">
        <div class="col-lg-4 col-sm-6 col-12">
          <div class="dash-widget">
            <div class="dash-widgetimg">
              <span><img src="assets/img/icons/dash1.svg" alt="img"></span>
            </div>
            <div class="dash-widgetcontent">
              <h5>$<span class="counters" data-count="144.00">$144.00</span></h5>
              <h6>Total Budget</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
          <div class="dash-widget dash1">
            <div class="dash-widgetimg">
              <span><img src="assets/img/icons/dash2.svg" alt="img"></span>
            </div>
            <div class="dash-widgetcontent">
              <h5>$<span class="counters" data-count="85.00">$85.00</span></h5>
              <h6>Total Spent</h6>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-sm-6 col-12">
        <div class="dash-widget dash2">
          <div class="dash-widgetimg">
            <span><img src="assets/img/icons/dash3.svg" alt="img"></span>
          </div>
          <div class="dash-widgetcontent">
            <h5>$<span class="counters" data-count="56.50">56.50</span></h5>
            <h6>Expenses</h6>
          </div>
        </div>
      </div> -->
        <!-- <div class="col-lg-3 col-sm-6 col-12">
        <div class="dash-widget dash3">
          <div class="dash-widgetimg">
            <span><img src="assets/img/icons/dash4.svg" alt="img"></span>
          </div>
          <div class="dash-widgetcontent">
            <h5>$<span class="counters" data-count="40.00">40.00</span></h5>
            <h6>Sales</h6>
          </div>
        </div>
      </div> -->
        <!-- <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count">
          <div class="dash-counts">
            <h4>50</h4>
            <h5>Users</h5>
          </div>
          <div class="dash-imgs">
            <i data-feather="user"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das1">
          <div class="dash-counts">
            <h4>15</h4>
            <h5>Transporters</h5>
          </div>
          <div class="dash-imgs">
            <i data-feather="user-check"></i>
          </div>
        </div>
      </div> -->
        <div class="col-lg-4 col-sm-6 col-12 d-flex">
          <div class="dash-count das2">
            <div class="dash-counts">
              <h4>8</h4>
              <h5>Total Parcels Delivered</h5>
            </div>
            <div class="dash-imgs">
              <i data-feather="file-text"></i>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das3">
          <div class="dash-counts">
            <h4>5</h4>
            <h5>Managers</h5>
          </div>
          <div class="dash-imgs">
            <i data-feather="file"></i>
          </div>
        </div>
      </div> -->
      </div>

      <div class="row">
        <div class="col-lg-7 col-sm-12 col-12 d-flex">
          <div class="card flex-fill">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
              <h5 class="card-title mb-0">Quick Stats</h5>
              <div class="graph-sets">
                <ul>
                  <li>
                    <span>Delivered</span>
                  </li>
                  <li>
                    <span>Failed Delivery</span>
                  </li>
                </ul>
                <div class="dropdown">
                  <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    2024 <img src="assets/img/icons/dropdown.svg" alt="img" class="ms-2">
                  </button>
                  <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li>
                    <a href="javascript:void(0);" class="dropdown-item">2024</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="dropdown-item">2021</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="dropdown-item">2020</a>
                  </li>
                </ul> -->
                </div>
              </div>
            </div>
            <div class="card-body">
              <div id="invoice_chart"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-sm-12 col-12 d-flex">
          <div class="card flex-fill">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
              <h4 class="card-title mb-0">Recently Listed Items</h4>
              <div class="dropdown">
                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                  <i class="fa fa-ellipsis-v"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li>
                    <a href="#" class="dropdown-item">View All</a>
                  </li>
                  <!-- <li>
                  <a href="addproduct.html" class="dropdown-item">Product Add</a>
                </li> -->
                </ul>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive dataview">
                <table class="table datatable ">
                  <thead>
                    <tr>
                      <th>Item</th>
                      <th>Quantity</th>
                      <th>Address</th>
                      <th>Budget</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>4</td>
                      <td>4</td>
                      <td class="productimgname">
                        <!-- <a href="#" class="product-img">
                        <img src="assets/img/product/product6.jpg" alt="product">
                      </a> -->
                        <a href="#">Macbook Pro</a>
                      </td>
                      <td>$2920</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-4">
        <div class="card-body">
          <h4 class="card-title">Recently Delivered Parcels</h4>
          <div class="table-responsive dataview">
            <table class="table datatable ">
              <thead>
                <tr>
                  <th>Parcel Code</th>
                  <th>Item Name</th>
                  <th>User </th>
                  <th>Transporter</th>
                  <th>To Address</th>
                  <th>Delivery Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="javascript:void(0);">BH0004</a></td>
                  <td class="productimgname">
                    <!-- <a class="product-img" href="#">
                    <img src="assets/img/product/product5.jpg" alt="product">
                  </a> -->
                    <a href="#">Avocat</a>
                  </td>
                  <td>Jerry</td>
                  <td>Johnny</td>
                  <td>Nigeria</td>
                  <td>27-07-2024</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    <?php elseif (intval($user['type']) == 3) : ?>
      <!-- User Dashboard -->
      <div class="row">
        <div class="col-lg-4 col-sm-6 col-12">
          <div class="dash-widget">
            <div class="dash-widgetimg">
              <span><img src="assets/img/icons/dash1.svg" alt="img"></span>
            </div>
            <div class="dash-widgetcontent">
              <h5>$<span class="counters" data-count="144.00">$144.00</span></h5>
              <h6>Total Budget</h6>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 col-12">
          <div class="dash-widget dash1">
            <div class="dash-widgetimg">
              <span><img src="assets/img/icons/dash2.svg" alt="img"></span>
            </div>
            <div class="dash-widgetcontent">
              <h5>$<span class="counters" data-count="85.00">$85.00</span></h5>
              <h6>Total Spent</h6>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-sm-6 col-12">
        <div class="dash-widget dash2">
          <div class="dash-widgetimg">
            <span><img src="assets/img/icons/dash3.svg" alt="img"></span>
          </div>
          <div class="dash-widgetcontent">
            <h5>$<span class="counters" data-count="56.50">56.50</span></h5>
            <h6>Expenses</h6>
          </div>
        </div>
      </div> -->
        <!-- <div class="col-lg-3 col-sm-6 col-12">
        <div class="dash-widget dash3">
          <div class="dash-widgetimg">
            <span><img src="assets/img/icons/dash4.svg" alt="img"></span>
          </div>
          <div class="dash-widgetcontent">
            <h5>$<span class="counters" data-count="40.00">40.00</span></h5>
            <h6>Sales</h6>
          </div>
        </div>
      </div> -->
        <!-- <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count">
          <div class="dash-counts">
            <h4>50</h4>
            <h5>Users</h5>
          </div>
          <div class="dash-imgs">
            <i data-feather="user"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das1">
          <div class="dash-counts">
            <h4>15</h4>
            <h5>Transporters</h5>
          </div>
          <div class="dash-imgs">
            <i data-feather="user-check"></i>
          </div>
        </div>
      </div> -->
        <div class="col-lg-4 col-sm-6 col-12 d-flex">
          <div class="dash-count das2">
            <div class="dash-counts">
              <h4>8</h4>
              <h5>Total Listed Parcels</h5>
            </div>
            <div class="dash-imgs">
              <i data-feather="file-text"></i>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-sm-6 col-12 d-flex">
        <div class="dash-count das3">
          <div class="dash-counts">
            <h4>5</h4>
            <h5>Managers</h5>
          </div>
          <div class="dash-imgs">
            <i data-feather="file"></i>
          </div>
        </div>
      </div> -->
      </div>

      <div class="row">
        <div class="col-lg-7 col-sm-12 col-12 d-flex">
          <div class="card flex-fill">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
              <h5 class="card-title mb-0">Quick Stats</h5>
              <div class="graph-sets">
                <ul>
                  <li>
                    <span>Delivered</span>
                  </li>
                  <li>
                    <span>Failed Delivery</span>
                  </li>
                </ul>
                <div class="dropdown">
                  <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    2024 <img src="assets/img/icons/dropdown.svg" alt="img" class="ms-2">
                  </button>
                  <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li>
                    <a href="javascript:void(0);" class="dropdown-item">2024</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="dropdown-item">2021</a>
                  </li>
                  <li>
                    <a href="javascript:void(0);" class="dropdown-item">2020</a>
                  </li>
                </ul> -->
                </div>
              </div>
            </div>
            <div class="card-body">
              <div id="invoice_chart"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-sm-12 col-12 d-flex">
          <div class="card flex-fill">
            <div class="card-header pb-0 d-flex justify-content-between align-items-center">
              <h4 class="card-title mb-0">Recently Listed Items</h4>
              <div class="dropdown">
                <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false" class="dropset">
                  <i class="fa fa-ellipsis-v"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li>
                    <a href="#" class="dropdown-item">View All</a>
                  </li>
                  <!-- <li>
                  <a href="addproduct.html" class="dropdown-item">Product Add</a>
                </li> -->
                </ul>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive dataview">
                <table class="table datatable ">
                  <thead>
                    <tr>
                      <th>Item</th>
                      <th>Quantity</th>
                      <th>Address</th>
                      <th>Budget</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>4</td>
                      <td>4</td>
                      <td class="productimgname">
                        <!-- <a href="#" class="product-img">
                        <img src="assets/img/product/product6.jpg" alt="product">
                      </a> -->
                        <a href="#">Macbook Pro</a>
                      </td>
                      <td>$2920</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-4">
        <div class="card-body">
          <h4 class="card-title">Recently Delivered Parcels</h4>
          <div class="table-responsive dataview">
            <table class="table datatable ">
              <thead>
                <tr>
                  <th>Parcel Code</th>
                  <th>Item Name</th>
                  <th>User </th>
                  <th>Transporter</th>
                  <th>To Address</th>
                  <th>Delivery Date</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="javascript:void(0);">BH0004</a></td>
                  <td class="productimgname">
                    <!-- <a class="product-img" href="#">
                    <img src="assets/img/product/product5.jpg" alt="product">
                  </a> -->
                    <a href="#">Avocat</a>
                  </td>
                  <td>Jerry</td>
                  <td>Johnny</td>
                  <td>Nigeria</td>
                  <td>27-07-2024</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>