<?php 
require_once('conn.php');
$result=mysqli_query($conn,"SELECT * FROM `student-course-grade`");
$data=array();
while($row=mysqli_fetch_assoc($result)){
    $data[]=$row;
}

echo json_encode($data);



?>