<?php 

	Class front_public extends CI_Model 
	{
		
		// variables related to Access Infomration ----------------------------------------------  
	
		public $DATA = Array() ; 
		
		function Load($component_code,$let_me_in="no")
		{
			 					
			$this->load->config("rconfig/front_menu") ;
			
			$DATA["enable_menu"] =$this->config->item("enable_menu")  ; 
			$DATA["main_menu"] = $this->config->item("menu"); // returns the menu array 
			$DATA["form_lang"] = "en" ; 	
		//		print_r($DATA["main_menu"]);	
			return true ; 	 	
  
		}
		
	}

/* End of file xyz.php */
/* Location: ./system/modules/mymodule/myfile.php */