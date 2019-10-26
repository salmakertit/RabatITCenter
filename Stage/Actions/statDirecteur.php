
<?php
	if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'd'){
		header("Location: index.php");
		exit;
	}

	$nbStructures = requette('select count(*) from structure');
	$nbChercheur = requette('select count(*) from chercheur');
	$budget = requette('select sum(coutttc) from rubrique');

	$array = requetteArray('select * from rubrique, depense where rubrique.iddepense = depense.iddepense');
