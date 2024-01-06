<!-- add_alumni.php -->

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ... Your existing meta tags and title ... -->
  <link rel="stylesheet" type="text/css" href="#">
  <style>
    /* ... Your existing CSS ... */


.content {
  width: 80%;
  margin: 0 auto;
  background-color: rgba(255, 255, 255, 0.8);
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  margin-top: 20px;
}

h2 {
  text-align: center;
}

.back-link {
  display: block;
  text-align: center;
  text-decoration: underline;
  font-size: 16px;
  color: black;
  margin-top: 20px;
}
.form-row {
      display: flex;
      justify-content: space-between;
    }
    
    .form-row label {
      flex-basis: 20%; 
      height:5vh;
      /* Adjust this value to control label width */
    }
    
    .form-row input {
      flex-basis: 70%; /* Adjust this value to control input width */
    }

    .form-row .radio-group {
      display: flex;
      flex-direction: row;
      flex-basis:10%;
    }

  </style>
</head>
<body>

<div class="content">
  <h2>Add Alumni</h2>
  <!-- Add your form for adding alumni data here -->
  <form action="process_add_alumni.php" method="POST">
  <div class="form-row">
    <label for="Full_Name">Full Name:</label>
    <input type="text" name="Full_Name" required><br><br>
  </div><br>
  <div class="form-row">
    <label for="Gender">Gender:</label>
    <input type="radio" name="Gender" value="Male" required> Male
    <input type="radio" name="Gender" value="Female" required> Female<br><br>
  </div><br>
  <div class="form-row">
    <label for="ID_No">ID No:</label>
    <input type="text" name="ID_No" required><br><br>
  </div><br>
  <div class="form-row">
    <label for="Branch">Branch:</label>
    <input type="text" name="Branch" required><br><br>
  </div><br>
  <div class="form-row">
    <label for="Company_Designation">Company Designation:</label>
    <input type="text" name="Company_Designation" required><br><br>
  </div><br>
  <div class="form-row">
    <label for="Experience_with_your_Company">Experience With Your Company:</label>
    <input type="text" name="Experience_with_your_Company" required><br><br>
  </div><br>
  <div class="form-row">
    <label for="Suggestions_to_your_juniors">Suggestions to your juniors:</label>
    <input type="text" name="Suggestions_to_your_juniors" required><br><br>
  </div><br>
  <div class="form-row">
    <label for="Email">Email:</label>
    <input type="text" name="Email" required><br><br>
  </div><br>
    <button type="submit">Add Alumni</button>
  </form>
  <a class="back-link" href="alumni_panel.php"><b>Back to Alumni Page</b></a>
</div>
</body>
</html>
