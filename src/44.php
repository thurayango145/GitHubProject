<?php
// Initialize database connection
$host = "localhost";
$username = "root";
$password = "";
$dbname = "school_project_a";

// Create database table if it does not exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
mysqli_query($conn, $sql);

// Connect to the database
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select the table name from the configuration file
$sel = 'SELECT * FROM `student_list` WHERE `school_id` = 1';

// Execute the query
$stmt = $conn->prepare($sel);
$stmt->execute();
$result = $stmt->get_result();

// Fetch and display data
while ($row = $result->fetch_assoc()) {
    echo "Name: " . $row['name'] . ", School ID: " . $row['school_id'] . "</br>";
}
$conn->close();
?>
