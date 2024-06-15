<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/login.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">

    <title>Know Your College</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Icon -->
    <link rel="icon" type="image/png" href="img/WhatsApp_Image_2024-06-07_at_15.35.37_07190f0c-removebg-preview.png">
</head>

<body>
    <!-- Box -->
    <div class="container">

        <!-- Add an id to the toggle-switch container -->
        <div class="toggle-switch-container" id="toggleSwitchContainer">
            <label class="toggle-switch">
                <input type="checkbox" id="loginToggle" onclick="toggleLoginSection()">
                <div class="toggle-switch-background">
                    <div class="toggle-switch-handle"></div>
                </div>
            </label>
        </div>

        <!-- Login section -->
        <div id="loginSection" class="form">

            <h2>User Login</h2>
            <form action="includes/action-user-login.php" method="post" enctype="multipart/form-data">
                <label for="username">User Name:<span class="required-star">*</span></label>
                <input type="text" placeholder="User Name" autocomplete="off" id="username" name="username" required>

                <label for="password">Password:<span class="required-star">*</span></label>
                <div class="password-container">
                    <input type="password" placeholder="password" autocomplete="off" id="password1" name="password"
                        required>
                    <button id="eyeButton" type="button" onclick="togglePasswordVisibility('password1')">👁️</button>
                </div>

                <button type="submit" name="submit_login">Login</button>

                <p>Don't have an account yet? <span id="loginButton" onclick="showSignUp()">SIGN UP</span></p>
            </form>
            <div class="line"></div>

            <p class="continue-text">Continue with</p>

            <!-- Social login buttons under the login section for login-->
            <div class="social-buttons">
                <div class="social-buttons">
                    <li class="item">
                        <a class="social-button" id="google">
                            <i class="fa-brands fa-google icon"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a class="social-button" id="fb">
                            <i class="fa-brands fa-facebook icon"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a class="social-button" id="Mics">
                            <i class="fa-brands fa-microsoft icon"></i>
                        </a>
                    </li>
                </div>
            </div>
        </div>


        <!-- Admin Login -->
        <div id="adminLoginFields" class="form" style="display: none;">
            <form action="includes/action-admin-login.php" method="post" enctype="multipart/form-data">
                <h2>Admin Login</h2>
                <label for="commander">User Name:<span class="required-star">*</span></label>
                <input type="text" placeholder="User Name" id="commander" name="commander" required>

                <label for="commanderPasscode">Password:<span class="required-star">*</span></label>
                <div class="password-container">
                    <input type="password" placeholder="password" id="commandpassword" name="commandpassword" required>
                    <button id="eyeButton" onclick="togglePasswordVisibility('commandpassword')"
                        type="button">👁️</button>
                </div>

                <label for="verificationKey">Verification Key:<span class="required-star">*</span></label>
                <div class="password-container">
                    <input type="password" placeholder="password" id="keypassword" name="password" required>
                    <button id="eyeButton" onclick="togglePasswordVisibility('keypassword')" type="button">👁️</button>
                </div>

                <button type="submit" name="submit_admin">Login</button>
            </form>
        </div>


        <!-- Sign up section-->
        <div id="signupSection" class="form" style="display:none;">
            <form action="includes/action-register.php" method="post" enctype="multipart/form-data">
                <h2>Sign Up</h2>

                <label for="newUsername">User Name:<span class="required-star">*</span></label>
                <input type="text" placeholder="User Name" id="newUsername" name="newUsername" required>


                <label for="newPassword">Create Password:<span class="required-star">*</span></label>
                <div class="password-container">
                    <input type="password" placeholder="password" id="newpassword" name="password" required>
                    <button id="eyeButton" onclick="togglePasswordVisibility('newpassword')" type="button">👁️</button>
                </div>

                <label for="confirmPassword">Confirm Password:<span class="required-star">*</span></label>
                <div class="password-container">
                    <input type="password" placeholder="password" id="confirmpassword" name="confirm_password" required>
                    <button id="eyeButton" onclick="togglePasswordVisibility('confirmpassword')"
                        type="button">👁️</button>
                </div>
                <label for="confirmPassword">Email ID:<span class="required-star">*</span></label>
                <div class="password-container">
                    <input type="email" placeholder="Email" name="email" required>
                </div>

                <div class="mobile-container">
                    <label for="mobileNumber">Mobile Number:<span class="required-star">*</span></label>
                    <div class="country-code-dropdown">
                        <input type="text" id="countryCodeInput" placeholder="Code" name="country_code"
                            oninput="handleInput()" onfocus="showDropdown()" required>
                        <ul id="countryCodesList"></ul>
                    </div>

                    <input type="tel" id="mobileNumber" name="mobileNumber" placeholder="Enter valid phone number"
                        maxlength="10" oninput="allowOnlyNumbers(event)" required>

                </div>
                <button type="submit" name="submit_signup">Sign Up</button>
            </form>

            <p>Already a Soldier? <span id="loginButton" onclick="showLogin()">LOGIN</span></p>

            <div class="line"></div>
            <p class="continue-text">Continue with</p>

            <!-- Social login buttons under the sign-up section -->
            <div class="social-buttons">
                <div class="social-buttons">
                    <li class="item">
                        <a class="social-button" id="google">
                            <i class="fa-brands fa-google icon"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a class="social-button" id="fb">
                            <i class="fa-brands fa-facebook icon"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a class="social-button" id="Mics">
                            <i class="fa-brands fa-microsoft icon"></i>
                        </a>
                    </li>
                    <li class="item">
                        <a class="social-button" id="Gma">
                            <i class="fa fa-envelope icon"></i>
                        </a>
                    </li>

                </div>
            </div>
        </div>
    </div>


    <!-- Fire base check for fb,google microsoft and gmail -->
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-analytics.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@firebase/app-check"></script>
    <script src="https://apis.google.com/js/api.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
    <script type="text/javascript" src="https://alcdn.msauth.net/browser/2.14.0/js/msal-browser.js"></script>



    <!-- Redirect to home -->
    <div class="back-button" onclick="goBack()">Return to
        Base</div>


    <!-- Cursor -->
    <div id="cursor"></div>


    <!--Java script-->
    <script src="assets/js/login.js"></script>

</body>

</html>