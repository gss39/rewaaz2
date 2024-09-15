<?php

include ( 'connection.php' );

$email = $_POST[ 'email' ];
$password = $_POST[ 'password' ];
$repeat_password = $_POST[ 'repeat_password' ];

// check data eiexting -------------------------------------------------
$query = "SELECT * FROM `login` WHERE email = '$email' ";

// FETCHING DATA FROM DATABASE
$result = $conn->query( $query );

if ( $result->num_rows <= 0 ) {

    $sql = "INSERT INTO `login`(`email`, `password`) VALUES ('$email','$password')";

    // check password matching ----------------------------------------------------
    if ( $password == $repeat_password ) {

        if ( $conn->query( $sql ) == TRUE ) {

            // echo 'New record created successfully';

            $alert = 1;
            // alert = 1 fow success

        } else {

            echo 'Error: ' . $sql . '<br>' . $conn->error;
            $alert = 0;
            // alert = 0 fow error

        }

    } else {

        echo 'password not match please check password';

    }

} else {

    echo ' user allrady exest ...';

    // alert = 2 fow warning
    $alert = 2;

}

header( 'Location:login.php?alert='.$alert.'');

exit;