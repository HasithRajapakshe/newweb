<?php
include("connect.php");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    
    $visitor_name = $_POST['visitor_name'];
    $visitor_email = $_POST['visitor_email'];
    $visitor_phone = $_POST['visitor_phone'];
    $total_adults = $_POST['total_adults'];
    $total_children = $_POST['total_children'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $room_preference = $_POST['room_preference'];
    $visitor_message = $_POST['visitor_message'];

    $sql = "INSERT INTO hotel_bookings (visitor_name, visitor_email, visitor_phone, total_adults, total_children, checkin, checkout, room_preference, visitor_message) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }
    
$stmt->bind_param("sssiissss", $visitor_name, $visitor_email, $visitor_phone, $total_adults, $total_children, $checkin, $checkout, $room_preference, $visitor_message);

        if ($stmt->execute()) {
           
            header("Location: displayhotelbooking.php");
            exit(); 
           
        } else {

            echo "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
?>
        