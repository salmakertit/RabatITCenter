<?php
if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' ||  $_SESSION['TYPE'] != 'd'){
		header("Location: index.php");
		exit;
}

	if(isset($_GET['id'])){
		deleteDepense($_GET['id']);
		header('Location: index.php?action=dispDepenses');
		exit;
	}
	else{
		header('Location: index.php?action=dispDepenses');
		exit;
	}