<?php
    
    // include connection
    include("connection.php");



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
if(isset($_POST['submitstu'])){
    echo "click";
    // $name = $_POST['fullname'];

    // $stupic = $_FILES['pic']['name'];
    // $stupicTMP = $_FILES['pic']['tmp_name'];
    // $folder = "../img/";
    // move_uploaded_file($stupicTMP, $folder.$stupic);

    // $father = $_POST['father'];
    // $mother = $_POST['mother'];
    // $department = $_POST['department'];
    // $semester = $_POST['semester'];
    // $enrollment = $_POST['enrollment'];
    // $gender = $_POST['gender'];
    // $email = $_POST['email'];
    // $mobile = $_POST['mobile'];
    // $address = $_POST['address'];
    // $password1 = $_POST['password1'];
    // $password2 = $_POST['password2'];

    // echo $name;

    // $insert = "INSERT INTO student_add(fullname,fathername,mothername,department,semester,enrollment,gender,email,mobile,address,password) VALUES('$name','$stupic','$father','$mother','$department','$semester','$enrollment','$gender','$email','$mobile','$address','$password1')";
    // $sturesult = mysqli_connect($con,$insert);
    // if ($sturesult) {
    //     echo "<script>alert('Student Added')</script>";
    // }else{
    //     echo "<script>alert('student add failed')</script>";
    // }
}else{
    echo "failed";
}
    
?>

