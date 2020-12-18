<?php
// Process delete operation after confirmation
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Include config file
    require_once "config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM todolist WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: todolist.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["id"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Delete Task
        </title>
        <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <style>
            body{
                
                /*background:url("https://cdn.hipwallpaper.com/i/83/15/VBLWMS.jpg");https://wallpapercave.com/wp/wp4659368.jpg ; https://wallpapercave.com/wp/wp4659368.jpg ;
                background-repeat: no-repeat;*/
                background-size: cover; 
                margin:0;
            }
            body>div{   
                padding:1%;
              
            } 
            .wrapper{
                width: 650px;
                margin: 0 auto;
            }
            .page-header h1{
                margin-top: 0;
                padding:10px;
                background: beige;
                box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
            }
            .alert{
                background:pink;
                padding:10px;
                box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
            }
            .btn {
                border: none;
                background:black;
                color:white;
                outline: 0;
                display: inline-block;
                padding: 4px;
                text-align: center;
                cursor: pointer;
                width: 48.5%;
                height:10%;
            }
            a{
                text-decoration:none;
            }
            .btn:hover {
                background-color: #555;
            }
  

        </style>
    </head>
    <body>
        <header>
            <div class="header" style="color:white;">
                <img src="images/logo.png" width=35px height=30px>
                <h1 style="display: inline; ">FITNESS 101</h1>
                <div class="dropdown">
                    <button class="dropbtn"><img src="images/user.png" width=40px height=40px ></button>
                    <div class="dropdown-content">
                        <a href="help.php">Report Problem</a>
                        <a href="contactus.html">Contact Us</a>
                        <a href="member.php">Dashboard</a> 
                        <a href="logout.php">Log out</a>
                    </div>
                </div>
            </div>
        </header>
        <nav>
            <div id="navigation">
                <a href="homepage.html">Home</a>
                <a href="health.html">Healthy Living</a>
                <a href="faq.html">FAQ</a>
                <a href="contactus.html">Contact Us</a>
                <a href="help.php">Help</a>
                <a href="member.php">Member's Area</a>
            </div>
        </nav>

        <div class="wrapper">
            <div class="page-header">
                <h1>Delete Task</h1>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div >
                    <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                    <p class="alert">Have you completed this task? <br> Are you sure you want to delete it?</p>
                    <br>
                    
                    <input type="submit" value="Yes" class="btn">
                    <a href="todolist.php" class="btn "  style="font-size:11px;">No</a>
                    
                </div>
            </form>
        </div>



        <footer style="margin-top:4%;">
            <div class="footer">
                FOLLOW US
                <div id="social-media">
                    <a href="https://www.instagram.com/rajshree.varma/saved/?hl=en"><img src="https://www.iconfinder.com/data/icons/2018-social-media-black-and-white-logos/1000/2018_social_media_popular_app_logo_facebook-256.png" alt="visit our facebook" class="social"></a>
                    <a href="https://www.instagram.com/rajshree.varma/saved/?hl=en"><img src="https://www.iconfinder.com/data/icons/2018-social-media-black-and-white-logos/1000/2018_social_media_popular_app_logo_instagram-256.png" alt="visit our instagram " class="social"></a>
                    <a href="https://www.instagram.com/rajshree.varma/saved/?hl=en"><img src="https://www.iconfinder.com/data/icons/2018-social-media-black-and-white-logos/1000/2018_social_media_popular_app_logo_twitter-256.png" alt="visit our twitter " class="social"></a>
                </div>
                <!-- Copyright -->
                <div class="footer-copyright" style=" background-color:rgba(255, 255, 255, 0.13);">
                  © 2020 Copyright:
                  <a href="homepage.html" style="text-decoration:none; color:rgba(255, 255, 255, 0.281);"> Fitness101.com</a> 
                  All rights reserved.<br>
                </div>
                <!-- Copyright -->
            </div>
        </footer>
    </body>
</html>    