<?php
    // include connection
    include("connection.php");

    // echo "<pre>".print_r($_POST,1)."</pre>";
    // exit;



// Insert admin data
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    
    // Handle profile picture upload
    $profilepic = $_FILES['pic']['name'];
    $profilepicTMP = $_FILES['pic']['tmp_name'];
    $folder = "../img/";
    move_uploaded_file($profilepicTMP, $folder . $profilepic);

    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $department = $_POST['department'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    // Hash the password (recommended)
    // $hashedPassword = password_hash($password1, PASSWORD_DEFAULT);

    // Prepare SQL statement
    $admin_insert = "INSERT INTO admin_user (fullname, profilepic, email, mobile, department, gender, password) VALUES ('$name', '$profilepic', '$email', '$mobile', '$department', '$gender', '$password1')";
    // Execute query
    $result_admin = mysqli_query($con, $admin_insert);
    if ($result_admin) {
        echo "<script>alert('Admin account created successfully')</script>";
    } else {
        echo "<script>alert('Admin account creation failed: " . mysqli_error($con) . "')</script>";
    }
}


// add student

if(isset($_POST[''])){
    $stuname = $_POST[''];

    $profilepic = $_FILES['pic']['name'];
    $profilepicTMP = $_FILES['pic']['tmp_name'];
    $folder = "../img/";
    move_uploaded_file($profilepicTMP, $folder . $profilepic);

    $fathername = $_POST['fullname'];
    $mothername = $_POST[''];
    $department = $_POST[''];
    $semester = $_POST[''];
    $enroll = $_POST[''];
    $gender = $_POST[''];
    $email = $_POST[''];
    $mobile = $_POST[''];
    $address = $_POST[''];
    $password = $_POST[''];
}


// if (isset($_POST['submitstu'])) {
//     // Database connection parameters
//     $host = "localhost"; // Your database host
//     $username = "root"; // Your database username
//     $password = ""; // Your database password
//     $database = "studentmanagement"; // Your database name

//     // Create a connection
//     $con = mysqli_connect($host, $username, $password, $database);
    
//     // Check connection
//     if (!$con) {
//         die("Connection failed: " . mysqli_connect_error());
//     }

//     // Gather form data
//     $name = $_POST['fullname'];
//     $father = $_POST['father'];
//     $mother = $_POST['mother'];
//     $department = $_POST['department'];
//     $semester = $_POST['semester'];
//     $enrollment = $_POST['enrollment'];
//     $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
//     $email = $_POST['email'];
//     $mobile = $_POST['mobile'];
//     $address = $_POST['address'];
//     $password1 = $_POST['password1'];

//     // Handle file upload
//     $stupic = $_FILES['pic']['name'];
//     $stupicTMP = $_FILES['pic']['tmp_name'];
//     $folder = "../img/";

//     // Upload the file
//     if (move_uploaded_file($stupicTMP, $folder . $stupic)) {
//         // File upload successful
//     } else {
//         echo "<script>alert('File upload failed');</script>";
//         exit;
//     }

//     // Prepare the insert query
//     $insert = "INSERT INTO student_add (fullname, profile_pic, fathername, mothername, department, semester, enrollment, gender, email, mobile, address, password) 
//                VALUES ('$name', '$stupic', '$father', '$mother', '$department', '$semester', '$enrollment', '$gender', '$email', '$mobile', '$address', '$password1')";

//     // Execute the insert query
//     if (mysqli_query($con, $insert)) {
//         echo "<script>alert('Student Added');</script>";
//     } else {
//         echo "<script>alert('Student add failed: " . mysqli_error($con) . "');</script>";
//     }

//     // Close the connection
//     mysqli_close($con);
// }

?>

