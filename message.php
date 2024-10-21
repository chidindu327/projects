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
        <!-- Page Title in a Card -->
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h2><?php echo $_GET['fullname']; ?></h2>
                    </div>
                    <div class="card-body">
                        <?php
                            $sql = "SELECT * FROM chat";
                            $result = fetchdata($sql);
                            foreach ($result as $row) {
                        ?>
                        <h5 class="text-muted"><?php echo $row['message']; ?></h5>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- New Post Form in a Card -->
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h5>Create a New Post</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data">
                            <!-- Post Content -->
                            <input type="hidden" name="to_you" value="<?php echo $_GET['username']; ?>">
                            <input type="hidden" name="from_me" value="<?php echo $username; ?>">
                            <div class="mb-3">
                                <label for="post-content" class="form-label">What's on your mind?</label>
                                <textarea class="form-control" name="message" rows="4" placeholder="Write something..." required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <input type="submit" name="send_message" value="Send Message" class="btn btn-primary">
                                <a href="timeline.php" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </form>

                        <?php
                        if (isset($_POST['send_message'])) {
                            // Get the form data from the POST request
                            @$from_me = $_POST['from_me'];
                            @$to_you = $_POST['to_you'];
                            @$message = $_POST['message'];

                            $sql = "INSERT INTO `chat` (`from_me`, `to_you`, `message`, `created_at`)
                             VALUES ('$from_me', '$to_you', '$message', current_timestamp())";

                            if (execute($sql)) {
                                echo "<div class='alert alert-success mt-3'>Post is added successfully!</div>";
                            } else {
                                echo "<div class='alert alert-danger mt-3'>Error adding Post. Please try again.</div>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>
