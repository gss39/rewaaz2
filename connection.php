<?php

// $servername = "localhost";
// $username = "egxcmgbg_brandonly";
// $password = "brandonly!@#";
// $databasename = "egxcmgbg_ecomrce_website";



$servername = "localhost";
$username = "root";
$password = "";
$databasename = "mydatabase";

// CREATE CONNECTION 
$conn = new mysqli(
  $servername,
  $username,
  $password,
  $databasename
);

// GET CONNECTION ERRORS 
if ($conn->connect_error) {
  die ("Connection failed: " . $conn->connect_error);
}



