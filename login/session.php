<?php

session_start();

$get_email = $_SESSION["login_email"];


if($get_email == "" ){


    header( 'Location:login.php');

    exit;


}