<meta charset="utf-8" />
<?php
    include("../classes/Incident.class.php");
	
	if(isset($_POST['matricule']))
	{
		$matricule = $_POST['matricule'];
		$code_agence = $_POST['code_agence'];
		$num_serie = $_POST['num_serie'];
		
		$date_declaration = date("Y-m-d H:m:s");//$_POST['date_de_declaration'];
		$description = $_POST['description'];
		$statut = $_POST['statut'];
		
		$incident = new Incident($matricule,$code_agence,$num_serie,$date_declaration,$description,$statut);
		ajoutIncident($incident);
		
		
	
	}
	
	function ajoutIncident($incident)
	{
		include("connexion.php");
		$con = new Connexion();
		$sql = "INSERT INTO Incident(matricule,code_agence,num_serie,date_declaration,description,statuts)  
						VALUES ('$incident->matricule','$incident->code_agence','$incident->num_serie','$incident->date_declaration','$incident->description','$incident->statut')";
		echo $sql;
		//hors service,aucun message d'erreur
		$con->bd->exec($sql);
		
						
		echo "<h2>L'incident ".$incident->date_declaration ." a éte bien envoyé</h2>";
	
	}
?>