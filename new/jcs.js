//Get the list items
let options = document.querySelectorAll("#options > li");
//Constant for the class
const HIDDEN_CLASS = "hidden";

//Add event listener to the dropdown
document.getElementById("dropdown").addEventListener("change", function () {
    //Selected value
    var val = this.value;
    //Loop throug the list items
    for (var i = 0; i < options.length; i++) {
        //Id the list item has a matching data attribute
        if (options[i].dataset.option === val) {
            //Remove the hidden class
            options[i].classList.remove(HIDDEN_CLASS);
            //Otherwise id the list item does not have the hidden class  
        } else if (!options[i].classList.contains(HIDDEN_CLASS)) {
            //Add it
            options[i].classList.add(HIDDEN_CLASS);
        }
    }
});
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("options");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
};
var trash = document.getElementsByClassName("delete");
var btndelete = document.getElementById("trash");
ul.addEventListener("click", function (e) {
    var target = e.target;
    if (target.classList.contains("delete")) {
        target.parentNode.remove();
    }
});
function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }