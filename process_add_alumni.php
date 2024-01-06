<!-- process_add_alumni.php -->

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get input data
    $full_name = $_POST["Full_Name"];
    $gender = $_POST["Gender"];
    $Id_no = $_POST["ID_No"];
    $Branch = $_POST["Branch"];
    $Company_Designation = $_POST["Company_Designation"];
    $Experience_with_your_Company = $_POST["Experience_with_your_Company"];
    $Suggestions_to_your_juniors = $_POST["Suggestions_to_your_juniors"];
    $Email = $_POST["Email"];
  
    
    //Connect to database and insert data
    $connection = mysqli_connect("localhost", "root", "", "user_db");
    
    
    $query = "INSERT INTO alumni (Full_Name, Gender, ID_No, Branch, Company_Designation, Experience_with_your_Company, Suggestions_to_your_juniors, Email) VALUES ('$full_name', '$gender', '$Id_no', '$Branch', '$Company_Designation', '$Experience_with_your_Company', '$Suggestions_to_your_juniors', '$Email')";
    
    //Execute the query
    mysqli_query($connection, $query);
    
    // Redirect back to the alumni page
    header("Location: alumni_panel.php");
    exit;
} else {
    // Redirect to the add_alumni page if accessed directly
    header("Location: add_alumni.php");
    exit;
}
?>
