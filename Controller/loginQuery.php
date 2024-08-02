<?php
include_once("../App/init.php");

extract($_POST);

$loginResult = $app->login($email, $password);
if (is_numeric($loginResult)) {
  $response = [
    'status' => 'success',
    'message' => 'Login Successful'
  ];
} else {
  $response = [
    'status' => 'error',
    'message' => 'Invalid Email or Password'
  ];
}

echo json_encode($response);
