<html>
<head>
<meta charset="utf-8" />
<script src="../js/jquery-1.9.0.js"></script>
<script src="../js/script.js"></script>
</head>
<body>
	<form action="../metier/ajoutIncident.php" method="post">
		<fieldset>
			<table>
			<p> Détail de l'incident</p>
			<tr>
				<td>Matricule :</td>
				<td><input type="text" name="matricule" id="matricule" size="15"  /><input type="button" id="action" value="chercher"  /></td>
			</tr>
			<tr>
				<td>Nom :</td>
				<td><input type="text" name="nom" id="nom"  /></td>
			</tr>
			<tr>
				<td>Prenom :</td>
				<td><input type="text" name="prenom" id="prenom"  /></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="email" name="E-mail" id="E-mail"  /></td>
			</tr>
			<tr>
				<td> Code Agence :</td>
				<td><input type="text" name="code_agence" id="code_agence" /></td>
			</tr>
			<tr>
			
				<td><label for="catégorie">Catégorie:</label></td>
				<td><select name="categorie" id="categorie" >
						<option value="0">------Selectionner-----</option>
						<?php
							include("../metier/connexion.php");
							$con = new Connexion();
							$categories = $con->getTables("categorie",null,null);
							$cat ="";
							$nbrLignes = count($categories);
							for($i=0;$i < $nbrLignes;$i++)
							{
							    
									echo "<option value=".$categories[$i][0].">".$categories[$i][1]."</option>";
							}
						?>
			
					</select> </td>
					
			</tr>
			<td><label for="Type de matériel">Type de matériel:</label></td>
			<td><select name="Type_de_materiel" id="Type_de_materiel">
					<option value="0">------Selectionner-----</option>
					
				</select>
				</td>	
			<tr>
				<td>Numéro de série:</td>
				<td><input type="text" name="num_serie" id="num_serie" /></td>
			</tr>
			
			<tr>
				<td>Statut:</td>
				<td><select name="statut" id="statut"  >
					<option value="En_cours">En cours</option>
					<option value="Résolu">Résolu</option>
					<option value="Rejete">Rejeté</option>
					<option value="Clôture">Clôturé</option>
					</select>
				</td>
			</tr>
			<tr>
						<td><label for="Description">veuillez décrir l'incident :</label></td>
						</tr>
						<tr><td></td>
						<td><textarea name="description" id="description" cols="40" rows="4"></textarea></td>
						
						</tr>
						<br/><br/>
			<tr>
				<td><input class ="btn" type="submit" name="Valider"/></td>
				<td><input class ="btn" type="reset" value="Annuler"/></td>
	
			</tr>
		
			</table>
		</fieldset>	
		<a href="../metier/AfficheIncident.php" />Liste des incidents </a>
	</form>
	
</body>
</html>