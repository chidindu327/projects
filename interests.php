<?php
include "inc/controller.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Interests</title>
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
      <h2>Your Interests</h2>
      <p class="text-muted">Explore topics and hobbies that match your preferences.</p>
      <a href="add_interest.php"><button class="btn btn-success">Add Interests</button></a>
    </section>

    <!-- Interests Section -->
    <section id="interests">
      <div class="row">
        <?php
        $sql = "SELECT * FROM interests order by id desc";
        $result = fetchdata($sql);
        foreach ($result as $row) {
        ?>
          <!-- Interest 1 -->
          <div class="col-md-4 mb-4">
            <div class="profile-card">
              <img src="<?php echo $row['image']; ?>" alt="Photography">
              <h5><?php echo $row['title']; ?></h5>
              <p><?php echo $row['description'];?></p>
              <a href="#" class="btn btn-follow">Explore</a>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    </section>
  </div>

  <!-- Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap Icons CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>