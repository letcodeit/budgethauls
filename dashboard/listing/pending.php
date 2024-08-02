<?php
require '../App/init.php';
?>

<div class="page-wrapper">
  <div class="content">
    <div class="page-header">
      <div class="page-title">
        <h4>Pending Listings</h4>
        <h6>Listings Awaiting Booking</h6>
      </div>
      <!-- <div class="page-btn">
        <a href="addtransfer.html" class="btn btn-added"><img src="assets/img/icons/plus.svg" alt="img" class="me-2">Add Transfer</a>
      </div> -->
    </div>


    <!-- Admin -->
    <?php if (intval($user['type']) == 1) : ?>

      <div class="card">
        <div class="card-body">
          <div class="table-top">
            <div class="search-set">
              <!-- <div class="search-path">
              <a class="btn btn-filter" id="filter_search">
                <img src="assets/img/icons/filter.svg" alt="img">
                <span><img src="assets/img/icons/closes.svg" alt="img"></span>
              </a>
            </div> -->
              <div class="search-input">
                <a class="btn btn-searchset">
                  <img src="assets/img/icons/search-white.svg" alt="img">
                </a>
              </div>
            </div>
            <div class="wordset">
              <ul>
                <!-- <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
              </li>
              <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
              </li> -->
                <li>
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
                </li>
              </ul>
            </div>
          </div>

          <!-- <div class="card" id="filter_inputs">
          <div class="card-body pb-0">
            <div class="row">
              <div class="col-lg-2 col-sm-6 col-12">
                <div class="form-group">
                  <input type="text" class="datetimepicker cal-icon" placeholder="Choose Date">
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-12">
                <div class="form-group">
                  <input type="text" placeholder="Enter Reference">
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-12">
                <div class="form-group">
                  <select class="select">
                    <option>Choose Status</option>
                    <option>Inprogress</option>
                    <option>Complete</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                <div class="form-group">
                  <a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></a>
                </div>
              </div>
            </div>
          </div>
        </div> -->

          <div class="table-responsive">
            <table class="table  datanew">
              <thead>
                <tr>
                  <!-- <th>
                  <label class="checkboxs">
                    <input type="checkbox" id="select-all">
                    <span class="checkmarks"></span>
                  </label>
                </th> -->
                  <th>Reference</th>
                  <th>Item Name</th>
                  <th>From Address</th>
                  <th>To Address</th>
                  <th>Budget</th>
                  <th>Weight</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = $parcel->get('status = 1');
                if ($query) {
                  while ($row = $query->fetch_assoc()) {
                ?>
                    <tr>
                      <!-- <td>
                      <label class="checkboxs">
                        <input type="checkbox">
                        <span class="checkmarks"></span>
                      </label>
                    </td> -->
                      <td><?= $row['parcel_code']; ?></td>
                      <td><?= $row['item_name']; ?></td>
                      <td><?= $row['s_address']; ?></td>
                      <td><?= $row['r_address']; ?></td>
                      <td>$<?= $row['budget']; ?></td>
                      <td><?= $row['weight']; ?></td>
                      <td><span class="badges bg-lightyellow"> <i class="fa fa-walking m-1"></i>Pending</span></td>
                      <!-- <td>
                      <a class="me-3" href="edittransfer.html">
                        <img src="assets/img/icons/edit.svg" alt="img">
                      </a>
                      <a class="me-3 confirm-text" href="javascript:void(0);">
                        <img src="assets/img/icons/delete.svg" alt="img">
                      </a>
                    </td> -->
                    </tr>
                <?php
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Transporter -->
    <?php elseif (intval($user['type']) == 2) : ?>

      <div class="card">
        <div class="card-body">
          <div class="table-top">
            <div class="search-set">
              <!-- <div class="search-path">
              <a class="btn btn-filter" id="filter_search">
                <img src="assets/img/icons/filter.svg" alt="img">
                <span><img src="assets/img/icons/closes.svg" alt="img"></span>
              </a>
            </div> -->
              <div class="search-input">
                <a class="btn btn-searchset">
                  <img src="assets/img/icons/search-white.svg" alt="img">
                </a>
              </div>
            </div>
            <div class="wordset">
              <ul>
                <!-- <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
              </li>
              <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
              </li> -->
                <li>
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
                </li>
              </ul>
            </div>
          </div>

          <!-- <div class="card" id="filter_inputs">
          <div class="card-body pb-0">
            <div class="row">
              <div class="col-lg-2 col-sm-6 col-12">
                <div class="form-group">
                  <input type="text" class="datetimepicker cal-icon" placeholder="Choose Date">
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-12">
                <div class="form-group">
                  <input type="text" placeholder="Enter Reference">
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-12">
                <div class="form-group">
                  <select class="select">
                    <option>Choose Status</option>
                    <option>Inprogress</option>
                    <option>Complete</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                <div class="form-group">
                  <a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></a>
                </div>
              </div>
            </div>
          </div>
        </div> -->

          <div class="table-responsive">
            <table class="table  datanew">
              <thead>
                <tr>
                  <!-- <th>
                  <label class="checkboxs">
                    <input type="checkbox" id="select-all">
                    <span class="checkmarks"></span>
                  </label>
                </th> -->
                  <th>Reference</th>
                  <th>Status</th>
                  <th>Item Name</th>
                  <th>From Address</th>
                  <th>To Address</th>
                  <th>Budget</th>
                  <th>Weight</th>
                  <!-- <th>Action</th> -->
                </tr>
              </thead>
              <tbody>
                <?php
                $query = $parcel->get('status = 1');
                if ($query) {
                  while ($row = $query->fetch_assoc()) {
                ?>
                    <tr>
                      <!-- <td>
                      <label class="checkboxs">
                        <input type="checkbox">
                        <span class="checkmarks"></span>
                      </label>
                    </td> -->
                      <td><?= $row['parcel_code']; ?></td>
                      <td><?= $row['item_name']; ?></td>
                      <td><?= $row['s_address']; ?></td>
                      <td><?= $row['r_address']; ?></td>
                      <td>$<?= $row['budget']; ?></td>
                      <td><?= $row['weight']; ?></td>
                      <td><span class="badges bg-lightyellow"> <i class="fa fa-walking m-1"></i>Pending</span></td>
                      <!-- <td>
                        <a class="me-3" href="?parcel=parcel-details&id=<?= $row['id'] ?>">
                          <img src="assets/img/icons/eye.svg" alt="img" />
                        </a>
                        <button class="btn btn-success" value=""> <i class="fa fa-eye m-1"></i>View</button>
                        <button class="btn btn-success" id="parcelId" style="display: none;" value="<?= $row['id'] ?>"> <i class="fa fa-bookmark m-1"></i>Book</button>

                        <a class="me-3" id="bookBtn" data-value="<?= $row['id'] ?>">
                          <img src="assets/img/icons/accept3.png" alt="img" />
                        </a>
                        <a class="confirm-text" href="javascript:void(0);">
                          <img src="assets/img/icons/delete.svg" alt="img" />
                        </a>
                      </td> -->
                    </tr>
                <?php
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>



      <!-- User -->
    <?php elseif (intval($user['type']) == 3) : ?>

      <!-- User -->
      <div class="card">
        <div class="card-body">
          <div class="table-top">
            <div class="search-set">
              <!-- <div class="search-path">
              <a class="btn btn-filter" id="filter_search">
                <img src="assets/img/icons/filter.svg" alt="img">
                <span><img src="assets/img/icons/closes.svg" alt="img"></span>
              </a>
            </div> -->
              <div class="search-input">
                <a class="btn btn-searchset">
                  <img src="assets/img/icons/search-white.svg" alt="img">
                </a>
              </div>
            </div>
            <div class="wordset">
              <ul>
                <!-- <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
              </li>
              <li>
                <a data-bs-toggle="tooltip" data-bs-placement="top" title="excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
              </li> -->
                <li>
                  <a data-bs-toggle="tooltip" data-bs-placement="top" title="print"><img src="assets/img/icons/printer.svg" alt="img"></a>
                </li>
              </ul>
            </div>
          </div>

          <!-- <div class="card" id="filter_inputs">
          <div class="card-body pb-0">
            <div class="row">
              <div class="col-lg-2 col-sm-6 col-12">
                <div class="form-group">
                  <input type="text" class="datetimepicker cal-icon" placeholder="Choose Date">
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-12">
                <div class="form-group">
                  <input type="text" placeholder="Enter Reference">
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 col-12">
                <div class="form-group">
                  <select class="select">
                    <option>Choose Status</option>
                    <option>Inprogress</option>
                    <option>Complete</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-1 col-sm-6 col-12 ms-auto">
                <div class="form-group">
                  <a class="btn btn-filters ms-auto"><img src="assets/img/icons/search-whites.svg" alt="img"></a>
                </div>
              </div>
            </div>
          </div>
        </div> -->

          <div class="table-responsive">
            <table class="table  datanew">
              <thead>
                <tr>
                  <!-- <th>
                  <label class="checkboxs">
                    <input type="checkbox" id="select-all">
                    <span class="checkmarks"></span>
                  </label>
                </th> -->
                  <th>Reference</th>
                  <th>Status</th>
                  <th>Item Name</th>
                  <th>From Address</th>
                  <th>To Address</th>
                  <th>Budget</th>
                  <th>Weight</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = $parcel->get('sender_id = ' . $id . ' AND status = 1 AND payment_status = 1');
                if ($query) {
                  while ($row = $query->fetch_assoc()) {
                ?>
                    <tr>
                      <!-- <td>
                      <label class="checkboxs">
                        <input type="checkbox">
                        <span class="checkmarks"></span>
                      </label>
                    </td> -->
                      <td><a href="?listing=listing-details&id=<?= $row['id'] ?>"><?= $row['parcel_code']; ?></a></td>
                      <td><a href="?listing=listing-details&id=<?= $row['id'] ?>"><span class="badges bg-lightyellow"> <i class="fa fa-walking m-1"></i>Pending</span></a></td>
                      <td><a href="?listing=listing-details&id=<?= $row['id'] ?>"><?= $row['item_name']; ?></a></td>
                      <td><a href="?listing=listing-details&id=<?= $row['id'] ?>"><?= $row['s_address']; ?></a></td>
                      <td><a href="?listing=listing-details&id=<?= $row['id'] ?>"><?= $row['r_address']; ?></a></td>
                      <td>$<a href="?listing=listing-details&id=<?= $row['id'] ?>"><?= $row['budget']; ?></a></td>
                      <td><a href="?listing=listing-details&id=<?= $row['id'] ?>"><?= $row['weight']; ?></a></td>
                      <!-- <td>
                      <a class="me-3" href="edittransfer.html">
                        <img src="assets/img/icons/edit.svg" alt="img">
                      </a>
                      <a class="me-3 confirm-text" href="javascript:void(0);">
                        <img src="assets/img/icons/delete.svg" alt="img">
                      </a>
                    </td> -->
                    </tr>
                <?php
                  }
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>


    <?php endif; ?>

  </div>
</div>

<script src="./ajax/book.js"></script>