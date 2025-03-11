<?php

include ('connection2.php');

$product_id = $_POST['product_id'];
$seller = $_POST['seller'];
$catg = $_POST['catg'];
$keywords = $_POST['keywords'];



// $title = $_POST['title'];
// $price  = $_POST['price'];
// $rating = $_POST['rating'];
// $discount  = $_POST['discount'];
$myimage  = $_POST['myimage'];
$myvideo  = $_POST['myvideo'];

// $mrp = $_POST['mrp'];


$product_link = $_POST['product_link'];





        $sql = "INSERT INTO `products`(`product_id`, `seller`, `catg`,`image`, `video`, `p_link`,`title_keywords`) VALUES ('$product_id','$seller','$catg','$myimage','$myvideo','$product_link','$keywords')";

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