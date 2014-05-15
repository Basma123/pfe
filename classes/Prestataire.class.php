<?php
	
	class Prestataire
	{	var $nom;
		var $login;
		var $pswd;
		
		
		
		function Prestataire($nom,$login,$pswd){
			$this->nom = $nom;
			$this->login = $login;
			$this->pswd = $pswd;
			
		}
		
		function afficher(){
		
			return "Prestataire [nom=".$this->nom.",login = ".$this->login.",pswd = ".$this->pswd."]";
		}
	}

?>