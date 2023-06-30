<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Feedback.css" />
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
        // document.getElementById("main").style.marginLeft = "250px";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        // document.getElementById("main").style.marginLeft = "0";
      }
    </script>
    <title>Feedback</title>
  </head>

  <body>
    <div class="myrow">
      <aside>
        <div id="mySidebar" class="sidebar">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
            >&times;</a
          >

          <div class="logotitle">
            <img class="logo" src="../logos/grammar.png" alt="" />
            <a href="#">Agenda</a>
          </div>
          <div class="logotitle">
            <img class="logo" src="../logos/graduated-student.png" alt="" />
            <a href="../Teachers/class-management.html">Students</a>
          </div>
          <div class="logotitle">
            <img class="logo" src="../logos/learning.png" alt="" />
            <a href="#"> Courses</a>
          </div>
          <div class="logotitle">
            <img class="logo" src="../logos/profile.png" alt="" />
            <a href="../Teachers/teacher-profile.html"> Profile</a>
          </div>
          <div class="logotitle">
            <img class="logo" src="../logos/gear.png" alt="" />
            <a href="../index.page/changepassword.html"> Change Password</a>
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

      <!-- <div class="for-border">
      <div class="container">
        <p
          style="
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande',
              'Lucida Sans', Arial, sans-serifs;
            font-size: 30px;
            margin-top: 30px;
            font-weight: 600;
          "
        >
          Students Feedback:
        </p>

        <div class="info1-row">
          <div>
            <h6>First Name</h6>
            <input type="text" class="text-input" placeholder="First name" />
          </div>
          <div>
            <h6>Last Name</h6>
            <input type="text" class="text-input" placeholder="Last name" />
          </div>
        </div>

        <div class="info1-row">
          <div>
            <h6>Class</h6>
            <input type="text" class="text-input" placeholder="Class" />
          </div>
          <div>
            <h6>Course</h6>
            <input type="text" class="text-input" placeholder="Course" />
          </div>
        </div>

        <div class="info2-row">
          <textarea class="textArea" placeholder="Feedback"></textarea>
        </div>

        <button onclick="window.print();return false;" class="print-btn">
          Print page..
        </button>
      </div>
    </div> -->
      <div class="mycol">
        <div class="feedback">Feedback</div>
        <div class="infomargin">
          First Name
          <input type="text" id="fname" class="textbox" />
        </div>

        <div class="infomargin">
          Last Name
          <input type="text" id="lname" class="textbox" />
        </div>

        <div class="infomargin">
          Class
          <input type="text" id="C" class="textbox" />
        </div>

        <div class="infomargin">
          Feedback
          <textarea class="textarea"></textarea>
        </div>

        <button class="print-btn">Submit</button>
      </div>
    </div>
  </body>
</html>
