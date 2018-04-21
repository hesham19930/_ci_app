<?php

Class bi_diagnosis extends Simple_business implements iSimple_Business 
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
			"diagnosis_id"=>0,
			"diagnosis_code"=>"",
			"diagnosis_name"=>"",
			"diagnosis_abbreviations"=>"",
			"diagnosis_description"=>"",
			
			);
	}  

//-------------------------------------------------
	// class configuration 

	public function bi_config()
	{
			$CI =& get_instance();
			$lang = $CI->admin_public->DATA["system_lang"] ; 
			$CI->lang->load("clinic/diagnosis_main",$lang);
		
		//create the class stamp -------------------------------------------
		
			$this->class_name="bi_diagnosis";
			$this->table_name="diagnosis_s";
			
			$this->concept_key="diagnosis." ; 
			
			$this->id_field_name="diagnosis_id" ; 
			
			$this->name_field_name=r_langcase("diagnosis_name","diagnosis_name_ar");
			$this->name_field_name="diagnosis_name" ;
				 
			$this->list_title = r_langline(".list_title",$this->concept_key);
			$this->editing_title = r_langline(".editing_title",$this->concept_key); 
			$this->creating_title = r_langline(".creating_title",$this->concept_key);
			
			// create array containing fields to show in the table , with listoption =""
		 
			$this->list_view_edit_icon["default"] = 1 ; 				
			// create array containing fields to show in the table , with listoption ="" 
			$this->list_views["default"] = Array (
				"diagnosis_id"=>r_langline("default.list.diagnosis_id",$this->concept_key) , 
				"diagnosis_code"=>r_langline("default.list.diagnosis_code",$this->concept_key),
				"diagnosis_name"=>r_langline("default.list.diagnosis_name",$this->concept_key),
				"diagnosis_abbreviations"=>r_langline("default.list.diagnosis_abbreviations",$this->concept_key),
				"diagnosis_description"=>r_langline("default.list.diagnosis_description",$this->concept_key),
				
				);

			
		//---------------------------------------------------------- ---------------------------
			// to be used in reading simple & exteded Modes 
			$this->read_select = Array("diagnosis_s.*");		
			$this->read_select_extended=Array("diagnosis_s.*");
			$this->read_join_extended=Array();

			$this->list_join = $this->read_join_extended ;
			
			$this->list_edit_Col =2 ; 
			
			$this->list_items_where["all"] = array(); 
			$this->list_items_where["fullname"] = array(); 
			
				
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
		
	public function validate()
	{		
		$repeat_id =  $this->check_value_exist(array("diagnosis_name"=>$this->business_data["diagnosis_name"]),0,1) ;
		if ($repeat_id !=0 )
			{  
				if (intval($repeat_id) != intval($this->ID()))
				{
					$this->error_message = "Name Aleady Exists .......... :) ";
					$this->success = false  ;
					return ; 
				}
			}
			
		$this->success = true ;
		return ; 
		
	}
	
	
//----------------End OF The Class---------------------------------
}