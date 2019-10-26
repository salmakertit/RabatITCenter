<?php


	if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'd'){
		header("Location: index.php");
		exit;
	}
	if(!isset($_GET['id'])){
		header('Location: index.php?action=suiviDemandeD');
		exit;
	}

	$demande = requetteArray("select * from demande where idDemande = ". $_GET['id']);
	if($demande['COUT'][0] <= requette("select coutttc from rubrique where idRubrique = ".$demande['IDRUBRIQUE'][0])){
		requetteUp("update demande set etatdemande = 2 where iddemande = ".$_GET['id']);
		requetteUp("update rubrique set coutTTC = coutTTC - " . $demande['COUT'][0] . "  where idRubrique = ".$demande['IDRUBRIQUE'][0]);
	}
	header("Location: index.php?action=suiviDemandeD");
	exit;