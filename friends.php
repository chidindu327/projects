<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Friend Requests and Friends List</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css"> <!-- Linking the external CSS file -->
</head>
<body>

<!-- Header Navbar -->
<?php include "inc/navbar.php"; ?>

<!-- Main Content -->
<div class="container mt-5">
  <!-- Page Title -->
  <section id="page-title" class="mb-5 text-center">
    <h2>Friends</h2>
    <p class="text-muted">Manage your friends and pending friend requests.</p>
  </section>

  <!-- Friend Requests Section -->
  <section id="friend-requests" class="mb-5">
    <h3>Pending Friend Requests</h3>
    <div class="row">
      <!-- Friend Request 1 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="John Doe">
          <div class="card-body text-center">
            <h5 class="card-title">John Doe</h5>
            <p class="card-text">Sent you a friend request</p>
            <a href="#" class="btn btn-success">Accept</a>
            <a href="#" class="btn btn-danger">Decline</a>
          </div>
        </div>
      </div>
      
      <!-- Friend Request 2 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Jane Smith">
          <div class="card-body text-center">
            <h5 class="card-title">Jane Smith</h5>
            <p class="card-text">Sent you a friend request</p>
            <a href="#" class="btn btn-success">Accept</a>
            <a href="#" class="btn btn-danger">Decline</a>
          </div>
        </div>
      </div>
      
      <!-- Friend Request 3 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Emily Johnson">
          <div class="card-body text-center">
            <h5 class="card-title">Emily Johnson</h5>
            <p class="card-text">Sent you a friend request</p>
            <a href="#" class="btn btn-success">Accept</a>
            <a href="#" class="btn btn-danger">Decline</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Friends List Section -->
  <section id="friends-list">
    <h3>Your Friends</h3>
    <div class="row">
      <!-- Friend 1 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Michael Brown">
          <div class="card-body text-center">
            <h5 class="card-title">Michael Brown</h5>
            <a href="#" class="btn btn-primary">Message</a>
            <a href="#" class="btn btn-outline-danger">Unfriend</a>
          </div>
        </div>
      </div>
      
      <!-- Friend 2 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Sophia Williams">
          <div class="card-body text-center">
            <h5 class="card-title">Sophia Williams</h5>
            <a href="#" class="btn btn-primary">Message</a>
            <a href="#" class="btn btn-outline-danger">Unfriend</a>
          </div>
        </div>
      </div>
      
      <!-- Friend 3 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="https://via.placeholder.com/150" class="card-img-top" alt="Alex Johnson">
          <div class="card-body text-center">
            <h5 class="card-title">Alex Johnson</h5>
            <a href="#" class="btn btn-primary">Message</a>
            <a href="#" class="btn btn-outline-danger">Unfriend</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
