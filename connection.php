<?php
     $conn= mysqli_connect("localhost",'root','','db1');
     if (!$conn) {
         echo "connection failed";
     }
     else{
         echo "connection successfull";
     }
?>