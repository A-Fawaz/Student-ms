<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit-agenda.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script>
    function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.getElementById("container").style.marginLeft = "39vh"
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.getElementById("container").style.marginLeft = "20vh"
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
    <div class="container border" id="container">
        <div class="row" id="row1">
                <div class="accordion accordion-flush"  id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Monday, May 15th
                            </button>
                        </h2>
                    </div>
                    <div id="flush-collapseOne" class="container accordion-collapse collapse"
                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="row card-body">
                        <div class="card-body text-secondary card border-secondary col-md-6">

                            <h5 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="26"
                                style="color: #fb8b24;" fill="currentColor" class="bi bi-journal-text"
                                viewBox="0 0 16 16">
                                <path
                                    d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                <path
                                    d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                <path
                                    d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                            </svg>History</h5>
                            <p class="card-text">Memorize pages 25 + 26 + 27 (Palestinian occupiance)</p>

                            <div class="card-footer">Batoul Wehbe <br>11 May 2:20 pm <br> <br>
                                <div class="btn-group me-2" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-outline-secondary"  id="editbtn"><img
                                            src="../logos/pencil.png" width="16" height="16"></img>
                                         </button>
                                         <button type="button" class="btn btn-outline-secondary" id="deletebtn"><img
                                            src="../logos/trash.png" width="16" height="16"></img>
                                         </button>
                                </div>
                            </div>  


                        </div>
                        <div class="card-body text-secondary card border-secondary col-md-6">
                            <h5 class="card-title"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="26"
                                    style="color: #fb8b24;"" fill=" currentColor" class="bi bi-journal-text"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                    <path
                                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                    <path
                                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                </svg>English</h5>
                            <p class="card-text">Read pages 25 + 26 + 27 (Vincent Van Gogh Poem)</p>
                            <div class="card-footer">John Williams <br>11 May 2:20 pm <br> <br>
                                <div class="btn-group me-2" role="group" aria-label="First group">
                                    <button type="button" class="btn btn-outline-secondary" id="editbtn"><img
                                        src="../logos/pencil.png" width="16" height="16"></img>
                                     </button>
                                     <button type="button" class="btn btn-outline-secondary" id="deletebtn"><img
                                        src="../logos/trash.png" width="16" height="16"></img>
                                     </button>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
                </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="editagenda.js"></script>
</body>
</html>