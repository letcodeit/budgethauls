<?php
include_once("../App/init.php");

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  $listing_id = intval($app->validate($_GET['id']));
  $data = [
    'listing_id' => $listing_id,
    'transporter_id' => $id
  ];
  $query = $parcel->getAcceptance('listing_id =' . $listing_id . ' and transporter_id =' . $id);
  if ($query) {
    $response = [
      'status' => 'error',
      'message' => 'You have already sent an acceptance request for this listing.'
    ];
  } else {
    $result = $app->insert('acceptance', $data);
    if ($result) {
      $response = [
        'status' => 'success',
        'message' => 'You have sent an acceptance request'
      ];
    } else {
      $response = [
        'status' => 'error',
        'message' => 'Acceptance request failed'
      ];
    }
  }
}

echo json_encode($response);
