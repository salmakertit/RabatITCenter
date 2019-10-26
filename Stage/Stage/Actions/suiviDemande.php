<?php
	if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'r'){
		header("Location: index.php");
		exit;
	}

	$array = requetteArray("select * from demande, chercheur where
						demande.etatdemande = 0 and 
						chercheur.idChercheur = demande.idChercheur and chercheur.idStructure = ".
						requette("select idStructure from responsablestr where idcompte = ".$_SESSION['IDCOMPTE']));

