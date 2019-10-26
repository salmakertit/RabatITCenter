<?php
	if(isset($_POST['mail']) and isset($_POST['password'])){
		$res = login($_POST['mail'], $_POST['password']);
		if(count($res['TYPE']) == 0){
			header('Location: index.php?action=connect&error=1');
			exit;
		}
		else{
			try{
				$_SESSION['TYPE'] = $res['TYPE'][0];
				$_SESSION['IDCOMPTE'] = $res['IDCOMPTE'][0];
				$_SESSION['ACTIF'] = 'YES';
				header('Location: index.php');
				exit;
			}
			catch(Exception $e){
				header('Location: index.php?action=connect&error=1');
				exit;
			}
		}
	}
	else{
		header('Location: index.php?action=connect&error=1');
		exit;
	}
