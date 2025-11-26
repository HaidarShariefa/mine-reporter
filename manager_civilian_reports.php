<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mine_reporter";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT r.id, r.report_date, r.longitude, r.latitude, r.quantity, r.status
        FROM civilian_reports r
        WHERE r.status = 'pending'";

if (isset($_GET['startDate']) && !empty($_GET['startDate'])) {
    $startDate = $_GET['startDate'];
    $sql .= " AND r.report_date >= '$startDate'";
}

$sql .= " ORDER BY r.report_date DESC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='report-item'>";
        echo "<span class='report-id' style='display: none'>" . $row['id'] . "</span>";
        echo "<p>Date: " . $row['report_date'] . "</p>";
        echo "<p>Longitude: " . $row['longitude'] . "</p>";
        echo "<p>Latitude: " . $row['latitude'] . "</p>";
        echo "<p>Quantity: " . $row['quantity'] . "</p>";
        echo "<p>Status: <span class='report-status' style='color: goldenrod'>" . $row['status'] . "</span></p>";
        echo "<button class='btn btn-outline-success' onclick='acceptReport(this)'>Accept</button>";
        echo "<hr>";
        echo "</div>";
    }
} else {
    echo "No reports found.";
}

$conn->close();
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
function acceptReport(button) {
    var reportElement = button.parentElement;
    var reportID = reportElement.querySelector('.report-id').textContent;
    var reportDate = reportElement.querySelector('p:nth-child(2)').textContent.split('Date: ')[1];
    var longitude = reportElement.querySelector('p:nth-child(3)').textContent.split('Longitude: ')[1];
    var latitude = reportElement.querySelector('p:nth-child(4)').textContent.split('Latitude: ')[1];

    $.ajax({
        type: 'POST',
        url: 'update_civilian_status.php',
        data: {
            id: reportID,
            report_date: reportDate,
            longitude: longitude,
            latitude: latitude
        },
        success: function(response) {
            var result = JSON.parse(response);
            if (result.success) {
                reportElement.querySelector('.report-status').textContent = 'accepted';
                reportElement.querySelector('.report-status').style.color = 'green';
                button.style.display = 'none';
            } else {
                alert('Failed to update status: ' + result.error);
            }
        },
        error: function() {
            alert('An error occurred while updating the status.');
        }
    });
}
</script>
