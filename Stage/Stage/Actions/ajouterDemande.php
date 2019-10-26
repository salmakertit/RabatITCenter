<?php

if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'c'){
		header("Location: index.php");
		exit;
	}


$array = getAllDepenses();
if(isset($_GET['id'])){
	$rub = getRubriques($_GET['id']);
}