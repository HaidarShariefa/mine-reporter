<?php
$pdo = new PDO('mysql:host=localhost;dbname=mine_reporter', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['id']) && isset($_POST['status'])) {
    $responseId = $_POST['id'];
    $newStatus = $_POST['status'];

    $stmt = $pdo->prepare("UPDATE responses SET status = :status WHERE id = :id");

    $stmt->bindParam(':status', $newStatus, PDO::PARAM_STR);
    $stmt->bindParam(':id', $responseId, PDO::PARAM_INT);

    try {
        $stmt->execute();
        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['error' => 'Incomplete data']);
}
?>