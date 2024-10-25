<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
    include("../asset/backend/delete.php");
?>
<body>
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="col-5 mx-auto bg-info p-4">
                <h4>Account Delete</h4>
                <hr>
                <h6>Are You sure!</h6>
                <form action="" method="POST">
                    <button name="delete" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>