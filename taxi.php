<?php
session_start();
include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Booking Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="taxis">
<div class="menu">
    <div class="logo">GoLanka.com</div>
    <nav>
        <a href="homepage.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact Us</a>
    </nav>
</div>
<div class="bookf1">
    <div class="booking-form-w3layouts">
        <form action="taxibook.php" method="post">
            <h2 class="sub-heading-agileits">Booking Details</h2>
            <div class="main-flex-w3ls-sectns">
                <div class="field-agileinfo-spc form-w3-agile-text1">
                    <select class="form-control" name="from" required>
                        <option value="" disabled selected>From</option>
                        <option value="Colombo">Colombo</option>
                        <option value="Badulla">Badulla</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Jaffna">Jaffna</option>
                        <option value="Matara">Matara</option>
                    </select>
                </div>
                <div class="field-agileinfo-spc form-w3-agile-text2">
                    <select class="form-control" name="to" required>
                    <option value="" disabled selected>To</option>
                        <option value="Colombo">Colombo</option>
                        <option value="Badulla">Badulla</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Jaffna">Jaffna</option>
                        <option value="Matara">Matara</option>
                    </select>
                </div>
            </div>
            <div class="main-flex-w3ls-sectns">
                <div class="field-agileinfo-spc form-w3-agile-text1">
                    <select class="form-control" name="taxis" required>
                        <option value="" disabled selected>Preferred Taxis</option>
                        <option value="Buses">Buses</option>
                        <option value="Tuk">Tuk</option>
                        <option value="Cars">Cars</option>
                        <option value="Cabs">Cabs</option>
                        
                    </select>
                </div>
                
            </div>
            
            
            <div class="field-agileinfo-spc form-w3-agile-text">
                <textarea name="message" placeholder="Any Message..."></textarea>
            </div>
            <h3 class="sub-heading-agileits">Personal Details</h3>
            <div class="main-flex-w3ls-sectns">
                <div class="field-agileinfo-spc form-w3-agile-text1">
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="field-agileinfo-spc form-w3-agile-text2">
                    <input type="tel" name="phone" placeholder="Phone Number" required>
                </div>
            </div>
            <div class="field-agileinfo-spc form-w3-agile-text">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="clear"></div>
            <input type="submit" value="Submit">
            <input type="reset" value="Clear Form">
            <div class="clear"></div>
        </form>
    </div>
</div>
<script src="app.js"></script>
</body>
</html>
