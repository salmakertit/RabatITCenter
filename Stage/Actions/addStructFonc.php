<?php
if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'a'){		header("Location: index.php");
		exit;
	}

	if(isset($_POST['name']) && isset($_POST['etab']) && isset($_POST['type'])){
		addStruct($_POST['name'], $_POST['etab'], $_POST['type']);
		header('Location: index.php?action=menuStruct');
		exit;
	}
	else{
		header('Location: index.php?action=addStruct');
		exit;
	}