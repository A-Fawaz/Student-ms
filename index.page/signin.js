let bntSignin = document.getElementById("submit");

bntSignin.addEventListener("click", () => {
  let uname = document.getElementById("u").value;
  let upass = document.getElementById("p").value;
  if (uname == "") {
    let alert1 = document.getElementById("p1alert");
    alert1.style.display="block";
    alert1.innerHTML="Username required.";
    // return false;
    

  }
  else if(upass==""){
    let alert2 = document.getElementById("p2alert");
    alert2.innerHTML="Password required.";
  }

  else{
    alert("done");
  }
});