// Explains purpose of: <!DOCTYPE html>
<!DOCTYPE html>
// Explains purpose of: <html lang="en">
<html lang="en">
// Explains purpose of: <head>
<head>
// Explains purpose of: <meta charset="UTF-8">
    <meta charset="UTF-8">
// Explains purpose of: <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
// Explains purpose of: <meta name="viewport" content="width=device-width, initial-s
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
// Explains purpose of: <title>BOOKING STATUS</title>
    <title>BOOKING STATUS</title>
// Explains purpose of: </head>
</head>
// Explains purpose of: <body>
<body>
// Explains purpose of: <style>
<style>

// Explains purpose of: *{
*{
// Explains purpose of: margin: 0;
    margin: 0;
// Explains purpose of: padding: 0;
    padding: 0;

// Explains purpose of: }
}

// Explains purpose of: body{
body{
// Explains purpose of: background: url("images/carbg2.jpg");
    background: url("images/carbg2.jpg");
// Explains purpose of: background-position: center;
    background-position: center;
   
// Explains purpose of: }
}
// Explains purpose of: .box{
.box{
    
// Explains purpose of: position:center;
    position:center;    
// Explains purpose of: top: 50%;
    top: 50%;
// Explains purpose of: left: 50%;
    left: 50%;
// Explains purpose of: padding: 20px;
    padding: 20px;
// Explains purpose of: box-sizing: border-box;
    box-sizing: border-box;
// Explains purpose of: background: #fff;
    background: #fff;
// Explains purpose of: border-radius: 4px;
    border-radius: 4px;
// Explains purpose of: box-shadow: 0 5px 15px rgba(0,0,0,.5);
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
// Explains purpose of: background: linear-gradient(to top, rgba(255, 251, 251, 1)70
    background: linear-gradient(to top, rgba(255, 251, 251, 1)70%,rgba(250, 246, 246, 1)90%);
// Explains purpose of: display: flex;
    display: flex;
// Explains purpose of: align-content: center;
    align-content: center;
// Explains purpose of: width: 700px;
    width: 700px;
// Explains purpose of: height: 250px;
    height: 250px;
// Explains purpose of: margin-top: 100px;
    margin-top: 100px;
// Explains purpose of: margin-left: 350px;
    margin-left: 350px;
  
    
// Explains purpose of: }
}


// Explains purpose of: .box .content{
.box .content{
// Explains purpose of: margin-left: 5px;
    margin-left: 5px;
// Explains purpose of: font-size: larger;
    font-size: larger;
// Explains purpose of: }
}

// Explains purpose of: .box .button{
.box .button{
// Explains purpose of: width: 240px;
    width: 240px;
// Explains purpose of: height: 40px;
    height: 40px;
// Explains purpose of: background: #ff7200;
    background: #ff7200;
// Explains purpose of: border:none;
    border:none;
// Explains purpose of: margin-top: 30px;
    margin-top: 30px;
// Explains purpose of: font-size: 18px;
    font-size: 18px;
// Explains purpose of: border-radius: 10px;
    border-radius: 10px;
// Explains purpose of: cursor: pointer;
    cursor: pointer;
// Explains purpose of: color:#fff;
    color:#fff;
// Explains purpose of: transition: 0.4s ease;
    transition: 0.4s ease;
// Explains purpose of: }
}

// Explains purpose of: .utton{
.utton{
// Explains purpose of: width: 200px;
    width: 200px;
// Explains purpose of: height: 40px;
    height: 40px;
   
// Explains purpose of: background: #ff7200;
    background: #ff7200;
// Explains purpose of: border:none;
    border:none;
// Explains purpose of: font-size: 18px;
    font-size: 18px;
// Explains purpose of: border-radius: 5px;
    border-radius: 5px;
// Explains purpose of: cursor: pointer;
    cursor: pointer;
// Explains purpose of: color:#fff;
    color:#fff;
// Explains purpose of: transition: 0.4s ease;
    transition: 0.4s ease;
// Explains purpose of: margin-top: 10px;
    margin-top: 10px;
// Explains purpose of: margin-left: 10px;
    margin-left: 10px;
// Explains purpose of: }
}
// Explains purpose of: .utton a{
.utton a{
// Explains purpose of: text-decoration: none;
    text-decoration: none;
// Explains purpose of: color: white;
    color: white;
// Explains purpose of: font-weight: bold;
    font-weight: bold;
// Explains purpose of: }
}

