<?php
    $username = $password = "";
    $usernameError = $passwordError = "";
    require "database.php";

    function dataValidation($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST['login'])){

        if(!empty($_POST['Username'])) {
            $username = dataValidation($_POST['Username']);
        } else {
            $usernameError = "Username is required";
        }

        if(!empty($_POST['Password'])) {
            $password = dataValidation($_POST['Password']);
        } else {
            $passwordError = "Password is required";
        }

        if(!empty($username) && !empty($password)){
            /*session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;*/
            echo "<script>alert('logged in')</script>";
        }

    }
?>