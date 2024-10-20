<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
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
    <h2>Edit Profile</h2>
    <p class="text-muted">Update your personal information and customize your profile.</p>
  </section>

  <!-- Edit Profile Form -->
  <section id="edit-profile-form">
    <form action="update-profile.php" method="post" enctype="multipart/form-data">
      <div class="row mb-4">
        <!-- Profile Picture Update -->
        <div class="col-md-4 text-center">
          <img src="https://via.placeholder.com/150" alt="Current Profile Picture" class="rounded-circle mb-3" id="profile-picture-preview">
          <div class="mb-3">
            <label for="profile-picture" class="form-label">Change Profile Picture</label>
            <input type="file" class="form-control" id="profile-picture" name="profile_picture" onchange="previewImage(event)">
          </div>
        </div>

        <!-- Form Fields -->
        <div class="col-md-8">
          <!-- Name Field -->
          <div class="mb-3">
            <label for="full-name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="full-name" name="full_name" value="John Doe">
          </div>

          <!-- Username Field -->
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="@johndoe">
          </div>

          <!-- Email Field -->
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" value="john@example.com">
          </div>

          <!-- Bio Field -->
          <div class="mb-3">
            <label for="bio" class="form-label">Bio</label>
            <textarea class="form-control" id="bio" name="bio" rows="3">Software Engineer | Tech Enthusiast | Traveler</textarea>
          </div>

          <!-- Website URL -->
          <div class="mb-3">
            <label for="website" class="form-label">Website</label>
            <input type="url" class="form-control" id="website" name="website" value="https://johndoe.dev">
          </div>
          
          <!-- Save Button -->
          <div class="text-end">
            <button type="submit" class="btn btn-primary">Save Changes</button>
          </div>
        </div>
      </div>
    </form>
  </section>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<script>
  // Image preview function for profile picture update
  function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
      const output = document.getElementById('profile-picture-preview');
      output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
  }
</script>

</body>
</html>
