
<?php
	if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'r'){
		header("Location: index.php");
		exit;
	}

	$nbStructures = $array = requette("select count(*) from demande, chercheur where
						demande.etatdemande = 2 and 
						chercheur.idChercheur = demande.idChercheur and chercheur.idStructure = ".
						requette("select idStructure from responsablestr where idcompte = ".$_SESSION['IDCOMPTE']));



	$nbChercheur = requette('select count(*) from chercheur where idStructure = '. requette("select idStructure from responsablestr where idcompte = ".$_SESSION['IDCOMPTE']));


	$budget = requette('select sum(cout) from demande, chercheur where demande.etatdemande = 2
		and demande.idchercheur = chercheur.idChercheur and 
		chercheur.idStructure = '.requette("select idStructure from responsablestr where idcompte = ".$_SESSION['IDCOMPTE']));



	$array = requetteArray("select * from demande, chercheur where
						chercheur.idChercheur = demande.idChercheur and chercheur.idStructure = ".
						requette("select idStructure from responsablestr where idcompte = ".$_SESSION['IDCOMPTE']));