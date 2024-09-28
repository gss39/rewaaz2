<?php

include ('connection2.php');

$product_id = $_POST['product_id'];
$seller = $_POST['seller'];
$catg = $_POST['catg'];

$title = $_POST['title'];
$price  = $_POST['price'];
$rating = $_POST['rating'];
$discount  = $_POST['discount'];
$myimage  = $_POST['myimage'];
$myvideo  = $_POST['myvideo'];
$mrp = $_POST['mrp'];


$product_link = $_POST['product_link'];


$product_url = "https://www.amazon.in/dp/".$product_id."";


        $sql = "INSERT INTO `products`(`product_id`, `seller`, `catg`, `mrp`, `title`, `discount`, `price`, `rating`,`image_link`, `video_link`, `p_link`,`product_url`) VALUES ('$product_id','$seller','$catg','$mrp','$title','$discount','$price','$rating','$myimage','$myvideo','$product_link','$product_url')";

        if ($conn->query($sql) == TRUE) {

            echo 'New record created successfully';

            $alert = 1;

        } else {

            echo 'Error: ' . $sql . '<br>' . $conn->error;

            $alert = 0;

            exit;

        }

 

header('Location:insert.php?alert=' . $alert . '');
exit;