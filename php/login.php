<?php
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
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="username" id="uname" placeholder="username">
        <br><br>
        <input type="password" name="password" id="password" placeholder="password">
        <br><br>
        <input type="submit" value="login" id="submit" name="login">
    </form>
</body>
</html>