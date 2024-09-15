<?php

include ('connection2.php');
error_reporting(0);

?>


<!-- input for temp delate data -->

<input type='hidden' id='delate_input' value=''></input>

<!-- ------------------------ -->

<!-- input for temp edit data -->

<input type='hidden' id='edit_input' value=''></input>

<!-- ------------------------ -->

<!-- Button trigger modal -->
<!-- <button type = 'button' class = 'btn btn-primary' data-bs-toggle = 'modal3' data-bs-target = '#exampleModal3'>
Launch demo modal
</button> -->

<!-- Modal -->
<div class='modal fade' id='exampleModal3' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>

            <div class='modal-body' id='show_my_image'>

            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-target='#exampleModal1' data-bs-toggle='modal'
                    data-bs-dismiss='modal'>Close</button>

            </div>
        </div>
    </div>
</div>

<!-- model for delate------------------------------------------------------------ -->

<!-- Modal -->
<div class='modal fade' id='exampleModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>

            <div class='modal-body'>
                <h5> Are you sure you want to delate ? </h5>
            </div>
            <div class='modal-footer'>

                <input type='hidden' name='product_id' id='delate_input' value=''></input>

                <button type='button' id='close_modal' class='btn btn-secondary' data-bs-dismiss='modal'>No</button>
                <button type='button' onclick='delate()' data-bs-dismiss='modal' class='btn btn-primary'>Yes</button>

            </div>
        </div>
    </div>
</div>

<!-- ---------------------------------------------------------------------------------- -->

<!-- model for edit------------------------------------------------------------ -->

<!-- Modal -->
<div class='modal fade' id='exampleModal1' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
    <div class='modal-dialog modal-xl'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' id='exampleModalLabel'>Update Product Data...</h5>
                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
            </div>
            <div class='modal-body' id='modal_body'>

            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>

            </div>
        </div>
    </div>
</div>

<!-- sidebar--------------------------- -->
<?php

include ('desh_header.php');

?>

<!-- ------------------------------- -->
<main class='content'>
    <div>

        <!-- main -->
        <nav style='background-color: rgb(12 30 53);' class='navbar sticky-top '>

            <div class='container-fluid'>
                <a style='padding-right: 10px;' id='btn-toggle' href='#' class='sidebar-toggler break-point-sm'>
                    <i class='ri-menu-line ri-xl'></i>
                </a>
                <a class='navbar-brand'>Dashboard</a>

            </div>
        </nav>

        <div style='padding: 20px; padding-top: 20px;' class='container'>

            <div id='show'></div>

            <form action='products.php' method='POST'>
                <div class='input-group ' style=' margin-bottom: 20px; '>

                    <input type='text' class='form-control' name='search_item' placeholder='Search item...'
                        aria-label="Recipient's username" id='query' aria-describedby='button-addon2'>
                    <button class='btn btn-outline-secondary' onclick='product()' type='button' name='submit'
                        id='button-addon2'>Search</button>

                </div>
            </form>
            <nav class='navbar '>
                <div class='container-fluid'
                    style=' border: 1px solid #dee2e6;overflow: scroll; scrollbar-width: none;  border-radius:10px; padding: 10px;  '>

                    <table class='table'>
                        <thead>
                            <tr>
                                <th style='  text-align: center; ' scope='col'>#</th>
                                <th style=' text-align: center; ' scope='col'>Product ID</th>
                                <th style=' text-align: center; ' scope='col'>Title</th>

                                <th style=' text-align: center; ' scope='col'>Price</th>
                                <th style=' text-align: center; ' scope='col'>Seller</th>
                                <th style=' text-align: center; ' scope='col'>Dicount</th>
                                <th style=' text-align: center; ' scope='col'>Rating</th>
                                <th style=' text-align: center; ' scope='col'>Status</th>
                                <th style=' text-align: center; ' scope='col'>Category</th>

                                <th style=' text-align: center; ' scope='col'>Video</th>
                                <th style=' text-align: center; ' scope='col'>Action</th>


                            </tr>
                        </thead>
                        <tbody id='tbody_data'>

                        </tbody>
                    </table>
                </div>
            </nav>

        </div>

        <!--/ main -->

