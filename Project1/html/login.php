<?php
// session_start();

// Check if user is already logged in
// if (isset($_SESSION['login'])) {
//     header('Location:index.php');
//     echo "<script>document.getElementById('login').innerHTML='logout'</script>";
//     exit();
// }

// // Check if the form is submitted
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Sanitize and validate inputs
//     $uname = trim($_POST['email']);
//     $pass = trim($_POST['password']);
    
//     $qry = "SELECT * FROM signup";
//     $result = mysqli_query($conn, $qry);
//     while($row=mysqli_fetch_assoc($result)){
//       $useremail = $row['email'];
//       $userpass = $row['password'];
//       if($uname == $useremail && $pass == $userpass){
//         $_SESSION['login'] = true;
//         header('Location:index.php');  
//         echo "<script>document.getElementById('login').innerHTML='logout'</script>";
//         echo "login successfull";

//       }else{ 
//         echo "Invalid username or password";
//         header('Location:login.php');
//       }
//     }
// ----------------------------------------------------------

    // Example validation (add real authentication logic here)
    // if (!empty($uname) && !empty($pass)) {
    //     // Here, you'd typically check the credentials against a database
    //     // For demonstration, we're just storing the values in session
    //     $_SESSION['uemail'] = $uname;
    //     $_SESSION['pass'] = $pass; // Store hashed password in a real application

    //     // Set login flag
    //     $_SESSION['login'] = true;

    //     // Redirect to dashboard
    //     if($uname =="" || $pass==""){
    //       echo "invalid inputs";
    //     }else{
    //       header('Location: ../index.php');  
    //     }
    // } else {
    //     echo "<script>alert('Please enter both email and password.');</>";
    // }
// }

// ---------------------------------------------------------end


// chat gpt

// session_start();
// include 'db_connection.php'; // Ensure this file contains your database connection

// // Check if user is already logged in
// if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
//     header('Location: ../index.php');
//     exit();
// }

// // Check if the form is submitted
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Sanitize and validate inputs
//     $uname = trim($_POST['email']);
//     $pass = trim($_POST['password']);

//     // Prepare statement to prevent SQL injection
//     $stmt = $conn->prepare("SELECT password FROM signup WHERE email = ?");
//     $stmt->bind_param("s", $uname);
//     $stmt->execute();
//     $stmt->store_result();

//     // Check if the user exists
//     if ($stmt->num_rows > 0) {
//         $stmt->bind_result($hashedPassword);
//         $stmt->fetch();

//         // Verify the password
//         if (password_verify($pass, $hashedPassword)) {
//             $_SESSION['login'] = true;
//             $_SESSION['uemail'] = $uname; // Store the user's email in session
//             header('Location: ../index.php');
//             exit();
//         } else {
//             $error_message = "Invalid username or password.";
//         }
//     } else {
//         $error_message = "Invalid username or password.";
//     }

//     $stmt->close();
// }

// // Display error message if exists
// if (isset($error_message)) {
//     echo "<script>alert('$error_message');</script>";
// }


// start codition
// conntion
session_start();

include("../asset/backend/connection.php");

if(isset($_POST['login'])){
  // check username and password 
  if(isset($_REQUEST['email']) && isset($_REQUEST['password'])){
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
     
    // echo  "session: $email,$password";

    $_SESSION['email'] =  $email;
    $_SESSION['password'] = $password;
    
    // echo $_SESSION['email'] =  $email;
    // echo  $_SESSION['password'] = $password;
    
    $sql = "SELECT * FROM signup";
    $result = mysqli_query($con,$sql);
    // $row = mysqli_fetch_assoc($result);
    // if($row['email'] == $email && $row['password'] == $password){
    // echo "$username,<br> $password";
  
    while($row=mysqli_fetch_assoc($result)){
      $usernamedb = $row['email'];
      $passworddb = $row['password'];
      // echo  "$usernamedb,<br> $passworddb";
      // echo "$email,$password";
  
      if($email==  $usernamedb && $password == $passworddb){
        header("../index.php");
        // echo "<script>location.href='../index.php'</script>";
      }else{
        header("login.php");
        echo "<script>document.getElementById('logfailed').innerHTML='username and password are invalid'</script>";
        
        // echo "<script>local</script>";
      }
    }

  }

  
  // $email  = $_REQUEST['email'];
  // $password = $_REQUEST['password'];


  
  // $sql = "SELECT * FROM signup";
  // $result = mysqli_query($con,$sql);
  // // $row = mysqli_fetch_assoc($result);
  // // if($row['email'] == $email && $row['password'] == $password){
  // // echo "$username,<br> $password";

  // while($row=mysqli_fetch_assoc($result)){
  //   $usernamedb = $row['email'];
  //   $passworddb = $row['password'];
  //   // echo  "$usernamedb,<br> $passworddb";
  //   // echo "$email,$password";

  //   if($email==  $usernamedb && $password == $passworddb){
  //     echo "<script>alert('login success!')</script>";
  //   }else{
  //     echo "<script>alert('login failed!')</script>";
  //   }
  // }
    // echo  "$usernamedb,<br> $passworddb";
}
// end condition
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
                        <input type="email" name="email" class="form-control" placeholder="Email..." id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" placeholder="Password..." class="form-control" id="exampleInputPassword1">
                    </div>
                    <p id="logfailed" class="text-danger"></p>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
