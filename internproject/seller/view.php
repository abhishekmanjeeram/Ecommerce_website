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
            display:inline-bloack;
            margin: 20px;
            
        }
        .pdt-img
        {
            width:200px;
            height:200px
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

        <div class = 'pdt'

            <div class = 'pdt-name'>$name</div>
            <div class = 'pdt-price'>$price</div>
            <img src = '$impath' class = 'pdt-img'>
            <p class='pdt-info'>$details</p>

        </div>    
    
    </div>
    ";
}

?>