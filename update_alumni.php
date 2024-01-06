<?php
// Assuming you have a database connection established
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["Full_Name"];
    $gender = $_POST["Gender"];
    $id_no = $_POST["ID_No"];
    $branch = $_POST["Branch"];
    $company_designation = $_POST["Company_Designation"];
    $experience_with_company = $_POST["Experience_with_your_Company"];
    $suggestions_to_juniors = $_POST["Suggestions_to_your_juniors"];
    $email = $_POST["Email"];
    
    // SQL query to update alumni information
    $sql = "UPDATE alumni SET Full_Name='$full_name', Gender='$gender', Branch='$branch', Company_Designation='$company_designation', Experience_with_your_Company='$experience_with_company', Suggestions_to_your_juniors='$suggestions_to_juniors', Email='$email' WHERE ID_No='$id_no'";
    
    if ($conn->query($sql) === TRUE) {
        echo "Alumni information updated successfully.";
        header("Location: alumni_panel.php");
    } else {
        echo "Error updating alumni information: " . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
