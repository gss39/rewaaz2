<?php
include ('header.php');

?>


<div class="container"
    style=" border: 1px solid #d7d7d7; border-radius:10px; max-width:350px;  background-color: white ; margin-top: 10px; padding: 10px; ">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>

</div>

<div class="container"
    style="border: 1px solid #d7d7d7; border-radius:10px; max-width:350px;  background-color: white ; margin-top: 10px; padding: 20px; ">

    <form action="signup_submit.php" enctype="multipart/form-data" method="post" >

        <div class="mb-4">
            <label for="exampleInputEmail1" class="form-label"> Email address :</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-4">
            <label for="exampleInputPassword1" class="form-label">Password :</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">

        </div>

        <div class="mb-4">
            <label for="exampleInputPassword2" class="form-label">Repeat Password :</label>
            <input type="password" name="repeat_password"  class="form-control" id="exampleInputPassword2">
        </div>
        <div class="mb-4 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">apply terms and conditions.</label>
        </div>
        <button type="submit" name="submit" style=" width: 100%; " class="btn btn-primary">Register</button>

        <hr>
        <div style=" margin-top: 10px; text-align: center; ">
            Account already exists :<a style=" text-decoration: none; color: #ff8f8b; " href="login.php"> Login</a>
        </div>

    </form>
</div>

</body>

</html>