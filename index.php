
// Explains purpose of: <!DOCTYPE html>
<!DOCTYPE html>
// Explains purpose of: <html lang="en">
<html lang="en">
// Explains purpose of: <head>
<head>
    
// Explains purpose of: <title>CAR RENTAL</title>
    <title>CAR RENTAL</title>
// Explains purpose of: <script type="text/javascript">
    <script type="text/javascript">
// Explains purpose of: window.history.forward();
        window.history.forward();
// Explains purpose of: function noBack() {
        function noBack() {
// Explains purpose of: window.history.forward();
            window.history.forward();
// Explains purpose of: }
        }
// Explains purpose of: </script>
    </script>
// Explains purpose of: <link  rel="stylesheet" href="css/style.css">
    <link  rel="stylesheet" href="css/style.css">
// Explains purpose of: <script type="text/javascript">
    <script type="text/javascript">
// Explains purpose of: function preventBack() {
        function preventBack() {
// Explains purpose of: window.history.forward();
            window.history.forward(); 
// Explains purpose of: }
        }
          
// Explains purpose of: setTimeout("preventBack()", 0);
        setTimeout("preventBack()", 0);
          
// Explains purpose of: window.onunload = function () { null };
        window.onunload = function () { null };
// Explains purpose of: </script>
    </script>
// Explains purpose of: </head>
</head>
// Explains purpose of: <body>
<body>



// Explains purpose of: <?php
<?php
// Explains purpose of: require_once('connection.php');
require_once('connection.php');
// Explains purpose of: if(isset($_POST['login']))
    if(isset($_POST['login']))
// Explains purpose of: {
    {
// Explains purpose of: $email=$_POST['email'];
        $email=$_POST['email'];
// Explains purpose of: $pass=$_POST['pass'];
        $pass=$_POST['pass'];
        
        
// Explains purpose of: if(empty($email)|| empty($pass))
        if(empty($email)|| empty($pass))
// Explains purpose of: {
        {
// Explains purpose of: echo '<script>alert("please fill the blanks")</script>';
            echo '<script>alert("please fill the blanks")</script>';
// Explains purpose of: }
        }

// Explains purpose of: else{
        else{
// Explains purpose of: $query="select *from users where EMAIL='$email'";
            $query="select *from users where EMAIL='$email'";
// Explains purpose of: $res=mysqli_query($con,$query);
            $res=mysqli_query($con,$query);
// Explains purpose of: if($row=mysqli_fetch_assoc($res)){
            if($row=mysqli_fetch_assoc($res)){
// Explains purpose of: $db_password = $row['PASSWORD'];
                $db_password = $row['PASSWORD'];
// Explains purpose of: if(md5($pass)  == $db_password)
                if(md5($pass)  == $db_password)
// Explains purpose of: {
                {
// Explains purpose of: header("location: cardetails.php");
                    header("location: cardetails.php");
// Explains purpose of: session_start();
                    session_start();
// Explains purpose of: $_SESSION['email'] = $email;
                    $_SESSION['email'] = $email;
                    
// Explains purpose of: }
                }
// Explains purpose of: else{
                else{
// Explains purpose of: echo '<script>alert("Enter a proper password")</script>';
                    echo '<script>alert("Enter a proper password")</script>';
// Explains purpose of: }
                }



                



// Explains purpose of: }
            }
// Explains purpose of: else{
            else{
// Explains purpose of: echo '<script>alert("enter a proper email")</script>';
                echo '<script>alert("enter a proper email")</script>';
// Explains purpose of: }
            }
// Explains purpose of: }
        }
// Explains purpose of: }
    }







// Explains purpose of: ?>
?>
// Explains purpose of: <div class="hai">
    <div class="hai">
// Explains purpose of: <div class="navbar">
        <div class="navbar">
// Explains purpose of: <div class="icon">
            <div class="icon">
// Explains purpose of: <h2 class="logo">CaRs</h2>
                <h2 class="logo">CaRs</h2>
