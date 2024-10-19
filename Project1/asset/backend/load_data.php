<?php
include("connection.php");

if (isset($_POST['type'])) {
    if ($_POST['type'] == "stateData") {
        $sql = "SELECT * FROM state";
        $qry = mysqli_query($con, $sql);
        $str = "";

        while ($row = mysqli_fetch_array($qry)) {
            $str .= "<option value='" . $row['sid'] . "'>" . $row['state'] . "</option>";
        }
        echo $str;

    } else if ($_POST['type'] == "distData" && isset($_POST['stateId'])) {
        $stateId = $_POST['stateId'];
        $sql = "SELECT * FROM dist WHERE did='$stateId'";  // Use correct column name for state
        $qry = mysqli_query($con, $sql);
        $str = "";

        while ($row = mysqli_fetch_assoc($qry)) {
            $str .= "<option value='" . $row['did'] . "'>" . $row['dist'] . "</option>";
        }
        echo $str;
    }
} else {
    echo "Invalid request.";
}
?>
