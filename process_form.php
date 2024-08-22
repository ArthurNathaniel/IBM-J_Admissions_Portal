<?php
include 'db.php';

// Collect form data
$profile_image = $_FILES['profile_image']['name'];
$programmeCourseChosen = $_POST['programmeCourseChosen'];
$title = $_POST['title'];
$surname = $_POST['surname'];
$otherNames = $_POST['otherNames'];
$firstName = $_POST['firstName'];
$postalAddress = $_POST['postalAddress'];
$residentialAddress = $_POST['residentialAddress'];
$gender = $_POST['gender'];
$dateOfBirth = $_POST['dateOfBirth'];
$placeOfBirth = $_POST['placeOfBirth'];
$nationality = $_POST['nationality'];
$religion = $_POST['religion'];
$hometown = $_POST['hometown'];
$maritalStatus = $_POST['maritalStatus'];
$numberOfChildren = $_POST['numberOfChildren'];
$id_card = $_POST['id_card'];
$id_number = $_POST['id_number'];
$digitalAddressCode = $_POST['digitalAddressCode'];
$phoneNumber = $_POST['phoneNumber'];
$emailAddress = $_POST['emailAddress'];
$has_medical_history = $_POST['has_medical_history'];
$medical_history_file = $_FILES['medical_history_file']['name'];
$id_document = $_FILES['id_document']['name'];

$parentName = $_POST['parentName'];
$relationship = $_POST['relationship'];
$parentTel = $_POST['parentTel'];
$parentEmail = $_POST['parentEmail'];
$parentPostalAddress = $_POST['parentPostalAddress'];
$parentResidentialAddress = $_POST['parentResidentialAddress'];
$parentOccupation = $_POST['parentOccupation'];
$parentDigitalAddress = $_POST['parentDigitalAddress'];

// Save files to the server
move_uploaded_file($_FILES['profile_image']['tmp_name'], 'uploads/' . $profile_image);
move_uploaded_file($_FILES['medical_history_file']['tmp_name'], 'uploads/' . $medical_history_file);
move_uploaded_file($_FILES['id_document']['tmp_name'], 'uploads/' . $id_document);

// Insert data into the database
$sql = "INSERT INTO admissions (profile_image, programmeCourseChosen, title, surname, otherNames, firstName, postalAddress, residentialAddress, gender, dateOfBirth, placeOfBirth, nationality, religion, hometown, maritalStatus, numberOfChildren, id_card, id_number, digitalAddressCode, phoneNumber, emailAddress, has_medical_history, medical_history_file, parentName, relationship, parentTel, parentEmail, parentPostalAddress, parentResidentialAddress, parentOccupation, parentDigitalAddress, id_document) 
        VALUES ('$profile_image', '$programmeCourseChosen', '$title', '$surname', '$otherNames', '$firstName', '$postalAddress', '$residentialAddress', '$gender', '$dateOfBirth', '$placeOfBirth', '$nationality', '$religion', '$hometown', '$maritalStatus', '$numberOfChildren', '$id_card', '$id_number', '$digitalAddressCode', '$phoneNumber', '$emailAddress', '$has_medical_history', '$medical_history_file', '$parentName', '$relationship', '$parentTel', '$parentEmail', '$parentPostalAddress', '$parentResidentialAddress', '$parentOccupation', '$parentDigitalAddress', '$id_document')";

if (mysqli_query($conn, $sql)) {
    // Get the ID of the newly inserted record
    $admissions_id = mysqli_insert_id($conn);
    
    // Redirect to educational_data.php with the admissions_id
    header("Location: educational_data.php?admissions_id=$admissions_id");
    exit(); // Ensure no further code is executed
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
