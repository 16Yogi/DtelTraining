<?php
include("asset/backend/connection.php");
session_start();

$userid = $_SESSION['uremail'];
// echo $userid;

// $login = "<script>
//                 const loginLink = document.createElement('a');
//                 loginLink.href = 'login2.php';
//                 loginLink.innerText = 'Login';
//                 document.getElementById('log_in_out').appendChild(loginLink);
//           </script>";

// $logout = "<script>
//                 const logoutLink = document.createElement('a');
//                 logoutLink.href = 'index.php';
//                 logoutLink.innerText = 'Logout';
//                 document.getElementById('log_in_out').appendChild(logoutLink);
//             </script>";

// $signin = "<script>
//                 const signinLink = document.createElement('a');
//                 signinLink.href = 'html/registration2.php';
//                 signinLink.innerText = 'Sign In';
//                 document.getElementById('signin').appendChild(signinLink);
//            </script>";

// if ($userid == false) {

    // echo ""
    // echo "<script>alert('User not logged in');</script>";
    // $login_con = $login;  
    // $sign_con = $signin; 
// } else {
//     // echo "<script>alert('User logged in');</script>";
//     $logout_con = $logout; 

//     $select = "SELECT * FROM signup WHERE email = '$userid'";
//     $result = mysqli_query($con, $select);
//     $row = mysqli_fetch_assoc($result);
    
//     if ($row) {
//         $name = $row['fname'];
//         $email = $row['email'];
//     } else {
//         echo "<script>alert('User not found');</script>";
//         exit; 
//     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="home.php"><b>TestLogo</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <?php
                       if($userid == false){
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="html/registration2.php">Singin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="html/login2.php">Login</a>
                        </li>
                    <?php
                        }else{
                    ?>
                    <?php
                            $select = "SELECT * FROM signup WHERE email = '$userid'";
                            $result = mysqli_query($con, $select);
                            $row = mysqli_fetch_assoc($result);

                    ?>  
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">
                                Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="asset/backend/logout.php" class="nav-link">Logout</a>
                        </li>
                    <?php
                    }
                    ?>
                    <!-- <li class="nav-item" id="log_in_out"> -->
                        <?php
                        //  echo $login_con; 
                         ?>
                        <?php 
                        // echo $sign_con; 
                        ?>
                    <!-- </li> -->
                    <!-- <li class="nav-item" id="signin"> -->
                        <?php 
                        // echo $logout_con; 
                        ?>
                    <!-- </li> -->
                </ul>
            </div>
        </nav>
    </div>
</body>
</html>
<?php
// }
?>
