<?php 
	Class bi_field_type  extends Simple_list 
	{
		
		function __construct() {
			$this->config_me();
		}

		public function config_me()
		{
			$CI =& get_instance();
			$lang = $CI->admin_public->DATA["system_lang"] ; 
			$CI->lang->load("business/ar_main",$lang);
		
			$this->table_name = "field_type_s" ; 
			if ($lang=="english") 
			{ $this->name_field_name="field_type_name";}  
			
			else {$this->name_field_name="field_type_name"; }
			
			$this->id_field_name="field_type_id";
			$this->class_name = "bi_field_type";
			
			//$this->$simple_list_override_sql["top5"] = "Select * from A Where ";
								
		}

	}

/* end of the Sample_category class code */ 