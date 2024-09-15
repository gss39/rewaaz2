<?php

include ( 'header.php' );

?>

<div id = 'alert'></div>
<div class = 'container'
style = ' border: 1px solid #d7d7d7; border-radius:10px; max-width:350px;  background-color: white ; margin-top: 10px; padding: 10px; '>
<h1>Sign In</h1>
<p>Please fill in this form to Login.</p>

</div>
<div class = 'container'
style = 'border: 1px solid #d7d7d7; border-radius:10px; max-width:350px;  background-color: white ; margin-top: 10px; padding: 20px; '>
<form action = 'login_submit.php' enctype = 'multipart/form-data' method = 'post'>

<div class = 'mb-4'>
<label for = 'exampleInputEmail1' class = 'form-label'> Email address :</label>
<input type = 'email' name = 'email' class = 'form-control' id = 'exampleInputEmail1' aria-describedby = 'emailHelp'>

</div>

<div class = 'mb-4'>
<label for = 'exampleInputPassword1' class = 'form-label'>Password :</label>
<input type = 'password' name = 'password' class = 'form-control' id = 'exampleInputPassword1'>
<a style = ' text-decoration: none; float: right; color:#ff8f8b; margin-right:5px; margin-top: 5px; '
href = 'forget_password.php'>
<h5 style = ' font-size: 13px; '>forget Password</h5>
</a>
</div>

<div class = 'mb-4 form-check'>
<input type = 'checkbox' class = 'form-check-input' id = 'exampleCheck1'>
<label class = 'form-check-label' for = 'exampleCheck1'>Remember Me</label>
</div>
<button type = 'submit' style = ' width: 100%; ' class = 'btn btn-primary'>Login</button>

<hr>
<div style = ' margin-top: 10px; text-align: center; '>
Create New Account :<a style = ' text-decoration: none; color: #ff8f8b; ' href = 'signup.php'> Signup</a>
</div>
</form>
</div>

<!-- script for data add successfully-->

<script type = 'module'>

import {
    Alerts }
    from './alerts.js';

    alert = <?php echo $_GET[ 'alert' ] ?>

    if ( alert == 1 ) {
        const success = new Alerts( 'alert', 'Account Created successfully ' );
        success.success();

    }

    if ( alert == 0 ) {
        const error = new Alerts( 'alert', 'Data Do Not Add please check errors ' );
        error.error();

    }

    if ( alert == 2 ) {
        const warning = new Alerts( 'alert', 'User allrady exest ... ' );
        warning.warning();

    }

    // alert = 3  for warning invaild email and passsowrd from login_submit.php

    if ( alert == 3 ) {
        const warning = new Alerts( 'alert', 'invaild email and passsowrd' );
        warning.warning();

    }

    // alert = 4  for password update successfully from new_password_submit.php

    if ( alert == 4 ) {
        const successfull = new Alerts( 'alert', 'Your password update successfully' );
        successfull.success();

    }

    </script>

    </body>

    </html>