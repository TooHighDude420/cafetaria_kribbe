const checkable = document.getElementById("prijs");
const submit = document.getElementById("submitBut");

function checkNum() {
    var num = checkable.value;
    if (isNaN(num)) {
        alert("please enter a number");
        submit.disabled = true;
    } else if(submit.disabled == true && isNaN(num) == false){
        submit.disabled = false;
    }
}   