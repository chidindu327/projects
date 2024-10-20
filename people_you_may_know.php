<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>People You May Know</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css"> <!-- Linking the external CSS file -->
  <link rel="stylesheet" href="css/style2.css"> Linking the external CSS file
</head>
<body>

<!-- Header Navbar -->
<?php include "inc/navbar.php"; ?>

<!-- Main Content -->
<div class="container mt-5">
  <!-- Page Title -->
  <section id="page-title" class="mb-5 text-center">
    <h2>People You May Know</h2>
    <p class="text-muted">Expand your network by connecting with these suggested profiles.</p>
  </section>

  <!-- Suggested People Section -->
  <section id="suggested-people">
    <div class="row">
      <!-- User Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="profile-card">
          <img src="https://via.placeholder.com/150" alt="John Doe">
          <h5>John Doe</h5>
          <p>Software Engineer at Tech Corp</p>
          <a href="#" class="btn btn-follow">Follow</a>
          <a href="#" class="btn btn-message">Message</a>
        </div>
      </div>

      <!-- User Card 2 -->
      <div class="col-md-4 mb-4">
        <div class="profile-card">
          <img src="https://via.placeholder.com/150" alt="Jane Smith">
          <h5>Jane Smith</h5>
          <p>Photographer at Shutter World</p>
          <a href="#" class="btn btn-follow">Follow</a>
          <a href="#" class="btn btn-message">Message</a>
        </div>
      </div>

      <!-- User Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="profile-card">
          <img src="https://via.placeholder.com/150" alt="Emily Johnson">
          <h5>Emily Johnson</h5>
          <p>Blogger at Foodie's Paradise</p>
          <a href="#" class="btn btn-follow">Follow</a>
          <a href="#" class="btn btn-message">Message</a>
        </div>
      </div>

      <!-- User Card 4 -->
      <div class="col-md-4 mb-4">
        <div class="profile-card">
          <img src="https://via.placeholder.com/150" alt="Michael Brown">
          <h5>Michael Brown</h5>
          <p>Graphic Designer at Creative Studio</p>
          <a href="#" class="btn btn-follow">Follow</a>
          <a href="#" class="btn btn-message">Message</a>
        </div>
      </div>

      <!-- User Card 5 -->
      <div class="col-md-4 mb-4">
        <div class="profile-card">
          <img src="https://via.placeholder.com/150" alt="Sophia Williams">
          <h5>Sophia Williams</h5>
          <p>Content Creator at Travel Stories</p>
          <a href="#" class="btn btn-follow">Follow</a>
          <a href="#" class="btn btn-message">Message</a>
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
