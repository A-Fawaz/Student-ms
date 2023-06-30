<?php

@include '../config.php';
session_start();
if(!isset($_SESSION['teachername'])){
    header('location:../index.page/signup.php');
  }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="teacher-home.css">
</head>

<body>
    <div>
        <nav>
            <h1>E-School</h1>
            <ul class="nav-list">
               
                <li><a href="../index.page/logout.php"><b>Log Out</b></a></li>
            </ul>
        </nav>
    </div>
    <div class="fill-container">
        <div class="image1"  ><img  src="../images/Mathematics.gif" id="firstimg" alt="admin" height="400px" width="400px"></div>
        <div class="container">
            <div class="row1">
<div>
              <button type="button " class="btn1" onclick="window.location.href='../Teachers/teacher-profile.php';">
                        <img class="images" src="../logos/user.png" alt="profile">
                    </button>
                    <p>Profile</p>
                </div>
                <div> <button type="button " class="btn1" onclick="window.location.href='../Teachers/class-management.html';"> <img class="images" src="../logos/school.png" alt="classes">
                    </button>
                    <p>Class Managment</p>
                </div>
                <div> <button type="button " class="btn1" onclick="window.location.href='../admin-page/agendas.html';"> <img class="images" src="../logos/notebook.png" alt="agenda">
                    </button>
                    <p>Agenda</p>
                </div>
            </div>
            <div class="row2">

                <div> <button type="button " class="btn1" onclick="window.location.href='../admin-page/grades.html';"> <img class="images" src="../logos/marking.png" alt="grades">
                    </button>
                    <p>Grades</p>
                </div>
                <div> <button type="button " class="btn1" onclick="window.location.href='../index.page/changepasswordteacher.php';"> <img class="images" src="../logos/password.png" alt="change password">
                    </button>
                    <p>Change Password</p>
                </div>
                <div> <button type="button " class="btn1" onclick="window.location.href='../admin-page/scheduale.html';"> <img class="images" src="../logos/calendar.png" alt="scheduale">
                    </button>
                    <p>Scheduale</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>