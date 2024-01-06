<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn = new mysqli('localhost', 'root', '', 'user_db');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch alumni data
$sql = "SELECT * FROM alumni";
$result = $conn->query($sql);

$alumniData = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $alumniData[] = $row;
    }
}

// Close the database connection
$conn->close();
?>
