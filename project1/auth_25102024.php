

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website with Login and Registration Form</title>
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0">
    <link rel="stylesheet" href="style.css">
    <script src="auth.js" defer></script>
</head>

<body>
    <header>
        <nav class="navbar">
            <span class="hamburger-btn material-symbols-rounded">menu</span>
            <a href="#" class="logo">
                <img src="images/logo.jpg" alt="logo">
                <h2>DTEL Pvt Ltd</h2>
            </a>
            <ul class="links">
                <span class="close-btn material-symbols-rounded">close</span>
            </ul>

            <button class="login-btn">LOG IN</button>
        </nav>
    </header>

    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
        <span class="close-btn material-symbols-rounded">close</span>
        <div class="form-box login">
            <div class="form-details">
                <h2>Welcome Back</h2>
                <p>Please log in using your personal information to stay connected with us.</p>
            </div>
            <div class="form-content">
                <h2>LOGIN</h2>
                <form action="login_user.php" method="post">


                    <div class="input-field">
                        <input type="email" id="email" name="email" required />
                        <label id="email_label">Email</label>
                        <span id="error-message-email"></span>
                    </div>

                    <div class="input-field">
                        <input type="password" id="password" name="password" required />
                        <label id="password_label">Password</label>
                        <span id="error-message-password"></span>
                    </div>

                    <a href="#" class="forgot-pass-link">Forgot password?</a>
                    <button type="submit">Log In</button>
                </form>
                <div class="bottom-link">
                    Don't have an account?
                    <a href="user_registration.php" id="signup-link">Registration</a>
                </div>
            </div>
        </div>
        <div class="form-box signup">
            <div class="form-details">
                <h2>Create Account</h2>
                <p>To become a part of our community, please sign up using your personal information.</p>
            </div>
            
            <div class="form-content">
                <h2> Registration</h2>
                <form action="user_registration.php" method="POST">

                    <div class="input-field">
                        <input type="text" name="fname" required>
                        <label>Enter Your name</label>
                    </div>

                    <div class="input-field">
                        <input placeholder=" " type="date" name="dob" required>
                        <!--<label>Enter Your DOB</label>-->
                    </div>

                    <div class="input-field">
                        <input type="email" id="gmail" name="gmail" required />
                        <label id="gmail_label">Email</label>
                        <span id="error-message-gmail"></span>
                    </div>
                

                    <div class="input-field">
                        <input type="password" id="register_password" name="register_password" required />
                        <label id="register_password_label">Password</label>
                        <span id="register-error-message-password"></span>
                    </div>

                    <div class="policy-text">
                        <input type="checkbox" id="policy">
                        <label for="policy">
                            I agree the
                            <a href="#" class="option">Terms & Conditions</a>
                        </label>
                    </div>
                    <button type="submit"> Registration </button>

                </form>
                <div class="bottom-link">
                    Already have an account?
                    <a href="#" id="login-link">Login</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>