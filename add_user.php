<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mine_reporter";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to hash passwords
function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

// Check if the request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        // Validate role
        $validRoles = ['searcher', 'supervisor', 'manager'];
        if (!in_array($role, $validRoles)) {
            echo json_encode(['success' => false, 'error' => 'Invalid role']);
            exit();
        }

        // Prepare and execute SQL statement to insert user
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)");
        $hashedPassword = hashPassword($password);
        $stmt->bind_param("ssss", $username, $email, $hashedPassword, $role);

        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'error' => $stmt->error]);
        }

        $stmt->close();
    } else {
        echo json_encode(['success' => false, 'error' => 'Missing parameters']);
    }
}

$conn->close();
?>
