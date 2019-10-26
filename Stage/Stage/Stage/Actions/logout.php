<?php 
	$_SESSION['ACTIF'] = 'NO';
	header('Location: index.php?action=home');
	exit;