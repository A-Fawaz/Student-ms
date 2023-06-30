<?php
// Include the configuration file and establish a database connection
@include '../config.php';
session_start();

if (isset($_POST['submit'])) {
    // Retrieve the form data
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validate the form data (you can add more validation if needed)
    if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
        $message = "Please fill in all fields.";
    } elseif ($newPassword !== $confirmPassword) {
        $message1 = "New password and confirm password do not match.";
    } elseif($username = $_SESSION['teachername']){
        // Retrieve the username from the session or any other method you are using to identify the user
       

        // Check if the current password matches the one in the database
        $select = "SELECT * FROM teacher WHERE username = '$username'";
        $result = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password']; // Assuming the password column is named 'password'

        if ($currentPassword !== $storedPassword) {
            $message1 = "Incorrect current password.";
        } else {
            // Update the password in the database
            $update = "UPDATE teacher SET password = '$newPassword' WHERE username = '$username'";
            mysqli_query($conn, $update);

            $message1 = "Password updated successfully.";

        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="changepassword.css" rel="stylesheet" />
    <title>Change Password teacher</title>
    
</head>

<body>
    <nav>
        <h1>E-School</h1>
        <ul class="nav-list">
            <li><a href="../admin-page/teacher-home.php">Home page</a></li>
            <li><a id="space" href="../Teachers/teacher-profile.php">My profile</a></li>
            <li><a href="../index.page/logout.php">Log Out</a></li>
        </ul>
    </nav>

    <div class="div">
        <div class="img1">
            <img src="../images/Reset password.gif" alt="reset password" class="changeimg" />
        </div>
        <div class="div2">

            <div class="signin-form">
                
                <div class="phppot-container tile-container" id="fp">
                    <form name="frmChange" method="post" action="" >
                        <h3 class="text-center">Change Password</h3>
                        <span class="validation-message">
    <?php if (isset($message1)) { echo $message1; } ?>
</span>
                        <div>
                            <div class="row"> 
                                    <input placeholder="Current Password"
                                    type="password" name="currentPassword"
                                    class="field">
                                    <br>
                                    <span id="currentPassword"
                                    class="validation-message"><?php if (isset($message)) { echo $message; } ?></span> 
            
                            </div>
                            <div class="row">
                                
                                    <input placeholder="New Password"
                                    type="password" name="newPassword"
                                    class="field">
                                    <br>
                                    <span
                                    id="newPassword" class="validation-message"><?php if (isset($message)) { echo $message; } ?></span>
            
                            </div>
                            <div class="row">
                               
                               <input placeholder="Confirm Password "
                                    type="password" name="confirmPassword"
                                    class="field">
                                    <br>
                                    <span id="confirmPassword"
                                    class="validation-message"><?php if (isset($message)) { echo $message; } ?></span>
            
                            </div>
                            <div class="row">
                                <br>
                                <a href="../index.page/forgetPasswordfromchangepassword.php" class="forgetch">Forgotten your password?</a>
                                <br>
                                <input type="submit" name="submit" value="Submit"
                                    class="btnch">
                            </div>
                        </div>
            
                    </form>
                </div>

            </div>
            
        </div>

    </div>

    </div>
    </div>
    <script src="changepass.js"></script>
</body>

</html>