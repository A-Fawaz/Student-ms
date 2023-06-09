<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="class-management.css" />
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
        document.getElementById("main").style.marginLeft = "250px";
        // document.getElementById("container").style.marginLeft = "18vh";
        document.getElementById("forcont").style.marginLeft = "350px";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        // document.getElementById("container").style.marginLeft = "0px";
        document.getElementById("forcont").style.marginLeft = "0px";
      }
    </script>

    <title>Class Management</title>
  </head>
  <body>
    <div class="containerF">
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
    </div>
    <div class="for-cont" id="forcont">
      <div class="row">
        <div class="Col-md-4 col-lg-4 col-xs-6 col-sm-6">
          <div class="card">
            <img src="../images/Teacher-student1.gif" class="card-img" />
            <div class="info-container">
              <div class="grade-name">Grade-1</div>
              <div class="student-number">15 Students.</div>
              <button class="card-btn">View Class</button>
            </div>
          </div>
        </div>

        <div class="Col-md-4 col-lg-4 col-xs-6 col-sm-6">
          <div class="card">
            <img src="../images/Teacher-student1.gif" class="card-img" />
            <div class="info-container">
              <div class="grade-name">Grade-2</div>
              <div class="student-number">15 Students.</div>
              <button class="card-btn">View Class</button>
            </div>
          </div>
        </div>

        <div class="Col-md-4 col-lg-4 col-xs-6 col-sm-6">
          <div class="card">
            <img src="../images/Teacher-student1.gif" class="card-img" />
            <div class="info-container">
              <div class="grade-name">Grade-3</div>
              <div class="student-number">15 Students.</div>
              <button class="card-btn">View Class</button>
            </div>
          </div>
        </div>

        <div class="Col-md-4 col-lg-4 col-xs-6 col-sm-6">
          <div class="card">
            <img src="../images/Teacher-student1.gif" class="card-img" />
            <div class="info-container">
              <div class="grade-name">Grade-4</div>
              <div class="student-number">15 Students.</div>
              <button class="card-btn">View Class</button>
            </div>
          </div>
        </div>

        <div class="Col-md-4 col-lg-4 col-xs-6 col-sm-6">
          <div class="card">
            <img src="../images/Teacher-student1.gif" class="card-img" />
            <div class="info-container">
              <div class="grade-name">Grade-5</div>
              <div class="student-number">15 Students.</div>
              <button class="card-btn">View Class</button>
            </div>
          </div>
        </div>

        <div class="Col-md-4 col-lg-4 col-xs-6 col-sm-6">
          <div class="card">
            <img src="../images/Teacher-student1.gif" class="card-img" />
            <div class="info-container">
              <div class="grade-name">Grade-6</div>
              <div class="student-number">15 Students.</div>
              <button class="card-btn">View Class</button>
            </div>
          </div>
        </div>

        <div class="Col-md-4 col-lg-4 col-xs-6 col-sm-6">
          <div class="card">
            <img src="../images/Teacher-student1.gif" class="card-img" />
            <div class="info-container">
              <div class="grade-name">Grade-7</div>
              <div class="student-number">15 Students.</div>
              <button class="card-btn">View Class</button>
            </div>
          </div>
        </div>

        <div class="Col-md-4 col-lg-4 col-xs-6 col-sm-6">
          <div class="card">
            <img src="../images/Teacher-student1.gif" class="card-img" />
            <div class="info-container">
              <div class="grade-name">Grade-8</div>
              <div class="student-number">15 Students.</div>
              <button class="card-btn">View Class</button>
            </div>
          </div>
        </div>

        <div class="Col-md-4 col-lg-4 col-xs-6 col-sm-6">
          <div class="card">
            <img src="../images/Teacher-student1.gif" class="card-img" />
            <div class="info-container">
              <div class="grade-name">Grade-9</div>
              <div class="student-number">15 Students.</div>
              <button class="card-btn">View Class</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- </div> -->
  </body>
</html>
