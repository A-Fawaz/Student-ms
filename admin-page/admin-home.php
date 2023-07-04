<?php

include '../config.php';

session_start();
if(!isset($_SESSION['adminname']))
{
    header('location:../index.page/signup.php');
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-home.css">
</head>

<body>
    <div class="one">
        <nav>
            <h1>E-School</h1>
            <ul class="nav-list">
              
                    <li><a href="../index.page/logout.php"><b>Log Out</b></a></li>
            </ul>
        </nav>
    </div>
    <div class="fill-container">
        <div class="image1"  ><img  src="../images/admin.gif" id="adminimg" alt="admin" height="400px" width="400px"></div>
        <div class="container">
            <div class="row1">

                <div> <button type="button " class="btn1" onclick="window.location.href='../Admin/admin-profile.php';">
                        <img class="images" src="../logos/user.png" alt="profile">
                    </button>
                    <p>Profile</p>
                </div>
                 <div> <button type="button " class="btn1" onclick="window.location.href='../new/teacherregi.php';"> 
                 <img class="images" src="../logos/presentation.png" alt="teacher">
                    </button>
                    <p>Teachers</p>
                </div>
                <div> <button type="button " class="btn1" onclick="window.location.href='../new/Studentregistration.php';"> <img class="images" src="../logos/students.png" alt="student">
                    </button>
                    <p>Students</p>
                </div>
            </div>
            <div class="row2">

                <div> <button type="button " class="btn1" onclick="window.location.href='../course-dashboard/dashboard.php';"> <img class="images" src="../logos/dashboard.png" alt="courses">
                    </button>
                    <p>Dashboard</p>
                </div>
                <div> <button type="button " class="btn1" onclick="window.location.href='../index.page/changepassword.php';"> <img class="images" src="../logos/password.png" alt="change password">
                    </button>
                    <p>Change Password</p>
                </div>
                <div> <button type="button " class="btn1" onclick="window.location.href='../admin-page/scheduale.php';"> <img class="images" src="../logos/calendar.png" alt="scheduale">
                    </button>
                    <p>Scheduale</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>