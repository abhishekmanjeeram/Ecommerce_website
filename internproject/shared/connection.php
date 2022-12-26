<?php

$conn = new mysqli("localhost","root","","intern");

if($conn->connect_error)
{
    echo "Connection failed! :( ";
    die;
}

?>