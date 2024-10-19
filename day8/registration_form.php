<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <?php
        include("asset/headder.php");
    ?>
</head>
<body>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="col-5 mx-auto p-4">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">First Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Last Name</label>
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" id="password" name="passoword" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Gender</label>
                        <br>
                        <span>Male:</span>
                        <input type="radio" name="gender" id="male" value="male">
                        <span>Female:</span>
                        <input type="radio" name="gender" id="female" value="female">
                        <span>Other:</span>
                        <input type="radio" name="gender" id="other" value="other">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Address...">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">State</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputCity">City</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                              Check me out
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                    <a href="login_form.php" class="px-2">Login</a>
                    <a href="forget_password" class="px-2">Forget Password</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>