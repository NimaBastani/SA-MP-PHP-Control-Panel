<?php
	session_start();

	if (!isset($_SESSION['username']) || !isset($_SESSION['password'])){ 
		header("location:../login.php"); 
	}
?>
<div align="center">
<form id="form1" name="form1" method="post" action="Hostname2.php">
  <p>
    <label for="hostnamesh"><h4>Name :</h4> </label>
    <input type="text" name="hostnamesh" id="hostnamesh" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
</form>
</div>