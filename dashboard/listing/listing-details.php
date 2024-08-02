<?php
require '../App/init.php';
?>

<div class="page-wrapper">
  <div class="content">
    <div class="page-header">
      <div class="page-title">
        <h4>Listing Details</h4>
        <h6>Full details of Listing</h6>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <div class="bar-code-view">
              <img src="https://quickchart.io/barcode?type=upca&text=<?= rand(11111111111, 99999999999); ?>&includeText=true&rotate=D" alt="barcode">
              <a class="printimg">
                <img src="assets/img/icons/printer.svg" alt="print">
              </a>
            </div>
            <div class="productdetails">
              <ul class="product-bar">
                <?php
                if (isset($_GET['listing'])) {
                  $id = intval($_GET['id']);
                  $query = $parcel->get('id =' . $id);
                  if ($query) {
                    while ($row = $query->fetch_assoc()) {
                ?>
                      <li>
                        <h4><strong>Reference</strong></h4>
                        <h6><?= $row['parcel_code'] ?></h6>
                      </li>
                      <li>
                        <h4><strong>Item Name</strong></h4>
                        <h6><?= $row['item_name'] ?></h6>
                      </li>
                      <li>
                        <h4><strong>From</strong></h4>
                        <h6><?= $row['s_address'] ?></h6>
                      </li>
                      <li>
                        <h4><strong>To</strong></h4>
                        <h6><?= $row['r_address'] ?></h6>
                      </li>
                      <li>
                        <h4><strong>Distance (Miles)</strong></h4>
                        <h6><?= $row['distance'] ?></h6>
                      </li>
                      <li>
                        <h4><strong>Sender</strong></h4>
                        <h6><?= $row['sender'] ?></h6>
                      </li>
                      <li>
                        <h4><strong>Sender's Contact</strong></h4>
                        <h6><?= $row['s_contact'] ?></h6>
                      </li>
                      <li>
                        <h4><strong>Receiver</strong></h4>
                        <h6><?= $row['receiver'] ?></h6>
                      </li>
                      <li>
                        <h4><strong>Receiver's Contact</strong></h4>
                        <h6><?= $row['r_contact'] ?></h6>
                      </li>
                      <li>
                        <h4><strong>Budget</strong></h4>
                        <h6>$<?= $row['budget'] ?></h6>
                      </li>
                      <li>
                        <h4><strong>Weight</strong></h4>
                        <h6><?= $row['weight'] ?> lbs</h6>
                      </li>
                      <li>
                        <h4><strong>Height</strong></h4>
                        <h6><?= $row['height'] ?> in</h6>
                      </li>
                      <li>
                        <h4><strong>Length</strong></h4>
                        <h6><?= $row['length'] ?> in</h6>
                      </li>
                      <li>
                        <h4><strong>Width</strong></h4>
                        <h6><?= $row['width'] ?> in</h6>
                      </li>
                <?php
                    }
                  } else {
                    echo '<div class="alert alert-danger">No Listing found</div>';
                  }
                } else {
                  $app->redirect('?page=home');
                }

                ?>

              </ul>
            </div>
          </div>
        </div>
      </div>

      <?php if (intval($user['type']) == 3) : ?>

        <div class="col-lg-6 col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="slider-product-details">
                <h5 class="text-center mb-3">Your Listing Accepted by the following Carriers - Accept One To Confirm Booking </h5>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <!-- <th>
                  <label class="checkboxs">
                    <input type="checkbox" id="select-all">
                    <span class="checkmarks"></span>
                  </label>
                </th> -->
                        <th>Transporter</th>
                        <th>Date of Acceptance</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $query = $parcel->getAcceptance('listing_id =' . $_GET['id'] . ' ORDER BY date ASC');
                      if ($query) {
                        while ($row = $query->fetch_assoc()) {
                          $transporter = $app->get('users', 'id = ' . $row['transporter_id'])->fetch_assoc();
                          $name = $transporter['first_name'] . ' ' . $transporter['last_name'];
                      ?>
                          <tr>
                            <!-- <td>
                      <label class="checkboxs">
                        <input type="checkbox">
                        <span class="checkmarks"></span>
                      </label>
                    </td> -->
                            <td><?= $name; ?></td>
                            <td><?= $row['date']; ?></td>
                            <td>
                              <?php
                              $getAssigned = $app->get('parcels', 'id =' . $_GET['id'] . ' and assigned_to =' . $row['transporter_id']);
                              $noAssigned = $app->get('parcels', 'id =' . $_GET['id'] . ' and assigned_to = 0');
                              if ($getAssigned && $getAssigned->num_rows > 0) {
                                echo '<span class="badge bg-success">Booked</span>';
                              } elseif ($noAssigned && $noAssigned->num_rows > 0) {
                              ?>
                                <button class="btn btn-success btn-sm" id="confirmBookBtn" data-value="<?= $row['transporter_id'] ?>" value="<?= $row['listing_id'] ?>">Accept to Book</button>
                              <?php
                              }
                              ?>
                            </td>

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
          </div>
        </div>


      <?php elseif (intval($user['type'] == 1)) : ?>
        <div class="col-lg-6 col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="slider-product-details">
                <h4 class="text-center mb-3">Listing Acceptance</h4>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <!-- <th>
                  <label class="checkboxs">
                    <input type="checkbox" id="select-all">
                    <span class="checkmarks"></span>
                  </label>
                </th> -->
                        <th>Transporter</th>
                        <th>Date of Acceptance</th>
                        <!-- <th>Action</th> -->
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $query = $parcel->getAcceptance('listing_id =' . $_GET['id'] . ' ORDER BY date ASC');
                      if ($query) {
                        while ($row = $query->fetch_assoc()) {
                          $transporter = $app->get('users', 'id = ' . $row['transporter_id'])->fetch_assoc();
                          $name = $transporter['first_name'] . ' ' . $transporter['last_name'];
                      ?>
                          <tr>
                            <!-- <td>
                      <label class="checkboxs">
                        <input type="checkbox">
                        <span class="checkmarks"></span>
                      </label>
                    </td> -->
                            <td><?= $name; ?></td>
                            <td><?= $row['date']; ?></td>
                            <td>
                              <?php
                              $getAssigned = $app->get('parcels', 'id =' . $_GET['id'] . ' and assigned_to =' . $row['transporter_id']);
                              $noAssigned = $app->get('parcels', 'id =' . $_GET['id'] . ' and assigned_to = 0');
                              if ($getAssigned && $getAssigned->num_rows > 0) {
                                echo '<span class="badge bg-success">Booked</span>';
                              }
                              ?>
                            </td>
                            <!-- <td>
                              <button class="btn btn-success" id="confirmBookBtn" data-value="<?= $row['transporter_id'] ?>" value="<?= $row['listing_id'] ?>">Accept to Book</button>
                            </td> -->

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
          </div>
        </div>


      <?php endif; ?>

    </div>

    <!-- <div class="row">
      <div class="col-lg-12 col-sm-12">
        <div class="card">
          <h3>Accpeted By Transporter</h3>
        </div>
      </div>
    </div> -->

  </div>
</div>

<script src="./ajax/book.js"></script>