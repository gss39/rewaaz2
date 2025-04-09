<!-- ---------------------------------------header--------------------------------------------------- -->

<?php
session_start();
include("header.php");
include("connection.php");



?>


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

                        <?php


                        $query = "SELECT * FROM `products`   ORDER BY RAND() LIMIT 5";


                        // FETCHING DATA FROM DATABASE 
                        $result = $conn->query($query);

                        if ($result->num_rows > 0) {
                            // OUTPUT DATA OF EACH ROW 
                            while ($row = $result->fetch_assoc()) {

                                $catg = strtoupper($row["catg"]);

                                ?>


                                <div class="showcase">

                                    <a href="product_page.php?product_id=<?php echo $row["product_id"] ?>"
                                        class="showcase-img-box">
                                        <img src="https://s3.eu-north-1.amazonaws.com/rewaaz.image/<?php echo $row["image"] ?>"
                                            alt="baby fabric shoes" width="75" height="100" class="showcase-img">
                                    </a>

                                    <div class="showcase-content">

                                        <a href="product_page.php?product_id=<?php echo $row["product_id"] ?>">
                                            <h4 class="showcase-title"><?php echo $row["title"] ?></h4>
                                        </a>

                                        <div class="showcase-rating">
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                            <ion-icon name="star"></ion-icon>
                                        </div>

                                        <div class="price-box">
                                            <del>&#8377;<?php echo $row["mrp"] ?></del>
                                            <p class="price">&#8377;<?php echo $row["price"] ?></p>

                                        </div>
                                        <div class="price-box">
                                            <?php

                                            if ($row["discount"] != null && $row["discount"] != "NA") {

                                                echo '<p class="price">' . $row["discount"] . ' OFF</p>';

                                            } else {


                                                echo '<p class="price">Fresh</p>';


                                            }
                                            ?>



                                        </div>

                                    </div>

                                </div>

                                <?Php

                            }
                        } else {
                            echo "0 results";
                        }



                        ?>

                    </div>

                </div>

            </div>

            <div class="product-showcase">

                <h3 class="showcase-heading">best sellers</h3>



            </div>

        </div>



        <div class="product-box">



            <div class="product-featured">


                <div class="showcase-wrapper has-scrollbar">

                    <div class="showcase-container">


                        <?php


                        $product_id = $_GET['product_id'];


                        // SQL QUERY 
                        $query = "SELECT * FROM `products` WHERE product_id = '$product_id' ;";

                        // FETCHING DATA FROM DATABASE 
                        $result = $conn->query($query);

                        if ($result->num_rows > 0) {
                            // OUTPUT DATA OF EACH ROW 
                            while ($row = $result->fetch_assoc()) {

                                $catg = strtoupper($row["catg"]);





                                ?>
                                <title><?php echo $row["title_keywords"] ?></title>

                                <div class="showcase">


                                    <div class="showcase-banner">
                                        <video
                                            src="https://s3.eu-north-1.amazonaws.com/rewaaz.video/<?php echo $row["video"] ?>"
                                            width="300px" height="510px" autoplay="autoplay" controls
                                            alt="shampoo, conditioner & facewash packs" class="showcase-img"></video>
                                    </div>




                                    <div class="showcase-content">




                                        <div
                                            style="border:1px solid hsl(0deg 0% 82.68%);padding:10px; margin-bottom:10px; border-radius:10px;">

                                            <div>

                                                <span>
                                                    <div class="showcase-rating">
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star"></ion-icon>
                                                        <ion-icon name="star-outline"></ion-icon>
                                                        <ion-icon name="star-outline"></ion-icon>
                                                    </div>
                                                </span>
                                                <span
                                                    style=" border: 1px solid white; font-size: 12px; vertical-align:center; padding-left: 3px; padding-right: 3px; border-radius: 5px; color:white; background-color:green; margin-top: 0px; ">

                                                    <?php echo $row["rating"] ?>
                                                </span>

                                            </div style=" display:flex; ">
                                            <a href="#">
                                                <h3 class="showcase-title">

                                                    <?php echo $row["title"] ?>

                                                </h3>
                                            </a>



                                            <div style="margin-top: 10px; margin-bottom:10px;" class="price-box">
                                                <p class="price">
                                                    &#8377;<?php echo $row["price"] ?>


                                                </p>

                                                <del>
                                                    <?php echo $row["mrp"] ?>
                                                </del>
                                            </div>
                                            <div
                                                style=" border: 1px solid green; font-size: 13px; vertical-align:center; padding: 5px;  border-radius: 5px; color:white; color: black; text-align: center;  width: 90px;  margin-top: 0px; ">



                                                <b>

                                                    <?php

                                                    if ($row["discount"] != null && $row["discount"] != 'NA') {

                                                        echo '' . $row["discount"] . ' OFF';
                                                    } else {

                                                        echo 'Fresh';

                                                    }


                                                    ?>

                                                </b>
                                            </div>

                                        </div>



                                        <div id="saction"
                                            style="border:1px solid hsl(0deg 0% 82.68%);padding:10px; margin-bottom:10px; border-radius:5px;">
                                            <div></div>
                                            Size & Colors :
                                            <br>

                                            <select
                                                style="border:1px solid var(--cultured);padding:10px;  display:inline; margin-top:10px; border-radius:10px;"
                                                name="size" id="size">


                                                <option value="size"> <b> Size </b> </option>



                                                <?Php

                                                $si = $row["sizes"];
                                                $all_size = explode("!", $si);



                                                $size_len = count($all_size);


                                                for ($i = 0; $i < $size_len; $i++) {

                                                    $sizes = $all_size[$i];

                                                    ?>

                                                    <option id="xs" value="XS"><?php echo $sizes ?></option>

                                                    <?php
                                                }
                                                ?>

                                            </select>

                                            <script>

                                            </script>




                                            <select
                                                style="border:1px solid var(--cultured);padding:10px; display:inline; margin-left:10px; margin-top:10px; border-radius:10px;"
                                                name="qty" id="qty">



                                                <option value="qty"><b>Colors</b> </option>

                                                <?Php



                                                $col = $row["colors"];
                                                $all_color = explode("!", $col);


                                                $color_len = count($all_color);

                                                for ($i = 0; $i < $color_len; $i++) {

                                                    $color = $all_color[$i];

                                                    ?>

                                                    <option id="xs" value="XS"><?php echo $color ?></option>

                                                    <?php
                                                }
                                                ?>




                                            </select>



                                        </div>

                                        <button type="button" onclick='my_wishlist()' style="display:inline;" name="submit"
                                            class="add-cart-btn">add to
                                            Wishlist</button>



                                        <?php


                                        $product_id = $_GET['product_id'];


                                        // SQL QUERY 
                                        $query = "SELECT * FROM `products` WHERE product_id = '$product_id' ;";

                                        // FETCHING DATA FROM DATABASE 
                                        $result = $conn->query($query);

                                        if ($result->num_rows > 0) {
                                            // OUTPUT DATA OF EACH ROW 
                                            while ($row = $result->fetch_assoc()) {

                                                $catg = strtoupper($row["catg"]);




                                                ?>


                                                <button type="button" style="display:inline; margin-left:10px;" class="add-cart-btn"> <a
                                                        style=" color: white; " href="<?php echo $row["p_link"] ?>">
                                                        Amazon</a></button>

                                                <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }


                                        ?>
                                        </form>



                                        <div
                                            style="border:1px solid var(--cultured);padding:5px;  margin-top:5px; border-radius:10px;">

                                            <div style="margin-top:5px;"> Similar Products :</div>

                                            <div style="white-space: nowrap; overflow: scroll; scrollbar-width: none " id="">



                                                <?php


                                                $query = "SELECT * FROM `products`  ORDER BY RAND() LIMIT 6";


                                                // FETCHING DATA FROM DATABASE 
                                                $result = $conn->query($query);

                                                if ($result->num_rows > 0) {
                                                    // OUTPUT DATA OF EACH ROW 
                                                    while ($row = $result->fetch_assoc()) {

                                                        $catg = strtoupper($row["catg"]);

                                                        ?>

                                                        <a href="product_page.php?product_id=<?php echo $row["product_id"] ?>"
                                                            style="display:inline;">




                                                            <img style="margin-top:10px; padding-left:10px; border-radius: 5px; display:inline;"
                                                                src="https://s3.eu-north-1.amazonaws.com/rewaaz.image/<?php echo $row["image"] ?>"
                                                                width="110px" height="140px"></img>
                                                        </a>
                                                        <?Php

                                                    }
                                                } else {
                                                    echo "0 results";
                                                }



                                                ?>

                                            </div>

                                        </div>

                                        </script>
                                    </div>

                                </div>

                                <?Php

                            }
                        } else {
                            echo "0 results";
                        }



                        ?>

                        <!-- ---------------------------------------CART SUBMIT---------------------------------------------------- -->



                    </div>



                </div>

            </div>


            <div class="product-box">

                <!--
            - PRODUCT GRID
          -->

                <div class="product-main">



                    <div class="product-grid">

                        <?php


                        $query = "SELECT * FROM `products` ORDER BY RAND() LIMIT 20 ";


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
                                                src="https://s3.eu-north-1.amazonaws.com/rewaaz.image/<?php echo $row["image"] ?>"
                                                alt="Mens Winter Leathers Jackets" width="300" loading="lazy" id="display_image"
                                                class="product-img default">
                                        </a>


                                        <?php

                                        if ($row["discount"] != null && $row["discount"] != "NA") {

                                            echo '<p class="showcase-badge">' . $row["discount"] . '</p>';

                                        }

                                        ?>




                                        <div class="showcase-actions">

                                        </div>

                                    </div>
                                </div>

                                <?php
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

</div>


<!-- product add in wishlist -->

<script>

    function my_wishlist() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                alert(xhttp.responseText)

            }
        }

        xhttp.open('POST', 'add_wishlist.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('product_id=<?php echo $_GET['product_id'] ?>&email=<?php echo $_SESSION["login_email"] ?>');


    }
</script>




<!--
      - BLOG
    -->


</main>

<?php
include("footer.php");
?>