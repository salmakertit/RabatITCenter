<?php

if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'c'){
		header("Location: index.php");
		exit;

}


if(isset($_POST['cout']) && isset($_POST['rubrique'])){
		addDemande($_SESSION['IDCOMPTE'], $_POST['rubrique'], $_POST['cout']);
		header('Location: index.php?action=chercheurhome');
		exit;
	}
	else{
		header('Location: index.php?action=chercheurhome');
		exit;
	}