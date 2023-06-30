<?php 
include "../config.php";

if (isset($_POST['update'])) {
    $firstname = $_POST['firstname'];
    $user_id = $_POST['user_id'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    
   
    $gender = $_POST['gender'];
   
    $username = $_POST['username'];
    $oldschool = $_POST['oldschool']; // Course name from input
    $class_name = $_POST['class']; // Class name from input

    

    $class_id = null;

    // Retrieve class ID based on the selected class name
    $class_query = "SELECT id FROM class WHERE name = '$class_name'";
    $class_result = $conn->query($class_query);
    if ($class_result->num_rows > 0) {
        $class_row = $class_result->fetch_assoc();
        $class_id = $class_row['id'];
    }

    $sql = "UPDATE student SET firstname='$firstname', lastname='$lastname',
            email='$email',  dob='$dob', mobile='$mobile',
            gender='$gender',
            oldschool='$oldschool', classid='$class_id',
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

    $sql = "SELECT student.*,  class.name AS class_name FROM student 
    INNER JOIN  class ON student.classid = class.id 
    WHERE student.id='$user_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $oldschool = $row['oldschool'];
            $dob = $row['dob'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            
           
            $gender = $row['gender'];
          
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
  
    <link href="updatestudents.css" rel="stylesheet" />
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
    
    
    <title>Update Student </title>
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
    <div class="container1">
        <header>Update Information </header>
        <form action="" method ="post">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>First Name</label>
                            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                            <input type="text" name="firstname"  value="<?php echo $firstname; ?>" required>
                        </div>
                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="dob"  value="<?php echo $dob; ?>"required>
                        </div>
                        <div class="input-field">
                            <label>Email Address</label>
                            <input type="text" name="email"  value="<?php echo $email; ?>" required>
                        </div>
                        <div class="input-field">
                            <label>Last Name</label>
                            <input type="text" name="lastname"  value="<?php echo $lastname; ?>" required>
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
                            <input type="text" name="mobile" value="<?php echo $mobile; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="details ID">
                    <span class="title">Education Details</span>
                    <div class="fields">
                        
                    <div class="input-field">
    <label>Class</label>
    <input type="text" class="form-control" id="textadd" name="class" value="<?php echo $class; ?>" required>
</div>
                        <div class="input-field">
                            <label>Old School</label>
                            <input type="text" name="oldschool" value="<?php echo $oldschool; ?>" required>
                        </div>
                        <div class="input-field">
                            <label>Username</label>
                            <input type="text" name="username" value="<?php echo $username; ?>" required>
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