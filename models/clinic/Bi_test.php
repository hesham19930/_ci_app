<?php

Class bi_test extends Simple_business implements iSimple_Business 
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
			"test_id"=>0,
			"test_name"=>"",
			"t_test_type_id"=>"",
			"test_type_en"=>"",
			"test_type_ar"=>"",
			
			);
	}  

//-------------------------------------------------
	// class configuration 

	public function bi_config()
	{
			$CI =& get_instance();
			$lang = $CI->admin_public->DATA["system_lang"] ; 
			$CI->lang->load("clinic/test_main",$lang);
		
		//create the class stamp -------------------------------------------
		
			$this->class_name="bi_test";
			$this->table_name="test_s";
			
			$this->concept_key="test." ; 
			
			$this->id_field_name="test_id" ; 
			
			$this->name_field_name=r_langcase("test_name","test_name");
			$this->name_field_name="test_name" ;
				 
			$this->list_title = r_langline(".list_title",$this->concept_key);
			$this->editing_title = r_langline(".editing_title",$this->concept_key); 
			$this->creating_title = r_langline(".creating_title",$this->concept_key);
			
			// create array containing fields to show in the table , with listoption =""
		 
			$this->list_view_edit_icon["default"] = 1 ; 				
			// create array containing fields to show in the table , with listoption ="" 
			$this->list_views["default"] = Array (
				"test_id"=>r_langline("default.list.test_id",$this->concept_key) , 
				"test_name"=>r_langline("default.list.test_name",$this->concept_key),
				r_langcase("test_type_en","test_type_ar")=>r_langline("default.list.test_type_en",$this->concept_key),
				
				);

			
		//---------------------------------------------------------- ---------------------------
			// to be used in reading simple & exteded Modes 
			$this->read_select = Array("test_s.*");		
			$this->read_select_extended=Array("test_s.*" , "test_type_en" , "test_type_ar");
			$this->read_join_extended=Array(
			
							Array(
							"1"=>"test_type_s" , 
							"2"=>"test_s.t_test_type_id = test_type_s.test_type_id",
							"3"=>"left"),
								);

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
		$repeat_id =  $this->check_value_exist(array("test_name"=>$this->business_data["test_name"]),0,1) ;
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