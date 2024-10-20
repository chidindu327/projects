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
            <h2>Create New Post</h2>
            <p class="text-muted">Share your thoughts, photos, or videos with your followers.</p>
            <a href="interests.php"><button class="btn btn-primary">Interest List</button></a>
        </section>

        <!-- New Post Form -->
        <section id="new-post">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form method="POST" enctype="multipart/form-data">
                        <!-- Post Content -->
                        <input type="hidden" name="username" value="<?php echo $username; ?>">
                        <div class="mb-3">
                            <label for="post-content" class="form-label">What's on your mind?</label>
                            <textarea class="form-control" id="poscontent" name="content" rows="4"
                                placeholder="Write something..." required></textarea>
                        </div>

                        <!-- Upload Image -->
                        <div class="mb-3">
                            <label for="post-image" class="form-label">Upload Image</label>
                            <input type="text" class="form-control" name="upload_photo">
                        </div>

                        <!-- Upload Video -->
                        <div class="mb-3">
                            <label for="post-video" class="form-label">Upload Video</label>
                            <input type="text" class="form-control" id="video" name="upload_video">
                        </div>
                        <!-- Post Category -->
                        <div class="mb-3">
                            <label for="post-category" class="form-label">Category</label>
                            <select class="form-select" id="post-category" name="category" required>
                                <option value="photography" selected>Photography</option>
                                <option value="travel">Travel</option>
                                <option value="foodandcooking">Food & Cooking</option>
                                <option value="fitness">Fitness</option>
                                <option value="music">Music/option>
                                <option value="technology">Technology</option>
                                <option value="fashion">Fashion</option>
                                <option value="art">Art</option>
                                <option value="gaming">Gaming</option>
                                <option value="books">Books</option>

                            </select>
                        </div>

                        <!-- Post Privacy -->
                        <div class="mb-3">
                            <label for="post-privacy" class="form-label">Privacy</label>
                            <select class="form-select" id="post-privacy" name="privacy" required>
                                <option value="public" selected>Public</option>
                                <option value="friends">Friends</option>
                                <option value="private">Only Me</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <input type="submit" name="post" placeholder="post" class="btn btn-primary">
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