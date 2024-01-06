<?php
// Include config and start session
@include 'config.php';
session_start();

// Check admin session
if (!isset($_SESSION['admin_name'])) {
    header('location:userpanel.php');
    exit();
}

// Check if the user name is provided in the URL
if (!isset($_GET['name'])) {
    header('location:userpanel.php');
    exit();
}

$name = $_GET['name'];

// Delete user based on user name
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn = new mysqli('localhost' , 'root' , '' , 'user_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete user row by user name
$sql = "DELETE FROM user_form WHERE name = '$name' ";

if ($conn->query($sql) === TRUE) {
    echo "User deleted successfully";
} else {
    echo "Error deleting user: " . $conn->error;
}

$conn->close();

// Redirect back to the admin panel after deletion
header('location: userpanel.php');
?>
