<?php
session_start();
include ( 'connection.php' );

$email = $_POST[ 'email' ];
$password = $_POST[ 'password' ];

// check data eiexting -------------------------------------------------
$query = "SELECT * FROM `login` WHERE email = '$email' AND  password ='$password' ";

// FETCHING DATA FROM DATABASE
$result = $conn->query( $query );

if ( $result->num_rows > 0 ) {

    // login successfully .....;

    $_SESSION["login_email"] = $email;


    header( 'Location:../index.php' );

    exit;

} else {

    // alert = 3 for warning data invaild email and password;
    $alert = 3;
    header( 'Location:login.php?alert='.$alert.'' );

    exit;

}