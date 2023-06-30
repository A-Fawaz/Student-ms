<?php

@include '../config.php';
session_start();
$select = "SELECT t.* FROM teacher t  WHERE t.username = '" . $_SESSION['teachername'] . "'";

$result = mysqli_query($conn, $select);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="teacher-profile.css" />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  />
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script>
      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        //document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("container").style.marginLeft = "18vh";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
       // document.getElementById("main").style.marginLeft = "0";
        document.getElementById("container").style.marginLeft = "0px";
      }
    </script>
    <title>Teacher Page</title>
  </head>
  <body>
    <div class="full-cont">
      <aside>
        <div id="mySidebar" class="sidebar">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
            >&times;</a
          >
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
          <p class="copyrights">© 2023 The President of E School</p>
        </div>

        <div id="main">
          <button class="openbtn" onclick="openNav()">&#9776;</button>
        </div>
      </aside>
      

      <!-- /*sidebar end*/ -->
      <div class="row-info-cont">
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div information-cont>
        <div class="info-table">

          <div class="info-container">
        <table class="table">
          
            <div class="container-head">
              <img src="../logos/info2.png" class="info-img" />
              Identification
            </div>
          <tr>
            <td>ID :</td>
            <td><?php echo $row['username']; ?></td>
          </tr>
          <tr>
            <td>Full-Name :</td>
            <td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></td>
          </tr>

          <tr>
            <td>E-Mail :</td>
            <td><?php echo $row['email']; ?></td>
          </tr>

          <tr>
            <td>Mobile :</td>
            <td><?php echo $row['mobile']; ?></td>
          </tr>
          </table>
        </div>
      </div>
        <div class="info-container">
          <table class="table table-responsive">
            
              <div class="container-head">
                <img src="../logos/info2.png" class="info-img" />
                Address
              </div>
            <tr>
              <td>Region :</td>
              <td>Nabatieh.</td>
            </tr>
            <tr>
              <td>Street :</td>
              <td>Street 11.</td>
            </tr>

            <tr>
              <td>Building :</td>
              <td>Building 5.</td>
            </tr>
  
            </tr>
          </table>
          </div>


          <div class="info-table1 ">
            <div class="info-container">
              <table class="table">
                
                  <div class="container-head">
                    <img src="../logos/info2.png" class="info-img" />
                    Other
                  </div>
                <tr>
                  <td>Degree :</td>
                  <td><?php echo $row['certificate']; ?></td>
                <tr>
                  <td>Academic Year :</td>
                  <td>2023-2024</td>
                </tr>

                <tr>
                  <td>Blood Group :</td>
                  <td>O+</td>
                </tr>
      
                </tr>
              </table>
  <?php } ?>
              </div>
            </div>
    

      </div>
        

        <div class="img">
          <img src="../images/Teacher-student1.gif" alt="teacher-student">
        </div>
      </div>
    </div>
 

  
  </body>
</html>
