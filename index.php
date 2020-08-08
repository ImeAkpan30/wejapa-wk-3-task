<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
         
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6 offset-3">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        <h2 class="text-primary">SIMPLE SIGN UP FORM</h2>
                    </div>
                    <div class="card-body">
                        <p><span class="error">* required field</span></p>
                        <p class="card-text">
                        <form method="post" action="contact.php" id="nameform">

                            <div class="input-group mb-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text required">First Name </span>
                                </div>
                                <input type="text" name="first_name" class="form-control" placeholder="Enter your first name" required>&nbsp;<span class="error">* </span>
                            </div>
                            <div class="input-group mb-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text required">Second Name </span>
                                </div>
                                <input type="text" name="second_name" class="form-control" placeholder="Enter your second name" required>&nbsp;<span class="error">* </span>
                            </div>
                            <div class="input-group mb-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text required">Email </span>
                                </div>
                                <input type="text" name="email" class="form-control" placeholder="example@gmail.com" required>&nbsp;<span class="error">* </span>
                            </div>
                            <div class="input-group mb-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text required"> Date Of Birth </span>
                                </div>
                                <input type="date" name="date_of_birth" class="form-control" placeholder="mm/dd/yyyy" required> &nbsp;<span class="error">* </span>
                            </div>
                            <div class="input-group mb-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text required">Favourite Colour</span>
                                </div>
                                <input type="color" name="color" class="form-control" required>&nbsp;<span class="error">* </span>
                            </div>
                            
                            <div >
                            Gender:  &nbsp;
                            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female"> &nbsp;Female  &nbsp;
                            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male"> &nbsp;Male  &nbsp;
                            <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other"> &nbsp;Other  &nbsp;
                            <span class="error">* </span>
                            </div> <br>

                            <div class="input-group mb-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text required">Department </span>
                                </div>
                                <select class="form-control" name="department" required>
                                    <option>select</option>
                                    <option>IT</option>
                                    <option>HR</option>
                                    <option>PM</option>
                                    <option>Others</option>
                                </select>
                                &nbsp;<span class="error">* </span>
                            </div>

                            <div class="input-group mb-5">
                                <div class="input-group-prepend">
                                    <span class="input-group-text required">Password </span>
                                </div>
                                <input type="password" id="password" class="form-control" name="password" placeholder="**********" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{15,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 15 or more characters" required>&nbsp;<span class="error">* </span>
                                
                            </div>

                            <div class="form-group">
                                
                                <button type="submit" class="btn btn-primary" form="nameform" value="submit">Submit</button>
                                <button type="reset" class="btn btn-secondary" value="Reset">Reset</button>
                            </div>
                        </form>

                        </p>
                        
                    </div>

                </div>
                <div id="message">
                  <h3>Password must contain the following:</h3>
                  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                  <p id="number" class="invalid">A <b>number</b></p>
                  <p id="length" class="invalid">Minimum <b>15 characters</b></p>
                </div>
            </div>
        </div>
    </div>

    
    <script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-16]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 15) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

</script>
 
</body>
</html>