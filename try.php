<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <?php include 'cdn.php'; ?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/admissions.css">
    <style>
        .welcome-message {
            text-align: center;
        }

        .logo {
            text-align: center;
            margin: auto;
            height: 200px;
            width: 200px;
            margin-bottom: 50px;
        }

        .admissions_forms {
            padding: 0 5%;
        }
    </style>
</head>

<body class="admissions_forms">
    <div class="logo"></div>

    <form method="post" enctype="multipart/form-data" action="process_form.php">
        <!-- Step 1: Personal Data -->
        <div class="form-step form-step-active">
            <h2>Personal Data</h2>
            <div class="forms_group">
                <div class="forms">
                    <label for="profile_image">Upload Profile Image:</label>
                    <input type="file" id="profile_image" name="profile_image" accept=".jpg, .jpeg, .png" required>
                </div>
                <div class="forms">
                    <label for="programmeCourseChosen">PROGRAMME/COURSE CHOSEN:</label>
                    <select id="programmeCourseChosen" name="programmeCourseChosen">
                        <option value="" selected hidden>Select the programme/course</option>
                        <optgroup label="HND COURSES: 3 YEARS">
                            <option value="communication">Communication</option>
                            <option value="marketing">Marketing</option>
                            <option value="public_relations">Public Relations</option>
                            <option value="journalism">Journalism</option>
                        </optgroup>
                        <optgroup label="DIPLOMA COURSES: 2 YEARS">
                            <option value="diploma_journalism">Journalism</option>
                            <option value="diploma_marketing">Marketing</option>
                            <option value="diploma_public_relations">Public Relations</option>
                        </optgroup>
                        <optgroup label="CERTIFICATE COURSES: 6 MONTHS">
                            <option value="script_writing">Script Writing</option>
                            <option value="photography">Photography</option>
                            <option value="film_editing">Film Editing</option>
                            <option value="film_acting_directing">Film Acting & Directing</option>
                            <option value="graphic_designing">Graphic Designing</option>
                        </optgroup>
                    </select>
                </div>

                <div class="forms">
                    <label for="title">Select a title:</label>
                    <select id="title" name="title" required>
                        <option value="" selected hidden>Select a title</option>
                        <option value="mr">Mr.</option>
                        <option value="mrs">Mrs.</option>
                        <option value="ms">Ms.</option>
                        <option value="rev">Rev.</option>
                    </select>
                </div>

                <div class="forms">
                    <label for="surname">Surname:</label>
                    <input type="text" id="surname" name="surname" required>
                </div>

                <div class="forms">
                    <label for="otherNames">Other Name(s):</label>
                    <input type="text" id="otherNames" name="otherNames">
                </div>

                <div class="forms">
                    <label for="firstName">First Name:</label>
                    <input type="text" id="firstName" name="firstName" required>
                </div>

                <div class="forms">
                    <label for="postalAddress">Postal Address:</label>
                    <input type="text" id="postalAddress" name="postalAddress" required>
                </div>

                <div class="forms">
                    <label for="residentialAddress">Residential Address/Hse No.:</label>
                    <input type="text" id="residentialAddress" name="residentialAddress" required>
                </div>

                <div class="forms">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="" selected hidden>Select gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class="forms">
                    <label for="dateOfBirth">Date of Birth:</label>
                    <input type="date" id="dateOfBirth" name="dateOfBirth" required>
                </div>

                <div class="forms">
                    <label for="placeOfBirth">Place of Birth:</label>
                    <input type="text" id="placeOfBirth" name="placeOfBirth" required>
                </div>

                <div class="forms">
                    <label for="nationality">Nationality:</label>
                    <select name="nationality" id="nationality" required>
                        <option value="" selected hidden>Select your nationality</option>
                        <option value="ghanaian">Ghanaian</option>
                        <option value="non_ghanaian">Non-Ghanaian</option>
                    </select>
                </div>

                <div class="forms">
                    <label for="religion">Select Your Religious Denomination:</label>
                    <select id="religion" name="religion">
                        <option value="" selected hidden>Select your religious denomination</option>
                        <option value="christian">Christian</option>
                        <option value="islam">Islam</option>
                        <option value="traditional">Traditional </option>
                        <option value="no_religion">Non-religious</option>
                    </select>
                </div>

                <div class="forms">
                    <label for="hometown">Hometown:</label>
                    <input type="text" id="hometown" name="hometown" required>
                </div>

                <div class="forms">
                    <label for="maritalStatus">Marital Status:</label>
                    <select id="maritalStatus" name="maritalStatus">
                        <option value="" selected hidden>Select your marital status</option>
                        <option value="single">Single</option>
                        <option value="married">Married</option>
                        <option value="divorced">Divorced</option>
                        <option value="widowed">Widowed</option>
                    </select>
                </div>

                <div class="forms">
                    <label for="numberOfChildren">Number of Children (if any):</label>
                    <input type="number" id="numberOfChildren" name="numberOfChildren">
                </div>

                <div class="forms">
                    <label for="id_card"> ID Card Type:</label>
                    <select name="id_card" id="id_card" required>
                        <option value="" selected hidden>Select ID card type</option>
                        <option value="ghana_card">Ghana Card</option>
                        <option value="voter_id_card">Voter ID Card</option>
                        <option value="drivers_license">Driver's License</option>
                        <option value="passport">Passport</option>
                        <option value="ssnit_biometric_card">SSNIT Biometric Card</option>
                        <option value="nhis_card">NHIS Card</option>
                        <option value="birth_certificate">Birth Certificate</option>
                    </select>
                </div>

                <div class="forms">
                    <label for="id_number">ID Number:</label>
                    <input type="text" id="id_number" name="id_number" required>
                </div>

                <div class="forms">
                    <label for="id_document">Upload ID Document:</label>
                    <input type="file" id="id_document" name="id_document" accept=".jpg, .jpeg, .png, .pdf" required>
                </div>
                <div class="forms">
                    <label for="digitalAddressCode">Digital Address Code:</label>
                    <input type="text" id="digitalAddressCode" name="digitalAddressCode" required>
                </div>

                <div class="forms">
                    <label for="phoneNumber">Phone Number:</label>
                    <input type="tel" id="phoneNumber" name="phoneNumber" required>
                </div>

                <div class="forms">
                    <label for="emailAddress">Email Address:</label>
                    <input type="email" id="emailAddress" name="emailAddress" required>
                </div>

                <div class="forms">
                    <label for="has_medical_history">Do you have a medical history?</label>
                    <select name="has_medical_history" id="has_medical_history" required>
                        <option value="" selected hidden>Select your status</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="forms">
                    <label for="medical_history_file">Upload Medical History File:</label>
                    <input type="file" id="medical_history_file" name="medical_history_file" accept=".jpg, .jpeg, .png, .pdf" />
                </div>
            </div>

        </div>

        <!-- Step 2: Parent/Guardian/Sponsor -->
        <div class="form-step">
            <h2>Parent/Guardian/Sponsor</h2>
            <div class="forms_group">
                <div class="forms">
                    <label for="parentName">Name:</label>
                    <input type="text" id="parentName" name="parentName" required>
                </div>
                <div class="forms">
                    <label for="relationship">Relationship:</label>
                    <input type="text" id="relationship" name="relationship" required>
                </div>
                <div class="forms">
                    <label for="parentTel">Tel. No.:</label>
                    <input type="tel" id="parentTel" name="parentTel" required>
                </div>
                <div class="forms">
                    <label for="parentEmail">Email Address:</label>
                    <input type="email" id="parentEmail" name="parentEmail" required>
                </div>
                <div class="forms">
                    <label for="parentPostalAddress">Postal Address:</label>
                    <input type="text" id="parentPostalAddress" name="parentPostalAddress" required>
                </div>
                <div class="forms">
                    <label for="parentResidentialAddress">Residential Address/Hse No.:</label>
                    <input type="text" id="parentResidentialAddress" name="parentResidentialAddress" required>
                </div>
                <div class="forms">
                    <label for="parentOccupation">Occupation:</label>
                    <input type="text" id="parentOccupation" name="parentOccupation" required>
                </div>
                <div class="forms">
                    <label for="parentDigitalAddress">Digital Address Code:</label>
                    <input type="text" id="parentDigitalAddress" name="parentDigitalAddress" required>
                </div>
            </div>

        </div>


     

        <br>
        <br> <br>
        <br>
        <div class="forms">
            <button type="submit">Submit</button>
        </div>
        <br>
        <br> <br>
        <br>
    </form>

   
    </div>
</body>

</html>