<?php


// $servername = "localhost";
// $username = "rewaaz123";
// $password = "vd]UzH;RKl&(";
// $databasename = "mydatabase";

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



