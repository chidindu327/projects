<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Social Network</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<!-- Header Navbar -->
<?php
include "inc/navbar.php";
?>
<!-- Main Content -->
<div class="container mt-5">
  <!-- Social Connections Section -->
  <section id="social-connections" class="mb-5">
    <h2 class="text-center mb-4">Social Connections</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Find Friends</h5>
            <p class="card-text">Discover people you may know, and make new connections easily.</p>
            <a href="friends.php" class="btn btn-primary">Explore Connections</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Groups & Communities</h5>
            <p class="card-text">Join communities of like-minded people and engage in meaningful discussions.</p>
            <a href="" class="btn btn-success">Discover Groups</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Content Creation & Interaction Section -->
  <section id="content-creation" class="mb-5">
    <h2 class="text-center mb-4">Content Creation & Interaction</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Create & Share Content</h5>
            <p class="card-text">Post updates, share photos, and engage with your audience in real time.</p>
            <a href="post.php" class="btn btn-warning">Create Post</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Like, Comment & Share</h5>
            <p class="card-text">Interact with others by liking, commenting, and sharing their content.</p>
            <a href="#" class="btn btn-info">View Feed</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Messaging Section -->
  <section id="messaging" class="mb-5">
    <h2 class="text-center mb-4">Messaging</h2>
    <div class="row">
      <div class="col-md-12">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Stay Connected through Messaging</h5>
            <p class="card-text">Chat with your friends, start group conversations, and stay in touch seamlessly.</p>
            <a href="messages.php" class="btn btn-primary">Open Messages</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Notifications Section -->
  <section id="notifications" class="mb-5">
    <h2 class="text-center mb-4">Notifications</h2>
    <div class="row">
      <div class="col-md-12">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Stay Updated</h5>
            <p class="card-text">Get notified about new friend requests, messages, and activity on your posts.</p>
            <a href="notifications.php" class="btn btn-danger">View Notifications</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
