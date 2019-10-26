<?php

	requetteUp("update demande set etatdemande = -1 where iddemande = ".$_GET['id']);
	header("Location: index.php?action=suiviDemande");
	exit;