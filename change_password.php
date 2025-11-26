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
$currentPassword = $_POST['currentPassword'];
$newPassword = $_POST['newPassword'];

// Get the current user from session
$userId = $_SESSION['user']['id'];

// Function to get the hashed password
function getHashedPassword($conn, $userId) {
    $sql = "SELECT password FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    return $user['password'];
}

// Check current password
$hashedPassword = getHashedPassword($conn, $userId);
if (password_verify($currentPassword, $hashedPassword)) {
    // Hash new password
    $newHashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

    // Update password in the database
    $sql = "UPDATE users SET password = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $newHashedPassword, $userId);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Failed to update password']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Current password is incorrect']);
}

$conn->close();
?>
