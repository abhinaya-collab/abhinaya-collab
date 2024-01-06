<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

$conn = new mysqli('localhost', 'root', '', 'user_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = $_POST["name"];
    $newEmail = $_POST["email"];
    $newPassword = $_POST["password"];

    $updateSql = "UPDATE user_form SET email=?, password=? WHERE name=?";
    $stmt = $conn->prepare($updateSql);
    $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    $stmt->bind_param("sss", $newEmail, $hashedPassword, $userName);

    if ($stmt->execute()) {
        header("Location: userpanel.php");
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}

$selectSql = "SELECT name, email, password FROM user_form";
$result = $conn->query($selectSql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Users</title>
    <link rel="stylesheet" type="text/css" href="css/useradmin.css">
</head>
<body>
    <div class="container">
        <h1>Edit Users</h1>
        <!-- Display user information with editable form for the selected user -->
<?php while ($user = $result->fetch_assoc()): ?>
    <?php if (isset($_GET['edit']) && $_GET['edit'] === $user['name']): ?>
        <!-- Editable Form for the Selected User -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="name" value="<?php echo $user["name"]; ?>">
            <label>Name: <?php echo $user["name"]; ?></label>
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $user["email"]; ?>" required><br><br>
            <label>Password:</label>
            <input type="password" name="password" required><br><br>
            <button type="submit">Update</button>
        </form>
    <?php else: ?>
        <!-- Display Static Information for Other Users -->
        <p>Name: <?php echo $user["name"]; ?></p>
        <p>Email: <?php echo $user["email"]; ?></p>
        <p>Password: *********</p>
        <a href="?edit=<?php echo urlencode($user['name']); ?>">Edit</a>
        <hr>
    <?php endif; ?>
<?php endwhile; ?>
        <a class="back-link" href="userpanel.php"><b>Back to User Panel</b></a>
    </div>
</body>
</html>
