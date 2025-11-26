<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mine_reporter";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['field_name']) && isset($_POST['description'])) {
    $fieldName = $_POST['field_name'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO fields (field_name, description) VALUES (?, ?)");
    $stmt->bind_param('ss', $fieldName, $description);

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
