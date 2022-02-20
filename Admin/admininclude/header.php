<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/adminstyle.css">
</head>

<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top p-0 shadow" style="background-color: #225470;">
        <a href="adminDashboard.php">E-learning <small class="text-white">Admin</small></a>
    </nav>
    
    <!-- Side Bar -->
    <div class="container fluid mb-5" style="margin-top:40px;"> 
        <div class="row">
            <nav class="col-sm-3 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="adminDashboard.php"><i class="fas fa-tachnometer"></i>Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="courses.php"><i class="fab fa-accessible-icon"></i>Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lessons.php"><i class="fab fa-accessible-icon"></i>Lessons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="students.php"><i class="fas fa-users"></i>Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-table"></i>Sell Report</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-table"></i>Payment Status</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="adminChangePass.php"><i class="fas fa-key"></i>Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout </a>
                        </li>
                    </ul>
                </div>
            </nav>