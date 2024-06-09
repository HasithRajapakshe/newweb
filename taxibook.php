<?php
session_start();
include("connect.php");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$from = $_POST['from'];
$to = $_POST['to'];
$taxis = $_POST['taxis'];
$message = $_POST['message'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$sql = "INSERT INTO taxi_bookings (from_location, to_location, taxis_name, message, full_name, phone_number, email) VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

$stmt->bind_param("sssssss", $from, $to, $taxis, $message, $name, $phone, $email);

if ($stmt->execute()) {
  
    $url_params = http_build_query(array(
        'from' => $from,
        'to' => $to,
        'taxis' => $taxis,
        'message' => $message,
        'name' => $name,
        'phone' => $phone,
        'email' => $email
    ));
    
   
    header("Location:taxibookingdisply.php?" . $url_params);
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
