<?php
	if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'r'){
		header("Location: index.php");
		exit;
	}
	$res = getResponsable($_SESSION['IDCOMPTE']);