<?php
    $loginError="";
    include('php/conn.php');
    include('php/functions.php');
    if(isset($_POST['submit']))
    {
        $input_email=validate($_POST['email']);
        $input_password=validate($_POST['password']);
        $query="SELECT fname, lname, password FROM users WHERE email='$input_email'";
        $res=mysqli_query($conn,$query);
        echo mysqli_error($conn);
        if($res)
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
            }
            else
            {
                $loginError="<div class='alert alert-danger'>Invalid credentials</div>";
            }
        }
        else
        {
            $loginError="<div clas='alert'>This email is not registered with us</div>";
        }
    }
?>

<html>
    <head>
        <title>
            LOGIN
        </title>
    </head>
    <body bgcolor="lavender" >

       <center>
           <img src="img/swift.png" height="20%">
       </center>

        <?php echo $loginError; ?>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST" font style="font-family: 'Times New Roman', Times, serif;">
            <fieldset>
                <div style="background-color: yellow; color: black;"><center><legend ><h1>LOGIN:</h1></legend></center></div>
                EMAIL ID:<input type="email" name="email" required ><br><br>
                PASSWORD :<input type="password" name="password" required><br><br>
                <input type="submit" value="SUBMIT" name="submit">
            </fieldset>
        </form><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <center>
            <div style="background-color:black">
            <font size="6" font color="yellow">
             <p>CONTACT US!!!</p>
           <h4>TEL:9820146104/9619618394</h4>
           <h4>EMAIL-anand.swiftlogistics@gmail.com</h4>
           <p font size="9"> KRISHNA MILLS COMPUND,LBS ROAD ,<br> BHANDUP WEST ,MUMBAI ,<br> MAHARASHTRA 400080</p>
            </div>
        </center>
    </body>
</html>
