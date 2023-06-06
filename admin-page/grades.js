let classSelect = document.getElementById("chooseclass");
let subjectSelect = document.getElementById("subject");
let show=document.getElementById("show");
let tablegrades=document.getElementById("tablegrades");
let average=document.getElementById("average");
let exam1=document.getElementById("exam1");
let exam2=document.getElementById("exam2");
let exam3=document.getElementById("exam3");
let submit=document.getElementById('submit');

let gradesArray = [];




function validateForm() {

if (classSelect.value === "") {
    alert("Please select a class.");
    return false;
  }

  if (subjectSelect.value === "") {
    alert("Please select a subject.");
    return false;
  }


  else {
tablegrades.style.display='block';
  }
}
show.addEventListener('click',validateForm);




function calcualte_average(){
    var rows = document.querySelectorAll("#tablegrades tbody tr");

    rows.forEach(function (row) {
      var examInputs = row.querySelectorAll(".exam-input");
      var averageInput = row.querySelector(".average-input");

      var total = 0;
      var count = 0;

      examInputs.forEach(function (input) {
        var value = parseFloat(input.value);
        if (!isNaN(value)) {
          total += value;
          count++;
        }
      });

      if (count > 0) {
        var average = total / count;
        averageInput.value = average.toFixed(2);
        
      } else {
        averageInput.value = "";
      }
    });
  }


submit.addEventListener('click',calcualte_average);