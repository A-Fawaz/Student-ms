<?php
require_once('conn.php');

if (isset($_POST['taskId'])) {
    $taskId = $_POST['taskId'];

    // Prepare and execute the SQL query to delete the task
    $sql = "DELETE FROM agenda WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $taskId);
    $stmt->execute();

    // Check if the task was deleted successfully
    if ($stmt->affected_rows > 0) {
        echo "Task deleted successfully";
    } else {
        echo "Failed to delete task";
    }

    $stmt->close();
} else {
    echo "Invalid request";
}

$conn->close();
?>
This PHP code receives the taskId from the AJAX request, prepares a SQL statement to delete the task with the corresponding id from the agenda table, and executes the statement. It then checks the number of affected rows to determine if the task was deleted successfully and sends an appropriate response back to the AJAX request.

Make sure to adjust the SQL query (DELETE FROM agenda WHERE id = ?) and table/column names according to your database structure.

Once you've made these changes, clicking the "Delete" button will trigger an AJAX request to the delete.php script, which will delete the task from the database. The page will then be reloaded, or you can update the UI as desired to reflect the deletion of the task.






