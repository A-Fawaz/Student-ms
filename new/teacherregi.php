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
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    

    // Validate the form data (you can add more validation if needed)
    if (empty($firstname) || empty($lastname) ) {
        $validation = "Please fill in all fields.";
    }
}

if (isset($_POST['submit'])) {

    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $class = mysqli_real_escape_string($conn, $_POST['class']);
    $certificate = mysqli_real_escape_string($conn, $_POST['certificate']);
    $university = mysqli_real_escape_string($conn, $_POST['university']);
    $experienceyears = mysqli_real_escape_string($conn, $_POST['experienceyears']);
    $oldschool = mysqli_real_escape_string($conn, $_POST['oldschool']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role = $_POST['role'];

    $select = "SELECT * FROM teacher WHERE username = '$username'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $usererror[] = 'Username already exists!';
    } else {
        $sql = "SELECT id FROM course WHERE name = '$course'";
        $sql1 = "SELECT id FROM class WHERE name = '$class'";
        $result = mysqli_query($conn, $sql);
        $result1 = mysqli_query($conn, $sql1);

        if (mysqli_num_rows($result) > 0 && mysqli_num_rows($result1) > 0) {
            $row = mysqli_fetch_assoc($result);
            $row1 = mysqli_fetch_assoc($result1);
            $courseid = $row['id'];
            $classid = $row1['id'];

            $insert = "INSERT INTO teacher(firstname,lastname,email,mobile,dob,gender,courseid,classid,certificate,university,experienceyears,oldschool, username, password, role)
                       VALUES('$firstname','$lastname','$email','$mobile','$dob','$gender','$courseid','$classid','$certificate','$university','$experienceyears','$oldschool','$username','$password','$role')";
            mysqli_query($conn, $insert);

            header('location:../new/teacherregi.php');
            sendEmailWithCC("fatimatarhini7531@gmail.com", " Teacher Registration", "Welcome Our Teacher \n\n" . $firstname . "\n" . $lastname . " <br>Your username: " . $username . "</br><br>\nYour password: " . $password."</br>");
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
    <title>Teacher Registration</title>
    <link rel="stylesheet" href="teacherreg.css" />
    <!-- <link href="signup.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
           // document.getElementById("main").style.marginLeft = "250px";
            document.getElementById("eschool1").style.marginLeft = "5px";

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
                <a href="../course dashboard/dashboard.html"> Dashboard</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/grammar.png" alt="">
                <a href="../new/listteacher.php">All Teachers</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/graduated-student.png" alt="">
                <a href="../new/Studentregistration.php">Students</a>

            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/gear.png" alt="">
                <a href="../index.page/changepassword.php"> Change Password</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/profile.png" alt="">
                <a href="../Admin/admin-profile.php"> MY Profile</a>

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
        <ul class="nav-list2">


        </ul>
    </nav>
    <div class="container">
        <header> Teacher Registration </header>
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
                    Language
                </p>
                <div class="bullet">
                    <span>4</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>
                    Education
                </p>
                <div class="bullet">
                    <span>5</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>
                    Experience
                </p>
                <div class="bullet">
                    <span>6</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>
                    Submit
                </p>
                <div class="bullet">
                    <span>7</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>
        <div class="form-outer">
            <form  action="" method="post">
                <div class="page slide-page">
                    <div class="title">
                        Basic Info:
                    </div>
                    <div class="field">
                        <div class="label">
                            First Name
                        </div>
                        <input type="text" name="firstname" required>
                        <span class="validation-message"><?php if (isset($validation)) { echo $validation; } ?></span> 
            
                    </div>
                    <div class="field">
                        <div class="label">
                            Last Name
                        </div>
                        <input type="text" name="lastname" required>
                        <span class="validation-message"><?php if (isset($validation)) { echo $validation; } ?></span> 
            
                    </div>
                    <div class="field">
                    <button type="submit" class="firstNext next" name="firstnext">Next</button>
                        
                    </div>
                </div>
                <div class="page">
                    <div class="title">
                        Contact Info:
                    </div>
                    <div class="field">
                        <div class="label">
                            Email Address
                        </div>
                        <input type="email" name="email" required>
                        <?php
            if (isset($emailerror)) {
               echo '<span class="error-msg" style="color:red;font-size :15px;margin-bottom:20px;">'.$emailerror.'</span>';
            }
            ?>
                    </div>
                    <div class="field">
                        <div class="label">
                            Phone Number
                        </div>
                        <input type="text" name="mobile"  pattern="[0-9]{8}" required>
                        <?php
            if (isset($mobileerror)) {
               echo '<span class="error-msg" style="color:red;font-size :15px;margin-bottom:20px;">'.$mobileerror.'</span>';
            }
            ?>
                    </div>
                    <div class="field btns">
                        <button class="prev-1 prev">Previous</button>
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
                        <input type="date" name="dob" required>
                        <?php
            if (isset($doberror)) {
               echo '<span class="error-msg" style="color:red;font-size :15px;margin-bottom:20px;">'.$doberror.'</span>';
            }
            ?>
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
                    <div class="field   ">
                        <button class="prev-2 prev">Previous</button>
                        <button class="next-2 next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="title">
                        Language:
                    </div>
                    <div class="field">
                        <div class="label">
                            Course
                        </div>
                        <input type="text" name="course" required>
                        <?php
            if (isset($courseerror)) {
               echo '<span class="error-msg" style="color:red;font-size :15px;margin-bottom:20px;">'.$courseerror.'</span>';
            }
            ?>
                    </div>
                    <div class="field">
                        <div class="label">
                           class
                        </div>
                        <input type="text" name="class" required>
                    </div>
                    <div class="field btns">
                        <button class="prev-3 prev">Previous</button>
                        <button class="next-3 next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="title">
                        Education
                    </div>
                    <div class="field">
                        <div class="label">
                            Certificate
                        </div>
                        <input type="text" name="certificate" required>
                        <?php
            if (isset($certificateerror)) {
               echo '<span class="error-msg" style="color:red;font-size :15px;margin-bottom:20px;">'.$certificateerror.'</span>';
            }
            ?>
                    </div>
                    <div class="field">
                        <div class="label">
                            University
                        </div>
                        <input type="text"name="university" required>
                    </div>
                    <div class="field btns">
                        <button class="prev-4 prev">Previous</button>
                        <button class="next-4 next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="title">
                        Experience
                    </div>
                    <div class="field">
                        <div class="label">
                            Years Of Experience:
                        </div>
                        <input type="text" name="experienceyears" pattern="[0-9]+" required>
                
                    </div>
                    <div class="field">
                        <div class="label">
                            Old School
                        </div>
                        <input type="text" name="oldschool">
                    </div>
                    <div class="field btns">
                        <button class="prev-5 prev">Previous</button>
                        <button class="next-5 next">Next</button>
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
                         <?php if (isset($usererror)) : ?>
                        <span class="validation-message"><?php echo $usererror; ?></span>
                    <?php endif; ?>
                    </div>
                    <div class="field">
                        <div class="label">
                            Password
                        </div>
                        <input type="text" name="password" value=<?php echo $randomNumber;?>>
                        <?php
            if (isset($passerror)) {
               echo '<span class="error-msg" style="color:red;font-size :15px;margin-bottom:20px;">'.$passerror.'</span>';
            }
            ?>
                        <input type="hidden" name="role" value="teacher">
                    </div>
                    <div class="field btns">
                        <button class="prev-6 prev">Previous</button>
                        <input type="submit" name="submit" value="Submit" class="submitall">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>