<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drop Database</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Drop Mine Reporter Database</h1>
        <div class="card">
            <div class="card-body">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "mine_reporter";

                // Create connection
                $conn = new mysqli($servername, $username, $password);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // SQL to drop database
                $sql = "DROP DATABASE IF EXISTS $dbname";
                if ($conn->query($sql) === TRUE) {
                    echo "Database dropped successfully<br>";
                } else {
                    echo "Error dropping database: " . $conn->error . "<br>";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
