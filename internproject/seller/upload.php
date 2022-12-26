<?php

$name = $_POST['name'];
$price = $_POST['price'];
$details = $_POST['details'];
echo "<br>";

$actual_name = $_FILES['pdtimg']['name'];

$tmp_path = $_FILES['pdtimg']['tmp_name'];

$target_path = "..//images//$actual_name";
move_uploaded_file($tmp_path,$target_path);

$conn = new mysqli("localhost","root","","intern");
$cmd = "insert into upload(name,price,details,impath) values('$name','$price','$details','$target_path')";
$sql_status  = mysqli_query($conn,$cmd);
if($sql_status)
{
    echo "Product uploaded succesfully";
}
else
{
    echo "Upload failed";
    echo mysqli_error($conn);
}

?>