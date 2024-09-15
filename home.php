<?php

include ("header.php");
include ('connection.php');
?>


<!--
    - MAIN
  -->

<main>

  <!--
      - BANNER
    -->

  <!--
      - CATEGORY
    -->

  <!--
      - PRODUCT
    -->

  <div class="product-container">

    <div class="container">


      <!--
          - SIDEBAR
        -->

      <div class="sidebar  has-scrollbar" data-mobile-menu>

        <div class="sidebar-category">

          <div class="sidebar-top">
            <h2 class="sidebar-title">BRANDS</h2>



            <button class="sidebar-close-btn" data-mobile-menu-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>
          </div>

          <div class="showcase-wrapper">

            <div class="showcase-container">

              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img
                    src="https://rukminim2.flixcart.com/image/612/612/xif0q/kurta/l/g/m/s-jp001-pink-lhariya-kurta-areeh-original-imagqr82brhcrhxr.jpeg?q=70"
                    alt="baby fabric shoes" width="75" height="90" class="showcase-img">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">baby fabric shoes</h4>
                  </a>

                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>

                  <div class="price-box">
                    <del>$5.00</del>
                    <p class="price">$4.00</p>

                  </div>
                  <div class="price-box">

                    <p class="price">50% OFF</p>

                  </div>

                </div>

              </div>


              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img
                    src="https://rukminim2.flixcart.com/image/612/612/xif0q/kurta/a/k/f/l-na-1024-mintmarie-original-imagz4qqfnmhchux.jpeg?q=70"
                    alt="men's hoodies t-shirt" class="showcase-img" width="75" height="90">
                </a>

                <div class="showcase-content">

                  <a href="#">
                    <h4 class="showcase-title">men's hoodies t-shirt</h4>
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
                  <img
                    src="https://rukminim2.flixcart.com/image/612/612/kzzw5u80/kurta/t/n/x/xxl-shivani-purple-xxl-fantasy-fab-original-imagbvzkm5tfyryh.jpeg?q=70"
                    alt="girls t-shirt" class="showcase-img" width="75" height="90">
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
                  <img
                    src="https://rukminim2.flixcart.com/image/612/612/xif0q/kurta/t/9/z/xs-pw333-purshottam-wala-original-imagm8f2vfsgsdej.jpeg?q=70"
                    alt="woolen hat for men" class="showcase-img" width="75" height="90">
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
              <div class="showcase">

                <a href="#" class="showcase-img-box">
                  <img
                    src="https://rukminim2.flixcart.com/image/612/612/xif0q/kurta/l/g/m/s-jp001-pink-lhariya-kurta-areeh-original-imagqr82brhcrhxr.jpeg?q=70"
                    alt="woolen hat for men" class="showcase-img" width="75" height="90">
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

        <div class="product-showcase">

          <h3 class="showcase-heading">best sellers</h3>



        </div>

      </div>



      <div class="product-box">

        <!--
            - PRODUCT MINIMAL
          -->



        <!--
            - PRODUCT FEATURED
          -->


        <!--
            - PRODUCT GRID
          -->

        <div class="product-main" >

        

          <div class="product-grid">



            <?php


            // SQL QUERY 
            $query = "SELECT * FROM `products`;";

            // FETCHING DATA FROM DATABASE 
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
              // OUTPUT DATA OF EACH ROW 
              while ($row = $result->fetch_assoc()) {

                $catg = strtoupper($row["catg"]);


                ?>


                <div class="showcase">


                  <div class="showcase-banner">

                    <a href="product_page.php?product_id=<?php echo $row["product_id"] ?>"><img
                        src="dashboard/all_images/<?php echo $row["image"] ?>" alt="Mens Winter Leathers Jackets"
                        width="300" class="product-img default">
                      <img src="dashboard/all_images/<?php echo $row["image"] ?>" alt="Mens Winter Leathers Jackets"
                        width="300" class="product-img hover"></a>

                    <p class="showcase-badge"><?php echo $row["discount"] ?></p>


                    <div class="showcase-actions">

                    </div>

                  </div>
                </div>

                <?Php

              }
            } else {
              echo "0 results";
            }

            $conn->close();

            ?>





          </div>

        </div>
        

      </div>

    </div>

  </div>







  <!--
      - BLOG
    -->


</main>





<!--
    - FOOTER
  -->


<?php

include ("footer.php")

  ?>