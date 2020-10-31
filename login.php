<?php
    $loginError="";
    include('php/conn.php');
    include('php/functions.php');
    if(isset($_POST['submit']))
    {
        $input_email=validate($_POST['email']);
        $input_password=validate($_POST['password']);
        echo $input_email;
        echo $input_password;
        $query="SELECT fname, lname, password FROM users WHERE email='$input_email'";
        $res=mysqli_query($conn,$query);
        echo mysqli_error($conn);
        if(mysqli_num_rows($res)>0)
        {
            $row=mysqli_fetch_assoc($res);
            $user_password=$row['password'];
            $user_fname=$row['fname'];
            $user_lname=$row['lname'];
            if(password_verify($input_password,$user_password))
            {
                session_start();
                $_SESSION['email']=$input_email;
                $_SESSION['fname']=$user_fname;
                $_SESSION['lname']=$user_lname;
                $_SESSION['login']=1;
                header("Location:index.php");
            }
            else
            {
                $loginError="<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert'>x</a>Invalid credentials</div>";
            }
        }
        else
        {
            $loginError="<div class='alert alert-warning'><a href='#' class='close' data-dismiss='alert'>x</a>Email not found</div>";
        }
    }
?>


<html>

<head>
    <title> SWIFT TRANSPORT </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                    <a href="contact.php" id="anchor" class="nav-link">Contact</a>
                </li>

            </ul>


            <?php
                if(!isset($_SESSION['login']))
                {
                    $nav = "<ul class=\"navbar-nav ml-auto\"><li class=\"nav-item\"><button type=\"button\" class=\"btn btn-danger\" onclick=\"location.href='signup.php'\">Sign up</button><button type=\"button\" class=\"btn btn-outline-dark\" onclick=\"location.href='login.php'\">Log in</button></li></ul>";
                    echo $nav;
                }
                ?>
        </div>
    </nav>

    <div class="container" style="padding-top: 5em; padding-bottom: 2em;">
        <div class="row">
            <div class="col-sm-4">
                <h1><b>SWIFTT TRANSPORT...</b></h1>
            </div>
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <h5>Call Now | <span style="color: darkgray;"><a href="tel:961918394">Tel:9619618394</a></span></h5>
            </div>
        </div>
    </div>

    <div class="container">
        <fieldset>
            <legend>Log in</legend>
            <?php echo $loginError; ?>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return val();" method="POST">
                <div class="form-group bg-light">
                    <label for="text">E-mail</label>
                    <input type="text" id="email" name="email" class="form-control bg-light" placeholder="Enter your E-mail">
                </div>

                <div class="form-group bg-light">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="form-control bg-light" placeholder="********">
                </div>

                <input type="submit" value="Log in" name="submit" class="btn btn-outline-success">
                <button type="reset" class="btn btn-dark">Clear</button>
            </form>
        </fieldset>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1884.3906915832029!2d72.93847708977329!3d19.161044525251963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b85e757a306b%3A0xe0c4fc8df8c182ad!2sKrishna%20Mills%20Compund!5e0!3m2!1sen!2sin!4v1603887712518!5m2!1sen!2sin" width="600" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>
