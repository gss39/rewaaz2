<?php

include('desh_header.php');

?>

<main class='content'>
  <div>

    <!-- main -->
    <nav style='background-color: rgb(12 30 53);' class='navbar'>

      <div class='container-fluid'>
        <div class='container-md'>
          <a class='navbar-brand' href='#'>Navbar</a>
        </div>
        <a style='padding-right: 10px;' id='btn-toggle' href='#' class='sidebar-toggler break-point-sm'>
          <i class='ri-menu-line ri-xl'></i>
        </a>

      </div>
    </nav>

    <div style='padding: 20px; padding-top: 20px;' class='container'>

      <div id='show'></div>

      <form class='row g-3' enctype='multipart/form-data' method='POST' action='insert_data_submit.php'
        style=' margin-top: 20px;  border: 1px solid rgb(202, 202, 202); border-radius: 10px; padding: 10px; '>

        <div class='col-md-6'>
          <label for='product_id' class='form-label'>Product ID :</label>
          <input type='text' class='form-control' required name='product_id'>
        </div>

        <!-- <div class='col-md-6'>
          <label for='title' class='form-label'>Title :</label>
          <input type='text' class='form-control' required name='title'>
        </div>

        <div class='col-md-3'>
          <label for='price' class='form-label'>Price :</label>
          <input type='text' class='form-control' required name='price'>
        </div>

        <div class='col-md-3'>
          <label for='mrp' class='form-label'>MRP :</label>
          <input type='text' class='form-control' required name='mrp'>
        </div>

        <div class='col-md-6'>
          <label for='discount' class='form-label'>Discount :</label>
          <input type='text' class='form-control' required name='discount'>
        </div>

        <div class='col-md-6'>
          <label for='rating' class='form-label'>rating :</label>
          <input type='text' class='form-control' required name='rating'>
        </div> -->

        <div class='col-md-6'>
          <label for='seller' class='form-label'>Seller :</label>
          <select name='seller' required class='form-select'>

            <option>Amazon</option>
            <option>Flipkert</option>
            <option>Meesho</option>
            <option>Myntra</option>

          </select>
        </div>

        <div class='col-md-6'>
          <label for='catg' class='form-label'>Categories:</label>
          <select name='catg' required class='form-select'>

            <option style='font-weight: bold;'>Categories : </option>
            <option>Kurta sets</option>
            <option>Saree</option>
            <option>Palazzo</option>
            <option>Lahnga</option>
            <option>Dress</option>
            <option>Gowns</option>
            <option>Anarkali salwar suit</option>

          </select>
        </div>

        <div class='col-md-6'>
          <label for='image' class='form-label'>Image :</label>
          <input type='text'  required class='form-control' name='myimage'>
        </div>

        <div class='col-md-6'>
          <label for='video' class='form-label'>Video :</label>
          <input type='text'  required class='form-control' name='myvideo'>
        </div>

        <div class='col-md-12'>
          <label for='product_id' class='form-label'>Product link :</label>
          <input type='text' class='form-control' required name='product_link'>
        </div>

        <div class='col-12'>
          <button type='submit' name='submit' class='btn btn-primary'>Add</button>
        </div>
      </form>

    </div>

    <!--/ main -->

</main>
<div class='overlay'></div>
</div>
</div>
<!-- partial -->
<script src='https://unpkg.com/@popperjs/core@2'></script>
<script src='./script.js'></script>
<script>

  function warning() {

    var alertDiv = document.createElement('div');
    alertDiv.classList.add('alert', 'alert-warning', 'alert-auto-close');
    alertDiv.setAttribute('role', 'alert');
    alertDiv.innerHTML = 'Product data already exists..';
    document.getElementById('show').appendChild(alertDiv)

    setTimeout(function () {
      alertDiv.remove();
    }
      , 2000);
    // 5000 milliseconds = 5 seconds

  }

  function error() {

    var alertDiv = document.createElement('div');
    alertDiv.classList.add('alert', 'alert-danger', 'alert-auto-close');
    alertDiv.setAttribute('role', 'alert');
    alertDiv.innerHTML = 'Product data already exists..';
    document.getElementById('show').appendChild(alertDiv)

    setTimeout(function () {
      alertDiv.remove();
    }
      , 2000);
    // 5000 milliseconds = 5 seconds

  }

  function success() {
    var alertDiv = document.createElement('div');
    alertDiv.classList.add('alert', 'alert-success', 'alert-auto-close');
    alertDiv.setAttribute('role', 'alert');
    alertDiv.innerHTML = 'Data add Successfully';
    document.getElementById('show').appendChild(alertDiv)

    setTimeout(function () {
      alertDiv.remove();
    }
      , 2000);
    // 5000 milliseconds = 5 seconds

  }

  function formet_error() {
    var alertDiv = document.createElement('div');
    alertDiv.classList.add('alert', 'alert-danger', 'alert-auto-close');
    alertDiv.setAttribute('role', 'alert');
    alertDiv.innerHTML = 'Sorry , image  only JPG, PNG , webp and video only mp4  files are allowed.';
    document.getElementById('show').appendChild(alertDiv)

    setTimeout(function () {
      alertDiv.remove();
    }
      , 2000);
    // 5000 milliseconds = 5 seconds

  }

  if (<?php echo $_GET['alert'] ?> == '2') {

    warning();

  }

  if (<?php echo $_GET['alert'] ?> == '1') {

    success();

  }

  if (<?php echo $_GET['alert'] ?> == '0') {

    error();

  }

  if (<?php echo $_GET['alert'] ?> == '3') {

    formet_error();

  }

</script>

</body>

</html>