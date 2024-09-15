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
    .table>:not(caption)>*>* {
      /* padding: .6rem .6rem; */
      border-bottom-color: white;
    }

    .form-control::placeholder {
      color: #c5c5c5;
      opacity: 1;
      font-size: 13px;
      word-spacing: 0.2em;

      /* Firefox */
    }

    .form-label {
      margin-bottom: .1rem;
      color: #444444;
      font-family: var(--bs-body-font-family);
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
      /* box-shadow: 0 2px 3px #e4e8f0; */
      margin-top: 20px;
    }

    .card-header {

      border: none;
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
    body{
      font-family: "Poppins", sans-serif;
    }
  </style>

</head>

<body>


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

      <div class="row">
      <nav
          style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;); margin-top:20px; margin-bottom:0px;"
          aria-label="breadcrumb">
          <ol class="breadcrumb">
        
            <li class="breadcrumb-item"><a href="#">Cart</a></li>
            <li class="breadcrumb-item active" aria-current="page">shipping</li>
            <li class="breadcrumb-item active" aria-current="page">Payment</li>
          </ol>
        </nav>
        <div class="col-xl-8">



          <form style=" margin: 0px; " class="row g-3">

            <div
              style="  padding: 20px; padding-bottom: 10px;  border: 1px solid hsl(0deg 0% 91.34%); box-shadow: 0 2px 3px #e4e8f0; border-radius: var(--border-radius-md); ">

              <h5> Shipping Address : </h5>
              <hr>
              <table class="table">

                <tbody>
                  <tr>

                    <td>  Name :</td>

                    <td>Shatinon Mekalan</td>
                  </tr>
                  <tr>

                    <td>Address :</td>

                    <td>Apt: 6/B, 192 Edsel Road, Van Nuys California, USA 96580</td>
                  </tr>
                  <tr>

                    <td>Phone :</td>

                    <td>818-414-4092</td>
                  </tr>
                </tbody>
              </table>
            </div>


            <div
              style="  padding: 20px; padding-bottom: 10px;  border: 1px solid hsl(0deg 0% 91.34%); box-shadow: 0 2px 3px #e4e8f0; border-radius: var(--border-radius-md); ">

              <h5> Billing Address : </h5>
              <hr>
              <table class="table">

                <tbody>
                  <tr>

                    <td>Name :</td>

                    <td>Shatinon Mekalan</td>
                  </tr>
                  <tr>

                    <td>Address :</td>

                    <td>Apt: 6/B, 192 Edsel Road, Van Nuys California, USA 96580</td>
                  </tr>
                  <tr>

                    <td>Phone :</td>

                    <td>818-414-4092</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div
              style="  padding: 20px; padding-bottom: 10px;  border: 1px solid hsl(0deg 0% 91.34%); box-shadow: 0 2px 3px #e4e8f0; border-radius: var(--border-radius-md); ">

              <h5> Payment : </h5>
              <hr>
              <table class="table">

                <tbody>
                  <!-- <tr>
                    <td>

                      <label
                        style="padding: 10px;  width: 100%;  border: 1px solid hsl(0deg 0% 91.34%);  border-radius: var(--border-radius-md);"
                        data-bs-toggle="collapse" href="#collapseExample">
                        <div class="form-check">
                          <input class="form-check-input" style=" " type="radio" name="flexRadioDefault" value=""
                            id="flexCheckDefault">
                          UPI (GPay/ PhonePe /Paytm)

                        </div>
                      </label>
                      <div class="collapse" style="box-shadow:none;" id="collapseExample">
                        <div class="card card-body">
                          <div class="col-md-12">
                            <label for="validationDefault01" style=" font-size: 16px;  color:#212529;  color: #747474 "
                              class="form-label"> <b style=" font-weight: normal; color: #919191; "> UPI ID : </b></label>
                            <input type="text" class="form-control" placeholder="Enter UPI ID..." id="validationDefault01"
                              required></input>

                            <button class="btn btn-primary" style="font-weight: 500; float: right; margin-top: 10px;   "
                              type="button">Verify</button>


                          </div>
                        </div>
                      </div>

                    </td>





                  </tr>
                  <tr>
                    <td>


                      <label
                        style="padding: 10px;  width: 100%;  border: 1px solid hsl(0deg 0% 91.34%); border-radius: var(--border-radius-md);"
                        data-bs-toggle="collapse" href="#collapseExample2">
                        <div class="form-check">
                          <input class="form-check-input" style=" " type="radio" name="flexRadioDefault" value=""
                            id="flexCheckDefault">
                          Debit/Credit Cards

                        </div>
                      </label>
                      <div class="collapse" id="collapseExample2">
                        <div style=" padding: 10px; " class="row g-3" >

                      


                          <div class="col-sm-12">
                            <label for="validationDefault01" style=" font-weight: normal;  " class="form-label">Card number :</label>
                            <input type="text" class="form-control" placeholder="Enter Card Number..." id="validationDefault01"  required>
                          </div>
                          <div class="col-sm-12">
                            <label for="validationDefault02" style="font-weight: normal; " class="form-label">Enter Name On Card :</label>
                            <input type="text" class="form-control" placeholder="Enter Name On Card..." id="validationDefault02"  required>
                          </div>
                         
                          <div class="col-sm-6">
                            <label for="validationDefault03" style=" font-weight: normal; " class="form-label">MM :</label>
                            <input type="text" class="form-control" placeholder="Enter MM..." id="validationDefault03" required>
                          </div>
                          <div class="col-sm-6">
                            <label for="validationDefault03" style=" font-weight: normal;" class="form-label">YY :</label>
                            <input type="text" class="form-control" placeholder="Enter YY..." id="validationDefault03" required>
                          </div>
                          <div class="col-sm-12">
                            <label for="validationDefault02" style="font-weight: normal;" class="form-label">CVV :</label>
                            <input type="text" class="form-control" placeholder="Enter CVV..." id="validationDefault02"  required>
                          </div>
                         
                      
                          <div  class="col-12">
                            <button class="btn btn-primary" style=" float: right ; " type="submit">Verify</button>
                          </div>

                        </div>



                      </div>



            </div>
        </div>


        </td>



        </tr>
        <tr>


          <td>
            <label
              style="padding: 10px;  width: 100%;  border: 1px solid hsl(0deg 0% 91.34%);  border-radius: var(--border-radius-md);"
              data-bs-toggle="collapse" href="#collapseExample3">
              <div class="form-check">
                <input class="form-check-input" style=" " type="radio" name="flexRadioDefault" value=""
                  id="flexCheckDefault">
                Net Banking

              </div>
            </label>
            <div class="collapse" id="collapseExample3">
              <div class="card card-body">
                
              </div>
            </div>





        </tr> -->

        <tr>
          <td>


            <label
              style="padding: 10px;  width: 100%;  border: 1px solid hsl(0deg 0% 91.34%); border-radius: var(--border-radius-md);"
              data-bs-toggle="collapse" href="#collapseExample4">
              <div class="form-check">
                <input class="form-check-input" style=" " type="radio" name="flexRadioDefault" value=""
                  id="flexCheckDefault">
                Cash on Delivery

              </div>
            </label>
            <div class="collapse" id="collapseExample4">
            
            </div>



          </td>



        </tr>



        </tbody>
        </table>
      </div>
      </form>

    </div>



    <div class="col-sm-4">

      <div class="card" id="cart_sidebar" style=" padding: 15px; padding-top: none; ">
      <div class="card-header" style=" font-weight: 500; background-color:white; font-size:20px; text-align: left; ">
          Products :
        </div>
        <hr>
        <div class="d-grid gap-2">
       
          <table class="table caption-top">


            <tbody>
              <tr>

                <td>
                  <div class="me-4">
                    <img src="image/IMG_20240312_141907.jpg"
                      style=" width: 35px; height: 50px; " alt="" class="avatar-lg rounded">
                  </div>
                </td>
                <td style=" font-size: 15px;  "> Fitbit Sense Advanced Smartwatch with...</td>
                <td style=" font-size: 15px; ">x1</td>
                <td style=" font-size: 15px;">$398</td>
              </tr>
              <tr>

                <td>
                  <div class="me-4">
                  <img src="image/images.jpg"
                      style=" width: 35px; height: 50px; " alt="" class="avatar-lg rounded">
                  </div>
                </td>
                <td style=" font-size: 15px; ">iPhone 13 pro max-Pacific Blue-128GB</td>
                <td style=" font-size: 15px; ">x1</td>
                <td style=" font-size: 15px;">$398</td>
              </tr>
              <tr>

                <td>
                  <div class="me-4">
                  <img src="image/.trashed-1712829789-IMG_20240312_153259.jpg"
                      style=" width: 35px; height: 50px; " alt="" class="avatar-lg rounded">
                  </div>
                </td>
                <td style=" font-size: 15px; ">Apple MacBook Pro 13 inch-M1-8/256GB</td>
                <td style=" font-size: 15px; ">x1</td>
                <td style=" font-size: 15px;">$398</td>
              </tr>


            </tbody>
          </table>

        </div>
        <!-- end row -->

      </div>
      <div class="card" id="cart_sidebar" style=" padding: 15px; ">
        <div class="card-header" style=" font-weight: 500; background-color:white; font-size:20px; text-align: left; ">
          Summary :
        </div>
        <ul style=" margin-top: 10px; margin-bottom: 20px; m  " class="list-group list-group-flush">
          <select class="form-select" aria-label="Default select example">
            <option style=" text-align: left; font-size: 15px; ">Cash on delivery</option>
            <option style=" text-align: left; font-size: 15px;" value="1">Card</option>
            <option style=" text-align: left; font-size: 15px;" value="2">Upi</option>

          </select>
          <li class="list-group-item "
            style=" text-align: left; border-bottom: none; margin-top:10px; font-weight: 500; ">
            Items subtotal :
            <span style=" float: right; ">$691</span>
          </li>
          <li class="list-group-item" style=" text-align: left;  border-bottom: none; font-weight: 500;  ">Discount
            : <span style=" float: right; ">$59</span></li>
          <li class="list-group-item" style=" text-align: left;  border-bottom: none; font-weight: 500;  ">Tax :
            <span style=" float: right; ">$126.20</span>
          </li>
          <li class="list-group-item" style=" text-align: left;  border-bottom: none; font-weight: 500;  ">Subtotal
            : <span style=" float: right; ">$665</span></li>
          <li class="list-group-item" style=" text-align: left;  border-bottom: none; font-weight: 500;  ">Shipping
            Cost :
            <span style=" float: right; ">$30</span>
          </li>



          <div class="input-group mb-3" style=" margin-top: 10px; ">
            <input type="text" class="form-control" placeholder="Voucher" aria-label="Recipient's username"
              aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Apply</button>
          </div>
          <li class="list-group-item"
            style=" text-align: left; font-size: 20px;  border-bottom: none; font-weight: 500; ">
            Total : <span style=" float: right; ">$695.20</span></li>
        </ul>

        <div class="d-grid gap-2">
          <button class="btn btn-primary" style="font-weight: 500;   " type="button">Pay $695.20</button>

        </div>
        <!-- end row -->

      </div>


    </div>

  </main>

  <!--
    - FOOTER
  -->

  <footer style=" margin-top: 50px; ">



    <div class="footer-nav">

      <div class="container">

        <ul class="footer-nav-list">

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