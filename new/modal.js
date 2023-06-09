var modal = document.querySelector(".modal");
   var btn = document.querySelector(".openModal");
   var span = document.querySelector(".close");
   btn.addEventListener("click", () => {
      modal.style.display = "block";
   });
   span.addEventListener("click", () => {
      hideModal();
   });
   function hideModal() {
      modal.style.display = "none";
   }
   window.onclick = function(event) {
      if (event.target == modal) {
         hideModal();
      }
   };
   let toggle = button => {
    let element = document.getElementById("mytr");
    let hidden = element.getAttribute("hidden");

    if (hidden) {
       element.removeAttribute("hidden");
       button.innerText = "Hide tr";
    } else {
       element.setAttribute("hidden", "hidden");
      
    }
  }