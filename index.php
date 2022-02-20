<?php
    include('./mainInclude/header.php');
    include('dbConnection.php');
?>

<!-- Start Video background -->
<div class="container-fluid remove-vid-marg">
    <div class="vid-parent">
        <video src="videos/Typing.mp4" playsinline autoplay muted loop></video>
        <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
        <h1 class="my-content">Welcome</h1>
        <small class="my-content">Here you can learn</small><br>
        <?php
            if(!isset($_SESSION['is_login']))
            {
                echo '<a href="userSignup.php" class="btn btn-primary mt-3">Lets Begin</a>';
            }
            else
            {
                echo '<a href="userProfile.php" class="btn btn-primary mt-3">My Profile</a>';
            }
        ?>
    </div>
</div>
<!-- Start Video background -->

<!-- Start Text Banner -->
<div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">
        <div class="col-sm">
            <h5><i class="fas fa-book-open mr-3"></i>100+ Online Courses</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-users mr-3"></i>Expert Instructors</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
        </div>
        <div class="col-sm">
            <h5><i class="fas fa-dollar-sign mr-3"></i>Money Back Guarantee</h5>
        </div>
    </div>
</div>
<!-- End Text Banner -->


<!-- Start Services -->
<div class="container mt-5"  id="Courses">
    <h1 class="text-center">Our  Courses</h1>
    <!-- Start first card deck Services -->
    <div class="card-deck mt-4">
        <?php
            $sql    = "SELECT * FROM course LIMIT 3";
            $result = $conn->query($sql);

            if($result->num_rows > 0)
            {
                while($row = $result-> fetch_assoc())
                {
                    $course_id = $row['course_id'];
                    echo '
                    <a href="loginorsignup.php" class="btn" style="text-align:left" padding:0px; margin: 0px;">
                    <div class="card">
                        <img src="'. str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="Courses picture">
                        <div class="card-body">
                            <h5 class="card-title">'.$row['course_name'].'</h5>
                        </div>
                        <div class="card-footer">
                            <h5 class="card-text d-inline">Price:<span class="font-weight-bolder"> &#2547 '.$row['course_price'].'</span></h5>
                            <a class="btn btn-primary text-white font-weight-bolder float-right" href="loginorsignup.php">Enroll</a>
                        </div>
                    </div>
                    </a>';
                }
            }
        ?>
    </div>
    <!-- End first card deck Services -->

    <!-- Start second card deck Services -->
    <div class="card-deck mt-4">
        <?php
            $sql    = "SELECT * FROM course LIMIT 3,3";
            $result = $conn->query($sql);
            
            if($result->num_rows > 0)
            {
                while($row = $result-> fetch_assoc())
                {
                    $course_id = $row['course_id'];
                    echo '
                        <a href="#" class="btn" style="text-align:left; padding:0px; margin: 0px;">
                        <div class="card">
                            <img src="'. str_replace('..','.',$row['course_img']).'" class="card-img-top" alt="picture">
                            <div class="card-body">
                                <h5 class="card-title">'.$row['course_name'].'</h5>
                            </div>
                            <div class="card-footer">
                                <h5 class="card-text d-inline">Price:<span class="font-weight-bolder"> &#2547 '.$row['course_price'].'</span></h5>
                                <a class="btn btn-primary text-white font-weight-bolder float-right" href="loginorsignup.php">Enroll</a>
                            </div>
                        </div>
                        </a>';
                }
            }
        ?>
    </div>
    <!-- End second card deck Services -->

    <!-- Button view all course -->
    <div class="text-center m-2">
        <a class="btn btn-danger btn-sm" href="courses.php">View All Services</a>
    </div>
    <!-- End Button view all course -->
</div>
<!-- End Services -->

<!--Start Contact Us -->
<?php include('./contact.php') ?>
<!--End Contact Us -->

<?php include('./mainInclude/footer.php') ?>