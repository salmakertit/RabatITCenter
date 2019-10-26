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
		$req = "insert into structure values(".$id.", '". $name . "', '". $etab."', '" . $type ."')";
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
	function responsable($id){
		$conn = getConnection();
		$req = "select NOMRESPONSABLESTR||' '||PRENOMRESPONSABLESTR from RESPONSABLESTR where idStructure = ".$id;
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