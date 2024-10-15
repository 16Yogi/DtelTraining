<?php
   include("asset/insert.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
   <div class="container-fluid">
    <div class="container">
        <div class="form">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" onsubmit="return validation()">
                <h3>Registration</h3>
                <label for="">Full Name <span>*</span></label>
                <input type="text" id="fname" name="fname" placeholder="fullname">
                <span id="err1"></span>
                <br><br>

                <label for="">Email <span>*</span></label>
                <input type="email" id="email" name="email" placeholder="email">
                <span id="err2"></span>
                
                <br><br>

                <label for="">Mobile <span>*</span></label>
                <input type="text" id="mobile" name="mobile" placeholder="mobile">
                <span id="err3"></span>
                
                <br><br>

                <label for="">Password <span>*</span></label>
                <input type="password" id="password" name="password" placeholder="password">
                <span id="err4"></span>
                
                <br><br>

                <label for="">Confirm Password <span>*</span></label>
                <input type="password" id="password2" name="password2" placeholder="password">
                <span id="err4"></span>
                <span id="err7">fafawe</span>
                <br><br>

                <input type="submit" id="submit" value="submit" name="submit">
            </form>
        </div>
        <div class="showdata">
            <table>
                <tr>
                    <td><button id="load-button">Data load</button></td>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Password</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
   </div>
   <script src="js/ind.js"></script>
</body>
</html>