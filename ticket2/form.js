const fname = document.getElementById("fname");
const lname = document.getElementById("lname");
const email = document.getElementById("email");
const mobile = document.getElementById("mobile");
const password1 = document.getElementById("password1");
const password2 = document.getElementById("password2");

function checkfun() {
    // fetchAPI();
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
    const fname1 = fname.value.trim();
    const lname1 = lname.value.trim();
    const email1 = email.value.trim();
    const mobile1 = mobile.value.trim();
    const password11 = password1.value.trim();
    const password22 = password2.value.trim();

    let isValid = true;

    if (fname1 === "") {
        setError(document.getElementById("fname"), "First name is required");
        isValid = false;
    } else if (!isValidName(fname1)) {
        setError(document.getElementById("fname"), "First name must be alphabet");
        isValid = false;
    } else {
        setSuccess(document.getElementById("fname"));
    }

    if (lname1 === "") {
        setError(document.getElementById("lname"), "Last name is required");
        isValid = false;
    } else if (!isValidName(lname1)) {
        setError(document.getElementById("lname"), "Last name must be alphabet");
        isValid = false;
    } else {
        setSuccess(document.getElementById("lname"));
    }

    if (email1 === "") {
        setError(document.getElementById("email"), "Email is required");
        isValid = false;
    } else if (!isValidEmail(email1)) {
        setError(document.getElementById("email"), "Invalid email address");
        isValid = false;
    } else {
        setSuccess(document.getElementById("email"));
    }

    if (mobile1 === "") {
        setError(document.getElementById("mobile"), "Mobile number is required");
        isValid = false;
    } else if (mobile1.length !== 10 || isNaN(mobile1)) {
        setError(document.getElementById("mobile"), "Invalid mobile number");
        isValid = false;
    } else {
        setSuccess(document.getElementById("mobile"));
    }

    if (password11 === "" || password22 === "") {
        setError(document.getElementById("password1"), "Password is required");
        setError(document.getElementById("password2"), "Password is required");
        isValid = false;
    } else if (password11 !== password22) {
        setError(document.getElementById("password2"), "Passwords do not match");
        isValid = false;
    } else {
        setSuccess(document.getElementById("password1"));
        setSuccess(document.getElementById("password2"));
    }
    

    fetch('database.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            fname: fname,
            lname: lname,
            email: email,
            mobile: mobile,
            password: password1, // Use 'password' instead of 'password1' to match the backend
            gender: gender
        })
    })
    .then(response => response.json())
    .then(data => {
        alert(data.message); // Access the message property from the response
    })
    .catch(error => console.error(error));

    
    return isValid;
};

// function fetchAPI(){
//     fetch('database.php', {
//         method: 'POST',
//         headers: {
//             'Content-Type': 'application/json'
//         },
//         body: JSON.stringify({
//             fname: fname,
//             lname: lname,
//             email: email,
//             mobile: mobile,
//             password: password1, // Use 'password' instead of 'password1' to match the backend
//             gender: gender
//         })
//     })
//     .then(response => response.json())
//     .then(data => {
//         alert(data.message); // Access the message property from the response
//     })
//     .catch(error => console.error(error));
    
// }

// function fetchAPI(){
//     // REST API for sending data
//     fetch('database.php',{
//         method: 'POST',
//         headers:{
//             'Content-Type':'application/json'
//         },
//         body:JSON.stringify({
//             fname:fname,
//             lname:lname,
//             email:email,
//             mobile:mobile,
//             gender:gender,
//             password:password1
//         })
//     })
//     .then(response => response.json())
//     .then(data =>{
//         alert(data);
//     })
//     .catch(error =>{
//         console.error(error);
//     })
//     // REST APT sending data end 
// }