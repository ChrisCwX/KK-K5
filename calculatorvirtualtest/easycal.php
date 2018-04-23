<!Doctype html>  
<html>  
<head>  
<title>Javascript Calculator</title>  
<!-- CSS Code -->  
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
.calbody{  
 background: #33ff77;  
 border: 1px solid #ff0;  
 padding: 30px;   
 min-width: 27.4em;  
 max-width: 27.4em;  
   
}   
  
#lcd{  
 text-align: right;  
 width: 23em;  
 height: 40px;  
 font-size: 18px;  
   
}  
  
#lcdu{  
 color: grey;  
 text-align: right;  
 width: 23em;  
 height: 40px;  
 font-size: 18px;  
   
}  
  
/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 10px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
	width: 100%;
	font-size: 15px; 
}

button:hover {
    opacity: 0.8;
} 
  
</style>  
</head>  
<body>
<center>
<video autoplay muted loop id="myVideo">
<source src="bg.mp4" type="video/mp4">
Your browser does not support HTML5 video.
</video>
<div class="content"><center>
<h1>Easy calculator</h1> 
<div class="calbody">  
<form name="lcdform">  
<input id="lcdu" name="lcdsu" type="text" value="" placeholder="Pengiraan"/>
<div class="tooltip">
<button onclick="myFunction()" onmouseout="outFunc()">
  <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
  Copy text
  </button>
</div>
<input id="lcd" name="lcds" type="text" value="" placeholder="Masukkan nombor anda"/>
</form>
<div id="calbutton">  
<button id="clr" onclick="clr();" style="width:auto;">C</button>
<button id="operationplus" onclick="operationplus();" style="width:auto;">+</button>   
<button id="operationminus" onclick="operationminus();" style="width:auto;">-</button>
<button id="operationmult" onclick="operationmult();" style="width:auto;">*</button>  
<button id="operationdivid" onclick="operationdivid();" style="width:auto;">/</button>
<button id="operationperc" onclick="operationperc();" style="width:auto;">%</button>
<button id="sumbit" onclick="equalsto();" style="width:auto;">=</button>  
</div>  
</div>  
<!-- Javascript code -->  
<script>  
  
var firstnumber;  
var secondnumber;  
var result;  
var operations;  
  
function clr(){  
 document.lcdform.lcds.value = "";  
 document.lcdform.lcdsu.value = "";  
 return;  
}  
  
function operationplus(){  
   
 operation = "+";  
 firstnumber = parseInt(document.lcdform.lcds.value);  
 document.lcdform.lcds.value = "";  
 document.lcdform.lcdsu.value = firstnumber + operation;  
 //alert(firstnumber);  
    
}  
function operationmult(){  
   
 operation = "*";  
 firstnumber = parseInt(document.lcdform.lcds.value);  
 document.lcdform.lcds.value = "";  
 document.lcdform.lcdsu.value = firstnumber + operation;  
   
}  
function operationminus(){  
   
 operation = "-";  
 firstnumber = parseInt(document.lcdform.lcds.value);  
 document.lcdform.lcds.value = "";  
 document.lcdform.lcdsu.value = firstnumber + operation;  
   
}  
function operationdivid(){  
   
 operation = "/";  
 firstnumber = parseInt(document.lcdform.lcds.value);  
 document.lcdform.lcds.value = "";  
 document.lcdform.lcdsu.value = firstnumber + operation;  
   
}  
function operationperc(){  
   
 operation = "%";  
 firstnumber = parseInt(document.lcdform.lcds.value);  
 document.lcdform.lcds.value = "";  
 document.lcdform.lcdsu.value = firstnumber + operation;  
   
}  
function equalsto(){  
   
 secondnumber = parseInt(document.lcdform.lcds.value);  
   
 if (operation == "+")  
 {  
  result = firstnumber + secondnumber;  
 }  
 else if (operation == "*"){  
    
  result = firstnumber * secondnumber;  
    
 }  
 else if (operation == "-"){  
    
  result = firstnumber - secondnumber;  
    
 }    
    else if (operation == "/"){  
    
  result = firstnumber / secondnumber;  
     
 }  
 else if (operation == "%"){  
    
  if (document.lcdform.lcds.value == ""){  
    
  result = firstnumber / 100;  
  document.lcdform.lcdsu.value = firstnumber + operation + "100";  
  }  
  else if (document.lcdform.lcds.value != "")  {  
   result = firstnumber / secondnumber * 100;  
   document.lcdform.lcdsu.value = firstnumber + operation + secondnumber + "*100 = " + result;  
  }  
 }  
 
 document.lcdform.lcds.value ="";  
 document.lcdform.lcds.value = result.toString();  
 document.lcdform.lcdsu.value = firstnumber + operation + secondnumber + " = " + result.toString();  
 return;  
   
}   
  
function myFunction() {
  var copyText = document.getElementById("lcdu");
  copyText.select();
  document.execCommand("Copy");
  
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copied: " + copyText.value;
}

function outFunc() {
  var tooltip = document.getElementById("myTooltip");
  tooltip.innerHTML = "Copy to clipboard";
}

</script> 
<hr>
<br>
<br>
<form id="form" method="post" action="pros_insert.php">
<table>
<tr><td>
Operasi :</td>
<td><input name="oprs" placeholder="paste di sini"></td></tr>
<tr><td>
Catatan :</td>
<td><input name="catatan"></td></tr>
</table>
<button type="submit" style="width:auto;">Hantar</button>
</form>
</div>
</center>
</body>  
</html>  