<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../asset/css/login.css">
</head>
<body>
    <div class="container-fluid py-5" id="login-cf">
        <div class="container py-5">
            <div class="col-5 mx-auto py-3" id="form">
                <h3>Login</h3>
                <hr>
                <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" class="form-control" placeholder="Email..." id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" placeholder="Password..." class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