// Explains purpose of: </div>
            </div>
// Explains purpose of: <div class="menu">
            <div class="menu">
// Explains purpose of: <ul>
                <ul>
// Explains purpose of: <li><a href="#">HOME</a></li>
                    <li><a href="#">HOME</a></li>
// Explains purpose of: <li><a href="aboutus.html">ABOUT</a></li>
                    <li><a href="aboutus.html">ABOUT</a></li>
// Explains purpose of: <li><a href="#">SERVICES</a></li>
                    <li><a href="#">SERVICES</a></li>
                    
// Explains purpose of: <li><a href="contactus.html">CONTACT</a></li>
                    <li><a href="contactus.html">CONTACT</a></li>
// Explains purpose of: <li> <button class="adminbtn"><a href="adminlogin.php">ADMIN
                  <li> <button class="adminbtn"><a href="adminlogin.php">ADMIN LOGIN</a></button></li>
// Explains purpose of: </ul>
                </ul>
// Explains purpose of: </div>
            </div>
            
          
// Explains purpose of: </div>
        </div>
// Explains purpose of: <div class="content">
        <div class="content">
// Explains purpose of: <h1>Rent Your <br><span>Dream Car</span></h1>
            <h1>Rent Your <br><span>Dream Car</span></h1>
// Explains purpose of: <p class="par">Live the life of Luxury.<br>
            <p class="par">Live the life of Luxury.<br>
// Explains purpose of: Just rent a car of your wish from our vast collection.<br>En
                Just rent a car of your wish from our vast collection.<br>Enjoy every moment with your family<br>
// Explains purpose of: Join us to make this family vast.  </p>
                 Join us to make this family vast.  </p>
// Explains purpose of: <button class="cn"><a href="register.php">JOIN US</a></butto
            <button class="cn"><a href="register.php">JOIN US</a></button>
// Explains purpose of: <div class="form">
            <div class="form">
// Explains purpose of: <h2>Login Here</h2>
                <h2>Login Here</h2>
// Explains purpose of: <form method="POST">
                <form method="POST"> 
// Explains purpose of: <input type="email" name="email" placeholder="Enter Email He
                <input type="email" name="email" placeholder="Enter Email Here">
// Explains purpose of: <input type="password" name="pass" placeholder="Enter Passwo
                <input type="password" name="pass" placeholder="Enter Password Here">
// Explains purpose of: <input class="btnn" type="submit" value="Login" name="login"
                <input class="btnn" type="submit" value="Login" name="login"></input>
// Explains purpose of: </form>
                </form>
// Explains purpose of: <p class="link">Don't have an account?<br>
                <p class="link">Don't have an account?<br>
// Explains purpose of: <a href="register.php">Sign up</a> here</a></p>
                <a href="register.php">Sign up</a> here</a></p>
// Explains purpose of: <!-- <p class="liw">or<br>Log in with</p>
                <!-- <p class="liw">or<br>Log in with</p>
// Explains purpose of: <div class="icon">
                <div class="icon">
// Explains purpose of: &emsp;&emsp;&emsp;&ensp;<a href="https://www.facebook.com/">
                    &emsp;&emsp;&emsp;&ensp;<a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon> </a>&nbsp;&nbsp;
// Explains purpose of: <a href="https://www.instagram.com/"><ion-icon name="logo-in
                    <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon> </a>&ensp;
// Explains purpose of: <a href="https://myaccount.google.com/"><ion-icon name="logo
                    <a href="https://myaccount.google.com/"><ion-icon name="logo-google"></ion-icon> </a>&ensp;
                    
// Explains purpose of: </div> -->
                </div> -->
// Explains purpose of: </div>
            </div>
// Explains purpose of: </div>
        </div>
// Explains purpose of: </div>
    </div>
// Explains purpose of: <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
// Explains purpose of: </body>
</body>
// Explains purpose of: </html>
</html>
