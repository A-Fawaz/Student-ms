<?php
include_once('../config.php');

if(isset($_POST['submit']))
{
  $email = $_POST['email'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  if($password == $cpassword)
  {
    // Check if the email exists in the admin table
    $adminQuery = "SELECT email FROM admin WHERE email='$email'";
    $adminResult = mysqli_query($conn, $adminQuery);

    // Check if the email exists in the teacher table
    $teacherQuery = "SELECT email FROM teacher WHERE email='$email'";
    $teacherResult = mysqli_query($conn, $teacherQuery);

    // Check if the email exists in the students table
    $studentsQuery = "SELECT email FROM student WHERE email='$email'";
    $studentsResult = mysqli_query($conn, $studentsQuery);

    if(mysqli_num_rows($adminResult) > 0)
    {
      // Update password in the admin table
      $updateQuery = "UPDATE admin SET password='$password' WHERE email='$email'";
      $updateResult = mysqli_query($conn, $updateQuery);

      if($updateResult)
      {
        $msg = 'Your password updated successfully <a href="../index.page/signup.php">Click here</a> to login';
      }
      else
      {
        $msg = "Error while updating password.";
      }
    }
    elseif(mysqli_num_rows($teacherResult) > 0)
    {
      // Update password in the teacher table
      $updateQuery = "UPDATE teacher SET password='$password' WHERE email='$email'";
      $updateResult = mysqli_query($conn, $updateQuery);

      if($updateResult)
      {
        $msg = 'Your password updated successfully <a href="../index.page/signup.php">Click here</a> to login';
      }
      else
      {
        $msg = "Error while updating password.";
      }
    }
    elseif(mysqli_num_rows($studentsResult) > 0)
    {
      // Update password in the students table
      $updateQuery = "UPDATE student SET password='$password' WHERE email='$email'";
      $updateResult = mysqli_query($conn, $updateQuery);

      if($updateResult)
      {
        $msg = 'Your password updated successfully <a href="../index.page/signup.php">Click here</a> to login';
      }
      else
      {
        $msg = "Error while updating password.";
      }
    }
    else
    {
      $msg = "Invalid email address.";
    }
  }
  else
  {
    $msg = "Password and Confirm Password do not match";
  }
}

if(isset($_GET['secret']))
{
  $email = base64_decode($_GET['secret']);

  // Check if the email exists in the admin table
  $adminQuery = "SELECT email FROM admin WHERE email='$email'";
  $adminResult = mysqli_query($conn, $adminQuery);
  $adminRows = mysqli_num_rows($adminResult);

  // Check if the email exists in the teacher table
  $teacherQuery = "SELECT email FROM teacher WHERE email='$email'";
  $teacherResult = mysqli_query($conn, $teacherQuery);
  $teacherRows = mysqli_num_rows($teacherResult);

  // Check if the email exists in the students table
  $studentsQuery = "SELECT email FROM student WHERE email='$email'";
  $studentsResult = mysqli_query($conn, $studentsQuery);
  $studentsRows = mysqli_num_rows($studentsResult);

  if($adminRows > 0 || $teacherRows > 0 || $studentsRows > 0)
  {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="changeforget.css" rel="stylesheet" />
    <title>Reset Password</title>
</head>

<body>
    <nav>
        <h1>E-School</h1>
        <ul class="nav-list">
        <li><a href="../index.page/logout.php">Log Out</a></li>
        </ul>
    </nav>

    <div class="div">
        <div class="img1">
            <img src="../images/Reset password.gif" alt="reset password" class="changeimg" />
        </div>
        <div class="div2">

            <div class="signin-form">
                <div class="fp">
                    <h3>Change Password</h3>
                    <form action="" method="post"> 
                        <h6>Make sure your password contains a combination of letters, numbers, and characters.</h6>
                        <input type="hidden" name="email" value="<?php echo $email; ?>"/>
                        <br />
                        <input type="text" name="password" class="field" placeholder="New Password" id="npassword" />
                        <br />
                        <p class="alert" id="alert1"></p>
                        <br />
                        <input type="text" name="cpassword" class="field" placeholder="Confirm Password" id="cpassword" />
                        <br />
                        <p id="alert" class="alert"></p>
                        <br>
                        <p id="alert2" class="alert"></p>
                        <p class="alert"><?php if(!empty($msg)){ echo $msg; } ?></p>
                        <br>
                        <button type="submit" name="submit" class="btnch">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        let savechanges= document.getElementById('btnch');
        savechanges.addEventListener('click', () => {
          let newpass = document.getElementById('npassword').value;
          let cpass = document.getElementById('cpassword').value;
          let alert=document.getElementById('alert');
          let alert1=document.getElementById('alert1');
          let alert2=document.getElementById('alert2');

          alert.value="";
          alert1.value="";

          if(newpass.trim()===""){
            alert1.innerHTML="Please enter a password.";
          }
          else if(cpass.trim()===""){
            alert1.innerHTML="";
            alert.innerHTML="Please confirm your password.";
          }
          else if(newpass.trim() === cpass.trim()){
            location.href="../index.page/signup.html";
          }
          else{
            alert.innerHTML="";
            alert2.innerHTML="Passwords are incompatible.";
          }
        });
    </script>
</body>

</html>
<?php
  }
  else
  {
    echo "Invalid email address.";
  }
}
?>
