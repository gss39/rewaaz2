<?php

session_start();
include ('header.php');
include ('connection.php');

error_reporting(0);




?>

<!--
- MAIN
-->

<main>

  <div class='product-container'>

    <div class='container'>

      <!--
- SIDEBAR
-->

      <div class='sidebar  has-scrollbar' data-mobile-menu>

        <div class='sidebar-category'>

          <div class='sidebar-top'>
            <h2 class='sidebar-title'>Filters :</h2>

            <button class='sidebar-close-btn' data-mobile-menu-close-btn>
              <ion-icon name='close-outline'></ion-icon>
            </button>
          </div>

          <ul class='sidebar-menu-category-list'>

            <div style=' margin-top: 10px; '>


            <div
                style='  margin-bottom : 10px;    border: 1px solid var(--cultured); padding: 10px; border-radius: 10px; '>

                <div style='  font-weight: bold; '> Gender :</div>

                <div style=' margin-top: 20px; margin: 5px; '>

                  <label class='form-check-label' for='female'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()" class='form-check-input' type='checkbox'
                        name='color' value='' id='female'></span> Female
                  </label>
                  <br>
                 

                </div>
              </div>


              <div
                style='  margin-bottom : 10px;    border: 1px solid var(--cultured); padding: 10px; border-radius: 10px; '>

                <div style='  font-weight: bold; '> Seller :</div>

                <div style=' margin-top: 20px; margin: 5px; '>

                  <label class='form-check-label' for='black'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()"  class='form-check-input' type='checkbox'
                        name='seller' value='' id='amazon'></span> Amazon
                  </label>
                  <br>
                    
                  <label class='form-check-label' for='red'>
                    <span> <input style=' width: 15px; height: 15px; '  onchange="filter()" class='form-check-input' type='checkbox'
                        name='seller' value='' id='flipkert'></span> flipkart
                  </label>
                  <br>
                  <label class='form-check-label' for='blue'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()"  class='form-check-input' type='checkbox'
                        name='seller' value='' id='meesho'></span> Meesho
                  </label>

                  

                </div>
              </div>


              

              <div
                style='  margin-bottom : 10px;    border: 1px solid var(--cultured); padding: 10px; border-radius: 10px; '>

                <div style='  font-weight: bold; '> Color :</div>

                <div style=' margin-top: 20px; margin: 5px; '>

                  <label class='form-check-label' for='Red'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()" class='form-check-input' type='checkbox'
                        name='color' value='' id='red'></span> Red
                  </label>
                  <br>
                  <label class='form-check-label' for='Black'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()" class='form-check-input' type='checkbox'
                        name='color' value='' id='Black'></span> Black
                  </label>
                  <br>
                  <label class='form-check-label' for='Yellow'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()" class='form-check-input' type='checkbox'
                        name='color' value='' id='Yellow'></span> Yellow
                  </label>

                  <br>
                  <label class='form-check-label' for='Yellow'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()" class='form-check-input' type='checkbox'
                        name='color' value='' id='white'></span> White
                  </label>


                </div>
              </div>


             


              <div
                style='  margin-bottom : 10px;    border: 1px solid var(--cultured); padding: 10px; border-radius: 10px; '>

                <div style='  font-weight: bold; '> Price :</div>

                <div style=' margin-top: 20px; margin: 5px; '>

                  <label class='form-check-label' for='upto1'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()" class='form-check-input' type='radio'
                        name='price' value='' id='500'></span> upto   &#x20b9;500
                  </label>
                  <br>

                  <label class='form-check-label' for='upto2'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()" class='form-check-input' type='radio'
                        name='price' value='' id='1000'></span>  under  &#x20b9;1,000  
                  </label>
                  <br>

                  <label class='form-check-label' for='upto2'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()" class='form-check-input' type='radio'
                        name='price' value='' id='1500'></span> under  &#x20b9;1,500
                  </label>
                  <br>
                  <label class='form-check-label' for='upto3'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()" class='form-check-input' type='radio'
                        name='price' value='' id='2500'></span> under  &#x20b9;2,500
                  </label>
                  <br>
                  <label class='form-check-label' for='upto2'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()" class='form-check-input' type='radio'
                        name='price' value='' id='3500'></span> under  &#x20b9;3,500
                  </label>
                  <br>
                  <label class='form-check-label' for='upto4'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()" class='form-check-input' type='radio'
                        name='price' value='' id='3500'></span> Over   &#x20b9;3,000
                  </label>

                </div>
              </div>

              <div
                style='  margin-bottom : 10px;    border: 1px solid var(--cultured); padding: 10px; border-radius: 10px; '>

                <div style='  font-weight: bold; '> Rating :</div>

                <div style=' margin-top: 20px; margin: 5px; '>

                  <label class='form-check-label' for='rating'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()" class='form-check-input' type='radio'
                        name='rating' value='' id='1'></span> <span>
                      <div class='showcase-rating'>

                        <ion-icon style='width:16px; height:17px;' name='star'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star-outline'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star-outline'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star-outline'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star-outline'></ion-icon>
                      </div>
                    </span>
                    <span style='font-size:14px;'> +</span>
                  </label>
                  <br>

                  <label class='form-check-label' for='rating1'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()" class='form-check-input' type='radio'
                        name='rating' value='' id='2'></span> <span>
                      <div class='showcase-rating'>

                        <ion-icon style='width:16px; height:17px;' name='star'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star-outline'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star-outline'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star-outline'></ion-icon>

                      </div>
                    </span>
                    <span style='font-size:14px;'> +</span>
                  </label>
                  <br>
                  <label class='form-check-label' for='rating2'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()" class='form-check-input' type='radio'
                        name='rating' value='' id='3'></span> <span>
                      <div class='showcase-rating'>

                        <ion-icon style='width:16px; height:17px;' name='star'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star-outline'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star-outline'></ion-icon>

                      </div>
                    </span>
                    <span style='font-size:12px;'> +</span>
                  </label>
                  <br>
                  <label class='form-check-label' for='rating3'>
                    <span> <input style=' width: 15px; height: 15px; ' onchange="filter()" class='form-check-input' type='radio'
                        name='rating' value='' id='4'></span> <span>
                      <div class='showcase-rating'>

                        <ion-icon style='width:16px; height:17px;' name='star'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star'></ion-icon>
                        <ion-icon style='width:16px; height:17px;' name='star-outline'></ion-icon>

                      </div>
                    </span>
                    <span style='font-size:14px;'> +</span>
                  </label>

                  <br>

                </div>
              </div>

            </div>

        </div>

        <div class='product-showcase'>

          <h3 class='showcase-heading'>best sellers</h3>

          <div class='showcase-wrapper'>

            <div class='showcase-container'>

              <div class='showcase'>

                <a href='#' class='showcase-img-box'>
                  <img src='./assets/images/products/1.jpg' alt='baby fabric shoes' width='75' height='75'
                    class='showcase-img'>
                </a>

                <div class='showcase-content'>

                  <a href='#'>
                    <h4 class='showcase-title'>baby fabric shoes</h4>
                  </a>

                  <div class='showcase-rating'>
                    <ion-icon name='star'></ion-icon>
                    <ion-icon name='star'></ion-icon>
                    <ion-icon name='star'></ion-icon>
                    <ion-icon name='star'></ion-icon>
                    <ion-icon name='star'></ion-icon>
                  </div>

                  <div class='price-box'>
                    <del>$5.00</del>
                    <p class='price'>$4.00</p>
                  </div>

                </div>

              </div>

              <div class='showcase'>

                <a href='#' class='showcase-img-box'>
                  <img src='./assets/images/products/2.jpg' alt="men's hoodies t-shirt" class='showcase-img' width='75'
                    height='75'>
                </a>

                <div class='showcase-content'>

                  <a href='#'>
                    <h4 class='showcase-title'>men's hoodies t-shirt</h4>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <del>$17.00</del>
                    <p class="price">$7.00</p>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/3.jpg" alt="girls t-shirt" class="showcase-img" width="75"
                    height="75">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">girls t-shirt</h4>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-half-outline"></ion-icon>
                  </div>

                  <div class="price-box">
                    <del>$5.00</del>
                    <p class="price">$3.00</p>
                  </div>

                </div>

              </div>

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img src="./assets/images/products/4.jpg" alt="woolen hat for men" class="showcase-img" width="75"
                    height="75">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">woolen hat for men</h4>
                  </a>
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <div class="price-box">
                    <del>$15.00</del>
                    <p class="price">$12.00</p>
                  </div>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>



      <div class="product-box">

        <!--
            - PRODUCT GRID
          -->

          <div class="product-main">



