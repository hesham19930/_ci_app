<?php

Class bi_history_line extends Simple_business implements iSimple_Business 
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
			"history_line_id"=>0,
			"hl_patient_id"=>"",
			"history_line"=>"",			
			"patient_name"=>"",
			"hl_sys_account_id"=>sysDATA("sys_account_id") , 
			"hl_prefix"=>"",
			"hl_color"=>"",
			);
	}  

//-------------------------------------------------
	// class configuration 

	public function bi_config()
	{
			$CI =& get_instance();
			$lang = $CI->admin_public->DATA["system_lang"] ; 
			$CI->lang->load("clinic/history_line_main",$lang);
		
		//create the class stamp -------------------------------------------
		
			$this->class_name="bi_history_line";
			$this->table_name="history_line_s";
			
			$this->concept_key="history_line." ; 
			
			$this->id_field_name="history_line_id" ; 
			
			$this->name_field_name=r_langcase("history_line","history_line");
			$this->name_field_name="history_line" ;
				 
			$this->list_title = r_langline(".list_title",$this->concept_key);
			$this->editing_title = r_langline(".editing_title",$this->concept_key); 
			$this->creating_title = r_langline(".creating_title",$this->concept_key);
			
			// create array containing fields to show in the table , with listoption =""
		 
			$this->list_view_edit_icon["default"] = 1 ; 				
			// create array containing fields to show in the table , with listoption ="" 
			$this->list_views["default"] = Array (
				"history_line_id"=>"|hide|", 
				
				"patient_name"=>"|hide|",
				
				"history_line"=>r_langline("default.list.history_line",$this->concept_key),
				"_DETAILS"=>"|hide|",
				
				
				);
                
                $this->list_views["compact"] = Array (
                "history_line_id"=>"|hide|", 
                
                "hl_prefix"=>"Info",
                
				"history_line"=>r_langline("default.list.history_line",$this->concept_key),
				"h1_color"=>r_langline("default.list.hl_color",$this->concept_key),
                
                );
                

			
		//---------------------------------------------------------- ---------------------------
			// to be used in reading simple & exteded Modes 
			$this->read_select = Array("history_line_s.*");		
			$this->read_select_extended=Array("history_line_s.*" , "patient_name");
			$this->read_join_extended=Array(
								
						Array(
							"1"=>"patient_s" , 
							"2"=>"patient_s.patient_id = history_line_s.hl_patient_id",
							"3"=>"left"),
							);

			$this->list_join = $this->read_join_extended ;
			
			$this->list_edit_Col =2 ; 
			
			//$this->list_items_where["all"] = array();  
			$this->list_items_where["single_patient"] = array("patient_id"=>"history_line_s.hl_patient_id" ) ;				
	}

	function typeahead_list($fieldname="",$search_value = "" , $and_where = array() ) 
        {
            $this_and_where = $and_where ; 
            $this_and_where []= "hl_sys_account_id =  ".sysDATA("sys_account_id");  
            return parent::typeahead_list($fieldname,$search_value,$this_and_where);
        }
//----------------End OF The Class---------------------------------
}