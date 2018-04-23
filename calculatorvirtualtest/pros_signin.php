<html>
<head>
<title>Signin</title>

</head>
<body>
<?php
session_start();
$nama_pengguna =$_POST['nama_pengguna'];
$katalaluan =$_POST['katalaluan'];
if($nama_pengguna && $katalaluan)
{
	$server='localhost';
	$userid2='root';
	$password2='123456';
	$dbname='calculator';
$conn=mysql_connect("$server","$userid2","$password2");

mysql_select_db("$dbname",$conn) or die (mysql_error());

$query=mysql_query("select*from pengguna where nama_pengguna='$nama_pengguna'");
$numrows=mysql_num_rows($query);
if($numrows!=0)
{
	while($row=mysql_fetch_assoc($query))
	{
		$dbnama_pengguna=$row['nama_pengguna'];
		$dbkatalaluan=$row['katalaluan'];
	}
if($nama_pengguna==$dbnama_pengguna&&$katalaluan==$dbkatalaluan)
{
	$_SESSION['nama_pengguna']=$nama_pengguna;
	header('Location:profcalculate.php');
} else
{ echo"Incorrect Password !!<a href='index.php'> Click here to sign in again</a>";}
}// if 2
else
	die("That user doesn't exist");
}//if 1
else
{
	echo"Please enter userid and password!!<a href='index.php'>Click here to sign in again</a>";
}
?>
</body>
</html>