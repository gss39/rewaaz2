<?php

include ('connection.php');

$email = $_POST['f_email'];

// check data eiexting -------------------------------------------------
$query = "SELECT * FROM `login` WHERE email = '$email' ";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

if ($result->num_rows > 0) {

    $str = rand();
    $myotp = md5($str);
    echo $myotp;

    $update_query = "UPDATE `login` SET `otp`='$myotp' WHERE email = '$email'";

    if ($conn->query($update_query) == TRUE) {

        
        header("Location:otp.php?email=$email");

        exit;

    } else {

        echo 'Error: ' . $sql . '<br>' . $conn->error;

    }

} else {

    $alert = 2;

    header("Location:forget_password.php?alert=$alert");

        exit;

}