<?php
include("connect.php");
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}

include("connect.php");

$sql = "SELECT * FROM flight_bookings";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Flight Bookings</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Manage Flight Bookings</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>From</th>
            <th>To</th>
            <th>Departure Date</th>
            <th>Return Date</th>
            <th>Message</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['visitor_name']; ?></td>
            <td><?php echo $row['visitor_email']; ?></td>
            <td><?php echo $row['visitor_phone']; ?></td>
            <td><?php echo $row['from_location']; ?></td>
            <td><?php echo $row['to_location']; ?></td>
            <td><?php echo $row['departure_date']; ?></td>
            <td><?php echo $row['return_date']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td>
                <a href="edit_flight_booking.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete_flight_booking.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
    <a href="admin_panel.php">Back to Admin Panel</a>
</body>
</html>
