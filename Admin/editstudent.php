<?php
    include('./admininclude/header.php');
    include('../dbConnection.php');

    if (isset($_REQUEST['requpdate']))
    {
        if(($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_email'] == "") || ($_REQUEST['stu_pass'] == "")) 
        {
            $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
        }
        else
        {
            $sid = $_REQUEST['stu_id'];
            $sname = $_REQUEST['stu_name'];
            $semail = $_REQUEST['stu_email'];
            $spass = $_REQUEST['stu_pass'];
            $simg = '../image/studentimg/'.$_FILES['stu_img']['name'];

            $sql = "UPDATE student SET stu_id = '$sid', stu_name = '$sname', stu_email = '$semail',  stu_img = '$simg' WHERE stu_id = '$sid'";

            if($conn->query($sql) ==  TRUE)
            {
                $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully</div>';
            }
            else
            {
                $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to Update</div>';
            }
        }
    }
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Student</h3>
    <?php
        if(isset($_REQUEST['view']))
        {
            $sql = "SELECT * FROM student WHERE stu_id = {$_REQUEST['id']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }
    ?>


    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="course_id">Student ID</label>
            <input type="text" class="form-control" id="stu_id" name="stu_id" value="<?php if(isset($row['stu_id'])){ echo $row['stu_id'];} ?>">
        </div>
        <div class="form-group">
            <label for="course_name">Student Name</label>
            <input type="text" class="form-control" id="stu_name" name="stu_name" value="<?php if(isset($row['stu_name'])){ echo $row['stu_name'];} ?>">
        </div>
        <div class="form-group">
            <label for="course_desc">Student Email</label>
            <textarea class="form-control" id="stu_email" name="stu_email" rows="2" cols="68"> <?php if(isset($row['stu_email'])){ echo $row['stu_email'];} ?> </textarea>
        </div>
        <div class="form-group">
            <label for="course_author">Student Password</label>
            <input type="text" class="form-control" id="stu_pass" name="stu_pass" value="<?php if(isset($row['stu_pass'])){ echo $row['stu_pass'];} ?>">
        </div>
        <div class="form-group">
            <label for="course_img">Student Image</label>
            <img src="<?php if(isset($row['stu_img'])){ echo $row['stu_img'];} ?>" alt="" class="img-thumnail">
            <input type="file" class="form-control-file" id="course_img" name="course_img">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
            <a href="courses.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)) {echo $msg;} ?>
    </form>
</div>

</div> <!-- Row Close from header -->
</div> <!-- Div Container-fluid close from header -->

<?php
    include('./admininclude/footer.php');
?>