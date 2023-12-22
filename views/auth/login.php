<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 400px;
            padding: 50px;

            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1)
        }

        .logo img {
            width: 90%;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .signin-form {
            margin-bottom: 20px;
            align-items: center;
        }

        .signin-text {
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            border: none;
            border-bottom: 2px solid green;
            margin-bottom: 10px;
        }

        .login-button {
            padding: 13px;
            width: 100px;
            background-color: green;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 150px;
        }

        .forgot-password {
            text-align: center;
            margin-bottom: 10px;
        }

        .or-divider {
            text-align: center;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .social-login {
            text-align: center;
            margin-bottom: 20px;
        }

        .social-icons img {
            width: 30px;
            margin: 0 5px;
        }

        .no-account {
            text-align: center;
        }
    </style>
<body>

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