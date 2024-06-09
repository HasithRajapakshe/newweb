<?php
include("connect.php");

$username = "admin"; // Change as needed
$password = password_hash("admin123", PASSWORD_DEFAULT); // Change as needed

$sql = "INSERT INTO admin (username, password) VALUES (?, ?)";
if ($stmt = $conn->prepare($sql)) {
    $stmt->bind_param("ss", $username, $password);
    if ($stmt->execute()) {
        echo "Admin user created successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Error preparing statement: " . $conn->error;
}

$conn->close();
?>
