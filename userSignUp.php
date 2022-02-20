<?php
    include('./mainInclude/header.php');
?>


<div class="mb-3 text-center mt-5" style="font-size: 30px;">
    <br>
    <span>Create An Account</span>
</div>
<p class="text-center" style="font-size: 20px;">
    <i class="fas fa-user-secret text-danger"></i>
    <span>User Area</span>
</p>
<div class="container-fluid mb-5">
    <div class="row justify-content-center custom-margin">
        <div class="col-sm-6 col-md-4">
            <form action="process.php" id="stuRegFrom" class="shadow-lg p-4" method="POST">
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label for="stuname" class="pl-2 font-weight-bold">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
                </div>
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <label for="stuemail" class="pl-2 font-weight-bold">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail">
                    <small class="form-text">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <i class="fas fa-key"></i>
                    <label for="stupass" class="pl-2 font-weight-bold">New Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
                </div>
                <button type="submit" class="btn btn-primary mt-5 btn-block shadow-sm font-weight-bold" name="rSignup">Sign Up</button>
                <em style="font-size:10px;">Note - By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy.</em>
                <?php if(isset($regmsg)) {echo $regmsg; } ?>
            </form>
            <div class="text-center">
                <a class="btn btn-info mt-3 shadow-sm font-weight-bold" href="./index.php">Back to Home</a>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>

<!-- Font Awesome JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-RXf+QSDCUQs5uwRKaDoXt55jygZZm2V++WUZduaU/Ui/9EGp3f/2KZVahFZBKGH0s774sd3HmrhUy+SgOFQLVQ==" crossorigin="anonymous"></script>

<!-- Student Testimonial Owl Slider JS -->
<script src="js/ajaxrequest.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->