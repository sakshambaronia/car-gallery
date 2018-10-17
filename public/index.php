<?php 
?>
<!DOCTYPE html>
<html>
<head>
<title>Car Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/model.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<h2><center>Car Inventory</center></h2>
<p><center>Please select a make from below dropdown to check the model.</center></p>

<div class="container" style="text-align:center">
    <div id="make">
            <div style="margin-bottom:1%">Make : </div>
            <div class="selectWrapper">
                <select id='makevalues' class="selectBox"></select>
            </div>
    </div>
    <div id="model" style="display:none;">
            <div style="margin:1%">Model : </div>
            <div class="selectWrapper">
                <select id='modelvalues' class="selectBox"></select>
            </div>
    </div>
    
</div>
<div id="content" style="display:none;margin-top:2%">
    <div id="modelcontent"></div>
</div>

</body>
<script type="text/javascript" src="js/model.js"></script>
</html>
