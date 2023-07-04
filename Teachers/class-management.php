<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="class-management.css" rel="stylesheet">
  <title>Class Management</title>
</head>
<body>    <script>
      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        // document.getElementById("forcont").style.marginLeft = "50px";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        // document.getElementById("forcont").style.marginLeft = "0px";
      }
    </script>
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
        <h1 class="eschool1" id="eschool1">E-School</h1>
        
    </div>
  <div id='full-cont'>
</div>


<script>
  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "classdata.php";
  var asy = true;

  ajax.open(method,url,asy);

  ajax.send();

  ajax.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var data = JSON.parse(this.responseText);
      console.log(data);

      var html = "";
      for(var a =0; a<data.length; a++){
        var $classname = data[a].name;
        var $classid = data[a].id;

        html += ` <div class="card">
            <img src="../images/Teacher-student1.gif" class="card-img" />
            <div class="info-container">
              <div class="grade-name">`+$classname+`</div>
              <div class="student-number"></div>
              <a href="class-info.php?cid=`+$classid+`" ><button class="card-btn">View Class</button></a>
            </div>
          </div>`;
          

      }
      document.getElementById('full-cont').innerHTML=html;
    }
  }
</script>
</body>
</html>
