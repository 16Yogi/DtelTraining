let form = document.getElementById("form");
let fname = document.getElementById("fname");
let lname = document.getElementById("lname");
let email = document.getElementById("email");
let mobile = document.getElementById("mobile");
let password = document.getElementById("password");

function clickfun() {
    if(validation()){
        // alert("Registration Successfull");
        return validation();
    }else{
        return false;
    }
}

// Change class name in error situation
const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}

// Change class name in success situation
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

const isValidName = name => {
    const re = /^[a-zA-Z]+$/;
    return re.test(name);
}

const validation = () => {
    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const emailValue = email.value.trim();
    const mobileValue = mobile.value.trim();
    const passwordValue = password.value.trim();

    let isValid = true;

    // Check first name
    if (fnameValue === '') {
        setError(fname, 'First name is empty');
        isValid = false;
    } else if (!isValidName(fnameValue)) {
        setError(fname, 'Invalid first name');
        isValid = false;
    } else {
        setSuccess(fname);
    }

    // Check last name
    if (lnameValue === '') {
        setError(lname, 'Last name is empty');
        isValid = false;
    } else if (!isValidName(lnameValue)) {
        setError(lname, 'Invalid last name');
        isValid = false;
    } else {
        setSuccess(lname);
    }

    // Email
    if (emailValue === '') {
        setError(email, 'Email is empty');
        isValid = false;
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Invalid email');
        isValid = false;
    } else {
        setSuccess(email);
    }

    // Check mobile
    if (mobileValue === '') {
        setError(mobile, 'Mobile number is empty');
        isValid = false;
    } else if (mobileValue.length !== 10 || isNaN(mobileValue)) {
        setError(mobile, 'Invalid mobile, length must be 10 digits');
        isValid = false;
    } else {
        setSuccess(mobile);
    }

    // Check password
    if (passwordValue === '') {
        setError(password, 'Password is empty');
        isValid = false;
    } else if (passwordValue.length < 8) {
        setError(password, 'Password must be at least 8 characters long');
        isValid = false;
    } else {
        setSuccess(password);
    }

    return isValid;
}
