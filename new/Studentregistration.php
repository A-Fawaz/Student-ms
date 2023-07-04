<?php

include '../config.php';

require_once("../sendmail.php");
$randomNumber = sprintf("%06d", rand(0, 999999));
$letters = 'abcdefghijklmnopqrstuvwxyz';
$digits = '0123456789';

$randomLetters = substr(str_shuffle($letters), 0, 3);
$randomDigits = substr(str_shuffle($digits), 0, 6);

$randomname = $randomLetters . $randomDigits;
if (isset($_POST['firstnext'])) {
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    if ($firstname == '') {
        $ferror = 'Please fill in the first name!';
    }
    if ($lastname == '') {
        $lerror = 'Please fill in the last name!';
    }
}

if (isset($_POST['submit'])) {

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $class = mysqli_real_escape_string($conn, $_POST['class']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $oldschool = mysqli_real_escape_string($conn, $_POST['oldschool']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role = $_POST['role'];

    $select = "SELECT * FROM student WHERE username = '$username' ";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'Username already exists!';
    } else {
       
        $sql = "SELECT id FROM class WHERE name = '$class'";
        $result = mysqli_query($conn, $sql);
    

        if (mysqli_num_rows($result) > 0 ) {
            $row = mysqli_fetch_assoc($result);
            $classid = $row['id'];

            $insert = "INSERT INTO student (firstname,lastname,email,address,mobile,dob,gender,classid,oldschool, username, password, role)
                       VALUES('$firstname','$lastname','$email','$address','$mobile','$dob','$gender','$classid','$oldschool','$username','$password','$role')";
            mysqli_query($conn, $insert);

            header('location:../new/Studentregistration.php');
            sendEmailWithCC("fatimatarhini7531@gmail.com", " Student Registration", "Welcome Our Student \n\n" . $firstname . "\n" . $lastname . " <br>Your username: " . $username . "</br><br>\nYour password: " . $password."</br>");
        }
    }
}

?>



<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="studentsregistration.css"/>
    <!-- <link href="signup.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
       // document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("eschool1").style.marginLeft = "10px";

    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
       // document.getElementById("main").style.marginLeft = "0";
        document.getElementById("eschool1").style.marginLeft = "-200px";
    }
</script>   



</head>

<body>
    <aside>
        <div id="mySidebar" class="sidebar">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="logotitle">
                <img class="logo" src="../logos/graph.png" alt="">
                <a href="../admin-page/admin-home.php"> Home page</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/graph.png" alt="">
                <a href="../course-dashboard/dashboard.php"> Dashboard</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/graduated-student.png" alt="">
                <a href="../new/liststudent.php">All Students</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/grammar.png" alt="">
                <a href="../new/teacherregi.php">Teachers</a>

            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/gear.png" alt="">
                <a href="../index.page/changepassword.php"> Change Passsword</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/profile.png" alt="">
                <a href="../Admin/admin-profile.php"> My Profile</a>

            </div>
            
            <div class="logotitle">
                <img class="logo" src="../logos/door-knob.png" alt="">
                <a href="../index.page/logout.php"> Log Out</a>

            </div>
            <p class="copyrights">© 2023 The President and Fellows of E School</p>
        </div>

        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; </button>

        </div>
    </aside>
    <nav class="nav2">
        <h1 class="eschool1" id="eschool1">E-School</h1>
        
    </nav>
    <div class="container">
        <header> Student Registration </header>
        <div class="progress-bar">
            <div class="step">
                <p>
                    Name
                </p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>
                    Contact
                </p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>
                    Birth
                </p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            
            <div class="step">
                <p>
                    Education
                </p>
                <div class="bullet">
                    <span>4</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            
            <div class="step">
                <p>
                    Submit
                </p>
                <div class="bullet">
                    <span>5</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>
        <div class="form-outer">
            <form action="" method="post">
                <div class="page slide-page">
                    <div class="title">
                        Basic Info:
                    </div>
                    <div class="field">
                        <div class="label">
                            First Name
                        </div>
                        <input type="text" name="firstname">
                    </div>
                    <div class="field">
                        <div class="label">
                            Last Name
                        </div>
                        <input type="text" name="lastname">
                    </div>
                    <div class="field">
                        <button class="firstNext next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="title">
                        Contact Info:
                    </div>
                    <div class="field">
                        <div class="label">
                            Email 
                        </div>
                        <input type="text" name="email">
                        <div class="addr">
                        Phone Number 
                        </div>
                        <input type="text" name="mobile">
                    </div>
                   
                    <div class="field">
                        <div class="label">
                           Address
                        </div>
                        <input type="text" name="address">
                    </div>
                    <div class="field btns">
                        <button class="prev-1  prev">Previous</button>
                        <button class="next-1 next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="title">
                        Date of Birth:
                    </div>
                    <div class="field">
                        <div class="label">
                            Date
                        </div>
                        <input type="date" name="dob">
                    </div>
                    <div class="field">
                        <div class="label">
                            Gender
                        </div>
                        <select name="gender">
                            <option value="" disabled>please choose</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>

                        </select>
                    </div>
                    <div class="field btns">
                        <button class="prev-2 prev">Previous</button>
                        <button class="next-2 next">Next</button>
                    </div>
                </div>
                
                <div class="page">
                    <div class="title">
                        Education
                    </div>
                    <div class="field">
                        <div class="label">
                           class
                        </div>
                        <input type="text" name="class">
                    </div>
                    <div class="field">
                        <div class="label">
                            Old School
                        </div>
                        <input type="text" name="oldschool">
                    </div>
                    <div class="field btns">
                        <button class="prev-3 prev">Previous</button>
                        <button class="next-3 next">Next</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title">
                        Login Details:
                    </div>
                    <div class="field">
                        <div class="label">
                            Username
                        </div>
                        <input type="text" name="username" value=<?php echo $randomname;?>>
                    </div>
                    <div class="field">
                        <div class="label">
                            Password
                        </div>
                        <input type="text" name="password" value=<?php echo $randomNumber;?>>
                        <input type="hidden" name="role" value="student">
                    </div>
                    <div class="field btns">
                        <button class="prev-4 prev">Previous</button>
                        <input type="submit" name="submit" value="Submit" class="submitall">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="scriptstudent.js"></script>

</body>

</html>