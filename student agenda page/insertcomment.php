<?php
// session_start();
// include '../connect.php';
$id = "";
$studentid = "";    
if(isset($_SESSION['studentname'])){
    $id =  $_SESSION['studentname'];
    $studentid = "";
    $sql3 = "SELECT id
    FROM `student`
    WHERE username = '$id' ";
    $result3 = mysqli_query($conn, $sql3);
    while ($row = mysqli_fetch_assoc($result3)) {
    $studentid = $row['id'];
    // echo $studentid;
    }
}
// $studentid = "";

// $sql5 = "SELECT id FROM `agenda` WHERE classid = '$studentid'";
// $result5 = mysqli_query($conn, $sql5);
// $agendaid = "";
// while ($row5 = mysqli_fetch_assoc($result5)) {
//     $agendaid = $row5['id'];
// }

// Assuming you have a database connection establishedvscode-file://vscode-app/c:/Users/alifa/AppData/Local/Programs/Microsoft%20VS%20Code/resources/app/out/vs/code/electron-sandbox/workbench/workbench.html

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the necessary data from the AJAX request
    // For example, assuming the comment data is sent in the request body
    $comment = $_POST['agenda_id'];
    $teacherid = null;
    

    if (!empty($comment)) { // Check if the comment is not empty
        // Perform the database insertion using prepared statement
       
        $stmt = $conn->prepare("INSERT INTO comment (teacherid, studentid,comment) VALUES (?, ?, ?)");
        $stmt->bind_param("iss", $teacherid, $studentid,  $comment);

        if ($stmt->execute()) {
            // Return a success response
            $response = array('status' => 'success', 'message' => 'Comment added successfully');
            echo json_encode($response);
        } else {
            // Return an error response
            $response = array('status' => 'error', 'message' => 'Error inserting comment');
            echo json_encode($response);
        }
    } else {
        // Return an error response if the comment is empty
        $response = array('status' => 'error', 'message' => 'Comment cannot be empty');
        echo json_encode($response);
    }
} else {
    // Return an error response if the request method is not POST
    $response = array('status' => 'error', 'message' => 'Invalid request method');
    echo json_encode($response);
}
?>