<div id="search_products" class="product-grid">


    <?php


    $search = $_POST["search_item"];

    $_SESSION['search_query'] = $search;

    $limit = 20;


    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;

    }
    $offset = ($page - 1) * $limit;


    // OR  title LIKE '%{$search}%'  OR  catg LIKE '%{$search}%' 
    
    // 
    // SQL QUERY 
    $query = "SELECT * FROM `products` WHERE title LIKE '%{$search}%' LIMIT $limit  OFFSET $offset ";


    // FETCHING DATA FROM DATABASE 
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // OUTPUT DATA OF EACH ROW 
        while ($row = $result->fetch_assoc()) {

            $catg = strtoupper($row["catg"]);

            // $x = $row["sizes"];
            // $y = explode("!", $x);
    

            ?>

            <div class="showcase">

                <div class="showcase-banner">

                    <a href="product_page.php?product_id=<?php echo $row["product_id"] ?>"><img
                            src="https://rewaaz2images.s3.amazonaws.com/<?php echo $row["image"] ?>"
                            alt="Mens Winter Leathers Jackets" width="300" loading="lazy" id="display_image"
                            class="product-img default">
                    </a>

                    <p class="showcase-badge">-<?php echo $row["discount"] ?>%</p>


                    <div class="showcase-actions">

                    </div>

                </div>
            </div>

            <?php
        }
    } else {
        echo "0 results";
    }



    ?>


</div>







</div>

      </div>

    </div>

  </div>


</main>





<!--
    - FOOTER
  -->

<?php

include ('footer.php');

?>