<?php
require_once('conn.php');
session_start();

if(isset($_POST['submit'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

   
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 0;
        } else {
            echo "File is not an image.";
            $uploadOk = 1;
        }
    }

    if ($uploadOk == 1) {
        $courseid = filter_var($_POST['coursename'], FILTER_SANITIZE_STRING);
        $classid = filter_var($_POST['class_name'], FILTER_SANITIZE_STRING);
        $task = $_POST['tasks'];
        $date = date('Y-m-d'); 
        $deadline = $_POST['myDate'];


           $query="SELECT id FROM teacher Where username='".$_SESSION['teachername']."' ";
           $result = mysqli_query($conn, $query);
           if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
            $teacherid=$row['id'];
        $sql = "INSERT INTO `agenda` (teacherid, courseid, classid,date, filelink,task, deadline)
                VALUES ('$teacherid', '$courseid', '$classid','$date', '$target_file' ,'$task','$deadline')";
          mysqli_query($conn, $sql);
          header('Location:agendas.php');
           }
           
       else {
            die(mysqli_error($conn));
        }
    }
    
    $conn->close();
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="agendas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            // document.getElementById("main").style.marginLeft = "250px";
            document.getElementById("container").style.marginLeft = "200px"
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            // document.getElementById("main").style.marginLeft = "0";
            document.getElementById("container").style.marginLeft = "0px"
        }
    </script>
</head>

<body>

<aside>
        <div id="mySidebar" class="sidebar">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
         
         
            <div class="logotitle">
            <img class="logo" src="../logos/graph.png" alt="" />
            <a href="../admin-page/teacher-home.php">Home page</a>
          </div>
          <div class="logotitle">
            <img class="logo" src="../logos/profile.png" alt="" />
            <a href="../Teachers/teacher-profile.php"> My Profile</a>
          </div>
          <div class="logotitle">
            <img class="logo" src="../logos/grammar.png" alt="" />
            <a href="../admin-page/agendas.php">Agenda</a>
          </div>
          <div class="logotitle">
                <img class="logo" src="../logos/learning.png" alt="">
                <a href="../admin-page/edit-agenda.php">delete agenda</a>
            </div>
          <div class="logotitle">
            <img class="logo" src="../logos/graduated-student.png" alt="" />
            <a href="../Teachers/class-management.php">Students</a>
          </div>
          <div class="logotitle">
            <img class="logo" src="../logos/learning.png" alt="" />
            <a href="../admin-page/scheduleteacher.php"> Schedule</a>
          </div>
          <div class="logotitle">
            <img class="logo" src="../logos/profile.png" alt="" />
            <a href="../admin-page/grades.php"> Grades</a>
          </div>
          <div class="logotitle">
            <img class="logo" src="../logos/gear.png" alt="" />
            <a href="../index.page/changepasswordteacher.php"> Change Password</a>
          </div>
          <div class="logotitle">
            <img class="logo" src="../logos/door-knob.png" alt="" />
            <a href="../index.page/logout.php"> Log Out</a>
          </div>
            <p class="copyrights">© 2023 The President and Fellows of E School</p>
        </div>
        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; </button>

        </div>
    </aside>

<form action="agendas.php" method="post" enctype="multipart/form-data">
        <div class="mt-2 p-3 ms-auto my-orange-bg  text-white rounded width">
            <div class="row pt-2" >
                <div class="col-sm-3">
                    <label for="Subject">Course Name</label>
                    <select class=" form-control" id="coursename" name="coursename">
                        <option value="" disabled selected>Select Course</option>
                        <?php
                           
                            $sql = "SELECT * FROM `school-management`.course";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                $courseid = $row['id'];
                                $coursename = $row['name'];
                                echo "<option value='$courseid'>$coursename</option>";
                            }
                            ?>
                     
                        

                    </select>                        <div class="alert3" id="alert3"><?php
            if (isset($error)) {
               echo '<span class="error-msg" style="color:red;font-size :10px;margin-top:10px;">'.$error.'</span>';
            }
            ?>
                   </div>

                    

                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <label for="class">Choose Class</label>

                    <select class=" form-control" id="class_name" name="class_name">
                        <option value="" disabled selected>Select Class</option>

                        <?php
                           
                           $sql = "SELECT * FROM `school-management`.class";
                           $result = $conn->query($sql);
                           while ($row = $result->fetch_assoc()) {
                               $classid = $row['id'];
                               $class_name = $row['name'];
                               echo "<option value='$classid'>$class_name</option>";
                           }
                           ?>
                    

                    </select>  <div class="alert2"  id="alert2">
                    <?php
            if (isset($msgclass)) {
               echo '<span class="error-msg" style="color:red;font-size :10px;margin-top:10px;">'.$msgclass.'</span>';
            }
            ?>
                    </div>
                  
                  

                </div>
              

            </div>

            <div class="row pt-2  ">
                <div class="col-sm-8 ">
                    <div class="input-group">
                        <textarea class="form-control" rows="6" placeholder="Tasks" id="tasks" name="tasks"></textarea>

                    </div>
                    <div class="alert4" id="alert4"><?php
            if (isset($msgtask)) {
               echo '<span class="error-msg" style="color:red;font-size :10px;margin-top:10px;">'.$msgtask.'</span>';
            }
            ?></div>
                </div>
                <div class="col-sm-4">

                    <img src="../images/A whole year-pana.svg" alt="agendaimg" id="agendaimg">
                </div>
            </div>
            <div class="row ">  
                <div class="col-4">
                <label for="myDate">Date:</label>
  <input type="date" class="form-control" id="myDate" name="myDate">
                </div>
            </div>
        
            <div class="row pt-2">
                <div class="col-4">
                    <input type="file" class="form-control" id="fileToUpload" name="fileToUpload">
                </div>
              
            </div>

            <hr>

            <div class="row">
                <div class="col-sm-2">
                    <input type="submit" class="btn btn-warning mb-2 "  id="submit" name="submit" value="Submit">

                </div>
            </div>

        </div>
    </div>
    </form>

    <!-- <script>
        let submit = document.getElementById("submitbtn");
        submit.addEventListener("click", () => {
            // let coursename = document.getElementById("coursename").value;
            // let class_name = document.getElementById("class_name").value;
            let tasks = document.getElementById("tasks").value;
            let alert3 = document.getElementById("alert3"); // Add this line to reference the alert element
            let alert2 = document.getElementById("alert2"); // Add this line to reference the alert element
            let alert4 = document.getElementById("alert4"); // Add this line to reference the alert element

            alert3.innerHTML = "";
            alert2.innerHTML = "";
            alert4.innerHTML = "";
            if ($coursename  == "") {
                alert3.innerHTML = "Please enter subject name.";
            }
            if ($class_name == "") {
                alert2.innerHTML = "Please choose the class"
            }
            if ($task == "") {
                alert4.innerHTML = "Please add tasks!"
            }

            else {
                location.href = "../admin-page/edit-agenda.html";
            }
        });
    </script> -->
    <script>
    document.getElementById("form_id").addEventListener("submit", function (event) {
        var classInput = document.getElementById("class_name");
        var alertDiv = document.getElementById("alert2");
        alertDiv.innerHTML = ""; // Clear previous error message

        if (classInput.value === "") {
            event.preventDefault(); // Prevent form submission
            alertDiv.innerHTML = "Please select a class."; // Display error message
        }
    });
</script>

</body>

</html>