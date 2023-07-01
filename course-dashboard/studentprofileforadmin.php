<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./studentprofileforadmin.css" />
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
        document.getElementById("container").style.marginLeft = "18vh";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        // document.getElementById("main").style.marginLeft = "0";
        document.getElementById("container").style.marginLeft = "0px";
      }
    </script>
    <title>Student Page</title>
  </head>
  <body>
<?php
 $address="";
$username1 = $_GET['username'];

$conn = mysqli_connect("localhost", "root", "", "school-management system");

if(!$conn) {
    die('unable to connect to database'.mysqli_error());
} else {
    $username = "";
    $fullname = "";
    $email = "";
    $mobile="";
    $address="";
    $classid="";
    $class="";
    $year="";

    // session_start();
    // if (isset( $_SESSION['studentname'])) {
    //   $user = $_SESSION['studentname']; 
    // }
    
                    // $sql1 =  "SELECT * from `student`";
                    // $result1 = mysqli_query($conn, $sql1);
                    // if ($result1) {

                    //     while ($row = mysqli_fetch_assoc($result1)) {
                    //         $id = $row['id'];
                    //         $name = $row['firstname'];
                    //         $lname = $row['lastname'];
                    //         $username1 =$row['username'] ;}
                            
    $user = "";
   
    $sql = "SELECT * FROM `student` WHERE username= '$username1' ";
    $result = mysqli_query($conn, $sql);
    if(! $result) {
        echo "error";
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            $username=$row['firstname'];
            $fullname = $row['lastname'];
            $email = $row['email'];
            $mobile=$row['mobile'];
            $address=$row['address'];
            $classid=$row['classid'];
        }
        $sql = "SELECT name FROM `class` WHERE id ='$classid' ";
        $result = mysqli_query($conn, $sql);
        if(! $result) {
            echo "error";
        } else {
            while ($row = mysqli_fetch_assoc($result)) {
                $class = $row['name'];
            }
        }

    }



}

?>



    <div class="full-cont">
      <div class="row-info-cont">
      <aside>
        <div id="mySidebar" class="sidebar">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <div class="logotitle">
                <img class="logo" src="../logos/graph.png" alt="">
                <a href="../index.page/index.php"> Home page</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/grammar.png" alt="">
                <a href="../new/teacherregi.php">Teachers</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/graduated-student.png" alt="">
                <a href="../new/Studentregistration.php">Students</a>

            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/gear.png" style="height: 43px; width: auto; margin-top: 10px; margin-left: -3px" alt="">
                <a href="../index.page/changepassword.php"> Change Password </a>
            </div>
            <div class="logotitle">
                <img class="logo" style="margin-left: x" src="../logos/profile.png" alt="">
                <a href="../Admin/admin-profile.php"> My Profile</a>

            </div>
            <div class="logotitle">
                <img style="margin-left:2px;" class="logo" src="../logos/door-knob.png" alt="">
                <a href="../index.page/index.php"> Log Out</a>

            </div>
            <p class="copyrights">© 2023 The President and Fellows of E School</p>
        </div>

        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; </button>

        </div>
    </aside>
       
      
   
        <div information-cont>
        <div class="info-table">

          <div class="info-container">
        <table class="table">
          
            <div class="container-head">
              <img src="../logos/info2.png" class="info-img" />
              Identification
            </div>
          <tr>
            <td>Username :</td>
            <td><?php echo $username1;?></td>
          </tr>
          <tr>
            <td>Full-Name :</td>
            <td><?php echo $username.' '.$fullname;?></td>
          </tr>

          <tr>
            <td>E-Mail :</td>
            <td><?php echo $email;?></td>
          </tr>

          <tr>
            <td>Mobile :</td>
            <td><?php echo $mobile;?></td>
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
              <td><?php echo $address;?></td>
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
                  <td>Class :</td>
                  <td><?php echo $class;?></td>
                <tr>
                  <td>Academic Year :</td>
                  <td>2023-2024</td>
                </tr>

                </tr>
              </table>

              </div>
            </div>
    

      </div>
        

        <div class="img">
          <img src="../images/Raisinghand.gif" alt="admin">
        </div>
      </div>
    </div>
 

  
  </body>
</html> 