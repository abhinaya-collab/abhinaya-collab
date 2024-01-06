<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: url(bg.webp) no-repeat;
      background-size:cover;
      height:100vh;
      backdrop-filter:blur(2px);
      background-color: rgba(255, 255, 255, 0.5);
    }
    header {
      background-color: #333;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
    }
    .nav-links {
      list-style: none;
      margin: 0;
      padding: 0;
      display: flex;
      gap: 20px;
    }
    .nav-links a {
      text-decoration: none;
      color: white;
      font-weight: bold;
    }
    .logout-btn {
      background-color: #f44336;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }
    .content {
      background-color: white;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .admin-footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px;
    position: absolute;
    bottom: 0;
    width: 100%;
}

  </style>
</head>
<body>
  <header>
    <h1>Admin Panel</h1>
    <a href="logout.php" class="logout-btn">Logout</a>
  </header>
  <div class="container">
    <div class="content" id="alumni">
      <h2><a href="alumni_panel.php">Alumni Data</h2>
      <!-- Display alumni data here -->
    </div>
    <div class="content" id="registrations">
      <h2><a href="userpanel.php">User Registrations</h2>
      <!-- Display user registration data here -->
    </div>
    <div class="content" id="messages">
      <h2><a href="contactadmin.php">User Messages</h2>
      <!-- Display admin profile data here -->
    </div>
    <div class="content" id="profile">
      <h2><a href="adminprofile.php">Admin Profile</h2>
      <!-- Display admin profile data here -->
    </div>
  </div>
  <footer class="admin-footer">
        <p>&copy; 2023 Admin Panel. All rights reserved.</p>
    </footer>
</body>
</html>
