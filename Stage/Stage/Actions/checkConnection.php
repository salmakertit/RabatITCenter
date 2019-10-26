<?php
	if(isset($_POST['mail']) and isset($_POST['password'])){
		$res = login($_POST['mail'], $_POST['password']);
		if($res == '0'){
			header('Location: index.php?action=connect&error=1');
			exit;
		}
		else{
			$_SESSION['ACTIF'] = 'YES';
			$_SESSION['TYPE'] = $res['TYPE'][0];
			$_SESSION['IDCOMPTE'] = $res['IDCOMPTE'][0];

			if($res['TYPE'][0] == 'a'){
				header('Location: index.php?action=adminHome');
				exit;
			}
		}
	}
	else{
		header('Location: index.php?action=connect&error=1');
		exit;
	}
