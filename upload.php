// Explains purpose of: <?php
<?php
// Explains purpose of: if(isset($_POST['addcar']) ){
if(isset($_POST['addcar']) ){
// Explains purpose of: require_once('connection.php');
    require_once('connection.php');
// Explains purpose of: echo "<prev>";
   echo "<prev>";
// Explains purpose of: print_r($_FILES['image']);
   print_r($_FILES['image']);
// Explains purpose of: echo "</prev>";
   echo "</prev>";
// Explains purpose of: $img_name= $_FILES['image']['name'];
   $img_name= $_FILES['image']['name'];
// Explains purpose of: $tmp_name= $_FILES['image']['tmp_name'];
   $tmp_name= $_FILES['image']['tmp_name'];
// Explains purpose of: $error= $_FILES['image']['error'];
   $error= $_FILES['image']['error'];
// Explains purpose of: if($error === 0){
    if($error === 0){
// Explains purpose of: $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
        $img_ex = pathinfo($img_name,PATHINFO_EXTENSION);
// Explains purpose of: $img_ex_lc= strtolower($img_ex);
        $img_ex_lc= strtolower($img_ex);

// Explains purpose of: $allowed_exs = array("jpg","jpeg","png","webp","svg");
        $allowed_exs = array("jpg","jpeg","png","webp","svg");
// Explains purpose of: if(in_array($img_ex_lc,$allowed_exs)){
        if(in_array($img_ex_lc,$allowed_exs)){
// Explains purpose of: $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
            $new_img_name=uniqid("IMG-",true).'.'.$img_ex_lc;
// Explains purpose of: $img_upload_path='images/'.$new_img_name;
            $img_upload_path='images/'.$new_img_name;
// Explains purpose of: move_uploaded_file($tmp_name,$img_upload_path);
            move_uploaded_file($tmp_name,$img_upload_path);

// Explains purpose of: $carname=mysqli_real_escape_string($con,$_POST['carname']);
                $carname=mysqli_real_escape_string($con,$_POST['carname']);

// Explains purpose of: $ftype=mysqli_real_escape_string($con,$_POST['ftype']);
                $ftype=mysqli_real_escape_string($con,$_POST['ftype']);
// Explains purpose of: $capacity=mysqli_real_escape_string($con,$_POST['capacity'])
                $capacity=mysqli_real_escape_string($con,$_POST['capacity']);
// Explains purpose of: $price=mysqli_real_escape_string($con,$_POST['price']);
                $price=mysqli_real_escape_string($con,$_POST['price']);
// Explains purpose of: $available="Y";
                $available="Y";
// Explains purpose of: $query="INSERT INTO cars(CAR_NAME,FUEL_TYPE,CAPACITY,PRICE,C
                $query="INSERT INTO cars(CAR_NAME,FUEL_TYPE,CAPACITY,PRICE,CAR_IMG,AVAILABLE) values('$carname','$ftype',$capacity,$price,'$new_img_name','$available')";
// Explains purpose of: $res=mysqli_query($con,$query);
                $res=mysqli_query($con,$query);
// Explains purpose of: if($res){
                if($res){
// Explains purpose of: echo '<script>alert("New Car Added Successfully!!")</script>
                    echo '<script>alert("New Car Added Successfully!!")</script>';
// Explains purpose of: echo '<script> window.location.href = "adminvehicle.php";</s
                    echo '<script> window.location.href = "adminvehicle.php";</script>';                }

// Explains purpose of: }else{
        }else{
// Explains purpose of: echo '<script>alert("Cant upload this type of image")</scrip
            echo '<script>alert("Cant upload this type of image")</script>';
// Explains purpose of: echo '<script> window.location.href = "addcar.php";</script>
            echo '<script> window.location.href = "addcar.php";</script>';   
// Explains purpose of: }
        }
// Explains purpose of: }
    }
// Explains purpose of: else{
    else{
// Explains purpose of: $em="unknown error occured";
        $em="unknown error occured";
// Explains purpose of: header("Location: addcar.php?error=$em");
        header("Location: addcar.php?error=$em");
// Explains purpose of: }
    }









// Explains purpose of: }
}
// Explains purpose of: else{
else{
// Explains purpose of: echo "false";
    echo "false";
// Explains purpose of: }
}



// Explains purpose of: ?>
?>
