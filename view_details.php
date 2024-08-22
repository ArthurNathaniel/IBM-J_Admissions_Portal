<?php
include 'db.php';

$admissions_id = $_GET['admissions_id'] ?? null;

if (!$admissions_id) {
    die('No admissions_id provided');
}

// Fetch admissions details
$admissions_query = "SELECT * FROM admissions WHERE id = '$admissions_id'";
$admissions_result = mysqli_query($conn, $admissions_query);
$admissions = mysqli_fetch_assoc($admissions_result);

if (!$admissions) {
    die('No admissions record found');
}

// Fetch educational data
$education_query = "SELECT * FROM educational_data WHERE admissions_id = '$admissions_id'";
$education_result = mysqli_query($conn, $education_query);

// Close the connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Details</title>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/view_details.css">
    <style>
       
    </style>
    <script>
        function printPage() {
            window.print();
        }
    </script>
</head>
<body class="all">
    <div class="logo"></div>
    <h1>Preview Admission</h1>


    <p><strong>Profile Image:</strong> 
        <?php if (!empty($admissions['profile_image'])): ?>
            <img src="uploads/<?php echo htmlspecialchars($admissions['profile_image']); ?>" alt="Profile Image" width="100">
        <?php else: ?>
            No profile image available.
        <?php endif; ?>
    </p>
    <p><strong>Programme/Course Chosen:</strong> <?php echo htmlspecialchars($admissions['programmeCourseChosen']); ?></p>
    <p><strong>Title:</strong> <?php echo htmlspecialchars($admissions['title']); ?></p>
    <p><strong>Surname:</strong> <?php echo htmlspecialchars($admissions['surname']); ?></p>
    <p><strong>Other Names:</strong> <?php echo htmlspecialchars($admissions['otherNames']); ?></p>
    <p><strong>First Name:</strong> <?php echo htmlspecialchars($admissions['firstName']); ?></p>
    <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($admissions['dateOfBirth']); ?></p>
    <p><strong>Gender:</strong> <?php echo htmlspecialchars($admissions['gender']); ?></p>
    <p><strong>Email Address:</strong> <?php echo htmlspecialchars($admissions['emailAddress']); ?></p>
    <p><strong>Phone Number:</strong> <?php echo htmlspecialchars($admissions['phoneNumber']); ?></p>
    <p><strong>Residential Address:</strong> <?php echo htmlspecialchars($admissions['residentialAddress']); ?></p>
    <p><strong>Postal Address:</strong> <?php echo htmlspecialchars($admissions['postalAddress']); ?></p>
    <p><strong>Place of Birth:</strong> <?php echo htmlspecialchars($admissions['placeOfBirth']); ?></p>
    <p><strong>Nationality:</strong> <?php echo htmlspecialchars($admissions['nationality']); ?></p>
    <p><strong>Religion:</strong> <?php echo htmlspecialchars($admissions['religion']); ?></p>
    <p><strong>Hometown:</strong> <?php echo htmlspecialchars($admissions['hometown']); ?></p>
    <p><strong>Marital Status:</strong> <?php echo htmlspecialchars($admissions['maritalStatus']); ?></p>
    <p><strong>Number of Children:</strong> <?php echo htmlspecialchars($admissions['numberOfChildren']); ?></p>
    <p><strong>ID Card:</strong> <?php echo htmlspecialchars($admissions['id_card']); ?></p>
    <p><strong>ID Number:</strong> <?php echo htmlspecialchars($admissions['id_number']); ?></p>
    <p><strong>ID Document Image:</strong> 
        <?php if (!empty($admissions['id_document'])): ?>
            <a href="uploads/<?php echo htmlspecialchars($admissions['id_document']); ?>" target="_blank">View ID Images</a>
        <?php else: ?>
            No medical history file available.
        <?php endif; ?>
    </p>
    <p><strong>Digital Address Code:</strong> <?php echo htmlspecialchars($admissions['digitalAddressCode']); ?></p>
    <p><strong>Has Medical History:</strong> <?php echo htmlspecialchars($admissions['has_medical_history']); ?></p>
    <p><strong>Medical History File:</strong> 
        <?php if (!empty($admissions['medical_history_file'])): ?>
            <a href="uploads/<?php echo htmlspecialchars($admissions['medical_history_file']); ?>" target="_blank">View Medical History</a>
        <?php else: ?>
            No medical history file available.
        <?php endif; ?>
    </p>
    <h2>Parent/ Guardian </h2>
    <p><strong>Parent Name:</strong> <?php echo htmlspecialchars($admissions['parentName']); ?></p>
    <p><strong>Relationship with Parent:</strong> <?php echo htmlspecialchars($admissions['relationship']); ?></p>
    <p><strong>Parent Phone:</strong> <?php echo htmlspecialchars($admissions['parentTel']); ?></p>
    <p><strong>Parent Email:</strong> <?php echo htmlspecialchars($admissions['parentEmail']); ?></p>
    <p><strong>Parent Postal Address:</strong> <?php echo htmlspecialchars($admissions['parentPostalAddress']); ?></p>
    <p><strong>Parent Residential Address:</strong> <?php echo htmlspecialchars($admissions['parentResidentialAddress']); ?></p>
    <p><strong>Parent Occupation:</strong> <?php echo htmlspecialchars($admissions['parentOccupation']); ?></p>
    <p><strong>Parent Digital Address:</strong> <?php echo htmlspecialchars($admissions['parentDigitalAddress']); ?></p>

    <h2>Educational Data</h2>
    <?php if (mysqli_num_rows($education_result) > 0): ?>
        <?php while ($education = mysqli_fetch_assoc($education_result)): ?>
            <div>
                <p><strong>School/Institution:</strong> <?php echo htmlspecialchars($education['school_name']); ?></p>
                <p><strong>Attendance From:</strong> <?php echo htmlspecialchars($education['attendance_from']); ?></p>
                <p><strong>Attendance To:</strong> <?php echo htmlspecialchars($education['attendance_to']); ?></p>
                <p><strong>Office Held:</strong> <?php echo htmlspecialchars($education['office_held']); ?></p>
                <p><strong>Result:</strong> 
                    <?php if (!empty($education['result'])): ?>
                        <a href="uploads/<?php echo htmlspecialchars($education['result']); ?>" target="_blank">View Result</a>
                    <?php else: ?>
                        No result available.
                    <?php endif; ?>
                </p>
                <hr>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>No educational data found.</p>
    <?php endif; ?>

    <button class="print-button" onclick="printPage()">Print</button>


</body>
</html>
