<?php 
$email = $_POST['email'];
$password = $_POST['password'];

// Database connection parameters
$host = 'localhost';
$user = 'root';
$db_password = ''; 
$db_name = 'project1';

// Create a connection
$conn = new mysqli($host, $user, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Query to check if the email exists
$check_email = "SELECT * FROM user_info WHERE email='$email';"; 

$result = mysqli_query($conn, $check_email);

// Check if any row was returned
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result); // Fetch the data as an associative array
    if($password === $row['password']){ // Check if the password is correct

        //start and set session
        session_start();
      $_SESSION['email']=$email;

        // Redirect to Home page on successful login
        header("Location: index.php");
        exit(); // Important to exit after header redirection

    } else {
        // Password is incorrect, show an alert message and redirect back
        echo "<script>
            alert('Password is invalid. Please enter a valid password.');
            window.location.href = 'auth.php'; // Redirect back to login page
        </script>";
    }
} else {
    // Email doesn't exist, show an alert message and redirect back
    echo "<script>
        alert('Email does not exist. Please try again.');
        window.location.href = 'auth.php'; // Redirect back to login page
    </script>";
}

$conn->close(); // Close the connection
?>
