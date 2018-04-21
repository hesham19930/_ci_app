<?php

	
Class Bi_user extends Simple_business implements iSimple_Business 
	{
	
		
	/* Important Class Behavior Definition -- THIS FUNCTION MUST BE EDITED */ 
	function __construct() {
	  	  	
	  		$this->bi_config(); 			
			// setup all variables 
			$this->Clear();
	}
	
	/* config & clear business_data  Array of the object */ 
	public function Clear(){
		// create array containing all data of the business object not including linked tables//
		$this->business_data  = Array (
			"user_id"=>0  ,
			"user_login"=>""  , //unique in one account(validation) //ex:hh
			"user_name"=>"", //the original name in system //ex: hesham
			"user_email"=>"" ,
			"user_pass"=>"?",
			"create_date"=>0,
			"create_user_id"=>0 , 
			"last_login"=>0 , //"later"
			"is_active"=>0,
			"date_created"=>"",
			"sys_account_name"=>"" ,			
			"sys_account_title" => "",
			"sys_account_title_ar" => "",
			"sys_acc_store_account_id"=> 0 , 
			"sys_acc_cash_account_id"=> 0 , 
			"sys_acc_type"=>"" ,
			
			
			"group_id"=>0,//lookup class //user_group_id	
			"group_name"=>"",			
			"group_code"=>"",					
			
			"modified_date"=>0 , //"later"		
			"user_person_id"=>"" ,
			"user_privileges" => "",//text						
			"user_sys_account_id"=>0,//lookup class -> sys_account
			//"is_active"=>"",

			);
				
	}  
	
	// class configuration 
	public function bi_config()
	{
		
		$CI =& get_instance();
		$lang = $CI->admin_public->DATA["system_lang"] ; 
		$CI->lang->load("business/user_main",$lang);
		
		//create the class stamp 
			$this->class_name="bi_user";
			$this->concept_key="user." ;
			$this->id_field_name="user_id" ; 
			$this->name_field_name="user_name";
			$this->table_name="a_users"; 
			$this->list_title = $CI->lang->line("list_title") ;
			                        $this->editing_title = "بيانات مستخدم" ; 
	                        		$this->creating_title = "مستخدم جديد";
			$this->controller_name="";	
			
			 
		// create array containing fields to show in the table , with listoption ="" 
			$this->list_views["default"] = Array (
				"user_id"=>r_langline("default.list.user_id",$this->concept_key) ,
				"user_name"=>r_langline("default.list.user_name",$this->concept_key) ,
				"user_login"=>r_langline("default.list.user_login",$this->concept_key) ,
				"user_privileges"=>"|hide|" ,
				"user_email"=>r_langline("default.list.user_email",$this->concept_key) ,
				"is_active"=>r_langline("default.list.is_active",$this->concept_key) ,
				
				"user_pass"=>r_langline("default.list.user_pass",$this->concept_key) ,
				"create_date"=>r_langline("default.list.create_date",$this->concept_key) ,		
				"modified_date"=>r_langline("default.list.modified_date",$this->concept_key) ,
				"last_login"=>r_langline("default.list.last_login",$this->concept_key) ,	
				"sys_account_name"=>r_langline("default.list.sys_account_name",$this->concept_key) ,
				"group_name"=>r_langline("default.list.group_name",$this->concept_key) ,
				);
		
			$this->list_view_edit_icon["default"] =2 ;
			 
		// ------ --------------------------------------------------- ---------------------------
			$this->read_select = Array("a_users.*");
			$this->read_select_extended=Array("a_users.*","sys_acc_store_account_id","sys_acc_cash_account_id",
												"sys_account_name","sys_account_title","sys_account_title_ar",
												"sys_acc_type","group_name","group_code");
			$this->read_join_extended=Array(
					Array(
					"1"=>"a_sys_accounts" , 
					"2"=>"a_sys_accounts.sys_account_id = a_users.user_sys_account_id",
					"3"=>"left"),
					Array(
					"1"=>"a_user_groups" , 
					"2"=>"a_user_groups.group_id = a_users.group_id",
					"3"=>"left")
					);
		
			$this->list_join = $this->read_join_extended ;
		
			
			$this->list_items_where["all"] = array(
								"BY_account_id"=>"a_users.user_sys_account_id"
								,"BY_user_login"=>"user_login"
								);
								
			$this->list_items_where["single_account"] = array() ; 	
			
			$this->list_items_where_fixed["group_name_filter"] = "( ( group_name='DOCTOR' )  or ( group_name='ASSISTANT' ) or ( group_name='EVALPERSON' )  )" ; 			
	
}
		
	public function list_items_extension($db,$use_list,$filter_data)
	{
		
		if ($use_list=="single_account")
		{
			$where = "a_users.user_sys_account_id = '".$filter_data["1"]."'";
					
			$this->db->where($where,NULL, FALSE);		
			return true;		
		}
	}	 
	
	/* further configure table columns */
	public function more_config_cols(rTable $irTable,$view_name="")
			{
			$irTable->Cols["is_active"]->Type = rColumnType::ColTypeBoolean;   
		}	
		
	/* further configure single table row */ 
	public function more_config_row(rTableRow $itable_row,Array $data_row,$view_name)
		{
			
			$itable_row->Cells["edit_icon"]->URL = site_url('admin/user/edit/'.$data_row[$this->id_field_name]) ; 
			
		}
		
	//_______________________________________________________________________ More Functionality 
	
	public function validate_login($user_name,$account_name,$password)
		{
				
			//echo $account_name ; 		
			if (($user_name =="")||($account_name==""||($password=="")))
				{
					echo "missing information " ; 
					return 0;  
				}
					
				
				$this->db->where('sys_account_name', $account_name);
				$query = $this->db->get('a_sys_accounts');
				$account_id = 0 ; 
				//if($query->num_rows == 0) return 0;
				foreach ($query->result() as $row)
				{
    				$account_id = $row->sys_account_id;
				}
			 
			 
			 //	echo "account_id".$account_id ; 
			//	echo "username".$user_name ; 
			//	$this->db->flush_cache();
			
			$this->db->where('user_sys_account_id', $account_id);
			$this->db->where('user_login', $user_name);
			$this->db->where('user_pass', $password);
			  $this->db->where('is_active', 1);
			
			//return $account_id; 
			$query = $this->db->get('a_users');
		  	 
		
			//echo $query->num_rows  ; 
			foreach ($query->result() as $row)
				{
					return $row->user_id;	  	
				}
			
			//ECHO "// if got here , some thing has to be wrong " ;  	
			return 0;		
		}
	
	public function validate()
	{
		//user_login
		
		$repeat_id =  $this->check_value_exist(array("user_login"=>$this->business_data["user_login"],
										"user_sys_account_id"=>$this->business_data["user_sys_account_id"]),0,1) ;
		
				
		if ($repeat_id !=0 )
			{  
				if (intval($repeat_id) != intval($this->ID()))
				{
					$this->error_message = "Name Aleady Exists .......... :) ";
					$this->success = FALSE  ;
					return ; 
				}
			}
			
		$this->success = TRUE ;
		return ; 
	}
}

/* END OF  class */ 