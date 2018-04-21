<?php

Class bi_test_request extends Simple_business implements iSimple_Business 
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
			"test_request_id"=>0,			
			"test_request_test_name"=>"",
			"test_request_test_id"=>0,
			
			"test_request_visit_id"=>0,
			"test_request_sys_account_id"=> sysDATA("sys_account_id") , 

		
			
			);
	}  

//-------------------------------------------------
	// class configuration 

	public function bi_config()
	{
			$CI =& get_instance();
			$lang = $CI->admin_public->DATA["system_lang"] ; 
			$CI->lang->load("clinic/test_request_main",$lang);
		
		//create the class stamp -------------------------------------------
		
			$this->class_name="bi_test_request";
			$this->table_name="test_request_s";
			
			$this->concept_key="test_request." ; 
			
			$this->id_field_name="test_request_id" ; 
			
			$this->name_field_name=r_langcase("test_request_test_name","test_name");
		//	$this->name_field_name="comment_id" ;
				 
			$this->list_title = r_langline(".list_title",$this->concept_key);
			$this->editing_title = r_langline(".editing_title",$this->concept_key); 
			$this->creating_title = r_langline(".creating_title",$this->concept_key);
			
			// create array containing fields to show in the table , with listoption =""
		 
			$this->list_view_edit_icon["default"] = 1 ; 				
			// create array containing fields to show in the table , with listoption ="" 
			$this->list_views["default"] = Array (
				"test_request_id"=>"|hide|",
				
				"test_request_test_name"=>r_langline("default.list.test_name",$this->concept_key),
				"visit_date"=>r_langline("default.list.visit_date",$this->concept_key),
				
				"_DETAILS"=>"|hide|" , 
				);

			
		//---------------------------------------------------------- ---------------------------
			// to be used in reading simple & exteded Modes 
			$this->read_select = Array("test_request_s.*");		
			$this->read_select_extended=Array("test_request_s.*" , "visit_date");
			$this->read_join_extended=Array(
						
							
						Array(
							"1"=>"visit_s" , 
							"2"=>"visit_s.visit_id = test_request_s.test_request_visit_id",
							"3"=>"left"),
							);							

			$this->list_join = $this->read_join_extended ;
			$this->list_items_where["single_visit"] = array("visit_id"=>"test_request_s.test_request_visit_id" );
			
			$this->list_edit_Col = 1 ; 
			//$this->list_items_order["single_visit"] = array("check_up_value_id"=>"asc");
			//$this->list_items_where["all"] = array(); 
			//$this->list_items_where["fullname"] = array(); 
			
				
	}

//////////////////////////////////////////////////////////////
	public function more_config_cols(rTable $irTable,$view_name="")
	{
		
			  
	}
	/* further configure single table row */ 
	public function more_config_row(rTableRow $itable_row,Array $data_row,$view_name)
	{
			
	}
		
	function typeahead_list($fieldname="",$search_value = "" , $and_where = array() ) 
        {
            $this_and_where = $and_where ; 
            $this_and_where []= "test_request_sys_account_id =  ".sysDATA("sys_account_id");  
            return parent::typeahead_list($fieldname,$search_value,$this_and_where);
        }
//----------------End OF The Class---------------------------------
}