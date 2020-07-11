<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#C2").hide();
		$("#PI1").hide();
		$("#all-timeocp").hide();

        $("#C1").mouseover(function() {
			$("#C2").show();
		});
        $("#C1").mouseout(function() {
			$("#C2").hide();
		});
		
		
        $("#PanelIR2").mouseover(function() {
			$("#PI1").show();
		});
        $("#PanelIR2").mouseout(function() {
			$("#PI1").hide();
		});
		
        $("#timeocp").click(function() {
			$("#all-timeocp").show(1000);
		});
        $("#TimeP-closeid").mouseover(function() {
			$("#all-timeocp").hide(1000);
		});
				
    });
</script>
<style>
	#B1:hover {
		opacity: 0.4;
	}


	#B1 {
	background-color: #FFFFFF;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	/* [disabled]cursor: pointer; */
	width: 12%;
	opacity: 0.8;
	}
	#C1:hover {
		opacity: 0.4;
	}


	#C1 {
	background-color: #FFFFFF;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	/* [disabled]cursor: pointer; */
	width: 12%;
	opacity: 0.8;
	}


	#PanelIR2:hover {
		opacity: 0.6;
		transform: scale(1.1);
	}

	#PanelIR:hover {
		opacity: 0.8;
		transform: scale(1.1);
	}

	#IMG1 {
		opacity: 4.0;
		transition: all .2s ease-in-out;
	}


	#IMG1:hover {
		opacity: 1.0;
		transform: scale(2.1);
	}

.But {
	color: #0CF;
}

body {
	background-image:url(imgs/bg.bmp);
    animation-name: bodyanim;
    animation-duration: 5s;
	overflow-x: hidden;
	overflow-y: hidden;
/*    animation-name: bodyanim2;
*/    /*animation-duration: 19s; */
}

@keyframes bodyanim {
    from {background-image:url(imgs/bg.bmp);}
    to {background-image:url(imgs/bgg.jpg);}

}


#PanelIR {
	color:#CC3;
	transition: all .2s ease-in-out;
}
#PanelIR2 {
	color:#0F9;
	transition: all .2s ease-in-out;
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


<!---<script type="text/javascript">
    document.getElementById('preloader').style.display = "none";
</script>!----->
<script>
window.onload = function () { document.getElementById('preloader').remove(); }
</script>

</head>

<body>
  
  

<?php
	$Logined = 0;
	if (isset($_SESSION['username']) || isset($_SESSION['password'])){ 
		$Logined = 1;
	}
?>
<?php
if($Logined == 0)
{
	session_start();
	@$username = $_POST['username'];
	@$password = $_POST['password'];
	$check_error = 0;
	if (!isset($username) || $username == ''){
		echo "فیلد نام کاربری نباید خالی باشد!";
		$check_error = 1;
	}
	
	elseif (!isset($password) || $password == ''){
		echo "فیلد کلمه عبور نباید خالی باشد!";
		$check_error = 1;
	}
	
	if ($check_error != 1 )
	{
		if($username == "NimA" && $password == "d")
		{
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password'];
		}
		else  header("location:login.php"); 
	}
	else  header("location:login.php"); 
}
?>
<?php
	if (!isset($_SESSION['username']) || !isset($_SESSION['password'])){ 
		header("location:login.php"); 
	}
?>
<div id="preloader" class="sk-double-bounce">
  <div class="sk-child sk-double-bounce1"></div>
        <div class="sk-child sk-double-bounce2"></div>
      </div>

<div align="center" id="DivB">
</div>



<div align="center">

<h2 id="PanelIR">NimaBastaniw's Control Panel</h2>
<!--<h2 id="PanelIR2">By : NimA00GaMeR</h2><br />!-->

<div style="background-image: linear-gradient(to right top, rgb(112, 192, 80), rgb(39, 196, 245)); opacity:30%;">
<a href="Info.php">
<button id="B1" type="submit"><img src="imgs/Restart.bmp" width="26" height="26" /><h2 class="But">Info</h2></button></a>

