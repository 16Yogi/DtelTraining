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
    
    // echo "<pre>".print_r($_POST,1)."</pre>";
    
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
        $select = "SELECT * FROM signup WHERE email='$email'";
        $result = mysqli_query($con, $select);
        $row=mysqli_fetch_assoc($result);
        $emaildb = $row['email'];
        echo $emaildb,$email;
        if($emaildb === $email){
                echo "<script>alert('account already created...')</script>";
                echo "<script>location.href='registration2.php'</script>";
            }else{
                $query = "INSERT INTO signup (fname, lname, email, mobile,state,dist, password) VALUES ('$fname', '$lname', '$email', '$mobile','$state','$dist', '$password')";
        
                $result_insert = mysqli_query($con, $query);
                
                if ($result_insert) {
                    echo "<script>alert('Account Created Successfully');</script>";
                    echo "<script>location.href='../home.php'</script>";
                }
            }
        // $query = "INSERT INTO signup (fname, lname, email, mobile,state,dist, password) VALUES ('$fname', '$lname', '$email', '$mobile','$state','$dist', '$password')";
        
        // $result = mysqli_query($con, $query);
        
        // if ($result) {
        //     echo "<script>alert('Account Created Successfully');</script>";
        //     echo "<script>location.href='../home.php'</script>";
        // } else {
        //     echo "<script>alert('Failed, please try again: " . $stmt->error . "');</script>";
        //     // echo "<script>alert('failed please try again')</script>";
        //     echo "<script>location.href='../../html/registration.php'</script>";
        //     // echo "<script>alert('Account not created: " . mysqli_error($con) . "');</script>";
        // }
    }
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

































