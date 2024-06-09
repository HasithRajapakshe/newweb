<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxi Booking</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0; 
}

.ticket {
    max-width: 600px;
    margin: 20px auto;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #ebe387; 
    padding: 20px;
    margin-top:10%;
}

.ticket-header {
    text-align: center;
    margin-bottom: 20px;
}

.ticket-header h1 {
    margin: 0;
    color: #585852; 
}

.ticket-info {
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
    background-color: #f9f9f9; 
    border: 1px solid #ccc;
}

.ticket-info p {
    margin: 5px 0;
    color: #333; 
}

.ticket-info p strong {
    font-weight: bold;
    margin-right: 5px;
    color: #021e55; 
}

    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="menu">
    <div class="logo">GoLanka.com</div>
    <nav>
        <a href="homepage.php">Home</a>
        <a href="about.php">About</a>
        <a href="contac.php">Contact Us</a>
    </nav>
</div>
    <div class="ticket">
        <div class="ticket-header">
            
            <h1>Taxi Booking</h1>
            <div class="ticket-logo">GoLanka.com</div>
        </div>
        <div class="ticket-info">
            <p><strong>From:</strong> <?php echo $_GET['from']; ?></p>
            <p><strong>To:</strong> <?php echo $_GET['to']; ?></p>
            <p><strong>Taxi:</strong> <?php echo $_GET['taxis']; ?></p>
            <p><strong>Name:</strong> <?php echo $_GET['name']; ?></p>
            <p><strong>Phone:</strong> <?php echo $_GET['phone']; ?></p>
            <p><strong>Email:</strong> <?php echo $_GET['email']; ?></p>
        </div>
    </div>
</body>
</html>
