<?php
if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || !isset($_GET['id'])){
		header("Location: index.php");
		exit;
	}

	if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['password']) && isset($_POST['mail']) && isset($_POST['idstructure'])){
		deleteChercheur($_GET['id']);
		addChercheur($_POST['mail'], $_POST['password'], $_POST['nom'], $_POST['prenom'], $_POST['idstructure']);
		header('Location: index.php?action=dispChercheurs');
		exit;
	}
	else{
		error_log($_POST['mail']. $_POST['password']. $_POST['nom']. $_POST['prenom']. $_POST['idstructure']);
		header('Location: index.php?action=menuChercheur');
		exit;
	}