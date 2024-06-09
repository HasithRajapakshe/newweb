<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
     
</head>
<body>


    <div class="carousel">
    <div class="menu">
    <div class="logo">GoLanka.com</div>
    <nav>
        
        <a href="homepage.php">Home</a>
        <a href="about.php">About</a>
        <a href="contac.php">Contact Us</a>

    </nav>
    
</div>
        <div class="list">
            <div class="item">
                <img src="images/img66.jpg">
                <div class="introduce">
                    <div class="title">EXPLORE</div>
                    <div class="topic">Sri Lanka</div>
                    <div class="des">
                    Embark on a journey to the tropical paradise of Sri Lanka and discover a land of captivating contrasts and boundless beauty. From lush green tea plantations to golden sandy beaches, ancient cultural marvels to thrilling wildlife encounters, Sri Lanka offers a kaleidoscope of experiences for every traveler.
                    </div>
                    <button class="seeMore">SEE MORE &#8599</button>
                </div>
                <div class="detail">
                    <div class="title">Wonder Of Asia</div>
                    <div class="des">
                    Embark on a journey to the tropical paradise of Sri Lanka and discover a land of captivating contrasts and boundless beauty. From lush green tea plantations to golden sandy beaches, ancient cultural marvels to thrilling wildlife encounters, Sri Lanka offers a kaleidoscope of experiences for every traveler.
                    </div>
                    <br>
                    <div class="checkout">
                        <button onclick="document.location='https://www.lonelyplanet.com/sri-lanka'">CHECKOUT</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/img33.jpg">
                <div class="introduce">
                    <div class="title">BOOKING</div>
                    <div class="topic">Flights</div>
                    <div class="des">
                    Discover the best deals on flights to and from Sri Lanka with GoLanka.com. Our user-friendly platform allows you to compare prices, choose from a wide range of airlines, and book your flights in just a few clicks. 
                    </div>
                    <button class="seeMore">SEE MORE &#8599</button>
                </div>
                <div class="detail">
                    <div class="title">Arrivals and Departures</div>
                    <div class="des">
                    Stay informed with the latest updates on flights arriving and departing from Sri Lanka with GoLanka.com . Our platform provides real-time information on all incoming and outgoing flights, ensuring you have the most accurate and up-to-date details at your fingertips.
                    </div>
                    <br>
                    <div class="checkout">
                        <button onclick="document.location='flight.php'">CHECKOUT</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/img44.jpg">
                <div class="introduce">
                    <div class="title"> EASY BOOKING</div>
                    <div class="topic">Hotels</div>
                    <div class="des">
                    Discover the best accommodations across Sri Lanka with GoLanka.com. Whether you're looking for luxury resorts, budget-friendly hotels, or charming boutique stays, our platform offers a wide range of options to suit your needs. 
                    </div>

                    <button class="seeMore">SEE MORE &#8599</button>
                </div>
                <div class="detail">
                    <div class="title">The Best Hotels in Sri Lanka</div>
                    <div class="des">
                    Experience the diverse charm and unparalleled hospitality of Sri Lanka with our extensive selection of hotels. Whether you're seeking a luxurious beachfront resort, a cozy boutique hotel, or a budget-friendly stay, GoLanka.com makes finding and booking your perfect accommodation effortless.
                    </div>
                    <br>
                    <div class="checkout">
                        <button onclick="document.location='hotels.php'">CHECKOUT</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/img55.jpg">
                <div class="introduce">
                    <div class="title">SRI LANKAN TRAINS</div>
                    <div class="topic">Booking</div>
                    <div class="des">
                    Explore the beauty of Sri Lanka by train with GoLanka.com. Our platform offers an easy way to book train tickets across the country, ensuring you can travel comfortably and efficiently. 
                    </div>
                    <button class="seeMore">SEE MORE &#8599</button>
                </div>
                <div class="detail">
                    <div class="title">Explore Sri Lanka by Rail</div>
                    <div class="des">
                    Immerse yourself in the scenic beauty and cultural richness of Sri Lanka's railways with GoLanka.com. Whether you're planning a leisurely journey through lush tea plantations, a thrilling ride along the coast, or an adventure to historic sites, our platform makes booking your train tickets a breeze.
                    </div>
                    <br>
                    <div class="checkout">
                        <button onclick="document.location='trains.php'">CHECKOUT</button>
                    </div>
                </div>
            </div>

            <div class="item">
                <img src="images/img9.jpg">
                <div class="introduce">
                    <div class="title">EFFORTLESS TAXI</div>
                    <div class="topic">Reservation</div>
                    <div class="des">
                    Discover seamless transportation solutions with GoLanka.com. Our intuitive platform brings you the best deals on taxi services in Sri Lanka, ensuring a hassle-free travel experience. Compare prices, explore various taxi providers, and book your ride in just a few clicks.
                    </div>
                    <button class="seeMore">SEE MORE &#8599</button>
                </div>
                <div class="detail">
                    <div class="title">QuickRide Taxi Booking</div>
                    <div class="des">
                    Easily book your taxi with our platform. Compare prices, choose your vehicle, and reserve your ride in just a few clicks. Enjoy reliable service, transparent pricing, and 24/7 availability. Track your ride in real-time for a hassle-free travel experience. Start your journey with us today!
                    </div>
                    <br>
                    <div class="checkout">
                        <button onclick="document.location='taxi.php'">CHECKOUT</button>
                    </div>
                </div>
            </div>

            
        </div>
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
            <button id="back">See All  &#8599</button>
        </div>
    </div>
</div> 
<div class="Bnf">
    <h1>Benefits of Using GoLanka.com</h1>
    <h3>At GoLanka.com, we strive to make your travel planning effortless and enjoyable. Here are some key benefits of using our platform:</h3>
    <p>Our platform offers an all-in-one travel solution where you can book flights, trains, hotels, and taxis all in one place, saving you time and hassle. Enjoy the best deals and prices by comparing options and securing the most value for your money. Our user-friendly interface makes searching, comparing, and booking your travel services a breeze, with real-time updates on flight arrivals and departures to keep you informed.</p>
    <div class="more">
                        <button class="green" onclick="document.location='about.php'">more</button>
                    </div>

</div>
<div class="box">
    <h4>Available in</h4>
    <a href="play.google.com"><img width="130px" height="70px" src="images/img88.png"></a>
    <a href="www.apple.com"><img width="120px" height="80px" src="images/img77.png"></a>
</div>
                    
    <section class="ours">
        <h1 style="font-size: 20px;">24/7 Updates and Services: Serving Over 1000 Users and Counting</h1>
        <p>Welcome to GoLanka.com, your all-in-one travel booking platform for Sri Lanka. Effortlessly book flights, trains, hotels, and taxis with our user-friendly service. Discover the best deals and make your travel experience smooth and enjoyable. Start your Sri Lankan adventure with us today!</p>
        <div class="data">
            <div class="child">
                <h2 class="green">10k</h2>
                <p>more than visiters</p>
        </div>
            <div class="child">
                <h2 class="green">1k</h2>
                <p>users loging</p>
            </div>
            <div class="child">
                <h2 class="green">500</h2>
                <p>active users</p>
            </div>
        </div>
</section>
    <script src="app.js"></script>
    <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>
</body>
</html>