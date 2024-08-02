<?php
require_once("App.php");
require_once("Parcel.php");
$app = new App();
$parcel = new Parcel();
$user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
$id = isset($_SESSION['user'])  ? $user['id'] : '';
