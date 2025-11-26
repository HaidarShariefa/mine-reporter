<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mine_reporter";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT r.report_date, m.type_name, r.quantity, f.field_name, r.status
        FROM reports r
        INNER JOIN mines m ON r.type_id = m.id
        INNER JOIN fields f ON r.field_id = f.id
        WHERE r.status = 'approved' OR r.status = 'rejected'";


if (isset($_GET['startDate']) && !empty($_GET['startDate'])) {
    $startDate = $_GET['startDate'];
    $sql.= " AND r.report_date >= '$startDate'";
}

$sql.= " ORDER BY r.report_date DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p>Date: " . $row['report_date'] . "<br>";
        echo "Mine Type: " . $row['type_name'] . "<br>";
        echo "Quantity: " . $row['quantity'] . "<br>";
        echo "Field: " . $row['field_name'] . "<br>";
        echo "Status: " . $row['status'] . "</p>";
        echo "<hr>";
    }
} else {
    echo "No reports found.";
}

$conn->close();
?>
