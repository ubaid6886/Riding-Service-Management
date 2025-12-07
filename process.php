// Explains purpose of: <?php
<?php

// Explains purpose of: // require_once('connection.php');
// require_once('connection.php');
// Explains purpose of: // if(isset($_POST['regs']))
// if(isset($_POST['regs']))
// Explains purpose of: // {
// {
// Explains purpose of: //     $fname=mysqli_real_escape_string($con,$_POST['fname']
//     $fname=mysqli_real_escape_string($con,$_POST['fname']);
// Explains purpose of: //     $lname=mysqli_real_escape_string($con,$_POST['lname']
//     $lname=mysqli_real_escape_string($con,$_POST['lname']);
// Explains purpose of: //     $email=mysqli_real_escape_string($con,$_POST['email']
//     $email=mysqli_real_escape_string($con,$_POST['email']);
// Explains purpose of: //     $lic=mysqli_real_escape_string($con,$_POST['lic']);
//     $lic=mysqli_real_escape_string($con,$_POST['lic']);
// Explains purpose of: //     $ph=mysqli_real_escape_string($con,$_POST['ph']);
//     $ph=mysqli_real_escape_string($con,$_POST['ph']);
// Explains purpose of: //     $id=mysqli_real_escape_string($con,$_POST['id']);
//     $id=mysqli_real_escape_string($con,$_POST['id']);
// Explains purpose of: //     $pass=mysqli_real_escape_string($con,$_POST['pass']);
//     $pass=mysqli_real_escape_string($con,$_POST['pass']);

// Explains purpose of: //     if(empty($fname)|| empty($lname)|| empty($email)|| em
//     if(empty($fname)|| empty($lname)|| empty($email)|| empty($lic)|| empty($ph)|| empty($id)|| empty($pass))
// Explains purpose of: //     {
//     {
// Explains purpose of: //         echo 'Please Fill in the place';
//         echo 'Please Fill in the place';
// Explains purpose of: //     }
//     }
  
       
// Explains purpose of: //         $sql="insert into users (FNAME,LNAME,EMAIL,LIC_NU
//         $sql="insert into users (FNAME,LNAME,EMAIL,LIC_NUM,PHONE_NUMBER,USER_ID,PASSWORD) values('$fname','$lname','$email','$lic',$ph,'$id','$pass')";
// Explains purpose of: //         $result = mysqli_query($con,$sql);
//         $result = mysqli_query($con,$sql);

// Explains purpose of: //         if($result){
//         if($result){
// Explains purpose of: //             echo 'YourRecordidsaves';
//             echo 'YourRecordidsaves';
// Explains purpose of: //         }
//         }
// Explains purpose of: //         else{
//         else{
// Explains purpose of: //             echo 'pleasecheckconnecion';
//             echo 'pleasecheckconnecion';
// Explains purpose of: //         }
//         }
// Explains purpose of: // }
// }
// Explains purpose of: session_start();
session_start();
// Explains purpose of: $value = $_SESSION['rdate'];
$value = $_SESSION['rdate'];
// Explains purpose of: echo $value;
echo $value;



// Explains purpose of: ?>
?>