<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body style="background-color:<?php echo $_POST["color"]; ?>">

<div class="card text-white text-center mt-5 shadow-lg" style="max-width: 18rem; margin-left:40%; background-color:<?php echo $_POST["color"]; ?>">
  <div class="card-header"><h5>User Details</h5></div>
  <div class="card-body">
      
    
    <p class="card-text">
    <?php
        $first_name = $_POST['first_name'];
        $second_name = $_POST['second_name'];
        $email = $_POST['email'];
        $dob = $_POST['date_of_birth'];
        $color = $_POST['color'];
        $gender = $_POST['gender'];
        $department = $_POST['department'];
        $password = $_POST['password'];


        
            echo "<b> First Name: </b>  ". $first_name;  
            
            echo "<br><br>";
            
            echo "<b> Second Name: </b>  ". $second_name;

            echo "<br><br>";

            echo "<b> Email: </b>  ". $email;

            echo "<br><br>";

            echo "<b> Date Of Birth: </b>  ". $dob;

            echo "<br><br>";

            echo "<b> Color: </b>  ". $color;

            echo "<br><br>";

            echo "<b> Gender: </b>  ". $gender;

            echo "<br><br>";

            echo "<b> Department: </b>  ". $department;

            echo "<br><br>";

            echo "<b> Password: </b>  ". $password;

               
        ?>


    </p>
  </div>
</div>
   
</body>
</html>