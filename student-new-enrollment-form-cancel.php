<?php
    session_start();
    session_unset();
    session_destroy();
    echo "<script>alert('Sign Up Cancelled')</script>";
    echo "<script>location.href='student-signup.php'</script>";
?>