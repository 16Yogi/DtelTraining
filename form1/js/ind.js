function validation() {
    var fname = document.getElementById("fname").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
    var password = document.getElementById("password").value;
    var password2 = document.getElementById("password2").value;

    if (fname == "" || email == "" || mobile == "" || password == "" || password2 == "") {
        // alert("Please fill out all fields.");
        document.getElementById("err7").innerHTML="All fields are  required";
        return false;
    }else if(!mailValidation(email)){
        document.getElementById("err2").innerHTML="invalid email";
        // alert("invalid Email");
        return false;
    }else if(mobile.length !==10 || isNaN(mobile)){
        // alert("Invalid Mobile Number");
        document.getElementById("err3").innerHTML="invalid mobile";

        return false;
    }
    else if(password != password2){
        // alert("Passwords do not match.");
        document.getElementById("err4").innerHTML="invalid password";

        return false;
    }else{
        return true;
    }
}

function textValidation(fname){
    return /^[a-zA-Z]+$/.test(fname);

}

// function textValidation(fname){
//     return /^[a-zA-Z{}]+$/.test(fname);
// }
function mailValidation(userEmail){
    return /^[a-zA-z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(userEmail);
}