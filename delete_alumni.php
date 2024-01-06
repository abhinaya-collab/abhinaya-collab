<?php
// Check if the email parameter is provided in the URL
if (isset($_GET['id'])) {
    // Get the email from the URL parameter
    $email = $_GET['id'];
    
    $mysqli = new mysqli("localhost", "root", "", "user_db");

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Delete alumni record
    $sql = "DELETE FROM alumni WHERE Email = '$email'";

    if ($mysqli->query($sql) === TRUE) {
        // Redirect back to the alumni panel or wherever you want
        header("Location: alumni_panel.php");
        exit();
    } else {
        echo "Error deleting record: " . $mysqli->error;
    }

    $mysqli->close();
} else {
    echo "Invalid request.";
}
?>
