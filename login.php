<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mine_reporter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get POST data
$email = $_POST['email'];
$password = $_POST['password'];

// Function to check credentials
function checkCredentials($conn, $email, $password) {
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verify the password
    if ($user && password_verify($password, $user['password'])) {
        return $user;
    } else {
        return false;
    }
}

// Check credentials
$user = checkCredentials($conn, $email, $password);

if ($user) {
    $_SESSION['user'] = $user;
    $_SESSION['role'] = $user['role'];

    // Redirect based on role
    switch ($user['role']) {
        case 'searcher':
            header("Location: searcher.php");
            break;
        case 'supervisor':
            header("Location: supervisor.php");
            break;
        case 'manager':
            header("Location: manager.php");
            break;
        default:
            header("Location: index.php?error=Invalid role");
    }
    exit();
} else {
    header("Location: index.php?error=Invalid credentials");
    exit();
}

$conn->close();
?>
