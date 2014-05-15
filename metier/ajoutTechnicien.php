<?php
    include("../classes/Technicien.class.php");
	
	if(isset($_POST['code']))
	{
		$code = $_POST['code'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$email = $_POST['email'];
		
		$tech = new Technicien($code,$nom,$prenom,$email);
		ajoutTechnicien($tech);
		
		
		//echo $tech->afficher();
	
	}
	
	function ajoutTechnicien($techn)
	{
		include("connexion.php");
		$bd->exec("INSERT INTO Technicien (code,nom,prenom,email)  
						VALUES ('$techn->code','$techn->nom','$techn->prenom','$techn->email')");
						
		echo "<h2>Le technicien ".$techn->nom ." a éte bien ajouté</h2>";
	
	}
?>