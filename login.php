<?php
session_start();
include "inc/dp.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login/Signup Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
<!-- Header Navbar -->
<?php include "inc/navbar2.php"; ?>

<!-- Container for Login/Signup Form -->
<div class="container d-flex justify-content-center align-items-center min-vh-100">
  <div class="card p-4 shadow-lg" style="width: 25rem;">
    <!-- Tab Buttons (Login / Sign Up) -->
    <ul class="nav nav-pills nav-justified mb-4" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="login-tab" data-bs-toggle="pill" data-bs-target="#login" type="button" role="tab">Login</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="signup-tab" data-bs-toggle="pill" data-bs-target="#signup" type="button" role="tab">Sign Up</button>
      </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="pills-tabContent">
      <!-- Login Form -->
      <div class="tab-pane fade show active" id="login" role="tabpanel">
        <form method="post">
          <div class="mb-3">
            <label for="loginEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="loginEmail" name="email_address" placeholder="Enter your email" required>
          </div>
          <div class="mb-3">
            <label for="loginPassword" class="form-label">Password</label>
            <input type="password" class="form-control"  name="password" placeholder="Enter your password" required>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
          </div>
          <input type="submit" name="login" value="login" placeholder="login" class="btn btn-primary w-100">

          <?php
    // Check if the form is submitted
    if (isset($_POST['login'])) {
        // Get the form data from the POST request
        $email_address = $_POST['email_address'];
        $password = $_POST['password'];

        // Query the database to find the user by email
       $sql = "SELECT * FROM users WHERE email_address='$email_address'";
        $result = $conn->query($sql);

        // Check if a user with that email exists
        if ($result->num_rows > 0) {
            // Fetch the user's data from the database
            $user = $result->fetch_assoc();

            // Verify if the entered password matches the password in the database
            if ($password == $user['password']) {
                // Store email in session
                $_SESSION['email_address'] = $user['email_address'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['full_name'] = $user['full_name'];
                $_SESSION['users_id'] = $user['users_id'];

                // Redirect the user to the homepage
                header("location: timeline.php");
                exit;
            } else {
                echo '<div class="alert alert-danger mt-3">Invalid password</div>';
            }
        } else {
            echo '<div class="alert alert-danger mt-3">No user found with that email</div>';
        }
    }
    ?>
        </form>
      </div>

      <!-- Sign-Up Form -->
      <div class="tab-pane fade" id="signup" role="tabpanel">
        <form method="post">
          <div class="mb-3">
            <label for="signupName" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="full_name" placeholder="Enter your name" required>
          </div>
          <div class="mb-3">
            <label for="signupEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email_address_signup" placeholder="Enter your email" required>
          </div>
          <div class="mb-3">
            <label for="signupUsername" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Create a username" required>
          </div>
          <div class="mb-3">
            <label for="signupPassword" class="form-label">Password</label>
            <input type="password" class="form-control" name="password_signup" placeholder="Add your password" required>
          </div>
          <input type="submit" name="register" value="Register" class="btn btn-success w-100">
          
          <?php
          if (isset($_POST['register'])) {
              // Server-side validation
              $full_name = trim($_POST['full_name']);
              $email_address_signup = trim($_POST['email_address_signup']);
              $username = trim($_POST['username']);
              $password_signup = trim($_POST['password_signup']);
              $errors = [];

              // Validate fields
              if (!filter_var($email_address_signup, FILTER_VALIDATE_EMAIL)) {
                  $errors[] = "Invalid email format.";
              }
              if (strlen($username) < 3) {
                  $errors[] = "Username must be at least 3 characters long.";
              }
              if (strlen($password_signup) < 6) {
                  $errors[] = "Password must be at least 6 characters long.";
              }

              // Check for errors
              if (empty($errors)) {
                  // Hash the password
                  $hashed_password = password_hash($password_signup, PASSWORD_DEFAULT);

                  // Insert into the database
                  $sql = "INSERT INTO users (full_name, email_address, username, password_signup) VALUES (?, ?, ?, ?)";
                  $stmt = $conn->prepare($sql);
                  $stmt->bind_param("ssss", $full_name, $email_address, $username, $hashed_password);

                  if ($stmt->execute()) {
                      echo "<div class='alert alert-success'>Registration successful!</div>";
                  } else {
                      echo "<div class='alert alert-danger'>Error during registration. Please try again.</div>";
                  }
              } else {
                  // Display validation errors
                  foreach ($errors as $error) {
                      echo "<div class='alert alert-danger'>$error</div>";
                  }
              }
          }
          ?>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
