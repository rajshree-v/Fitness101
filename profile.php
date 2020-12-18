<?php 
include 'connection.php';
  session_start(); 
  //accessible to only logged in users.
  if (!isset($_SESSION['id'])) {
?>

    <script type="text/javascript">
      alert("You must Log-In First");
      window.location = "index.php";
    </script>
    
<?php
  }else{
    $id=$_SESSION['id'];
    $query=mysqli_query($db,"SELECT * FROM user where user_id='$id'")or die(mysqli_error());
    $row=mysqli_fetch_array($query);
  }              
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
        My Profile
    </title>
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <style>
        body{
            background:url("https://cdn.hipwallpaper.com/i/83/15/VBLWMS.jpg");
            background-repeat: no-repeat;
            background-size: cover; 
            margin:0;
        }
        body>div{   
            padding:1%;
            margin:1% 5%;
        }
        .profile{
            background:rgba(0,0,0,0.8);
            color:white;
            margin: 3% auto ;
            width:70%;
            text-align:center;
            /* border-radius:50%; */
        }
        table{
            background:rgba(0,0,0,0);
            text-align:left;
            width:100%;
        }
        table td{
            padding:20px;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: black;
            background-color: white;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {background-color: #555;}
    </style>
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
                    <<a href="help.php">Report Problem</a>
                    <a href="contactus.html">Contact Us</a>
                    <a href="member.php">Dashboard</a> 
                    <a href="logout.php">Log out</a>
                </div>
            </div>
        </div>
    </header>
    <nav>
        <div id="navigation">
            <a href="homepage.html" style="color:beige;">Home</a>
            <a href="health.html" style="color:beige;">Healthy Living</a>
            <a href="faq.html" style="color:beige;">FAQ</a>
            <a href="contactus.html" style="color:beige;">Contact Us</a>
            <a href="help.php" style="color:beige;">Help</a>
            <a href="member.php" style="color:beige;" >Member's Area</a>
        </div>
    </nav>

    <div class="profile" style="justify-content: center;">
      <form method="post" action="#" >
        <h1 style="color:orange;"> USER PROFILE</h1>
        <h3 style="color:orangered;"> Please fill-out the fields and click 'Submit' to Update your Account Details.</h3>
        <table style="background:rgba(0,0,0,0.7);">
          <tr>
              <td class="input-group">
                  <label>Full Name</label><br>
                  <input type="text" class="form-control" name="fname" pattern="[a-zA-Z .]+" placeholder="Enter your Fullname" value="<?php echo $row['full_name']; ?>" required />
              </td> 
              <td class="input-group">
                  <label>Gender</label><br>
                  <input type="text" class="form-control" name="gender" pattern="[a-zA-Z .]+" placeholder="Enter your Gender" required value="<?php echo $row['gender']; ?>" />
              </td> 
          
              <td class="input-group">
                  <label>Date of Birth</label><br>
                  <input type="date" class="form-control" name="dob"  placeholder="Enter your Date of Birth" value="<?php echo $row['birthdate']; ?>">
              </td> 
          </tr>
          <tr>
              <td class="input-group" colspan="2" >
                  <label>Address</label><br>
                  <input type="text" class="form-control" style="width:100%;" name="address" required placeholder="Enter your Address" value="<?php echo $row['address']; ?>"></textarea>
              </td> 
        
              <td class="input-group">
                  <label>Email</label><br>
                  <input type="text" class="form-control" name="email" pattern="\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+" placeholder="Format: xyz@gmail.com" value="<?php echo $row['email']; ?>">
              </td>
          </tr>
          <tr>
              <td></td>
              <td class="input-group" >
                <input type="reset" name="Reset" class="button" style="color:orange;"><br><br>
              </td>
              <td class="input-group" >
                <input type="submit" name="submit" class="button" style="color:orange;"><br><br>
              </td>
          </tr>
        </table>
      </form>
    </div>

    <footer>
      <div class="footer">
        FOLLOW US
        <div id="social-media">
            <a href="https://www.instagram.com/rajshree.varma/saved/?hl=en"><img src="https://www.iconfinder.com/data/icons/2018-social-media-black-and-white-logos/1000/2018_social_media_popular_app_logo_facebook-256.png" alt="visit our facebook" class="social"></a>
            <a href="https://www.instagram.com/rajshree.varma/saved/?hl=en"><img src="https://www.iconfinder.com/data/icons/2018-social-media-black-and-white-logos/1000/2018_social_media_popular_app_logo_instagram-256.png" alt="visit our instagram " class="social"></a>
            <a href="https://www.instagram.com/rajshree.varma/saved/?hl=en"><img src="https://www.iconfinder.com/data/icons/2018-social-media-black-and-white-logos/1000/2018_social_media_popular_app_logo_twitter-256.png" alt="visit our twitter " class="social"></a>
        </div>
        <!-- Copyright -->
        <div class="footer-copyright" style=" background-color:rgba(255, 255, 255, 0.13);">
           &#169; 2020 Copyright:
          <a href="homepage.html" style="text-decoration:none; color:rgba(255, 255, 255, 0.281);"> Fitness101.com</a> 
          All rights reserved.<br>
        </div>
        <!-- Copyright -->
      </div>
    </footer>

  </body>
</html>  

<?php
  if(isset($_POST['submit'])){
  $fullname = $_POST['fname'];
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $query = "UPDATE user SET full_name = '$fullname', gender = '$gender',birthdate = '$dob',  address = '$address',email = '$email'
            WHERE user_id = '$id'";
  $result = mysqli_query($db, $query) or die(mysqli_error($db));
?>

<script type="text/javascript">
  alert("Your details have been updated Successfully!");
  // window.location = "index.php";
</script>

<?php
  }              
?>