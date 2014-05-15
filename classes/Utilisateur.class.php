<?php
	
	class Utilisateur
	{
		var $matricule;
		var $nom;
		var $prenom;
		var $email;
		
		
		function Utilisateur($matricule,$nom,$prenom,$email){
			$this->matricule = $matricule;
			$this->nom = $nom;
			$this->prenom = $prenom;
			$this->email = $email;
		}
		
		function afficher(){
		
			return "Utilisateur[matricule=".$this->matricule.",nom = ".$this->nom.",prenom = ".$this->prenom.",email = ".$this->email."]";
		}
	}

?>