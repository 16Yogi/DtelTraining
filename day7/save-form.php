<?php
$con = mysqli_connect("localhost", "root", "", "form1");
if($con){
    echo "Connection successful";
} else {
    echo "Connection failed: " . mysqli_connect_error();
}

    $name = $_POST['fullname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $country = $_POST['contary'];

    $sql = "INSERT INTO `student`(`name`, `age`, `gender`, `country`) VALUES ('$name','$age','$gender','$country')";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "inserted {$name}";
    }else{
        echo "failed";
    }


?>
