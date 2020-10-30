<?php

    $signup_Error="";
    include('php/conn.php');
    include('php/functions.php');
    if(isset($_POST['submit']))
    {

        $input_email=validate($_POST['email']);
        $input_password=validate($_POST['password']);
        $input_password=password_hash( $input_password, PASSWORD_DEFAULT );
        $input_fname=validate($_POST['fname']);
        $input_lname=validate($_POST['lname']);
        $input_age=validate($_POST['age']);
        $input_tel=validate($_POST['tel']);
        $input_addr=validate($_POST['addr']);
        $input_dob=$_POST['dob'];
        $input_state=$_POST['state'];
        $input_licence=$_POST['license'];
        $query="SELECT fname FROM users WHERE email='$input_email'";
        $res=mysqli_query($conn,$query);
        if(mysqli_num_rows($res)>0)
        {
            $signup_Error="<div class='alert alert-warning'>This email is already registered with us, Try loging in</div>";
        }
        else
        {
            $query="INSERT INTO users (id,fname,lname,email,password,age,mobile,address,dob,state,license) VALUES (NULL,'$input_fname','$input_lname','$input_email','$input_password','$input_age','$input_tel','$input_addr','$input_dob','$input_state','$input_licence')";
            mysqli_query($conn,$query);
            header("Location: thanks.html");
        }
    }
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom Styles -->
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Transport</title>
</head>

<body>
    <!-- Navbar -->
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-sm navbar-light sticky-top bg-warning" id="navbar">
        <ul class="navbar-nav">
            <li class="navbar-item">
                <a href="index.html" class="navbar-brand"><img src="img/swift.png" style="width: 100px;"></a>
            </li>

            <li class="navbar-item">
                <a href="history.html" class="nav-link">History</a>
            </li>

            <li class="navbar-item">
                <a href="career.html" class="nav-link">Careers</a>
            </li>

            <li class="navbar-item">
                <a href="about.html" class="nav-link">About Us</a>
            </li>

            <li class="navbar-item">
                <a href="contact.html" class="nav-link">Contact</a>
            </li>

        </ul>


        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <button type="button" class="btn btn-danger" onclick="location.href='signup.html'">Sign up</button>
                <button type="button" class="btn btn-outline-dark" onclick="location.href='login.html'">Log
                    in</button>
            </li>
        </ul>
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
            <legend>Become a Driver:</legend>
            <?php echo $signup_Error; ?>
            <form class="form-control bg-light" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" onsubmit="return validate();">

                <div class="form-group bg-light">
                    <label for='fname'>First Name:</label>
                    <input type="text" class="form-control bg-light" placeholder="First Name" id="fname" name="fname">
                </div>

                <div class="form-group">
                    <label for="lname">Last Name:</label>
                    <input type="text" class="form-control bg-light" placeholder="Last Name" id="last" name="lname">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control bg-light" placeholder="E-mail" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control bg-light" placeholder="********" id="pass" name="password">
                </div>

                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="text" class="form-control bg-light" placeholder="Age" id="age" name="age">
                </div>

                <div class="form-group">
                    <label for="tel">Mobile Number:</label>
                    <input type="text" id="tel" class="form-control bg-light" placeholder="XXXXXXXXXX" name="tel">
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea id="address" cols="30" rows="5" class="form-control bg-light" name="addr"></textarea>
                </div>

                <div class="form-group">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" class="form-control bg-light" id="dob" min="1970-01-01" max="2001-12-01" required name="dob">

                </div>

                <div class="form-group">
                    <label for="state">State:</label>
                    <select id="state" class="form-control bg-light" required name="state">
                        <option value="" selected disabled><span style="color: grey;">--Select--</span></option>
                        <option value="MAHARASHTRA">Maharashtra</option>
                        <option value="UTTAR PRADESH">Uttar Pradesh</option>
                        <option value="RAJASTHAN">Rajasthan</option>
                        <option value="KERELA">Kerela</option>
                        <option value="TAMILNADU">Tamil Nadu</option>
                        <option value="KARNATAKA">Karnataka</option>
                        <option value="MADHYA PRADESH">Madhya Pradesh</option>
                        <option value="BIHAR">Bihar</option>
                        <option value="ANDHRA PRADESH">Andhra Pradesh</option>
                    </select>
                </div>

                <div class="form-group bg-light">
                    <label for="license">Upload your Diver's Licence Number:</label>
                    <input type="text" name="license" class="form-control bg-light">
                </div>

                <input type="submit" class="btn btn-outline-success" value="Submit" name="submit">
                <button type="reset" class="btn btn-dark">Clear</button>
            </form>
        </fieldset>

        <div class="">
            Already have an account? <a data-toggle="tooltip" title="Go to Log in Page" href="login.html">Log in</a>
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
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1884.3906915832029!2d72.93847708977329!3d19.161044525251963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b85e757a306b%3A0xe0c4fc8df8c182ad!2sKrishna%20Mills%20Compund!5e0!3m2!1sen!2sin!4v1603887712518!5m2!1sen!2sin" width="600" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>


</html>
