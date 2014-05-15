<meta charset="utf-8" />
<?php
    include("../classes/Utilisateur.class.php");
	
	if(isset($_POST['matricule']))
	{
		$matricule = $_POST['matricule'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$email = $_POST['email'];
		
		$util = new Utilisateur($matricule,$nom,$prenom,$email);
		ajoutUtilisateur($util);
		
		
		//echo $util->afficher();
	
	}
	
	function ajoutUtilisateur($utili)
	{
		include("connexion.php");
		$bd->exec("INSERT INTO Utilisateur(matricule,nom,prenom,email)  
						VALUES ('$utili->matricule','$utili->nom','$utili->prenom','$utili->email')");
						
		echo "<h2>L'Utilisateur ".$utili->nom ." a éte bien ajouté</h2>";
	
	}
?>