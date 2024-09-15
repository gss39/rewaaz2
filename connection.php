<?php

$servername = "localhost";
$username = "myuser";
$password = "REWAAZuser@#$";
$databasename = "mydatabase";



// $servername = "localhost";
// $username = "root";
// $password = "";
// $databasename = "mydatabase";

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



