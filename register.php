// Explains purpose of: <!DOCTYPE html>
<!DOCTYPE html>
// Explains purpose of: <html lang="en">
<html lang="en">
// Explains purpose of: <head>
<head>
    
// Explains purpose of: <title>REGISTRATION</title>
    <title>REGISTRATION</title>
// Explains purpose of: <link rel="stylesheet" href="css/regs.css" type="text/css">
   <link rel="stylesheet" href="css/regs.css" type="text/css">
// Explains purpose of: </head>
</head>
// Explains purpose of: <body>
<body>
    
// Explains purpose of: <?php
<?php

// Explains purpose of: require_once('connection.php');
require_once('connection.php');
// Explains purpose of: if(isset($_POST['regs']))
if(isset($_POST['regs']))
// Explains purpose of: {
{
// Explains purpose of: $fname=mysqli_real_escape_string($con,$_POST['fname']);
    $fname=mysqli_real_escape_string($con,$_POST['fname']);
// Explains purpose of: $lname=mysqli_real_escape_string($con,$_POST['lname']);
    $lname=mysqli_real_escape_string($con,$_POST['lname']);
// Explains purpose of: $email=mysqli_real_escape_string($con,$_POST['email']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
// Explains purpose of: $lic=mysqli_real_escape_string($con,$_POST['lic']);
    $lic=mysqli_real_escape_string($con,$_POST['lic']);
// Explains purpose of: $ph=mysqli_real_escape_string($con,$_POST['ph']);
    $ph=mysqli_real_escape_string($con,$_POST['ph']);
   
// Explains purpose of: $pass=mysqli_real_escape_string($con,$_POST['pass']);
    $pass=mysqli_real_escape_string($con,$_POST['pass']);
// Explains purpose of: $cpass=mysqli_real_escape_string($con,$_POST['cpass']);
    $cpass=mysqli_real_escape_string($con,$_POST['cpass']);
// Explains purpose of: $gender=mysqli_real_escape_string($con,$_POST['gender']);
    $gender=mysqli_real_escape_string($con,$_POST['gender']);
// Explains purpose of: $Pass=md5($pass);
    $Pass=md5($pass);
// Explains purpose of: if(empty($fname)|| empty($lname)|| empty($email)|| empty($li
    if(empty($fname)|| empty($lname)|| empty($email)|| empty($lic)|| empty($ph)|| empty($pass) || empty($gender))
// Explains purpose of: {
    {
// Explains purpose of: echo '<script>alert("please fill the place")</script>';
        echo '<script>alert("please fill the place")</script>';
// Explains purpose of: }
    }
// Explains purpose of: else{
    else{
// Explains purpose of: if($pass==$cpass){
        if($pass==$cpass){
// Explains purpose of: $sql2="SELECT *from users where EMAIL='$email'";
        $sql2="SELECT *from users where EMAIL='$email'";
// Explains purpose of: $res=mysqli_query($con,$sql2);
        $res=mysqli_query($con,$sql2);
// Explains purpose of: if(mysqli_num_rows($res)>0){
        if(mysqli_num_rows($res)>0){
// Explains purpose of: echo '<script>alert("EMAIL ALREADY EXISTS PRESS OK FOR LOGIN
            echo '<script>alert("EMAIL ALREADY EXISTS PRESS OK FOR LOGIN!!")</script>';
// Explains purpose of: echo '<script> window.location.href = "index.php";</script>'
            echo '<script> window.location.href = "index.php";</script>';

// Explains purpose of: }
        }
// Explains purpose of: else{
        else{
// Explains purpose of: $sql="insert into users (FNAME,LNAME,EMAIL,LIC_NUM,PHONE_NUM
        $sql="insert into users (FNAME,LNAME,EMAIL,LIC_NUM,PHONE_NUMBER,PASSWORD,GENDER) values('$fname','$lname','$email','$lic',$ph,'$Pass','$gender')";
// Explains purpose of: $result = mysqli_query($con,$sql);
        $result = mysqli_query($con,$sql);
          

// Explains purpose of: // $to_email = $email;
          // $to_email = $email;
// Explains purpose of: // $subject = "NO-REPLY";
          // $subject = "NO-REPLY";
// Explains purpose of: // $body = "THIS MAIL CONTAINS YOUR AUTHENTICATION DETAILS..
          // $body = "THIS MAIL CONTAINS YOUR AUTHENTICATION DETAILS....\nYour Password is $pass and Your Registered email is $to_email"
// Explains purpose of: //          ;
          //          ;
// Explains purpose of: // $headers = "From: sender email";
          // $headers = "From: sender email";
          
// Explains purpose of: // if (mail($to_email, $subject, $body, $headers))
          // if (mail($to_email, $subject, $body, $headers))
          
// Explains purpose of: // {
          // {
// Explains purpose of: //     echo "Email successfully sent to $to_email...";
          //     echo "Email successfully sent to $to_email...";
// Explains purpose of: // }
          // }
          
// Explains purpose of: // else
          // else
 
// Explains purpose of: // {
          // {
// Explains purpose of: // echo "Email sending failed!";
          // echo "Email sending failed!";
// Explains purpose of: // }
          // }
// Explains purpose of: if($result){
        if($result){
// Explains purpose of: echo '<script>alert("Registration Successful Press ok to log
            echo '<script>alert("Registration Successful Press ok to login")</script>';
// Explains purpose of: echo '<script> window.location.href = "index.php";</script>'
            echo '<script> window.location.href = "index.php";</script>';       
// Explains purpose of: }
           }
// Explains purpose of: else{
        else{
// Explains purpose of: echo '<script>alert("please check the connection")</script>'
            echo '<script>alert("please check the connection")</script>';
// Explains purpose of: }
        }
    
// Explains purpose of: }
        }

// Explains purpose of: }
        }
// Explains purpose of: else{
        else{
// Explains purpose of: echo '<script>alert("PASSWORD DID NOT MATCH")</script>';
            echo '<script>alert("PASSWORD DID NOT MATCH")</script>';
// Explains purpose of: echo '<script> window.location.href = "register.php";</scrip
            echo '<script> window.location.href = "register.php";</script>';
// Explains purpose of: }
        }
// Explains purpose of: }
    }
// Explains purpose of: }
}


