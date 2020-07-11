<html>

<head>
<!---<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() 
   {
   });
</script>!--->
	<style>
	body {
		background-image:url(img/backgroundNima.jpg);
		background-color:#C09;
		background-attachment:fixed;
		background-clip:padding-box;
	}
	body:hover {
		background-image:url(img/backgroundNima2.jpg);
		background-color:#0CF;
		background-attachment:fixed;
		background-clip:padding-box;
	}
a:link {
	color: #0CF;
}
a:visited {
	color: #0CF;
}
a:active {
	color: #0CF;
}
    body,td,th {
	color: #CC3;
	direction: rtl;
}
    a {
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	color: #0CF;
	font-style: italic;
}
a:hover {
	color: #0CF;
}
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body tracingsrc="img/backgroundNima.jpg" tracingopacity="84">
    
    <table width="408" border="0" align="center" cellpadding="1" cellspacing="1">
          <tr>
            <td><?php
        /**
        * @author Edward McKnight (EM-Creations.co.uk)
        */
		error_reporting(0);

        require("actions/SampQuery.class.php"); // Require or include the SampQuery class file

        if ($query->connect()) { // Attempt to the SA-MP server and if the connection was successful run the code below


		    $hoso = $query->getRules();
            $hosn = $query->getInfo();
//			print_r($hosn);
			echo "<title>";
			echo $hosn['hostname'];
			echo "</title>";
        } else {
	echo "<h3 align='center'>&times; Server Is Offline! &times;</h3>";
            echo "<br />";
        }
		//        $query->close(); // Close the connection

        ?></td>
            <td><?php echo $hosn['players'] ?> / <?php echo $hosn['maxplayers'] ?></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><?php echo $hosn['map'] ?></td>
            <td><?php echo $hosn['gamemode'] ?></td>
            <td>&nbsp;</td>
      </tr>
          <tr>
            <td> <?php echo $hoso['mapname'] ?></td>
            <td><a href="http://<?php echo $hoso['weburl'] ?>"><?php echo $hoso['weburl'] ?></a></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td><?php echo $hoso['version'] ?></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td></td>
            <td><?php echo "testt" ?></td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
    </table>
      <?php
	   echo '<table width="488" border="0" align="center" cellspacing="1" cellpadding="1">
  <tr>
    <th width="96" scope="col">ID</th>
    <th width="196" scope="col">Name</th>
    <th width="102" scope="col">Score</th>
    <th width="71" scope="col">Ping</th>
  </tr>
'; 

   $players = $query->getDetailedPlayers(); 
   foreach ($players as $player) { 
   $nplayr = $player['nickname'];
      echo "  <tr>
    <td>{$player['playerid']}</td>
    <td>{$player['nickname']}</td>
    <td>{$player['score']}</td>
    <td>{$player['ping']}</td>
  </tr>
"; 
   } 
    echo "</table>"; 
	?>
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

echo '<br> <h6 align="center">&times; &times; '.$days.' | Server + Players List Samp || Made By : Nima Bastaniw&trade;  &times; &times;</h6>';
?>

    </body>
</html>
