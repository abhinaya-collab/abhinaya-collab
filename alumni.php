<!DOCTYPE html>
<html>
<head>
    <title>Alumni Details</title>
    <style>
        body {
            font-family: emoji;
            background:url(download3.jpg) no-repeat;
            background-size:cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            backdrop-filter: blur(8px);
            background-color: rgba(255, 255, 255, 0.5);
        }
        
        .details-container {
            background-color:white;
            border: 2px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color:blue;
            font-family: emoji;
            background: url('logo.jpg') no-repeat left center;
            padding-left: 30px; /* Adjust this value to position the logo */
            line-height: 68px; /* Adjust this value to match the logo height */
        }

        p {
            margin: 10px 0;
        }
        .back-link {
            display: block;
            text-align: center;
            text-decoration: underline;
            font-size:30px;
            color:purple;
            margin-left:20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="details-container">
        <h1>Alumni Details</h1>

        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'user_db');
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        if (isset($_GET['name'])) {
            $name = mysqli_real_escape_string($conn, $_GET['name']);
            $sql = "SELECT * FROM alumni WHERE Full_Name = '$name'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                ?>
                <p><strong>Full Name:</strong> <?php echo $row['Full_Name']; ?></p>
                <p><strong>Gender:</strong> <?php echo $row['Gender']; ?></p>
                <p><strong>ID No:</strong> <?php echo $row['ID_No']; ?></p>
                <p><strong>Branch:</strong> <?php echo $row['Branch']; ?></p>
                <p><strong>Company Designation:</strong> <?php echo $row['Company_Designation']; ?></p>
                <p><strong>Experience with Company:</strong> <?php echo $row['Experience_with_your_Company']; ?></p>
                <p><strong>Suggestions to Juniors:</strong> <?php echo $row['Suggestions_to_your_juniors']; ?></p>
                <p><strong>Email:</strong> <?php echo $row['Email']; ?></p>
                <?php
            } else {
                echo "<p>No details found for this alumni.</p>";
            }
        } else {
            echo "<p>No alumni name selected.</p>";
        }

        mysqli_close($conn);
        ?>
        <a class="back-link" href="configuration.php"><b>Back</b></a>
    </div>
</body>
</html>
