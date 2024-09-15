<?php

include ('connection2.php');

$product_id = $_POST['product_id'];
$seller = $_POST['seller'];
$catg = $_POST['catg'];

$title = $_POST['title'];
$price  = $_POST['price'];
$rating = $_POST['rating'];
$discount  = $_POST['discount'];
$mrp = $_POST['mrp'];


$product_link = $_POST['product_link'];


$product_url = "https://www.amazon.in/dp/".$product_id."";

$target_dir = 'all_images/';
$target_file = $target_dir . basename($_FILES['myimage']['name']);

$target_dir2 = 'all_videos/';
$target_file2 = $target_dir2 . basename($_FILES['myvideo']['name']);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$videoFileType = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));

$query = "SELECT * FROM `products` WHERE product_id = '$product_id' ";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

if ($result->num_rows > 0) {

    $alert = 2;

} else {

    if (
        $imageFileType != 'png' && $imageFileType != 'jpg' && $imageFileType != 'jpeg' && $imageFileType != 'webp' ||  $videoFileType != 'mp4'
    ) {

        $alert = 3;
        echo 'Sorry , image  only JPG, PNG , webp and video only mp4  files are allowed.';
        $uploadOk = 0;

    } else {

        $image = $_FILES['myimage']['name'];
        $tempname = $_FILES['myimage']['tmp_name'];
        $folder = './all_images/' . $image;

        // video submit---------------

        $video = $_FILES['myvideo']['name'];
        $tempname2 = $_FILES['myvideo']['tmp_name'];
        $folder2 = './all_videos/' . $video;

        if (move_uploaded_file($tempname, $folder)) {
            echo '<h3> Image uploaded successfully!</h3>';
        } else {
            echo '<h3> Failed to upload image!</h3>';
        }

        if (move_uploaded_file($tempname2, $folder2)) {
            echo '<h3> video uploaded successfully!</h3>';
        } else {
            echo '<h3> Failed to upload image!</h3>';
        }

        $sql = "INSERT INTO `products`(`product_id`, `seller`, `catg`, `mrp`, `title`, `discount`, `price`, `rating`,`image`, `video`, `p_link`,`product_url`) VALUES ('$product_id','$seller','$catg','$mrp','$title','$discount','$price','$rating','$image','$video','$product_link','$product_url')";

        if ($conn->query($sql) == TRUE) {

            echo 'New record created successfully';

            $alert = 1;

        } else {

            echo 'Error: ' . $sql . '<br>' . $conn->error;

            $alert = 0;

            exit;

        }

    }
}

header('Location:insert.php?alert=' . $alert . '');
exit;