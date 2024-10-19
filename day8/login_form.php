<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
        include("asset/headder.php");
    ?>
</head>
<body>
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="col-5 mx-auto p-4">
                <form>
                    <h5 class="font-weight-bold">Login</h5>
                    <div class="form-group">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="password" name="passoword" placeholder="Password">
                    </div>       
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>            
                </form>
            </div>
        </div>
    </div>
</body>
</html>