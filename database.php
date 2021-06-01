<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "enrollmentsystem";

    $connection = mysqli_connect($host, $username, $password, $database);

    if(!$connection) {
        echo "
            <div class='alert alert-danger'>
            Database Connection Failed
            </div>
        ";
    }

?>