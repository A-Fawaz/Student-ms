<?php
include '../connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            // document.getElementById("main").style.marginLeft = "250px";
            // document.getElementById("container").style.marginLeft = "18vh";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            // document.getElementById("main").style.marginLeft = "0";
            document.getElementById("container").style.marginLeft = "0px"
        }
    </script>
</head>

<body>
    <nav class="navbar">
        <div class="searchbar">
            <h2 style="display:block; color:black;">E-School</h2>
            <!-- <input style="font-size: larger;" type="search" name="search" value="" id="search" placeholder="search for courses...">
            <img class="searchicon" style="width:40px; height: auto;" src="../images/search.png" alt="img"> -->
        </div>

        
        <a href="../new/teacherregi.html"><button class="btn"><strong>Add New </strong></button></a>
        <div class="navicons">
            <img style="width:40px; padding-right:10px;" src="../images/turn-notifications-on-button.png" alt="">
            <img style="width: 40px;" src="../images/man.png" alt="">
        </div>
    </nav>
    <!-- <div class="sidebar">
            <h1>E-School</h1>
            <ul class="sidetext">
                <li class="logotitle">
                    <img class="logo" src="../logos/graph.png" alt="">
                    <a href="">Dashboard</a>
                </li>
                <li class="logotitle">
                    <img class="logo" src="../logos/grammar.png" alt="">
                    <a href="">Teachers</a>
                </li>
                <li class="logotitle">
                    <img class="logo" src="../logos/graduated-student.png" alt="">
                    <a href="">Students</a>
                </li>
                <li class="logotitle">
                    <img class="logo" src="../logos/learning.png" alt="">
                    <a href="">Courses</a>
                </li>
                <li class="logotitle">
                    <img class="logo" src="../logos/profile.png" alt="">
                    <a href="">Profile</a>
                </li>
                <li class="logotitle">
                    <img class="logo" src="../logos/gear.png" alt="">
                    <a href="">Settings</a>
                </li>
                <li class="logotitle">
                    <img class="logo" src="../logos/door-knob.png" alt="">
                    <a href="">Log Out</a>
                </li>

            </ul>
        </div> -->
    <aside>
        <div id="mySidebar" class="sidebar">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <div class="logotitle">
                <img class="logo" src="../logos/graph.png" alt="">
                <a href="../index.page/index.php"> Home page</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/grammar.png" alt="">
                <a href="../new/teacherregi.php">Teachers</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/graduated-student.png" alt="">
                <a href="../new/Studentregistration.php">Students</a>

            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/gear.png" style="height: 43px; width: auto; margin-top: 10px; margin-left: -3px" alt="">
                <a href="../index.page/changepassword.php"> Change Password </a>
            </div>
            <div class="logotitle">
                <img class="logo" style="margin-left: x" src="../logos/profile.png" alt="">
                <a href="../Admin/admin-profile.php"> My Profile</a>

            </div>
            <div class="logotitle">
                <img style="margin-left:2px;" class="logo" src="../logos/door-knob.png" alt="">
                <a href="../index.page/index.php"> Log Out</a>

            </div>
            <p class="copyrights">© 2023 The President and Fellows of E School</p>
        </div>

        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; </button>

        </div>
    </aside>
    <div class="container" id="container">

        <div class="container1">
            <div class="item" id="item1">
                <h2> <?php
                        $sql =  "SELECT COUNT(id) FROM `student`";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {

                            $row = mysqli_fetch_assoc($result);
                            $count = $row['COUNT(id)'];
                            // $id = $row['Tid'];
                            // $name = $row['name'];
                            // $password = $row['password'];
                            echo $count;

                            //   }
                        }
                        ?></h2>
                <p>Students</p>
            </div>
            <div class="item" id="item2">
                <h2>
                    <?php
                    $sql =  "SELECT COUNT(id) FROM `teacher`";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {

                        $row = mysqli_fetch_assoc($result);
                        $count = $row['COUNT(id)'];
                        // $id = $row['Tid'];
                        // $name = $row['name'];
                        // $password = $row['password'];
                        echo $count;

                        //   }
                    }
                    ?>
                </h2>
                <p>teachers</p>
            </div>
            <div class="item" id="item3">
                <h2>2</h2>
                <p>Schools</p>
            </div>

        </div>
        <div class="container2">
            <!-- <table class="dash1">
                <tr>
                    <th>
                        <div class="table-header">
                            <h2>Recent payments</h2>
                            <button class="btn">View All</button>

                        </div>
                    </th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>School</th>
                    <th>Amount</th>
                    <th>Option</th>
                </tr>
                <tr>
                    <td>john doe</td>
                    <td>esa coding lab</td>
                    <td>1000$</td>
                    <td><button class="btn">View</button></td>
                </tr>
                <tr>
                    <td>john doe</td>
                    <td>esa coding lab</td>
                    <td>1000$</td>
                    <td><button class="btn">View</button></td>
                </tr>
                <tr>
                    <td>john doe</td>
                    <td>esa coding lab</td>
                    <td>1000$</td>
                    <td><button class="btn">View</button></td>
                </tr>
                <tr>
                    <td>john doe</td>
                    <td>esa coding lab</td>
                    <td>1000$</td>
                    <td><button class="btn">View</button></td>
                </tr>
                <tr>
                    <td>john doe</td>
                    <td>esa coding lab</td>
                    <td>1000$</td>
                    <td><button class="btn">View</button></td>
                </tr>
                <tr>
                    <td>john doe</td>
                    <td>esa coding lab</td>
                    <td>1000$</td>
                    <td><button class="btn">View</button></td>
                </tr>
                <tr>
                    <td>john doe</td>
                    <td>esa coding lab</td>
                    <td>1000$</td>
                    <td><button class="btn">View</button></td>
                </tr>
            </table> -->
            <table class="dash2">
                <thead>
                <tr class="">
                        <th class="">
                            <h2 >New Students</h2>
                        </th>
                        <th style="padding-left: 80px;" class="">
                        <a href="../new/liststudent.php"><button class="btn"> view all</button></a>
                            
                        </th>
                    </tr>
                    <tr>
                        <td style="font-weight: bold;">Name</td>
                        <td style="font-weight: bold;"> Id</td>
                        <td style="font-weight: bold;">Options</td>
                    </tr>
                </thead>
                  
                
                <tbody>
                    <?php
                    $sql =  "SELECT * from `student`";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['id'];
                            $name = $row['firstname'];
                            $lname = $row['lastname'];
                            $username1 =$row['username'] ;
                            // echo $username1;
                            echo '<tr>
        <td scope="row">' . $name .' '. $lname . '</td>
        <td>' . $username1 . '</td>
        <td>
        <a class = "text-light" href="./studentprofileforadmin.php?username=' . $username1 . '"><button class = "btn btn-primary">view</button></a >
        
    </td>
      </tr>';
                        }
                    } ?>


                </tbody>






            </table>

        </div>
    </div>

</body>

</html>