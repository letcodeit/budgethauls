<?php
include_once("../App/init.php");

extract($_POST);

$password = $password;
$verify_pass = $conPass;


$checker = $app->get('users', 'email ="' . $app->validate($email) . '" ');
if ($password !== $verify_pass) {
  $response = [
    'status' => 'PassError',
    'message' => 'Passwords do not match'
  ];
} else if (!filter_var($app->validate($email), FILTER_VALIDATE_EMAIL)) {
  $response = [
    'status' => 'error',
    'message' => 'Invalid email address'
  ];
} else if ($checker) {
  $response = [
    'status' => 'error',
    'message' => 'This Email Already Exists'
  ];
} else if ($type == '0') {
  $response = [
    'status' => 'error',
    'message' => 'Select Account Type'
  ];
} else {
  $password = md5($password);
  $data = [
    'first_name' => $firstname,
    'last_name' => $lastname,
    'email' => $email,
    'pass' => $password,
    'type' => $type,
  ];
  $result = $app->signUp($data);
  if ($result) {
    $response = [
      'status' => 'success',
      'message' => 'Registration successful!'
    ];
  }
}

echo json_encode($response);
