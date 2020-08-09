<?php 
    session_start();

    $first_name = $_SESSION['first_name'];
    $second_name = $_SESSION['second_name'];
    $email = $_SESSION['email'];
    $dob = $_SESSION['date_of_birth'];
    $color = $_SESSION['color'];
    $gender = $_SESSION['gender'];
    $department = $_SESSION['department'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body style="background-color:<?php echo $color; ?>">

<div class="card text-white text-center mt-5 shadow-lg" style="max-width: 18rem; margin-left:40%; background-color:<?php echo $color; ?>">
  <div class="card-header"><h5>User Details</h5></div>
  <div class="card-body">
      
    
    <p class="card-text">
        <?php  
            echo "<b> First Name: </b>  ". $first_name; 
        ?> <br><br>
   
        <?php 
            echo "<b> Second Name: </b>  ". $second_name;
        ?><br><br>

        <?php
            echo "<b> Email: </b>  ". $email;
        ?><br><br>

        <?php 
            echo "<b> Date Of Birth: </b>  ". $dob;
        ?><br><br>

        <?php
            echo "<b> Color: </b>  ". $color;
        ?><br><br>

        <?php
            echo "<b> Gender: </b>  ". $gender;
        ?><br><br>

        <?php
            echo "<b> Department: </b>  ". $department;
        ?>
        
    </p>
  </div>
</div>
   
</body>
</html>