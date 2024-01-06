
<?php
// Connect to your database (replace placeholders with actual values)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn = new mysqli('localhost' , 'root' , '' , 'user_db');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data from the database
$sql = "SELECT name, email, password FROM user_form WHERE user_type = 'user'";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>UserRegistrations</title>
    <link rel="stylesheet" type="text/css" href="css/userstyles.css">
</head>
<body>
    <div class="container">
        <h1>User Registrations</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Actions</th>
            </tr>
            <?php
            // Loop through fetched user data and display it in the table
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["password"] . "</td><td><a href='edit_user.php'>Edit</a> | <a href='delete_user.php?name=" . urlencode($row["name"]) ."'>Delete</a></td></tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No users found</td></tr>";
            }
            ?>
        </table>
        <a class="back-link" href="admindashboard.php"><b>Home</b></a>
    </div>
</body>
</html>
