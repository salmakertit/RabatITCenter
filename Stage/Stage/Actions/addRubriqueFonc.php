<?php
if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'd'){		header("Location: index.php");
		exit;
	}

	if(isset($_POST['nom']) && isset($_POST['cout']) && isset($_POST['depense'])){
		addRubrique($_POST['nom'], $_POST['cout'], $_POST['depense']);
		header('Location: index.php?action=dispDepense&id='.$_POST['depense']);
		exit;
	}
	else{
		header('Location: index.php?action=dispDepenses');
		exit;
	}