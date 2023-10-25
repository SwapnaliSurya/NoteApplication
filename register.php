<?php
 include_once "connect.php";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #b06175;
    }

    .registration-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      margin-top: 80px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    .registration-title {
      text-align: center;
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }

    .form-label {
      font-weight: bold;
    }

    .btn-register {
      background-color: #007BFF;
      color: #fff;
      border: none;
    }

    .btn-register:hover {
      background-color: #0056b3;
    }

    .mt-3 {
      margin-top: 20px;
    }
  </style>
</head>
<body>
<div class="registration-container">
  <form class="registration-form" action="login.php" >
    <h2 class="registration-title">Create an Account</h2>
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Enter a password" required>
    </div>

    <div class="mb-3">
      <label for="confirm-password" class="form-label">Confirm Password</label>
      <input type="password" id="confirm-password" name="confirm-password" class="form-control" placeholder="Confirm your password" required>
    </div>

    <button class="btn btn-register btn-block">Register</button>
    <p class="text-center mt-3">Already have an account? <a href="login.php">Log In</a></p>
  </form>
</div>

<script src="index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
