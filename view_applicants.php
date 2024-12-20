<?php
// Include the database connection file
include 'db_connection.php';

// Query to fetch data from your database table
$sql = "SELECT serial_number, name, designation, date_from, date_to, letter_id FROM interns"; // Replace 'applicants' with your table name
$result = $conn->query($sql);

// Check if the result has any rows
if ($result->num_rows > 0) {
    // Loop through each row and create table rows dynamically
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['serial_number']) . "</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['designation']) . "</td>";
        echo "<td>" . htmlspecialchars($row['date_from']) . "</td>";
        echo "<td>" . htmlspecialchars($row['date_to']) . "</td>";
        echo "<td><button onclick=\"generateFile('" . $row['letter_id'] . "')\">Generate</button></td>";
        echo "<td><button onclick=\"viewFile('" . $row['letter_id'] . "')\">View</button></td>";
        echo "<td><button onclick=\"sendFile('" . $row['letter_id'] . "')\">Send</button></td>";
        echo "</tr>";
    }
} else {
    // If no data is found, display a message
    echo "<tr><td colspan='8'>No applicants found</td></tr>";
}

// Close the database connection
$conn->close();
?>
