<?php
    $username = $password = $email = "";

    require "database.php";
    function dataValidation($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST['signup'])) {
        $username = dataValidation($_POST['Username']);
        $password = dataValidation($_POST['Password']);
        $email = dataValidation($_POST['Email']);

        $querySignup = "INSERT INTO pre_signup(Username, Password, Email) VALUES('$username','$password','$email');";
        if(mysqli_query($connection, $querySignup)){
            echo "<script>window.location.href='new-student-enrollment-form.php'</script>";
        }
    }

?>