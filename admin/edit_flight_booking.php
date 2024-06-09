<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $visitor_name = $_POST['visitor_name'];
    $visitor_email = $_POST['visitor_email'];
    $visitor_phone = $_POST['visitor_phone'];
    $from_location = $_POST['from_location'];
    $to_location = $_POST['to_location'];
    $departure_date = $_POST['departure_date'];
    $return_date = $_POST['return_date'];
    $message = $_POST['message'];

    $sql = "UPDATE flight_bookings SET visitor_name=?, visitor_email=?, visitor_phone=?, from_location=?, to_location=?, departure_date=?, return_date=?, message=? WHERE id=?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ssssssssi", $visitor_name, $visitor_email, $visitor_phone, $from_location, $to_location, $departure_date, $return_date, $message, $id);
        if ($stmt->execute()) {
            header("Location: manage_flight_bookings.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM flight_bookings WHERE id=?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Flight Booking</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Edit Flight Booking</h1>
    <form action="edit_flight_booking.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="visitor_name">Name</label>
        <input type="text" name="visitor_name" value="<?php echo $row['visitor_name']; ?>" required>
        <label for="visitor_email">Email</label>
        <input type="email" name="visitor_email" value="<?php echo $row['visitor_email']; ?>" required>
        <label for="visitor_phone">Phone</label>
        <input type="tel" name="visitor_phone" value="<?php echo $row['visitor_phone']; ?>" required>
        <label for="from_location">From</label>
        <input type="text" name="from_location" value="<?php echo $row['from_location']; ?>" required>
        <label for="to_location">To</label>
        <input type="text" name="to_location" value="<?php echo $row['to_location']; ?>" required>
        <label for="departure_date">Departure Date</label>
        <input type="date" name="departure_date" value="<?php echo $row['departure_date']; ?>" required>
        <label for="return_date">Return Date</label>
        <input type="date" name="return_date" value="<?php echo $row['return_date']; ?>">
        <label for="message">Message</label>
        <textarea name="message" required><?php echo $row['message']; ?></textarea>
        <button type="submit">Update Booking</button>
    </form>
    <a href="manage_flight_bookings.php">Back to Manage Flight Bookings</a>
</body>
</html>
