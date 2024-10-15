
// function validation(){
//     let firstname = document.getElementById("fname").value;
//     let lastname = document.getElementById("l;name").value;
//     let age = document.getElementById("age").value;
//     // for course
//     let dist = document.getElementById("schoolDist").value;
//     let tshirt = document.getElementById("shirtSize").value;
//     let email = document.getElementById("email").value;
//     let mobile = document.getElementById("mobile").value;
//     // gender
//     let photo = document.getElementById("image").value;
//     let password = document.getElementById("password").value;

//     if(firstname === "" || lastname === "" || age === "" || dist === "" ||  tshirt === "" || email === "" || mobile === "" || photo === "" || password === ""){
//         alert("Please fill all the fields");
//         // document.getElementById("alertmsg").innerHTML="Please fill all the fields";
//         return false;
//     }else{
//         return true;
//     }

// }




// ---------------------------


// function validation() {
//     // Get all input fields
//     var fname = document.getElementById("fname");
//     var lname = document.getElementById("lname");
//     var age = document.getElementById("age");
//     var schoolDist = document.getElementById("schoolDist");
//     var email = document.getElementById("email");
//     var mobile = document.getElementById("mobile");
//     var password = document.getElementById("password");
//     var shirtSize = document.getElementById("shirtSize");
//     var gender = document.getElementsByName("gender");
//     var image = document.getElementById("image");
  
//     // Check if participant name is empty
//     if (fname.value == "" || lname.value == "") {
//       document.querySelector("#fname + .alertmsg").innerHTML = "Please enter your first and last name";
//       return false;
//     }
  
//     // Check if age is a valid number
//     if (isNaN(age.value) || age.value < 0) {
//       document.querySelector("#age + .alertmsg").innerHTML = "Please enter a valid age";
//       return false;
//     }
  
//     // Check if school district is empty
//     if (schoolDist.value == "") {
//       document.querySelector("#schoolDist + .alertmsg").innerHTML = "Please enter your school district";
//       return false;
//     }
  
//     // Check if email is in a valid format
//     var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
//     if (!emailRegex.test(email.value)) {
//       document.querySelector("#email + .alertmsg").innerHTML = "Please enter a valid email address";
//       return false;
//     }
  
//     // Check if mobile number is empty
//     if (mobile.value == "") {
//       document.querySelector("#mobile + .alertmsg").innerHTML = "Please enter your mobile number";
//       return false;
//     }
  
//     // Check if password is empty
//     if (password.value == "") {
//       document.querySelector("#password + .alertmsg").innerHTML = "Please enter a password";
//       return false;
//     }
  
//     // Check if shirt size is selected
//     if (shirtSize.value == "select") {
//       document.querySelector("#shirtSize + .alertmsg").innerHTML = "Please select a shirt size";
//       return false;
//     }
  
//     // Check if gender is selected
//     var genderSelected = false;
//     for (var i = 0; i < gender.length; i++) {
//       if (gender[i].checked) {
//         genderSelected = true;
//         break;
//       }
//     }
//     if (!genderSelected) {
//       document.querySelector(".gender + .alertmsg").innerHTML = "Please select a gender";
//       return false;
//     }
  
//     // Check if image is uploaded
//     if (image.value == "") {
//       document.querySelector("#image + .alertmsg").innerHTML = "Please upload an image";
//       return false;
//     }
  
//     // If all fields are valid, submit the form
//     return true;
//   }