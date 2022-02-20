<?php
    include('./admininclude/header.php');
    include('../dbConnection.php');

    if (isset($_REQUEST['newStuSubmitBtn']))
    {
        if(($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_email'] == "") || ($_REQUEST['stu_pass'] == "")) 
        {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
        }
        else
        {
            $stu_name = $_REQUEST['stu_name'];
            $stu_email = $_REQUEST['stu_email'];
            $stu_pass = $_REQUEST['stu_pass'];
            $stu_image = $_FILES['stu_img']['name'];
            $stu_image_temp = $_FILES['stu_img']['tmp_name'];
            $stu_img_folder = '../image/studentimg/'.$stu_image;
            move_uploaded_file($stu_image_temp, $stu_img_folder);

            $sql = "INSERT INTO `student` (`stu_name`, `stu_email`, `stu_pass`, `stu_img`)
                    VALUES ('$stu_name', '$stu_email', '$stu_pass', '$stu_img_folder')";

            if($conn->query($sql) ==  TRUE)
            {
                $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Student Added Successfully</div>';
            }
            else
            {
                $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Add Student</div>';
            }
        }
    }
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Student</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stu_name">Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name">
        </div>
        <div class="form-group">
            <label for="stu_email">Email</label>
            <input type="text" class="form-control" id="stu_email" name="stu_email">
        </div>
        <div class="form-group">
            <label for="stu_pass">Password</label>
            <input type="text" class="form-control" id="stu_pass" name="stu_pass">
        </div>
        <div class="form-group">
            <label for="stu_img">Student Image</label>
            <input type="file" class="form-control-file" id="stu_img" name="stu_img">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="newStuSubmitBtn" name="newStuSubmitBtn">Submit</button>
            <a href="students.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>

</div> <!-- Row Close from header -->
</div> <!-- Div Container-fluid close from header -->

<?php
    include('./admininclude/footer.php');
?>