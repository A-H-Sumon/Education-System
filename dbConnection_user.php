<?php
    $db_host = "localhost";
    $db_user = "user";
    $db_password = SET PASSWORD student = password_option

    password_option: {
        PASSWORD('auth_string')
      | OLD_PASSWORD('auth_string')
      | 'hash_string'
    }
    $db_name = "lms_db";

    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    if($conn->connect_error)
    {
        die("connection failed");
    }
?>