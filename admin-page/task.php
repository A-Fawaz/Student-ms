<?php
require_once('conn.php');

if (isset($_GET['id'])) {
    $classid = $_GET['id'];

    $query = "SELECT student.id as studentId, student.firstname, student.lastname, class.name 
              FROM student 
              LEFT OUTER JOIN class ON class.id = student.classid 
              WHERE student.classid = '$classid'";

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die('Query error: ' . mysqli_error($conn));
    }

    $data = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    echo json_encode($data);
} else {
    echo "No class ID provided.";
}

$conn->close();
?>


