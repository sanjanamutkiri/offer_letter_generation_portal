<?php
// Include the database connection file
include 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];

    // Prepare the SQL query
    $query = "DELETE FROM interns WHERE name = ?";

    // Prepare statement to prevent SQL injection
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $name);

    if ($stmt->execute()) {
        echo "Intern deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "Invalid request method.";
}
$conn->close();
?>
