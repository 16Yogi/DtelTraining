<?php
include("connection.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    if($fname == "" || $lname == "" || $email == "" || $mobile == "" || $password == ""){
        echo "Please fill all the fields";
    }else if(){

    }



    $query = "INSERT INTO signup (fname, lname, email, mobile, password) VALUES ('$fname', '$lname', '$email', '$mobile', '$hashed_password')";
    
    echo $query; 

    $result = mysqli_query($con, $query);
    
    if ($result) {
        echo "<script>alert('Data inserted successfully');</script>";
    } else {
        echo "<script>alert('Data not inserted: " . mysqli_error($con) . "');</script>";
    }
}

function validateEmail($email){
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
}
?>

































