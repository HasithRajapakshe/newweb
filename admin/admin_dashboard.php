<?php
include("connect.php");
session_start();

if (!isset($_SESSION['admin_loggedin']) || $_SESSION['admin_loggedin'] !== true) {
    header("Location: admin_login.php");
    exit();
}

// Fetch all bookings from the database
$flight_sql = "SELECT * FROM flight_bookings";
$hotel_sql = "SELECT * FROM hotel_bookings";
$train_sql = "SELECT * FROM train_bookings";
$taxi_sql = "SELECT * FROM taxi_bookings";

$flight_result = $conn->query($flight_sql);
$hotel_result = $conn->query($hotel_sql);
$train_result = $conn->query($train_sql);
$taxi_result = $conn->query($taxi_sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <div class="logo">GoLanka.com - Admin Panel</div>
        <nav>
            <a href="admin_dashboard.php">Dashboard</a>
            <a href="admin_logout.php">Logout</a>
        </nav>
    </div>
    
    <div class="dashboard">
        <h2>Flight Bookings</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Departure Date</th>
                <th>Return Date</th>
                <th>Passengers</th>
                <th>Class</th>
                <th>Message</th>
            </tr>
            <?php
            if ($flight_result->num_rows > 0) {
                while ($row = $flight_result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['visitor_name'] . "</td>
                            <td>" . $row['visitor_email'] . "</td>
                            <td>" . $row['visitor_phone'] . "</td>
                            <td>" . $row['departure_date'] . "</td>
                            <td>" . $row['return_date'] . "</td>
                            <td>" . $row['total_passengers'] . "</td>
                            <td>" . $row['class_preference'] . "</td>
                            <td>" . $row['visitor_message'] . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No flight bookings found</td></tr>";
            }
            ?>
        </table>

        <h2>Hotel Bookings</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Adults</th>
                <th>Children</th>
                <th>Room</th>
                <th>Message</th>
            </tr>
            <?php
            if ($hotel_result->num_rows > 0) {
                while ($row = $hotel_result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['visitor_name'] . "</td>
                            <td>" . $row['visitor_email'] . "</td>
                            <td>" . $row['visitor_phone'] . "</td>
                            <td>" . $row['checkin'] . "</td>
                            <td>" . $row['checkout'] . "</td>
                            <td>" . $row['total_adults'] . "</td>
                            <td>" . $row['total_children'] . "</td>
                            <td>" . $row['room_preference'] . "</td>
                            <td>" . $row['visitor_message'] . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No hotel bookings found</td></tr>";
            }
            ?>
        </table>

        <h2>Train Bookings</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Departure Date</th>
                <th>Return Date</th>
                <th>Passengers</th>
                <th>Class</th>
                <th>Message</th>
            </tr>
            <?php
            if ($train_result->num_rows > 0) {
                while ($row = $train_result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['visitor_name'] . "</td>
                            <td>" . $row['visitor_email'] . "</td>
                            <td>" . $row['visitor_phone'] . "</td>
                            <td>" . $row['departure_date'] . "</td>
                            <td>" . $row['return_date'] . "</td>
                            <td>" . $row['total_passengers'] . "</td>
                            <td>" . $row['class_preference'] . "</td>
                            <td>" . $row['visitor_message'] . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No train bookings found</td></tr>";
            }
            ?>
        </table>

        <h2>Taxi Bookings</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Pickup Date</th>
                <th>Pickup Time</th>
                <th>Pickup Location</th>
                <th>Dropoff Location</th>
                <th>Message</th>
            </tr>
            <?php
            if ($taxi_result->num_rows > 0) {
                while ($row = $taxi_result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['visitor_name'] . "</td>
                            <td>" . $row['visitor_email'] . "</td>
                            <td>" . $row['visitor_phone'] . "</td>
                            <td>" . $row['pickup_date'] . "</td>
                            <td>" . $row['pickup_time'] . "</td>
                            <td>" . $row['pickup_location'] . "</td>
                            <td>" . $row['dropoff_location'] . "</td>
                            <td>" . $row['visitor_message'] . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No taxi bookings found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
