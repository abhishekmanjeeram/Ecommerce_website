<?php

include '../index/menu.html';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>
    <div class="content">
        <form enctype="multipart/form-data" action="upload.php" method="POST">
            <div class="box">
                <h3>Upload your Product</h3>
                <input type="text" class="product" placeholder="Enter product" required>
                <input type="number" class="price" placeholder="Enter price" required>
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