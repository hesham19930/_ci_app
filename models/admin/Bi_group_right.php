<?php

	
Class bi_group_right extends Simple_business implements iSimple_Business 
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
			"right_id"=>0  ,
			"group_code"=>0  , 
			"component_code"=>"",
			"access_type"=>"" ,
			"given_by_user_id"=>0
			);
				
	}  
	
		// class configuration 
	public function bi_config()
	{
		
		//create the class stamp 
			$this->class_name="bi_group_right";
			$this->id_field_name="right_id" ; 
			$this->name_field_name="group_code";
			$this->table_name="a_group_rights"; 
			$this->list_title = "قائمة الصلاحيات" ;
			$this->editing_title =""; 
			$this->creating_title = " جديد";
			$this->controller_name="";	
			
		// create array containing fields to show in the table , with listoption ="" 
			$this->list_cols = Array (
				"rights_id"=>"id" , 
				"group_code"=>"group", 
				"component_code"=>"component",
				"access_type" =>"..."
				);
		
		// ------ --------------------------------------------------- ---------------------------
			$this->read_select = Array("*");
			$this->read_select_extended=Array("*");
			$this->read_join_extended=Array();
		
			$this->list_join = $this->read_join_extended ;
			$this->list_edit_Col =-1 ; 
			
			$this->list_items_where["all"] = array();
	}
		
	//_______________________________________________________________________ More Functionality 
	
		public function get_access($component_code,$group_code)
	{
			
			//$component_code = "'".$component_code ; 
			//$component_code =$component_code."'" ; 
			
			$this->db->where('component_code', $component_code);
			$this->db->where('group_code', $group_code);
			$query = $this->db->get('a_group_rights');
			
			foreach ($query->result_array() as $row) {
				return $row["access_type"] ;  
			}
			return  "NF"; 
	
			//if($query->num_rows == 0) return "";
		//	print_r($query->result() ); 
			foreach ($query->result() as $row)
			{
				
				return $row->access_type;
			}
			return  "NF"; 		
	}
	
}
/* END OF  class */ 
/* END OF  class */ 