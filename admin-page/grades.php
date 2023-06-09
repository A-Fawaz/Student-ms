<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="grades.css">
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("container").style.marginLeft = "40vh";

    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
        document.getElementById("container").style.marginLeft = "20vh";

    }
</script>

</head>
<body>
    <aside>
        <div id="mySidebar" class="sidebar">
    
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <div class="logotitle">
                <img class="logo" src="../logos/graph.png" alt="">
                <a href="#"> Dashboard</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/grammar.png" alt="">
                <a href="#">Teachers</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/graduated-student.png" alt="">
                <a href="#">Students</a>

            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/learning.png" alt="">
                <a href="#"> Courses</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/profile.png" alt="">
                <a href="#"> Profile</a>

            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/gear.png" alt="">
                <a href="#"> Settings</a>

            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/door-knob.png" alt="">
                <a href="#"> Log Out</a>
            </div>
            <p class="copyrights">© 2023 The President and Fellows of E School</p>
        </div>
        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; </button>
    
        </div>
    </aside>
<div class="container pt-3" id="container"> 
    <div class="row">
        <div class="col-sm-6">
            <h1 id="Grades">Student Grades</h1>
        </div>
        <div class="col-sm-6">
            <h1 id="dateToday">
                <script>document.getElementById('dateToday').innerHTML = new Date().toJSON().slice(0, 10).replace(/-/g, '/');
                </script>
            </h1>
        </div>


    </div>
    <div class="mt-4 p-5 my-orange-bg  text-white rounded">
        <div class="row">

            <div class="col-sm-3">
                <label for="Name">Choose Class</label>
                <select class="form-control" name="class" id="chooseclass" required>
                    <option value="" disabled selected>Select Class</option>

                    <option value="1">Class 1</option>
                    <option value="2">Class 2</option>
                    <option value="3">Class 3</option>
                    <option value="4">Class 4</option>
                    <option value="5">Class 5</option>
                    <option value="6">Class 6</option>
                    <option value="7">Class 7</option>
                    <option value="8">Class 8</option>
                    <option value="9">Class 9</option>

                </select>
            </div>



            <div class="col-sm-3">
                <label for="Name">Choose Subject</label>
                <select class="form-control" name="class" id="subject" required>
                    <option value="" disabled selected>Choose subject</option>

                    <option value="1">math</option>
                    <option value="2"> History</option>
                    <option value="3">Biology</option>
                    <option value="4">Physics</option>
                    <option value="5">Chemistry</option>
                    <option value="6">History</option>
                    <option value="7">English</option>
                    <option value="8">Arabic</option>

                </select>
            </div>
            <div class="col-sm-3">
                

            </div>
            <div class="col-sm-3">
                <button type="button" class=" btn   btn-dark m-4"id="show" onclick="">Show Student List</button>
            </div>
        </div>
        <hr>

        <div class="row">
            <table class="table table-bordered table-hover table-hover table-striped col-xs-12"  id="tablegrades" style="display: none
            ;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th> Student Name</th>
                        <th>exam1</th>
                        <th>exam2</th>
                        <th>exam3</th>

                        <th>Total Average</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>ALi zreik</td>
                        <td><input type="text" id="exam1" class="form-control" value="58" disabled></td>
                        <td><input type="text" id="exam2" class="form-control" value="58" disabled></td>
                        <td><input type="text" id="exam3" class="form-control" value="58" ></td>
                        <td><input type="text" id="average" class="form-control" value="58"></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>ALi Fawaz</td>
                        <td><input type="text" id="exam1" class="form-control" value="58" disabled></td>
                        <td><input type="text" id="exam2 "class="form-control" value="58" disabled></td>
                        <td><input type="text" id="exam3" class="form-control" value="58"></td>
                        <td><input type="text" id="average" class="form-control" value="58"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>fatima tarhini</td>
                        <td><input type="text" id="exam1" class="form-control" value="58" disabled></td>
                        <td><input type="text" id="exam2" class="form-control" value="58" disabled></td>
                        <td><input type="text" id="exam3" class="form-control" value="58"></td>
                        <td><input type="text" id="average" class="form-control" value="58"></td>

                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Dana Abdalah</td>
                        
                        <td><input type="text" id="exam1" class="form-control" value="58" disabled></td>
                        
                        <td><input type="text" id="exam2" class="form-control" value="58" disabled></td>
                        <td><input type="text" id="exam3" class="form-control" value="58"></td>
                        <td><input type="text" id="average" class="form-control" ></td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="row">

            <div class="col-sm-8">

            </div>
            <div class="col-sm-4">

                <label for="submit">Please click "Submit" to Save grade</label><br>
                <button type="button" class="btn btn-dark" id="submit">Submit</button>
            </div>

        </div>





    </div>
    <script src="grades.js"></script>
</body>
</html>