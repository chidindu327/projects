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
    <title>Create New Post</title>
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
            <h2><?php echo $_GET['fullname'];?></h2>
            <p class="text-muted">Share your thoughts, photos, or videos with your followers.</p>
            <a href="messages.php"><button class="btn btn-primary">friends List</button></a>
        </section>

        <!-- New Post Form -->
        <section id="new-post">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form method="POST" enctype="multipart/form-data">
                        <!-- Post Content -->
                        <input type="hidden" name="to_you" value="<?php echo $_GET['username']; ?>">
                        <input type="hidden" name="from_me" value="<?php echo $username; ?>">
                        <div class="mb-3">
                            <label for="post-content" class="form-label">What's on your mind?</label>
                            <textarea class="form-control" id="poscontent" name="content" rows="4"
                                placeholder="Write something..." required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <input type="submit" name="send_message" placeholder="send_message" value="send message" class="btn btn-primary">
                            <a href="timeline.php" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                    </form>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <?php
                    if (isset($_POST['post'])) {
                        // Get the form data from the POST request
                        @$username = $_POST['username'];
                        @$content = $_POST['content'];
                        @$upload_photo = $_POST['upload_photo'];
                        @$category = $_POST['category'];
                        @$upload_video = $_POST['upload_video'];
                        @$privacy = $_POST['privacy'];
                        @$status = $_POST['status'];
                        @$notification = $_POST['notification'];

                        $sql = "INSERT INTO `post` (`id`, `username`, `content`, `upload_photo`, `category`, `upload_video`, `privacy`, `status`, `notification`) 
                        VALUES (NULL, '$username', '$content', '$upload_photo', '$category', '$upload_video', '$privacy', '$status', 'no');";

                        if (execute($sql)) {
                            echo "<div class='alert alert-success'>Post is added successfully!</div>";
                        } else {
                            echo "<div class='alert alert-danger'>Error adding Post. Please try again.</div>";
                        }
                    }
                    ?>
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