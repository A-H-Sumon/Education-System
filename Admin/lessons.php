<?php
    include('./admininclude/header.php');
    include('../dbConnection.php');
?>

<div class="col-sm-9 mt-5">
    <form action="" class="mt-3 form-inline d-print-none">
        <div class="form-group mr-3">
            <label for="checkid">Enter Course ID: </label>
            <input type="text" class="form-control ml-3" id="checkid" name="checkid">
        </div>
        <button type="submit" class="btn btn-danger">Search</button>
    </form>

    <?php
        $sql = "SELECT course_id FROM course";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc())
        {
            if(isset($_REQUEST['checkid']) && $_REQUEST['checkid'] == $row['course_id'])
            {
                $sql = "SELECT * FROM course WHERE course_id ={$_REQUEST['checkid']}";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                
                if($row['course_id'] == $_REQUEST['checkid'])
                {
                    $_SESSION['course_id']   = $row['course_id'];
                    $_SESSION['course_name'] = $row['course_name'];
            ?>
                    <h3 class="mt-5 bg-dark text-white p-2">Course ID: <?php if(isset($row['course_id'])) { echo $row['course_id']; } ?> Course Name: <?php if(isset($row['course_name'])) { echo $row['course_name']; } ?></h3>
    <?php
                }
            }
        }
    ?>

</div>

<?php
    if(isset($_SESSION['course_id']))
    {
        echo'
            <div>
                <a class="btn btn-danger box" href="./addLesson.php"><i class="fas fa-plus fa-2x"></i></a>
            </div>';
    }
?>
<?php
    include('./admininclude/footer.php');
?>