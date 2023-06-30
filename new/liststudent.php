<?php
include '../config.php';

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	mysqli_query($conn, "DELETE FROM student WHERE id=$id");

	header('location:../new/liststudent.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="listdraft.css" rel="stylesheet" />
  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            //document.getElementById("main").style.marginLeft = "250px";
            document.getElementById("eschool1").style.marginLeft = "10px";
            document.getElementById("tablesearch").style.marginLeft = "-10px";

        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            //document.getElementById("main").style.marginLeft = "0";
            document.getElementById("eschool1").style.marginLeft = "-200px";
            document.getElementById("tablesearch").style.marginLeft = "0px";
        }
    </script>



    <title>Students List</title>

</head>

<body>
    <aside>
        <div id="mySidebar" class="sidebar">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <div class="logotitle">
                <img class="logo" src="../logos/graph.png" alt="">
                <a href="../course dashboard/dashboard.html"> Dashboard</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/graduated-student.png" alt="">
                <a href="../new/Studentregistration.php">Add Students</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/grammar.png" alt="">
                <a href="../new/teacherregi.php">Teachers</a>

            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/gear.png" alt="">
                <a href="../index.page/changepassword.php"> Change Passsword</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/profile.png" alt="">
                <a href="../Admin/admin-profile.php"> My Profile</a>

            </div>

            <div class="logotitle">
                <img class="logo" src="../logos/door-knob.png" alt="">
                <a href="../index.page/logout.php"> Log Out</a>

            </div>
            <p class="copyrights">© 2023 The President and Fellows of E School</p>
        </div>

        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; </button>

        </div>
    </aside>
    <nav class="nav2">
        <h1 class="eschool1" id="eschool1">E-School</h1>

    </nav>

    <div class="tablesearch">
        <div class="searchhead">
            <div class="label1">
                Grades
              <select class="courses" id="dropdown" name="dropdown" data-attribute="class_name">
                <option value="0">All Students</option>
                <?php
                   $classResult = mysqli_query($conn, "SELECT * FROM class");
                            while ($classRow = mysqli_fetch_assoc($classResult)) {
                     echo '<option value="' . $classRow['name'] . '">' . $classRow['name'] . '</option>';
                         }
                                ?>
                            </select>

            </div>
            <input type="text" id="searchInput" placeholder="Search students...">

        </div>
        <h1 class="registernb" id="headerCount"></h1>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <table id="myTable" class="table">
            <thead>
                <tr class="header">
                <th scope="col">Sr No</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Class</th>
                <th scope="col">Mobile</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $result = mysqli_query($conn, "SELECT student.*,class.name AS class_name FROM student 
            INNER JOIN class ON student.classid = class.id");
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr id="<?php echo $row["id"]; ?>" class="Row" data-class_name="<?php echo $row["class_name"]; ?>">
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row["firstname"]; ?></td>
                    <td><?php echo $row["lastname"]; ?></td>
                    <td ><?php echo $row["class_name"]; ?></td>
                    <td><?php echo $row["mobile"]; ?></td>
                    <td>
                        <a href="updatepagestudent.php?id=<?php echo $row['id']; ?>" class="update"><i class="material-icons">&#xE254;</i></a>
                        <a href="#myModal" class="trigger-btn" data-toggle="modal" data-id="<?php echo $row["id"]; ?>">
                            <i class="material-icons">&#xE872;</i>
                        </a>
                    </td>
                </tr>
            <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
    </div>


    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="material-icons">&#xE5CD;</i>
                    </div>
                   
                    <h4 class="modal-title w-100">Are you sure?</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Do you really want to delete these records? This process cannot be undone.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="#" class="btn" id="confirmDelete">Delete</a>
  

                </div>
            </div>
        </div>
    </div>
   
    <script src="allstudent.js"></script>
    <script src="searchstudent.js"></script>
    <script>
$(document).ready(function() {
    var deleteId;

    // Get the delete ID when a delete button is clicked
    $(document).on("click", ".trigger-btn", function() {
        deleteId = $(this).data("id");
    });

    // Handle the delete confirmation button click
    $(document).on("click", "#confirmDelete", function() {
        // Send the AJAX request
        $.ajax({
            url: "../new/liststudent.php?delete=" + deleteId,
            type: "GET",
            success: function(data) {
                // Handle the success response
                console.log("Record deleted successfully");
                location.reload(); // Refresh the page to reflect the updated data
            },
            error: function() {
                // Handle the error response
                console.log("Error deleting the record");
            }
        });
    });
});


    </script>
</body>

</html>