<?php
	
	class Categorie
	{
		var $idCategorie;
		var $libelle;
		
		
		
		function Categorie($idCategorie,$libelle){
			$this->idCategorie = $idCategorie;
			$this->libelle = $libelle;
			
		}
		
		function afficher(){
		
			return "Categorie[idCategorie=".$this->idCategorie.",libelle = ".$this->libelle]";
		}
	}

?>