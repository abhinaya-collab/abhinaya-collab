<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ... Your existing meta tags and title ... -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>alumni Details</title>
  <link rel="stylesheet" type="text/css" href="#">
  <style>
    /* ... Your existing CSS ... */
    body {
    font-family: Arial, sans-serif;
    background-image:url(download2.jpg); /* Adjust the path to your image */
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    backdrop-filter: blur(10px);
    
}

.container {
    width: 80%;
    margin: 0 auto;
    background-color: rgba(255, 255, 255, 0.8); /* Adding a semi-transparent white background to the content */
    padding: 20px; /* Adding some padding for readability */
    border-radius: 10px; /* Adding rounded corners */
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); /* Adding a subtle shadow */
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

th {
    background-color: #f2f2f2;
}
tbody{
  background-color:lightgray;
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

<div class="content" id="alumni">
  <h2>Alumni Data</h2>
  <table>
    <thead>
      <tr>
        <th>Full_Name</th>
        <th>Gender</th>
        <th>ID_No</th>
        <th>Branch</th>
        <th>Company_Designation</th>
        <th>Experience_with_your_Company</th>
        <th>Suggestions_to_your_juniors</th>
        <th>Email</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <!-- Loop through alumni data and generate rows -->
      <?php
        // Fetch alumni data from the database (this is a simplified example)
        //$alumniData = fetchAlumniData();

        include 'fetch_alumni_data.php';

        $firstRow = true; // Flag to track the first row

        foreach ($alumniData as $alumni) {
          echo "<tr>";
          echo "<td>{$alumni['Full_Name']}</td>";
          echo "<td>{$alumni['Gender']}</td>";
          echo "<td>{$alumni['ID_No']}</td>";
          echo "<td>{$alumni['Branch']}</td>";
          echo "<td>{$alumni['Company_Designation']}</td>";
          echo "<td>{$alumni['Experience_with_your_Company']}</td>";
          echo "<td>{$alumni['Suggestions_to_your_juniors']}</td>";
          echo "<td>{$alumni['Email']}</td>";
          echo "<td>";

          if ($firstRow) {
            // Only add "Add" action for the first row
            echo "<a href='add_alumni.php'>Add<br></a>";
          }

          echo "<a href='edit_alumni.php?id={$alumni['Email']}'>Edit </a>";
          echo "<a href='delete_alumni.php?id={$alumni['Email']}'>Delete</a>";

          echo "</td>";
          echo "</tr>";

          $firstRow = false; // Set the flag to false after the first row
        }
      ?>
    </tbody>
  </table>
  <a class="back-link" href="admindashboard.php"><b>Home</b></a>
</div>
</body>
</html>
