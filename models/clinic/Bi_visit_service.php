<?php

Class bi_visit_service extends Simple_business implements iSimple_Business 
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
			"visit_service_id"=>0,
			"vs_service_id"=>0,
			"service_name"=>"",
			"vs_visit_id"=>0,
			"vs_price"=>0 , 
			
			);
	}  

//-------------------------------------------------
	// class configuration 

	public function bi_config()
	{
			$CI =& get_instance();
			$lang = $CI->admin_public->DATA["system_lang"] ; 
			$CI->lang->load("clinic/visit_service_main",$lang);
		
		//create the class stamp -------------------------------------------
		
			$this->class_name="bi_visit_service";
			$this->table_name="visit_service_s";
			
			$this->concept_key="visit_service." ; 
			
			$this->id_field_name="visit_service_id" ; 
			
			$this->name_field_name=r_langcase("visit_service_id","visit_service_id");
			$this->name_field_name="visit_service_id" ;
				 
			$this->list_title = r_langline(".list_title",$this->concept_key);
			$this->editing_title = r_langline(".editing_title",$this->concept_key); 
			$this->creating_title = r_langline(".creating_title",$this->concept_key);
			
			// create array containing fields to show in the table , with listoption =""
		 
			$this->list_view_edit_icon["default"] = 1 ; 				
			// create array containing fields to show in the table , with listoption ="" 
			$this->list_views["default"] = Array (
				"visit_service_id"=>r_langline("default.list.visit_service_id",$this->concept_key) , 
				"service_name"=>r_langline("default.list.service_name",$this->concept_key),
				"vs_price"=>r_langline("default.list.vs_price",$this->concept_key),
				"_DETAILS"=>"|hide|",
				);

			
		//---------------------------------------------------------- ---------------------------
			// to be used in reading simple & exteded Modes 
			$this->read_select = Array("visit_service_s.*");		
			$this->read_select_extended=Array("visit_service_s.*","service_name");
			$this->read_join_extended=Array(
							
					Array(
					"1"=>"service_s" , 
					"2"=>"visit_service_s.vs_service_id = service_s.service_id",
					"3"=>"left"),
					
					
			);

			$this->list_join = $this->read_join_extended ;
			$this->list_items_where["single_visit"] = array("visit_id"=>"visit_service_s.vs_visit_id" );
			
			$this->list_edit_Col = 1 ; 
			
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