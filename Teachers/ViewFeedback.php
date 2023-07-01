<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="ViewFeedback.css" rel="stylesheet">
  <title>View Feedback</title>
  <script>
      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
      }
    </script>
</head>
<body>
<?php
$conn = mysqli_connect("localhost", "root", "", "school-management");

if (!$conn) {
    die('unable to connect to the database' . mysqli_error());
} else {
    $studid = $_GET['Sid'];
    session_start();
    $_SESSION['studid']=$studid;
    $sname="";
    $slname="";
    $sql2="SELECT firstname, lastname FROM student WHERE id = '$studid'";
    $result2= mysqli_query($conn, $sql2);
    while($row2=mysqli_fetch_assoc($result2)){
    $sname=$row2['firstname'];
    $slname=$row2['lastname'];
  }
}
?>
  <div class="row">
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
<p class="name"><?php echo $sname;?> <?php echo $slname;?></p>
<div class="full-cont" id="full-cont">
  
</div>
<script>
  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "data.php";
  var asy = true;

  ajax.open(method,url,asy);

  ajax.send();

  ajax.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var data = JSON.parse(this.responseText);
      console.log(data);

      var html = "";
      for(var a =0; a<data.length; a++){
        var feedback = data[a].feedback;
        var dt = new Date();
      var year = dt.getFullYear();
      var month = dt.getMonth() + 1;
      var day = dt.getDate();
        html += `<div class='container'><img src="../images/images.png" class="img"> Feedback `+(a+1)+`:`;
        html += `<div class='feedback-div'><br>-`+feedback+`</div>`;
        html += `</div>`;
          

      }
      document.getElementById('full-cont').innerHTML=html;
    }
  }
</script>
</body>
</div>
</html>