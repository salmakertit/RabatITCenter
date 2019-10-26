<?php 
	$_SESSION['ACTIF'] = 'NO';
	session_unset($_SESSION['ACTIF']);
	header('Location: index.php');
	exit;