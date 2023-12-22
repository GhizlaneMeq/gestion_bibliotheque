<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../public/css/register.css">
  <title>Register</title>
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
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .logo img {
      width: 90%;
    }

    .title {
      text-align: center;
      margin-bottom: 20px;
      font-weight: 700;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      margin-bottom: 5px;
    }

    .form-group input {
      padding: 10px;
      border: none;
      border-bottom: 2px solid green;
      margin-bottom: 10px;
      width: 100%;
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
</head>

<body>
  <div class="container">
    <div class="logo">
      <img src="img/Login.png" alt="Logo">
    </div>
    <h1 class="title">Create an Account</h1>
    <form action="submitRegister" method="post">
      <div class="form-group">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" placeholder="Enter your first name" required>
      </div>
      <div class="form-group">
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" placeholder="Enter your last name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
      </div>
      <button type="submit" class="login-button" name="register">Sign Up</button>
    </form>
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
      <p>Already have an account? <a href="login">Login</a></p>
    </div>
  </div>
</body>

</html>