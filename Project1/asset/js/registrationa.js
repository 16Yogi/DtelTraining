// function validation(){
//     let fname = document.getElementById("fname").value;
//     let lname = document.getElementById("lname").value;
//     let email = document.getElementById("email").value;
//     let mobile = document.getElementById("mobile").value;
//     let state = document.getElementById("state").value;
//     let dist = document.getElementById("dist").value;
//     let password = document.getElementById('password').value;
    
//     if(fname === "" || lname === "" || email === "" || mobile === "" ||  state === "" || dist === "" || password === ""){
//         document.getElementById("all").innerHTML="All fields are required";
//         return false;
//     }else if(!isValidEmail(email)){
//         document.getElementById("val_email").innerHTML="Invalid Email";
//         return false;
//     }else if(!(isValidfname(fname))){
//         document.getElementById("first_name").innerHTML="Invalid First Name";
//         return false;
//     }else if(!(isValidlname(lname))){
//         document.getElementById("last_name").innerHTML="Invalid Last Name";
//         return false;
//     }else if(mobile.length !==10 || isNaN(mobile)){
//         document.getElementById("val_mobile").innerHTML="Invalid Number";
//         return false;
//     }else{
//         return true;
//     }
// }


// function isValidfname(fname){
//     return /^[a-zA-Z]+$/.test(fname);
// }
// function isValidlname(lname){
//     return /^[a-zA-Z]+$/.test(lname);
// }
// function isValidEmail(email){
//     return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email);
// }

let form = document.getElementById("form");
let fname = document.getElementById("fname");
let lname = document.getElementById("lname");
let email = document.getElementById("email");
let mobile = document.getElementById("mobile");
let password = document.getElementById("password");

function clickfun(){
    // alert("clicked");
    if(validation()){
        return true;
    }else{
        return false;
    }
}

// change class name in error situtation
const setError = (element,message) =>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
    
}
// change class name in success situtation
const setSuccess = element =>{
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText= '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
}

const isValidEmail = email =>{
    const re = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return re.test(String(email).toLowerCase());
}

const isValidName = (fname,lname) =>{
    const re = /^[a-zA-Z]+$/;
    return re.test(String(fname,lname).toLowerCase());
}

const validation = () =>{
    alert("clicked");

    const fnameValue = fname.value.trim();
    const lnameValue = lname.value.trim();
    const emailValue = email.value.trim();
    const mobileValue = mobile.Value.trim();
    const passwordValue = password.value.trim();

    let isValid = true;
    // check first name
    if(fnameValue === ''){
        setError(fname,'First name is empty');
        isValid = false;
    }else if(!isValidName(fname)){
        setError(fname,'Invalid first name');
        isValid = false;
    }
    else{
        setSuccess(fname);
    }

    // check last name
    if(lnameValue === ''){
        setError(lname,'Last name is empty');
        isValid = false;
    }else if(!isValidName(lname)){
        setError(lname,'invalid last name');
        isValid = false
    }else{
        setSuccess(lname);
    }

    // email
    if(emailValue === ''){
        setError(email,'email is empty');
        isValid = false;
    }else if(!isValidEmail(emailValue)){
        setError(email,'invalid email');
        isValid = false;
    }else{
        setSuccess(email);
    }
   
    // check mobile
    if(mobileValue === ''){
        setError(mobile,'mobile number is empty');
        isValid = false;
    }else if(mobileValue.length!==10 || isNaN(mobileValue)){
        setError(mobile,'invalid mobile, lenght must be 10 digit');
        isValid = false;
    }else{
        setSuccess(mobile)
    }
    
    //check password
    if(passwordValue === ''){
        setError(password,'password is empty');
        isValid = false;
    }else if(passwordValue.length < 8){
        setError(password,'password must be 8 character long');
        isValid = false;
    }else{
        setSuccess(password);
    }
    return isValid;
}
// mobile.length !==10 || isNaN(mobile