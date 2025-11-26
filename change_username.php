<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mine_reporter";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if user is logged in
if (!isset($_SESSION['user'])) {
    echo json_encode(['success' => false, 'error' => 'User not logged in']);
    exit();
}

// Get POST data
$newUsername = $_POST['newUsername'];

// Get the current user from session
$userId = $_SESSION['user']['id'];

// Update username in the database
$sql = "UPDATE users SET username = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $newUsername, $userId);

if ($stmt->execute()) {
    // Update the session data
    $_SESSION['user']['username'] = $newUsername;
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false, 'error' => 'Failed to update username']);
}

$conn->close();
?>
