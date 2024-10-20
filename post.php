<?php
session_start();
include "inc/controller.php";
include "inc/user_data.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Posts</title>
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
    <h2>Recent Posts</h2>
    <p class="text-muted">See what people are sharing today!</p>
    <a href="new_post.php"><button class="btn btn-primary">Make a Post</button></a>
  </section>

  <!-- Posts Section -->
  <section id="posts">
    <div class="row">
      <!-- Post 1 -->
     <?php
     $sql = "SELECT * FROM post where username='$username' order by id desc";
$result = fetchdata($sql);
foreach ($result as $row) {
     ?>
     
      <div class="col-md-12 mb-4">
        <div class="post-card">
          <div class="post-author d-flex align-items-center"  style="height: 30px;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJTC5RG85M6nIUqwll7EDG-CJmr1IgmX0V3Q&s"  alt="John Doe" class="rounded-circle me-3" style="height: 30px;">
            <h5><?php echo $row['username'];?></h5>
          </div>
          <p class="post-content"><?php echo $row['content']; ?></p>
          <img src="<?php echo $row['upload_video'];?>" style="height: 400px;" class="img-fluid post-media" alt="City Adventure">
          <div class="post-actions">
            <a href="#" class="btn btn-like">Like</a>
            <a href="#" class="btn btn-comment">Comment</a>
            <a href="#" class="btn btn-share">Share</a>
          </div>
        </div>
      </div>
<?php
}
?>

  </section>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
