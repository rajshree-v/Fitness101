<!--receive information submitted from the form and store the information in the database-->
<?php
// initializing variables
$error = array(); 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'fitness');
#if ($db)
  #echo 'successful';

//if the submit button on the report form is clicked
if (isset($_POST['feedback_submit'])) {
    //input values from the form
    $firstname1 = mysqli_real_escape_string($db, $_POST['firstname1']);
    $lastname1 = mysqli_real_escape_string($db, $_POST['lastname1']);
    $mobile1 = mysqli_real_escape_string($db, $_POST['mobile1']);
    $email1 = mysqli_real_escape_string($db, $_POST['email1']);
    $feedback = mysqli_real_escape_string($db, $_POST['feedback']);
    
    if(!empty($_POST['rating']))
    {
    // Loop to store and display values of individual checked checkbox.
    foreach($_POST['rating'] as $selected){
      $chk .= $selected.",";
    }
    }
            //$in_ch=mysqli_query($db,"insert into feedback(rating) values ('$chk')");  
        
    //$rating = mysqli_real_escape_string($db, $_POST['rating']);
  
    // form validation
    // by adding (array_push()) we enter corresponding error unto $errors array if input feilds are empty
    if (empty($firstname1)) { array_push($error, "Please enter your Name"); }
    if (empty($mobile1)) { array_push($error, "Please enter your Contact No."); }
    if (empty($email1)) { array_push($error, "Please enter your Email ID"); }
    if (empty($feedback)) { array_push($error, "Please enter your Feedback"); }
    if (empty($chk)) { array_push($error, "Please Rate Us :D"); }
  
    // Submit Query if there are no errors in the form
    if (count($error) == 0) {
        $query = "INSERT INTO feedback (firstname, lastname, mobile, email, feedback, rating) 
                  VALUES('$firstname1', '$lastname1', '$mobile1', '$email1', '$feedback', '$chk')";
        mysqli_query($db, $query);
  
        header('location: feedback.php');
    }
  }
?>