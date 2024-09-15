<?php

include ('connection.php');

$otp = $_POST['otp'];
$email = $_POST['email'];


// check data eiexting -------------------------------------------------
$query = "SELECT * FROM `login` WHERE email ='$email'";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);



if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $otp_from_database = $row["otp"];

        if ($otp == $otp_from_database) {


            header("Location:new_password.php?email=$email");

            exit;

        } else {

           
            header("Location:otp.php?alert=2&&email=$email");

            exit;

        }

    }


} else {

    echo 'invalid email and password ...';

}