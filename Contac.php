<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
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
    <div class="CTN3">
        <form>
            <h1>Contact Us</h1>
            <input type="text" id="firstName" placeholder="First Name" required>
            <input type="text" id="lastName" placeholder="Last Name" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="text" id="mobile" placeholder="Mobile" required>
            <h4>Type your Message Here...</h4>
            <textarea required></textarea>
            <input type="submit" value="Send" id="but">
        </form>
    </div>
    <script src="app.js"></script>
    <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>
</body>
</html>
