function validation(){
    let fullname = document.getElementById("fname").value;
    let email = document.getElementById("email").value;
    let mobile = document.getElementById("mobile").value;
    let password = document.getElementById("pwd").value;
    let cpassword = document.getElementById("cpwd").value;

    if(fullname === "" || email === "" ||  mobile === "" || password === "" || cpassword === ""){
        alert("Please fill all the fields");
        document.getElementById("all").innerHTML="All fields are required";
        return false;
    }else if(password !== cpassword){
        alert("Password and Confirm Password should be same");
        document.getElementById("ptext").innerHTML="Password and Confirm Password should be same";
        return false;
    }else if(!nameVsl(fullname)){
        alert("Please enter valid name");
        document.getElementById("ftext").innerHTML="Please enter valid name";

        return false;
    }else if(!emailVal(email)){
        alert("Please enter valid email");
        document.getElementById("ftext").innerHTML="Please enter valid name";

        return false;
    }else if(mobile.length !==10 || isNaN(mobile)){
        alert("Invalid  mobile number");
        return false;
    }
    else{
        return true;
    }
}

function emailVal(email){
    return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email);
}

function nameVsl(fullname){
    return  /^[a-zA-Z\s]+$/.test(fullname);
}