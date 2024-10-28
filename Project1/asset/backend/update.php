<?php
   
   include("connection.php");
   

    session_start();
    $userid = $_SESSION['uremail'];


 

    if(isset($_POST['submit'])){
        echo "Clicked".$userid;
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $mobile = $_POST['mobile'];
        $state = $_POST['state'];
        $dist = $_POST['dist'];



$result = mysqli_query($conn, $select_query);       

        echo $fname,$lname,$mobile,$state,$state;

        // $update = "UPDATE signup SET fname='$fname',lname='$lname',mobile='$mobile',state='$state',dist='$dist' WHERE  email='$userid'";
        $update = "UPDATE signup SET fname='$fname', lname='$lname', mobile='$mobile', state='$state', dist='$dist' WHERE email='$userid'";

        $sql = mysqli_query($con,$update);
        if($sql){
            echo "<script>alert('Profile successfully updated...!')</script>";
            echo "<script>location.href='../home.php'</script>";
        }else{
            echo "<script>alert('Profile updation failed')</script>";
            echo "<script>location.href='../home.php'</script>";

        }
    }else{
        echo "Not cliecked";
    }
    

?>