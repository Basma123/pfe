<?php
	
	class Technicien 
	{
		var $code;
		var $nom;
		var $prenom;
		var $email;
		
		
		function Technicien($code,$nom,$prenom,$email){
			$this->code = $code;
			$this->nom = $nom;
			$this->prenom = $prenom;
			$this->email = $email;
		}
		
		function afficher(){
		
			return "Technicien [code=".$this->code.",nom = ".$this->nom.",prenom = ".$this->prenom.",email = ".$this->email."]";
		}
	}

?>