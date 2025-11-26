<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mine_reporter";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$type = $_POST['type'];
$quantity = $_POST['quantity'];
$field = $_POST['field'];
$date = $_POST['reportDate'];
$status = 'pending';

$sql = "INSERT INTO reports (type_id, field_id, quantity, latitude, longitude, report_date, status) VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssiddss", $type, $field, $quantity, $latitude, $longitude, $date, $status);

if ($stmt->execute()) {
    session_start();
    $_SESSION['report_submit_message'] = "Report submitted successfully.";
} else {
    die("Error: " . $sql . "<br>" . $conn->error);
}

$stmt->close();
$conn->close();
header("Location: searcher.php");
exit();

?>