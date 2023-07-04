<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="certificate.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script>
      function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("forcont").style.marginLeft = "50px";
      }

      function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("forcont").style.marginLeft = "0px";
      }
    </script>
    <title>Certificate</title>
  </head>
  <body>
  <aside>
        <div id="mySidebar" class="sidebar">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
            >&times;</a
          >

          <div class="logotitle">
            <img class="logo" src="../logos/grammar.png" alt="" />
            <a href="../student agenda page/agenda.php">Agenda</a>
          </div>
          <div class="logotitle">
            <img class="logo" src="../logos/graduated-student.png" alt="" />
            <a href="certificate.php">Grades</a>
          </div>
          <div class="logotitle">
            <img class="logo" src="../logos/profile.png" alt="" />
            <a href="../Student/student-profile.php"> Profile</a>
          </div>
          <div class="logotitle">
            <img class="logo" src="../logos/gear.png" alt="" />
            <a href="../index.page/changepassword.php">Change Password </a>
          </div>
          <div class="logotitle">
            <img class="logo" src="../logos/door-knob.png" alt="" />
            <a href="../index.page/logout.php"> Log Out</a>
          </div>
          <p class="copyrights">© 2023 The President and Fellows of E School</p>
        </div>

        <div id="main">
          <button class="openbtn" onclick="openNav()">&#9776;</button>
        </div>
      </aside>

    <?php
    $conn = mysqli_connect("localhost", "root", "", "school-management");

    if(!$conn) {
        die('unable to connect to database'.mysqli_error());
    } else {
        $firstname = "";
        $lastname = "";
        $classid="";
        $class="";

        session_start();
        $studentname = $_SESSION['studentname'];
        $sql = "SELECT id FROM `student` WHERE username='$studentname'";
        $result = mysqli_query($conn, $sql);
        if(! $result) {

            echo "error";
        } else {
            $row=mysqli_fetch_assoc($result);
            $studentid=$row['id'];
            $sql = "SELECT firstname, lastname, classid FROM `student` WHERE id='$studentid' ";
            $result = mysqli_query($conn, $sql);
            if(! $result) {
                echo "error";
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
                    $firstname=$row['firstname'];
                    $lastname = $row['lastname'];
                    $classid= $row['classid'];
                }

                $sql = "SELECT name FROM `class` WHERE id='$classid' ";
                $result = mysqli_query($conn, $sql);
                if(! $result) {
                    echo "error";
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $class= $row['name'];
                    }
                }
            }
        }
    }
    ?>

    <div class="container-full">
      <div class="container-report">
        <div class="report-head">E-School</div>
        <div class="name-class">
          <div class="name" id="name">Name: <?php echo $firstname.' '.$lastname?></div>
          <div class="class" id="class">Class: <?php echo $class;?></div>
        </div>
        <div class=" tab table-responsive-sm ">
          <table class="table table-striped table-bordered w-75">
            <thead class="head">
              <tr>
                <th>Subject</th>
                <th>Exam 1</th>
                <th>Exam 2</th>
                <th>Final-Exam</th>
                <th>Total Average</th>
              </tr>
            </thead>
            <tbody class="t-body">
              <tr id='english'>
                <td>English</td>
              </tr>
              <tr id='arabic'>
                <td>Arabic</td>
              </tr>
              <tr id='math'>
                <td>Math</td>
              </tr>
              <tr id='physics'>
                <td>Physics</td>
              </tr>
              <tr id='biology'>
                <td>Biology</td>
              </tr>
              <tr id='chemistry'>
                <td>Chemistry</td>
              </tr>

              <tr id='history'>
                <td>History</td>
              </tr>

              <tr id='geography'>
                <td>Geography</td>
              </tr>
              <tr id='sport'>
                <td>Sport</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="r">
          <!-- <fieldset class="f border p-2">
            <legend class="l w-auto float-none">Comment:</legend>
          </fieldset> -->

          <div class="result" id="result"></div>
          <fieldset class="f1 border p-2">
            <legend class="l w-auto float-none" id='resulting'>Total Average:</legend>
            <div style="display:flex;flex-direction:row;">
            <div id="echo" class="echo"></div>
            <div id="value" class="value"></div>
            <div id="value1" class="value1"></div>
            <div>
  </div>
            </div>
            
          </fieldset>
          <fieldset class="f1 border p-2">
            <legend class="l w-auto float-none">Grading Scale:</legend>
            <div>
              <b>A</b> = 18 - 20 |  <b> B </b>= 15 - 17 |  <b> C </b>= 10 - 14 |  <b> D </b>= 0 - 9
              
            </div>
            
          </fieldset>
        </div>
        <button class="print" onclick="window.print();return false;">
          Print
        </button>
      </div>
    </div>

  <script>
  
  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "data1.php";
  var asy = true;
  var totalValue=0;

  ajax.open(method,url,asy);

  ajax.send();

  ajax.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var data = JSON.parse(this.responseText);
      console.log(data);

      var html = "";
      var avg=0;
      html += `<td>Math</td>`;
      for(var a =0; a<data.length; a++){
        var mathgrade = parseInt(data[a].grade);
        
        html += `<td>`+mathgrade+`</td>`;
        avg+=mathgrade;
      }
      
      if(data.length>2){
        html += `<td>`+((avg/data.length).toFixed(2))+`</td>`;
      document.getElementById('math').innerHTML=html;
      }else{
        document.getElementById('math').innerHTML=html;
      }
        
      
      
      totalValue+=Number((avg/data.length).toFixed(2));
    }
    
  }

    </script>

  <script>
  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "data2.php";
  var asy = true;

  ajax.open(method,url,asy);

  ajax.send();
  ajax.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var data1 = JSON.parse(this.responseText);
      console.log(data1);

      var html = "";
      var avg=0;
      html += `<td>English</td>`;
      for(var a =0; a<data1.length; a++){
        var englishgrade = parseInt(data1[a].grade);
        
        html += `<td>`+englishgrade+`</td>`;
        avg+=englishgrade;
      }
      if(data1.length>2){
        html += `<td>`+((avg/data1.length).toFixed(2))+`</td>`;
      
      document.getElementById('english').innerHTML=html;
      }else{
        document.getElementById('english').innerHTML=html;
      }
      
      totalValue+=Number((avg/data1.length).toFixed(2));
      
    }
    
    }
  
  </script>

