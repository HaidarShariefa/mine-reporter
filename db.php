<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setup Database</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Setup Mine Reporter Database</h1>
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

                // Create database
                $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
                if ($conn->query($sql) === TRUE) {
                    echo "Database created successfully<br>";
                } else {
                    echo "Error creating database: " . $conn->error . "<br>";
                }

                // Select the database
                $conn->select_db($dbname);

                // SQL to create searchers table
                $sql = "CREATE TABLE users (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    username VARCHAR(255) NOT NULL,
                    email VARCHAR(255) NOT NULL UNIQUE,
                    password VARCHAR(255) NOT NULL,
                    role ENUM('searcher', 'supervisor', 'manager') NOT NULL
                )";
                if ($conn->query($sql) === TRUE) {
                    echo "Table users created successfully<br>";
                } else {
                    echo "Error creating table: " . $conn->error . "<br>";
                }
                // SQL to create mines table
                $sql = "CREATE TABLE IF NOT EXISTS mines (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    type_name VARCHAR(50) NOT NULL,
                    description TEXT
                )";
                if ($conn->query($sql) === TRUE) {
                    echo "Table mines created successfully<br>";
                } else {
                    echo "Error creating table: " . $conn->error . "<br>";
                }

                // SQL to create fields table
                $sql = "CREATE TABLE IF NOT EXISTS fields (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    field_name VARCHAR(50) NOT NULL,
                    description TEXT
                )";
                if ($conn->query($sql) === TRUE) {
                    echo "Table fields created successfully<br>";
                } else {
                    echo "Error creating table: " . $conn->error . "<br>";
                }

                // SQL to create reports table
                $sql = "CREATE TABLE IF NOT EXISTS reports (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    type_id INT(6) UNSIGNED NOT NULL,
                    field_id INT(6) UNSIGNED NOT NULL,
                    quantity INT(6) NOT NULL,
                    latitude DECIMAL(10, 8) NOT NULL,
                    longitude DECIMAL(11, 8) NOT NULL,
                    report_date DATE NOT NULL,
                    FOREIGN KEY (type_id) REFERENCES mines(id),
                    FOREIGN KEY (field_id) REFERENCES fields(id)
                )";
                if ($conn->query($sql) === TRUE) {
                    echo "Table reports created successfully<br>";
                } else {
                    echo "Error creating table: " . $conn->error . "<br>";
                }

                // SQL to create civilian-reports table
                $sql = "CREATE TABLE IF NOT EXISTS civilian_reports (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    quantity INT NOT NULL,
                    longitude DECIMAL(9, 6) NOT NULL,
                    latitude DECIMAL(9, 6) NOT NULL,
                    report_date DATE NOT NULL,
                    status ENUM('pending', 'approved', 'rejected') NOT NULL default 'pending'
                )";
                if ($conn->query($sql) === TRUE) {
                    echo "Table civilian_reports created successfully<br>";
                } else {
                    echo "Error creating table: " . $conn->error . "<br>";
                }

                // SQL to create responses table
                $sql = "CREATE TABLE IF NOT EXISTS responses (
                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    type_id INT(6) UNSIGNED NOT NULL,
                    field_id INT(6) UNSIGNED NOT NULL,
                    quantity INT(6) NOT NULL,
                    latitude DECIMAL(10, 8) NOT NULL,
                    longitude DECIMAL(11, 8) NOT NULL,
                    response_date DATE NOT NULL,
                    FOREIGN KEY (type_id) REFERENCES mines(id),
                    FOREIGN KEY (field_id) REFERENCES fields(id),
                    status ENUM('pending', 'accepted') NOT NULL default 'pending'
                )";
                if ($conn->query($sql) === TRUE) {
                    echo "Table responses created successfully<br>";
                } else {
                    echo "Error creating table: " . $conn->error . "<br>";
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