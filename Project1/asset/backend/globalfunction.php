<?php
    $login = "login";
    $logout = "logout";
    
    function login(){
        $useremail = $_POST['email1'];
        $userpassword = $_POST['password1'];

        $sql = "SELECT * FROM signup";
        $result = mysqli_query($con,$sql);
    
        while($row=mysqli_fetch_assoc($result)){
            if($row['email']==$useremail && $row['password']==$userpassword){

                // session_start();
                session_start();
                $_SESSION['uremail'] = $useremail;
                $_SESSION['urpass'] = $userpassword;
    
                $sessionEmail = $_SESSION['uremail'];
                $sessionPassword = $_SESSION['urpass'];
                
                echo "<script>alert('login successful')</script>";
                // echo "<script>location.href='../index.php'</script>";
            }else{
                echo "loginfailed";
            }
        }
        // echo "Hello";
        // echo "<script>alert('hello')</script>";
    }

    function logout(){
        echo "<script>alert('Hello')</script>";
    }

    // $con = mysqli_connect("localhost","root","","db1");
    // if (!$con) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    // function test(){
    //     $useremail = $_POST['email1'];
    //     $userpassword = $_POST['password1'];

    //     $sql = "SELECT * FROM signup";
    //     $result = mysqli_query($con,$sql);

    //     while($row = mysqli_fetch_assoc($result)){
    //         echo $row['email'];
    //         echo $row['password'];

    //         echo "<script>alert('" . $row['email'] . "')</script>";

    //     }
        

    // }
    include("connection.php");
    function test($con) {
        $useremail = $_POST['email1'];
        $userpassword = $_POST['password1'];

        $sql = "SELECT * FROM signup WHERE email = '$useremail'";
        $result = mysqli_query($con, $sql);
        // if (!$result) {
        //     echo "Query failed: " . mysqli_error($con);
        //     return;
        // }
    
        while ($row = mysqli_fetch_assoc($result)) {
            $emaildb = $row['email'];
            $pasdb = $row['password'];

            if($useremail ==  $emaildb && $userpassword == $pasdb){
                // echo $row['email'];
                // echo $row['password'];
                // echo $row['mobile'];
                session_start();
                $_SESSION['uremail'] = $pasdb;
                $sessionEmail = $_SESSION['uremail'];

                echo "<script>alert('login successful')</script>";
                echo "<script>location.href='../home.php'</script>";
            }else{
                echo "<script>location.href='../html/login.php'</script>";
                echo "<script>alert('login failed')</script>";
            }

        }
    }
    
    // Call the function
    test($con);
    
    // Close the connection
    mysqli_close($con);
?>