<script>
  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "data3.php";
  var asy = true;

  ajax.open(method,url,asy);

  ajax.send();
  ajax.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var data1 = JSON.parse(this.responseText);
      console.log(data1);

      var html = "";
      var avg=0;
      html += `<td>Arabic</td>`;
      for(var a =0; a<data1.length; a++){
        var arabic = parseInt(data1[a].grade);
        
        html += `<td>`+arabic+`</td>`;
        avg+=arabic;
      }
      if(data1.length>2){
        html += `<td>`+((avg/data1.length).toFixed(2))+`</td>`;
      document.getElementById('arabic').innerHTML=html;
      }else{
        document.getElementById('arabic').innerHTML=html;
      }
      
      totalValue+=Number((avg/data1.length).toFixed(2));
    }}
  
  </script>

<script>
  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "data4.php";
  var asy = true;

  ajax.open(method,url,asy);

  ajax.send();
  ajax.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var data1 = JSON.parse(this.responseText);
      console.log(data1);

      var html = "";
      var avg=0;
      html += `<td>Physics</td>`;
      for(var a =0; a<data1.length; a++){
        var physicsgrade = parseInt(data1[a].grade);
        
        html += `<td>`+physicsgrade+`</td>`;
        avg+=physicsgrade;
      }

      if(data1.length>2){
        html += `<td>`+((avg/data1.length).toFixed(2))+`</td>`;
      document.getElementById('physics').innerHTML=html;
      }else{
        document.getElementById('physics').innerHTML=html;
      }
      
      totalValue+=Number((avg/data1.length).toFixed(2));
    }}
  
  </script>


