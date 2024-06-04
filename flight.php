<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Booking Form</title>
    <link rel="stylesheet" href="style.css">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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
<div class="container1">

<form class="form-group">
    <h1 class="text-center">Airline Booking Form</h1>

    <div id="form">
        <h3 class="text-white">Booking Details</h3>

    <div id="input">
        <input type="text" id="input-group" placeholder="From">
        <input type="text" id="input-group" placeholder="To">
        <input type="text" id="input-group" placeholder="Departure Date">
        <input type="text" id="input-group" placeholder="Departure Time">
        <select  id="input-group" style="background: black;">
            <option value="">Preffered Airline</option>
            <option value="">IndoGo</option>
            <option value="">AirIndia</option>
            <option value="">SpaceJet</option>
        </select>
        <select  id="input-group" style="background: black;">
            <option value="">Preffered Seating</option>
            <option value="">Economy Class</option>
            <option value="">Business Class</option>
            <option value="">First Class</option>
        </select>
        </div><!--input-->

        <div id="input2"><!--input2-->
            <input type="number" id="input-group" placeholder="Adult">
            <input type="number" id="input-group" placeholder="Children(2-11years)">
            <input type="number" id="input-group" placeholder="infant(under 2years)">
        </div><!--input2-->

        <div id="input3"><!--input3-->
            <span id="input-group" class="text-primary">Select Your Fare</span> 
            <input type="radio" id="input-group" name="r">
            <label class="text-white" for="input-group">One Way</label>
            <input type="radio" id="input-group" name="r">
            <label class="text-white" for="input-group">Round Trip</label>
        </div><!--input3-->

        <div id="input4"><!--input4-->
            <input type="text" id="input-group" placeholder="Return Date">
            <input type="text" id="input-group" placeholder="Return time">
            <input type="text" id="input-group1" placeholder="Any Message">
        </div><!--input4-->

        <div id="input5"><!--input5-->
            <h3 class="text-white">Personal Details</h3>
        </div><!--input5-->

        <div id="input6"><!--input6-->
            <input type="text" id="input-group" placeholder="Full Nmae">
            <input type="number" id="input-group" placeholder="Phone Number">
            <input type="email" id="input-group1" placeholder="Email">
        </div><!--input6-->
        <button type="submit" class="btn btn-warning text-white">Submit Form</button>
        <button type="reset" class="btn btn-primary">Clear Form</button>
    </div><!--form-->

</form><!--form-->

</div><!--container-->
    <script src="app.js"></script>
    <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>
</body>
</html>
