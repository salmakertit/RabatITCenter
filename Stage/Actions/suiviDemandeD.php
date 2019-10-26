<?php
	if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'd'){
		header("Location: index.php");
		exit;
	}

	$array = requetteArray("select * from demande, chercheur where
						demande.etatdemande = 1 and 
						chercheur.idChercheur = demande.idChercheur");

