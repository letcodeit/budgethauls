<?php
include_once("../App/init.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $parcel_id = intval($app->validate($_GET['id']));
  $result = $parcel->delete('id =' . $parcel_id);
  if ($result) {
    $response = [
      'status' => 'success',
      'message' => 'Listing Deleted Successfully'
    ];
  } else {
    $response = [
      'status' => 'error',
      'message' => 'Failed to delete'
    ];
  }
}

echo json_encode($response);
