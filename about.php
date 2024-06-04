<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="style.css">
    <style>
     
     .icons a{
    text-decoration: none;
    color: #3fe0e6;
}
.icons ion-icon{
    color:#3fe0e6;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color: #3176c5;
}
    
  </style>
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
<div class="about">
            <h2>About Us</h2>
            <div class="wrapper">
                <div class="ctn">
                    <h3>
                    Welcome to GoLanka.com, your premier destination for seamless travel planning in Sri Lanka.
                    </h3><br>
                    <p>
                    We are dedicated to making your journey as smooth and enjoyable as possible, offering a comprehensive range of services from booking flights and trains to securing the best hotels and taxi services. Our intuitive platform is designed with you in mind, providing easy access to the best deals and ensuring a hassle-free travel experience.<br> 
                    </p><br>
                    
                   
                   
                    <br>
                    
                    <div class="icons">
                        <div class="lol">
                        <a target="_blank"href="https://web.facebook.com/login.php/?_rdc=1&_rdr"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a target="_blank" href="https://www.instagram.com/?hl=en"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a target="_blank" href="https://twitter.com/i/flow/login"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a target="_blank" href="www.google.com"><ion-icon name="logo-google"></ion-icon></a>
                        <a target="_blank" href="https://www.bing.com/ck/a?!&&p=102ef677d886dd5bJmltdHM9MTcwOTg1NjAwMCZpZ3VpZD0wNWEzYjUxOC00ZmYyLTZmMWUtMzk3Yy1hMTBmNGU2OTZlMzgmaW5zaWQ9NTE5NA&ptn=3&ver=2&hsh=3&fclid=05a3b518-4ff2-6f1e-397c-a10f4e696e38&psq=skype+login&u=a1aHR0cHM6Ly93d3cuc2t5cGUuY29tL2VuLw&ntb=1"><ion-icon name="logo-skype"></ion-icon></a>
                        </div>
                    </div>

                </div>
                <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

                <div class="imsec">
                    <img width="390px" height="240px" src="images/img990.jpg"><br>

                </div>
            </div>

        </div>
        
    </div>
    </div>
    <script src="app.js"></script>
    <footer>
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>
</body>
</html>
