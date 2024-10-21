<?php
   $username = $
?>

session_start();
    if(!isset($_SESSION['uname'])){
        if(isset($_REQUEST['username']) || isset($_REQUEST['password'])){
            $uname =  $_REQUEST['username'];
            $pass = $_REQUEST['password'];
            // you c    an alse use different name
            $_SESSION['uname'] = $uname;
            $_SESSION['pass'] = $pass;
            echo "<script>location.href='welcome.php'</script>";
        }
    }else{
        echo "<script>location.href='welcome.php'</script>"; 
    }