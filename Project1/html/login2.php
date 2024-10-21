<?php
    include("../asset/backend/connection.php");
    
    if(isset($_POST['login'])){
        $useremail = $_POST['email1'];
        $userpassword = $_POST['password1'];
        
        // echo $useremail;
        // echo $userpassword;

        $sql = "SELECT * FROM signup";
        $result = mysqli_query($con,$sql);
    
        while($row=mysqli_fetch_assoc($result)){
            $usernamedb = $row['email'];
            $passworddb = $row['password'];
            // echo  $usernamedb;
            // echo   $passworddb;
        
            if($usermail==$usernamedb &&  $userpassword==$passworddb){
                echo "login successfull";
            }else{
                echo "login falied";
            }
        }
        
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../asset/css/login.css">
</head>
<body>
    <div class="container-fluid py-5" id="login-cf">
        <div class="container py-5">
            <div class="col-5 mx-auto py-3" id="form">
                <h3>Login</h3>
                <hr>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email1" class="form-control" placeholder="Email..." id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password1" placeholder="Password..." class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <p id="logfailed" class="text-danger"></p>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
