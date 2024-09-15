<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anon - eCommerce Website</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style-prefix.css">

  <link rel="stylesheet" href="./cart.css">

  <!--
    - google font link
  -->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <!-- bottstrap for cart  -->

  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
    integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


  <style>


body{
      font-family: "Poppins", sans-serif;
    }
    
    .avatar-lg {
      height: 7rem;
      width: 5.5rem;
    }

    .font-size-18 {
      font-size: 18px !important;
    }

    .text-truncate {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }

    a {
      text-decoration: none !important;
    }

    .w-xl {
      min-width: 160px;
    }

    .card {
      margin-bottom: 24px;
      -webkit-box-shadow: 0 2px 3px #e4e8f0;
      box-shadow: 0 2px 3px #e4e8f0;
      margin-top: 20px;
    }

    .card {
      position: relative;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
      -ms-flex-direction: column;
      flex-direction: column;
      min-width: 0;
      word-wrap: break-word;
      background-color: #fff;
      background-clip: border-box;
      border: 1px solid #eff0f2;
      border-radius: 1rem;
    }

    .card-header {

      border: none;
    }
  </style>

</head>

<body style=" ">


  <header>



    <div class="header-main">


      <div class="container">

        <a href="#" class="header-logo">
          <img src="./assets/images/logo/logo.svg" alt="Anon's logo" width="120" height="36">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
            <ion-icon name="search-outline"></ion-icon>
          </button>

        </div>

        <div class="header-user-actions">

          <button class="action-btn">
            <ion-icon name="person-outline"></ion-icon>
          </button>




        </div>

      </div>

    </div>
    </div>

  </header>



  <main>



    <div class="container">
    
      <nav
          style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;); margin-top:20px; margin-bottom:0px;"
          aria-label="breadcrumb">
          <ol class="breadcrumb">
        
            <li class="breadcrumb-item"><a href="#">Cart</a></li>
            <li class="breadcrumb-item active" aria-current="page">shipping</li>
            <li class="breadcrumb-item active" aria-current="page">Payment</li>
          </ol>
        </nav>
      <div class="row">
        <div class="col-xl-8">
          <div class="card border shadow-none">
            <div class="card-body">

              <div class="d-flex align-items-start border-bottom pb-3">
                <div class="me-4">
                  <img src="image/images.jpg" alt="" class="avatar-lg rounded">
                </div>
                <div class="flex-grow-1 align-self-center overflow-hidden">
                  <div>
                    <h5 class="text-truncate font-size-18"><a href="#" style=" font-size: 16px; "
                        class="text-dark ">Waterproof Mobile Phone </a></h5>
                    <p class="text-muted mb-0">
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star-half text-warning"></i>
                    </p>
                    <p style=" font-size: 16px; " class="mb-0 mt-1">price : <span style=" margin-left: 15px; "
                        class="fw-medium">$350</span></p>
                    <p style=" font-size: 16px; " class="mb-0 mt-1">Quontity : <span style=" margin-left: 15px; "
                        class="fw-medium">2</span></p>
                        

                  </div>
                </div>
                <div class="flex-shrink-0 ms-2">
                  <ul class="list-inline mb-0 font-size-16">
                    <li class="list-inline-item">
                      <a href="#" class="text-muted px-1">
                        <i class="mdi mdi-trash-can-outline"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="text-muted px-1">
                        <i class="mdi mdi-heart-outline"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div>
                <div class="row">

                  <div class="col-md-3">
                    <div class="mt-3">
                      <p style=" font-size: 16px; " class="mb-0 mt-1">Subtotal : <span style=" margin-left: 15px; "
                          class="fw-medium">$700.00</span></p>

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- end card -->

          <div class="card border shadow-none">
            <div class="card-body">

              <div class="d-flex align-items-start border-bottom pb-3">
                <div class="me-4">
                  <img src="image/images.jpg" alt="" class="avatar-lg rounded">
                </div>
                <div class="flex-grow-1 align-self-center overflow-hidden">
                  <div>
                    <h5 class="text-truncate font-size-18"><a href="#" style=" font-size: 16px; "
                        class="text-dark ">Waterproof Mobile Phone </a></h5>
                    <p class="text-muted mb-0">
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star-half text-warning"></i>
                    </p>
                    <p style=" font-size: 16px; " class="mb-0 mt-1">price : <span style=" margin-left: 15px; "
                        class="fw-medium">$350</span></p>
                    <p style=" font-size: 16px; " class="mb-0 mt-1">Quontity : <span style=" margin-left: 15px; "
                        class="fw-medium">2</span></p>

                  </div>
                </div>
                <div class="flex-shrink-0 ms-2">
                  <ul class="list-inline mb-0 font-size-16">
                    <li class="list-inline-item">
                      <a href="#" class="text-muted px-1">
                        <i class="mdi mdi-trash-can-outline"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="text-muted px-1">
                        <i class="mdi mdi-heart-outline"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div>
                <div class="row">

                  <div class="col-md-3">
                    <div class="mt-3">
                      <p style=" font-size: 16px; " class="mb-0 mt-1">Subtotal : <span style=" margin-left: 15px; "
                          class="fw-medium">$700.00</span></p>

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- end card -->

          <div class="card border shadow-none">
            <div class="card-body">

              <div class="d-flex align-items-start border-bottom pb-3">
                <div class="me-4">
                  <img src="image/images.jpg" alt="" class="avatar-lg rounded">
                </div>
                <div class="flex-grow-1 align-self-center overflow-hidden">
                  <div>
                    <h5 class="text-truncate font-size-18"><a href="#" style=" font-size: 16px; "
                        class="text-dark ">Waterproof Mobile Phone </a></h5>
                    <p class="text-muted mb-0">
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star text-warning"></i>
                      <i class="bx bxs-star-half text-warning"></i>
                    </p>
                    <p style=" font-size: 16px; " class="mb-0 mt-1">price : <span style=" margin-left: 15px; "
                        class="fw-medium">$350</span></p>
                    <p style=" font-size: 16px; " class="mb-0 mt-1">Quontity : <span style=" margin-left: 15px; "
                        class="fw-medium">2</span></p>

                  </div>
                </div>
                <div class="flex-shrink-0 ms-2">
                  <ul class="list-inline mb-0 font-size-16">
                    <li class="list-inline-item">
                      <a href="#" class="text-muted px-1">
                        <i class="mdi mdi-trash-can-outline"></i>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#" class="text-muted px-1">
                        <i class="mdi mdi-heart-outline"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>

              <div>
                <div class="row">

                  <div class="col-md-3">
                    <div class="mt-3">
                      <p style=" font-size: 16px; " class="mb-0 mt-1">Subtotal : <span style=" margin-left: 15px; "
                          class="fw-medium">$700.00</span></p>

                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <!-- end card -->

        </div>

        <div class="col-sm-4">
          <div class="card" id="cart_sidebar" style=" padding: 15px; ">
            <div class="card-header"
              style=" font-weight: 500; background-color:white; font-size:20px; text-align: left; ">
              Summary :
            </div>
            <ul style=" margin-top: 10px; margin-bottom: 20px;  " class="list-group list-group-flush">
              <select class="form-select" aria-label="Default select example">
                <option style=" text-align: left; font-size: 15px; ">Cash on delivery</option>
                <option style=" text-align: left; font-size: 15px;" value="1">Card</option>
                <option style=" text-align: left; font-size: 15px;" value="2">Upi</option>

              </select>
              <li class="list-group-item"
                style=" text-align: left; margin-top:10px; border-bottom: none; font-weight: 500; ">Items subtotal :
                <span style=" float: right; ">$691</span></li>
              <li class="list-group-item" style=" text-align: left;  border-bottom: none; font-weight: 500;  ">Discount
                : <span style=" float: right; ">$59</span></li>
              <li class="list-group-item" style=" text-align: left;  border-bottom: none; font-weight: 500;  ">Tax :
                <span style=" float: right; ">$126.20</span></li>
              <li class="list-group-item" style=" text-align: left;  border-bottom: none; font-weight: 500;  ">Subtotal
                : <span style=" float: right; ">$665</span></li>
              <li class="list-group-item" style=" text-align: left;  border-bottom: none; font-weight: 500;  ">Shipping
                Cost : <span style=" float: right; ">$30</span></li>



              <div class="input-group mb-3" style=" margin-top: 10px; ">
                <input type="text" class="form-control" placeholder="Voucher" aria-label="Recipient's username"
                  aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Apply</button>
              </div>
              <li class="list-group-item"
                style=" text-align: left; font-size: 20px;  border-bottom: none; font-weight: 500; ">Total : <span
                  style=" float: right; ">$695.20</span></li>
            </ul>

            <div class="d-grid gap-2">
              <button class="btn btn-primary" style="font-weight: 500; " type="button"><a style=" color: white; "
                  href="shipping_info.php">proceed to chack out </a> </button>

            </div>
            <!-- end row -->

          </div>

  </main>

 <!--
    - FOOTER
  -->

  <footer style=" margin-top: 50px; ">



    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-lisst">

          <li class="footer-nav-item">
            <h2 class="nav-title">Popular Categories</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Fashion</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Electronic</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Cosmetic</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Health</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Watches</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Products</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Our Company</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Delivery</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Legal Notice</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Terms and conditions</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">About us</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Secure payment</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>

          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              419 State 414 Rte
              Beaver Dams, New York(NY), 14812, USA
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+607936-8058" class="footer-nav-link">(607) 936-8058</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link">example@gmail.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

        <p class="copyright">
          Copyright &copy; <a href="#">Anon</a> all rights reserved.
        </p>

      </div>

    </div>

  </footer>
  </div>



  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script type="text/javascript" src="cart.js"></script>
</body>

</html>