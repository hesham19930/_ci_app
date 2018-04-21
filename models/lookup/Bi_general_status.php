<?php 
	Class bi_general_status extends Simple_list 
	{
		
		function __construct() {
			$this->config_me();
		}

		public function config_me()
		{
			$CI =& get_instance();
			$lang = $CI->admin_public->DATA["system_lang"] ; 
			$CI->lang->load("business/lookup_main",$lang);
		
			$this->table_name = "GENERAL_STATUS_S" ; 
			if ($lang=="english") { $this->name_field_name="GENERAL_STATUS_NAME";}  else {$this->name_field_name="GENERAL_STATUS_NAME"; }
			$this->id_field_name="GENERAL_STATUS_ID";
			$this->class_name = "bi_general_status";
			
			//$this->$simple_list_override_sql["top5"] = "Select * from A Where ";
								
		}

	}

/* end of the Sample_category class code */ 