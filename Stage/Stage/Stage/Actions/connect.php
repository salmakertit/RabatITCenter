<?php
	if(isset($_SESSION['ACTIF']) && $_SESSION['ACTIF'] == 'YES'){
		header('Location: index.php?action=adminhome');
		exit;
	}
