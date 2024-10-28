<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php 
$conn= mysqli_connect("localhost",'root','','db1');
if (!$conn) {
    echo "connection failed";
}
else{
    echo "connection successfull";
}
$create_db = "CREATE DATABASE db3";
if(mysqli_query($create_db)){
    echo "Created";
}else{
    echo "Failed";
}

?>
</head>
<body>
    <h2>Hello</h2>
   
</body>
</html>