// Explains purpose of: ?>
?>



// Explains purpose of: <style>
  <style>
// Explains purpose of: body{
      body{
// Explains purpose of: background:  #fdcd3b;
        background:  #fdcd3b;
// Explains purpose of: background-size: auto;
        background-size: auto;
// Explains purpose of: background-position:unset;
         background-position:unset;
// Explains purpose of: /* background-repeat: ; */
         /* background-repeat: ; */
// Explains purpose of: }
      }
// Explains purpose of: input#psw{
      input#psw{
// Explains purpose of: width:300px;
    width:300px;
// Explains purpose of: border:1px solid #ddd;
    border:1px solid #ddd;
// Explains purpose of: border-radius: 3px;
    border-radius: 3px;
// Explains purpose of: outline: 0;
    outline: 0;
// Explains purpose of: padding: 7px;
    padding: 7px;
// Explains purpose of: background-color: #fff;
    background-color: #fff;
// Explains purpose of: box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
    box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
// Explains purpose of: }
}
// Explains purpose of: input#cpsw{
input#cpsw{
// Explains purpose of: width:300px;
    width:300px;
// Explains purpose of: border:1px solid #ddd;
    border:1px solid #ddd;
// Explains purpose of: border-radius: 3px;
    border-radius: 3px;
// Explains purpose of: outline: 0;
    outline: 0;
// Explains purpose of: padding: 7px;
    padding: 7px;
// Explains purpose of: background-color: #fff;
    background-color: #fff;
// Explains purpose of: box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
    box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
// Explains purpose of: }
}
// Explains purpose of: #message {
  #message {
// Explains purpose of: display:none;
  display:none;
// Explains purpose of: background: #f1f1f1;
  background: #f1f1f1;
// Explains purpose of: color: #000;
  color: #000;
// Explains purpose of: position: relative;
  position: relative;
