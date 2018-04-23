<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: collapse;
    width: 100%;
	align: center;
}

th, td {
    text-align: left;
    padding: 8px;
}

th {
    background-color: #4CAF50;
    color: white;
}

#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
}
.content {
    position: fixed;
    background: rgba(0, 0, 0, 0.5);
    color: #f1f1f1;
    width: 100%;
    padding: 20px;
}

body {font-family: Arial, Helvetica, sans-serif;}

/* Set a style for all buttons */
input.button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

input.button:hover {
    opacity: 0.8;
}

a {font-size: 13px}

a:link, a:visited {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

a:hover, a:active {
    opacity: 0.8;
}
</style>
</head>
<body>
<video autoplay muted loop id="myVideo">
<source src="bg.mp4" type="video/mp4">
Your browser does not support HTML5 video.
</video>
<div class="content"><center>
<?php
include ('config.php');
$sql="SELECT*from calc ORDER BY id";
$result=mysql_query($sql) or die (mysql_error());
?>
<center><h1>Data</h1>
<table>
<tr>
<th align="center">ID
<th align="center">Pengiraan
<th align="center">Catatan
</tr>
<?php
while($row=mysql_fetch_array($result))
{
echo"<tr>";
echo"<td>".$row["id"]."</td>";
echo"<td>".$row["oprs"]."</td>";
echo"<td>".$row["catatan"]."</td>";
echo"<td>","<a href=\"pros_delete.php?id=".$row['id']."\">Padam</a>";
}
echo"</table>";
echo"<center>";
echo"<br>";
?>
</table>
<a href="easycal.php">Kembali</a>
</div>
</body>
</html>