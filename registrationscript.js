document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
        if (!checkError(event)) {
            event.preventDefault(); // Prevent form submission
        }
    });
});


function validateFName(){
    fname= document.getElementById("fname").value;
    var letters =/^[A-Za-z]+$/;

    if(fname.match(letters)){
        document.getElementById("fname-err-msg").style.display="none";
        return true;
    }else{
        document.getElementById("fname-err-msg").innerHTML="First  name must have alphabet ";
        return false;
    }
}
function validateLName(){
    fname= document.getElementById("lname").value;
    var letters =/^[A-Za-z]+$/;

    if(fname.match(letters)){
        document.getElementById("lname-err-msg").style.display="none";
        return true;
    }else{
        document.getElementById("lname-err-msg").innerHTML="Last  name must have alphabet ";
        return false;
    }
}
function validateEmail(){
    email= document.getElementById("email").value;
    var letters =/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email.match(letters)){
        document.getElementById("email-err-msg").style.display="none";
        return true;
    }else{
        document.getElementById("email-err-msg").innerHTML="You have entered an invalid email address !";
        return false;
}

}
function validatePassword(){
    password = document.getElementById("pw").value;
    var decimal =/^(?=.*\d)(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-])[A-Za-z\d!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]{7,15}$/;
    if(password.match(decimal)){
        document.getElementById("pw-err-msg").style.display="none";
        return true;
    } else{
        document.getElementById("pw-err-msg").innerHTML="enter a password between 7 to 15 characters which contain <br>at least one numeric digit and a special character!";
        return false;
    }
}
function validateCPassword() {
    var cpassword = document.getElementById("cpw").value;
    var password = document.getElementById("pw").value;
    var errorElement = document.getElementById("cpw-err-msg");
    
    if (password === cpassword) {
        errorElement.style.display = "none";
        return true;
    } else {
        errorElement.innerHTML = "Passwords do not match!";
        errorElement.style.display = "block"; // Ensure the error message is shown
        return false;
    }
}


function checkError(event) {
    var isValid = true;
    const errorMsg = document.getElementById('server-error-msg').textContent;
    if (errorMsg) {
        // Prevent form submission if there's a server-side error
        isValid= false;
    }else{
        if (!validateFName()) isValid = false;
        if (!validateLName()) isValid = false;
        if (!validateEmail()) isValid = false;
        if (!validatePassword()) isValid = false;
        if (!validateCPassword()) isValid = false;
    }

    return isValid;
}