<a href="actions/Restart.php">
<button id="B1" type="submit"><img src="imgs/Restart.bmp" width="26" height="26" /><h2 class="But">Restart</h2></button></a>

<a href="actions/Hostname.php">
<button id="B1" type="submit"><img src="imgs/HostName.bmp" width="26" height="26" /><h2 class="But">Server Name</h2></button>
</a>

<a href="actions/Say.php">
<button id="B1" type="submit"><img src="imgs/Say.bmp" width="26" height="26" /><h2 class="But">Admin Say</h2></button>
</a>

<a href="actions/Password.php">
<button id="B1" type="submit"><img src="imgs/Password.bmp" width="26" height="26" /><h2 class="But">Server Pass</h2></button>
</a>

<a href="actions/Ban.php">
<button id="B1" type="submit"><img src="imgs/Ban.bmp" width="26" height="26" /><h2 class="But">Ban Player</h2></button>
</a>

<a href="actions/Kick.php">
<button id="B1" type="submit"><img src="imgs/Kick.bmp" width="26" height="26" /><h2 class="But">Kick Player</h2></button>
</a>

<a href="logout.php">
<button id="C1" type="submit"><img src="imgs/Logout.bmp" width="26" height="26" /><h2 class="But">Log Out</h2></button>
</a>
</div>

<div id="C2" style="background-color:#9F0">Log Out From Control Panel ;)</div>

<div id="PI1" style="background-color:#3FF">Created By : Nima Bastaniw - @NimA_BastaniW</div>

<?php    
$D = date('N');
$Today = $D++;
$days = '';

$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

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

echo '<a href="#"><br> <h6 align="center" id="timeocp">&times; &times; '.$days.' | Control Panel || Made By : NimA00GaMeR&trade;  &times; &times;</h6></a>';
?>

<style>
.Time-P
{
	width:100%;
	height:100%;
	background-color:rgba(0,0,0,0.4);
	position:fixed;
	top:0;
	left:0;
	padding-top:60px;
	overflow:auto;
}
.TimeP-con
{
	width:60%;
	background-color:#fefefe;
	border:1px solid #888888;
	margin:5% auto 15% auto;
}
.TimeP-mCon
{
	text-align:center;
	margin:20px 0 12px 0;
	position:relative;
}
.TimeP-close
{
	position:absolute;
	top:0;
	right:25px;
	font-size:24px;
}

.TimeP-close:hover, .TimeP-close:focus
{
	color:green;
}

.TimeP-avatar
{
	width:20%%;
	border-radius:50%;
}

.TimeP-cont
{
	padding:15px;
}

</style>
<div id="IMG1">
<img src="imgs/Control_Panel.png" width="55" height="55" />
<h2 style="color:#C0F"> cPanel :) </h2>
</div>

<div id="all-timeocp" class="Time-P" >
	<div class="TimeP-con">
    	<div class="TimeP-mCon">
            <span id="TimeP-closeid" class="TimeP-close"><h3>&times;</h3></span>
            <img class="TimeP-avatar" src="imgs/Control_Panel.png" width="212" height="212" />
            <div class="TimeP-cont">
            	<h2 id="PanelIR">&para;Nima Bastaniw's Control Panel</h2>
           	  <h2 id="PanelIR2">&para;Created By : NIMA00GAMER ;)</h2>
                <?php
                	$h = time();
					$htt = date('Y-m-d',$h);
					
				?>
            	<h2 style='color:#F06;'>&para;<?php echo "<span> $days   $htt</span>"; ?></h2>
            </div>
        </div>
    </div>
</div>

</div>
</body>
</html>
<?php
	/*$file = $_FILES[File][name];
	$type = $_FILES[File][type];
	move_uploaded_file($_FILES[File][tmp_name], $file);
	rename($file, "SAMP/scriptfiles/$file".".$type");
	*/
?>