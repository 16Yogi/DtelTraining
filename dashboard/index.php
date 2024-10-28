<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/ec51b9d2d0.js" crossorigin="anonymous"></script>
    <!-- css -->
     <link rel="stylesheet" href="asset/css/index.css">
    
</head>
<body>
    <!-- navigation bar -->
    <div class="container-fluid bg-light" id="nav">
        <nav class="navbar navbar-expand-lg navbar-light  d-flex justify">
            <a class="navbar-brand" href="#"><b>Dashboard</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav left">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#">Date: <span id="date">Mehek Singh</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="asset/html/admin_user.php" class="nav-link">Login</a>
                    </li>
                    <!-- <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown"></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Link 1</a>
                            <a class="dropdown-item" href="#">Link 2</a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">Mehek Singh <i class="fa-solid fa-angle-down"></i></a>
                        <div class="dropdown-menu">
                            <a href="" class="dropdown-item">Logout</a>
                            <a href="" class="dropdown-item">Profile</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- end navigation -->
    <!-- dashboard -->
    <div class="container-fluid py-3 px-4" id="dash-cf">
        <div class="row">
            <div class="col-2 py-2" id="left-side">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link active text-left" id="v-pills-profile-tab" data-toggle="pill" data-target="#v-pills-profile" type="button"><i class="fa-solid fa-user pr-3"></i>Profile</button>
                    <button class="nav-link text-left" id="v-pills-messages-tab" data-toggle="pill" data-target="#v-pills-messages" type="button"><i class="fa-solid fa-user-plus pr-3"></i>Add user</button>
                    <button class="nav-link text-left" id="v-pills-users-tab" data-toggle="pill" data-target="#v-pills-meeting" type="button"><i class="fa-solid fa-handshake pr-3"></i>Meeting</button>
                    <button class="nav-link text-left" id="v-pills-users-tab" data-toggle="pill" data-target="#v-pills-assignment" type="button"><i class="fa-solid fa-file pr-3"></i>Assignment</button>
                    <button class="nav-link text-left" id="v-pills-users-tab" data-toggle="pill" data-target="#v-pills-attendance" type="button"><i class="fa-solid fa-clipboard-user pr-3"></i>Attendance</button>
                    <button class="nav-link text-left" id="v-pills-users-tab" data-toggle="pill" data-target="#v-pills-all-user" type="button"><i class="fa-solid fa-users pr-3"></i>Students</button>
                </div>
            </div>
            <div class="col-9 mx-3 py-3 px-4" id="right-side">
                <div class="tab-content " id="v-pills-tabContent">
                    <!-- profile -->
                    <div class="tab-pane fade profile show active" id="v-pills-profile" role="tabpanel">
                        <div class="row">
                            <div class="col-6">
                                <h1>Profile</h1>
                            </div>
                            <div class="col-6">
                                <h6 class="text-success mt-3 text-right">Active <i class="fa-solid fa-circle"></i></h6>
                            </div>
                        </div>
                        
                        <hr>
                        <div class="col" id="profile">
                            <div class="row">
                                <div class="col-4">
                                    <img src="https://images.pexels.com/photos/2613260/pexels-photo-2613260.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                                </div>
                                <div class="col-8">
                                    <p>
                                        <b>Name:</b>
                                        <span>Mehek Singh</span>
                                    </p>
                                    <p>
                                        <b>Email:</b>
                                        <span>hello@gmail.com</span>
                                    </p>
                                    <p>
                                        <b>Mobile:</b>
                                        <span>7896541230</span>
                                    </p>
                                    <p>
                                        <b>Gender:</b>
                                        <span>Female</span>
                                    </p>
                                    <p>
                                        <b>Address:</b>
                                        <span>Varanashi, UP</span>
                                    </p>
                                </div>
                            </div>
                            <hr>
                            <div class="col-2 row mx-auto">
                                <div class="col-6">
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-success"><i class="fa-solid fa-pen"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end profile -->

                     <!-- add user -->
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel">
                        <h1>Add user</h1>
                        <hr>
                        <div class="col">
                            <form action="">
                                <div class="form-row form-group">
                                    <div class="col">
                                        <label for="exampleInputEmail1">Full Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full name">
                                    </div>
                                    <div class="col">
                                        <label for="pic">Profile Photo</label>
                                        <input type="file" class="form-control-file border">
                                        <!-- <input type="file" name="profile" id="" class="form-control"> -->
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <label for="fatherName">Father Name</label>
                                        <input type="text" class="form-control" placeholder="Father Name">
                                    </div>
                                    <div class="col">
                                        <label for="motherName">Mother Name</label>
                                        <input type="text" class="form-control" placeholder="Mother Name">
                                    </div>
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <label for="Department">Department</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select  Department</option>
                                            <option value="">MCA</option>
                                            <option value="">BCA</option>
                                            <option value="">B.Tech</option>
                                            <option value="">M.Tech</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                    <label for="Department">Semester</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Select  Sem</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4</option>
                                            <option value="">5</option>
                                            <option value="">6</option>
                                            <option value="">7</option>
                                            <option value="">8</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="enrollment">Enrollment</label>
                                    <input type="text" class="form-control" placeholder="Enrollment">
                                </div>
                                <div class="from-row form-group">
                                    <label for="" class="pr-3">Gender:</label>
                                    <input type="radio" name="gender" id="gender" value="male">
                                    <label for="" class="pr-5">Male</label>
                                    <input type="radio" name="gender" id="gender" value="female">
                                    <label for="">Female</label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mobile</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Mobile">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Address">
                                </div>
                                <div class="form-row form-group">
                                    <div class="col">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="col">
                                        <label for="password">Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Confirm Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <!-- end add user -->

                    <!-- start meeting -->
                    <div class="tab-pane fade" id="v-pills-meeting" role="tabpanel">
                        <h1>Meeting</h1>
                        <hr>
                        <form action="">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meeting Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Meeting Name">
                            </div>
                            <div class="form-row form-group">
                                <div class="col">
                                    <label for="Department">Department</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select  Department</option>
                                        <option value="">MCA</option>
                                        <option value="">BCA</option>
                                        <option value="">B.Tech</option>
                                        <option value="">M.Tech</option>
                                    </select>
                                </div>
                                <div class="col">
                                <label for="Department">Semester</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select  Sem</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                        <option value="">6</option>
                                        <option value="">7</option>
                                        <option value="">8</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-success">Meeting start</button>
                            <button class="btn btn-danger">Meeting end</button>
                        </form>
                    </div>
                    <!-- end meeting -->

                    <!-- start assignment -->
                    <div class="tab-pane fade" id="v-pills-assignment" role="tabpanel">
                        <h1>Assignment</h1>
                        <hr>
                        <form action="">
                            <div class="form-row form-group">
                                <div class="col">
                                    <label for="exampleInputEmail1">Assignment Topic</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Assignment Topic">
                                </div>
                                <div class="col">
                                    <label for="exampleInputEmail1">Assignment File</label>
                                    <input type="File" class="form-control" id="exampleInputEmail1" aria-describedby="" placeholder="Assignment file">
                                </div>
                            </div>
                            <div class="form-row form-group">
                                <div class="col">
                                    <label for="Department">Department</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select  Department</option>
                                        <option value="">MCA</option>
                                        <option value="">BCA</option>
                                        <option value="">B.Tech</option>
                                        <option value="">M.Tech</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="Department">Semester</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select  Sem</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                        <option value="">6</option>
                                        <option value="">7</option>
                                        <option value="">8</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-success">Send Assignment</button>
                            <button class="btn btn-danger">Delete Assignment</button>
                        </form>
                    </div>
                    <!-- end assignment -->

                    <!-- start Attendance -->
                    <div class="tab-pane fade" id="v-pills-attendance" role="tabpanel">
                        <h1>Attendance</h1>
                        <hr>
                        <div class="nav flex-row nav-pills" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-mca" role="tab" aria-controls="v-pills-mca" aria-selected="true">MCA</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-bca" role="tab" aria-controls="v-pills-bca" aria-selected="false">BCA</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-btech" role="tab" aria-controls="v-pills-btech" aria-selected="false">B.Tech</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-mtech" role="tab" aria-controls="v-pills-mtech" aria-selected="false">M.Tech</a>
                        </div>
                        <hr>
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-mca" role="tabpanel" aria-labelledby="v-pills-mca-tab">
                                <div class="row py-2">
                                    <div class="col-10">
                                        <h3>MCA</h3>
                                    </div>
                                    <div class="col-2">
                                        <form action="">
                                            <select name="" id="" class="form-control">
                                                <option value="">Select semester</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                                <option value="">6</option>
                                                <option value="">7</option>
                                                <option value="">8</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <table class="table">
                                    <thead class="bg-info">
                                        <tr>
                                            <th scope="col">Enrollment</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Father Name</th>
                                            <th scope="col">Mother Name</th>
                                            <th scope="col">Attendance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">101201001</th>
                                            <td>Ram Singh</td>
                                            <td>Rahul Singh</td>
                                            <td>Mamta Singh</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <select name="" id="Select" class="form-control">
                                                            <option value="">Select Subject..</option>
                                                            <option value="">C++</option>
                                                            <option value="">Java</option>
                                                            <option value="">Python</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <select name="" id="Select" class="form-control">
                                                            <option value="">Select Attendance..</option>
                                                            <option value="">Present</option>
                                                            <option value="">Absent</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-success">Submit</button>
                            </div>
                            <div class="tab-pane fade" id="v-pills-bca" role="tabpanel" aria-labelledby="v-pills-bca-tab">
                            <div class="row py-2">
                                    <div class="col-10">
                                        <h3>BCA</h3>
                                    </div>
                                    <div class="col-2">
                                        <form action="">
                                            <select name="" id="" class="form-control">
                                                <option value="">Select semester</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                                <option value="">6</option>
                                                <option value="">7</option>
                                                <option value="">8</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <table class="table">
                                    <thead class="bg-info">
                                        <tr>
                                            <th scope="col">Enrollment</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Father Name</th>
                                            <th scope="col">Mother Name</th>
                                            <th scope="col">Attendance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">101201001</th>
                                            <td>Ram Singh</td>
                                            <td>Rahul Singh</td>
                                            <td>Mamta Singh</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <select name="" id="Select" class="form-control">
                                                            <option value="">Select Subject..</option>
                                                            <option value="">C++</option>
                                                            <option value="">Java</option>
                                                            <option value="">Python</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <select name="" id="Select" class="form-control">
                                                            <option value="">Select Attendance..</option>
                                                            <option value="">Present</option>
                                                            <option value="">Absent</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-success">Submit</button>
                            </div>
                            <div class="tab-pane fade" id="v-pills-btech" role="tabpanel" aria-labelledby="v-pills-btech-tab">
                            <div class="row py-2">
                                    <div class="col-10">
                                        <h3>B.Tech</h3>
                                    </div>
                                    <div class="col-2">
                                        <form action="">
                                            <select name="" id="" class="form-control">
                                                <option value="">Select semester</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                                <option value="">6</option>
                                                <option value="">7</option>
                                                <option value="">8</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <table class="table">
                                    <thead class="bg-info">
                                        <tr>
                                            <th scope="col">Enrollment</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Father Name</th>
                                            <th scope="col">Mother Name</th>
                                            <th scope="col">Attendance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">101201001</th>
                                            <td>Ram Singh</td>
                                            <td>Rahul Singh</td>
                                            <td>Mamta Singh</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <select name="" id="Select" class="form-control">
                                                            <option value="">Select Subject..</option>
                                                            <option value="">C++</option>
                                                            <option value="">Java</option>
                                                            <option value="">Python</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <select name="" id="Select" class="form-control">
                                                            <option value="">Select Attendance..</option>
                                                            <option value="">Present</option>
                                                            <option value="">Absent</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-success">Submit</button>
                            </div>
                            <div class="tab-pane fade" id="v-pills-mtech" role="tabpanel" aria-labelledby="v-pills-mtech-tab">
                            <div class="row py-2">
                                    <div class="col-10">
                                        <h3>M.Tech</h3>
                                    </div>
                                    <div class="col-2">
                                        <form action="">
                                            <select name="" id="" class="form-control">
                                                <option value="">Select semester</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                                <option value="">4</option>
                                                <option value="">5</option>
                                                <option value="">6</option>
                                                <option value="">7</option>
                                                <option value="">8</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <table class="table">
                                    <thead class="bg-info">
                                        <tr>
                                            <th scope="col">Enrollment</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Father Name</th>
                                            <th scope="col">Mother Name</th>
                                            <th scope="col">Attendance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">101201001</th>
                                            <td>Ram Singh</td>
                                            <td>Rahul Singh</td>
                                            <td>Mamta Singh</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col">
                                                        <select name="" id="Select" class="form-control">
                                                            <option value="">Select Subject..</option>
                                                            <option value="">C++</option>
                                                            <option value="">Java</option>
                                                            <option value="">Python</option>
                                                        </select>
                                                    </div>
                                                    <div class="col">
                                                        <select name="" id="Select" class="form-control">
                                                            <option value="">Select Attendance..</option>
                                                            <option value="">Present</option>
                                                            <option value="">Absent</option>
                                                        </select>
                                                    </div>
                                                </div> 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                    <!-- end attendance -->

                    <!--  -->
                    <div class="tab-pane fade" id="v-pills-all-user" role="tabpanel">
                        <h1>All users</h1>
                        <hr>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="asset/js/index.js"></script>
</body>
</html>