<?php
include 'conn.php';
$optradio=$_POST["optradio"];
echo "$optradio";
$sql="INSERT INTO `rating` (`score`) VALUES ($optradio);";
mysqli_query($con,$sql)
?>
