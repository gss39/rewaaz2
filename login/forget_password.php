
 <?php

include ('header.php');

?>
<div id = "alert"></div>
<div class="container"
       
       style=" border: 1px solid #d7d7d7; border-radius:10px; max-width:350px;  background-color: white ; margin-top: 10px; padding: 10px; ">
       <!-- <h1>Sign In</h1>
            <p>Please fill in this form to Login.</p> -->

            <h1 style=" font-size: 28px; margin-bottom: 10px; " >Forget Password :</h1>
            <p>Please fill in this form to forget Password.</p>
   
</div>
    <div class="container"
        style="border: 1px solid #d7d7d7; border-radius:10px; max-width:350px;  background-color: white ; margin-top: 20px; padding: 20px; ">
        <form action="forget_password_submit.php" enctype="multipart/form-data" method="post" >



            <div class="mb-4">
                <label for="exampleInputEmail1" class="form-label"> Email address :</label>
                <input type="email" name="f_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

            </div>

            <button type="submit" style=" width: 100%; " class="btn btn-primary">Reset</button>

            

            <hr>
            <div style=" margin-top: 10px; text-align: center; ">
            Create New Account  :<a style=" text-decoration: none; color: #ff8f8b; " href="signup.php"> Signup</a>
            </div>
    </form>
    </div>
    <!-- Section: Design Block -->
</body>

<script type = 'module'>

import {Alerts }from './alerts.js';

    alert = <?php echo $_GET['alert'] ?>

    if ( alert == 2 ) {
        const warning = new Alerts( 'alert', 'invalid email ...' );
        warning.warning();

    }

    </script>

</html>