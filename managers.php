<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mine_reporter";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$userName = "Haidar Shariefa";
$email = "haidarshariefa33451@gmail.com";
$Password = "haidarshariefa";

$sql = "INSERT INTO managers (username, email, password) VALUES ('Haidar Shariefa', 'haidarshariefa33451@gmail.com', 'haidarshariefa')";

$conn->close();
?>
