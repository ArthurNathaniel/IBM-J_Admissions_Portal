<?php
include 'db.php';

// Collect form data
$admissions_id = $_POST['admissions_id'] ?? null;

if (!$admissions_id) {
    die('No admissions_id provided');
}

// Check if admissions_id exists
$check_sql = "SELECT COUNT(*) FROM admissions WHERE id = '$admissions_id'";
$result = mysqli_query($conn, $check_sql);
$row = mysqli_fetch_array($result);

if ($row[0] == 0) {
    die('The admissions_id does not exist');
}

$schoolNames = $_POST['schoolName'] ?? [];
$attendanceFroms = $_POST['attendanceFrom'] ?? [];
$attendanceTos = $_POST['attendanceTo'] ?? [];
$officesHeld = $_POST['officeHeld'] ?? [];
$results = $_FILES['results']['name'] ?? [];

// Process each row
foreach ($schoolNames as $index => $schoolName) {
    $attendanceFrom = $attendanceFroms[$index] ?? '';
    $attendanceTo = $attendanceTos[$index] ?? '';
    $officeHeld = $officesHeld[$index] ?? '';
    $result = $results[$index] ?? '';

    // Handle file upload
    if (!empty($result)) {
        $uploadPath = 'uploads/' . basename($result);
        if (!move_uploaded_file($_FILES['results']['tmp_name'][$index], $uploadPath)) {
            echo "Error uploading file: " . $result . "<br>";
        }
    }

    // SQL query
    $sql = "INSERT INTO educational_data 
            (admissions_id, school_name, attendance_from, attendance_to, office_held, result) 
            VALUES 
            ('$admissions_id', '$schoolName', '$attendanceFrom', '$attendanceTo', '$officeHeld', '$result')";

    // Execute query and check for errors
    if (!mysqli_query($conn, $sql)) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the connection
mysqli_close($conn);

// Redirect to a page to view details
header("Location: view_details.php?admissions_id=$admissions_id");
exit();
?>
