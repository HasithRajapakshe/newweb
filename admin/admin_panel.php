<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="style.css">
    <style>
       
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

h1, h2 {
    text-align: center;
}

form {
    max-width: 500px;
    margin: 50px auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin: 10px 0 5px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0 20px;
    border: 1px solid #ddd;
    box-sizing: border-box;
}

button {
    display: block;
    width: 100%;
    padding: 10px;
    background: #007BFF;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background: #0056b3;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 8px;
    text-align: left;
}

th {
    background: #f4f4f4;
}

nav ul {
    list-style: none;
    padding: 0;
    text-align: center;
}

nav

    </style>
</head>
<body>
    <h1>Welcome to the Admin Panel</h1>
    <nav>
        <ul>
            <li><a href="manage_flight_bookings.php">Manage Flight Bookings</a></li>
            <li><a href="manage_hotel_bookings.php">Manage Hotel Bookings</a></li>
            <li><a href="manage_train_bookings.php">Manage Train Bookings</a></li>
            <li><a href="manage_taxi_bookings.php">Manage Taxi Bookings</a></li>
            <li><a href="admin_logout.php">Logout</a></li>
        </ul>
    </nav>
</body>
</html>
