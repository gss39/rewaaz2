<?php

include ('header.php');
error_reporting(0);

?>

<div id="alert"></div>

<div class="container"
  style=" border: 1px solid #d7d7d7; border-radius:10px; max-width:350px;  background-color: white ; margin-top: 10px; padding: 10px; ">
  <!-- <h1>Sign In</h1>
            <p>Please fill in this form to Login.</p> -->

  <h1 style=" font-size: 28px; margin-bottom: 10px; ">OTP Verification :</h1>
  <p>Enter the Verification code that was send to your email Address...</p>

</div>
<div class="container"
  style="border: 1px solid #d7d7d7; border-radius:10px; max-width:350px;  background-color: white ; margin-top: 20px; padding: 20px; ">
  <form action="otp_submit.php" enctype="multipart/form-data" method="post">

    <div class="mb-4">
      <label for="exampleInputEmail1" class="form-label">OTP Verification :</label>
      <input type="text" name = "otp" class="form-control" placeholder="Enter Code..." id="exampleInputEmail1"
        aria-describedby="emailHelp">
    </div>


    <div class="mb-4">
      <input type="hidden" value="<?php echo $_GET['email'] ?>" name="email" class="form-control" placeholder="Enter Code..." id="exampleInputEmail1"
        aria-describedby="emailHelp">
    </div>

    <button type="submit" style=" width: 100%; " class="btn btn-primary">Verify</button>

    <hr>
    <div style=" margin-top: 10px; text-align: center; ">
      Didn't receive code? : <a style=" text-decoration: none; color: #ff8f8b; " href="signup.php"> Resend</a>

    </div>
  </form>
</div>

<script type = 'module'>

import {
    Alerts }
    from './alerts.js';

    alert = <?php echo $_GET['alert'] ?>


    if ( alert == 2 ) {
        const warning = new Alerts( 'alert', 'invalid otp please check otp' );
        warning.warning();

    }

   
    </script>
</body>

</html>