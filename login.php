<?php
	session_start();

	if (isset($_SESSION['username']) || isset($_SESSION['password'])){ 
		header("location:index.php"); 
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Page</title>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script type="text/javascript">

</script>
<style>
	
	button:hover {
		opacity: 0.4;
	}


	button {
		background-color: #FFFFFF;
		color: white;
		padding: 14px 20px;
		margin: 8px 0;
		border: none;
		cursor: pointer;
		width: 12%;
		opacity: 0.8;
	}


.But {
	color: #0CF;
}

body {
	
	background-image:url(imgs/bg.bmp);
}

#PanelIR {
	color:#CC3;
}
#PanelIR2 {
	color:#0F9;
}

#timeocp {
	color:#FF0;
}


</style>


  <style type="text/css">
.sk-double-bounce {
  width: 40px;
  height: 40px;
  position: relative;
  margin: 40px auto; }
  .sk-double-bounce .sk-child {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background-color: #333;
    opacity: 0.6;
    position: absolute;
    top: 0;
    left: 0;
    -webkit-animation: sk-doubleBounce 2s infinite ease-in-out;
            animation: sk-doubleBounce 2s infinite ease-in-out; }
  .sk-double-bounce .sk-double-bounce2 {
    -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s; }

@-webkit-keyframes sk-doubleBounce {
  0%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0); }
  50% {
    -webkit-transform: scale(1);
            transform: scale(1); } }

@keyframes sk-doubleBounce {
  0%, 100% {
    -webkit-transform: scale(0);
            transform: scale(0); }
  50% {
    -webkit-transform: scale(1);
            transform: scale(1); } }

  </style>
  <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
  body,td,th {
	color: #FC3;
}
  </style>


<!---<script type="text/javascript">
    document.getElementById('preloader').style.display = "none";
</script>!----->
<script>
window.onload = function () { document.getElementById('preloader').remove(); }
</script>

</head>

<body>
<div id="preloader" class="sk-double-bounce">
        <div class="sk-child sk-double-bounce1"></div>
        <div class="sk-child sk-double-bounce2"></div>
</div>

<form id="form1" name="form1" method="post" action="index.php">
  <p>
          <label for="username">Username : </label>
    <span id="sprytextfield2">
          <input type="text" name="username" id="username" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></p>
        <p>
          <label for="password">Password</label>
          <span id="sprytextfield1">
          <input type="password" name="password" id="password" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></p>
        <p>
          <input id="B1" type="submit" name="button" id="button" value="Login" />
          
          
        </p>
</form>
<?php    
$D = date('N');
$Today = $D++;
$days = '';


if($Today == 1){
	$days = 'دو شنبه';
}

   elseif($Today == 2){
	$days = 'سه شنبه';
}

   elseif($Today == 3){
	$days = 'چهار شنبه';
}

   elseif($Today == 4){
	$days = 'پنج شنبه';
}

   elseif($Today == 5){
	$days = 'جمعه';
}

   elseif($Today == 6){
	$days = 'شنبه';
}

   elseif($Today == 7){
	$days = 'یک شنبه';

};

echo '<br> <h6 align="center" id="timeocp">&times; &times; '.$days.' | Control Panel || Made By : NimA00GaMeR&trade;  &times; &times;</h6>';
?>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none");
</script>
</body>
</html>
