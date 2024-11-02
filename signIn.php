<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Store</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css">
  <style>
    .box {
      min-height: 500px; /* Ensure both boxes have the same minimum height */
      background-color: transparent !important; /* Make the box background transparent */
    }
    .form-control,
    .form-check-input {
      background-color: transparent !important; /* Make the input fields and checkboxes transparent */
      border: 1px solid #fff; /* Add a white border for better visibility */
      color: #fff; /* Ensure text is visible on dark background */
    }
    .form-control::placeholder {
      color: #ccc; /* Light color for placeholder text */
    }
    .form-check-label {
      color: #fff; /* Ensure label text is visible */
    }
 
    
  </style>

</head>

<body class="bg-transparent d-flex align-items-center justify-content-center vh-100 signin_and_signup_background">
  <div class="container bg-transparent">
    <div class="row justify-content-center align-items-center bg-transparent">
      
      <!-- Sign In Box -->
      <div class="col-12 col-md-6 col-lg-4 mx-md-2 bg-transparent text-light p-4 rounded shadow box">
        <h2 class="text-center mb-4">Sign In</h2>
        <?php
        $username = "";
        $password = "";
        if (isset($_COOKIE["username"])) {
          $username = $_COOKIE["username"];
        }
        if (isset($_COOKIE["password"])) {
          $password = $_COOKIE["password"];
        }
        ?>
        <div class="mb-3">
          <label for="un" class="form-label">Username :</label>
          <input type="text" class="form-control" id="un" value="<?php echo $username; ?>" />
        </div>
        <div class="mb-3">
          <label for="pw" class="form-label">Password :</label>
          <input type="password" class="form-control" id="pw" value="<?php echo $password; ?>" />
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="rm" />
          <label for="rm" class="form-check-label">Remember Me</label>
        </div>
        <div class="d-none" id="msgDiv2">
          <div class="alert alert-danger" id="msg2"></div>
        </div>
        <div class="d-grid gap-2">
          <button class="btn btn-secondary" onclick="signIn();">Sign In</button>
          <!-- <button class="btn btn-outline-secondary"  onclick="changeView();">New to Online Store? Please Sign Up</button> -->
        </div>
      </div>
      <!-- Sign In Box -->

      <!-- Sign Up Box -->
      <div class="col-12 col-md-6 col-lg-4 mx-md-2 bg-transparent text-light p-4 rounded shadow box">
        <h2 class="text-center mb-4">Sign Up</h2>
        <div class="row">
          <div class="col-12 col-sm-6 mb-3">
            <label for="fname" class="form-label">First Name :</label>
            <input type="text" class="form-control" id="fname" />
          </div>
          <div class="col-12 col-sm-6 mb-3">
            <label for="lname" class="form-label">Last Name :</label>
            <input type="text" class="form-control" id="lname" />
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" id="email" />
          </div>
          <div class="col-12 col-sm-6 mb-3">
            <label for="mobile" class="form-label">Mobile :</label>
            <input type="text" class="form-control" id="mobile" />
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-sm-6 mb-3">
            <label for="username" class="form-label">Username :</label>
            <input type="text" class="form-control" id="username" />
          </div>
          <div class="col-12 col-sm-6 mb-3">
            <label for="password" class="form-label">Password :</label>
            <input type="password" class="form-control" id="password" />
          </div>
        </div>
        <div class="d-none" id="msgDiv1">
          <div class="alert alert-danger" id="msg1"></div>
        </div>
        <div class="d-grid gap-2">
          <button class="btn btn-secondary" onclick="signUp();">Sign Up</button>
          <!-- <button class="btn btn-outline-secondary" onclick="changeView();">Already Have an Account? Sign In</button> -->
        </div>
      </div>
      <!-- Sign Up Box -->
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>
