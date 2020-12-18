<?php 
  session_start(); 
  //accessible to only logged in users.
  if (!isset($_SESSION['id'])) {
?>

    <script type="text/javascript">
      alert("You must Log-In First");
      window.location = "index.php";
    </script>
    
<?php
  }              
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meditation</title>
    <link rel="stylesheet" href="css/common.css">
</head>
<body style= "background-image: url('meditate.jpg'); background-size: cover; margin:0;">
    <header>
        <div class="header" style="color:white;">
            <a href="homepage.html">
                <img src="images/logo.png" width=35px height=30px>
                <h1 style="display: inline; ">FITNESS 101</h1>
            </a>
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
 
    <nav style="background:rgba(0,0,0,0.4);">
        <div id="navigation" >
            <a href="homepage.html" style="color:beige;">Home</a>
            <a href="health.html" style="color:beige;">Healthy Living</a>
            <a href="faq.html" style="color:beige;">FAQ</a>
            <a href="contactus.html" style="color:beige;">Contact Us</a>
            <a href="help.php" style="color:beige;">Help</a>
            <a href="member.php" style="color:beige;">Member's Area</a>
        </div> 
    </nav>

    <div class="content" style="font-size: 15px; color: snow;">
    <center>
        <h2>Workshop Meditation</h2>
        <p>A little bit of information on why we are passionate about our Meditation Workshops and why we feel Meditation is a very worthwhile practice and of benefit to everyone.

            Meditation is a very practical and useful tool that can be used by anyone to benefit every day living, its not just for spiritual guru’s who sit crossed legged for hours on end,  that’s the perception many people have about people who meditate but it’s far from the truth, more and more meditation is being used in schools and in the workplace, it’s benefits are also encouraged by the NHS for its physical and physiological benefits so you can see you really don’t need to be a guru to enjoy all the lovely benefits Meditation can bring you.
            
            Meditation has many proven health benefits, it can help with breathing with stress and anxiety with sleep and concentration it also promotes emotional health enhances self awareness lengthens attention span and can help with age related memory loss, it increases mental clarity and focus and triggers the brains relaxation response.
            
            Our workshops are enjoyable relaxing and most of all for everyone, you don’t have to have any experience and we won’t all be sitting crossed legged on the floor humming ohm sounds, we will be using different meditations to suit all levels and help those of you who have never meditated before to see how easy it can be and how beneficial it can be to your every day life.
            
            You can spend only  5 minutes or you can spend 30 minutes in meditation it’s about whatever you can fit into your life, but however long you manage to spend in meditation it will bring positive  benefits and results, if you aim for 2 or 3 times a week even for just 5 minutes the changes it will make to your mental and emotional health will be so worth it, so come along give it a try and see just how enjoyable and uplifting meditation can be, go on treat yourself you deserve it, we look forward to seeing you very soon.</p>
            <!-- <img src="medi.jpg" height="200px" width="350px" alt=""> -->
            <h3>Call today on +919804527543 to book your workshop.</h3>
            <hr>
            <br>
            <h2 style="background-color: tan;">OUR RECOMMENDATIONS, FOR YOU!</h2>
            <br>
            <h3 style="font-style: italic;">Mindfullness</h3>
                    
                    <div class="vids" style="margin-left:38px; position:relative;float:left;width:100%; @media screen and (min-width: 751px), screen and (min-device-width:751)">
                    
                    <div style="position:relative;float:left;padding:5px;width:30%;" class="video"><iframe style="width:100%;" width="200" height="200" src="https://www.youtube.com/embed/-2zdUXve6fQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    
                    <div style="position:relative;float:left;padding:5px;width:30%;" class="video"><iframe style="width:100%;" width="200" height="200" src="https://www.youtube.com/embed/MIr3RsUWrdo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    
                    <div style="position:relative;float:left;padding:5px;width:30%;" class="video"><iframe style="width:100%;" width="200" height="200" src="https://www.youtube.com/embed/4EaMJOo1jks" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            
                    </div>

                    <hr>
            <br>
    
            <h3 style="font-style: italic;">Stress Relief</h3>
                    
                    <div class="vids" style="margin-left:38px; position:relative;float:left;width:100%; @media screen and (min-width: 751px), screen and (min-device-width:751)">
                    
                    <div style="position:relative;float:left;padding:5px;width:30%;" class="video"><iframe style="width:100%;" width="200" height="200" src="https://www.youtube.com/embed/sTANio_2E0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    
                    <div style="position:relative;float:left;padding:5px;width:30%;" class="video"><iframe style="width:100%;" width="200" height="200" src="https://www.youtube.com/embed/vJMbsWrGMVA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    
                    <div style="position:relative;float:left;padding:5px;width:30%;" class="video"><iframe style="width:100%;" width="200" height="200" src="https://www.youtube.com/embed/utrAlZf_Pjs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>

                    </div>

                    <hr>
            <br>

            <h3 style="font-style: italic;">Morning Bliss</h3>
                    
                    <div class="vids" style="margin-left:38px; position:relative;float:left;width:100%; @media screen and (min-width: 751px), screen and (min-device-width:751)">
                    
                    <div style="position:relative;float:left;padding:5px;width:30%;" class="video"><iframe style="width:100%;" width="200" height="200" src="https://www.youtube.com/embed/s9b2y3Mg2n8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    
                    <div style="position:relative;float:left;padding:5px;width:30%;" class="video"><iframe style="width:100%;" width="200" height="200" src="https://www.youtube.com/embed/ZssjZnsN4Gg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    
                    <div style="position:relative;float:left;padding:5px;width:30%;" class="video"><iframe style="width:100%;" width="200" height="200" src="https://www.youtube.com/embed/Ev_1JeLajgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            
                    </div>
                   

            </center>
    </div>
    <br><br><br><br><br><br><br><br>
    <footer style="margin-top:3%;">
        <div class="footer">
            FOLLOW US
            <div id="social-media">
                <a href="https://www.instagram.com/rajshree.varma/saved/?hl=en"><img src="https://www.iconfinder.com/data/icons/2018-social-media-black-and-white-logos/1000/2018_social_media_popular_app_logo_facebook-256.png" alt="visit our facebook" class="social"></a>
                <a href="https://www.instagram.com/rajshree.varma/saved/?hl=en"><img src="https://www.iconfinder.com/data/icons/2018-social-media-black-and-white-logos/1000/2018_social_media_popular_app_logo_instagram-256.png" alt="visit our instagram " class="social"></a>
                <a href="https://www.instagram.com/rajshree.varma/saved/?hl=en"><img src="https://www.iconfinder.com/data/icons/2018-social-media-black-and-white-logos/1000/2018_social_media_popular_app_logo_twitter-256.png" alt="visit our twitter " class="social"></a>
            </div>
            
            <div class="footer-copyright" style=" background-color:rgba(255, 255, 255, 0.13);">
               &#169; 2020 Copyright:
              <a href="homepage.html" style="text-decoration:none; color:rgba(255, 255, 255, 0.281);"> Fitness101.com</a> 
              All rights reserved.<br>
            </div>
            
        </div>
    </footer> 
</body>
</html>