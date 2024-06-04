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

  <div class="menu">
    <div class="logo">GoLanka.com</div>
    <nav>
        <a href="homepage.php">Home</a>
        <a href="about.php">About</a>
        <a href="contac.php">Contact Us</a>
    </nav>
</div>


    <div class="carousel">
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
                    <div class="title">Aerphone GHTK</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, reiciendis suscipit nobis nulla animi, modi explicabo quod corrupti impedit illo, accusantium in eaque nam quia adipisci aut distinctio porro eligendi. Reprehenderit nostrum consequuntur ea! Accusamus architecto dolores modi ducimus facilis quas voluptatibus! Tempora ratione accusantium magnam nulla tenetur autem beatae.
                    </div>
                    <div class="specifications">
                        <div>
                            <p>Used Time</p>
                            <p>6 hours</p>
                        </div>
                        <div>
                            <p>Charging port</p>
                            <p>Type-C</p>
                        </div>
                        <div>
                            <p>Compatible</p>
                            <p>Android</p>
                        </div>
                        <div>
                            <p>Bluetooth</p>
                            <p>5.3</p>
                        </div>
                        <div>
                            <p>Controlled</p>
                            <p>Touch</p>
                        </div>
                    </div>
                    <div class="checkout">
                        <button>ADD TO CART</button>
                        <button>CHECKOUT</button>
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
                    <div class="title">Aerphone GHTK</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, reiciendis suscipit nobis nulla animi, modi explicabo quod corrupti impedit illo, accusantium in eaque nam quia adipisci aut distinctio porro eligendi. Reprehenderit nostrum consequuntur ea! Accusamus architecto dolores modi ducimus facilis quas voluptatibus! Tempora ratione accusantium magnam nulla tenetur autem beatae.
                    </div>
                    <div class="specifications">
                        <div>
                            <p>Used Time</p>
                            <p>6 hours</p>
                        </div>
                        <div>
                            <p>Charging port</p>
                            <p>Type-C</p>
                        </div>
                        <div>
                            <p>Compatible</p>
                            <p>Android</p>
                        </div>
                        <div>
                            <p>Bluetooth</p>
                            <p>5.3</p>
                        </div>
                        <div>
                            <p>Controlled</p>
                            <p>Touch</p>
                        </div>
                    </div>
                    <div class="checkout">
                        <button>ADD TO CART</button>
                        <button>CHECKOUT</button>
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
                    <div class="title">Aerphone GHTK</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, reiciendis suscipit nobis nulla animi, modi explicabo quod corrupti impedit illo, accusantium in eaque nam quia adipisci aut distinctio porro eligendi. Reprehenderit nostrum consequuntur ea! Accusamus architecto dolores modi ducimus facilis quas voluptatibus! Tempora ratione accusantium magnam nulla tenetur autem beatae.
                    </div>
                    <div class="specifications">
                        <div>
                            <p>Used Time</p>
                            <p>6 hours</p>
                        </div>
                        <div>
                            <p>Charging port</p>
                            <p>Type-C</p>
                        </div>
                        <div>
                            <p>Compatible</p>
                            <p>Android</p>
                        </div>
                        <div>
                            <p>Bluetooth</p>
                            <p>5.3</p>
                        </div>
                        <div>
                            <p>Controlled</p>
                            <p>Touch</p>
                        </div>
                    </div>
                    <div class="checkout">
                        <button>ADD TO CART</button>
                        <button>CHECKOUT</button>
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
                    <div class="title">Aerphone GHTK</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, reiciendis suscipit nobis nulla animi, modi explicabo quod corrupti impedit illo, accusantium in eaque nam quia adipisci aut distinctio porro eligendi. Reprehenderit nostrum consequuntur ea! Accusamus architecto dolores modi ducimus facilis quas voluptatibus! Tempora ratione accusantium magnam nulla tenetur autem beatae.
                    </div>
                    <div class="specifications">
                        <div>
                            <p>Used Time</p>
                            <p>6 hours</p>
                        </div>
                        <div>
                            <p>Charging port</p>
                            <p>Type-C</p>
                        </div>
                        <div>
                            <p>Compatible</p>
                            <p>Android</p>
                        </div>
                        <div>
                            <p>Bluetooth</p>
                            <p>5.3</p>
                        </div>
                        <div>
                            <p>Controlled</p>
                            <p>Touch</p>
                        </div>
                    </div>
                    <div class="checkout">
                        <button>ADD TO CART</button>
                        <button>CHECKOUT</button>
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
   <p>feheielbnhiotjhjgfonnohjoijofbtlkhelbkhyjijdflehhjhhitjhoijeblblkbm</p>

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