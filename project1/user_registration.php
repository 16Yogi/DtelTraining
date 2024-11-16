<?php
// Database connection
$host = 'localhost';  // Your database host
$user = 'root';       // Your database username
$pass = '';           // Your database password
$dbname = 'project1';  // Your database name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $json = file_get_contents('php://input');
    $data = json_decode($json, true); // Decode JSON into an associative array

    // Access the data
    $fname = $data['fname'] ?? '';
    $dob = $data['dob'] ?? '';
    $email = $data['gmail'] ?? '';
    $password = $data['register_password'] ?? '';

    // server side validation
    $passwordPattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';

    if (empty($password)) {
        echo "Enter Password First";
    } elseif (!preg_match($passwordPattern, $password)) {
        echo "Invalid Password";
        return; // Redirect to login page after successful registration
    }

    // Check if email already exists
    $check_email_query = "SELECT * FROM user_info WHERE email = '$email';";
    $result = $conn->query($check_email_query);

    if ($result->num_rows > 0) {
        // Email exists, show an error message
        $responseArray = ['message'=> "Email Already Exists"];
        echo json_encode($responseArray);
        
    } else {
        // Email doesn't exist, insert the new user
        //$hashed_password = password_hash($password, PASSWORD_BCRYPT);  // Securely hash the password
        $insert_query = "INSERT INTO user_info (name, dob, email, password) VALUES ('$fname', '$dob', '$email', '$password')";

        if ($conn->query($insert_query) === TRUE) {
            $responseArray = ['message'=> "Register sucessfull"];
            echo json_encode($responseArray);
        } else {
            $responseArray = ['message'=> "user can not register"];
            echo json_encode($responseArray);
           // echo "Error: " . $insert_query . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
