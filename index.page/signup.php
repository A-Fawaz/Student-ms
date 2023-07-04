<?php
include '../config.php';
session_start();

if (isset($_POST['submit'])) {
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $password = mysqli_real_escape_string($conn, $_POST['password']);
   $id = mysqli_real_escape_string($conn, $_POST['id']);
   if ($username == '') {
      $messagename = 'please fill username!';
   }
   if ($password == '') {
      $messagepassword = 'please fill password!';
   } else {
      // Check in the student table
      $select = "SELECT * FROM student WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn, $select);

      if (mysqli_num_rows($result) == 1) {
         $_SESSION['studentname'] = $username;
         $_SESSION['session_id'] = $id; // Add session ID
         header('location:../Student/student-profile.php');
         exit();
      }

      // Check in the teacher table
      $select = "SELECT * FROM teacher WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn, $select);

      if (mysqli_num_rows($result) == 1) {
         $_SESSION['teachername'] = $username;
         $_SESSION['session_id'] = $id; // Add session ID
         header('location:../admin-page/teacher-home.php');
         exit();
      }

      // Check in the admin table
      $select = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn, $select);

      if (mysqli_num_rows($result) == 1) {
         $_SESSION['adminname'] = $username;
         $_SESSION['session_id'] = $id; // Add session ID
         header('location:../admin-page/admin-home.php');
         exit();
      }

      // No matching user found in any table
      $error = 'Incorrect email or password!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>
   <link href="signup.css" rel="stylesheet" />
</head>
<body>
   <nav>
      <h1>E-School</h1>
      <ul class="nav-list">
         <li><a href="index.php">Home</a></li>
         <li><a id="space" href="index.php#about-section">About</a></li>
         <li><a href="index.php#contact">Contact</a></li>
      </ul>
   </nav>
   <div class="div">
      <div class="img1">
         <img src="../images/mobilesignup.gif" alt="Sign in" class="changeimg" />
      </div>
      <div class="div2">
         <form action="" method="post">
            <h2>Sign in</h2>
            <input type="hidden" name="id"  class="field">
            <?php
            if (isset($error)) {
               echo '<span class="error-msg" style="color:red;font-size :15px;margin-bottom:20px;">'.$error.'</span>';
            }
            ?>
           
            <br>
            <input type="text" id="u" name="username" placeholder="Username" class="field">
            <br>
            
            <?php
            if (isset($messagename)) {
               echo '<span class="error-msg" style="color:red;font-size :10px;margin-top:10px;">'.$messagename.'</span>';
            }
            ?>
            <br>
            <p id="p1alert" class="alert" style="display: none;"></p>
            <br>
            <input type="password" id="p" name="password" placeholder="Password" class="field">
            <br>
            <?php
            if (isset($messagepassword)) {
               echo '<span class="error-msg" style="color:red;font-size :10px;margin-top:10px;">'.$messagepassword.'</span>';
            }
            ?>
            <br>
            
            <p id="p2alert" class="alert" style="display: none;"></p>
            <br>
      
          
            <input type="submit" name="submit" value="Sign in"  class="btn">
            <br />
            <br />
            <a href="../index.page/forgetPassword.php" class="forget">Forgotten password?</a><?php  ?>
         </form>
      </div>
   </div>
   <script src="signin.js"></script>
</body>
</html>
