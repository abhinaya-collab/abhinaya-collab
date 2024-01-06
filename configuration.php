<!DOCTYPE html>
<html>
<head>
    <title>Rgukt Alumni Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background:url(bg3.jpg) no-repeat;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            backdrop-filter: blur(8px);
            background-color: rgba(255, 255, 255, 0.5);
        }
        /*
        .background-blur {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.5);
        }
        */
        .alumni-list {
            background-color: white;
            border: 2px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 650px;
            width: 100%;
        }

        .alumni-list h1 {
            text-align: space-between;
            margin-bottom: 20px;
            color: blue; /* Header color */
        }


        /*.logout-btn {
            text-decoration: none;
            color: red;
            margin-left: 500px;
            font-weight: bold;
            font-size: 30px;
        }
        .logout-btn {
            margin-left: 520px;
            background-color: orange;
            color: white;
            border: none;
            padding: 3px;
            border-radius: 25px;
            cursor: pointer;
            margin-bottom: 10px;
        }*/

        .alumni-list table {
            width: 100%;
        }

        .alumni-list th, .alumni-list td {
            padding: 8px;
        }

        .alumni-list th {
            background-color: #f2f2f2;
            color: green; /* Header text color */
        }

        .alumni-list tr:nth-child(even) {
            background-color: #f5f5f5; /* Light gray for even rows */
        }

        .alumni-list tr:nth-child(odd) {
            background-color: #f8f8f8; /* Slightly lighter gray for odd rows */
        }

        .alumni-list a {
            text-decoration: none;
            color: #333;
            display: flex;
            align-items: center; /* Align text and icon vertically */
            transition: color 0.3s;
        }

        .alumni-list a:hover {
            color: #ff5733;
        }
        h1 {
            text-align: center;
            color:blue;
            font-family: emoji;
            background: url('logo.jpg') no-repeat left center;
            padding-left: 20px; /* Adjust this value to position the logo */
            line-height: 68px; /* Adjust this value to match the logo height */
        }
        
        .alumni-icon {
            width: 20px;
            height: 20px;
            margin-right: 10px;
            background: url('images.png') no-repeat center center;
            background-size: cover;
        }
        
        .back-link {
            display: block;
            text-align: center;
            text-decoration: underline;
            font-size:30px;
            color:black;
            margin-left:280px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="alumni-list">

        <h1>Rgukt Alumni Data</h1>

        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'user_db');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT Full_Name FROM alumni"; // Only selecting names
        $result = mysqli_query($conn, $sql);

        ?>

        <?php if (mysqli_num_rows($result) > 0): ?>
            <table>
                <tr>
                    <th>Alumni Name</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td>
                            <a href="alumni.php?name=<?php echo urlencode($row['Full_Name']); ?>"><span class="alumni-icon"></span><?php echo $row['Full_Name']; ?></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        <?php else: ?>
            <p>No records found.</p>
        <?php endif; ?>

        <?php mysqli_close($conn); ?>
        <a class="back-link" href="welcome.php"><b>Back</b></a>
    </div>
</body>
</html>
