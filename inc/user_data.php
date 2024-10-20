<?php

if (session_status() == PHP_SESSION_ACTIVE) {

    $fullname =  $_SESSION['full_name'];
    $username =  $_SESSION['username'];
    $email_address =  $_SESSION['email_address'];
} else {
    // echo '<script>window.location.href="login.php"</script>';
}

// echo'<script>window.location.href="login.php"</script>';
//check if session is active
