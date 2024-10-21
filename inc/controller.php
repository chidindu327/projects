<?php

function fetchdata($query)
{
    //include db connection
    include "dp.php";
    // Execute query
    $result = $conn->query($query);

    // Initialize array for storing results
    $resultArray = [];

    if ($result && $result->num_rows > 0) {
        // Fetch all rows and store them in the array
        while ($row = $result->fetch_assoc()) {
            $resultArray[] = $row;
        }
    }
    // Close the connection
    $conn->close();

    return $resultArray;
}
function fetch($query)
{
    //include db connection
    include "dp.php";
    // Execute query
    $result = $conn->query($query);

    // Initialize array for storing results
    $resultArray = [];
    $row = $result->fetch_assoc();
    $resultArray[]= $row;
    // Close the connection

    return $resultArray;
}


// Function to execute an INSERT query
function execute($query) {
    //include db connection
    include "dp.php";

    // Execute the insert query
    if ($conn->query($query) === TRUE) {
        // Success message or return true
        return "Record inserted successfully";
    } else {
        // Error message or return false
        return "Error: " . $conn->error;
}
}

function timeAgo($datetime) {
    $time = strtotime($datetime);  // Convert the datetime to a Unix timestamp
    $time_difference = time() - $time;  // Calculate the difference between now and the datetime

    // Seconds conversion
    $seconds = $time_difference;
    $minutes = round($seconds / 60);
    $hours = round($seconds / 3600);
    $days = round($seconds / 86400);
    $weeks = round($seconds / 604800);
    $months = round($seconds / 2629440);
    $years = round($seconds / 31553280);

    // Return appropriate time ago string based on the difference
    if ($seconds <= 60) {
        return "Just now";
    } elseif ($minutes <= 60) {
        return $minutes == 1 ? "1 minute ago" : "$minutes minutes ago";
    } elseif ($hours <= 24) {
        return $hours == 1 ? "1 hour ago" : "$hours hours ago";
    } elseif ($days <= 7) {
        return $days == 1 ? "Yesterday" : "$days days ago";
    } elseif ($weeks <= 4.3) {  // 4.3 weeks per month
        return $weeks == 1 ? "1 week ago" : "$weeks weeks ago";
    } elseif ($months <= 12) {
        return $months == 1 ? "1 month ago" : "$months months ago";
    } else {
        return $years == 1 ? "1 year ago" : "$years years ago";
    }
}



