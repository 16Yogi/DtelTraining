<?php
include("connection.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $state = $_POST['state'];
    $dist = $_POST['dist'];
    $password = $_POST['password'];

    // $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    if ($fname == "" || $lname == "" || $email == "" || $mobile == "" || $password == "") {
        echo "Please fill all the fields";
    } else if (!fnameValidate($fname)) {
        echo "Enter a valid first name";
    } else if (!fnameValidate($lname)) {
        echo "Enter a valid last name";
    } else if (!validateEmail($email)) {
        echo "Invalid email";
    } else if (strlen($password) < 8) { 
        echo "Password must be at least 8 characters long";
    } else {
        $query = "INSERT INTO signup (fname, lname, email, mobile,state,dist, password) VALUES ('$fname', '$lname', '$email', '$mobile',$state,$dist, '$password')";
    
        echo $query; 
    
        $result = mysqli_query($con, $query);
        
        if ($result) {
            echo "<script>alert('Data inserted successfully');</script>";
        } else {
            echo "<script>alert('Data not inserted: " . mysqli_error($con) . "');</script>";
        }
    }
}else{
    echo "Something went to wrong";
}

function validateEmail($email) {
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    return preg_match($pattern, $email);
}

function fnameValidate($name) {
    $pattern = "/^[a-zA-Z]+$/"; 
    return preg_match($pattern, $name);
}

?>

































