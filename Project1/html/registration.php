<?php
include("../asset/backend/insert.php");
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
    <link rel="stylesheet" href="../asset/css/login.css">
</head>

<body>
    <div class="container-fluid py-5" id="login-cf">
        <div class="container py-5">
            <div class="col-5 mx-auto py-3" id="form">
                <h3>Signup</h3> <hr>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data" onsubmit="return validation()">
                    <div class="form-row">
                        <div class="col">
                            <label for="fname">First Name</label> 
                            <input name="fname" type="text" class="form-control" placeholder="First name" id="fname" >
                            <p id="first_name" class="text-danger"></p>
                        </div>
                        <div class="col">
                            <label for="lname">Last Name</label> 
                            <input name="lname" type="text" class="form-control" placeholder="Last name" id="lname" >
                            <p id="last_name" class="text-danger"></p>
                        </div>
                    </div>
                    <div class="form-group pt-2">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="form-control" placeholder="Email" id="email" aria-describedby="emailHelp" >
                        <p id="val_email" class="text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label> 
                        <input name="mobile" type="text" class="form-control" placeholder="Mobile" id="mobile" >
                        <p id="val_mobil" class="text-danger"></p>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="state">State</label> 
                            <select id="state" name="state" class="form-control">
                                <option value="">Select State</option>
                                <!-- State options will be loaded here -->
                            </select>
                        </div>
                        <div class="col">
                            <label for="dist">District</label> 
                            <select id="dist" name="dist" class="form-control">
                                <option value="">Select District</option>
                                <!-- District options will be loaded here -->
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password" id="password" >
                        <P id="val_pass" class="text-danger"></P>
                    </div>
                    <p id="all" class="text-danger"></p>
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
