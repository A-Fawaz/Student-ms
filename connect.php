<?php
// session_start();
$conn = new mysqli('localhost', 'root', '','school-management system');
if(!$conn){
    die(mysqli_error($conn));
}
?>