<script src="./lib/jQuery/jquery-3.2.1.js"></script>
<link href="./lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>


<?php
	$HOST = "localhost";
	$USER = "root";
	$PASS = "root";
	$DB   = "JustShoes";
	$SAFEWORD = "JuS75h03$";

	$var = 4;

	$con = mysql_connect($HOST, $USER, $PASS) or die("Connessione a mysql non riuscita\n");
	$db = mysql_select_db($DB, $con) or die("Impossibile selezionare il database\n");
	


	//Session started
	session_start();
?>
