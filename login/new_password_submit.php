<?php

include ('connection.php');

$email = $_POST['email'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];

// check data eiexting -------------------------------------------------
$sql = "UPDATE `login` SET `password`='$password' WHERE email = '$email'";

// check password matching ----------------------------------------------------
if ($password == $repeat_password) {

    if ($conn->query($sql) == TRUE) {

        header('Location:login.php?alert=4');

        exit;

    } else {

        echo 'Error: ' . $sql . '<br>' . $conn->error;

    }

} else {

    // echo 'password not match please check password';
    header('Location:new_password.php?alert=2');

    exit;

}

