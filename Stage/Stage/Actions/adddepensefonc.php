<?php
if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'd'){
		header("Location: index.php");
		exit;
	}

	if(isset($_POST['nature'])){
		addDepense($_POST['nature']);
		header('Location: index.php?action=directeurhome');
		exit;
	}
	else{
		header('Location: index.php?action=directeurhome');
		exit;
	}