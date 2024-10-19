function validation(){
    let fname = document.getElementById("fname").value;
    let lname = document.getElementById("lname").value;
    let email = document.getElementById("email").value;
    let mobile = document.getElementById("mobile").value;
    let state = document.getElementById("state").value;
    let dist = document.getElementById("dist").value;
    let password = document.getElementById('password').value;
    
    if(fname === "" || lname === "" || email === "" || mobile === "" ||  state === "" || dist === "" || password === ""){
        document.getElementById("all").innerHTML="All fields are required";
        return false;
    }else if(!isValidEmail(email)){
        document.getElementById("val_email").innerHTML="Invalid Email";
        return false;
    }else if(!(isValidfname(fname))){
        document.getElementById("first_name").innerHTML="Invalid First Name";
        return false;
    }else if(!(isValidlname(lname))){
        document.getElementById("last_name").innerHTML="Invalid Last Name";
        return false;
    }else if(mobile.length !==10 || isNaN(mobile)){
        document.getElementById("val_mobile").innerHTML="Invalid Number";
        return false;
    }else{
        return true;
    }
}


function isValidfname(fname){
    return /^[a-zA-Z]+$/.test(fname);
}
function isValidlname(lname){
    return /^[a-zA-Z]+$/.test(lname);
}
function isValidEmail(email){
    return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email);
}