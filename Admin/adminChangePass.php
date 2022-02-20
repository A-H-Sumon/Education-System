<?php
    include('./admininclude/header.php');
    include('../dbConnection.php');
?>

<div class="col-sm-9 mt-5">
    <div class="row">
        <div class="col-sm-6">
            <form class="mt-5 mx-5">
                <div class="form-group">
                    <label for="inputEmail">Email</label>
                    <input type="email" class="form-control" id="inputEmail" value="<?php //echo $adminEmail ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="inputEmail">New Password</label>
                    <input type="text" class="form-control" id="inputnewpassword" placeholder="New Password" name="adminPass">
                </div>
                <button type="submit" class="btn btn-danger mr-4 mt-4" name="adminPassUpdatebtn">Update</button>
                <button type="reset" class="btn btn-secondary mr-4 mt-4" name="adminPassUpdatebtn">Reset</button>
            </form>
        </div>
    </div>
</div>

<?php
    include('./admininclude/footer.php');
?>