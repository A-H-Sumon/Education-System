<?php
    include('./mainInclude/header.php');
    include('dbConnection.php');
?>
<h1>Courses</h1>

<!-- Start first card deck Services -->
<div class="container mt-5" style="margin-top: 100px;">
    <h1 class="text-center">Our All Courses</h1>
    <div class="card-deck mt-4">
    <?php
        $sql = "SELECT * FROM course ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
                $course_id = $row['course_id'];
                echo '
                <div class="col-sm-4 mb-4">
                    <a href="loginorsignup.php" class="btn" style="text-align:left" padding:0px; margin: 0px;>
                    <div class="card">
                        <img src="' . str_replace('..', '.', $row['course_img']) . '" class="card-img-top" alt="services picture">
                        <div class="card-body">
                            <h5 class="card-title">' . $row['course_name'] . '</h5>
                        </div>
                        <div class="card-footer">
                            <h5 class="card-text d-inline">Price:<span class="font-weight-bolder"> &#2547 ' . $row['course_price'] . '</span></h5>
                            <a class="btn btn-primary text-white font-weight-bolder float-right" href="loginorsignup.php">Sent Request</a>
                        </div>
                    </div>
                    </a>
                </div>';
            }
        }
    ?>
    </div>
</div>

<?php include('./mainInclude/footer.php') ?>