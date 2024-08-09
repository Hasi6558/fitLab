document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    const firstName = document.querySelector("input[placeholder='First name']");
    const lastName = document.querySelector("input[placeholder='Last name']");
    const email = document.querySelector("input[placeholder='email']");
    const password = document.querySelector("input[placeholder='Password']");
    const confirmPassword = document.querySelector("input[placeholder='Re-Enter-Password']");
    const addressLine1 = document.querySelector("input[name='address_line1']");
    const postalCode = document.querySelector("input[placeholder='postal-code']");

    const fnameErrMsg = document.querySelector(".fname-err-msg");
    const lnameErrMsg = document.querySelector(".lname-err-msg");
    const emailErrMsg = document.querySelector(".email-err-msg");
    const pwErrMsg = document.querySelector(".pw-err-msg");
    const cpwErrMsg = document.querySelector(".cpw-err-msg");

    form.addEventListener("submit", function(event) {
        let isValid = true;

        // First Name validation
        if (firstName.value.trim() === "") {
            fnameErrMsg.textContent = "First name is required.";
            isValid = false;
        } else {
            fnameErrMsg.textContent = "";
        }

        // Last Name validation
        if (lastName.value.trim() === "") {
            lnameErrMsg.textContent = "Last name is required.";
            isValid = false;
        } else {
            lnameErrMsg.textContent = "";
        }

        // Email validation
        if (!validateEmail(email.value)) {
            emailErrMsg.textContent = "Invalid email format.";
            isValid = false;
        } else {
            emailErrMsg.textContent = "";
        }

        // Password validation
        if (password.value.trim() === "") {
            pwErrMsg.textContent = "Password is required.";
            isValid = false;
        } else if (password.value.length < 6) {
            pwErrMsg.textContent = "Password must be at least 6 characters.";
            isValid = false;
        } else {
            pwErrMsg.textContent = "";
        }

        // Confirm Password validation
        if (confirmPassword.value.trim() === "") {
            cpwErrMsg.textContent = "Please confirm your password.";
            isValid = false;
        } else if (confirmPassword.value !== password.value) {
            cpwErrMsg.textContent = "Passwords do not match.";
            isValid = false;
        } else {
            cpwErrMsg.textContent = "";
        }

        // Address Line 1 validation
        if (addressLine1.value.trim() === "") {
            alert("Address line 1 is required.");
            isValid = false;
        }

        // Postal Code validation
        if (postalCode.value.trim() === "") {
            alert("Postal code is required.");
            isValid = false;
        } else if (!/^\d{5}$/.test(postalCode.value.trim())) {
            alert("Invalid postal code format. It should be 5 digits.");
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();
        }
    });

    function validateEmail(email) {
        const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        return re.test(email.toLowerCase());
    }
});
