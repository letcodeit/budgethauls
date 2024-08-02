<!-- Main Header -->
<?php
include("include/header.php");
$app->checkLogin();

?>

<body>
  <div class="main-wrapper">

    <!-- Top Header -->
    <?php
    include("include/top-header.php");
    ?>

    <!-- Sidebar -->
    <?php
    include("include/sidebar.php");
    ?>

    <!-- Main Content -->
    <?php
    $app->viewPage($page);
    ?>
  </div>

  <!-- Footer -->
  <?php
  include("include/footer.php");
  ?>