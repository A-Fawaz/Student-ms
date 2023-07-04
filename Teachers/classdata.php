<?php

$conn = mysqli_connect("localhost", "root", "", "school-management");
session_start();
$teachername=$_SESSION['teachername'];
$teacherid = "";
$sql = "SELECT id from `teacher` WHERE username ='$teachername'";
$result= mysqli_query($conn, $sql);
if(! $result) {
    echo "Error". mysqli_error($conn);
} else {
    $row=mysqli_fetch_assoc($result);
    $teacherid = $row['id'];
    $result = mysqli_query($conn, "SELECT t.name , t.id FROM `class` as t, `teacher` as tc WHERE t.id = tc.classid AND tc.id='$teacherid'");

    $data = array();
    while ($row=mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}


echo json_encode($data);