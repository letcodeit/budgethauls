<?php
include_once("../App/init.php");

extract($_POST);
$verification_code = rand(11111111, 99999999);
$parcelCode = 'BH' . rand(111111, 999999);
$sender = $app->getUserId();
$sender_id = $sender['id'];
$sender = $sender['first_name'] . ' ' . $sender['last_name'];
$data = [
  'parcel_code' => $parcelCode,
  'sender_id' => $sender_id,
  'item_name' => $app->validate($item_name),
  'sender' => ucwords($sender),
  's_address' => $app->validate($s_address),
  's_contact' => $app->validate($s_contact),
  'distance' => $app->validate($distance),
  'quantity' => $app->validate($quantity),
  'receiver' => $app->validate($receiver),
  'r_address' => $app->validate($r_address),
  'r_contact' => $app->validate($r_contact),
  'budget' => $app->validate($budget),
  'weight' => $app->validate($weight),
  'height' => $app->validate($height),
  'length' => $app->validate($length),
  'width' => $app->validate($width),
  'note' => $app->validate($note)
];

$_SESSION['itemData'] = [
  'budget' => intval($app->validate($budget)),
  'name' => $app->validate($item_name),
  'verify' => $verification_code
];

$result = $parcel->insert($data);
if ($result) {
  $_SESSION['itemData']['last_id'] = $parcel->getLastInsertId();
  $response = [
    'status' => 'success',
    'message' => 'Item successfully Listed'
  ];
} else {
  $response = [
    'status' => 'error',
    'message' => 'Failed to list item'
  ];
}

echo json_encode($response);
