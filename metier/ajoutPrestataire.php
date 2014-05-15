<meta charset="utf-8" />
<?php
    include("../classes/Prestataire.class.php");
	
	if( isset($_POST['nom']) && isset($_POST['login']) && isset($_POST['pswd']))
	{
		$nom = $_POST['nom'];
		$login = $_POST['login'];
		$pswd = $_POST['pswd'];
		
		
		$prest = new Prestataire($nom,$login,$pswd);
		ajoutPrestataire($prest);
		
		
		//echo $resp->afficher();
	
	}
	
	function ajoutPrestataire($presta)
	{
		include("connexion.php");
		$bd->exec("INSERT INTO Prestataire (nom,login,pswd)  
						VALUES ('$presta->nom','$presta->login','$presta->pswd')");
						
		echo "<h2>Le prestataire ".$presta->nom ." a éte bien ajouté</h2>";
	
	}
?>