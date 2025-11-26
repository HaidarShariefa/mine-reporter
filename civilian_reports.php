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

$quantity = $_POST['quantity'];
$longitude = $_POST['longitude'];
$latitude = $_POST['latitude'];
$date = $_POST['reportDate'];
$status = 'pending';

$sql = "INSERT INTO civilian_reports (quantity, longitude, latitude, report_date, status) VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iddss", $quantity, $longitude, $latitude, $date, $status);

if ($stmt->execute()) {
    session_start();
    $_SESSION['report_submit_message'] = "Report submitted successfully.";
} else {
    die("Error: " . $sql . "<br>" . $conn->error);
}

$stmt->close();
$conn->close();
header("Location: index.php");
exit();

?>