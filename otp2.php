<?php
include "inc/dp.php";

// Generate random numbers and handle form submission
$random_numbers = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Generate 6 random numbers
    for ($i = 0; $i < 6; $i++) {
        $random_numbers[] = rand(1, 9); // Random numbers between 1 and 9
    }
    
    // Convert the array of random numbers into a string to insert into the database
    $numbers_string = implode(",", $random_numbers);

    // Insert random numbers into the database
    $sql = "INSERT INTO random_numbers_table (numbers) VALUES ('$numbers_string')";

    if ($conn->query($sql) === TRUE) {
        echo "Numbers inserted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Random Numbers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>

  </style>
</head>
<body>
<div class="container-fluid" style="text-align: center;">
<h2>Generate Your OTP</h2>

<form method="POST">
    <button type="submit">Generate Random Numbers</button>
</form>

<?php if (!empty($random_numbers)) : ?>
    <h3>Generated Numbers:</h3>
    <p>Check your alert box for the generated numbers.</p>

    <!-- JavaScript alert to show the random numbers and redirect to another page -->
    <script>
        alert("Generated Numbers: <?php echo implode(", ", $random_numbers); ?>");
        window.location.href = "otplog.php"; // Redirect to another page after the alert
    </script>
<?php endif; ?>
</div>
</body>
</html>
