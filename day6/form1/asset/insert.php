<?php
    include("connection.php");

    if(isset($_POST['submit'])){
        $name = $_POST['fname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        $insert = "INSERT INTO `registraction`(`name`, `email`, `mobile`, `password`) VALUES ('$name','$email','$mobile','$password')";
        $qry = mysqli_query($con,$insert);

        if($qry){
            // echo "data inserted";
            echo "<script>alert('data inserted')</script>";
        }else{
            // echo "data failed".mysqli_error($con);
            echo "<script>alert('data failed ".mysqli_error($con)."')</script>";
        }
    }
?>