<?php

	
Class bi_user_group extends Simple_business implements iSimple_Business 
	{
	
		
	/* Important Class Behavior Definition -- THIS FUNCTION MUST BE EDITED */ 
	function __construct() {
	  
	  		$this->bi_config(); 			
			// setup all variables 
			$this->Clear();
	}
	
	
	/* config & clear business_data  Array of the object */ 
	public function Clear(){
		// create array containing all data of the business object not including linked tables//
		$this->business_data  = Array (
			"group_id"=>0  ,
			"group_name"=>""  , 
			"group_remarks"=>"",
			"group_active"=>0 ,
			"group_code"=>""
			);
				
	}  
	
		// class configuration 
	public function bi_config()
	{
		
		//create the class stamp 
			$this->class_name="bi_user_group";
			$this->id_field_name="group_id" ; 
			$this->name_field_name="group_name";
			$this->table_name="a_user_groups"; 
			$this->listtitle = "groups list" ;
			$this->editing_title = "ُُُedit group information" ; 
			$this->controller_name="";	
			
		// create array containing fields to show in the table , with listoption ="" 
			$this->list_cols = array (
				"group_id"=>"رقم" , 
				"group_name"=>"المجموعة",
				"group_active" =>"ِِمنشط",
				"group_code"=>"كود"
				);
		
		// ------ --------------------------------------------------- ---------------------------
			$this->read_select = array("*");
			$this->read_select_extended=array("a_user_groups.*");
			$this->read_join_extended=array();
			$this->list_join = $this->read_join_extended ;
			$this->list_edit_col =2 ; 
			
			$this->list_items_where["all"] = array();
            $this->list_items_where_fixed["user_groups"] = " ( group_id > 10 )" ; 
	}
	



}
