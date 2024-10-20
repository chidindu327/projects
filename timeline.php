<?php 
session_start();
include "inc/user_data.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Timeline - Instagram</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Header Navbar -->
<?php include "inc/navbar.php"; ?>

<!-- Main Content -->
<div class="container mt-5">
  <!-- User Info Section -->
  <section id="user-info" class="mb-5">
    <div class="text-center mb-4">
      <?php
     $sql = "SELECT users.*,random_numbers_table.* from users,random_numbers_table WHERE users.num_id=random_numbers_table.num_id;"
      ?>
      <h2>Welcome Back, [<?php echo $fullname;   ?>]!</h2>
      <p>Here’s what’s happening in your world.</p>
    </div>
  </section>

  <!-- Social Connections Section -->
  <section id="social-connections" class="mb-5">
    <h2 class="text-center mb-4">Social Connections</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">People You May Know</h5>
            <p class="card-text">Connect with new friends and expand your social circle.</p>
            <a href="people_you_may_know.php" class="btn btn-primary">View Suggestions</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Follow Your Interests</h5>
            <p class="card-text">Discover new accounts and hashtags that align with your interests.</p>
            <a href="interests.php" class="btn btn-success">Explore Topics</a>
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
            <h5 class="card-title">Create a New Post</h5>
            <p class="card-text">Share your latest moments with your followers.</p>
            <a href="post.php" class="btn btn-warning">Create Post</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Engage with Friends</h5>
            <p class="card-text">Like and comment on posts to keep the conversation flowing.</p>
            <a href="feed.php" class="btn btn-info">View Feed</a>
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
            <h5 class="card-title">Your Direct Messages</h5>
            <p class="card-text">Chat privately with friends or start group conversations.</p>
            <a href="messages.php" class="btn btn-primary">Open Messages</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Friends Section -->
  <section id="friends" class="mb-5">
    <h2 class="text-center mb-4">Friends</h2>
    <div class="row">
      <div class="col-md-12">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Your Friends</h5>
            <p class="card-text">Chat privately with friends or start group conversations.</p>
            <a href="friends.php" class="btn btn-primary">See Friends</a>
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
            <h5 class="card-title">Recent Notifications</h5>
            <p class="card-text">Stay updated with likes, comments, and new followers.</p>
            <a href="notifications.php" class="btn btn-danger">View Notifications</a>
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
