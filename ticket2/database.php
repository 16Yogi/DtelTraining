<?php

    // database connection 
    // $con = mysqli_connect("localhost","root","","db1");
    // if($con){
    //     // echo "Connetion Successful";
    // }else{
    //     // echo "Connection failed";
    // }  


    // if(isset($_POST['submit'])){
    //     $fname = $_POST['fname'];
    //     $lname = $_POST['lname'];
    //     $email = $_POST['email'];
    //     $mobile = $_POST['mobile'];
    //     $password1 = $_POST['password1'];
    //     $password2 = $_POST['password2'];
    //     $gender =  $_POST['gender'];
        
    //     if ($password1 !== $password2) {
    //         echo "<script>alert('Passwords do not match.')</script>";
    //         exit;
    //     }
    //     // Hash the password
    //     // $hashedPassword = password_hash($password1, PASSWORD_DEFAULT);

    //     $select  = "SELECT * FROM registration WHERE email = '$email'";
    //     $sqlSelect = mysqli_query($con,$select);
    //     $email1 = mysqli_fetch_assoc($sqlSelect);
    //     $dbemail = $email1['email'];
    //     if($dbemail == $email){
    //         echo "<script>alert('Email already exists')</script>";
    //     }else{
    //         $insert = "INSERT INTO registration (fname, lname, email, mobile, password, geneder)
    //         VALUES ('$fname', '$lname', '$email', '$mobile', '$password1', '$gender')";
    //         $sql = mysqli_query($con,$insert);
    
    //         if($sql){
    //             echo "<script>alert('Registration Successful')</script>";
    //         }else{
    //             echo "<script>alert('Registration Failed')</script>";
    
    //         }
    //     }
        // $insert = "INSERT INTO registration (fname, lname, email, mobile, password, geneder)
        // VALUES ('$fname', '$lname', '$email', '$mobile', '$password1', '$gender')";
        // $sql = mysqli_query($con,$insert);

        // if($sql){
        //     echo "<script>alert('Registration Successful')</script>";
        // }else{
        //     echo "<script>alert('Registration Failed')</script>";

        // }
    // }

    
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $json = file_get_contents("php://input");
        $data = json_decode($json,true);

        $fname = $data['fname'];
        $lname = $data['lname'];
        $email = $data['email'];
        $mobile = $data['mobile'];
        $gender = $data['gender'];
        $password1 = $data['password1'];

        $insert = "INSERT INTO registration (fname, lname, email, mobile, password, geneder)";

        $sql = mysqli_query($con,$insert);

        if($sql){
            // $resultMess = ["message"=>"Data inserted"];
            echo  json_encode(["message"=>"Data inserted"]);
        }else{
            echo json_decode(["message"=>"Registration failed"]);
        }
    }



    
?>

