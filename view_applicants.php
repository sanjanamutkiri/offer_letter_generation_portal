<?php
// Include the database connection file
include 'db_connection.php';

// Query to fetch data from your database table
$sql = "SELECT ref_no, serial_number, date, name, designation, date_from, date_to FROM interns"; 

$result = $conn->query($sql);

// Check if the result has any rows
if ($result->num_rows > 0) {
    // Loop through each row and create table rows dynamically
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['ref_no']) . "</td>";
        echo "<td>" . htmlspecialchars($row['serial_number']) . "</td>";
        echo "<td>" . htmlspecialchars($row['date']) . "</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['designation']) . "</td>";
        echo "<td>" . htmlspecialchars($row['date_from']) . "</td>";
        echo "<td>" . htmlspecialchars($row['date_to']) . "</td>";
        echo "<td><button onclick=\"generateFile('" . $row['ref_no'] . "')\">Generate</button></td>";
        echo "<td><button onclick=\"viewFile('" . $row['ref_no'] . "')\">View</button></td>";
        echo "<td><button onclick=\"sendFile('" . $row['ref_no'] . "')\">Send</button></td>";
        echo "</tr>";
    }
} else {
    // If no data is found, display a message
    echo "<tr><td colspan='10'>No applicants found</td></tr>";
}

// Close the database connection
$conn->close();
?>
