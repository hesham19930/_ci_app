<?php 
	Class bi_marital_status extends Simple_list 
	{
		
		function __construct() {
			$this->config_me();
		}

		public function config_me()
		{
			$this->table_name = "A__LIST_MARITAL_STATUS" ; 
			$this->name_field_name="MARITAL_STATUS_NAME";
			$this->id_field_name="MARITAL_STATUS_ID";
			$this->class_name = "bi_marital_status";
			
			//$this->$simple_list_override_sql["top5"] = "Select * from A Where ";
								
		}

	}

/* end of the Sample_category class code */ 