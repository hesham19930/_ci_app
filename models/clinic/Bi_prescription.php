<?php

Class bi_prescription extends Simple_business implements iSimple_Business 
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
			"prescription_id"=>0,
			"prescription_drug_id"=>0,
			"drug_name"=>"",
			"prescription_visit_id"=>0,
			"prescription_daily_dose"=>"",
			"prescription_remarks"=>"",
			"prescription_drug_name"=>"", 
			"patient_name"=>"",
			
			
			);
	}  

//-------------------------------------------------
	// class configuration 

	public function bi_config()
	{
			$CI =& get_instance();
			$lang = $CI->admin_public->DATA["system_lang"] ; 
			$CI->lang->load("clinic/prescription_main",$lang);
		
		//create the class stamp -------------------------------------------
		
			$this->class_name="bi_prescription";
			$this->table_name="prescription_s";
			
			$this->concept_key="prescription." ; 
			
			$this->id_field_name="prescription_id" ; 
			
			$this->name_field_name=r_langcase("prescription_drug_name","prescription_drug_name");
		
				 
			$this->list_title = r_langline(".list_title",$this->concept_key);
			$this->editing_title = r_langline(".editing_title",$this->concept_key); 
			$this->creating_title = r_langline(".creating_title",$this->concept_key);
			
			// create array containing fields to show in the table , with listoption =""
		 
			$this->list_view_edit_icon["default"] = 1 ; 				
			// create array containing fields to show in the table , with listoption ="" 
			$this->list_views["default"] = Array (
				"prescription_id"=>r_langline("default.list.prescription_id",$this->concept_key) , 
				"prescription_drug_name"=>r_langline("default.list.drug_name",$this->concept_key),
				"prescription_daily_dose"=>r_langline("default.list.prescription_daily_dose",$this->concept_key),
				"prescription_remarks"=>r_langline("default.list.prescription_remarks",$this->concept_key),
				"_DETAILS"=>"|hide|",
				
				);

			
		//---------------------------------------------------------- ---------------------------
			// to be used in reading simple & exteded Modes 
				
			$this->read_select = Array("prescription_s.*");
				
			$this->read_select_extended=Array("prescription_s.*","drug_name");
			$this->read_join_extended=Array(
							
					Array(
					"1"=>"drug_s" , 
					"2"=>"prescription_s.prescription_drug_id = drug_s.drug_id",
					"3"=>"left"),


				
				

								
			);

				
	
		//	$this->list_items_where["single_patient"] = array("patient_id"=>"visit_s.visit_patient_id" ) ;	
			$this->list_join = $this->read_join_extended ;
			$this->list_edit_Col = 1 ; 
			$this->list_items_where["single_visit"] = array("visit_id"=>"prescription_s.prescription_visit_id" );
			
		
			//$this->list_items_order["single_visit"] = array("check_up_value_id"=>"asc");
			//$this->list_items_where["all"] = array(); 
			///$this->list_items_where["fullname"] = array(); 
			
				
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