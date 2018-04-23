<!DOCTYPE html>
<html>
<center>
<div><form id="form" method="post" action="pros_insert.php">
<head>
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
</style>
</head>
<body>
<video autoplay muted loop id="myVideo">
<source src="bg.mp4" type="video/mp4">
Your browser does not support HTML5 video.
</video>
<div class="content"><center>
<table>
<tr><td>
Nombor 1:</td>
<td><input type="number" name="no1"></td></tr>
<tr><td>
Nombor 2:</td>
<td><input type="number" name="no2"></td></tr>
<tr><td>
Pilih operasi:</td>
<td> 
<input type="radio" name="oprs" value="+">+
<input type="radio" name="oprs" value="-">-
<input type="radio" name="oprs" value="*">x
<input type="radio" name="oprs" value="/">/
<input type="radio" name="oprs" value="%">%
</td></tr>
<tr><td>
Catatan:</td>
<td><input type="text" name="catatan"></td></tr>
<tr><td>
<input type="submit" name="submit" class="input button"/></td></tr>
<tr><td>
Output:
<?php
if(isset($_GET['result']))
    echo $_GET['result'];
?>
</td></tr>
</table>
</form></div></center>
</div></center>

</body>
</html>