<?php
	session_start();

	if (!isset($_SESSION['username']) || !isset($_SESSION['password'])){ 
		header("location:../login.php"); 
	}
?>
<div align="center">
<form id="form1" name="form1" method="post" action="Kick2.php">
  <p>
    <label for="hostnamesh"><h4>Player ID :</h4> </label>
    <input type="text" name="kickidesh" id="kickidesh" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
</form>
<br />
<h5>Type Player's ID</h5>
</div>