<?php
if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO'){
		header("Location: index.php");
		exit;
	}

	if(isset($_GET['id']) && isset($_POST['name']) && isset($_POST['etab']) && isset($_POST['type'])){
		editStruct($_GET['id'], $_POST['name'], $_POST['etab'], $_POST['type']);
		header('Location: index.php?action=dispStructures');
		exit;
	}
	else{
		header('Location: index.php?action=dispStructures');
		exit;
	}