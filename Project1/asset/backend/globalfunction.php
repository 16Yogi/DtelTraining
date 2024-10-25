<script>
    // function loginfun_js(){
    //     const logout2 = document.createElement('a');
    //                     logout2.href = 'login2.php';
    //                     logout2.innerText = 'Login';
            
    //                     document.getElementById('log_in_out').appendChild(logout2);
    // }

    // function logoutfun_js(){
    //     const logout2 = document.createElement('a');
    //                     logout2.href = 'index.php';
    //                     logout2.innerText = 'Logout';
            
    //                     document.getElementById('log_in_out').appendChild(logout2);

    // }

    // function signinfun_js(){
    //     const logout2 = document.createElement('a');
    //                     logout2.href = 'html/registration2.php';
    //                     logout2.innerText = 'signin';
            
    //                     document.getElementById('signin').appendChild(logout2);

    // }
</script>
<?php
    // $login = "<script>
    // const logout2 = document.createElement('a');
    // logout2.href = 'logint.php';
    // logout2.innerText = 'Login';

    // document.getElementById('log_in_out').appendChild(logout2);
    // </script>";
    // $logout = "<script>
    //     const logout2 = document.createElement('a');
    //     logout2.href = 'index.php';
    //     logout2.innerText = 'Logout';
    
    //     document.getElementById('log_in_out').appendChild(logout2);
    // </script>";
    // $logout = "<script>
    //     const logout2 = document.createElement('a');
    //     logout2.href = 'index.php';
    //     logout2.innerText = 'Logout';
    
    //     document.getElementById('log_in_out').appendChild(logout2);
    // </script>";


    // ----------------------------------------------------------------------------------------
    
    // connection include
    include("connection.php");

    // login function start
    function loginfun($con) {
        $useremail = $_POST['email1'];
        $userpassword = $_POST['password1'];
        
        $sql = "SELECT * FROM signup WHERE email = '$useremail'";
        $result = mysqli_query($con, $sql);
    
        while ($row = mysqli_fetch_assoc($result)) {
            $emaildb = $row['email'];
            $pasdb = $row['password'];
            

            if($useremail ==  $emaildb && $userpassword == $pasdb){
               
                session_start();
                $_SESSION['uremail'] = $useremail;
                $_SESSION['upassword'] =  $userpassword;

                $sessionEmail = $_SESSION['uremail'];
                $sessionPass = $_SESSION['password'];

                echo "<script>alert('login successful')</script>";
                echo "<script>location.href='../home.php'</script>";
            }else{
                echo "<script>alert('login failed')</script>";
                echo "<script>location.href='../html/login2.php'</script>";
            }

        }
    }
    
    $lgoincheck = loginfun($con);
    // loginfunction end
    
    // ----------------------------------------------------------------------------------------
    


    // function logout(){
    //     echo "<script>alert('Hello')</script>";
    // }


    // nav function in option
    // function navfun($con) {
    //     session_start();  // Start the session
    
    //     // Retrieve the user email from the session
    //     $userid = $_SESSION['uremail'] ?? ''; // Use null coalescing operator to avoid undefined index notice
    
    //     if ($userid == '') {
    //         echo "not found";
    //     } else {
    //         // Prepare and execute the query using prepared statements
    //         $stmt = $con->prepare("SELECT fname, email FROM signup WHERE email = ?");
    //         $stmt->bind_param("s", $userid); // "s" denotes the type (string)
    //         $stmt->execute();
    //         $result = $stmt->get_result();
    
    //         if ($row = $result->fetch_assoc()) {
    //             $name = $row['fname'];
    //             $email = $row['email'];
    //             echo "Hello, $name"; // Greeting the user with their name
    //         } else {
    //             echo "User not found.";
    //         }
    
    //         // $stmt->close(); // Close the prepared statement
    //     }
    // }
    
    // Assuming $con is already defined and connected
    // navfun($con);
    

    
    
    // Close the connection
    mysqli_close($con);




?>