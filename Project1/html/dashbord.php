<?php
    $con = mysqli_connect("localhost", "root", "", "db1");
    if ($con) {
        // echo "Connection successful dashboard";
    } else {
        // echo "Connection failed";
    }
?>

<?php
    if(isset($_POST['update_profile'])){
        echo "<script>alert('Hello This is update')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <script src="https://kit.fontawesome.com/ec51b9d2d0.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid py-5 px-4" id="dash-cf">
        <div class="row">
            <div class="col-2 py-2" id="left-side">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link" id="v-pills-profile-tab" data-toggle="pill" data-target="#v-pills-profile" type="button">Profile</button>
                    <button class="nav-link" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button">Messages</button>
                    <button class="nav-link" id="v-pills-users-tab" data-toggle="pill" data-target="#v-pills-settings" type="button">All Users</button>
                </div>
            </div>
            <div class="col-9 mx-3 py-3 px-4" id="right-side">
                <div class="tab-content" id="v-pills-tabContent">
                    
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel">
                        <h1>Profile</h1>
                        <hr>
                        <?php
                            session_start();
                            $userid = $_SESSION['uremail'];
                            
                            if($userid == true){
                                $select = "SELECT * FROM signup WHERE email = '$userid'";
                                $result = mysqli_query($con, $select);
                                $row = mysqli_fetch_assoc($result);
                                $fname = $row['fname'];
                                $lname = $row['lname'];    
                                $email = $row['email'];    
                                $mobile = $row['mobile']; 
                                
                                $mystate = $row['state'];
                                $stateNum = intval($mystate);
                                $selectState = "SELECT * FROM state WHERE sid = $stateNum";
                                $resultState = mysqli_query($con, $selectState);
                                $rowState = mysqli_fetch_assoc($resultState);

                                $dist = $row['dist']
                                 
                        ?>
                        <div class="col">
                            <h4>Name - <?php  echo $fname." ".$lname; ?></h4>
                            <p><b>Email - </b><?php echo  $email; ?></p>
                            <p><b>Mobile - </b><?php echo   $mobile; ?></p>
                            <p><b>State -</b><?php echo $rowState['state'];?></p>
                            <p><b>District -</b><?php echo $dist; ?></p>
                            <hr>
                            <div class="col row">
                                <a href="html/update_form.php" class="nav-link">
                                    <button name="update_profile" id="update_profile" type="button" class="btn btn-success text-white">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                </a>
                                <a href="html/delete.php" name="delete" class="nav-link"> 
                                    <button class="btn btn-danger text-white">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <?php
                            }else{
                        
                        ?>
                        <div class="col">
                            <h3>Sorry...! user not loggedin</h3>
                        </div>
                        <?php
                            }
                        ?>

                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel">
                        <h1>Messages</h1>
                    </div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel">
                        <h1>All Users</h1>
                        <?php
                            $sql2 = "SELECT * FROM signup";
                            $result = mysqli_query($con, $sql2);
                        ?>
                        <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>State</th>
                                <th>District</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                                while ($row1 = mysqli_fetch_assoc($result)) { 
                                    $fname = $row1['fname'];
                                    $lname = $row1['lname'];
                                    $email = $row1['email'];
                                    $mobile = $row1['mobile'];

                                    $state_id1 = $row1['state']; 
                                    $state_id = intval($state_id1);

                                    $state_query = "SELECT * FROM state WHERE sid = $state_id";
                                    
                                    $state_result = mysqli_query($con, $state_query);
                                    $state_row = mysqli_fetch_assoc($state_result);

                                    $state_name = $state_row['state']; 
                                    $dist = $row1['dist'];
                            ?>
                              <tr>
                                <td><?php echo $fname . " " . $lname; ?></td>
                                <td><?php echo $email; ?></td>
                                <td><?php echo $mobile; ?></td>
                                <td><?php echo $state_name; ?></td>
                                <td><?php echo $dist; ?></td>
                                <td>
                                    <button class="btn btn-success text-white">
                                        <i class="fa-solid fa-pen"></i>
                                    </button>
                                    <button class="btn btn-danger text-white">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                              </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>