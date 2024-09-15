<?php

include ('connection2.php');

$product_id = $_POST['product_id'];
$seller = $_POST['seller'];
$catg = $_POST['catg'];
$link = $_POST['link'];

$query = "SELECT * FROM `products` WHERE product_id ='$product_id'";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

if ($result->num_rows <= 0) {

      $alert = 2;

      echo 'data not exests';

} else {

      while ($row = $result->fetch_assoc()) {

            $old_image = $row['image'];
            $old_video = $row['video'];

      }

      $image = $_FILES['myimage']['name'];
      $video = $_FILES['myvideo']['name'];



      // //if image or video is not empty ------------------------------------------------------------------------------------


      if (empty($image) && empty($video)) {

            $image = $old_image;

            $video = $old_video;

            $sql ="UPDATE `products` SET `product_id`='$product_id',`seller`='$seller',`catg`='$catg',`link`='$link',`image`='$image',`video`='$video' WHERE product_id='$product_id'";

            if ($conn->query($sql) == TRUE) {

                  echo 'New record created successfully';
                  $alert = 1;

            } else {

                  echo 'Error: ' . $sql . '<br>' . $conn->error;

            }

      } else {

            if (!empty($image) && !empty($video)) {



                  $target_dir = 'all_images/';
                  $target_file = $target_dir . basename($_FILES['myimage']['name']);

                  $target_dir2 = 'all_videos/';
                  $target_file2 = $target_dir2 . basename($_FILES['myvideo']['name']);

                  $uploadOk = 1;
                  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                  $videoFileType = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));

                  if ($imageFileType != 'png' && $imageFileType != 'jpg' &&  $imageFileType != 'jpeg' && $imageFileType != 'webp' ||  $videoFileType != 'mp4') {

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

                        $sql = "UPDATE `products` SET `product_id`=' $product_id',`seller`='$seller',`catg`='$catg',`link`='$link',`image`='$image',`video`='$video' WHERE product_id='$product_id'";

                        if ($conn->query($sql) == TRUE) {

                              echo 'New record created successfully';
                              $alert = 1;

                        } else {

                              echo 'Error: ' . $sql . '<br>' . $conn->error;

                        }
                  }
            } else {
                  echo 'no image or video';
            }


      }

      //if video empty--------------------------------------------------

      if (!empty($image) && empty($video)) {

            echo '!empty($image) && empty($video)' . '<br>';

            $target_dir2 = 'all_images/';
            $target_file2 = $target_dir2 . basename($_FILES['myimage']['name']);

            $uploadOk = 1;

            $imageFileType = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));

            if ($imageFileType != 'png' && $imageFileType != 'jpg' && $imageFileType != 'jpeg' && $imageFileType != 'webp') {

                  echo 'Sorry , image  only JPG, PNG , webp  files are allowed.';
                  $alert = 3;

            } else {

                  $video = $old_video;

                  $image = $_FILES['myimage']['name'];
                  $tempname = $_FILES['myimage']['tmp_name'];
                  $folder = './all_images/' . $image;

                  if (move_uploaded_file($tempname, $folder)) {
                        echo '<h3> Image uploaded successfully!</h3>';
                  } else {
                        echo '<h3> Failed to upload image!</h3>';
                  }

                  $sql = "UPDATE `products` SET `product_id`=' $product_id',`seller`='$seller',`catg`='$catg',`link`='$link',`image`='$image',`video`='$video' WHERE product_id='$product_id'";

                  if ($conn->query($sql) == TRUE) {

                        echo 'New record created successfully';
                        $alert = 1;

                  } else {

                        echo 'Error: ' . $sql . '<br>' . $conn->error;

                  }
            }
      } else {

            echo 'no video';
      }

      //if image empty--------------------------------------------------

      if (empty($image) && !empty($video)) {



            $target_dir2 = 'all_videos/';
            $target_file2 = $target_dir2 . basename($_FILES['myvideo']['name']);

            $videoFileType = strtolower(pathinfo($target_file2, PATHINFO_EXTENSION));

            if ($videoFileType != 'mp4') {

                  $alert = 3;

                  echo 'Sorry , only mp4  files are allowed.';

            } else {

                  $image = $old_image;

                  $video = $_FILES['myvideo']['name'];
                  $tempname = $_FILES['myvideo']['tmp_name'];
                  $folder = './all_videos' . $video;

                  if (move_uploaded_file($tempname, $folder)) {
                        echo '<h3> video uploaded successfully!</h3>';
                  } else {
                        echo '<h3> Failed to upload video!</h3>';
                  }

                  $sql = "UPDATE `products` SET `product_id`=' $product_id',`seller`='$seller',`catg`='$catg',`link`='$link',`image`='$image',`video`='$video' WHERE product_id='$product_id'";

                  if ($conn->query($sql) == TRUE) {

                        echo 'New record created successfully';
                        $alert = 1;

                  } else {

                        echo 'Error: ' . $sql . '<br>' . $conn->error;

                  }
            }

      } else {

            echo 'no image';
      }
}


header('Location:products.php?alert=' . $alert . '');
exit;