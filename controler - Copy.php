<?php
	class CONTROLER{
		public function getBody($body)
		{
			if($body==="HOME")
				$obj = new HOME;
			else if($body === "REGISTRATION")
				$obj = new REGISTRATION;
			else if($body === "LOGIN")
				$obj = new LOGIN;
			else if($body === "PROFILE")
				$obj = new PROFILE; 
			
			return $obj->getBody();
			
		}
	}
	interface BODYMANAGER{
		
		public function getBody();
		
	}
	class HOME implements BODYMANAGER{
		public function getBody()
		{
			return "home";
		}
	}
	class REGISTRATION implements BODYMANAGER{
		public function getBody()
		{
			return "reg";
		}
	}
	class LOGIN implements BODYMANAGER{
		public function getBody()
		{
			return "login";
		}
	}
	class PROFILE implements BODYMANAGER{
		public function getBody()
		{
			return "profile";
		}
	}
	
	
?>
