<?php
// Database connection
$con = mysqli_connect("localhost", "root", "", "db1"); // Fixed spelling from 'singup' to 'signup'
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if (isset($_POST['submit'])) {
    // Sanitize input
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement
    $query = "INSERT INTO singup (fname, lname, email, mobile, password) VALUES ('$fname', '$lname', '$email', '$mobile', '$hashed_password')";

    // Execute the query
    $result = mysqli_query($con, $query);
    
    if ($result) {
        echo "<script>alert('Data inserted successfully');</script>";
    } else {
        // Debugging: Show error message
        echo "<script>alert('Data not inserted: " . mysqli_error($con) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="fname" placeholder="First Name" required>
        <input type="text" name="lname" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="mobile" placeholder="Mobile" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
