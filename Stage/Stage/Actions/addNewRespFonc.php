<?php
if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'a'){		header("Location: index.php");
		exit;
	}

	if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['password']) && isset($_POST['mail']) && isset($_POST['idstructure']) && isset($_POST['idresponsable'])){
		deleteResponsable($_POST['idresponsable']);
		addResponsable($_POST['mail'], $_POST['password'], $_POST['nom'], $_POST['prenom'], $_POST['idstructure']);
		header('Location: index.php?action=dispStructures');
		exit;
	}
	else{
		error_log($_POST['mail']. $_POST['password']. $_POST['nom']. $_POST['prenom']. $_POST['idstructure']);
		header('Location: index.php?action=dispStructures');
		exit;
	}