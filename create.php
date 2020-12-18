<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$task = $description = $priority = "";
$task_err = $description_err = $priority_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate task
    $input_task = trim($_POST["task"]);
    if(empty($input_task)){
        $task_err = "Please enter a Task.";
    } elseif(!filter_var($input_task, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $task_err = "Please enter a valid task.";
    } else{
        $task = $input_task;
    }
    
    // Validate description
    $input_description = trim($_POST["description"]);
    if(empty($input_description)){
        $description_err = "Please enter a description.";     
    } else{
        $description = $input_description;
    }
    
    // Validate priority
    $input_priority = trim($_POST["priority"]);
    if(empty($input_priority)){
        $priority_err = "Please enter the priority.";     
    } elseif(!ctype_digit($input_priority)){
        $priority_err = "Please enter a positive integer value.";
    } else{
        $priority = $input_priority;
    }
    
    // Check input errors before inserting in database
    if(empty($task_err) && empty($description_err) && empty($priority_err)){
        // Prepare an insert statement if there are no errors present
        $sql = "INSERT INTO todolist (task, description, priority) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters. sss- all three are string type.
            mysqli_stmt_bind_param($stmt, "sss", $param_task, $param_description, $param_priority);
            
            // Set parameters
            $param_task = $task;
            $param_description = $description;
            $param_priority = $priority;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: todolist.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Create Task 
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
            .page-header h2{
                margin-top: 0;
                padding:10px;
                background: beige;
                box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
            }
            .form-group{
                background:beige;
                color:black;
                padding:10px;
                box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
                margin-bottom:10px;
            }
            .form-control{
                width:100%;
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
                width: 47%;
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
                <h2>Create A Task</h2>
            </div>
            <p>Please fill this Form and Submit to add new task to your To-Do List.</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($task_err)) ? 'has-error' : ''; ?>">
                    <label>Task</label>
                    <input type="text" name="task" class="form-control" value="<?php echo $task; ?>">
                    <span class="help-block"><?php echo $task_err;?></span>
                </div>
                <div class="form-group <?php echo (!empty($description_err)) ? 'has-error' : ''; ?>">
                    <label>Description</label>
                    <textarea name="description" class="form-control"><?php echo $description; ?></textarea>
                    <span class="help-block"><?php echo $description_err;?></span>
                </div>
                <div class="form-group <?php echo (!empty($priority_err)) ? 'has-error' : ''; ?>">
                    <label>Priority</label>
                    <input type="text" name="priority" class="form-control" value="<?php echo $priority; ?>">
                    <span class="help-block"><?php echo $priority_err;?></span>
                </div>
                <br>
                <input type="submit" class="btn " value="Submit">
                &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="todolist.php" class="btn" style="font-size:11px;">Cancel</a>
            </form>
        </div>



        <footer >
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