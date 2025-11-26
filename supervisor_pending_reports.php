<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mine_reporter";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}

$sql = "SELECT r.id, r.report_date, m.type_name, r.quantity, f.field_name, r.status
                        FROM reports r
                        INNER JOIN mines m ON r.type_id = m.id
                        INNER JOIN fields f ON r.field_id = f.id
                        WHERE r.status = 'pending'";

$stmt = $pdo->query($sql);
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

$json = json_encode($data);

header('Content-Type: application/json');
echo $json;
?>
