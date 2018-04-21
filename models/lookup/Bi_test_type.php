<?php 
	Class bi_test_type extends Simple_list 
	{
		
		function __construct() {
			$this->config_me();
		}

		public function config_me()
		{
			$CI =& get_instance();
			$lang = $CI->admin_public->DATA["system_lang"] ; 
			$CI->lang->load("business/lookup_main",$lang);
		
			$this->table_name = "test_type_s" ; 
			
			//english name
			if ($lang=="english") { $this->name_field_name="test_type_en";}  
			//arabic name
			else {$this->name_field_name="test_type_ar"; }
			
			$this->id_field_name="test_type_id";
			$this->class_name = "bi_test_type";
			
			//$this->$simple_list_override_sql["top5"] = "Select * from A Where ";
								
		}

	}

/* end of the Sample_category class code */ 