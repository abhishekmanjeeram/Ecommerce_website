<?php

$username = $_POST['username'];
$pass1 = $_POST['upass1'];
$pass2 = $_POST['upass2'];

if($pass1 != $pass2)
{
    echo "Password Mismatch";
    die;
}

$conn = new mysqli("localhost","root","","intern");
$cmd = "select * from user where username = '$uname' ";
$sql_result = mysqli_query($conn,$cmd);

$total_row_count = mysqli_num_rows($sql_result);
echo "total_row_count = $total_row_count";
if($total_row_count>0)
{
    echo "Username already taken ,try a different one";
    die;
}

$cmd = "insert into user(uname,password) values('$uname','$upass1')";

$sql_status = mysqli_query($conn,$cmd);
if($sql_status)
{
    echo "User signup sucess";
    die;
}
else
{
    echo "Failed signup!";
}