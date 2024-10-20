<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Page</title>
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
  <!-- Profile Section -->
  <section id="profile-info" class="mb-5 text-center">
    <div class="row">
      <div class="col-md-4">
        <img src="https://via.placeholder.com/150" alt="User Profile" class="rounded-circle mb-3">
      </div>
      <div class="col-md-8">
        <h2>John Doe</h2>
        <p class="text-muted">@johndoe</p>
        <p>Software Engineer | Tech Enthusiast | Traveler</p>
        <div class="profile-actions">
          <a href="edit_profile.php" class="btn btn-primary">Edit Profile</a>
          <a href="#" class="btn btn-outline-primary">Message</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Stats Section -->
  <section id="profile-stats" class="mb-5 text-center">
    <div class="row">
      <div class="col-md-4">
        <h5>Posts</h5>
        <p>45</p>
      </div>
      <div class="col-md-4">
        <h5>Followers</h5>
        <p>1.2K</p>
      </div>
      <div class="col-md-4">
        <h5>Following</h5>
        <p>980</p>
      </div>
    </div>
  </section>

  <!-- User Posts Section -->
  <section id="user-posts">
    <h3 class="mb-4">Recent Posts</h3>
    <div class="row">
      <!-- Post 1 -->
      <div class="col-md-6 mb-4">
        <div class="post-card">
          <div class="post-author d-flex align-items-center">
            <img src="https://via.placeholder.com/50" alt="User Profile" class="rounded-circle me-3">
            <h5>John Doe</h5>
          </div>
          <p class="post-content">Exploring the mountains this weekend! 🏞️ #NatureLover</p>
          <img src="https://via.placeholder.com/600x400" class="img-fluid post-media" alt="Mountains">
          <div class="post-actions">
            <a href="#" class="btn btn-like">Like</a>
            <a href="#" class="btn btn-comment">Comment</a>
            <a href="#" class="btn btn-share">Share</a>
          </div>
        </div>
      </div>

      <!-- Post 2 -->
      <div class="col-md-6 mb-4">
        <div class="post-card">
          <div class="post-author d-flex align-items-center">
            <img src="https://via.placeholder.com/50" alt="User Profile" class="rounded-circle me-3">
            <h5>John Doe</h5>
          </div>
          <p class="post-content">Working on a new app feature! 🚀 #TechTalk #Developer</p>
          <img src="https://via.placeholder.com/600x400" class="img-fluid post-media" alt="App Development">
          <div class="post-actions">
            <a href="#" class="btn btn-like">Like</a>
            <a href="#" class="btn btn-comment">Comment</a>
            <a href="#" class="btn btn-share">Share</a>
          </div>
        </div>
      </div>

      <!-- Post 3 -->
      <div class="col-md-6 mb-4">
        <div class="post-card">
          <div class="post-author d-flex align-items-center">
            <img src="https://via.placeholder.com/50" alt="User Profile" class="rounded-circle me-3">
            <h5>John Doe</h5>
          </div>
          <p class="post-content">Great time at the tech conference last week! 💻 #Networking</p>
          <img src="https://via.placeholder.com/600x400" class="img-fluid post-media" alt="Tech Conference">
          <div class="post-actions">
            <a href="#" class="btn btn-like">Like</a>
            <a href="#" class="btn btn-comment">Comment</a>
            <a href="#" class="btn btn-share">Share</a>
          </div>
        </div>
      </div>

      <!-- Post 4 -->
      <div class="col-md-6 mb-4">
        <div class="post-card">
          <div class="post-author d-flex align-items-center">
            <img src="https://via.placeholder.com/50" alt="User Profile" class="rounded-circle me-3">
            <h5>John Doe</h5>
          </div>
          <p class="post-content">Sunday brunch with friends 🥂 #GoodVibes</p>
          <img src="https://via.placeholder.com/600x400" class="img-fluid post-media" alt="Brunch">
          <div class="post-actions">
            <a href="#" class="btn btn-like">Like</a>
            <a href="#" class="btn btn-comment">Comment</a>
            <a href="#" class="btn btn-share">Share</a>
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
