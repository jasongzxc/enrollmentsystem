<?php
    require "database.php";
    include "student-signup-function.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<!-- body Start -->
<div class="container-fluid bg-primary" style="height: 100vh;">

    <div class="container float-right mt-3 bg-dark" style="width: 30%; height: 95%;">
        <img src="" alt="QCU LOGO">
        <h1>Quezon City University</h1>

        <div class="container border">
            <button onclick="signupbtn()">Sign Up</button>
            <button onclick="loginbtn()">Log In</button>

            <!-- Log in Form -->
            <form action="" id="loginform">
                <div class="form-group">
                <input type="text" class="form-control" name="Username" id="" placeholder="Username">
                </div>

                <div class="form-group">
                <input type="password" class="form-control" name="Password" id="" placeholder="Password">
                </div>

                <a href="">Forgot password</a><br>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>

            <!-- Sign Up Form -->
            <form action="index.php" method="post" id="signupform" style="display: none">
                <div class="form-group">
                <input type="text" class="form-control" name="Username" id="" placeholder="Username">
                </div>

                <div class="form-group">
                <input type="password" class="form-control" name="Password" id="" placeholder="Password">
                </div>

                <div class="form-group">
                <input type="text" class="form-control" name="Email" id="" placeholder="Email">
                </div>

                <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                <button class="btn btn-danger" onclick="logintbtn()">Cancel</button>
            </form>
        </div>
    </div>
    
</div>

<script>

    function signupbtn() {
        $("#loginform").hide();
        $("#signupform").show();
    }

    function loginbtn() {
        $("#signupform").hide();
        $("#loginform").show();
    }

</script>


<!-- body End -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</body>
</html>