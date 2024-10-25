<?php
include("../asset/backend/update.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../asset/css/logina.css">
</head>

<body>
    <div class="container-fluid py-2" id="login-cf">
        <div class="container py-5">

            <div class="col-5 mx-auto py-3 form">
                
                <div class="row">
                    <h3 class="col-9">Edit Information</h3>
                    <a href="../home.php" class="nav-link"><b>Home</b></a>
                </div>
                <hr>
                <form id="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" onsubmit="return clickfuna()">
                    <div class="form-row">
                        <div class="col form-item">
                            <label for="fname">First Name</label>
                            <input name="fname" type="text" class="form-control" placeholder="First name" id="fname">
                            <div class="error"></div> 
                        </div>
                        <div class="col form-item">
                            <label for="lname">Last Name</label>
                            <input name="lname" type="text" class="form-control" placeholder="Last name" id="lname">
                            <div class="error"></div> 
                        </div>
                    </div>
                    <div class="form-group form-item">
                        <label for="mobile">Mobile</label>
                        <input name="mobile" type="text" class="form-control" placeholder="Mobile" id="mobile">
                        <div class="error"></div> 
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="state">State</label>
                            <select id="state" name="state" class="form-control">
                                <option value="">Select State</option>
                                
                            </select>
                        </div>
                        <div class="col">
                            <label for="dist">District</label>
                            <select id="dist" name="dist" class="form-control">
                                <option value="">Select District</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-item">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password" id="password">
                        <div class="error"></div> 
                    </div>
                    <div class="form-group form-item">
                        <p class="row">
                            <a href="registration2.php" class="nav-link">Registration Here...</a>
                            <a href="login2.php" class="nav-link">Login</a>
                        </p>
                    </div>
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </form>

            </div>
        </div>
    </div>
    <script src="../asset/js/registration.js"></script>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: "../asset/backend/load_data.php",
                type: "POST",
                data: { type: "stateData" },
                success: function(data) {
                    $("#state").append(data);
                }
            });

            $("#state").on("change", function() {
                var stateId = $(this).val();
                // alert(stateId)
                if (stateId) {
                    $.ajax({
                        url: "../asset/backend/load_data.php",
                        type: "POST",
                        data: { type: "distData", stateId: stateId },
                        success: function(data) {
                            $("#dist").html(data);
                        }
                    });
                } else {
                    $("#dist").html("<option value=''>Select District</option>");
                }
            });
        });
    </script>
    <script src="../asset/js/jquery.js"></script>
</body>
</html>
