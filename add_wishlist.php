<?php

include ( 'connection.php' );

$email = $_POST[ 'email' ];
$product_id = $_POST[ 'product_id' ];

// check data eiexting -------------------------------------------------
$query = "SELECT * FROM `wishlist` WHERE email = '$email' AND product_id = '$product_id'";

// FETCHING DATA FROM DATABASE
$result = $conn->query( $query );

if ( $result->num_rows <= 0 ) {

    $sql = "INSERT INTO `wishlist`(`email`, `product_id`) VALUES ('$email','$product_id')";

    if ( $conn->query( $sql ) == TRUE ) {

        echo 'New record created successfully';

        $alert = 1;
        // alert = 1 fow success

    } else {

        echo 'Error: ' . $sql . '<br>' . $conn->error;
        $alert = 0;
        // alert = 0 fow error

    }

} else {

    echo 'data alrady exest';

}

