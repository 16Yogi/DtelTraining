function checkfun() {
    return validation();
}

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorMess = inputControl.querySelector('.error');

    errorMess.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
};

const setSuccess = (element) => {
    const inputControl = element.parentElement;
    const errorMess = inputControl.querySelector('.error');

    errorMess.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(String(email).toLowerCase());
};

const isValidName = name => {
    const re = /^[a-zA-Z]+$/;
    return re.test(name);
};

const validation = () => {
    const fname = document.getElementById("fname").value.trim();
    const lname = document.getElementById("lname").value.trim();
    const email = document.getElementById("email").value.trim();
    const mobile = document.getElementById("mobile").value.trim();
    const password1 = document.getElementById("password1").value.trim();
    const password2 = document.getElementById("password2").value.trim();

    let isValid = true;

    if (fname === "") {
        setError(document.getElementById("fname"), "First name is required");
        isValid = false;
    } else if (!isValidName(fname)) {
        setError(document.getElementById("fname"), "First name must be alphabet");
        isValid = false;
    } else {
        setSuccess(document.getElementById("fname"));
    }

    if (lname === "") {
        setError(document.getElementById("lname"), "Last name is required");
        isValid = false;
    } else if (!isValidName(lname)) {
        setError(document.getElementById("lname"), "Last name must be alphabet");
        isValid = false;
    } else {
        setSuccess(document.getElementById("lname"));
    }

    if (email === "") {
        setError(document.getElementById("email"), "Email is required");
        isValid = false;
    } else if (!isValidEmail(email)) {
        setError(document.getElementById("email"), "Invalid email address");
        isValid = false;
    } else {
        setSuccess(document.getElementById("email"));
    }

    if (mobile === "") {
        setError(document.getElementById("mobile"), "Mobile number is required");
        isValid = false;
    } else if (mobile.length !== 10 || isNaN(mobile)) {
        setError(document.getElementById("mobile"), "Invalid mobile number");
        isValid = false;
    } else {
        setSuccess(document.getElementById("mobile"));
    }

    if (password1 === "" || password2 === "") {
        setError(document.getElementById("password1"), "Password is required");
        setError(document.getElementById("password2"), "Password is required");
        isValid = false;
    } else if (password1 !== password2) {
        setError(document.getElementById("password2"), "Passwords do not match");
        isValid = false;
    } else {
        setSuccess(document.getElementById("password1"));
        setSuccess(document.getElementById("password2"));
    }

    return isValid;
};
