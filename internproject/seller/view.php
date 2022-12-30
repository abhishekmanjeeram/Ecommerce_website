<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style>
        .pdt-container
        {
            width : 200px;
            height:fit-content;
            padding:10px;
            display:inline-block;
            margin: 20px;
            background-color: rgba(255, 255, 255, 0.329);
            margin: left 30px;
            padding:10px;
            border-radius:10px;
            color:white;
            
        }
        
        .pdt-img
        {
            width:200px;
            height:200px
        }
        button
        {
            border-radius:5px;
            border:transparent;
            padding:2px;
            padding-left:15px;
            padding-right:15px;
            
        }
        .delete
        {
            background-color: rgba(200, 0, 0, 0.6);
        }
        .edit
        {
            background-color: rgb(168, 180, 0, 0.6);
            align-self:right;
        }
        .bot
        {
            display:flex;
            justify-content:space-between;
        }




    </style>
</head>
<body>
    
</body>
</html>
<?php

include_once '../shared/connection.php' ;
include '../index/menu.html';

$cmd = "select * from upload where status = 1";
$sql_result = mysqli_query($conn,$cmd);


while($row = mysqli_fetch_assoc($sql_result))
{
    $name = $row['name'];
    $price = $row['price'];
    $details = $row['details'];
    $impath = $row['impath'];

    echo "<div class = 'pdt-container'>

        

            <div class = 'pdt-name'>$name</div>
            <img src = '$impath' class = 'pdt-img'>
            <div class = 'pdt-price'>$price</div>
            <p class='pdt-info'>$details</p>
            <div class='bot'>
            <a href = 'edit_fe.php'><button class='edit'>Edit</button></a>
            <a href = 'deletepdt.php'><button class='delete'>Delete</button></a>
            </div>
        
            
    
    </div>
    ";
}

?>