<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mine_reporter";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$type_name = "AP4";
$description = "ractangular-shaped submunition";

$sql = "INSERT INTO mines (type_name, description) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $type_name, $description);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
