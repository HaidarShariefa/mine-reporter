<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mine_reporter";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['id']) && isset($_POST['report_date']) && isset($_POST['longitude']) && isset($_POST['latitude'])) {
    $id = $_POST['id'];
    $reportDate = $_POST['report_date'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];

    $stmt = $conn->prepare("UPDATE civilian_reports SET status = 'accepted' 
                            WHERE id = ? AND report_date = ? AND longitude = ? AND latitude = ?");
    $stmt->bind_param('isss', $id, $reportDate, $longitude, $latitude);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => $stmt->error]);
    }

    $stmt->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid input']);
}

$conn->close();
?>
