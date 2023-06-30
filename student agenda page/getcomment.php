<?php
// include '../connect.php';
$id = "";
$id = $_SESSION['studentname'];
$studentid = "";
$sql3 = "SELECT id FROM `student` WHERE username = '$id'";
$result3 = mysqli_query($conn, $sql3);

while ($row3 = mysqli_fetch_assoc($result3)) {
    $studentid = $row3['id'];
}


$sql4 = "SELECT id , comment FROM `comment`
";
$result4 = mysqli_query($conn, $sql4);

$comments = array(); // Initialize an empty array

while ($row4 = mysqli_fetch_assoc($result4)) {
    $commentID = $row4['id'];
    $comment = $row4['comment'];
    $comments[] = array(
        'id' => $commentID,
        'comment' => $comment
    );
}

echo json_encode($comments);
?>