// Explains purpose of: padding: 20px;
  padding: 20px;
  
// Explains purpose of: width: 400px;
  width: 400px;
// Explains purpose of: margin-left:1000px;
  margin-left:1000px;
// Explains purpose of: margin-top: -500px;
  margin-top: -500px;
// Explains purpose of: }
}

// Explains purpose of: #message p {
#message p {
// Explains purpose of: padding: 10px 35px;
  padding: 10px 35px;
// Explains purpose of: font-size: 18px;
  font-size: 18px;
// Explains purpose of: }
}

// Explains purpose of: /* Add a green text color and a checkmark when the requireme
/* Add a green text color and a checkmark when the requirements are right */
// Explains purpose of: .valid {
.valid {
// Explains purpose of: color: green;
  color: green;
// Explains purpose of: }
}

// Explains purpose of: .valid:before {
.valid:before {
// Explains purpose of: position: relative;
  position: relative;
// Explains purpose of: left: -35px;
  left: -35px;
// Explains purpose of: content: "✔";
  content: "✔";
// Explains purpose of: }
}

// Explains purpose of: /* Add a red text color and an "x" icon when the requirement
/* Add a red text color and an "x" icon when the requirements are wrong */
// Explains purpose of: .invalid {
.invalid {
// Explains purpose of: color: red;
  color: red;
// Explains purpose of: }
}

// Explains purpose of: .invalid:before {
.invalid:before {
// Explains purpose of: position: relative;
  position: relative;
// Explains purpose of: left: -35px;
  left: -35px;
// Explains purpose of: content: "✖";
  content: "✖";
// Explains purpose of: }</style>
}</style> 

// Explains purpose of: <button id="back"><a href="index.php">HOME</a></button>
    <button id="back"><a href="index.php">HOME</a></button>
// Explains purpose of: <h1 id="fam">JOIN OUR FAMILY OF CARS!</h1>
    <h1 id="fam">JOIN OUR FAMILY OF CARS!</h1>
// Explains purpose of: <div class="main">
 <div class="main">
        
// Explains purpose of: <div class="register">
        <div class="register">
// Explains purpose of: <h2>Register Here</h2>
        <h2>Register Here</h2>
        
// Explains purpose of: <form id="register" action="register.php" method="POST">
        <form id="register" action="register.php" method="POST">    
// Explains purpose of: <label>First Name : </label>
            <label>First Name : </label>
// Explains purpose of: <br>
            <br>
// Explains purpose of: <input type ="text" name="fname"
            <input type ="text" name="fname"
// Explains purpose of: id="name" placeholder="Enter Your First Name" required>
            id="name" placeholder="Enter Your First Name" required>
// Explains purpose of: <br><br>
            <br><br>

// Explains purpose of: <label>Last Name : </label>
            <label>Last Name : </label>
// Explains purpose of: <br>
            <br>
// Explains purpose of: <input type ="text" name="lname"
            <input type ="text" name="lname"
// Explains purpose of: id="name" placeholder="Enter Your Last Name" required>
            id="name" placeholder="Enter Your Last Name" required>
// Explains purpose of: <br><br>
            <br><br>

// Explains purpose of: <label>Email : </label>
            <label>Email : </label>
// Explains purpose of: <br>
            <br>
// Explains purpose of: <input type="email" name="email"
            <input type="email" name="email"
// Explains purpose of: id="name" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" t
            id="name" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="ex: example@ex.com"placeholder="Enter Valid Email" required>
// Explains purpose of: <br><br>
            <br><br>
            
// Explains purpose of: <label>Your License number : </label>
            <label>Your License number : </label>
// Explains purpose of: <br>
            <br>
// Explains purpose of: <input type="text" name="lic"
            <input type="text" name="lic"
// Explains purpose of: id="name" placeholder="Enter Your License number" required>
            id="name" placeholder="Enter Your License number" required>
// Explains purpose of: <br><br>
            <br><br>

// Explains purpose of: <label>Phone Number : </label>
            <label>Phone Number : </label>