// Explains purpose of: ul{
ul{
// Explains purpose of: float: left;
    float: left;
// Explains purpose of: display: flex;
    display: flex;
// Explains purpose of: justify-content: center;
    justify-content: center;
// Explains purpose of: align-items: center;
    align-items: center;
// Explains purpose of: margin-top: 100px;
    margin-top: 100px;
// Explains purpose of: }
}

// Explains purpose of: ul li{
ul li{
// Explains purpose of: list-style: none;
    list-style: none;
// Explains purpose of: margin-left: 200px;
    margin-left: 200px;
// Explains purpose of: margin-top: -130px;
    margin-top: -130px;
// Explains purpose of: font-size: 35px;
    font-size: 35px;

// Explains purpose of: }
}
// Explains purpose of: .name{
.name{
// Explains purpose of: font-weight: bold;
    font-weight: bold;
// Explains purpose of: }
}

// Explains purpose of: </style>
</style>



// Explains purpose of: <?php
<?php
// Explains purpose of: require_once('connection.php');
    require_once('connection.php');
// Explains purpose of: session_start();
    session_start();
// Explains purpose of: $email = $_SESSION['email'];
    $email = $_SESSION['email'];

// Explains purpose of: $sql="select * from booking where EMAIL='$email' order by BO
    $sql="select * from booking where EMAIL='$email' order by BOOK_ID DESC LIMIT 1";
// Explains purpose of: $name = mysqli_query($con,$sql);
    $name = mysqli_query($con,$sql);
// Explains purpose of: $rows=mysqli_fetch_assoc($name);
    $rows=mysqli_fetch_assoc($name);
// Explains purpose of: if($rows==null){
    if($rows==null){
// Explains purpose of: echo '<script>alert("THERE ARE NO BOOKING DETAILS")</script>
        echo '<script>alert("THERE ARE NO BOOKING DETAILS")</script>';
// Explains purpose of: echo '<script> window.location.href = "cardetails.php";</scr
        echo '<script> window.location.href = "cardetails.php";</script>';
// Explains purpose of: }
    }
// Explains purpose of: else{
    else{
// Explains purpose of: $sql2="select * from users where EMAIL='$email'";
    $sql2="select * from users where EMAIL='$email'";
// Explains purpose of: $name2 = mysqli_query($con,$sql2);
    $name2 = mysqli_query($con,$sql2);
// Explains purpose of: $rows2=mysqli_fetch_assoc($name2);
    $rows2=mysqli_fetch_assoc($name2);
// Explains purpose of: $car_id=$rows['CAR_ID'];
    $car_id=$rows['CAR_ID'];
// Explains purpose of: $sql3="select * from cars where CAR_ID='$car_id'";
    $sql3="select * from cars where CAR_ID='$car_id'";
// Explains purpose of: $name3 = mysqli_query($con,$sql3);
    $name3 = mysqli_query($con,$sql3);
// Explains purpose of: $rows3=mysqli_fetch_assoc($name3);
    $rows3=mysqli_fetch_assoc($name3);





// Explains purpose of: ?>
?>
// Explains purpose of: <ul><li> <button  class="utton"><a href="cardetails.php">Go 
   <ul><li> <button  class="utton"><a href="cardetails.php">Go to Home</a></button></li><li class="name">HELLO! <?php echo $rows2['FNAME']." ".$rows2['LNAME']?></li>




// Explains purpose of: </ul>
</ul>
// Explains purpose of: <div class="box">
    <div class="box">
// Explains purpose of: <div class="content">
         <div class="content">
// Explains purpose of: <h1>CAR NAME : <?php echo $rows3['CAR_NAME']?></h1><br>
             <h1>CAR NAME : <?php echo $rows3['CAR_NAME']?></h1><br>
// Explains purpose of: <h1>NO OF DAYS : <?php echo $rows['DURATION']?></h1><br>
             <h1>NO OF DAYS : <?php echo $rows['DURATION']?></h1><br>
// Explains purpose of: <h1>BOOKING STATUS : <?php echo $rows['BOOK_STATUS']?></h1><
             <h1>BOOKING STATUS : <?php echo $rows['BOOK_STATUS']?></h1><br>
             
// Explains purpose of: </div>
         </div>
// Explains purpose of: </div>
     </div>



// Explains purpose of: <?php }
<?php }
// Explains purpose of: ?>
?>
    
// Explains purpose of: </body>
</body>
// Explains purpose of: </html>
</html>