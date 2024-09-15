<?php

error_reporting(0);

include ('connection2.php');
$search = $_POST["query"];



 if($search != null)
 {

    $query = "SELECT * FROM `products` WHERE title LIKE '%{$search}%' OR seller LIKE '%{$search}%' OR product_id LIKE '%{$search}%'  ";
 }
 else{

    $query = "SELECT * FROM `products` ";

 }




// FETCHING DATA FROM DATABASE 
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // OUTPUT DATA OF EACH ROW 
    while ($row = $result->fetch_assoc()) {

        $catg = strtoupper($row["catg"]);


       $data = '<tr >
       <td> <img src="all_images/'.$row["image"].'" alt="" width="50px;" height="60px;" style=" border-radius: 3px; "> </td>
           <td style=" text-align:center;">'.$row["product_id"].'</td>
           <td style="  max-width: 150px;overflow: hidden; text-align:center; text-overflow: ellipsis;white-space: nowrap;">'. $row["title"].'</td>
          
           <td style=" max-width: 100px; text-align:center; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">'. $row["price"].'</td>
           <td style=" max-width: 100px; text-align:center; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">'. $row["seller"].'</td>
           <td style=" max-width: 100px; text-align:center; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">'. $row["discount"].'</td>
           <td style=" max-width: 100px; text-align:center; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">'. $row["rating"]. '</td>
           <td style=" max-width: 100px;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">'.$row["status"].'</td>
           <td style=" max-width: 100px; text-align:center; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;" >'. $row["catg"] .'</td>
           
           <td style=" max-width: 100px; text-align:center; overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">'. $row["video"] .' </td>
           <td><div class="btn-group dropstart"><button type="button"  class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Action</button><ul class="dropdown-menu" style=" z-index: 5000; "><li>
            
           <button class="dropdown-item" type="button" name="'.$row["product_id"].'"  onclick="edit_data(this)"  id="edit" data-bs-toggle="modal" data-bs-target="#exampleModal1">Edit</button></li>
           <li>

           <button class="dropdown-item" type="button" name="'.$row["product_id"].'" onclick="delate_data(this)" id="delate"  data-bs-toggle="modal" data-bs-target="#exampleModal">Delate</button></li>
               
               </ul></div></td>
           

       </tr>';

       echo $data;


        
    }
} else {
    echo "0 results";
}

$conn->close();

