<?php
include 'connect.php';


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$from = $_POST['from'];
$to = $_POST['to'];
$airline = $_POST['airline'];
$seating = $_POST['seating'];
$departure_date = $_POST['departure_date'];
$departure_time = $_POST['departure_time'];
$return_date = $_POST['return_date'];
$return_time = $_POST['return_time'];
$message = $_POST['message'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$sql = "INSERT INTO bookings (`from`, `to`, airline, seating, departure_date, departure_time, return_date, return_time, message, name, phone, email) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

$stmt->bind_param("ssssssssssss", $from, $to, $airline, $seating, $departure_date, $departure_time, $return_date, $return_time, $message, $name, $phone, $email);

if ($stmt->execute()) {
    header("Location: ticket_display.php?from=Sri+Lanka&to=United+Kingdom&airline=AirLanka&seating=Window&departure_date=2024-06-07&departure_time=10%3A00&return_date=2024-06-10&return_time=15%3A00&message=good+one&name=hasith+harinda&phone=h123%40gmail.com&email=h123%40gmail.com");
    exit();
    
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
