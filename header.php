<!-- ---------------------------------------header--------------------------------------------------- -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rewaaz - Best Brands & Best Quality & Best Price</title>


  <!-- ------------------------------------------------------------------------------- -->
  <meta name="google-adsense-account" content="ca-pub-1512397286671544">


  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-ER78CM3Q1Z"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-ER78CM3Q1Z');
  </script>


  <!-- ---------------------------------------------------------------------------------- -->


  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/logo.ico" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">
  <!-- <link rel="stylesheet" href="{{ url_for('static', filename='style.css')}}"> -->



  <!--
    - google font link
  -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
 -->

</head>

<body>


  <div class="overlay" data-overlay></div>

  <!--
    - MODAL
  -->

  <div class="modal" style=" display: none; " data-modal>

    <div class="modal-close-overlay" data-modal-overlay></div>

    <div style=" display: none; " class="modal-content">

      <button class="modal-close-btn" data-modal-close>
        <ion-icon name="close-outline"></ion-icon>
      </button>

      <div class="newsletter-img">
        <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">
      </div>

      <div class="newsletter">

        <form action="#">

          <div class="newsletter-header">

            <h3 class="newsletter-title">Subscribe Newsletter.</h3>

            <p class="newsletter-desc">
              Subscribe the <b>Anon</b> to get latest products and discount update.
            </p>

          </div>

          <input type="email" name="email" class="email-field" placeholder="Email Address" required>

          <button type="submit" class="btn-newsletter">Subscribe</button>

        </form>

      </div>

    </div>

  </div>





  <!--
    - NOTIFICATION TOAST
  -->

  <div class="notification-toast" style=" display: none; " data-toast>

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="./assets/images/products/jewellery-1.jpg" alt="Rose Gold Earrings" width="80" height="70">
    </div>

    <div class="toast-detail">

      <p class="toast-message">
        Someone in new just bought
      </p>

      <p class="toast-title">
        Rose Gold Earrings
      </p>

      <p class="toast-meta">
        <time datetime="PT2M">2 Minutes</time> ago
      </p>

    </div>

  </div>





  <!--
    - HEADER
  -->

  <header>



    <div class="header-main">

      <div class="container">

        <a href="index.php" class="header-logo">
          <img src="rewaaz.jpeg" alt="Anon's logo" width="130" height="50">
        </a>

        <div class="header-search-container">

          <form action="index.php" method="post">

            <input type="text" name="search_item" id="search_query" class="search-field"
              placeholder="Enter your product name...">

            <button type=" submit " class="search-btn">
              <ion-icon name="search-outline"></ion-icon>
            </button>

          </form>
        </div>

        <div class="header-user-actions">

          <button class="action-btn">
            <a href="./login/login.php"><ion-icon style=" color: black; " name="person-outline"></ion-icon></a>

          </button>

          <button class="action-btn">

            <a style=" color: black; " href="wishlist.php"><ion-icon name="heart-outline"></ion-icon></a>


            <span class="count">0</span>
          </button>



        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">



          <li class="menu-category">
            <a href="index.php" class="menu-title">Home</a>
          </li>



          <!-- <a href="#" class="menu-title">Categories</a>

  <div class="dropdown-panel">

    <ul class="dropdown-panel-list">

      <li class="menu-title">
        <a href="#">Women Ethnic</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Desktop</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Laptop</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Camera</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Tablet</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Headphone</a>
      </li>

      <li class="panel-list-item">
        <a href="#">
          <img src="./assets/images/electronics-banner-1.jpg" alt="headphone collection" width="250"
            height="119">
        </a>
      </li>

    </ul>

    <ul class="dropdown-panel-list">

      <li class="menu-title">
        <a href="#">Women Western</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Formal</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Casual</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Sports</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Jacket</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Sunglasses</a>
      </li>

      <li class="panel-list-item">
        <a href="#">
          <img src="./assets/images/mens-banner.jpg" alt="men's fashion" width="250" height="119">
        </a>
      </li>

    </ul>

    <ul class="dropdown-panel-list">

      <li class="menu-title">
        <a href="#">Footwear</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Formal</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Casual</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Perfume</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Cosmetics</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Bags</a>
      </li>

      <li class="panel-list-item">
        <a href="#">
          <img src="./assets/images/womens-banner.jpg" alt="women's fashion" width="250" height="119">
        </a>
      </li>

    </ul>

    <ul class="dropdown-panel-list">

      <li class="menu-title">
        <a href="#">Jewellery</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Smart Watch</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Smart TV</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Keyboard</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Mouse</a>
      </li>

      <li class="panel-list-item">
        <a href="#">Microphone</a>
      </li>

      <li class="panel-list-item">
        <a href="#">
          <img src="./assets/images/electronics-banner-2.jpg" alt="mouse collection" width="250" height="119">
        </a>
      </li>

    </ul>

  </div> -->
          </li>

          <li class="menu-category">
            <a href='catg_page.php?catg=Kurta sets' class="menu-title">Kurta Sets</a>


          </li>



          <li class="menu-category">
            <a href="catg_page.php?catg=Saree" class="menu-title">Sarees</a>



          </li>

          <li class="menu-category">
            <a href="catg_page.php?catg=Dress" class="menu-title"> Dress</a>



          </li>







          <li class="menu-category">
            <a href="catg_page.php?catg=Lahnga" class="menu-title">Lahnga</a>
          </li>



          <li class="menu-category">
            <a href="catg_page.php?catg=Anarkali Salwar Suit" class="menu-title">Anarkali Salwar Suit</a>


          </li>

          <li class="menu-category">
            <a href="catg_page.php?catg=Co-Ord-sets" class="menu-title">Co-Ord-sets</a>
          </li>



          <li class="menu-category">
            <a href="#" class="menu-title">Hot Offers</a>
          </li>

        </ul>

      </div>

    </nav>

    <div class="mobile-bottom-navigation">

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="menu-outline"></ion-icon>
      </button>




      <a href="index.php"><button class="action-btn">
          <ion-icon name="home-outline"></ion-icon>

        </button>
      </a>
      <button class="action-btn">

        <a style=" color: black; " href="wishlist.php"><ion-icon name="heart-outline"></ion-icon></a>


        <span class="count">0</span>
      </button>

      <button class="action-btn" data-mobile-menu-open-btn>
        <ion-icon name="grid-outline"></ion-icon>
      </button>

    </div>

    <nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu>

      <div class="menu-top">
        <h2 class="menu-title">Menu</h2>

        <button class="menu-close-btn" data-mobile-menu-close-btn>
          <ion-icon name="close-outline"></ion-icon>
        </button>
      </div>

      <ul class="mobile-menu-category-list">

        <li class="menu-category">
          <a href="#" class="menu-title">Home</a>
        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
            <a href="catg_page.php?catg=Kurta sets">
              <p class="menu-title">Kurta Sets</p>
            </a>



          </button>

          <ul class="submenu-category-list" data-accordion>



          </ul>

        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>


            <a href="catg_page.php?catg=Saree">
              <p class="menu-title">Saares</p>
            </a>


          </button>



        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>

            <a href="catg_page.php?catg=Dress">
              <p class="menu-title">Dress</p>
            </a>


          </button>



        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>

            <a href="catg_page.php?catg=Lahnga">
              <p class="menu-title">Lahnga</p>
            </a>


          </button>



        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>


            <a href="catg_page.php?catg=Co-Ord Sets">
              <p class="menu-title">Co-Ord Sets</p>
            </a>


          </button>



        </li>

        <li class="menu-category">

          <button class="accordion-menu" data-accordion-btn>
           

            <a href="catg_page.php?catg=Anarkali salwar suit">
              <p class="menu-title">Anarkali salwar suit</p>
            </a>


          </button>



        </li>



        <li class="menu-category">
          <a href="#" class="menu-title">Hot Offers</a>
        </li>

      </ul>



    </nav>

  </header>