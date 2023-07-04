let bntSignin = document.getElementById("login");

bntSignin.addEventListener("click", (event) => {
  event.preventDefault(); // Prevent form submission

  let uname = document.getElementById("u").value;
  let upass = document.getElementById("p").value;

  if (uname == "") {
    let alert1 = document.getElementById("p1alert");
    alert1.style.display = "block";
    alert1.innerHTML = "Please enter your username ";
    return false;
  } else {
    let alert1 = document.getElementById("p1alert");
    alert1.style.display = "none";
  }

  if (upass == "") {
    let alert2 = document.getElementById("p2alert");
    alert2.style.display = "block";
    alert2.innerHTML = "please enter your password";
    return false;
  } else {
    let alert2 = document.getElementById("p2alert");
    alert2.style.display = "none";
  }

 
});