</main>
<div class='overlay'></div>
</div>
</div>

<script>

    function product() {

        let query = document.getElementById('query').value

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById('tbody_data').innerHTML = xhttp.responseText;

            }
        }

        xhttp.open('POST', 'my_products.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('query=' + query + '');

    }

    product();

    function delate_data(my_id) {

        document.getElementById('delate_input').value = my_id.name

    }

    function delate() {

        let product_id = document.getElementById('delate_input').value;

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                console.log(xhttp.responseText);
                product();

                if (xhttp.responseText == '1') {

                    success()
                    xhttp.responseText
                } else {
                    error();

                }

            }
        }

        xhttp.open('POST', 'delate.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('product_id=' + product_id + '');

    }

    // function for update ----------------------------------------------------------------------------------v

    function edit_data(my_id) {

        // document.getElementById( 'delate_input' ).value = my_id.name

        let product_id = my_id.name

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {

                document.getElementById('modal_body').innerHTML = xhttp.responseText

            }

        }

        xhttp.open('POST', 'edit.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('product_id=' + product_id + '');

    }

    function my_image(image_name) {

        let this_image = image_name.name;
        console.log(this_image);

        document.getElementById('show_my_image').innerHTML = '<img src="all_images/' + this_image + '"  width="100%" height="100%" alt="">'

        // image = 'all_images/'image_name.name''

    }

    function my_video(video_name) {

        let this_video = video_name.name;

        document.getElementById('show_my_image').innerHTML = '<video src="all_videos/' + this_video + '" controls  width="100%" height="100%" alt="">'

        // image = 'all_images/'image_name.name''

    }

    myalert = "<?php echo $_GET['alert'] ?>";

    if (myalert != '') {

        if (myalert == 1) {

            update_success();

        }

        if (myalert == 2) {

            update_error();

        }

        if (myalert == 3) {

            update_warning();

        }
    }

    // alerts---------------------------------------------------------------------------------------------

    function update_success() {
        var alertDiv = document.createElement('div');
        alertDiv.classList.add('alert', 'alert-success', 'alert-auto-close');
        alertDiv.setAttribute('role', 'alert');
        alertDiv.innerHTML = 'Data Updated Successfully';
        document.getElementById('show').appendChild(alertDiv)

        setTimeout(function () {
            alertDiv.remove();
        }
            , 2000);
        // 5000 milliseconds = 5 seconds

    }

    function update_error() {
        var alertDiv = document.createElement('div');
        alertDiv.classList.add('alert', 'alert-danger', 'alert-auto-close');
        alertDiv.setAttribute('role', 'alert');
        alertDiv.innerHTML = 'data not exests';
        document.getElementById('show').appendChild(alertDiv)

        setTimeout(function () {
            alertDiv.remove();
        }
            , 2000);
        // 5000 milliseconds = 5 seconds

    }

    function update_warning() {
        var alertDiv = document.createElement('div');
        alertDiv.classList.add('alert', 'alert-warning', 'alert-auto-close');
        alertDiv.setAttribute('role', 'alert');
        alertDiv.innerHTML = 'Sorry , image  only JPG, PNG , webp and video only mp4  files are allowed';
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
        alertDiv.innerHTML = 'Data Delated Successfully';
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
        alertDiv.innerHTML = 'Data Not Delated... ';
        document.getElementById('show').appendChild(alertDiv)

        setTimeout(function () {
            alertDiv.remove();
        }
            , 2000);
        // 5000 milliseconds = 5 seconds

    }

</script>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://unpkg.com/@popperjs/core@2'></script>
<script src='./script.js'></script>

</body>

</html>