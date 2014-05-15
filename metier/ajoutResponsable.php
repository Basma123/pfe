<meta charset="utf-8" />
<?php
    include("../classes/Responsable.class.php");
	
	if(isset($_POST['login']) && isset($_POST['pswd']))
	{
		$login = $_POST['login'];
		$pswd = $_POST['pswd'];
		
		
		$resp = new Responsable($login,$pswd);
		ajoutResponsable($resp);
		
		
		//echo $resp->afficher();
	
	}
	
	function ajoutResponsable($respo)
	{
		include("connexion.php");
		$bd->exec("INSERT INTO Responsable (login,pswd)  
						VALUES ('$respo->login','$respo->pswd')");
						
		echo "<h2>Le responsable ".$respo->login ." a éte bien ajouté</h2>";
	
	}
?>