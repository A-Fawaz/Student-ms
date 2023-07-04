<?php
session_start();
include '../config.php';
try {
   


  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    if(isset($_SESSION['studentname'])){
        $id =  $_SESSION['studentname'];
        // echo $id;
        $sql1 = "SELECT classid
        FROM student
        WHERE username = '$id' ";
    $result1 = mysqli_query($conn, $sql1);
   
    while ($row = mysqli_fetch_assoc($result1)) {
        $classid = $row['classid'];
        
    }

    }
        $sql2 =  "SELECT teacher.firstname ,teacher.lastname ,
    course.name , agenda.task, agenda.date, agenda.id, agenda.deadline 
    FROM teacher 
    JOIN agenda ON agenda.teacherid = teacher.id
    -- JOIN student  ON student.classid = agenda.classid
    JOIN course ON course.id = agenda.courseid
    WHERE agenda.classid = '$classid' 
    ORDER BY agenda.deadline ASC";
// echo $sql2;
$result2 = mysqli_query($conn, $sql2);

$dataMap = array(); // Map to store the data

while ($row = mysqli_fetch_assoc($result2)) {
    // Retrieve row data
    $deadline = $row['deadline'];
    $name = $row['name'];
    $task = $row['task'];
    $teacherfirstname = $row['firstname'];
    $teacherlastname = $row['lastname'];
    $date = $row['date'];
    // $filelink = $row['filelink'];
    // $fileID = $_GET['fileID'];
    
    // Format the deadline
    $formattedDeadline = date('l, F jS', strtotime($deadline));

    // Check if the deadline exists in the data map
    if (!array_key_exists($formattedDeadline, $dataMap)) {
        // Initialize an empty array for the deadline
        $dataMap[$formattedDeadline] = array();
    }

    // Add the row data to the deadline's array
    $dataMap[$formattedDeadline][] = array(
        'name' => $name,
        'task' => $task,
        'firstname' => $teacherfirstname,
        'lastname' => $teacherlastname,
        'date' => $date,
    //    'filelink' => $filelink
        // 's.firstname' => $studentfirstname,
        // 's.lastname' => $studentlastname
    );
}
    
// Generate HTML output
$accordionIndex = 1; // Initialize the accordion index

foreach ($dataMap as $deadline => $tasks) {
    $accordionId = 'accordion' . $accordionIndex; // Generate a unique ID for each accordion

    echo '
    <div class="accordion accordion-flush " id="' . $accordionId . '">
        <div class="accordion-item">
            <h2 class="accordion-header" id="' . $accordionId . '-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#' . $accordionId . '-collapseOne" aria-expanded="false" aria-controls="' . $accordionId . '-collapseOne">
                    ' . $deadline . '
                </button>
            </h2>
            <div id="' . $accordionId . '-collapseOne" class="accordion-collapse collapse" aria-labelledby="' . $accordionId . '-headingOne" data-bs-parent="#' . $accordionId . '">
                <div class="accordion-body">
                    ';

    foreach ($tasks as $task) {
        echo '
        <div class="card-body text-secondary card border-secondary col-md-12">
            <h5 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="26" style="color: #fb8b24;" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
            </svg>'. $task['name'] .'</h5>
            <p class="card-text">'. $task['task'] .'</p>
            <div class="card-footer">'. $task['firstname'] . ' ' . $task['lastname'] .' <br> Posted on '. $task['date'] .' <br> <br>
            

            <div class="btn-group me-2" role="group" aria-label="First group">


            </div>
           <div class="switch-container">
    <label class="switch">
        <input type="checkbox">
        <span class="slider round"></span>
    </label>
    <p class="done">Done</p>
</div>

            </div>
        </div>
        ';
    }

    echo '
                </div>
            </div>
        </div>
    </div>';

    $accordionIndex++; // Increment the accordion index
}

}

    //  echo json_encode($data); 
 catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}