<?php 
$conn = new mysqli("localhost",'root','','db1');
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