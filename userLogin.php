<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    include('dbConnection.php');

    if(!isset($_SESSION['is_login']))
    {
        if(isset($_POST['stuLogemail']))
        {
            $uname = $_POST['stuLogemail'];
            $upass  = $_POST['stuLogpass'];

            $sql = "SELECT * FROM student WHERE stu_email='".$uname."' AND stu_pass='".$upass."' limit 1";
            $result = $conn->query($sql);

            if($result->num_rows == 1)
            {
                $_SESSION['is_login'] = true;
                $_SESSION['stuLogemail'] = $uname;
                echo "<script> location.href='index.php'; </script>";
                exit();
            }
            else
            {
                echo "<script> location.href='userLogin.php'; </script>";
                exit();
            }

        }
    }

    include('./mainInclude/header.php');
?>


<div class="mb-3 text-center mt-5" style="font-size: 30px;">
    <br>
    <i class="fas fa-stethoscope"></i>
    <span>Login</span>
</div>
<p class="text-center" style="font-size: 20px;">
    <i class="fas fa-user-secret text-danger"></i>
    <span>User Area</span>
</p>

<!-- Login Form -->
<div class="container-fluid mb-5">
    <div class="row justify-content-center custom-margin">
        <div class="col-sm-6 col-md-4">
            <form action="" class="shadow-lg p-4" method="POST">
                <div class="forl" class="pl-2 font-weight-bold">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label for="stuLogpass" class="pl-2 font-weight-bold">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
                </div>
                <button type="submit" class="btn btn-outline-danger mt-3 btn-block shadow-sm font-weight-bold">Login</button>
                <?php if(isset($msg)) {echo $msg; } ?>
            </form>
            <div class="text-center">
                <a class="btn btn-info mt-3 shadow-sm fonm-group">
                    <i class="fas fa-user"></i>
                    <label for="stuLogemait-weight-bold" href="../index.php">Back to Home</a>
            </div>
        </div>
    </div>
</div>
<!-- Login From -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

<!-- Font Awesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>

<!-- Student Testimonial Owl Slider JS -->
<script src="js/ajaxrequest.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --> 

</body>
</html>