




<?php
require_once('conn.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $classId = $_POST['class_name'];
    $courseId = $_POST['coursename'];
    $grades = $_POST['grade'];
    $studentIds = $_POST['studentId'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO `student-course-grade` (studentid, courseid, grade) VALUES (?, ?, ?)");

    // Bind parameters and execute the statement for each grade
    for ($i = 0; $i < count($grades); $i++) {
        //$studentId = $studentIds[$i]; // Assuming student IDs start from 1 and increment by 1

        $stmt->bind_param("iii", $studentIds[$i], $courseId, $grades[$i]);
        $stmt->execute();
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
    header("Location: grades.php");
    exit();


}


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="grade.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("container").style.marginLeft = "40vh";

        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("container").style.marginLeft = "20vh";

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
            <a href="../admin-page/scheduale.php"> Schedule</a>
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
<form action="grades.php" method="post">
    <div class="container custom-container me-4 ">
        <div class=" my-orange-bg  text-black rounded ">
            <div class="row justify-content-center ">
                <div class="col-sm-8">
                    <h1>E-School Grade System</h1>

                </div>
            </div>
            <div class="row  mt-3  p-2 justify-content-center ">
<div class="col-sm-1"></div>
                <div class="col-sm-3 ">
                    <label for="Name">Choose Class</label>
                    <select class="form-control" name="class_name" id="class_name" required onchange="getStudentsByClass(this.value)">
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

                    </select>
                    <div class="alert1" id="alert1"></div>
                </div>
                <div class="col-sm-3">
                    <label for="Name">Choose Subject</label>
                    <select class="form-control" name="coursename" id="coursename" required>
                        <option value="" disabled selected>Choose subject</option>

                        <?php
                           
                           $sql = "SELECT * FROM  `school-management`.course";
                           $result = $conn->query($sql);
                           while ($row = $result->fetch_assoc()) {
                               $courseid = $row['id'];
                               $coursename = $row['name'];
                               echo "<option value='$courseid'>$coursename</option>";
                           }
                           ?>

                    </select>
                    <div class="alert2" id="alert2"></div>

                </div>
                


                
                <!-- <div class="col-sm-3">
                    <input type="submit" class=" btn   btn-warning  m-4" id="show" name="show_students" value="Show Students">
                </div> -->
                <div class="col-sm-1"></div>
            </div>


            <div class="row justify-content-center mt-3">
                <div class="col-sm-8">
                    <div class="table-responsive">
               
                    <table class="table table-bordered  table-hover table-striped" id="tablegrades">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th> FirstName</th>
                                <th> LastName</th>
                                <th>Class</th>
                               <th>grade</th>                             

                            </tr>
                        </thead> 
                        <tbody id="data"> 
                       </tbody>
                    </table>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-sm-8">

                </div>
                <div class="col-sm-4">

                    <label for="submit">Please click "Submit" to Save grade</label><br>
                    <input type="submit" class="btn btn-warning mb-2" id="submit" name="submit" value="Submit">
                </div>

            </div>
        




    </div>



    </div>
                        </form>
    <script>
        // let show = document.getElementById("show");
        // show.addEventListener("click", () => {
        //     let subjectname = document.getElementById("subject").value;
        //     let chooseclass = document.getElementById("chooseclass").value;
        //     let alert1 = document.getElementById("alert1"); // Add this line to reference the alert element
        //     let alert2 = document.getElementById("alert2"); // Add this line to reference the alert element

        //     alert1.innerHTML = "";
        //     alert2.innerHTML = "";
        //     if (subjectname == "") {
        //         alert2.innerHTML = "Please select subject name.";
        //     }
        //     if (chooseclass == "") {
        //         alert1.innerHTML = "Please choose the class"
        //     }
          

        //     else {
        //         location.href = "../admin-page/edit-agenda.html";
        //     }
        // });
        function getStudentsByClass() {
    var classId = document.getElementById("class_name").value;
    var ajax = new XMLHttpRequest();
    var method = "GET";
    var url = "task.php?id=" + classId;
    var asynchronous = true;
    ajax.open(method, url, asynchronous);
    ajax.send();
    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);
            var html = "";
            for (var a = 0; a < data.length; a++) {
                var studentid = data[a].studentId;
    var firstname = data[a].firstname;
    var lastname = data[a].lastname;
    var classname = data[a].name;

    html += "<tr>";
    // html += "<td>" + studentid + "</td>";
    html += "<td><input type='label' readonly style='width: 20px;border:none;' value='" + studentid + "' name='studentId[]'></td>";
    html += "<td>" + firstname + "</td>";
    html += "<td>" + lastname + "</td>";
    html += "<td>" + classname + "</td>";
    html += "<td>";
   
    html += "<input type='text' class='form-control hi' name='grade[]'>";
    html += "</td>";
    html += "</tr>";
 

            }
            document.getElementById("data").innerHTML = html;
        }
    }
}
var classSelect = document.getElementById("class_name");
        classSelect.addEventListener("change", function () {
            var selectedClassId = classSelect.value;
            if (selectedClassId !== "") {
                getStudentsByClass(selectedClassId);
            } else {
                // Clear the table if no class is selected
                document.getElementById("data").innerHTML = "";
            }
        });


        
</script>




</body>

</html>