<?php

	Class bi_department_field extends Simple_business implements iSimple_Business 
	{
		
	/* Important Class Behavior Definition -- THIS FUNCTION MUST BE EDITED */ 
	function __construct() 
		{
		  
		  	$this->bi_config(); 			
			// setup all variables 
			$this->clear();
			
		}
	
	/* config & clear business_data  Array of the object */ 
	public function clear(){
		// create array containing all data of the business object not including linked tables//
		$this->business_data  = 
			array(
			"department_field_id"=>0,
			"df_department_id"=>0,
			"df_field_name"=>"",
			"df_field_text"=>"",
			"df_field_order"=>0 , 
			"df_field_type_id"=>0 , 
	
			"df_default_value"=>"" , 
			"df_lookup_class_name"=> "" ,	
	
			"df_field_options" =>"" , 
			
			"df_is_obligatory"=>0 , 
		
			"df_lookup_class_filter"=>"" , 
		
		
			
			
			);
	}  

	
	// class configuration 
	public function bi_config()
	{
		
		$CI =& get_instance();
		$lang = $CI->admin_public->DATA["system_lang"] ; 
		$CI->lang->load("business/ar_main",$lang);
	
	//create the class stamp -------------------------------------------
	
		$this->class_name="bi_department_field";
		$this->table_name="department_field_s";
		
		$this->concept_key="department_field." ; 
		
		$this->id_field_name="department_field_id" ; 
		$this->name_field_name="df_field_name";
			 
		$this->list_title = r_langline(".list_title",$this->concept_key);
		
		// create array containing fields to show in the table , with listoption =""
	 
		$this->list_view_edit_icon["default"] = 1 ; 				
		// create array containing fields to show in the table , with listoption ="" 
		$this->list_views["default"] = Array (
			"department_field_id"=>r_langline("default.list.department_descriptor_id",$this->concept_key) , 
			"df_field_name"=>r_langline("default.list.field_name",$this->concept_key),
			"df_field_text"=>r_langline("default.list.field_text",$this->concept_key),
			"df_field_order"=>r_langline("default.list.field_order",$this->concept_key),
			"field_type_name"=>r_langline("default.list.field_type_name",$this->concept_key),
		
    "_DETAILS"=>"|hide|" ,
			
			);
			
			$this->list_items_where["list_search"] = Array("search"=>"") ;  
	//    $this->list_items_order["list_search"]=array("item_s.item_code"=>"asc") ; 
	 
			$this->list_view_edit_icon["selector"] =0 ;	
			$this->list_views["selector"] = Array () ; 
				 
		
			
		// ------ --------------------------------------------------- ---------------------------
			// to be used in reading simple & exteded Modes 
			$this->read_select = Array("department_field_s.*");	
			$this->read_select_extended=Array("department_field_s.*" ,  
			                                   "department_name" , "field_type_s.field_type_name");
			                                  
			                                 
			$this->read_join_extended=Array(
					Array(
					"1"=>"department_s" ,
					"2"=>"department_s.department_id = department_field_s.df_department_id   " ,
					"3"=>"left") , 
					
					Array(
					"1"=>"field_type_s" ,
					"2"=>"field_type_s.field_type_id = department_field_s.df_field_type_id   " ,
					"3"=>"left") 
					) ; 
						
					
		
			$this->list_join = $this->read_join_extended ;
			
		
			$this->list_edit_Col =2 ; 
			
			$this->list_items_where["all"] = array();
		
			//$this->agsums["xcalc_sumx_fullnumname"] = " patient_number ";
		//	$this->simple_list_override_sql["fullname"] = ' SELECT CONCAT_WS(" .: ",department_code,department_name)  as FULLNAME ,department_id   from department_s '; 
			$this->list_items_where["fullname"] = array(); 
			
			$this->list_items_where["by_department_id"] = array("df_department_id"=>"department_field_s.df_department_id" ) ;		                                           
			$this->list_items_order["by_department_id"]=array("department_field_s.df_field_order"=>"asc") ; 
				
	}
	 	
}
/* END OF CLASS * Started By Anwar APR 14/2013 */ 
