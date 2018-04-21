<?php 
	Class bi_gender extends Simple_list 
	{
		
		function __construct() {
			$this->config_me();
		}

		public function config_me()
		{
			$CI =& get_instance();
			$lang = $CI->admin_public->DATA["system_lang"] ; 
			$CI->lang->load("business/lookup_main",$lang);
		
			$this->table_name = "A__LIST_GENDER" ; 
			//english name
			if ($lang=="english") { $this->name_field_name="GENDER_NAME";}  
			//arabic name
			else {$this->name_field_name="GENDER_NAME"; }
			$this->id_field_name="GENDER_ID";
			$this->class_name = "bi_gender";
			
			//$this->$simple_list_override_sql["top5"] = "Select * from A Where ";
								
		}

	}

/* end of the Sample_category class code */ 