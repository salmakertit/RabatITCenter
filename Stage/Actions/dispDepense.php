
<?php
	if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'd'){
		header("Location: index.php");
		exit;
	}

	$curr = getDepense($_GET['id']);
	$array = getRubriques($_GET['id']);