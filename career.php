<?php
    session_start();
?>
<html>

    <head>
        <title>Career</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <style>
            *{
                font-family: georgia,'Times New Roman',serif;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm navbar-light fixed-top bg-warning" id="navbar">
        
            <a href="index.php" class="navbar-brand"><img src="img/swift.png" style="width: 100px;"></a>
        
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        
        
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="history.php" class="nav-link">History</a>
                    </li>
        
                    <li class="navbar-item">
                        <a href="career.php" class="nav-link">Careers</a>
                    </li>
        
                    <li class="navbar-item">
                        <a href="about.php" class="nav-link">About Us</a>
                    </li>
        
                    <li class="navbar-item">
                        <a href="contact.php" class="nav-link">Contact</a>
                    </li>
        
                </ul>
        
        
                <?php
                if(!isset($_SESSION['login']))
                {
                     $nav = "<ul class=\"navbar-nav ml-auto\"><li class=\"nav-item\" style=\"margin-right: 0.5em;\"><button type=\"button\" class=\"btn btn-danger\" onclick=\"location.href='signup.php'\">Sign up</button></li><li class=\"nav-item\"><button type=\"button\" class=\"btn btn-outline-dark\" onclick=\"location.href='login.php'\">Log in</button></li></ul>";
                    echo $nav;
                }
                if(isset($_SESSION['login']))
                {
                    $nav = "<ul class=\"navbar-nav ml-auto\"><li class=\"nav-item\"><button type=\"button\" class=\"btn btn-outline-warning\" onclick=\"location.href='login.php'\">Log Out</button></li></ul>";
                    echo $nav;
                }
                ?>
            </div>
        </nav>
        <div class="container" style="padding-top: 5em; padding-bottom: 2em;">
            <div class="row">
                <div class="col-sm-4">
                    <h1><b>SWIFT TRANSPORT...</b></h1>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <h5>Call Now | <span style="color: darkgray;"><a href="tel:961918394">Tel:9619618394</a></span></h5>
                </div>
            </div>
        </div>
    
        
        <div class="parallax" style="background-image: url('img/career.webp'); text-align: center;">
            <h1 style="color: aliceblue; top: 40%; font-size: 100px;" class="col-sm-12">Career</h1>
        </div>
        <div class="row" style="text-align: center;">
            <h2 class="container text-center" style="border-top: solid 0.5px red; font-size: 3em;padding-top: 2em;">
                Logistics:
                <div style="font-size: 0.7em;">
                    It is the process of planning and executing the efficient transportation and storage of goods from
                    the point of origin to the point of consumption.<br> The goal of logistics is to meet customer
                    requirements in a timely, cost-effective manner.
                </div>
            </h2>
        </div>
        <hr>
        <div class="container text-center">
            <h1 style="font-size: 80px;">Why Swift Transport?</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 text-center">
                    <img src="img/fas.jpg"  height="150" >
                    <h4>Fast Delivery</h4>
                </div>

                <div class="col-sm-3 text-center" style="top:2em;">
                    <a href="history.php"><img src="img/History-title.png"  height="100" width="250"></a>
                    <h4>History</h4>
                </div>

                <div class="col-sm-3 text-center">
                    <img src="img/car.gif" height="150">
                    <h4>Only Certified Motors</h4>
                </div>

                <div class="col-sm-3 text-center">
                    <a href="about.php"><img src="img/client.webp" height="130" class="rounded-circle"></a>
                    <h4>Our clientele</h4>
                </div>
            </div>
        </div>



    <div id="contactUs" class="jumbotron text-center bg-dark" style="margin-bottom: 0; text-align: center;">
        <div class="container text-white">
            <h3>Contact Us</h3>
            <h4>Telephone:<a href="tel:9619618394">9619618394</a></h4>
            <h4>E-mail:<a href="mailto:samarthborade09@gmail.com">rishit321@gmail.com</a></h4>
        </div>
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="outer">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1884.3906915832029!2d72.93847708977329!3d19.161044525251963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b85e757a306b%3A0xe0c4fc8df8c182ad!2sKrishna%20Mills%20Compund!5e0!3m2!1sen!2sin!4v1603887712518!5m2!1sen!2sin"
                        width="600" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0">
                    </iframe>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </body>

</html>
