<?php

$pid = $GET['pid'];

include_once "../shared/connection.php" ;

$cmd = "update upload set status = 0 where pid = $pid";

$sql_status = mysqli_query($conn,$cmd);
if($sql_status)
{
    echo "Product deleted succesfully!";
    header('location:view.php');
}
else
{
    echo "Deletion failed";
    echo mysqli_error($conn);
}

?>