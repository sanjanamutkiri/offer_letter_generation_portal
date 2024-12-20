<?php
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $date_from = $_POST['date_from'];
    $date_to = $_POST['date_to'];
    $letter_id = $_POST['letter_id'];

    // Include database connection
    include 'db_connection.php';

    $stmt = $conn->prepare("INSERT INTO interns (name, designation, date_from, date_to, letter_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $designation, $date_from, $date_to, $letter_id);

    if ($stmt->execute()) {
        echo "New applicant added successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
