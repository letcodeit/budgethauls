<?php
include_once("../App/init.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $listing_id = intval($app->validate($_GET['id']));
  $data = [
    'status' => 6
  ];

  $insert_data = [
    'listing_id' => $listing_id,
    'transporter_id' => $id,
    'status' => 6
  ];
  $result = $parcel->update($data, 'id =' . $listing_id);
  $queryInsert = $app->insert('listing_track', $insert_data);
  if ($result) {
    $response = [
      'status' => 'success',
      'message' => 'Parcel Delivery Failed'
    ];
  } else {
    $response = [
      'status' => 'error',
      'message' => 'Failed to approve failed delivery'
    ];
  }
}

echo json_encode($response);
