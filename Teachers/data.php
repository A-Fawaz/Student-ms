<?php
$conn = mysqli_connect("localhost", "root", "", "school-management");
session_start();
$studid=$_SESSION['studid'];
$teachername=$_SESSION['teachername'];
$teacherid = "";
$sql = "SELECT id from `teacher` WHERE username ='$teachername'";
$result= mysqli_query($conn, $sql);
if(! $result ) {
    echo "Error". mysqli_error($conn);
} else {
    $row=mysqli_fetch_assoc($result);
    $teacherid = $row['id'];
    $result = mysqli_query($conn, "SELECT feedback FROM `feedback` WHERE teacherid='$teacherid' AND studentid='$studid' ");

$data = array();
while ($row=mysqli_fetch_assoc($result)) {
    $data[] = $row;
}
}


echo json_encode($data);
