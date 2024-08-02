<?php
// Detect whether we are on localhost or on the server
if ($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_ADDR'] == '127.0.0.1') {
  // Localhost connection
  $con = new mysqli('localhost', 'root', '', 'budgethall_db');
} else {
  // Server connection
  $con = new mysqli('localhost', 'u695379241_ROOT_BH', 'Qjz?3?3kW', 'u695379241_budgethauls');
}
// Check the connection
if ($con->connect_error) {
  die("Could not connect to mysql: " . $con->connect_error);
}
