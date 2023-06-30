<?php
include '../config.php';
require_once("../sendmail.php");

if(isset($_POST['submit']))
{
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  
  // Check if the email exists in teacher table
  $teacherQuery = "SELECT email FROM teacher WHERE email='$email'";
  $teacherResult = mysqli_query($conn, $teacherQuery);
  
  // Check if the email exists in admin table
  $adminQuery = "SELECT email FROM admin WHERE email='$email'";
  $adminResult = mysqli_query($conn, $adminQuery);
  
  // Check if the email exists in students table
  $studentsQuery = "SELECT email FROM student WHERE email='$email'";
  $studentsResult = mysqli_query($conn, $studentsQuery);
  
  if(mysqli_num_rows($teacherResult) > 0 || mysqli_num_rows($adminResult) > 0 || mysqli_num_rows($studentsResult) > 0)
  {
    $message = '<div>
    <p><b>Hello!</b></p>
    <p>You are receiving this email because we received a password reset request for your account.</p>
    <br>
    <p><a href="localhost/student-ms/index.page/changeforget.php?secret='.base64_encode($email).'"><button class="reset" style="color:black background-color:#fb8b24  border-radius:5px">Reset Password</button></a></p>
    <br>
    <p>If you did not request a password reset, no further action is required.</p>
   </div>';
   
    sendEmailWithCC("fatimatarhini7531@gmail.com", "Reset Password", $message);
    $msg = "Password reset successfully , please check your email";
}
else
{
  $msg = "We can't find a user with that email address";
}
}

?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="forgetpassword.css" rel="stylesheet" />
    <title>Forget Password</title>
  </head>

  <body>
    <nav>
      <h1>E-School</h1>
      <ul class="nav-list">
        <li><a href="index.php">Home</a></li>
        <li><a id="space" href="index.php#about-section">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>

    <div class="div">
      <div class="img1">
        <img
          src="../images/mobilesignup.gif"
          alt="ChangePassword"
          class="changeimg"
        />
      </div>
      <div class="div3">
        <div class="signin-form">
          <h3>Reset Password </h3>
          <div class="fp1">
           <form action ="" method="post">
            <h4 class="please">Enter your email to reset your password</h4>
            <input type="email" name="email" class="field1" placeholder="Email" id="email" />
            <br />
            <p class="alert" id="alert"><?php if(!empty($msg)){ echo $msg; } ?></p>
            <!-- Display the message within the span -->
           
            <br />
            <div class="btns">
            <input type="submit" id="login" name="submit" value="Send Password Reset Link" class="btn" />
             
            
            </div>
            <!-- <a href="../index.page/changeforget.html"></a> -->
           </from>
          </div>
        </div>
      </div>
    </div>
    <script>
      let save = document.getElementById("save");
      save.addEventListener("click", () => {
        let email = document.getElementById("email").value;
        let alert = document.getElementById("alert");
        if (email == "") {
          alert.innerHTML = "Please enter your email.";
        } else {
          location.href = "../index.page/changeforget.php";
        }
      });
    </script>
  </body>
</html>
