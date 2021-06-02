<?php
    require "database.php";
    $username = $password = $email = $repassword = "";
    $usernameError = $passwordError = $emailError = $repasswordError = "";
    
    function dataValidation($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if(isset($_POST['signup'])) {

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

        if(!empty($_POST['rePassword'])) {
            $repassword = dataValidation($_POST['rePassword']);
        } else {
            $repasswordError = "Password is required";
        }

        if(!empty($_POST['Email'])) {
            $email = dataValidation($_POST['Email']);
        } else {
            $emailError = "Email is required";
        }
        
        if(!empty($username) && !empty($password) && !empty($repassword) && !empty($email)){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['email'] = $email;
            header("Location: student-new-enrollment-form.php");
        }
    }

?>