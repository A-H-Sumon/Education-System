<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Login</title>
        <link rel="stylesheet" href="../style.css"/>
    </head>
    <body>
    <?php
        require('../dbConnection.php');
        session_start();

        if (isset($_POST['adminLogemail']))
        {
            $aEmail = $_POST['adminLogemail'];
            $aPass  = $_POST['adminPass'];

            $sql    = "SELECT * FROM admin WHERE username='".$aEmail."' AND password='".$aPass."' limit 1";
            $result = $conn->query($sql);

            if ($result->num_rows == 1)
            {
                $_SESSION['is_admin_login'] = true;
                $_SESSION['adminLogemail']  = $aEmail;
                echo "<script> location.href='./adminDashboard.php'; </script>";
                exit();
            }
            else
            {
                echo
                "
                    <div class='form'>
                        <h3>Incorrect Email/password.</h3><br/>
                        <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                    </div>
                ";
                exit();
            }
        }
        else
        {
    ?>
        <form class="form" method="post" name="login">
            <h1 class="login-title">Login</h1>
            <input type="text" class="login-input" name="adminLogemail" placeholder="Email">
            <input type="password" class="login-input" name="adminPass" placeholder="Password">
            <input type="submit" value="Login" name="submit" class="login-button"/>
        </form>

    <?php
        }
    ?>

    </body>
</html>
