<?php
    include('dbConnection.php');

    if(isset($_POST['rSignup']))
    {
        $username  = mysqli_real_escape_string($conn, $_POST['stuname']);
        $useremail = mysqli_real_escape_string($conn, $_POST['stuemail']);
        $userpass  = mysqli_real_escape_string($conn, $_POST['stupass']);

        if((empty$username) || empty($useremail) || empty($userpass))
        {
            echo "please fill in the Blanks";
        }
        else
        {
            $sql  = "INSERT INTO student(stu_name, stu_email, stu_pass) VALUES ('$username','$useremail', '$userpass')";
            $result = $conn->query($sql);

            if($conn->query($sql) == TRUE)
            {
                echo 'Your record is saved';
            }
            else
            {
                echo 'Please Check your Query';
            }
        }
    }
?>