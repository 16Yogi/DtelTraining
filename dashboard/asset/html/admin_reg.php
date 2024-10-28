<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Registration</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/ec51b9d2d0.js" crossorigin="anonymous"></script>
    <!-- css -->
     <link rel="stylesheet" href="../css/admin_reg.css">
</head>
<body>
    <div class="container-fluid py-5" id="reg_cf">
        <div class="container py-5">
            <div class="col-8 mx-auto reg_form py-4">
                <div class="item">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="col">
                    <h2 class="text-center">Admin Registration</h2>
                </div>
                <hr>
                <form action="">
                    <div class="form-row form-group">
                        <div class="col">
                            <label for="username">Full Name</label>
                            <input type="text" class="form-control" placeholder="Full name">
                        </div>
                        <div class="col">
                            <label for="pic">Profile Picture</label>
                            <input type="file" class="form-control" placeholder="Full name">
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col">
                            <label for="mobile">Mobile</label>
                            <input type="text" class="form-control" placeholder="Mobile">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <div class="col"> -->
                            <label for="department">Department</label>
                            <select name="" id="" class="form-control">
                                <option value="">Select Department</option>
                                <option value="">CS</option>
                                <option value="">Science</option>
                                <option value="">Art</option>
                                <option value="">Vocational</option>
                                <option value="">Management</option>
                            </select>
                        <!-- </div> -->
                    </div>
                    <div class="from-row form-group">
                        <label for="" class="pr-3">Gender:</label>
                        <input type="radio" name="gender" id="gender" value="male">
                        <label for="" class="pr-5">Male</label>
                        <input type="radio" name="gender" id="gender" value="female">
                        <label for="">Female</label>
                    </div>
                    <div class="form-group">
                        <label for="">Addess</label>
                        <input type="text" class="form-control" placeholder="Full Address">
                    </div>
                    <div class="form-group ">
                        <input type="submit" value="Submit" name="submit" class="btn btn-info submit_btn py-2">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>