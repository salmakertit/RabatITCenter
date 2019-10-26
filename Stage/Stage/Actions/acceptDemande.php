<?php
	if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'r'){
		header("Location: index.php");
		exit;
	}
	if(!isset($_GET['id'])){
		header('Location: index.php?action=suiviDemande');
		exit;
	}

	requetteUp("update demande set etatdemande = 1 where iddemande = ".$_GET['id']);
	header("Location: index.php?action=suiviDemande");
	exit;