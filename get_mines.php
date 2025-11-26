<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mine_reporter";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, type_name, description FROM mines";
$result = $conn->query($sql);

$mines = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mines[] = $row;
    }
}

echo json_encode($mines);

$conn->close();
?>
