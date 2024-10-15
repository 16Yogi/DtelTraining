<?php
    $con = mysqli_connect("localhost", "root", "", "form1");

    if ($con) {
        echo "Connection successful";
    } else {
        echo "Connection failed: " . mysqli_connect_error();
    }
?>