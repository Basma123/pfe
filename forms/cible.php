<?php
    
   if ( isset( $_POST['matricule'] ) && isset( $_POST['nom'] )&& isset ( $_POST['prenom']) 
		   && isset( $_POST['E-mail'] )&& isset( $_POST['agence']) && isset( $_POST['catégorie']) 
		   && isset( $_POST['Type_de_matériel']) && isset( $_POST['num_série']) 
		   && isset( $_POST['date_de_déclaration']) && isset( $_POST['description']))
   {
		ini_set('SMTP','smtp.menara.ma'); 
		mail('touda.basma@gmail.com', 'Mon Sujet', $_POST['description']);
    }
	else
	echo "<h1><font color='red'>".strtoupper("erreur")."</font></h1>";


?>