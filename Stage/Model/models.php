<?php
	function getConnection(){
		$conn = oci_connect("hr", "hr", "localhost/orcl");
		if (!$conn) {
		   $m = oci_error();
		   echo $m['message'], "\n";
		   exit;
		}
		else {
   			return $conn;
   		}	
	}


	function login($mail, $password){
		$conn = getConnection();
		$req = "select type, idCompte from compte where mail = '". $mail . "' and password = '". $password."'";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		return $res;
	}
	function getAdminInformations($id){
		$conn = getConnection();
		$req = "select * from Admin where idCompte = ". $id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		return $res;
	}
	function getChercheurInformations($id){
		$conn = getConnection();
		$req = "select * from Chercheur where idCompte = ". $id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		return $res;
	}

	function getResponsableInformations($id){
		$conn = getConnection();
		$req = "select * from strResponsable where idCompte = ". $id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		return $res;
	}
	function getDirecteurInformations($id){
		$conn = getConnection();
		$req = "select * from Directeur where idCompte = ". $id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		return $res;
	}

	function addStruct($name, $etab, $type){
		$conn = getConnection();
		$req = "select max(idStructure) from Structure";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		$id = 1000;
		if(is_null($res['MAX(IDSTRUCTURE)'][0]))
			$id = 1;
		else
			$id = $res['MAX(IDSTRUCTURE)'][0] + 1;
		$req = "insert into structure values(".$id.", '". $name . "', '". $type."', '" . $etab ."')";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$s = oci_parse($conn, "commit");
		oci_execute($s);
	}
	function addChercheur($mail, $password, $nom, $prenom, $idStructure){
		$conn = getConnection();
		$req = "select max(idCompte) from compte";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		$id = 1000;
		if(is_null($res['MAX(IDCOMPTE)'][0]))
			$id = 1;
		else
			$id = $res['MAX(IDCOMPTE)'][0] + 1;
		$req = "insert into compte values(".$id.", '". $mail . "', '". $password."', 'c')";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$req = "select max(idChercheur) from chercheur";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		$idC = 1000;
		if(is_null($res['MAX(IDCHERCHEUR)'][0]))
			$idC = 1;
		else
			$idC = $res['MAX(IDCHERCHEUR)'][0] + 1;
		$req = "insert into chercheur values(".$idC.", '". $nom . "', '". $prenom."', ". $idStructure.", ".$id.")";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		
		$s = oci_parse($conn, "commit");
		oci_execute($s);
	}

	function getAllStructures(){
		$conn = getConnection();
		$req = "select * from Structure";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		return $res;
	}
	function getAllChercheurs(){
		$conn = getConnection();
		$req = "select * from Chercheur";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		return $res;
	}
	function responsableName($id){
		$conn = getConnection();
		$req = "select NOMRESPONSABLESTR||' '||PRENOMRESPONSABLESTR from RESPONSABLESTR where idStructure = ".$id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		
		while ($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) 
    		foreach ($row as $item) 
        		return $item;
        return "N/A";
	}
	function responsableId($id){
		$conn = getConnection();
		$req = "select idresponsablestr from RESPONSABLESTR where idStructure = ".$id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		while ($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) 
    		foreach ($row as $item) 
        		return $item;
        return "N/A";
	}
	function getStructureById($id){
		$conn = getConnection();
		$req = "select NOMSTRUCTURE from structure where idStructure = ".$id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		
		while ($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) 
    		foreach ($row as $item) 
        		return $item;
        return "N/A";
	}

	function deleteStruct($id){
		$conn = getConnection();		
		$req = "delete from structure where idStructure = ".$id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$s = oci_parse($conn, "commit");
		oci_execute($s);
	}
	function deleteChercheur($id){
		$conn = getConnection();
		$req = "delete from compte where idCompte = " . $id;
		echo $req;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$req = "delete from chercheur where idCompte = " . $id;;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$s = oci_parse($conn, "commit");
		oci_execute($s);
	}
	function getStructById($id){
		$conn = getConnection();
		$req = "select * from Structure where idStructure = ".$id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		return $res;
	}
	function getChercheurById($id){
		$conn = getConnection();
		$req = "select * from Chercheur, Compte where Chercheur.idCompte = Compte.idCompte and idChercheur = ".$id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		return $res;
	}
	function editStruct($id, $name, $etab, $type){
		$conn = getConnection();
		$req = "update structure set NOMSTRUCTURE ='". $name . "' , ETTABLISSEMENTATTACHEE = '". $etab."' , TYPESTRUCTURE = '" . $type ."' where idstructure = ".$id;
		error_log($req);
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$s = oci_parse($conn, "commit");
		oci_execute($s);
	}
	function addResponsable($mail, $password, $nom, $prenom, $idStructure){
		$conn = getConnection();
		$req = "select max(idCompte) from compte";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		$id = 1000;
		if(is_null($res['MAX(IDCOMPTE)'][0]))
			$id = 1;
		else
			$id = $res['MAX(IDCOMPTE)'][0] + 1;
		$req = "insert into compte values(".$id.", '". $mail . "', '". $password."', 'r')";
		error_log($req);
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$req = "select max(idresponsablestr) from RESPONSABLESTR";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		$idC = 1000;
		if(is_null($res['MAX(IDRESPONSABLESTR)'][0]))
			$idC = 1;
		else
			$idC = $res['MAX(IDRESPONSABLESTR)'][0] + 1;
		$req = "insert into RESPONSABLESTR values(".$idC.", '". $nom . "', '". $prenom."', ". $idStructure.", ".$id.")";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		
		$s = oci_parse($conn, "commit");
		oci_execute($s);
	}
	function deleteResponsable($id){
		$conn = getConnection();

		$req = "select idcompte from RESPONSABLESTR where idresponsablestr = ".$id;
		error_log($req);
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$id = "xx";
		while ($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) 
    		foreach ($row as $item) 
        		$id = $item;
		$req = "delete from compte where idCompte = " . $id;
		error_log($req);
		echo $req;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$req = "delete from responsablestr where idCompte = " . $id;;
		error_log($req);
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$s = oci_parse($conn, "commit");
		oci_execute($s);
	}
	function getResponsable($id){
		$conn = getConnection();
		$req = "select * from Responsablestr where idcompte = ".$id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		return $res;	
	}

	function addDepense($nature){
		$conn = getConnection();
		$req = "select max(idDepense) from depense";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		$id = 1000;
		if(is_null($res['MAX(IDDEPENSE)'][0]))
			$id = 1;
		else
			$id = $res['MAX(IDDEPENSE)'][0] + 1;
		$req = "insert into DEPENSE values(".$id.", '". $nature . "')";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$s = oci_parse($conn, "commit");
		oci_execute($s);
	}

	function getAllDepenses(){
		$conn = getConnection();
		$req = "select * from Depense";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		return $res;
	}

	function deleteDepense($id){
		$conn = getConnection();		
		$req = "delete from depense where iddepense = ".$id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$req = "delete from rubrique where iddepense = ".$id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$s = oci_parse($conn, "commit");
		oci_execute($s);
	}

	function getDepense($id){
		$conn = getConnection();
		$req = "select * from Depense where iddepense = ".$id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		return $res;
	}

	function getRubriques($id){
		$conn = getConnection();
		$req = "select * from Rubrique where iddepense = ".$id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		return $res;
	}
	function addRubrique($nom, $cout, $depense){
		$conn = getConnection();
		$req = "select max(idRubrique) from rubrique";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		$id = 1000;
		if(is_null($res['MAX(IDRUBRIQUE)'][0]))
			$id = 1;
		else
			$id = $res['MAX(IDRUBRIQUE)'][0] + 1;
		$req = "insert into rubrique values(".$id.", '". $nom . "', ".$depense.", ".$cout.")";
		error_log($req);
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$s = oci_parse($conn, "commit");
		oci_execute($s);
	}
	function deleteRubrique($id){
		$conn = getConnection();		
		$req = "delete from rubrique where idRubrique = ".$id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
	}
	function idChercheur($id){
		$conn = getConnection();		
		$req = "select idChercheur from chercheur where idCompte = ".$id;
		error_log($req);
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$id = "xx";
		while ($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) 
    		foreach ($row as $item) 
        		$id = $item;	
        return $id;
	}
	function addDemande($id, $idRubrique, $cout){
		$conn = getConnection();		
		$id = idChercheur($id);
        $req = "select max(idDemande) from demande";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		$idd = 1000;
		if(is_null($res['MAX(IDDEMANDE)'][0]))
			$idd = 1;
		else
			$idd = $res['MAX(IDDEMANDE)'][0] + 1;
		$req = "insert into DEMANDE values(".$idd.", 0, ". $id . ", ". $idRubrique.", ".$cout.")";
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$s = oci_parse($conn, "commit");
		oci_execute($s);
	}

	function getDemandes($id){
		$conn = getConnection();
		$req = "select * from Demande where idChercheur = ".$id;
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		return $res;
	}
	function rubriqueName($id){
		$conn = getConnection();		
		$req = "select nomrubrique from rubrique where idRubrique = ".$id;
		error_log($req);
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$id = "xx";
		while ($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) 
    		foreach ($row as $item) 
        		$id = $item;	
        return $id;
	}
	function deleteDemande($id){
		$conn = getConnection();		
		$req = "delete from demande where idDemande = ".$id;
		$s = oci_parse($conn, $req);
		oci_execute($s);	
		$s = oci_parse($conn, "commit");
		oci_execute($s);
	}

	function requetteArray($req){
		$conn = getConnection();
		error_log($req);
		$s = oci_parse($conn, $req);
		oci_execute($s);
		oci_fetch_all($s, $res);
		return $res;
	}
	function requette($req){
		$conn = getConnection();		
		error_log($req);
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$id = "xx";
		while ($row = oci_fetch_array($s, OCI_ASSOC+OCI_RETURN_NULLS)) 
    		foreach ($row as $item) 
        		$id = $item;	
        return $id;
	}
	function requetteUp($req){
		$conn = getConnection();		
		error_log($req);
		$s = oci_parse($conn, $req);
		oci_execute($s);
		$s = oci_parse($conn, "commit");
		oci_execute($s);
	}
