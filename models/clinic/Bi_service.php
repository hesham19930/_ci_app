<?php

Class bi_service extends Simple_business implements iSimple_Business 
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
			"service_id"=>0,
			"service_name"=>"",
			"service_cost"=>"",

			"service_sys_account_id"=>0,
			"sys_account_name"=>"",
			);
	}  

//-------------------------------------------------
	// class configuration 

	public function bi_config()
	{
			$CI =& get_instance();
			$lang = $CI->admin_public->DATA["system_lang"] ; 
			$CI->lang->load("clinic/service_main",$lang);
		
		//create the class stamp -------------------------------------------
		
			$this->class_name="bi_service";
			$this->table_name="service_s";
			
			$this->concept_key="service." ; 
			
			$this->id_field_name="service_id" ; 
			
			$this->name_field_name=r_langcase("service_name","service_name_ar");
			$this->name_field_name="service_name" ;
				 
			$this->list_title = r_langline(".list_title",$this->concept_key);
			$this->editing_title = r_langline(".editing_title",$this->concept_key); 
			$this->creating_title = r_langline(".creating_title",$this->concept_key);
			
			// create array containing fields to show in the table , with listoption =""
		 
			$this->list_view_edit_icon["default"] = 1 ; 				
			// create array containing fields to show in the table , with listoption ="" 
			$this->list_views["default"] = Array (
				"service_id"=>r_langline("default.list.service_id",$this->concept_key) , 
				"service_name"=>r_langline("default.list.service_name",$this->concept_key),
				"service_cost"=>r_langline("default.list.service_cost",$this->concept_key),
				
				//"service_sys_account_id"=>"|hide|",
				"sys_account_name"=>r_langline("default.list.sys_account_name",$this->concept_key),
				
				);

			
		//---------------------------------------------------------- ---------------------------
			// to be used in reading simple & exteded Modes 
			$this->read_select = Array("service_s.*");		
			$this->read_select_extended=Array("service_s.*" , "sys_account_id" ,"sys_account_name");
			$this->read_join_extended=Array(
								Array(
								"1"=>"a_sys_accounts", //selectr from
								"2"=>"a_sys_accounts.sys_account_id = service_s.service_sys_account_id", //where
								"3"=>"left")
								);

			$this->list_join = $this->read_join_extended ;
			
			$this->list_edit_Col =2 ; 
			
			//$this->list_items_where["all"] = array(); 
			//$this->list_items_where["fullname"] = array(); 
			$this->list_items_where["single_acc"] = array("sys_account_id"=>"service_s.service_sys_account_id" );
			//$this->list_items_where_fixed["single_account"] = "( service_sys_account_id = sys_account_id  ) " ;
				
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
		$repeat_id =  $this->check_value_exist(array("service_name"=>$this->business_data["service_name"]),0,1) ;
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