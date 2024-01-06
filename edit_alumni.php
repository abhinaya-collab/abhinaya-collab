<!DOCTYPE html>
<html>
<head>
    <title>Edit Alumni</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        form {
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px 15px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .back-link {
            display: block;
            text-align: center;
            text-decoration: underline;
            font-size: 16px;
            color: black;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h2>Edit Alumni Information</h2>
    <form method="post" action="update_alumni.php">
        
        <label for="Full_Name">Full Name:</label>
        <input type="text" name="Full_Name" required><br>
        <label for="Gender">Gender:</label>
        <input type="radio" name="Gender" value="Male" required>Male
        <input type="radio" name="Gender" value="Female" required>Female<br>
        <label for="ID_No">ID No:</label>
        <input type="text" name="ID_No" required><br>
        <label for="Branch">Branch:</label>
        <input type="text" name="Branch" required><br>
        <label for="Company_Designation">Company Designation:</label>
        <input type="text" name="Company_Designation" required><br>
        <label for="Experience_with_your_Company">Experience with your Company:</label>
        <input type="text" name="Experience_with_your_Company" required><br>
        <label for="Suggestions_to_your_juniors">Suggestions to your juniors:</label>
        <input type="text" name="Suggestions_to_your_juniors" required><br>
        <label for="Email">Email:</label>
        <input type="text" name="Email" required><br>
        
        <input type="submit" value="Update">
    </form>
    <a class="back-link" href="alumni_panel.php"><b>Back to Alumni Page</b></a>
</body>
</html>
