<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="Style.css" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet" />
  <!-- <script>src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"</script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <!-- <link rel="stylesheet" href="index.js"> -->
  <title>Home Page</title>
  <style>
    

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 600px) {
  .text10 {font-size: 11px}
  /* Slideshow container */
.slideshow-container {
  max-width: 600px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text10 {
  color: #f2f2f2;
  /* font-size: 10px; */
  padding: 8px 12px;
  /* position: absolute; */
  bottom: 8px;
  width: 100%;
  text-align: center;

   position: absolute;
  top: 80%;
  left: 40%;
  transform: translate(-10%, -50%);
  background-color: rgba(0, 0, 0, 0.5);
  height: 30%;
  width: 30%;
  color:  var(--white);
  padding: 10px;
  text-align: center;
  font-size: 0.75rem;
  font-weight: bold;
  border-radius: 5px;
}
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

  </style>
</head>

<body>
  <nav>

    <h1>E-School</h1>
    <ul class="nav-list">
      <li><a href="index.php">Home</a></li>
      <li><a id="space" href="index.php#about-section">About</a></li>
      <li><a href="index.php#contactsection">Contact</a></li>
    </ul>
    <button class="btn"><a href="../index.page/signup.php"> Join Now! </a><span style="font-size:x-large;"> </span>
    </button>
  </nav>
  <div class="header-container" id="header">
    <header>
      <div class="school-name">

      </div>

      <div class="location">
        <img src="../logos/gps-location-white-symbol-icon-transparent-png-11637079270ec5zfjqidf.png" alt="Location"
          class="location-logo" />
        <h3>Nabatieh-Governorate</h3>
      </div>

    </header>
  </div>
  <div class="middle" id="about-section">
    <div class="about">
      <img class="icon" src="../logos/house-with-check-mark.png" alt="about">
      <p class="textwithborder">
        Discover a world of boundless learning opportunities at eSchool, where education is made accessible and
        convenient through our innovative online platform. Join our vibrant virtual community, connect with expert
        instructors, and unlock your full potential from the comfort of your own home.
      </p>

    </div>
    <div class="about">
      <img class="icon" src="../logos/chief-executive-officer.png" alt="about">
      <p class="textwithborder">
        As the Principal of our esteemed e-learning school, I warmly welcome you to our virtual campus, where knowledge
        knows no bounds. Together, let us embrace the transformative power of online education and unlock the doors to
        endless opportunities for growth and success.
      </p>

    </div>
    <div class="about">
      <img class="icon" src="../logos/teamwork.png" alt="about">
      <p class="textwithborder">
        Our school is proud to have established strong partnerships and connections with local businesses, community
        organizations, and educational institutions, allowing us to provide our students with valuable real-world
        experiences and opportunities for collaboration.
      </p>



    </div>


  </div>
  <div class="teachers" >
    <div class="container">
      <div class="theimgs"> <!--trying new class to fix the media queries-->
        <img src="../images/teacher1-min.jpg" alt="teacher1-img" class="t1">

      </div>
      <div class="text-overlay1">
        <h3 class="on-pic">
          Hello students we are glad to see you! Lorem ipsum dolor sit amet consectetur
          </h2>
      </div>
      <div class="theimgs">
        <img src="../images/teacher2-min.jpg" alt="teacher2-img" class="t2">

      </div>
      <div class="text-overlay2">
        <h3 class="on-pic">
          Hello students we are glad to see you! Lorem ipsum dolor sit amet consectetur
          </h2>
      </div>
      <div class="theimgs">
        <img src="../images/teacher3.jpg" alt="teacher3-img" class="t3 ">

      </div>
      <div class="text-overlay3">
        <h3 class="on-pic">
          Hello students we are glad to see you! Lorem ipsum dolor sit amet consectetur
          </h2>
      </div>

    </div>
  </div>
  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="../images/teacher1.jpg" style="width:100%">
      <div class="text10">Hello students we are glad to see you! Lorem ipsum dolor sit amet consectetur</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="../images/teacher2.jpg" style="width:100%">
      <div class="text10">Hello students we are glad to see you! Lorem ipsum dolor sit amet consectetur</div>
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="../images/teacher3.jpg" style="width:100%">
      <div class="text10">Hello students we are glad to see you! Lorem ipsum dolor sit amet consectetur</div>
    </div>
    
    </div>
    
    
  <footer class="containerbottom" id="contactsection">


    <div class="logo-bottom"><img src="../logos/output-onlinepngtools (1).png" alt="">E-School </div>

    <div class="twoblocks">

       <!-- <div class="contactblock">
          <p>
           Collaborators github accounts
          </p> 
          <div class="links">

            <a  href="https://github.com/A-Fawaz">A-Fawaz</a>
            <br>
            <a href="https://github.com/DanahAlAbdallah">D-Al abdalla</a>
            <br>
            <a href="https://github.com/Fatimatarhini">F-Tarhini</a>
            <br>
            <a href="https://github.com/alizreik999">A-Zreik</a>
          </div> -->
        </div> 
      <div class="contactblock">
        <p>Get in touch</p>
        <p>call : (617) 495-1000</p>
        <p>Email : eschool498@gmail.com</p>
        <a class="link" href="../index.page/contact.php">Website Feedback Form</a>
      </div>
    </div>
    <div class="text">
      <div class="copyrights">
        © 2023 The President and Fellows of E School

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

    let slideIndex = 0;
    showSlides();
  
  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
  }
</script>
</body>

</html>