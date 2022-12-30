<?php

include_once '../shared/connection.php' ;
include '../index/menu.html';

$pid = $_GET['pid'];

$cmd = "select * from upload where pid = $pid";
$sql_result = mysqli_query($conn,$cmd);

$row = mysqli_fetch_assoc($sql_result);
$name = $row['name'];
$price = $row['price'];
$details = $row['details'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit the product</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>
    <div class="content">
        <form enctype="multipart/form-data" action="upload.php" method="POST">
            <div class="box">
                <h3>Upload your Product</h3>
                <input type="text" class="product" placeholder="Enter product" value = "<?php echo $name?>">
                <input type="number" class="price" placeholder="Enter price" value = "<?php echo $price?>">
                <textarea name="details" class="descrip" id="" cols="30" rows="10" placeholder="Enter description"></textarea>
                <input type="file" class="upload" name="pdtimg">
                <input type="submit" class="submit" type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
<?php

include '../index/info.html';
?>



Warning: Undefined array key "pid" in C:\xampp\htdocs\internproject\seller\edit_fe.php
 on line 6

Fatal error: Uncaught mysqli_sql_exception: You have an error in your SQL syntax; check
 the manual that corresponds to your MariaDB server version for the right syntax to use near '' at line 1 in C:\xampp\htdocs\internproject\seller\edit_fe.php:9 Stack trace: #0 C:\xampp\htdocs\internproject\seller\edit_fe.php(9): mysqli_query(Object(mysqli), 'select * from u...') #1 {main} thrown
 in C:\xampp\htdocs\internproject\seller\edit_fe.php on line 9