<script>
  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "data5.php";
  var asy = true;

  ajax.open(method,url,asy);

  ajax.send();
  ajax.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var data1 = JSON.parse(this.responseText);
      console.log(data1);

      var html = "";
      var avg=0;
      html += `<td>Biology</td>`;
      for(var a =0; a<data1.length; a++){
        var biologygrade = parseInt(data1[a].grade);
        
        html += `<td>`+biologygrade+`</td>`;
        avg+=biologygrade;
      }
      if(data1.length>2){
        html += `<td>`+((avg/data1.length).toFixed(2))+`</td>`;
      document.getElementById('biology').innerHTML=html;
      }else{
        document.getElementById('biology').innerHTML=html;
      }
      
      totalValue+=Number((avg/data1.length).toFixed(2));
    }}
  
  </script>

<script>
  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "data6.php";
  var asy = true;

  ajax.open(method,url,asy);

  ajax.send();
  ajax.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var data1 = JSON.parse(this.responseText);
      console.log(data1);

      var html = "";
      var avg=0;
      html += `<td>Chemistry</td>`;
      for(var a =0; a<data1.length; a++){
        var chemistrygrade = parseInt(data1[a].grade);
        
        html += `<td>`+chemistrygrade+`</td>`;
        avg+=chemistrygrade;
      }
      if(data1.length>2){
        html += `<td>`+((avg/data1.length).toFixed(2))+`</td>`;
      document.getElementById('chemistry').innerHTML=html;
      }else{
        document.getElementById('chemistry').innerHTML=html;
      }
      
      totalValue+=Number((avg/data1.length).toFixed(2));
    }}
  
  </script>


<script>
  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "data7.php";
  var asy = true;

  ajax.open(method,url,asy);

  ajax.send();
  ajax.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var data1 = JSON.parse(this.responseText);
      console.log(data1);

      var html = "";
      var avg=0;
      html += `<td>History</td>`;
      for(var a =0; a<data1.length; a++){
        var historygrade = parseInt(data1[a].grade);
        
        html += `<td>`+historygrade+`</td>`;
        avg+=historygrade;
      }
      if(data1.length>2){
        html += `<td>`+((avg/data1.length).toFixed(2))+`</td>`;
      document.getElementById('history').innerHTML=html;
      }else{
        document.getElementById('history').innerHTML=html;
      }
      
      totalValue+=Number((avg/data1.length).toFixed(2));
    }}
  
  </script>

<script>
  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "data8.php";
  var asy = true;

  ajax.open(method,url,asy);

  ajax.send();
  ajax.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var data1 = JSON.parse(this.responseText);
      console.log(data1);

      var html = "";
      var avg=0;
      html += `<td>Geography</td>`;
      for(var a =0; a<data1.length; a++){
        var geographygrade = parseInt(data1[a].grade);
        
        html += `<td>`+geographygrade+`</td>`;
        avg+=geographygrade;
      }
      if(data1.length>2){
        html += `<td>`+((avg/data1.length).toFixed(2))+`</td>`;
      document.getElementById('geography').innerHTML=html;
      }else{
        document.getElementById('geography').innerHTML=html;
      }
      
      totalValue+=Number((avg/data1.length).toFixed(2));
    }}
  
  </script>

<script>
  var ajax = new XMLHttpRequest();
  var method = "GET";
  var url = "data9.php";
  var asy = true;

  ajax.open(method,url,asy);

  ajax.send();
  ajax.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
      var data1 = JSON.parse(this.responseText);
      console.log(data1);

      var html = "";
      var avg=0;
      html += `<td>Sport</td>`;
      for(var a =0; a<data1.length; a++){
        var sportgrade = parseInt(data1[a].grade);
        
        html += `<td>`+sportgrade+`</td>`;
        avg+=sportgrade;
      }
      if(data1.length>2){
        html += `<td>`+((avg/data1.length).toFixed(2))+`</td>`;
      document.getElementById('sport').innerHTML=html;
      }else{
        document.getElementById('sport').innerHTML=html;
      }
      
      document.getElementById('echo').innerHTML=(totalValue/9).toFixed(2);
      totalValue+=Number((avg/data1.length).toFixed(2));

      if(data1.length==3){
        if((totalValue/9).toFixed(2)<11){
        document.getElementById('value').innerHTML=" ---Failed";
      }else{
        document.getElementById('value1').innerHTML=" ---Success";
      }
      }else{
        document.getElementById("value").innerHTML="Total unavailabe";
      }
      
      
    }}
  
  </script>



  </body>
</html>
