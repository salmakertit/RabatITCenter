<?php
	if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'a'){
		header("Location: index.php");
		exit;
	}
	if(!isset($_GET['id']) || ! isset($_GET['old'])){
		header('Location: index.php?action=dispStructures');
		exit;
	}
