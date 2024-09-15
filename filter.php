<?php

session_start();

include ('connection.php');

// error_reporting(0);

// Get the raw POST data
$postData = file_get_contents("php://input");

// Decode JSON data
$data = json_decode($postData, true);

// Access the data as an array

$mydata = json_encode($data);

$myquery = $_SESSION['search_query'];



// query file -----------------------------------------------------------------

include ('query.php');

// -----------------------------------------------------------------------


$result = $conn->query($query);

if ($result->num_rows > 0) {

  while ($row = $result->fetch_assoc()) {
    $product_id = $row['product_id'];

    $data = '<div class="showcase">

                 <div class="showcase-banner">

                   <a href="product_page.php?product_id='.$product_id.'"><img src="dashboard/all_images/'.$row["image"].'" alt="Mens Winter Leathers Jackets" width="300"
                       class="product-img default">
                     <img src="dashboard/all_images/'.$row["image"].'" alt="Mens Winter Leathers Jackets" width="300"
                       class="product-img hover"></a>
                        
                   <p class="showcase-badge">' . $row["seller"] . '</p>

                   <div class="showcase-actions">

                   </div>

                 </div>
               </div>';



    echo $data;
  }
} else {
  echo '0 results';
}

$conn->close();

