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
                <li><a href="../index.page/index.html">Home</a></li>
                    <li><a id="space" href="../index.page/index.html#about-section">About</a></li>
                    <li><a href="../admin-page/contact.html">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="fill-container">
        <div class="image1"  ><img  src="../images/admin.gif" id="adminimg" alt="admin" height="400px" width="400px"></div>
        <div class="container">
            <div class="row1">

                <div> <button type="button " class="btn1" onclick="window.location.href='../course-dashboard/dashboard.html';">
                        <img class="images" src="../logos/user.png" alt="profile">
                    </button>
                    <p>Profile</p>
                </div>
                <div> <button type="button " class="btn1" onclick="window.location.href='../Teachers/class-management.php';"> <img class="images" src="../logos/presentation.png" alt="teacher">
                    </button>
                    <p>Teachers</p>
                </div>
                <div> <button type="button " class="btn1" onclick="window.location.href='../Student/student-profile.php';"> <img class="images" src="../logos/students.png" alt="student">
                    </button>
                    <p>Students</p>
                </div>
            </div>
            <div class="row2">

                <div> <button type="button " class="btn1" onclick="window.location.href='../course-dashboard/dashboard.php';"> <img class="images" src="../logos/dashboard.png" alt="courses">
                    </button>
                    <p>Dashboard</p>
                </div>
                <div> <button type="button " class="btn1" onclick="window.location.href='../index.page/changeforget.php';"> <img class="images" src="../logos/password.png" alt="change password">
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