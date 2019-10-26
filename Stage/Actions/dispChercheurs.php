<?php
	if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO'){
		header("Location: index.php");
		exit;
}

	$array = getAllChercheurs();

