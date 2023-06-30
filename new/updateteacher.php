<?php 
include "../config.php";


if (isset($_POST['update'])) {
    $firstname = $_POST['firstname'];
    $user_id = $_POST['user_id'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $certificate = $_POST['certificate'];
    $university = $_POST['university'];
    $gender = $_POST['gender'];
    $experienceyears = $_POST['experienceyears'];
    $username = $_POST['username'];
    $course_name = $_POST['course']; // Course name from input
    $class_name = $_POST['class']; // Class name from input

    // Initialize the $course_id variable
    $course_id = null;

    // Retrieve course ID based on the selected course name
    $course_query = "SELECT id FROM course WHERE name = '$course_name'";
    $course_result = $conn->query($course_query);
    if ($course_result->num_rows > 0) {
        $course_row = $course_result->fetch_assoc();
        $course_id = $course_row['id'];
    }

    $class_id = null;

    // Retrieve class ID based on the selected class name
    $class_query = "SELECT id FROM class WHERE name = '$class_name'";
    $class_result = $conn->query($class_query);
    if ($class_result->num_rows > 0) {
        $class_row = $class_result->fetch_assoc();
        $class_id = $class_row['id'];
    }

    $sql = "UPDATE teacher SET firstname='$firstname', lastname='$lastname',
            email='$email', courseid='$course_id', dob='$dob', mobile='$mobile',
            certificate='$certificate', university='$university', gender='$gender',
            experienceyears='$experienceyears', classid='$class_id',
            username='$username' WHERE id='$user_id'";

    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


if (isset($_GET['id'])) {
    $user_id = $_GET['id']; 

    $sql = "SELECT teacher.*, course.name AS course_name, class.name AS class_name FROM teacher 
    INNER JOIN course ON teacher.courseid = course.id INNER JOIN class ON teacher.classid = class.id 
    WHERE teacher.id='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $course = $row['course_name'];
            $dob = $row['dob'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $certificate = $row['certificate'];
            $university = $row['university'];
            $gender = $row['gender'];
            $experienceyears = $row['experienceyears'];
            $class = $row['class_name']; 
            $username = $row['username'];
            $id = $row['id'];
        } 
    }
}
?> 




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="update.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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


    <title>Update Teacher </title>
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
                <img class="logo" src="../logos/graduated-student.png" alt="">
                <a href="../new/listteacher.php">All Teachers</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/grammar.png" alt="">
                <a href="../new/Studentregistration.php">Students</a>

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
        <header>Update Information </header>
        <form action="" method="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>
                    <div class="fields">
                        <div class="input-field" >
                            <label>First Name</label>
                            <input type="text" name="firstname"  value="<?php echo $firstname; ?>" id="textadd" >
                            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                            <p class="textp" id="textp"></p>
                        </div>
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="dob"  value="<?php echo $dob; ?>" id="textadd" >
                            <p class="textp" id="textp"></p>
                        </div>
                        <div class="input-field">
                            <label>Email Address</label>
                            <input type="text" name="email"  value="<?php echo $email; ?>" id="textadd">
                            <p class="textp" id="textp"></p>
                        </div>
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" name="lastname" value="<?php echo $lastname; ?>" id="textadd">
                            <p class="textp" id="textp"></p>
                        </div>
                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option value="male" <?php if($gender == 'male') echo 'selected'; ?>>Male</option>
                                <option value="female" <?php if($gender == 'female') echo 'selected'; ?>>Female</option>
                               
                            </select>

                        </div>
                        <div class="input-field">
                            <label>Phone Number </label>
                            <input type="text"  name="mobile" value="<?php echo $mobile; ?>" id="textadd">
                            <p class="textp" id="textp"></p>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">Education Details</span>
                    <div class="fields">
                    <div class="input-field">
                       <label>Course</label>
               
                        <input type="text" class="form-control" id="textadd" name="course" value="<?php echo $course; ?>" required>


                                     </div>
                        <div class="input-field">
                            <label>Certificate</label>
                            <input type="text"  name="certificate" value="<?php echo $certificate; ?>" id="textadd">
                            <p class="textp" id="textp"></p>
                        </div>
                        <div class="input-field">
                            <label>University</label>
                            <input type="text"  name="university" value="<?php echo $university; ?>"  id="textadd">
                            <p class="textp" id="textp"></p>
                        </div>
                        <div class="input-field">
                            <label>Experience</label>
                            <input type="text"  name="experienceyears" value="<?php echo $experienceyears; ?>"  id="textadd" >
                            <p class="textp" id="textp"></p>
                        </div>
                        <div class="input-field">
    <label>Class</label>
    <input type="text" class="form-control" id="textadd" name="class" value="<?php echo $class; ?>" required>
</div>
                        <div class="input-field">
                            <label>Username</label>
                            <input type="text"  name="username" value="<?php echo $username; ?>" id="textadd">
                            <p class="textp" id="textp"></p>
                        </div>
                    </div>
                    <button class="sumbit" name="update"  onclick="check()">
                        <span class="btnText" >Submit</span>

                    </button>

                </div>
            </div>

        </form>
    </div>
    <script src="update.js"></script>
</body>
</html>