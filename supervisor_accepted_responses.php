<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mine_reporter";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch accepted responses
$sql = "SELECT m.type_name, f.field_name, r.latitude, r.longitude, r.quantity, r.response_date
        FROM responses r
        JOIN mines m ON r.type_id = m.id
        JOIN fields f ON r.field_id = f.id
        WHERE r.status = 'accepted'";

$result = $conn->query($sql);

$responses = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $responses[] = $row;
    }
}

echo json_encode($responses);

$conn->close();
?>
