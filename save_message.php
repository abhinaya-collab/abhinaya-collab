<?php
// Connect to your database (replace placeholders with actual values)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect form data
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Insert the data into the database
$sql = "INSERT INTO user_messages (full_name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $full_name, $email, $message);

if ($stmt->execute()) {
    // Successful insertion
    header("Location: contact.php"); // Redirect back to the contact page
} else {
    // Error handling
    echo "Error: " . $stmt->error;
}
$stmt->close();

// Close the database connection
$conn->close();
?>
