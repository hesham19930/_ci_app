<?php

	
Class bi_sys_account extends Simple_business implements iSimple_Business 
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
		$this->business_data  = Array (
			
			"sys_account_id"=>0  ,
			"sys_account_name"=>""  ,//login clinic-name account (not user-name) ex: m 
			"sys_acc_type"=>"Clinic", //clinic
			"sys_account_title"=>"",//the original name of clinic
			"sys_acc_is_active"=>0 ,//deactivate without delete data
			"sys_acc_admin_email"=>"" ,	//email			
			"sys_acc_remarks"=>"" , 
			"sys_acc_message"=>"" , 
			"sys_acc_enable_logo"=>0 ,
			"sys_acc_date_created"=>0,//automatic
			"sys_account_title_ar"=>"",//the original name of clinic in arabic

			"sys_acc_store_account_id"=>"" , 	
			"sys_acc_cash_account_id"=>"" , 
			"is_purchasing_store_inactive"=>"" , 
			"is_distubution_store_inactive"=>"" , 
			"is_pos_inactive"=>"" , 
			"is_client_sales_inactive"=>"" , 
			"sys_acc_date"=>"" , 
			"sys_acc_date_in_pos"=>"" , 
			"sys_acc_date_in_cashbox"=>"" ,
			
			"sys_acc_dep_id"=>0 ,
			"department_name"=>"" , 
			
			);
				
	}  
	
		// class configuration 
	public function bi_config()
	{




		
			//$CI =& get_instance();
			//$lang = $CI->admin_public->DATA["system_lang"] ; 
			//$CI->lang->load("business/sys_account_main",$lang);
		
			//create the class stamp -------------------------------------------
		
			$this->class_name="bi_sys_account";
			$this->table_name="a_sys_accounts";
			
			$this->concept_key="sys_account." ; 
			
			$this->id_field_name="sys_account_id" ; 
		
			//if ($this->admin_public->DATA["calc_item_fullname_location"]=="itm") 
			//{
				//$this->name_field_name="item_item_full_name";
				//$this->list_box_fields=array("item_item_full_name","item_name_alternate") ; 
			//}
			//else {
				$this->name_field_name=r_langcase("sys_account_name","sys_account_name");
			//}	 
			$this->list_title = r_langline(".list_title",$this->concept_key);
			$this->editing_title = r_langline(".editing_title",$this->concept_key); 
			$this->creating_title = r_langline(".creating_title",$this->concept_key);
			
			$this->controller_name="";	
			$this->new_method_name = ""  ;
			$this->edit_method_name = "" ; 
			$this->list_method_name = "" ;	
			
		 
			$this->list_view_edit_icon["default"] = 1 ; 				
			// create array containing fields to show in the table , with listoption ="" 
			$this->list_views["default"] = Array (
				
				"sys_account_id"=>r_langline("default.list.sys_account_id",$this->concept_key) , 
				"sys_account_name"=>r_langline("default.list.sys_account_name",$this->concept_key) , 
				"sys_account_title"=>r_langline("default.list.sys_account_title",$this->concept_key) ,
				"sys_acc_admin_email"=>r_langline("default.list.sys_acc_admin_email",$this->concept_key) ,
				"sys_acc_is_active"=>r_langline("default.list.sys_acc_is_active",$this->concept_key) ,
				
				"department_name"=>r_langline("default.list.department_name",$this->concept_key) ,
				
				"sys_acc_type"=>"|hide|",
				"sys_acc_remarks"=>"|hide|",
				"sys_acc_message"=>"|hide|",
				"sys_acc_enable_logo"=>r_langline("default.list.sys_acc_enable_logo",$this->concept_key) ,
				"sys_acc_date_created"=>r_langline("default.list.sys_acc_date_created",$this->concept_key) ,
				"sys_account_title_ar"=>r_langline("default.list.sys_account_title_ar",$this->concept_key) ,
				
				);
		 	
			/*$this->list_view_edit_icon["selector"] =0 ;	
			
			$this->list_views["selector"] = Array (
				"sys_account_id"=>r_langline("default.list.sys_account_id",$this->concept_key) , 
				"sys_account_name"=>r_langline("default.list.sys_account_name",$this->concept_key),				
				);*/
				
			
		// ------ --------------------------------------------------- ---------------------------
			// to be used in reading simple & exteded Modes 
			$this->read_select = Array("a_sys_accounts.*");
			$this->read_select_extended=Array("a_sys_accounts.*" , "department_name");
			$this->read_join_extended=Array(										
								Array(
								"1"=>"department_s", //selectr from
								"2"=>"department_s.department_id = a_sys_accounts.sys_acc_dep_id", //where
								"3"=>"left"),
								);
			
			$this->list_join = $this->read_join_extended ;
			
			$this->list_edit_Col =1 ; 
			
			$this->list_items_where["master_acc_filter"] = array() ; 
            $this->list_items_where_fixed["no_master"] = "  ( a_sys_accounts.sys_acc_type='Clinic' )"  ; 
			
	}
	
public function list_items_extension($db,$use_list,$filter_data)
	{
		
		if ($use_list=="master_acc_filter")
		{

			$where = " a_sys_accounts.sys_acc_type != 'Master'";		
			$this->db->where($where,NULL, FALSE);		
			
			return true;	
		}
		return false;
	}	
		/* further configure table columns */
	public function more_config_cols(rTable $irTable,$view_name="")
		{
			$irTable->Cols["sys_acc_is_active"]->Type = rColumnType::ColTypeBoolean;
			$irTable->Cols["sys_acc_enable_logo"]->Type = rColumnType::ColTypeBoolean;  
		}	
		
		
	/* further configure single table row */ 
	public function more_config_row(rTableRow $itable_row,Array $data_row,$view_name)
		{
			
			//$itable_row->Cells["edit_icon"]->URL = site_url('admin/account/edit/'.$data_row[$this->id_field_name]) ; 
			
		}
		 	
	//_______________________________________________________________________ More Functionality 
	
	public function logo_file()
		{
			
				$logo_file="logos/LOGO".$this->ID().".png" ;
				return $logo_file ; 
				/*
				$logo_file="" ; 
				$this->db->where('account_name', $account_name);
				$query = $this->db->get('a_accounts');
				if($query->num_rows == 0) return 0;
				foreach ($query->result() as $row)
				{
    				$account_id = $row->account_id;
					$logo_file="logos/LOGO".$account_id.".png" ; 
				}
				
				return $logo_file;  
				*/
		}
	


}
/* END OF  class */ 