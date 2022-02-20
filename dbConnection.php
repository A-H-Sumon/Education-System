<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_password = 
    $db_name = "lms_db";

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if($conn->connect_error)
    {
        die("connection failed");
    }
?>