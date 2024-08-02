<?php
include_once("../App/init.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $transporter_id = intval($app->validate($_GET['id']));
  $listing_id = intval($app->validate($_GET['t_id']));
  $data = [
    'status' => 2
  ];
  $insert_data = [
    'listing_id' => $listing_id,
    'transporter_id' => $transporter_id,
    'status' => 2
  ];
  $query = $parcel->get('id=' . $listing_id . ' and assigned_to = 0');
  if (!$query) {
    $response = [
      'status' => 'error',
      'message' => 'You have already assigned this listing to a transporter'
    ];
    echo json_encode($response);
    exit();
  }
  $assign = [
    'assigned_to' => $transporter_id
  ];

  $query = $parcel->update($assign, 'id =' . $listing_id);
  $result = $parcel->update($data, 'id =' . $listing_id);
  $queryInsert = $app->insert('listing_track', $insert_data);
  if ($result) {
    $response = [
      'status' => 'success',
      'message' => 'Listing assigned to transporter for booking'
    ];
  } else {
    $response = [
      'status' => 'error',
      'message' => 'Failed to assign listing to transporter'
    ];
  }
}

echo json_encode($response);
