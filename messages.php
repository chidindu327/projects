<?php
session_start();
include "inc/user_data.php";
include "inc/controller.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Messages</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style2.css"> <!-- Linking the external CSS file -->
</head>
<body>

<!-- Header Navbar -->
<?php include "inc/navbar.php";?>

<!-- Main Content -->
<div class="container mt-5">
  <!-- Page Title -->
  <section id="page-title" class="mb-5 text-center">
    <h2>Messages</h2>
    <p class="text-muted">Connect and chat with your friends!</p>
  </section>

  <!-- Messages Section -->
  <section id="messages">
    <div class="row">  
    <!-- Message Entry 1 -->
     <?php
     $sql = "SELECT * FROM users where username!='$username'" ;
     $result = fetchdata($sql);
     foreach ($result as $row) { 
     ?>
      <div class="col-md-12 mb-4">
        <div class="message-card d-flex align-items-center">
          <img src="https://via.placeholder.com/50" alt="User 1" class="rounded-circle me-3">
          <div class="message-content">
            <a href="chat.php?username=<?php echo $row['username'];?>&&fullname=<?php echo $row['full_name'];?>"><h5><?php echo $row['full_name'];?></h5></a>
            <p><?php echo $row['message'];?></p>
            <span class="text-muted">2 mins ago</span>
          </div>
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
