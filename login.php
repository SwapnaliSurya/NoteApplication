<?php
 include_once "connect.php";
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #b06175;
      background-image: url('login1.jpg'); 
  background-size: cover; 
  background-repeat: no-repeat; 
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 50vh;
    }

    .login-container {
      max-width: 500px;
      margin: 0 auto;
      padding: 40px;
      background-color: #ffffff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      margin-top: 80px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    .login-title {
      text-align: center;
      margin-bottom: 30px;
     }

  </style>
</head>
<body>
  <div class="login-container">
    <h2 class="login-title">Log In</h2>
    <form class="login-form" method="POST" action="dashboard.php">
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
      </div>
      <button type="submit" name="login_button" class="btn btn-primary btn-block">Log In</button>
      
      <p class="text-center mt-3">Don't have an account? <a href="register.php">Register</a></p>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
