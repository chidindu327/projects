<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notifications</title>
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
    <h2>Notifications</h2>
    <p class="text-muted">Stay updated with your social activities!</p>
  </section>

  <!-- Notifications Section -->
  <section id="notifications">
    <div class="row">
      <!-- Notification Entry 1 -->
      <div class="col-md-12 mb-4">
        <div class="notification-card d-flex align-items-center">
          <img src="https://via.placeholder.com/50" alt="User 1" class="rounded-circle me-3">
          <div class="notification-content">
            <strong>John Doe</strong> liked your post.
            <span class="text-muted">2 mins ago</span>
          </div>
        </div>
      </div>

      <!-- Notification Entry 2 -->
      <div class="col-md-12 mb-4">
        <div class="notification-card d-flex align-items-center">
          <img src="https://via.placeholder.com/50" alt="User 2" class="rounded-circle me-3">
          <div class="notification-content">
            <strong>Jane Smith</strong> commented on your photo.
            <span class="text-muted">10 mins ago</span>
          </div>
        </div>
      </div>

      <!-- Notification Entry 3 -->
      <div class="col-md-12 mb-4">
        <div class="notification-card d-flex align-items-center">
          <img src="https://via.placeholder.com/50" alt="User 3" class="rounded-circle me-3">
          <div class="notification-content">
            <strong>Emily Johnson</strong> started following you.
            <span class="text-muted">20 mins ago</span>
          </div>
        </div>
      </div>

      <!-- Notification Entry 4 -->
      <div class="col-md-12 mb-4">
        <div class="notification-card d-flex align-items-center">
          <img src="https://via.placeholder.com/50" alt="User 4" class="rounded-circle me-3">
          <div class="notification-content">
            <strong>Michael Brown</strong> mentioned you in a comment.
            <span class="text-muted">1 hour ago</span>
          </div>
        </div>
      </div>

      <!-- Notification Entry 5 -->
      <div class="col-md-12 mb-4">
        <div class="notification-card d-flex align-items-center">
          <img src="https://via.placeholder.com/50" alt="User 5" class="rounded-circle me-3">
          <div class="notification-content">
            <strong>Sophia Williams</strong> shared your post.
            <span class="text-muted">2 hours ago</span>
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
