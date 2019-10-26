<?php
	if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' ){
		header("Location: index.php");
		exit;
	}

	if(!isset($_GET['id'])){
		header('Location: index.php?action=dispStructures');
		exit;
	}
	$array = getStructById($_GET['id']);
	$resp = responsableId($_GET['id']);