// Explains purpose of: <br>
            <br>
// Explains purpose of: <input type="tel" name="ph" maxlength="10" onkeypress="retur
            <input type="tel" name="ph" maxlength="10" onkeypress="return onlyNumberKey(event)"
// Explains purpose of: id="name" placeholder="Enter Your Phone Number" required>
            id="name" placeholder="Enter Your Phone Number" required>
// Explains purpose of: <br><br>
            <br><br>

            

// Explains purpose of: <label>Password : </label>
            <label>Password : </label>
// Explains purpose of: <br>
            <br>
// Explains purpose of: <input type="password" name="pass" maxlength="12"
            <input type="password" name="pass" maxlength="12"
// Explains purpose of: id="psw" placeholder="Enter Password" pattern="(?=.*\d)(?=.*
            id="psw" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
// Explains purpose of: <br><br>
            <br><br>
// Explains purpose of: <label>Confirm Password : </label>
            <label>Confirm Password : </label>
// Explains purpose of: <br>
            <br>
// Explains purpose of: <input type="password" name="cpass"
            <input type="password" name="cpass" 
// Explains purpose of: id="cpsw" placeholder="Renter the password" required>
            id="cpsw" placeholder="Renter the password" required>
// Explains purpose of: <br><br>
            <br><br>
// Explains purpose of: <tr>
            <tr>
// Explains purpose of: <td><label">Gender : </label></td><br>
                <td><label">Gender : </label></td><br>
// Explains purpose of: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td>
// Explains purpose of: <label for="one">Male</label>
                    <label for="one">Male</label>
// Explains purpose of: <input type="radio" id="input_enabled" name="gender" value="
                    <input type="radio" id="input_enabled" name="gender" value="male" style="width:200px">
// Explains purpose of: </td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&
                </td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
// Explains purpose of: <td>
                <td>
// Explains purpose of: <label for="two">Female</label>
                    <label for="two">Female</label>
// Explains purpose of: <input type="radio" id="input_disabled" name="gender" value=
                    <input type="radio" id="input_disabled" name="gender" value="female" style="width:160px" />
// Explains purpose of: </td>
                </td>
// Explains purpose of: </tr>
            </tr>
// Explains purpose of: <br><br>
            <br><br>

// Explains purpose of: <input type="submit" class="btnn"  value="REGISTER" name="re
            <input type="submit" class="btnn"  value="REGISTER" name="regs" style="background-color: #ff7200;color: white">
            
        
        
// Explains purpose of: </input>
        </input>
            
// Explains purpose of: </form>
        </form>
// Explains purpose of: </div>
        </div> 
// Explains purpose of: </div>
    </div>
// Explains purpose of: <div id="message">
    <div id="message">
// Explains purpose of: <h3>Password must contain the following:</h3>
  <h3>Password must contain the following:</h3>
// Explains purpose of: <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
// Explains purpose of: <p id="capital" class="invalid">A <b>capital (uppercase)</b>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
// Explains purpose of: <p id="number" class="invalid">A <b>number</b></p>
  <p id="number" class="invalid">A <b>number</b></p>
// Explains purpose of: <p id="length" class="invalid">Minimum <b>8 characters</b></
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
// Explains purpose of: </div>
</div>
// Explains purpose of: <script>
<script>
// Explains purpose of: var myInput = document.getElementById("psw");
var myInput = document.getElementById("psw");
// Explains purpose of: var letter = document.getElementById("letter");
var letter = document.getElementById("letter");
// Explains purpose of: var capital = document.getElementById("capital");
var capital = document.getElementById("capital");
// Explains purpose of: var number = document.getElementById("number");
var number = document.getElementById("number");
// Explains purpose of: var length = document.getElementById("length");
var length = document.getElementById("length");

// Explains purpose of: // When the user clicks on the password field, show the mess
// When the user clicks on the password field, show the message box
// Explains purpose of: myInput.onfocus = function() {
myInput.onfocus = function() {
// Explains purpose of: document.getElementById("message").style.display = "block";
  document.getElementById("message").style.display = "block";
// Explains purpose of: }
}

