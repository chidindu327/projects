<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feed</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style2.css"> <!-- Linking the external CSS file -->
</head>
<body>

<!-- Header Navbar -->
<?php include "inc/navbar.php"; ?>

<!-- Main Content -->
<div class="container mt-5">
  <!-- Page Title -->
  <section id="page-title" class="mb-5 text-center">
    <h2>News Feed</h2>
    <p class="text-muted">Explore posts, photos, and videos from your network.</p>
  </section>

  <!-- Feed Section -->
  <section id="feed">
    <div class="row">
      <!-- Entry 1 -->
      <div class="col-md-12 mb-4">
        <div class="post-card">
          <div class="post-author d-flex align-items-center">
            <img src="https://via.placeholder.com/50" alt="User 1" class="rounded-circle me-3">
            <h5>John Doe</h5>
          </div>
          <p class="post-content">Just went on a weekend getaway! 🏖️ #VacationVibes #Relaxation</p>
          <img src="https://via.placeholder.com/600x400" class="img-fluid post-media" alt="Vacation">
          <div class="post-actions">
            <a href="#" class="btn btn-like">Like</a>
            <a href="#" class="btn btn-comment">Comment</a>
            <a href="#" class="btn btn-share">Share</a>
          </div>
        </div>
      </div>

      <!-- Entry 2 -->
      <div class="col-md-12 mb-4">
        <div class="post-card">
          <div class="post-author d-flex align-items-center">
            <img src="https://via.placeholder.com/50" alt="User 2" class="rounded-circle me-3">
            <h5>Jane Smith</h5>
          </div>
          <p class="post-content">Excited to announce the launch of my new art gallery! 🎨 #ArtExhibition #GalleryOpening</p>
          <img src="https://via.placeholder.com/600x400" class="img-fluid post-media" alt="Art Exhibition">
          <div class="post-actions">
            <a href="#" class="btn btn-like">Like</a>
            <a href="#" class="btn btn-comment">Comment</a>
            <a href="#" class="btn btn-share">Share</a>
          </div>
        </div>
      </div>

      <!-- Entry 3 (Video) -->
      <div class="col-md-12 mb-4">
        <div class="post-card">
          <div class="post-author d-flex align-items-center">
            <img src="https://via.placeholder.com/50" alt="User 3" class="rounded-circle me-3">
            <h5>Michael Brown</h5>
          </div>
          <p class="post-content">Check out my latest workout routine! 🏋️‍♂️ #FitnessJourney</p>
          <video class="img-fluid post-media" controls>
            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="post-actions">
            <a href="#" class="btn btn-like">Like</a>
            <a href="#" class="btn btn-comment">Comment</a>
            <a href="#" class="btn btn-share">Share</a>
          </div>
        </div>
      </div>

      <!-- Entry 4 -->
      <div class="col-md-12 mb-4">
        <div class="post-card">
          <div class="post-author d-flex align-items-center">
            <img src="https://via.placeholder.com/50" alt="User 4" class="rounded-circle me-3">
            <h5>Emily Johnson</h5>
          </div>
          <p class="post-content">Enjoying a relaxing evening with my dog. 🐕 #PetLover #DogMom</p>
          <img src="https://via.placeholder.com/600x400" class="img-fluid post-media" alt="Evening with Dog">
          <div class="post-actions">
            <a href="#" class="btn btn-like">Like</a>
            <a href="#" class="btn btn-comment">Comment</a>
            <a href="#" class="btn btn-share">Share</a>
          </div>
        </div>
      </div>

      <!-- Entry 5 (Video) -->
      <div class="col-md-12 mb-4">
        <div class="post-card">
          <div class="post-author d-flex align-items-center">
            <img src="https://via.placeholder.com/50" alt="User 5" class="rounded-circle me-3">
            <h5>Chris Green</h5>
          </div>
          <p class="post-content">Watch my latest travel vlog! 🚗🌄 #RoadTrip #TravelVlog</p>
          <video class="img-fluid post-media" controls>
            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="post-actions">
            <a href="#" class="btn btn-like">Like</a>
            <a href="#" class="btn btn-comment">Comment</a>
            <a href="#" class="btn btn-share">Share</a>
          </div>
        </div>
      </div>

      <!-- Entry 6 -->
      <div class="col-md-12 mb-4">
        <div class="post-card">
          <div class="post-author d-flex align-items-center">
            <img src="https://via.placeholder.com/50" alt="User 6" class="rounded-circle me-3">
            <h5>Alice White</h5>
          </div>
          <p class="post-content">Just baked some fresh cookies! 🍪 #BakingLove #Cookies</p>
          <img src="https://via.placeholder.com/600x400" class="img-fluid post-media" alt="Cookies">
          <div class="post-actions">
            <a href="#" class="btn btn-like">Like</a>
            <a href="#" class="btn btn-comment">Comment</a>
            <a href="#" class="btn btn-share">Share</a>
          </div>
        </div>
      </div>

      <!-- Entry 7 -->
      <div class="col-md-12 mb-4">
        <div class="post-card">
          <div class="post-author d-flex align-items-center">
            <img src="https://via.placeholder.com/50" alt="User 7" class="rounded-circle me-3">
            <h5>Mark Lee</h5>
          </div>
          <p class="post-content">Had an awesome time at the gaming convention! 🎮 #GamerLife</p>
          <img src="https://via.placeholder.com/600x400" class="img-fluid post-media" alt="Gaming Convention">
          <div class="post-actions">
            <a href="#" class="btn btn-like">Like</a>
            <a href="#" class="btn btn-comment">Comment</a>
            <a href="#" class="btn btn-share">Share</a>
          </div>
        </div>
      </div>

      <!-- Entry 8 (Video) -->
      <div class="col-md-12 mb-4">
        <div class="post-card">
          <div class="post-author d-flex align-items-center">
            <img src="https://via.placeholder.com/50" alt="User 8" class="rounded-circle me-3">
            <h5>Sarah Adams</h5>
          </div>
          <p class="post-content">Here's a sneak peek of my new yoga routine. 🧘‍♀️ #YogaFlow</p>
          <video class="img-fluid post-media" controls>
            <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <div class="post-actions">
            <a href="#" class="btn btn-like">Like</a>
            <a href="#" class="btn btn-comment">Comment</a>
            <a href="#" class="btn btn-share">Share</a>
          </div>
        </div>
      </div>

      <!-- Entry 9 -->
      <div class="col-md-12 mb-4">
        <div class="post-card">
          <div class="post-author d-flex align-items-center">
            <img src="https://via.placeholder.com/50" alt="User 9" class="rounded-circle me-3">
            <h5>David Wright</h5>
          </div>
          <p class="post-content">Exploring the local art fair today! 🎨 #ArtFair #Inspiration</p>
          <img src="https://via.placeholder.com/600x400" class="img-fluid post-media" alt="Art Fair">
          <div class="post-actions">
            <a href="#" class="btn btn-like">Like</a>
            <a href="#" class="btn btn-comment">Comment</a>
            <a href="#" class="btn btn-share">Share</a>
          </div>
        </div>
      </div>

      <!-- Entry 10 -->
      <div class="col-md-12 mb-4">
        <div class="post-card">
          <div class="post-author d-flex align-items-center">
            <img src="https://via.placeholder.com/50" alt="User 10" class="rounded-circle me-3">
            <h5>Emily Clark</h5>
          </div>
          <p class="post-content">Just got a new camera! 📸 Check out this shot I took. #Photography #NewGear</p>
          <img src="https://via.placeholder.com/600x400" class="img-fluid post-media" alt="New Camera Shot">
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
