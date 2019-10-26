
<?php
	if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'd'){
		header("Location: index.php");
		exit;
	}
