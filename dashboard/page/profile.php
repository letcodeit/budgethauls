<?php
require '../App/init.php';
?>
<div class="page-wrapper">
  <div class="content">
    <div class="page-header">
      <div class="page-title">
        <h4>Account Settings</h4>
        <h6>User Account Setup</h6>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="profile-set">
          <!-- <div class="profile-head">
          </div> -->
          <div class="profile-top">
            <div class="profile-content">
              <!-- <div class="profile-contentimg">
                <img src="assets/img/customer/customer5.jpg" alt="img" id="blah">
                <div class="profileupload">
                  <input type="file" id="imgInp">
                  <a href="javascript:void(0);"><img src="assets/img/icons/edit-set.svg" alt="img"></a>
                </div>
              </div> -->
              <div class="profile-contentname">
                <?php
                $user = new User();
                $getUser = $user->getUser($id);
                ?>
                <!-- <h2><?= $getUser['first_name'] . ' ' . $getUser['last_name']; ?></h2>
                <h4>Your BudgetHaul Account</h4> -->
              </div>
            </div>
            <!-- <div class="ms-auto">
              <a href="javascript:void(0);" class="btn btn-submit me-2">Save</a>
              <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
            </div> -->
          </div>
        </div>
        <form action="" method="post">
          <div class="row">
            <div class="col-lg-4 col-sm-12">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" placeholder="<?= $getUser['first_name']; ?>">
              </div>
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" placeholder="<?= $getUser['last_name']; ?>">
              </div>
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="form-group">
                <label>Email</label>
                <input type="text" placeholder="<?= $getUser['email']; ?>">
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-submit me-2">Update</button>
              <!-- <a href="javascript:void(0);" class="btn btn-cancel">Back</a> -->
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="card">
      <div class="card-body">
        <div class="profile-set">
          <!-- <div class="profile-head">
          </div> -->
          <div class="profile-top">
            <div class="profile-content">
              <!-- <div class="profile-contentimg">
                <img src="assets/img/customer/customer5.jpg" alt="img" id="blah">
                <div class="profileupload">
                  <input type="file" id="imgInp">
                  <a href="javascript:void(0);"><img src="assets/img/icons/edit-set.svg" alt="img"></a>
                </div>
              </div> -->
              <div class="profile-contentname">
                <?php
                $user = new User();
                $getUser = $user->getUser($id);
                ?>
                <!-- <h2><?= $getUser['first_name'] . ' ' . $getUser['last_name']; ?></h2> -->
                <h2><strong>Change Account Password</strong></h2>
              </div>
            </div>
            <!-- <div class="ms-auto">
              <a href="javascript:void(0);" class="btn btn-submit me-2">Save</a>
              <a href="javascript:void(0);" class="btn btn-cancel">Cancel</a>
            </div> -->
          </div>
        </div>
        <form action="" method="post">
          <div class="row">
            <div class="col-lg-4 col-sm-12">
              <div class="form-group">
                <label>Old Password</label>
                <input type="text" placeholder="<?= $getUser['email']; ?>">
              </div>
            </div>
            <div class="col-lg-4 col-sm-12">
              <div class="form-group">
                <label>New Password</label>
                <div class="pass-group">
                  <input type="password" class=" pass-input" autocomplete="off">
                  <span class="fas toggle-password fa-eye-slash"></span>
                </div>
              </div>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-submit me-2">Change Password</button>
              <!-- <a href="javascript:void(0);" class="btn btn-cancel">Back</a> -->
            </div>
          </div>
        </form>
      </div>
    </div>

  </div>
</div>