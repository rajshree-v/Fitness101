<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Register Now
        </title>
        <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="regis.css">
        <style>
            body{
                background:url('images/wallpaper.jpg');
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
        <script>

        function CheckPassword(inputtxt) { 
            var password = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

            if(inputtxt.value.match(password)) 
            { 
                return true;
            }
            else
            { 
                alert('Enter a password between 6 to 20 characters which contain at least one numeric digit, one uppercase and one lowercase letter')
                return false;
            }
            return true;
        }
        function validateform(){
            var name = regform.fname.value
            var email = regform.email.value
            //var password = document.regform.pass.value

            if(name==null||name=="")
            {
                alert("Name can't be blank")
                document.regform.fname.focus();
                return false;

            }
            if(email==null||email=="")
            {
                alert("Email-ID required")
                document.regform.email.focus();
                return false;

            }
            if (email.indexOf("@", 0) < 0)
            {
                alert("Please enter a valid e-mail address.");
                document.regform.email.focus();
                return false;

            }
            if (email.indexOf(".", 0) < 0)
            {
                alert("Please enter a valid e-mail address.");
                document.regform.email.focus();
                return false;

            }
            /*  if(password.length<6)
            {
                alert("Password must be atleast 6 characters long")
                return false;

            }  */
            if(document.regform.gender[0].checked == false && 
            document.regform.gender[1].checked == false && 
            document.regform.gender[2].checked == false)
            {
                alert("Please Select Gender");
                document.regform.gender[0].focus();
                return false;
            }

            if (document.regform.dob.value==null ||document.regform.dob.value == "") 
            {
                alert("Please enter your date of birth");
                document.regform.dob.focus();
                return false;
            }

            if (document.regform.dob.value > 01-01-2008) 
            {
                alert("You are too young to join us.");
                document.regform.dob.focus();
                return false;
            }
            if (document.regform.address.value ==null ||document.regform.address.value == "") 
            {
                alert("Please select your country.");
                document.regform.address.focus();
                return false;
            }
        return true;

        }
        </script>
    </head>
    <body>
        <header>
            <div class="header" style="color:white;">
                <a href="homepage.html">
                   <img src="images/logo.png" width=35px height=30px>
                   <h1 style="display: inline; ">FITNESS 101</h1>
                </a>
                <div class="dropdown">
                    <button class="dropbtn"><img src="images/user.png" width=40px height=40px ></button>
                    <div class="dropdown-content">
                        <a href="index.php">Log-In</a>
                        <a href="register.php">Sign-Up</a>
                    </div>
                </div>
            </div>
        </header>
        <nav>
            <div id="navigation" >
                <a href="homepage.html">Home</a>
                <a href="health.html">Healthy Living</a>
                <a href="faq.html">FAQ</a>
                <a href="contactus.html">Contact Us</a>
                <a href="help.php">Help</a>
                <a href="member.php">Member's Area</a>
            </div>
        </nav>
        <form method="post" action="#" name="regform" onsubmit="return (validateform(regform));">
            <div style="background: rgba(121, 86, 86, 0.4);" id="login-box">
            <div class="left">
            <h1>Sign up</h1>

            <input type="text" name="fname"  placeholder="Username" />
            <input type="text" name="email"  placeholder="E-mail" />
            <input type="password" name="pass" placeholder="Password" required onchange="CheckPassword(document.regform.pass)">
            Select gender<br>
            <input type="radio" name="gender" value="M"> Male 
            <input type="radio" name="gender" value="F"> Female
            <input type="radio" name="gender" value="O"> Other
            <br><br>
            Date of birth<input type="date"  name="dob" min="1960-01-01" max="2008-12-30" >
            <br><br>
            Country <select name="address" >
            <option value=""> --Select-- </option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="Canada">Canada</option>
            <option value="France">France</option> 
            <option value="Other">Other</option> 

            </select>
            <br><br>
            Already a user?<a href="index.php" style="color:black;"> Login </a>
            <br>
            <input style="align-self: center;" type="submit" name="submit" value="Sign me up" >
            </div>
        </form>
            <div class="right">
            <span class="loginwith">Sign in with<br />social network</span>

            <button class="social-signin facebook" onclick="location.href='https://en-gb.facebook.com/login/'">Sign in with facebook</button>
            <button class="social-signin twitter" onclick="location.href='https://twitter.com/login?lang=en'">Sign in with Twitter</button>
            <button class="social-signin google" onclick="location.href='https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin'">Sign in with Google+</button>
            </div>
            <div class="or">OR</div>
        

    </body>
</html>    



<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];


    $query = "INSERT INTO user
            (password,full_name,gender,birthdate,address,email)
            VALUES ('".$pass."','".$fname."','".$gender."','".$dob."','".$address."','".$email."')";
            mysqli_query($db,$query)or die ('Error in updating Database');
?>

    <script type="text/javascript">
    alert("Congratulations You've Successfully Registered. Login to Unlock exciting new features!");
    window.location = "index.php";
    </script>

<?php
}
?>