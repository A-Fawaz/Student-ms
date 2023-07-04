<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="contact.css">
  <meta name="description" content="this is he best hotel built by Allo-squad">
  <script src="https://kit.fontawesome.com/47bf49ffd8.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" media="screen and (max-width: 768px) " href="mobile.css">
  <meta name="keywords" content="hotel lebanon, allo squad, HAS,Hotel Allo-Squad">


  <title>Contact Us</title>


</head>

<body>
  <header>

    <nav>
      
      <h1>E-School</h1>
        <ul class="nav-list">
          <li><a href="index.html">Home</a></li>
          <li><a id="space" href="index.html#about-section">About</a></li>
          <li><a href="index.html#contactsection">Contact</a></li>
        </ul>
        <button class="btn"><a href="../index.page/signup.html" > Join Now! </a><span style="font-size:x-large;"> </span>	</button>
      </nav>
    </nav>
  </header>
  <section id="contact">
    <div class="container">
      <h1 class="l-heading"><span class="primary-tex"> Contact </span> Us </h1>
      <p>Feel free to ask about anything!</p>
      <br>
      <div>
        <label for="name">Name</label>
        <input type="name" name="name" id="name">
        <p class="alert" id="alert1"></p>
      </div>
      <div>
        <label for="Last-name">Last name</label>
        <input type="name" name="name" id="Last-name">
        <p class="alert" id="alert2"></p>
      </div>
      <div>
        <label for="Email">Email</label>  
        <input type="Email" name="Email" id="Email">
        <p class="alert" id="alert3"></p>
      </div>
      <div>
        <label for="Message">Message</label>
        <textarea name="Message" id="Message" cols="30" rows="10"></textarea>
        <p class="alert" id="alert4"></p>
      </div>
      <button type="submit" class="btn" id="submit">Submit</button>
    </div>
  </section>

  <footer class="containerbottom" id="contactsection">
    

    <div  class="logo-bottom"><img src="../logos/output-onlinepngtools (1).png" alt="">E-School </div>
    
          <div class="twoblocks">
    
            <!-- <div class="githubblock">
              <p>
                Collaborators github accounts
              </p> 
              <a href="https://github.com/A-Fawaz">A-Fawaz</a>
              <a href="https://github.com/DanahAlAbdallah">D-Al abdalla</a>
              <a href="https://github.com/Fatimatarhini">F-Tarhini</a>
              <a href="https://github.com/alizreik999">A-Zreik</a>
            </div> -->
            <div class="contactblock">
              <p>Get in touch</p> 
              <p>call (617) 495-1000</p>  
              <p>Email Esacodinglab@gmail.com</p>
              <a class="link" href="./contact.html">Website Feedback Form</a>
            </div>
          </div>
        <div class="text"> 
          <div class="copyrights">
            <p >© 2023 The President and Fellows of E School</p>
    
          </div>
        <div class="links">
          <a href="">Facebook</a>
          <a href="">Twitter</a>
          <a href="">Instagram</a>
          <a href="">Youtube</a>
        </div>  
      
            
          </div>
          
        
      </footer>

  <script>
    let submit = document.getElementById('submit');
    submit.addEventListener("click",()=>{
let fname = document.getElementById('name').value;
let lname = document.getElementById('Last-name').value;
let email = document.getElementById('Email').value;
let message = document.getElementById('Message').value;

let alert1 = document.getElementById("alert1");
let alert2 = document.getElementById("alert2");
let alert3 = document.getElementById("alert3");
let alert4 = document.getElementById("alert4");

if(fname.trim()===""){
  alert1.innerHTML="Please fill the name field.";
}

else if(lname.trim()===""){
  alert2.innerHTML="Please fill the lastname field.";
  alert1.innerHTML="";
}

else if(email.trim()===""){
alert3.innerHTML="Please fill the email field.";
alert2.innerHTML="";
}

else if(message.trim()===""){
  alert4.innerHTML="Please keep a message.";
  alert3.innerHTML="";
}
else{
  alert("Thanks for contacting us!");
}
    });
  </script>
</body>

</html>