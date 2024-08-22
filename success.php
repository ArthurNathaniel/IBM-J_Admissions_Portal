<?php


// Clear the session variable after successful submission
unset($_SESSION['serial_number']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Successful</title>
    <link rel="stylesheet" href="styles.css"> <!-- Add your CSS file here -->
</head>
<body>
    <div class="container">
        <h1>Submission Successful</h1>
        <p>Thank you for submitting your application. Your data has been successfully recorded.</p>
        <a href="apply.php" class="btn">Submit Another Application</a>
        <a href="index.php" class="btn">Go to Home Page</a>
    </div>
</body>
</html>
