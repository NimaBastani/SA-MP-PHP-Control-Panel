<?php
	session_start();

	if (!isset($_SESSION['username']) || !isset($_SESSION['password'])){ 
		header("location:../login.php"); 
	}
?>
<div align="center">
<form id="form1" name="form1" method="post" action="Password2.php">
  <p>
    <label for="hostnamesh"><h4>Password :</h4> </label>
    <input type="text" name="passwordesh" id="passwordesh" />
  </p>
  <p>
    <input type="submit" name="button" id="button" value="Submit" />
  </p>
</form>
<br />
<h5>Type : 0 to remove server password .</h5>
</div>