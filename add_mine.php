<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mine_reporter";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['type_name']) && isset($_POST['description'])) {
    $typeName = $_POST['type_name'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("INSERT INTO mines (type_name, description) VALUES (?, ?)");
    $stmt->bind_param('ss', $typeName, $description);

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
