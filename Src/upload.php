<?php
if (isset($_POST['addcar'])) {

    require_once('connection.php');

    /* Check image upload */
    if (!isset($_FILES['image']) || $_FILES['image']['error'] !== 0) {
        echo "<script>alert('Please select an image'); window.location='addcar.php';</script>";
        exit;
    }

    $img_name = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    $img_ext = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));
    $allowed_ext = ['jpg', 'jpeg', 'png', 'webp', 'svg'];

    if (!in_array($img_ext, $allowed_ext)) {
        echo "<script>alert('Invalid image format'); window.location='addcar.php';</script>";
        exit;
    }

    /* Ensure images folder exists */
    if (!is_dir('images')) {
        mkdir('images', 0755, true);
    }

    /* Generate unique image name */
    $new_img_name = uniqid("CAR_", true) . '.' . $img_ext;
    $upload_path = "images/" . $new_img_name;

    if (!move_uploaded_file($tmp_name, $upload_path)) {
        echo "<script>alert('Image upload failed'); window.location='addcar.php';</script>";
        exit;
    }

    /* Sanitize inputs */
    $carname  = trim($_POST['carname']);
    $ftype    = trim($_POST['ftype']);
    $capacity = (int)$_POST['capacity'];
    $price    = (float)$_POST['price'];
    $available = 'Y';

    /* Insert into database using prepared statement */
    $stmt = mysqli_prepare(
        $con,
        "INSERT INTO cars (CAR_NAME, FUEL_TYPE, CAPACITY, PRICE, CAR_IMG, AVAILABLE)
         VALUES (?, ?, ?, ?, ?, ?)"
    );

    mysqli_stmt_bind_param(
        $stmt,
        "ssidsi",
        $carname,
        $ftype,
        $capacity,
        $price,
        $new_img_name,
        $available
    );

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('New Car Added Successfully'); window.location='adminvehicle.php';</script>";
    } else {
        echo "<script>alert('Database error'); window.location='addcar.php';</script>";
    }

} else {
    echo "Invalid Access";
}
?>
