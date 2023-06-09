function check() {

    let x = document.getElementById("textadd").value;
    var resultAlert = document.getElementById("textp");
    if (x == "") {
        resultAlert.style.display = "block";
        resultAlert.innerHTML = "please enter an item name ";
        return false;
    }
}
