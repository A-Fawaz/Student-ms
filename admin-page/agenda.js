 let subjectname=document.getElementById('subjectname');
 let chooseclass=document.getElementById('chooseclass');
 let submit=document.getElementById('submitbtn');
 let tasks=document.getElementById('tasks');
 let fileInputs=document.getElementById('fileInputs');
 let okkbtn=document.getElementById('okkbtn');
 var modal = document.getElementById("myModal");



function click_ok(){

    if(chooseclass.value && subjectname.value !=''){
        alert('please enter your tasks below!');
        okkbtn.disabled=true;

    }
    else{
        alert('Please fill all info!');
    }
}okkbtn.addEventListener("click",click_ok);

function add_tasks(){
    modal.style.display = "block";

}
submit.addEventListener('click',add_tasks);

