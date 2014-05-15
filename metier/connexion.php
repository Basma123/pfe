<?php

	class Connexion
	{
		var $bd;
		function Connexion()
		{
			$this->bd = new PDO('mysql:host=localhost;dbname=pfe','root','');
		}
		
		function getTables($tableName,$col,$value)
		{
			$sql = "SELECT * FROM ".$tableName;
			if(!empty($col) && !empty($value)){
				$sql.=" WHERE $col='".$value."'";
			}
			$resultat = $this->bd->query($sql);
			$lignes = $resultat->fetchAll();
			return $lignes;
		}
		
	}
	
	
	
	
	if(isset($_GET['mat']))
	{
			$con = new Connexion();
			$nom ="";$prenom="";$email="";
			$user = $con->getTables("utilisateur","matricule",$_GET['mat']);
			$nbrLignes = count($user);
			
			if($nbrLignes>0){
				$nom = $user[0][1];
				$prenom = $user[0][2];
				$email = $user[0][3];
				echo $nom.",".$prenom.",".$email;
			}
	}
	
	if(isset($_GET['cat']))
	{
			$con = new Connexion();
			$nom ="";$prenom="";$email="";
			$supports = $con->getTables("support","id_categorie",$_GET['cat']);
			$nbrLignes = count($supports);
			
			for($i=0;$i < $nbrLignes;$i++)
			{
				$num = $supports[$i][0];
				$type = $supports[$i][1];
				echo $num.",".$type."/";
			}
	}
	
?>