<?php
include_once("../App/init.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $listing_id = intval($app->validate($_GET['id']));
  $data = [
    'status' => 5
  ];
  $insert_data = [
    'listing_id' => $listing_id,
    'transporter_id' => $id,
    'status' => 5
  ];
  $result = $parcel->update($data, 'id =' . $listing_id);
  $queryInsert = $app->insert('listing_track', $insert_data);
  if ($result) {
    $response = [
      'status' => 'success',
      'message' => 'Parcel Delivered'
    ];
  } else {
    $response = [
      'status' => 'error',
      'message' => 'Failed to approve delivery'
    ];
  }
}

echo json_encode($response);
