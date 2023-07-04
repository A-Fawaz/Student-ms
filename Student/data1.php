<?php

$conn = mysqli_connect("localhost", "root", "", "school-management");
//Math
session_start();
$studentname = $_SESSION['studentname'];
$sql = "SELECT id FROM `student` WHERE username='$studentname' ";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$studentid=$row['id'];



$result = mysqli_query($conn, "SELECT grade FROM `student-course-grade` WHERE courseid='1' AND studentid= '$studentid'");

$data = array();
while ($row=mysqli_fetch_assoc($result)) {
    $data[] = $row;
}


echo json_encode($data);
