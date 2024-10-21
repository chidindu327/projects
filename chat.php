<?php
session_start();  // Start the session to maintain user sessions
include "inc/user_data.php";  // Include user data, possibly for session-based data or user information
include "inc/controller.php";  // Include controller, likely for database connections or other logic
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">  <!-- Set character encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- Make page responsive on mobile devices -->
    <title>Create New Post</title>  <!-- Page title -->

    <!-- Bootstrap CSS for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Link to custom external CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Header Navbar -->
    <?php include "inc/navbar.php";  // Include the navigation bar at the top ?>

    <!-- Main Content Container -->
    <div class="container mt-5">

        <!-- Page Title and Subtitle -->
        <section id="page-title" class="mb-5 text-center">
            <h2><?php echo $_GET['fullname']; ?></h2>  <!-- Display the full name from the URL parameter -->
            <p class="text-muted">Share your thoughts, photos, or videos with your followers.</p>
            <a href="messages.php"><button class="btn btn-primary">Friends List</button></a>
        </section>

        <!-- Display Chat Messages -->
        <section class="mb-5 text-center">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    // Retrieve and display chat messages between the logged-in user and the selected friend
                    $to_me = $_GET['username'];  // Get the friend's username from the URL
                    // SQL query to fetch messages where the user is either the sender or receiver
                    $sql = "SELECT * FROM chat WHERE (from_me = '$username' OR to_you = '$to_me') 
                             OR (to_you = '$username' OR from_me = '$to_me')";
                    $result = fetchdata($sql);  // Fetch data using the predefined fetchdata function

                    // Loop through each chat message and display it
                    foreach ($result as $row) {
                    ?>
                        <div class="message-card d-flex align-items-center">
                            <!-- Display profile image placeholder -->
                            <img src="https://via.placeholder.com/50" alt="User 1" class="rounded-circle me-3">
                            <div class="message-content">
                                <h5><?php echo $row['sender']; ?></h5>  <!-- Display sender's name -->
                                <p><?php echo $row['message']; ?></p>  <!-- Display the message content -->
                                <span class="text-muted"><?php echo timeAgo($row['created_at']); ?></span>  <!-- Display time ago -->
                            </div>
                        </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </section>

        <!-- Form for Sending a New Message -->
        <section id="new-post">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <?php
                    // Check if the send message form has been submitted
                    if (isset($_POST['send_message'])) {
                        // Retrieve form data from POST request
                        @$from_me = $_POST['from_me'];
                        @$to_you = $_POST['to_you'];
                        @$message = $_POST['message'];
                        @$sender = $_POST['from_me'];
                        @$notifications = "no";  // Default value for notifications

                        // SQL query to insert the new message into the chat table
                        $sql = "INSERT INTO `chat` (`id`, `from_me`, `to_you`, `message`, `notifications`, `sender`)
                                VALUES (NULL, '$from_me', '$to_you', '$message', '$notifications', '$sender')";

                        // Execute the query and check if the message was sent successfully
                        if (execute($sql)) {
                            echo "<div class='alert alert-success'>Message sent!</div>";
                        } else {
                            echo "<div class='alert alert-danger'>Error sending message. Please try again.</div>";
                        }
                    }
                    ?>

                    <!-- New Message Form -->
                    <form method="POST" enctype="multipart/form-data">
                        <!-- Hidden fields to store sender and receiver info -->
                        <input type="hidden" name="from_me" value="<?php echo $username; ?>">
                        <input type="hidden" name="to_you" value="<?php echo $_GET['username']; ?>">
                        
                        <!-- Textarea for message content -->
                        <div class="mb-3">
                            <label for="post-content" class="form-label">What's on your mind?</label>
                            <textarea class="form-control" name="message" rows="4" placeholder="Write something..." required></textarea>
                        </div>

                        <!-- Submit and Cancel buttons -->
                        <div class="text-center">
                            <input type="submit" name="send_message" value="Send Message" class="btn btn-primary">
                            <a href="timeline.php" class="btn btn-outline-secondary">Cancel</a>
                        </div>
                    </form>

                </div>
            </div>
        </section>

    </div>

    <!-- Bootstrap JavaScript and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Bootstrap Icons CDN for optional icon support -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>

</html>
