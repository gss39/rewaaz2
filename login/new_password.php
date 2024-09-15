<?php

include ('header.php');
error_reporting(0);

?>

<div id="alert"></div>
<div class="container"
    style=" border: 1px solid #d7d7d7; border-radius:10px; max-width:350px;  background-color: white ; margin-top: 10px; padding: 10px; ">
    <h1 style=" font-size: 28px; margin-bottom: 10px; ">Change Password :</h1>
    <p>Please fill in this form to Change Password</p>

</div>
<div class="container"
    style="border: 1px solid #d7d7d7; border-radius:10px; max-width:350px;  background-color: white ; margin-top: 10px; padding: 20px; ">
    <form action="new_password_submit.php" enctype="multipart/form-data" method="post">


        <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label"> New Password :</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">

        </div>

        <div class="mb-4">
            <label for="exampleInputPassword2" class="form-label"> New Repeat Password :</label>
            <input type="password" name="repeat_password" class="form-control" id="exampleInputPassword2">

        </div>

        <div class="mb-4">
            
            <input type="hidden" name="email" value="<?php echo $_GET['email']?> " class="form-control" id="exampleInputPassword2">

        </div>


        <button type="submit" style=" width: 100%; " class="btn btn-primary">Change</button>



        <hr>
        <div style=" margin-top: 10px; text-align: center; ">
            Create New Account :<a style=" text-decoration: none; color: #ff8f8b; " href="signup.php"> Signup</a>
        </div>
    </form>
</div>

<script type = 'module'>

import {
    Alerts }
    from './alerts.js';

    alert = <?php echo $_GET['alert'] ?>


    if ( alert == 2 ) {
        const warning = new Alerts( 'alert', 'password not match please check password' );
        warning.warning();

    }

   
    </script>

</body>

</html>