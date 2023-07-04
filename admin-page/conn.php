<?php
$servername = "localhost";
$username = "root";
$password = "";
$db='school-management';
$conn=new mysqli('localhost','root','','school-management');
if(!$conn)
{
    die(mysqli_error($conn));
}


?>