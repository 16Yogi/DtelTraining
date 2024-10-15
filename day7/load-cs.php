<?php
    $con = mysqli_connect("localhost","root","","form1");
    if($con){
        echo "Connection successfull";
    }else{
        echo "Connection failed".mysqli_error();
    }

    if($_POST['type'] == ""){

        $sql = "SELECT * FROM country_tb";

        $qry = mysqli_query($con,$sql);
        if($qry){
            echo "done";
        }else{
            echo "failed";
        }
    
        $str = "";
        while($row = mysqli_fetch_assoc($qry)){
            $str .= "<option value='{$row['cid']}'>{$row['cname']}</option>";
        }
    }else if($_POST['type'] == "stateData"){
        $sql = "SELECT * FROM state_tb WHERE country = {$_POST['id']}";

        $qry = mysqli_query($con,$sql);
        if($qry){
            echo "done 2";
        }else{
            echo "failed 2";
        }
    
        $str = "";
        while($row = mysqli_fetch_assoc($qry)){
            $str .= "<option value='{$row['sid']}'>{$row['sname']}</option>";
        }
    }
    

    
    echo $str;



    

?>
