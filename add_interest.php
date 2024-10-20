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
    <title>Create New Interest</title>
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
            <h2>Create New Interest</h2>
            <p class="text-muted">Share your thoughts, photos, or videos with your followers.</p>
        </section>

        <!-- New Post Form -->
        <section id="new-post">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form method="POST" enctype="multipart/form-data">
                        <!-- Post Content -->
                        <div class="mb-3">
                            <label for="post-content" class="form-label">Interest description</label>
                            <textarea class="form-control" id="poscontent" name="description" rows="4"
                                placeholder="Write something..." required></textarea required>
                        </div>

                        <!-- Upload Image -->
                        <div class="mb-3">
                            <label for="post-image" class="form-label">Image</label>
                            <input type="text" class="form-control" name="image" required>
                        </div>

                        <!-- Upload Video -->
                        <div class="mb-3">
                            <label for="post-video" class="form-label">Interest Title</label >
                            <input type="text" class="form-control" id="video" name="title" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <input type="submit" name="post" placeholder="post" class="btn btn-primary">
                            <a href="" class="btn btn-outline-secondary">Cancel</a>
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
                        @$title = $_POST['title'];
                        @$description = $_POST['description'];
                        @$image = $_POST['image'];

                        $sql = "INSERT INTO `interests` (`id`, `title`, `description`, `image`) VALUES (NULL,'$title', '$description', '$image');";

                        if (execute($sql)) {
                            echo "<div class='alert alert-success'>Interest is added successfully!</div>";
                        } else {
                            echo "<div class='alert alert-danger'>Error adding Interest. Please try again.</div>";
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