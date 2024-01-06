<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <style>
        html {
        background-image: url(admin2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        backdrop-filter:blur(5px);
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image:url(admin2.jpg) no-repeat;
            background-size:cover;
            backdrop-filter:blur(5px);
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        .profile-picture {
            width: 250px;
            height: 250px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: block;
        }
        .admin-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .admin-email {
            color: #777;
            margin-bottom: 20px;
        }
        .admin-details {
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
        .detail {
            margin-bottom: 10px;
        }
        .detail label {
            font-weight: bold;
        }
        
        .back-link {
          display: block;
          text-align: center;
          margin-top: 15px;
          font-size: 14px;
        }

        .back-link b {
            color: #007bff;
        }

        .back-link b:hover {
            color: #0056b3;
        }

    </style>
</head>
<body>
    <div class="container">
        <img class="profile-picture" src="admin.png" alt="Admin Profile Picture">
        <div class="admin-name">SAN</div>
        <div class="admin-email">san@gmail.com</div>
        <div class="admin-details">
            <div class="detail">
                <label>Role:</label> Administrator
            </div>
            <div class="detail">
                <label>Location:</label> RGUKT,BASAR TELANGANA
            </div>
            <div class="detail">
                <label>Joined:</label> March 16, 2023
            </div>
            <div class="detail">
                <label>Education:</label> CSE,E3S2
            </div>
            <div class="detail">
                <label>Team:</label> Abhinaya , Nisha , Sindhu
            </div>
        </div>
    </div>
    <a class="back-link" href="admindashboard.php"><b>Back to Admin Dashboard</b></a>
</body>
</html>
