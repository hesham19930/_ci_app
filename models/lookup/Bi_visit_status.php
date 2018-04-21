<?php 
	Class bi_visit_status extends Simple_list 
	{
		
		function __construct() {
			$this->config_me();
		}

		public function config_me()
		{
			$CI =& get_instance();
			$lang = $CI->admin_public->DATA["system_lang"] ; 
			$CI->lang->load("business/lookup_main",$lang);
		
			$this->table_name = "visit_status_s" ; 
			
			//english name
			if ($lang=="english") { $this->name_field_name="visit_status_name";}  
			//arabic name
			else {$this->name_field_name="visit_status_name_ar"; }
			
			$this->id_field_name="status_id";
			$this->class_name = "bi_visit_status";
			
			//$this->$simple_list_override_sql["top5"] = "Select * from A Where ";
								
		}

	}

/* end of the Sample_category class code */ 