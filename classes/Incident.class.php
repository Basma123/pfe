<?php
	
	class Incident
	{	
		var $matricule;
		var $code_agence;
		var $num_serie;
		var $date_declaration;
		var $description;
		var $statut;
		
		
		function Incident($matricule,$code_agence,$num_serie,$date_declaration,$description,$statut){
			$this->matricule = $matricule;
			$this->code_agence = $code_agence;
			$this->num_serie = $num_serie;
			$this->date_declaration = $date_declaration;
			$this->description = $description;
			$this->statut = $statut;
			
		}
		
		
	}

?>