<?php
include ('config.php');
$oprs=$_POST['oprs'];
$catatan=$_POST['catatan'];

echo"<br>";
$query="insert into calc values
('','$oprs','$catatan')";
if(mysql_query($query)){
header("Location:papar.php");}
else
echo"something went wrong";
?>