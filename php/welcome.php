<?php
    session_start();

    if(isset($_SESSION['uname'])){
        echo "Username:". $_SESSION['uname'];
        echo "<br>";
        echo "Password:" . $_SESSION['pass'];
    }else{
        echo "<script>location.href='login.php';</script>";
    }
    
    
    if(isset($_REQUEST['logout'])){
        session_unset();
        session_destroy();
        echo "<script>location.href='login.php';</script>";
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
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>