var modal = document.querySelector(".modal fade");
   var btn = document.querySelector(".trigger-btn");
  
   btn.addEventListener("click", () => {
      modal.style.display = "block";
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
       
    } else {
       element.setAttribute("hidden", "hidden");
      
    }
  }