
    <div class="container">
        <div class="logo">
            <img src="img/Login.png" alt="Logo">
        </div>
        <h1 class="title">Welcome Back !</h1>
        <div class="signin-form">

            <form action="submitLogin" method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required><br>

                <button type="submit" name="login" class="login-button">Login</button>
            </form>
        </div>
        <div class="forgot-password">
            <a href="#">Forgot Password?</a>
        </div>
        <div class="or-divider">OR</div>
        <div class="social-login">
            <p>Login with Social Account</p>
            <div class="social-icons">
                <img src="img/facebook.png" alt="Facebook">
                <img src="img/Twit.png" alt="Twitter">
                <img src="img/insta.png" alt="Instagram">
            </div>
        </div>
        <div class="no-account">
            <p>Don't have an account? <a href="register">Sign Up</a></p>
        </div>
    </div>
