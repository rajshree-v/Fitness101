<?php include('help-config.php') ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Help Page
        </title>
        <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/common.css">
        <style>
            body{
                background:url("images/bg9.jpg"); 
                background-repeat: no-repeat;
                background-size: cover; 
                margin:0;
            }
            body>div{   
                padding:1%;
                
            } 
            .report{
                background:rgba(0,0,0,0.8);
                color:white;
                width:35%;
                text-align:center;
                margin-left:9%;
                float:left
            }
            table{
                background:rgba(0,0,0,0);
                text-align:left;
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

            /* form styling */
            .feedback{
                background:rgba(0,0,0,0.8);
                color:white;
                width:35%;
                text-align:center;
                margin-left:55%;
                margin-top:20%;
            }

            
            /** buttons */
            .box {
            border: 1pt solid var(--accent-bg);
            padding: 0.5em;
            margin-bottom: 0.4em;
            }

            /* -- star rating styling -- */
            div.star_rating {
            float: left;
            }

            input.star {
            border: 0;
            width: 10px;
            height: 10px;
            overflow: hidden;
            position: absolute !important;
            opacity: 0;
            float: right;
            clip: rect(1px 1px 1px 1px);
            clip: rect(1px, 1px, 1px, 1px);
            }

            label.star {
            position: relative;
            float: right;
            color: blue;
            }

            label.star:before {
            margin: 5px;
            content: url("images/ss.png");

            font-family: arial;
            font-size: 1.5em;
            color: var(--accent-color);
            -webkit-user-select: none; /* Safari 3.1+ */
            -moz-user-select: none; /* Firefox 2+ */
            -ms-user-select: none; /* IE 10+ */
            user-select: none;
            }

            input.star:checked ~ label.star:before {
            color: white;
            border:10px;
            }

            label.star:hover ~ label.star:before {
            color: red;
            }
            .active{
                background: beige;
            }

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
                        <a href="index.php">Log-In</a>
                        <a href="register.php">Sign-Up</a>
                    </div>
                </div>
            </div>
        </header>
        <nav>
            <div id="navigation" style="background:rgba(0,0,0,0.3); ">
                <a href="homepage.html" style="color:white;">Home</a>
                <a href="health.html" style="color:white;">Healthy Living</a>
                <a href="faq.html" style="color:white;">FAQ</a>
                <a href="contactus.html" style="color:white;">Contact Us</a>
                <a href="help.php" class="active" style="color:black;">Help</a>
                <a href="member.php" style="color:white;">Member's Area</a>
            </div>
        </nav>
        <br>
        <div class="report">
            <form method="post" action="help.php">
                <h1 style="color:orange;"> REACH OUT TO US</h1>
                <h3 style="color:orange;"> REPORT A PROBLEM</h3>
                <?php include('help-errors.php'); ?>
                <table>
                    <tr>
                        <td class="input-group">
                            <label>First Name</label><br>
                            <input type="text" name="firstname" required>
                        </td> 
                        <td class="input-group">
                            <label>Last Name</label><br>
                            <input type="text" name="lastname" >
                        </td> 
                    </tr>
                    <tr>
                        <td class="input-group">
                            <label>Phone Number</label><br>
                            <input type="text" name="mobile" required  pattern="[0-9]\d{9}" > 
                        </td> 
                        <td class="input-group">
                            <label>Email</label><br>
                            <input type="text" name="email" required pattern="\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+" placeholder="Format: xyz@gmail.com">
                        </td> 
                    </tr>
                    <tr>
                        <td class="input-group">
                            <label>Leave us a message...</label><br>
                            <input type="text" name="problem" style=" height:90px;" required>
                        </td> 
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="input-group">
                            <button type="submit" class="button" name="problem_submit" style="color:orange;">SUBMIT</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <div class="feedback" >
            <form name="star_submit" id="star_submit" action="help.php" method="post">
                <h1 style="color:orange;"> FEEDBACK</h1>
                <h3 style="color:orange;"> TELL US ABOUT YOUR EXPERIENCE</h3>
                <?php include('help-errors1.php'); ?>
                <table>
                    <tr>
                        <td class="input-group">
                            <label>First Name</label><br>
                            <input type="text" name="firstname1" >
                        </td> 
                        <td class="input-group">
                            <label>Last Name</label><br>
                            <input type="text" name="lastname1" >
                        </td> 
                    </tr>
                    <tr>
                        <td class="input-group">
                            <label>Phone Number</label><br>
                            <input type="text" name="mobile1"  pattern="[0-9]\d{9}" >
                        </td> 
                        <td class="input-group">
                            <label>Email</label><br>
                            <input type="text" name="email1"  pattern="\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+" placeholder="Format: xyz@gmail.com">
                        </td> 
                    </tr>
                    <tr>
                        <td class="input-group">
                            <label>Leave us a message...</label><br>
                            <input type="text" name="feedback" style=" height:90px;" >
                        </td> 
                        <td colspan="1">
                            <label>Rate Us </label> <br>
                            <div class="star_rating">
                                    <input type="checkbox" id="star5" name="rating[]" class="star" value="5">
                                <label for="star5" class="star" title="5 stars"></label>
                                    <input type="checkbox" id="star4" name="rating[]" class="star" value="4">
                                <label for="star4" class="star" title="4 stars"></label>
                                    <input type="checkbox" id="star3" name="rating[]" class="star" value="3">
                                <label for="star3" class="star" title="3 stars"></label>
                                    <input type="checkbox" id="star2" name="rating[]" class="star" value="2">
                                <label for="star2" class="star" title="2 stars"></label>
                                    <input type="checkbox" id="star1" name="rating[]" class="star" value="1">
                                <label for="star1" class="star" title="1 stars"></label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="input-group">
                            <button type="submit" class="button" name="feedback_submit" style="color:orange;">SUBMIT</button>
                        </td>
                        <td class="input-group">
                            <button type="reset" class="button" style="color:orange;">RESET</button>
                        </td>
                    </tr>
                    
                </table>
            </form>
        </div>

        <footer style="margin-top:3%;">
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