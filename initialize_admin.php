<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}
?>

<?php
include("connect.php");

$username = "admin"; 
$password = password_hash("admin123", PASSWORD_DEFAULT); 

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
