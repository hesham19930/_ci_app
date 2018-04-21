<?php

	Class bi_account extends Simple_business implements iSimple_Business 
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
			"account_id"=>0,
			"account_name"=>"",
			"account_code"=>"", 
			"acc_account_type_code"=>"",
			"acc_remarks"=>"",
			"acc_address"=>0,
			"acc_telephone"=>"",
			"acc_contact_person"=>"",
			"acc_email"=>"",
			"acc_onhold"=>0,	
			"account_type_name"=>"",
			"account_type_sign"=>1 , 
				
			);
	}  

	
	// class configuration 
	public function bi_config()
	{
		
			$this->table_name="account_s";
			$this->id_field_name="account_id" ; 
			$this->name_field_name=r_langcase("account_name","account_name");
			
			$this->class_name="bi_account";		
			$this->concept_key="account." ; 
			
			$this->read_select = Array("account_s.*");
			$this->read_select_extended=Array("account_s.*","account_type_name","account_type_sign");
			$this->read_join_extended=Array(
					Array(
					"1"=>"account_type_s" , 
					"2"=>"account_type_s.account_type_code = account_s.acc_account_type_code",
					"3"=>"left")
					);
			
			$this->list_view_edit_icon["default"] = 1 ; 				
			// create array containing fields to show in the table , with listoption ="" 
			$this->list_views["default"] = Array (
				"account_id"=>r_langline("default.list.account_id",$this->concept_key) , 
				"account_name"=>r_langline("default.list.account_name",$this->concept_key),
				"account_code"=>r_langline("default.list.account_code",$this->concept_key),
				"acc_onhold"=>r_langline("default.list.acc_onhold",$this->concept_key),
				"acc_contact_person"=>r_langline("default.list.acc_contact_person",$this->concept_key),
				"acc_telephone"=>r_langline("default.list.acc_telephone",$this->concept_key),
				"acc_remarks"=>r_langline("default.list.acc_remarks",$this->concept_key),
			
				);
				
			$listname = "supplier" ; 
			$this->list_view_edit_icon[$listname] = 1 ; 				
			// create array containing fields to show in the table , with listoption ="" 
			$this->list_views[$listname] = Array (
				"account_id"=>r_langline("exepense.list.account_id",$this->concept_key) , 
				"account_name"=>r_langline("supplier.list.account_name",$this->concept_key),
				"account_code"=>r_langline("supplier.list.account_code",$this->concept_key),
				
				"acc_contact_person"=>r_langline("supplier.list.acc_contact_person",$this->concept_key),
				"acc_telephone"=>r_langline("supplier.list.acc_telephone",$this->concept_key),
				"acc_onhold"=>r_langline("supplier.list.acc_onhold",$this->concept_key),
				"acc_remarks"=>r_langline("supplier.list.acc_remarks",$this->concept_key),
			
				);
				
			$listname = "expense" ; 
			$this->list_view_edit_icon[$listname] = 1 ; 				
			// create array containing fields to show in the table , with listoption ="" 
			$this->list_views[$listname] = Array (
				"account_id"=>r_langline("expense.list.account_id",$this->concept_key) , 
				"account_name"=>r_langline("expense.list.account_name",$this->concept_key),
				"account_code"=>r_langline("expense.list.account_code",$this->concept_key),
				"acc_onhold"=>r_langline("expense.list.acc_onhold",$this->concept_key),
				"acc_remarks"=>r_langline("expense.list.acc_remarks",$this->concept_key),
			
				);
				
				
			$this->list_view_edit_icon["selector"] =0 ;	
			$this->list_views["selector"] = Array (
				"account_id"=>r_langline("default.list.account_id",$this->concept_key) , 
				"account_code"=>r_langline("default.list.account_code",$this->concept_key) , 
				"account_name"=>r_langline("default.list.account_name",$this->concept_key),
				
				);			
		
			$this->list_items_where_fixed["supplier_store"] = "( ( acc_account_type_code='supplier' )  or ( acc_account_type_code='client_supplier' )  or ( acc_account_type_code='store' ) )" ;
			$this->list_items_where_fixed["supplier"] = "( ( acc_account_type_code='supplier' )  or ( acc_account_type_code='client_supplier' )  )" ; 
			$this->list_items_where_fixed["supplier_client"] = "( ( acc_account_type_code='supplier' )  or ( acc_account_type_code='client_supplier' )  or ( acc_account_type_code='client' ) )" ; 
			$this->list_items_where_fixed["store"] = "(  acc_account_type_code='store'  )" ; 
			$this->list_items_where_fixed["store_outs"] = "( ( acc_account_type_code='store' or acc_account_type_code='taswia' or acc_account_type_code='stock_distroy' )  and ( account_id <> ". $this->admin_public->DATA["store_account_id"] ."))" ;
			$this->list_items_where_fixed["store_ins"] = "( ( acc_account_type_code='store' or acc_account_type_code='taswia' or acc_account_type_code='stock_distroy' )  and ( account_id <> ". $this->admin_public->DATA["store_account_id"] ."))" ;
			$this->list_items_where_fixed["store_io"] = "( ( acc_account_type_code='supplier' )  or ( acc_account_type_code='client_supplier' )  or ( acc_account_type_code='store' ) or (acc_account_type_code='taswia') or (acc_account_type_code='stock_distroy'))" ;
			$this->list_items_where_fixed["cashbox"] = " ( acc_account_type_code='safe' ) " ;
			$this->list_items_where_fixed["expenses"] = "(( acc_account_type_code = 'expense' ))" ; 	
				
	}
	
	public function read_balance_array($filters)
	{
		
		$balance = array() ; 
		$balance["from_date"] = $filters["from_date"] ; 
		$balance["to_date"] = $filters["to_date"] ;
		$balance["account_id"] =  $filters["account_id"] ;
		
		$balance["forward"] = 0 ;
		$balance["inflows"] = 0 ;  
		$balance["outflows"] = 0 ;
		$balance["current"] = 0 ;
		
		// you may make sure its read in extended mode 
		
		$this_sign = $this->business_data["account_type_sign"] ;  
		
		//echo "<h1>...".$this_sign."...</h1>" ; 
	    $this->db->select("(SELECT IFNULL(SUM(finance_detail_s.fd_amount),0)  FROM finance_detail_s WHERE ( fd_account_id = ".$this->ID()." )  and ( finance_detail_s.fd_trans_date < '" . $filters["from_date"] . "' ))   AS balance ", FALSE); 
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
    			$balance["forward"] = $row->balance  ;
    			if ($balance["forward"] <> 0 ) $balance["forward"] = $balance["forward"] * $this_sign ;  
			}		
		
	    $this->db->select("(SELECT IFNULL(SUM(finance_detail_s.fd_amount),0)  FROM finance_detail_s WHERE  ( fd_account_id = ".$this->ID()." )  and ( finance_detail_s.fd_amount >= 0 ) AND ( finance_detail_s.fd_trans_date  between '" . $filters["from_date"] . "' AND '" . $filters["to_date"]. "' ) )   AS balance ", FALSE); 
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				$this_balance = $row->balance  ; 
				$balance["inflows"] = $this_balance ;
				
			}		

	   $this->db->select("(SELECT IFNULL(SUM(finance_detail_s.fd_amount),0)  FROM finance_detail_s WHERE  ( fd_account_id = ".$this->ID()." )  and ( finance_detail_s.fd_amount < 0 ) AND ( finance_detail_s.fd_trans_date  between '" . $filters["from_date"] . "' AND '" . $filters["to_date"]. "' ) )   AS balance ", FALSE); 
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
				
    			$this_balance = $row->balance  ; 
				$balance["outflows"] = - $this_balance ;
    		}	
			
		if ($this_sign < 0 )
		{
				$balance["outflows"] = $balance["inflows"] ; 
				$balance["inflows"] = - $this_balance ; 
				
		}
	
		 $this->db->select("(SELECT IFNULL(SUM(finance_detail_s.fd_amount),0)  FROM finance_detail_s WHERE ( fd_account_id = ".$this->ID()." )  and ( finance_detail_s.fd_trans_date <= '" . $filters["to_date"] . "' ))  AS balance ", FALSE); 
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
    			$balance["current"] = $row->balance * $this_sign ; 
			}	
		
		$this->db->select("(SELECT IFNULL(SUM(finance_detail_s.fd_amount),0)  FROM finance_detail_s  WHERE ( fd_account_id = ".$this->ID()." ))  AS balance ", FALSE); 
		$query = $this->db->get();
		foreach ($query->result() as $row)
			{
    			$balance["final_current"] = $row->balance * $this_sign ; 
			}	
			
		return $balance ; 
		
	}

	
		
}
/* END OF CLASS * Started By Anwar APR 14/2013 */ 
