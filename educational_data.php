<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Data</title>
    <?php include 'cdn.php';?>
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/admissions.css">
</head>
<style>
    .admissions_forms {
        padding: 0 5%;
        margin-top: 50px;
    }
</style>
<body class="admissions_forms">
    <form method="post" enctype="multipart/form-data" action="process_education.php">
    <input type="hidden" name="admissions_id" value="<?php echo $_GET['admissions_id']; ?>">

        <!-- Step 3: Educational Data -->
        <div class="form-step">
            <h2>Educational Data</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name of School/Institution</th>
                        <th>Date of Attendance From</th>
                        <th>Date of Attendance To</th>
                        <th>Office Held (If any)</th>
                        <th>Upload Results</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="educationTableBody">
                    <tr>
                        <td>
                            <div class="forms">
                                <input type="text" name="schoolName[]" required>
                            </div>
                        </td>
                        <td>
                            <div class="forms">
                                <input type="date" name="attendanceFrom[]" required>
                            </div>
                        </td>
                        <td>
                            <div class="forms">
                                <input type="date" name="attendanceTo[]" required>
                            </div>
                        </td>
                        <td>
                            <div class="forms">
                                <input type="text" name="officeHeld[]">
                            </div>
                        </td>
                        <td>
                            <div class="forms">
                                <input type="file" name="results[]" required>
                            </div>
                        </td>
                        <td>
                            <div class="forms">
                                <button type="button" onclick="deleteEducationRow(this)" class="delete">Delete</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="button" onclick="addEducationRow()" class="add">Add Name of School/Institution</button>
            <div class="buttons">
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
    <script>
        function addEducationRow() {
            const tableBody = document.getElementById("educationTableBody");
            const newRow = document.createElement("tr");

            newRow.innerHTML = `
                <td>
                    <div class="forms">
                        <input type="text" name="schoolName[]" required>
                    </div>
                </td>
                <td>
                    <div class="forms">
                        <input type="date" name="attendanceFrom[]" required>
                    </div>
                </td>
                <td>
                    <div class="forms">
                        <input type="date" name="attendanceTo[]" required>
                    </div>
                </td>
                <td>
                    <div class="forms">
                        <input type="text" name="officeHeld[]">
                    </div>
                </td>
                <td>
                    <div class="forms">
                        <input type="file" name="results[]" required>
                    </div>
                </td>
                <td>
                    <div class="forms">
                        <button type="button" class="delete" onclick="deleteEducationRow(this)">Delete</button>
                    </div>
                </td>
            `;

            tableBody.appendChild(newRow);
        }

        function deleteEducationRow(button) {
            const row = button.closest("tr");
            row.remove();
        }
    </script>
</body>
</html>
