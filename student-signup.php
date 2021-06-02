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
<div class="container-fluid" style="height: 100vh;">

    <div class="container float-right mt-3 border p-5" style="width: 30%; height: 95%;">
        <img src="" alt="QCU LOGO">
        <h3>Quezon City University</h3>

        <div class="container border p-3">

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="signupform">

                <div class="form-group <?php echo (!empty($usernameError)) ? 'border border-danger' : ''; ?>">
                <input type="text" class="form-control" name="Username" id="" placeholder="Username" value="<?php echo $username; ?>">
                </div>
                <p class="small text-danger"><?php echo $usernameError; ?></p>

                <div class="form-group <?php echo (!empty($passwordError)) ? 'border border-danger' : ''; ?>">
                <input type="password" class="form-control " name="Password" id="" placeholder="Password" value="<?php echo $password; ?>">
                </div>
                <p class="small text-danger"><?php echo $passwordError; ?></p>

                <div class="form-group <?php echo (!empty($repasswordError)) ? 'border border-danger' : ''; ?>">
                <input type="password" class="form-control " name="rePassword" id="" placeholder="Confirm Password" value="<?php echo $repassword; ?>">
                </div>
                <p class="small text-danger"><?php echo $repasswordError; ?></p>


                <div class="form-group <?php echo (!empty($emailError)) ? 'border border-danger' : ''; ?>">
                <input type="text" class="form-control" name="Email" id="" placeholder="Email" value="<?php echo $email; ?>">
                </div>
                <p class="small text-danger"><?php echo $emailError; ?></p>


                <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
            </form>

        <div class="container border mt-3">
            <p class="text-center pt-3">Have created an account?<a href="index.php"> Login</a></p>
        </div>
    </div>
    
</div>


<!-- body End -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
</body>
</html>


