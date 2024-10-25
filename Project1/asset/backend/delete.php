<?php
    include("connection.php");
    
    session_start();
    $userid = $_SESSION['uremail'];
    // echo $userid;

    if (isset($_POST['delete'])) {
        $delete = "DELETE FROM signup WHERE email = '$userid'";
        $sql = mysqli_query($con,$delete);
        if($sql){
            $_SESSION = [];
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"], $params["secure"], $params["httponly"]
                );
            }
            session_destroy();
            echo "<script>alert('Account Deleted Successfully...!')</script>";
            header("Location:../home.php");
        }else{
            echo "<script>alert('Account Deletation Failed...!')</script>";
            header("Location: ../../home.php");
        }
        
        

    }
    
?>