<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
$conn= mysqli_connect("localhost",'root','','db2');
if (!$conn) {
    echo "connection failed";
}
else{
    echo "connection successfull";
}
 

// $qry = "INSERT INTO table1(email,mobile,age,username,address) VALUES ('test@gmail.com','12343211',14,'test','ujjain')";
$qry = "INSERT INTO table1 (email, mobile, age, username, address) VALUES ('test@gmail.com', '12343211', 14, 'test', 'ujjain')";
$result = mysqli_query($conn,$qry);
if($result){
    echo "inserted";
}else{
    echo "failed";
}

?>
</head>
<body>
    <h2>Hello</h2>
   
</body>
</html>