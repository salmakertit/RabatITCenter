<?php
	if(isset($_SESSION['ACTIF']) && $_SESSION['ACTIF'] == 'YES'){
		if($_SESSION['TYPE'] == 'a'){
			header('Location: index.php?action=adminhome');
			exit;
		}
	}