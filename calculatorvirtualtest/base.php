<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

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

/* Extra styles for the cancel button */
.cancelbtn {
    width: 100%;
    padding: 14px 20px;
    background-color: #f44336;
}

.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
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
<h1>Welcome to Easycalculator</h1>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign in</button>

<div id="id01" class="modal">
  <form class="modal-content animate" action="pros_signin.php" method="post">
    <div class="container">
      <label for="nama_pengguna"><b>Nama</b></label>
      <input type="text" placeholder="Masukkan Nama" name="nama_pengguna" required>

      <label for="katalaluan"><b>Katalaluan</b></label>
      <input type="password" placeholder="Masukkan Katalaluan" name="katalaluan" required>

	  <button type="button" style="width:auto;" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>\
	  <button type="submit" style="width:auto;">Sign in</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<a href="signup.php">Sign up</a>
</center></div>
</body>
</html>

