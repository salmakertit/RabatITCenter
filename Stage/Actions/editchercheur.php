<?php
	if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' ){
		header("Location: index.php");
		exit;
	}

	if(!isset($_GET['id'])){
		header('Location: index.php?action=dispChercheurs');
		exit;
	}
	$arr = getAllStructures();
	$array = getChercheurById($_GET['id']);