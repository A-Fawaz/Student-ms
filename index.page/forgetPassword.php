<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="forgetpassword.css" rel="stylesheet" />
    <title>Forget Password</title>
  </head>

  <body>
    <nav>
      <h1>E-School</h1>
      <ul class="nav-list">
        <li><a href="index.html">Home</a></li>
        <li><a id="space" href="index.html#about-section">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>

    <div class="div">
      <div class="img1">
        <img
          src="../images/mobilesignup.gif"
          alt="ChangePassword"
          class="changeimg"
        />
      </div>
      <div class="div3">
        <div class="signin-form">
          <div class="fp1">
            <h3 class="please">Please enter your email to find your account</h3>
            <input type="email" class="field1" placeholder="Email" id="email" />
            <br />
            <p class="alert" id="alert"></p>
            <br />
            <div class="btns">
              <button type="button" class="btn" id="save">Save</button>
              <button type="button" class="btn" id="cancel">Cancel</button>
            </div>
            <!-- <a href="../index.page/changeforget.html"></a> -->
          </div>
        </div>
      </div>
    </div>
    <script>
      let save = document.getElementById("save");
      save.addEventListener("click", () => {
        let email = document.getElementById("email").value;
        let alert = document.getElementById("alert");
        if (email == "") {
          alert.innerHTML = "Please enter your email.";
        } else {
          location.href = "../index.page/changeforget.html";
        }
      });
    </script>
  </body>
</html>
