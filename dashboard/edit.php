<?php
include ('connection2.php');
$product_id = $_POST['product_id'];


$query = "SELECT * FROM `products` WHERE product_id='$product_id'";


  // FETCHING DATA FROM DATABASE 
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    // OUTPUT DATA OF EACH ROW 
    while ($row = $result->fetch_assoc()) {

     

      $data ='<form enctype="multipart/form-data" action="update.php" id= "myform" class="row g-3"  method="POST" 
      style=" margin-top: 10px;  border-radius: 10px; ">
      
      <div class="col-md-6">
        <label for="product_id" class="form-label">Product ID :</label>
        <input type="text" name="product_id" value="'.$row["product_id"].'" class="form-control" required >
      </div>
      
      
      <div class="col-md-6">
        <label for="seller" class="form-label">Seller :</label>
        <select id="seller" name="seller" required class="form-select">
          <option selected value="'.$row["seller"].'">'.$row["seller"].'</option>
          <option>Amazon</option>
          <option>Flipkert</option>
          <option>Meesho</option>
      
      
        </select>
      </div>
      
      <div class="col-md-12">
        <label for="catg" class="form-label">Categories:</label>
        <select id="catg" name="catg" required class="form-select">
      
          <option selected value ="'.$row["catg"].'">'.$row["catg"].'</option>
          <option style="font-weight: bold;">Women Ethnic : </option>
          <option>Sarees</option>
          <option>Kurtis</option>
          <option>Kurta Sets</option>
          <option>Suits</option>
          <option>Lehanga</option>
          <option>Gown</option>
          <option>Dupattas</option>
          <option>Blouses</option>
          <option style="font-weight: bold;">Women Western : </option>
          <option>Tops</option>
          <option>Dresses</option>
          <option>Jumpsuits</option>
          <option>Skirts</option>
          <option>Jeans</option>
          <option>Palazzos</option>
          <option>Jeggings</option>
          <option style="font-weight: bold;">Footwears : </option>
          <option>Flats</option>
          <option>Bellies</option>
          <option>Juttis</option>
          <option style="font-weight: bold;">Beauty : </option>
          <option>Face</option>
          <option>Eyes</option>
          <option>Lips</option>
          <option>Nails</option>
          <option style="font-weight: bold;">Jewellery : </option>
          <option>Jewellery</option>
      
      
      
        </select>
      </div>
      
      
      
      <div class="col-md-6">
        <label for="image" class="form-label">Image :</label><span><button type="button" style=" background-color:white; color:green; border-color:white;" name="'.$row["image"].'" onclick="my_image(this)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
        (show image)
      </button></span>
        <input type="file" value="'.$row["image"].'" accept="image/*" name="myimage"  class="form-control" id="myimage"></input>
      </div>
      
      <div class="col-md-6">
        <label for="video" class="form-label">Video :</label> <span><button type="button" style=" background-color:white; color:green; border-color:white;" name="'.$row["video"].'" onclick="my_video(this)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
        (show video)
      </button></span>
        <input type="file" value="'.$row["video"].'" accept="video/*" name="myvideo"  class="form-control" id="myvideo"></input>
      </div>
      
      
      <div class="col-md-12">
        <label for="link" class="form-label">Link :</label>
        <input type="text" value="'.$row["p_link"].'" name="link" required class="form-control" id="link">
      </div>
      
      <div class="col-12">
        <button type="submit" name="submit" class="btn btn-primary">Update</button>
        
      </div>
      </form>';

      echo $data;
   
    }
  }
 else {
  echo "0 results";
}

$conn->close();



