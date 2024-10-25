<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- css -->
    <link rel="stylesheet" href="form.css">
    <?php
        include("database.php");
    ?>
</head>
<body>
    <div class="container-fluid py-5" id="form-cf">
        <div class="container px-0" id="form-c">
            <div class="col px-0 pt-3">
                <h4 class="text-center">Registration Form</h4>
            </div>
            <div class="row mx-auto bg-white" id="form">
                <div class="col-5 py-5 pl-5 px-3" id="">
                    <form action="" onsubmit="return checkfun()">
                        <div class="form-group">
                            <label for="email">First Name:</label>
                            <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
                            <div class="error"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Last Name:</label>
                            <input type="text" class="form-control " id="lname" placeholder="Last Name" name="lname">
                            <div class="error"></div>
                        
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                            <div class="error"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Mobile:</label>
                            <input type="text" class="form-control" id="mobile" placeholder="Mobile" name="mobile">
                            <div class="error"></div>
                        
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Password</label>
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                <div class="error"></div>
                           
                            </div>
                             <div class="form-group col-md-6">
                                <label for="inputPassword4">Confirm Password</label>
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Password">
                                <div class="error"></div>
                            </div>
                        </div>
                        <div class="form-row">
                            <label for="" class="pr-4 my-2">Gender:</label>
                            <input type="radio" name="gender" id="male" value="male" class="">
                            <label for="male" class="px-2 my-2">Male</label>
                            <input type="radio" name="gender" id="female" value="female">
                            <label for="female" class="px-2 my-2">Female</label>
                        </div>
                        <div class="form-group py-0 pt-3">
                            <button class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-7" id="form-content"></div>
            </div>
        </div>
    </div>
    <script src="form.js"></script>
</body>
</html>