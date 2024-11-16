const navbarMenu = document.querySelector(".navbar .links .login-btn");
const hamburgerBtn = document.querySelector(".hamburger-btn");
const hideMenuBtn = navbarMenu.querySelector(".close-btn");
const showPopupBtn = document.querySelector(".login-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = formPopup.querySelector(".close-btn");
const signupLoginLink = formPopup.querySelectorAll(".bottom-link a");

// Show mobile menu
hamburgerBtn.addEventListener("click", () => {
    navbarMenu.classList.toggle("show-menu");
});

// Hide mobile menu
hideMenuBtn.addEventListener("click", () => hamburgerBtn.click());

// Show login popup
showPopupBtn.addEventListener("click", () => {
    document.body.classList.toggle("show-popup");
});

// Hide login popup
hidePopupBtn.addEventListener("click", () => showPopupBtn.click());

// Show or hide signup form
signupLoginLink.forEach(link => {
    link.addEventListener("click", (e) => {
        e.preventDefault();
        formPopup.classList[link.id === 'signup-link' ? 'add' : 'remove']("show-signup");
    });
});

// get id from email
document.getElementById("email").addEventListener("change", function (event) {

    //alert("Selected color: " + this.value);

    // Get the email value from the input field
    var email = document.getElementById("email").value;
    var errorMessage = document.getElementById("error-message-email");
    if (email != "") {
        document.getElementById('email_label').style.display = "none";
    } else {
        document.getElementById('email_label').style.display = "block";
    }

    // Regular expression to validate email format
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    // Check if the email matches the regex pattern
    if (!emailPattern.test(email)) {
        errorMessage.textContent = "Please enter a valid email address.";
        errorMessage.style.color = "red";
        event.preventDefault(); // Prevent form submission
    } else {
        errorMessage.textContent = "Valid Email"; // Clear error message if valid
        errorMessage.style.color = "green";
    }
});


// get id from password
document.getElementById("password").addEventListener("change", function (event) {
    event.preventDefault();

    //alert("Selected color: " + this.value);

    // Get the password value from the input field
    var password = document.getElementById("password").value;
    var errorMessage = document.getElementById("error-message-password");
    if (password != "") {
        document.getElementById('password_label').style.display = "none";
    } else {
        document.getElementById('password_label').style.display = "block";
    }

    // Regular expression to validate password format
    var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // Check if the password matches the regex pattern

    if (!password) {
        errorMessage.textContent = "Enter Password..."; // Clear error message if valid
        errorMessage.style.color = "red";
    } else if (!passwordPattern.test(password)) {
        errorMessage.textContent = "Please enter a valid password.";
        errorMessage.style.color = "red";
    } else {
        errorMessage.textContent = "Valid Password";
        errorMessage.style.color = 'green';
    }

});

   // get id from email
document.getElementById("gmail").addEventListener("change", function (event) {

    //alert("Selected color: " + this.value);

    // Get the email value from the input field
    var miku = document.getElementById("gmail").value;
    var errorMessage = document.getElementById("error-message-gmail");
    if (email != "") {
        document.getElementById('gmail_label').style.display = "none";
    } else {
        document.getElementById('gmail_label').style.display = "block";
    }

    // Regular expression to validate email format
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    // Check if the email matches the regex pattern
    if (!emailPattern.test(miku)) {
        errorMessage.textContent = "Please enter a valid email address.";
        errorMessage.style.color = "red";
        event.preventDefault(); // Prevent form submission
    } else {
        errorMessage.textContent = "Valid Email"; // Clear error message if valid
        errorMessage.style.color = "green";
    }
});


// get id from password
document.getElementById("register_password").addEventListener("change", function (event) {
    event.preventDefault();

    //alert("Selected color: " + this.value);

    // Get the password value from the input field
    var senorita = document.getElementById("register_password").value;
    var errorMessage = document.getElementById("register-error-message-password");
    if (password != "") {
        document.getElementById('register_password_label').style.display = "none";
    } else {
        document.getElementById('register_password_label').style.display = "block";
    }

    // Regular expression to validate password format
    var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    // Check if the password matches the regex pattern

    if (!password) {
        errorMessage.textContent = "Enter Password..."; // Clear error message if valid
        errorMessage.style.color = "red";
        return false;
    } else if (!passwordPattern.test(senorita)) {
        errorMessage.textContent = "Please enter a valid password.";
        errorMessage.style.color = "red";
        return false;
    } else {
        errorMessage.textContent = "Valid Password";
        errorMessage.style.color = 'green';
        return true;
    }

});




