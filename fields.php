<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mine_reporter";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$field_name1 = "Mleeta";
$description1 = "vast green contaminated area";
$field_name2 = "Arnoun";
$description2 = "strategic contaminated area with no trees";
$field_name3 = "Sojoud";
$description3 = "vast green contaminated area";
$field_name4 = "Ghandouriyeh";
$description4 = "vast green contaminated area";

$sql = "INSERT INTO fields (field_name, description) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $field_name1, $description1);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$sql = "INSERT INTO fields (field_name, description) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $field_name2, $description2);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$sql = "INSERT INTO fields (field_name, description) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $field_name3, $description3);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$sql = "INSERT INTO fields (field_name, description) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $field_name4, $description4);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
