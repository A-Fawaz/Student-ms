
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit-agenda.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script>
    function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("container").style.marginLeft = "40vh"
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("container").style.marginLeft = "20vh"
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
            <p class="copyrights">© 2023 The President of E School</p>
        </div>
        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; </button>
    
        </div>
    </aside>
    <div class="container border custom-container me-3" >
    <?php
 require_once ('conn.php');
 include ('edit.php');
  ?></div>
     
    <body>
 


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <script>
  const req = new XMLHttpRequest();
    req.open('GET', 'edit.php');
    req.addEventListener('load', function() {})

    req.send()
    

   </script>
</body>
</html>