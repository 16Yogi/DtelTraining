const form = document.getElementById("form");
const username = document.getElementById("username");
const email = document.getElementById("email");
const password = document.getElementById("password");
const password2 = document.getElementById("password2");


function clickfun(){
    if (validateInputs()) {
        return true;
    } else {
        return false;
    }
}


const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
}

const isValidEmail = email => {
    const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    console.log("Clicked");
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim(); 

    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    let isValid = true;

    if (usernameValue === '') {
        setError(username, 'username is required');
        isValid = false;
    } else {
        setSuccess(username);
    }

    if (emailValue === '') {
        setError(email, 'email is required');
        isValid = false;
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'invalid email address');
        isValid = false;
    } else {
        setSuccess(email);
    }

    if (passwordValue === '') {
        setError(password, 'password is required');
        isValid = false;
    } else if (passwordValue.length < 8) {
        setError(password, 'password must be at least 8 characters.');
        isValid = false;
    } else {
        setSuccess(password);
    }

    if (password2Value === '') {
        setError(password2, 'please confirm your password');
        isValid = false;
    } else if (password2Value !== passwordValue) {
        setError(password2, "passwords don't match");
        isValid = false;
    } else {
        setSuccess(password2);
    }

    return isValid;
};
