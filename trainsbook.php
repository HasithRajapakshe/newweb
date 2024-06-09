<?php
session_start();
include("connect.php");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$from = $_POST['from'];
$to = $_POST['to'];
$train = $_POST['train'];
$seating = $_POST['seating'];
$departure_date = $_POST['departure_date'];
$departure_time = $_POST['departure_time'];
$message = $_POST['message'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$sql = "INSERT INTO train_bookings (from_location, to_location, train_name, seating_preference, departure_date, departure_time, message, full_name, phone_number, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

$stmt->bind_param("ssssssssss", $from, $to, $train, $seating, $departure_date, $departure_time, $message, $name, $phone, $email);

if ($stmt->execute()) {
   
    $url_params = http_build_query(array(
        'from' => $from,
        'to' => $to,
        'train' => $train,
        'seating' => $seating,
        'departure_date' => $departure_date,
        'departure_time' => $departure_time,
        'message' => $message,
        'name' => $name,
        'phone' => $phone,
        'email' => $email
    ));
    
   
    header("Location: trainticketdisplay.php?" . $url_params);
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
