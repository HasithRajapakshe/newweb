<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Nanum+Gothic'>
    <style>
       body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0; /* Light gray background */
}

.ticket {
    max-width: 600px;
    margin: 20px auto;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #ebe387; /* White background */
    padding: 20px;
    margin-top:10%;
}

.ticket-header {
    text-align: center;
    margin-bottom: 20px;
}

.ticket-header h1 {
    margin: 0;
    color: #585852; /* Dark blue text color */
}

.ticket-info {
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
    background-color: #f9f9f9; /* Light gray background for ticket info */
    border: 1px solid #ccc;
}

.ticket-info p {
    margin: 5px 0;
    color: #333; /* Dark text color */
}

.ticket-info p strong {
    font-weight: bold;
    margin-right: 5px;
    color: #021e55; /* Dark blue text color for strong elements */
}

    </style>
</head>
<body class="confirmation">
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
            
            <h1>Thank you for your booking!</h1>
            <div class="ticket-logo">GoLanka.com</div>
        </div>
        <div class="ticket-info">
        
       
        <p><strong>Name: <?php echo isset($_POST['visitor_name']) ? $_POST['visitor_name'] : ''; ?></p>
            <p><strong>Email: <?php echo isset($_POST['visitor_email']) ? $_POST['visitor_email'] : ''; ?></p>
            <p><strong>Phone: <?php echo isset($_POST['visitor_phone']) ? $_POST['visitor_phone'] : ''; ?></p>
            <p><strong>Check-in Date: <?php echo isset($_POST['checkin']) ? $_POST['checkin'] : ''; ?></p>
            <p><strong>Check-out Date: <?php echo isset($_POST['checkout']) ? $_POST['checkout'] : ''; ?></p>
            <p><strong>Total Adults: <?php echo isset($_POST['total_adults']) ? $_POST['total_adults'] : ''; ?></p>
            <p><strong>Total Children: <?php echo isset($_POST['total_children']) ? $_POST['total_children'] : ''; ?></p>
            <p><strong>Room Preference: <?php echo isset($_POST['room_preference']) ? $_POST['room_preference'] : ''; ?></p>
            <p><strong>Message: <?php echo isset($_POST['visitor_message']) ? $_POST['visitor_message'] : ''; ?></p>
           
</div>
</div>


    <script src="app.js"></script>
</body>
</html>
