<?php
	
	class Responsable
	{
		var $login;
		var $pswd;
		
		
		
		function Responsable($login,$pswd){
			$this->login = $login;
			$this->pswd = $pswd;
			
		}
		
		function afficher(){
		
			return "Responsable [login=".$this->login.",pswd = ".$this->pswd."]";
		}
	}

?>