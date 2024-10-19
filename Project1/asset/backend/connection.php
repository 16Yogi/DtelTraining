<?php
    $con = mysqli_connect("localhost","root","","db1");
    if($con){
        echo "Connection successful";
    }else{
        echo "Connection failed";
    }
?>