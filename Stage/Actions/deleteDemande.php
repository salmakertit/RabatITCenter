<?php
if(!isset($_SESSION['ACTIF']) || $_SESSION['ACTIF'] == 'NO' || $_SESSION['TYPE'] != 'c'){
		header("Location: index.php");
		exit;
}
	deleteDemande($_GET['id']);
	header('Location: index.php');
	exit;