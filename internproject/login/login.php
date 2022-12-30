<?php

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$input_hash = md5($upass);

include_once '../shared/connection.php' ;

$cmd = "select * from user where username = '$uname' and password = '$input_hash'";
$sql_result = mysqli_query($conn,$cmd);

$total_row_count = mysqli_num_rows($sql_result);

$row = mysqli_fetch_assoc($sql_result);
session_start();

$_SESSION['login'] = false;

if($total_row_count==1)
{
    $_SESSION['login'] = true;
    $_SESSION['userid'] = $row['userid'];
    $_SESSION['username'] = $row['username'];

    echo "Login success";
    header('location:view.php');
}
else
{
    echo "Failed login!";
}