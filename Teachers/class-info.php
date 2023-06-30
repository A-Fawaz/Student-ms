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
        document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("container").style.marginLeft = "18vh";
        document.getElementById("t").style.marginLeft = "20vh";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
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
          >&times;</a
        >

        <div class="logotitle">
          <img class="logo" src="../logos/graph.png" alt="" />
          <a href="#"> Dashboard</a>
        </div>
        <div class="logotitle">
          <img class="logo" src="../logos/grammar.png" alt="" />
          <a href="#">Teachers</a>
        </div>
        <div class="logotitle">
          <img class="logo" src="../logos/graduated-student.png" alt="" />
          <a href="#">Students</a>
        </div>
        <div class="logotitle">
          <img class="logo" src="../logos/learning.png" alt="" />
          <a href="#"> Courses</a>
        </div>
        <div class="logotitle">
          <img class="logo" src="../logos/profile.png" alt="" />
          <a href="#"> Profile</a>
        </div>
        <div class="logotitle">
          <img class="logo" src="../logos/gear.png" alt="" />
          <a href="#"> Settings</a>
        </div>
        <div class="logotitle">
          <img class="logo" src="../logos/door-knob.png" alt="" />
          <a href="#"> Log Out</a>
        </div>
        <p class="copyrights">© 2023 The President and Fellows of E School</p>
      </div>

      <div id="main">
        <button class="openbtn" onclick="openNav()">&#9776;</button>
      </div>
    </aside>

    <div class="container" id="container1">
      <div class="co">
        <!-- <p class="grade">Grade X</p> -->
        <!-- <div class="table-responsive"> -->
        <table class="table table-striped table-bordered" id="t">
          <thead class="head">
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Grade</th>
              <th>Feedback</th>
              <th>Grades</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>john@example.com</td>
              <td>
                <button class="btn">
                  <a href="Feedback.html" class="fb">Add Feedback... &#8594;</a>
                </button>
              </td>
              <td>
                <button class="btn">
                  <a href="Feedback.html" class="fb">
                    Class Grades... &#8594;</a
                  >
                </button>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- </div> -->
      </div>
    </div>
  </body>
</html>
