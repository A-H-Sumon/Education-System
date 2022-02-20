<?php
    include('./dbConnection.php');
    session_start();
    if(!isset($_SESSION['stuLogEmail'])){
        echo "<script> location.href = 'loginorsignup.php </script>";
    } else {
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
</head>
<body>
    <h1>Check Out</h1>
</body>
</html>

<?php
}  
?>