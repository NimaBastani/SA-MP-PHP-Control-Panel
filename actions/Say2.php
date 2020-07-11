<?php
	session_start();

	if (!isset($_SESSION['username']) || !isset($_SESSION['password'])){ 
		header("location:../login.php"); 
	}
?>
<?php 
/** 
 * 
 * @author Edward McKnight (EM-Creations.co.uk) 
 * This example assumes this file is in the same directory as the SampRcon class. 
 */ 

        require("SampRcon.class.php"); 
         
        if ($query->connect()) { // If a successful connection has been made 
            $query->say($_POST['saytextesh']); // Ban player ID 1 
            $query->close(); // Close the connection 
			
            echo "<div align='center'><img src='../imgs/settings-3.png' width='512' height='512' /><br />"; 
            echo "<a href='../index.php'><h4>Back</h4></a></div>"; 
        } else { 
            echo "<div align='center'>Server did not respond!<br />"; 
            echo "<a href='../index.php'><h4>Back</h4></a></div>"; 

        } 
        $query->close(); // Close the connection 
?>