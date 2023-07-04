<?php
include '../config.php';
  $classid= $_GET['cid'];
$classname="";
$sql2="SELECT name FROM class where id= '$classid'";
$result2=mysqli_query($conn, $sql2);
while($row = mysqli_fetch_assoc($result2)) {
  $classname=$row["name"];
}




?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <script>
      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("container").style.marginLeft = "18vh";
        document.getElementById("t").style.marginLeft = "20vh";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("container").style.marginLeft = "0px";
      }
    </script>
    <link rel="stylesheet" href="class-info.css" />
    <title>Class</title>
  </head>
  <body>
  <aside>
        <div id="mySidebar" class="sidebar">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
            >&times;</a>
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
      <nav class="nav2">
        <h1 class="eschool1" id="eschool1">E-School</h1>
        
    </nav>

    <div class="container" id="container1">
      <div class="co">
        <!-- <p class="grade">Grade X</p> -->
        <!-- <div class="table-responsive"> -->

        <input type="text" id="Input" onkeyup="myFunction()" class="searchbar" data-table="table-striped"
            placeholder="Search for ...." title="Type in a name">
            <span class="gradeid"><?php echo $classname;?></span>
        <table class="table-responsive">
          <table class="table table-striped table-bordered table-sm" id="t">
            <thead class="head">
              <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>email</th>
                <th>Notes</th>
                <th>Grades</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $conn = mysqli_connect("localhost", "root", "", "school-management");

              if (!$conn) {
                  die('unable to connect to the database' . mysqli_error());
              } else {
                  // if(isset($_SESSION['teachername'])) {
                
                  $sql = "SELECT id, firstname, lastname, email FROM `student` WHERE classid='$classid'";

                  $result = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_assoc($result)) {

                      echo "<tr>";
                      echo "<td>". $row["firstname"]. "</td>";
                      echo "<td>". $row["lastname"]. "</td>";
                      echo "<td>". $row["email"]. "</td>";
                      echo "<td><a href='Feedback.php?Sid=" . $row['id'] . "'><button class='btn'>Add</button></a><a href='ViewFeedback.php?Sid=" . $row['id'] . "'><button class='btn'>View</button></a></td>";
                      echo "<td><a href='../admin-page/grades.php'><button class='btn'>Add</button></a></td>";
                      echo "</tr>";
                  }
              }
              //  else {
              //     header("Location:../index.page/signup.php");
              // }
              // }

              ?>
    </tbody>
          </table>
        </table>
        <!-- </div> -->
      </div>
    </div>
    <script>
      (function(document) {
    'use strict';
    var TableFilter = (function(Arr) {
      var _input;
      function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
      Arr.forEach.call(table.tBodies, function(tbody) {
      Arr.forEach.call(tbody.rows, _filter);
      });
      });
      }
      function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
      }
      return {
      init: function() {
      var inputs = document.getElementsByClassName('searchbar');
      Arr.forEach.call(inputs, function(input) {
      input.oninput = _onInputEvent;
      });
      }
      };
    })(Array.prototype);
    document.addEventListener('readystatechange', function() {
      if (document.readyState === 'complete') {
      TableFilter.init();
      }
    });
  })(document)
      </script>
  </body>
</html>