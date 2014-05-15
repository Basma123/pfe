<meta charset="utf-8" />
<?php
   
	include("connexion.php");
	$con = new Connexion();
	
	$sql = "SELECT concat(u.nom,' ',u.prenom),i.description,i.date_declaration,s.type_materiel,a.nom_agence,i.statuts
			FROM incident i,utilisateur u,agence a,support s
			WHERE i.matricule= u.matricule AND a.code_agence=i.code_agence AND i.num_serie = s.num_serie";
	
	$resultat = $con->bd->query($sql);
	$incidents = $resultat->fetchAll();
	//$incidents = $con->getTables("incident",null,null);
	
	$nbrLignes = count($incidents);
	echo "<table border='1' width='80%'>";
	echo "<tr><th>Crée par</th><th>Description</th><th>Date declaration</th><th>Support</th><th>Agence</th><th>Statut</th></tr>";
		for($i=0;$i < $nbrLignes;$i++)
		{
			echo "<tr>";
				echo "<td>".$incidents[$i][0]."</td>";
				echo "<td>".$incidents[$i][1]."</td>";
				echo "<td>".$incidents[$i][2]."</td>";
				echo "<td>".$incidents[$i][3]."</td>";
				echo "<td>".$incidents[$i][4]."</td>";
				echo "<td style='background-color:red;color:white;'>".$incidents[$i][5]."</td>";
			echo "</tr>";
		
		}
	echo "</table>";
	
	
?>