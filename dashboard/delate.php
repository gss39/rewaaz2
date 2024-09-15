<?php

include ('connection2.php');

$product_id = $_POST['product_id'];

$sql = "DELETE FROM `products` WHERE product_id ='$product_id'";

if ($conn->query($sql) === TRUE) {

    echo "1";
  

} else {
    
    echo 'Error: ' . $sql . '<br>' . $conn->error;
    
}

