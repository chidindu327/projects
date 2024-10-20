<?php
include "inc/dp.php";
session_start();
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


<!-- Container for Login/Signup Form -->
<div class="container d-flex justify-content-center align-items-center min-vh-100">
  <div class="card p-4 shadow-lg" style="width: 27rem;">
    <!-- Tab Buttons (Login / Sign Up) -->
    <ul class="nav nav-pills nav-justified mb-4" id="pills-tab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="Otp-tab" data-bs-toggle="pill" data-bs-target="#Otp" type="button" role="tab">Otp</button>
      </li>
    </ul>

    <!-- Tab Content -->
    <div class="tab-content" id="pills-tabContent">
      <!-- Login Form -->
      <div class="tab-pane fade show active" id="otp" role="tabpanel">
        <form method="post">
          <div class="mb-3">
            <label class="form-label">Otp</label>
            <input type="text" class="form-control" name="numbers" placeholder="Enter your numbers" required>
          </div>
          <input type="submit" name="enter" value="enter" placeholder="enter" class="btn btn-primary w-100">

          <?php
    // Check if the form is submitted
    if (isset($_POST['enter'])) {
        // Get the form data from the POST request
        $numbers = $_POST['numbers'];

        // Query the database to find the user by email
       $sql = "SELECT * FROM random_numbers_table WHERE numbers='$numbers'";
        $result = $conn->query($sql);

        // Check if a user with that email exists
        if ($result->num_rows > 0) {
            // Fetch the user's data from the database
            $user = $result->fetch_assoc();

            // Verify if the entered password matches the password in the database
            if ($numbers == $user['numbers']) {
                // Store email in session
                $_SESSION['email_address'] = $user['email_address'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['full_name'] = $user['full_name'];
                $_SESSION['numbers'] = $user['numbers'];

                // Redirect the user to the homepage
                header("location: timeline.php");
                exit;
            } else {
                echo '<div class="alert alert-danger mt-3">Invalid Otp</div>';
            }
        } else {
            echo '<div class="alert alert-danger mt-3">wrong Otp</div>';
        }
    }
    ?>
        </form>