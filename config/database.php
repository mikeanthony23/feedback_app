<?php

define('DB_HOST', 'localhost:3307');
define('DB_USER', 'mike');
define('DB_PASS', '123456789');
define('DB_NAME', 'feedback');

// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if($conn->connect_error) {
  die('Connection Error' . $conn->connect_error );
}

// echo 'CONNECTED!!';