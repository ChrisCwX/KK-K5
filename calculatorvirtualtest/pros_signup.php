<?php
include ('config.php');
$nama_pengguna=$_POST['nama_pengguna'];
$katalaluan=$_POST['katalaluan'];
echo"<br>";
$query="insert into pengguna values
('$nama_pengguna','$katalaluan')";
if(mysql_query($query)){
header("Location:base.php");}
else
echo"something went wrong";
?>