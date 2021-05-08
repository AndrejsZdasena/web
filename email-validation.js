

function validateEmail() {

    let emailID = document["validation"]["email"].value;
    let valid = emailID.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/);

    if (!valid) {
        alert("Please enter correct email ID");

        return false;
    }
    if (emailID.endsWith(".co")) {
        alert("with .co is not allowed");
        return false;
    }
    return true;
}

function validateForm() {
    let x = document.forms["validation"]["email"].value;

    if (x == null || x === "") {
        alert("Email is must");

        return false;
    }
    return validateEmail() && valthis();
   
}

function valthis() {
    let checkBox = document.getElementById('checkb');
    let isChecked = checkBox.checked;

    if (!isChecked) {

        alert('Please, check the checkbox!');
        return false;
    }
    return true;
}
function redirect(){
     window.location.replace(registered.html);
}