// Explains purpose of: // When the user clicks outside of the password field, hide 
// When the user clicks outside of the password field, hide the message box
// Explains purpose of: myInput.onblur = function() {
myInput.onblur = function() {
// Explains purpose of: document.getElementById("message").style.display = "none";
  document.getElementById("message").style.display = "none";
// Explains purpose of: }
}

// Explains purpose of: // When the user starts to type something inside the passwor
// When the user starts to type something inside the password field
// Explains purpose of: myInput.onkeyup = function() {
myInput.onkeyup = function() {
// Explains purpose of: // Validate lowercase letters
  // Validate lowercase letters
// Explains purpose of: var lowerCaseLetters = /[a-z]/g;
  var lowerCaseLetters = /[a-z]/g;
// Explains purpose of: if(myInput.value.match(lowerCaseLetters)) {
  if(myInput.value.match(lowerCaseLetters)) {
// Explains purpose of: letter.classList.remove("invalid");
    letter.classList.remove("invalid");
// Explains purpose of: letter.classList.add("valid");
    letter.classList.add("valid");
// Explains purpose of: } else {
  } else {
// Explains purpose of: letter.classList.remove("valid");
    letter.classList.remove("valid");
// Explains purpose of: letter.classList.add("invalid");
    letter.classList.add("invalid");
// Explains purpose of: }
}

// Explains purpose of: // Validate capital letters
  // Validate capital letters
// Explains purpose of: var upperCaseLetters = /[A-Z]/g;
  var upperCaseLetters = /[A-Z]/g;
// Explains purpose of: if(myInput.value.match(upperCaseLetters)) {
  if(myInput.value.match(upperCaseLetters)) {
// Explains purpose of: capital.classList.remove("invalid");
    capital.classList.remove("invalid");
// Explains purpose of: capital.classList.add("valid");
    capital.classList.add("valid");
// Explains purpose of: } else {
  } else {
// Explains purpose of: capital.classList.remove("valid");
    capital.classList.remove("valid");
// Explains purpose of: capital.classList.add("invalid");
    capital.classList.add("invalid");
// Explains purpose of: }
  }

// Explains purpose of: // Validate numbers
  // Validate numbers
// Explains purpose of: var numbers = /[0-9]/g;
  var numbers = /[0-9]/g;
// Explains purpose of: if(myInput.value.match(numbers)) {
  if(myInput.value.match(numbers)) {
// Explains purpose of: number.classList.remove("invalid");
    number.classList.remove("invalid");
// Explains purpose of: number.classList.add("valid");
    number.classList.add("valid");
// Explains purpose of: } else {
  } else {
// Explains purpose of: number.classList.remove("valid");
    number.classList.remove("valid");
// Explains purpose of: number.classList.add("invalid");
    number.classList.add("invalid");
// Explains purpose of: }
  }

// Explains purpose of: // Validate length
  // Validate length
// Explains purpose of: if(myInput.value.length >= 8) {
  if(myInput.value.length >= 8) {
// Explains purpose of: length.classList.remove("invalid");
    length.classList.remove("invalid");
// Explains purpose of: length.classList.add("valid");
    length.classList.add("valid");
// Explains purpose of: } else {
  } else {
// Explains purpose of: length.classList.remove("valid");
    length.classList.remove("valid");
// Explains purpose of: length.classList.add("invalid");
    length.classList.add("invalid");
// Explains purpose of: }
  }
// Explains purpose of: }
}
// Explains purpose of: </script>
</script>  
// Explains purpose of: <script>
<script>
// Explains purpose of: function onlyNumberKey(evt) {
    function onlyNumberKey(evt) {
          
// Explains purpose of: // Only ASCII character in that range allowed
        // Only ASCII character in that range allowed
// Explains purpose of: var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
// Explains purpose of: if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
// Explains purpose of: return false;
            return false;
// Explains purpose of: return true;
        return true;
// Explains purpose of: }
    }
// Explains purpose of: </script>
</script>
// Explains purpose of: </body>
</body>
// Explains purpose of: </html>
</html>