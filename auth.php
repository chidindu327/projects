<?php
include "inc/dp.php";
    // Check if the form is submitted
    if (isset($_POST['login'])) {

        // Get the form data from the POST request
         $email_address = $_POST['email_address'];
         $password = $_POST['password'];

        // Query the database to find the user by email
       $sql = "SELECT * FROM users WHERE email_address='$email_address'";
        $result = $conn->query($sql);

        // Check if a user with that email exists
        if ($result->num_rows > 0) {
            // Fetch the user's data from the database
            $user = $result->fetch_assoc();

            // Verify if the entered password matches the password in the database
            if ($password == $user['password']) {
                // Store email in session
                $_SESSION['email_address'] = $user['email_address'];

                // Redirect the user to the homepage
                header("location: index.php");
                exit;
            } else {
                echo '<div class="alert alert-danger mt-3">Invalid password</div>';
            }
        } else {
            echo '<div class="alert alert-danger mt-3">No user found with that email</div>';
        }
    }
    ?>