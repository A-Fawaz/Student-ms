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
<?php

$conn = mysqli_connect("localhost", "root", "", "school-management");

if (!$conn) {
    die('unable to connect to the database' . mysqli_error());
} else {

    $feedbackAlert="";
    $firstname="";
    $lastname="";
    $classid="";
    $class="";
    $feedback="";
    $sid="";

    if(isset($_GET['Sid'])) {
        session_start();
        $sid = $_GET['Sid'];
        $_SESSION['sid']=$_GET['Sid'];
        $sql="SELECT firstname, lastname, classid FROM `student` WHERE id= '$sid' ";

        $result = mysqli_query($conn, $sql);

        if (!$result) {
            $error = mysqli_error($conn);
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $classid = $row['classid'];
                $_SESSION['classid']=$row['classid'];
            }
            $sql = "SELECT name FROM class WHERE id='$classid'";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $class=$row['name'];
            }

        }
    }



}

if(isset($_POST['submit'])) {
  session_start();
  $teachername = $_SESSION['teachername'];
  $teacherid = "";
  $sql = "SELECT id from `teacher` WHERE username ='$teachername'";
  $result= mysqli_query($conn, $sql);
  if(! $result) {
      echo "Error". mysqli_error($conn);
  } else {
      $row=mysqli_fetch_assoc($result);
      $teacherid = $row['id'];
  }
  $_SESSION['teacherid']=$teacherid;
  $firstname= $_POST['firstname'];
  $lastname= $_POST['lastname'];
  $feedback= $_POST['feedback'];
  $id= $_SESSION['sid'];
  $cid=$_SESSION['classid'];
  $sql = "INSERT INTO `feedback` (`teacherid`, `studentid`, `classid`, `feedback`) VALUES ('$teacherid', '$id', '$cid', '$feedback')";
  $result=mysqli_query($conn, $sql);
  if(! $result) {
      echo  mysqli_error($conn) ;
  } else {
      header("Location:class-info.php?cid=$cid");
  }
  $feedback="";
}
?>

    <div class="myrow">
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
      <div class="mycol">
        <div class="feedback">Feedback</div>
        <div class="infomargin">
          <form action="Feedback.php" method="post">
          First Name
          <br>
          <input type="text" id="fname" class="textbox" name="firstname" value="<?php echo $firstname;?>" readonly/>
          
        </div>

        <div class="infomargin">
          Last Name
          <input type="text" id="lname" class="textbox" name="lastname" value="<?php echo $lastname;?>" readonly/>
          
        </div>

        <div class="infomargin">
          Class
          <input type="text" id="lname" class="textbox" name="class" value="<?php echo $class;?>" readonly/>
        </div>

        <div class="infomargin">
          Feedback
          <input type="text" class="textarea" name="feedback" value="<?php echo $feedback;?>">
          <div style="color:red;font-size:15px;"><?php echo $feedbackAlert; ?></div>
        </div>

        <input type="submit" class="print-btn" name="submit">
        </form>
      </div>
    </div>
  </body>
</html>