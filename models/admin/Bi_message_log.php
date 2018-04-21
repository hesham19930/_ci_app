<?php

	
Class bi_message_log extends Simple_business implements iSimple_Business 
	{
	
		
	/* Important Class Behavior Definition -- THIS FUNCTION MUST BE EDITED */ 
	function __construct() {
	  
	  		$this->bi_config(); 			
			// setup all variables 
			$this->clear();
	}
	
	
	/* config & clear business_data  Array of the object */ 
	public function clear(){
		// create array containing all data of the business object not including linked tables//
		$this->business_data  = Array (
			"MESSAGE_LOG_ID"=>0  ,
			"MESSAGE_TYPE"=>""  , 
			"MESSAGE_TEXT"=>"",
			"MESSAGE_TITLE"=>"" , 
			"MESSAGE_EXPLAIN"=>""  ,
			"MESSAGE_USER_ID"=>0,
			"MESSAGE_ACCOUNT_ID"=>0,
			"MESSAGE_GROUP_CODE"=>"",
			"MESSAGE_DATE"=>date('Y-m-d H:i:s'),
			"MESSAGE_RETURN_URL"=>""
			);
						
	}  
	
		// class configuration 
	public function bi_config()
	{
		
		//create the class stamp 
			$this->class_name="bi_message_log";
			$this->id_field_name="MESSAGE_LOG_ID" ; 
			$this->name_field_name="MESSAGE_TEXT";
			$this->table_name="A_MESSAGE_LOG"; 
				
			$this->list_title = "" ;
			$this->editing_title = "" ; 
			$this->creating_title = "" ; 
			$this->controller_name="";	
			
		// create array containing fields to show in the table , with listoption ="" 
			$this->list_cols = Array (
				"message_log_id"=>"ID" , 
				"message_text"=>"Name"
				);
		
		// ------ --------------------------------------------------- ---------------------------
			$this->read_select = Array("*");
			$this->read_select_extended=Array("*");
			$this->read_join_extended=Array();
		
			$this->list_join = $this->read_join_extended ;
			$this->list_edit_Col =2 ; 
			
			$this->list_items_where["all"] = array();
	}

	
}
/* END OF  class */ 