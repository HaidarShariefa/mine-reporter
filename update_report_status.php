<?php
$pdo = new PDO('mysql:host=localhost;dbname=mine_reporter', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['id']) && isset($_POST['status'])) {
    $reportId = $_POST['id'];
    $newStatus = $_POST['status'];

    $stmt = $pdo->prepare("UPDATE reports SET status = :status WHERE id = :id");

    $stmt->bindParam(':status', $newStatus, PDO::PARAM_STR);
    $stmt->bindParam(':id', $reportId, PDO::PARAM_INT);

    try {
        $stmt->execute();
        if ($newStatus === 'approved') {
            $additionalStmt = $pdo->prepare("INSERT INTO responses(type_id,field_id,quantity,latitude,longitude,response_date,status)
                                            SELECT  r.type_id,r.field_id, r.quantity,r.latitude,r.longitude,r.report_date,'Pending' 
                                            FROM reports r WHERE r.id = :report_id");
            $additionalStmt->bindParam(':report_id', $reportId, PDO::PARAM_INT);
            $additionalStmt->execute();
        }
        
        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['error' => 'Incomplete data']);
}
?>
