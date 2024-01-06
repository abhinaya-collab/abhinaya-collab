<?php
// Connect to your database (replace placeholders with actual values)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn = new mysqli('localhost', 'root', '', 'user_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch messages from the database
$sql = "SELECT * FROM user_messages";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-image:url(download.jpg);
            backdrop-filter:blur(10px);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        p {
            margin-bottom: 10px;
        }
        hr {
            margin: 20px 0;
            border: none;
            border-top: 1px solid #ddd;
        }
        .back-link {
            display: block;
            text-align: center;
            text-decoration: underline;
            font-size:30px;
            color:black;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Page - Submitted Messages</h1>
        
        <?php

            /*
            // Connect to your database (replace placeholders with actual values)
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "user_db";

            $conn = new mysqli('localhost', 'root', '', 'user_db');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch messages from the database
            $sql = "SELECT * FROM user_messages";
            $result = $conn->query($sql);
            */
            // Display messages if there are any
            if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p><strong>Full Name:</strong> " . $row["full_name"] . "</p>";
                echo "<p><strong>Email:</strong> " . $row["email"] . "</p>";
                echo "<p><strong>Message:</strong> " . $row["message"] . "</p>";
                echo "<hr>";
            }
            } else {
                echo "<p>No messages yet.</p>";
            }
        ?>
        <a class="back-link" href="admindashboard.php"><b>Home</b></a>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
