<?php

Class bi_vital_sign_value extends Simple_business implements iSimple_Business 
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
			"vital_sign_value_id"=>0,
			"vsv_visit_id"=>0,
			"vsv_vital_sign_id"=>0,
			"vital_sign_type"=>"",
			"vsv_value"=>0,
			
			);
	}  

//-------------------------------------------------
	// class configuration 

	public function bi_config()
	{
			$CI =& get_instance();
			$lang = $CI->admin_public->DATA["system_lang"] ; 
			$CI->lang->load("clinic/vital_sign_value_main",$lang);
		
		//create the class stamp -------------------------------------------
		
			$this->class_name="bi_vital_sign_value";
			$this->table_name="vital_sign_value_s";
			
			$this->concept_key="vital_sign_value." ; 
			
			$this->id_field_name="vital_sign_value_id" ; 
			
			$this->name_field_name=r_langcase("vsv_value","vsv_value");
	
				 
			$this->list_title = r_langline(".list_title",$this->concept_key);
			$this->editing_title = r_langline(".editing_title",$this->concept_key); 
			$this->creating_title = r_langline(".creating_title",$this->concept_key);
			
			// create array containing fields to show in the table , with listoption =""
		 
			$this->list_view_edit_icon["default"] = 1 ; 				
			// create array containing fields to show in the table , with listoption ="" 
			$this->list_views["default"] = Array (
				"vital_sign_value_id"=>r_langline("default.list.vital_sign_value_id",$this->concept_key) , 
				"vital_sign_type"=>r_langline("default.list.vital_sign_type",$this->concept_key),
				"vsv_value"=>r_langline("default.list.vsv_value",$this->concept_key),
				"_DETAILS"=>"|hide|",
				);

			
		//---------------------------------------------------------- ---------------------------
			// to be used in reading simple & exteded Modes 
			$this->read_select = Array("vital_sign_value_s.*");		
			$this->read_select_extended=Array("vital_sign_value_s.*","vital_sign_type");
			$this->read_join_extended=Array(
							
					Array(
					"1"=>"visit_s" , 
					"2"=>"vital_sign_value_s.vsv_visit_id = visit_s.visit_id",
					"3"=>"left"),
					
					Array(
					"1"=>"vital_sign_s" , 
					"2"=>"vital_sign_value_s.vsv_vital_sign_id = vital_sign_s.vital_sign_id",
					"3"=>"left"),		
			
			
			);

			$this->list_join = $this->read_join_extended ;
			$this->list_items_where["single_visit"] = array("visit_id"=>"vital_sign_value_s.vsv_visit_id" );
			
			$this->list_edit_Col = 1 ; 
			$this->list_items_order["single_visit"] = array("vital_sign_value_id"=>"asc");
			//$this->list_items_where["all"] = array(); 
			//$this->list_items_where["fullname"] = array(); 
			
				
	}

//////////////////////////////////////////////////////////////
	public function more_config_cols(rTable $irTable,$view_name="")
	{
			//$this->get_max("drug_active");
			//$irTable->Cols["drug_available"]->Type = rColumnType::ColTypeBoolean;
			  
	}
	/* further configure single table row */ 
	public function more_config_row(rTableRow $itable_row,Array $data_row,$view_name)
	{
			
	}
		
	
//----------------End OF The Class---------------------------------
}