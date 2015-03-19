
// Validating Empty Field
function check_empty() {
if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
alert("Fill All Fields !");
} else {
document.getElementById('form').submit();
alert("Form Submitted Successfully...");
}
}
//Function To Display Popup
function div_show() {
document.getElementById('create').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('create').style.display = "none";
}

function div_show1() {
document.getElementById('login').style.display = "block";
}
//Function to Hide Popup
function div_hide1(){
document.getElementById('login').style.display = "none";
}