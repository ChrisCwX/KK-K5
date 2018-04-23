<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
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
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

a {font-size: 13px}

a:link, a:visited {
    background-color: #f44336;
    color: white;
    padding: 13px 25px;
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
<h1>Welcome to Easycalculator</h1>
<h3>Sila isi borang ini untuk mencipta akaun baru anda</h3>

<form id="form" method="post" action="pros_signup.php">
<center><h1>Sila Isi Borang</h1></center>
<center><table>
<tr>
<td>Nama :</td>
<td><input name="nama_pengguna" value="" size="50"/></td>
</tr>
<tr>
<td>Katalaluan :</td>
<td><input name="katalaluan" value="" size="50"/></td>
</tr></center></table>
<a href="index.php" >Sudah ada akaun ?</a>
<button type="submit" style="width:auto;">Hantar</button>
</form>
</center></div>
</body>
</html>