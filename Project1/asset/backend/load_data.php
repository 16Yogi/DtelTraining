<?php
include("connection.php");

// if (isset($_POST['type'])) {
//     if ($_POST['type'] == "stateData") {
//         $sql = "SELECT * FROM state";
//         $qry = mysqli_query($con, $sql);
//         $str = "";

//         while ($row = mysqli_fetch_array($qry)) {
//             $str .= "<option value='" . $row['state'] . "'>" . $row['state'] . "</option>";
//         }
//         echo $str;

//         } else if ($_POST['type'] == "distData" && isset($_POST['stateId'])) {
//         $stateId = $_POST['stateId'];
//         // $sql = "SELECT * FROM dist WHERE dist='$stateId'"; 
//         $sql = "SELECT state.state, district.dist_name
//                 FROM state
//                 INNER JOIN district ON state.sid = district.sid WHERE district.sid = $stateId"; 
//         $qry = mysqli_query($con, $sql);
//         $str = "";

//         while ($row = mysqli_fetch_assoc($qry)) {
//             $str .= "<option value='" . $row['dist'] . "'>" . $row['dist'] . "</option>";
//         }
//         echo $str;
//     }
// }


if (isset($_POST['type'])) {
    if ($_POST['type'] == "stateData") {
        $sql = "SELECT * FROM state";
        $qry = mysqli_query($con, $sql);
        $str = "";

        while ($row = mysqli_fetch_array($qry)) {
            $str .= "<option value='" . $row['sid'] . "'>" . $row['state'] . "</option>"; // Use 'sid' as value
        }
        echo $str;

    } else if ($_POST['type'] == "distData" && isset($_POST['stateId'])) {
        $stateId = $_POST['stateId'];
        $sql = "SELECT district.dist_name 
                FROM district 
                WHERE district.sid = '$stateId'"; 
        $qry = mysqli_query($con, $sql);
        $str = "";

        while ($row = mysqli_fetch_assoc($qry)) {
            $str .= "<option value='" . $row['dist_name'] . "'>" . $row['dist_name'] . "</option>"; // Use 'dist_name'
        }
        echo $str;
    }
}

?>
