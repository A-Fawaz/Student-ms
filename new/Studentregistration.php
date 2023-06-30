<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link rel="stylesheet" href="studentsregistration.css"/>
    <!-- <link href="signup.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
       // document.getElementById("main").style.marginLeft = "250px";
        document.getElementById("eschool1").style.marginLeft = "10px";

    }

    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
       // document.getElementById("main").style.marginLeft = "0";
        document.getElementById("eschool1").style.marginLeft = "-200px";
    }
</script>   



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
                <a href="../new/liststudent.html">All Students</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/grammar.png" alt="">
                <a href="../new/teacherregi.html">Teachers</a>

            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/gear.png" alt="">
                <a href="../index.page/changepassword.html"> Change Passsword</a>
            </div>
            <div class="logotitle">
                <img class="logo" src="../logos/profile.png" alt="">
                <a href="../Admin/admin-profile.html"> My Profile</a>

            </div>
            
            <div class="logotitle">
                <img class="logo" src="../logos/door-knob.png" alt="">
                <a href="../index.page/index.html"> Log Out</a>

            </div>
            <p class="copyrights">© 2023 The President and Fellows of E School</p>
        </div>

        <div id="main">
            <button class="openbtn" onclick="openNav()">&#9776; </button>

        </div>
    </aside>
    <nav class="nav2">
        <h1 class="eschool1" id="eschool1">E-School</h1>
        <ul class="nav-list2">
         
        
        </ul>
    </nav>
    <div class="container">
        <header> Student Registration </header>
        <div class="progress-bar">
            <div class="step">
                <p>
                    Name
                </p>
                <div class="bullet">
                    <span>1</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>
                    Contact
                </p>
                <div class="bullet">
                    <span>2</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            <div class="step">
                <p>
                    Birth
                </p>
                <div class="bullet">
                    <span>3</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            
            <div class="step">
                <p>
                    Education
                </p>
                <div class="bullet">
                    <span>4</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
            
            <div class="step">
                <p>
                    Submit
                </p>
                <div class="bullet">
                    <span>5</span>
                </div>
                <div class="check fas fa-check"></div>
            </div>
        </div>
        <div class="form-outer">
            <form action="#">
                <div class="page slide-page">
                    <div class="title">
                        Basic Info:
                    </div>
                    <div class="field">
                        <div class="label">
                            First Name
                        </div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <div class="label">
                            Last Name
                        </div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <button class="firstNext next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="title">
                        Contact Info:
                    </div>
                    <div class="field">
                        <div class="label">
                            Email Address
                        </div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <div class="label">
                            Phone Number
                        </div>
                        <input type="Number">
                    </div>
                    <div class="field btns">
                        <button class="prev-1  prev">Previous</button>
                        <button class="next-1 next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="title">
                        Date of Birth:
                    </div>
                    <div class="field">
                        <div class="label">
                            Date
                        </div>
                        <input type="date">
                    </div>
                    <div class="field">
                        <div class="label">
                            Gender
                        </div>
                        <select>
                            <option disabled>please choose</option>
                            <option>Male</option>
                            <option>Female</option>

                        </select>
                    </div>
                    <div class="field btns">
                        <button class="prev-2 prev">Previous</button>
                        <button class="next-2 next">Next</button>
                    </div>
                </div>
                
                <div class="page">
                    <div class="title">
                        Education
                    </div>
                    <div class="field">
                        <div class="label">
                            Grade
                        </div>
                        <select>
                            <option disabled>please choose</option>
                            <option>Grade 1</option>
                            <option>Grade 2</option>
                            <option>Grade 3</option>
                            <option>Grade 4</option>
                            <option>Grade 5</option>
                            <option>Grade 6</option>
                            <option>Grade 7</option>
                            <option>Grade 8</option>
                            <option>Grade 9</option>
                            

                        </select>
                    </div>
                    <div class="field">
                        <div class="label">
                            Old School
                        </div>
                        <input type="text">
                    </div>
                    <div class="field btns">
                        <button class="prev-3 prev">Previous</button>
                        <button class="next-3 next">Next</button>
                    </div>
                </div>

                <div class="page">
                    <div class="title">
                        Login Details:
                    </div>
                    <div class="field">
                        <div class="label">
                            Username
                        </div>
                        <input type="text">
                    </div>
                    <div class="field">
                        <div class="label">
                            Password
                        </div>
                        <input type="password">
                    </div>
                    <div class="field btns">
                        <button class="prev-4 prev">Previous</button>
                        <button class="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="scriptstudent.js"></script>
</body>

</html>