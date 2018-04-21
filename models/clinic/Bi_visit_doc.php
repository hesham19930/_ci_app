<?php

	Class bi_visit extends Simple_business implements iSimple_Business 
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
			"visit_id"=>0,
			"visit_date"=>"",
			"visit_complain"=>"",
			
			"visit_v_status_id"=>"1", // apointment 
			
			"visit_diagnosis"=>"",
			"visit_sys_account_id"=>0 ,
			"sys_account_name"=>"" ,
			"visit_patient_id"=>0 ,
			
			"visit_status_name"=>"" ,
			"visit_status_name_ar"=>"" ,
			"patient_name"=>"" ,
			 "XCALCX_SUMX_1"=>"",
			);
	}  

	// class configuration 
	public function bi_config()
	{
		
		$CI =& get_instance();
		$lang = $CI->admin_public->DATA["system_lang"] ; 
		$CI->lang->load("clinic/visit_main",$lang);
	
		//create the class stamp -------------------------------------------
	
		$this->class_name="bi_visit";
		$this->table_name="visit_s";
		
		$this->concept_key="visit."; 
		
		$this->id_field_name="visit_id" ; 
		
		$this->name_field_name=r_langcase("visit_date","visit_date");

			 
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
			"visit_id"=>"|hide|",
			
			"patient_name"=>r_langline("default.list.patient_name",$this->concept_key) ,
			"visit_date"=>r_langline("default.list.visit_date",$this->concept_key) ,
			//"visit_complain"=>r_langline("default.list.visit_complain",$this->concept_key), 
			"visit_diagnosis"=>r_langline("default.list.visit_diagnosis",$this->concept_key),
			
			"status_button"=>"|hide|",
			"visit_status_name"=>r_langline("default.list.visit_status_name",$this->concept_key),
			"_DETAILS"=>"|hide|",
				
			);
	 	
		//----------------------------------to show or hide some columns --------------------------
			 
		$this->list_view_edit_icon["patient_visits"] = 1 ; 				
		// create array containing fields to show in the table , with listoption ="" 
		$this->list_views["patient_visits"] = Array (
			"visit_id"=>"|hide|",
			
			"patient_name"=>"|hide|",
			"visit_date"=>r_langline("default.list.visit_date",$this->concept_key), 
		//	"visit_complain"=>r_langline("default.list.visit_complain",$this->concept_key), 
			"visit_diagnosis"=>r_langline("default.list.visit_diagnosis",$this->concept_key),
			"visit_status_name"=>"|hide|",
			//"visit_services"=>"Services" ,
			//"visit_amount"=>"Amount",
			"status_button"=>"|hide|",
			"XCALCX_SUMX_1"=>"|hide|" , 
			"_DETAILS"=>"|hide|",
				
			);
			
		$this->list_view_edit_icon["day_visits"] = 1 ;               
        // create array containing fields to show in the table , with listoption ="" 
        $this->list_views["day_visits"] = Array (
            "visit_id"=>"|hide|",
            "patient_name"=>r_langline("default.list.patient_name",$this->concept_key),
            "visit_date"=>r_langline("default.list.visit_date",$this->concept_key) ,
            "visit_complain"=>"|hide|", 
            "visit_diagnosis"=>"|hide|",
           r_langcase("visit_status_name","visit_status_name_ar")=>r_langline("default.list.visit_status_name",$this->concept_key),
            "visit_services"=>"|hide|",
            "visit_amount"=>"|hide|",
            "status_button"=>r_langline("default.list.status_button",$this->concept_key) ,
            "_DETAILS"=>"|hide|",
                
            );
            
            
            
			
           $this->list_view_edit_icon["patient_appointments"] = 1 ;    
           $this->list_views["patient_appointments"] = Array (
           "visit_id"=>"|hide|",
            
            "patient_name"=>"|hide|",
            "visit_date"=>r_langline("default.list.visit_date",$this->concept_key), 
            "visit_complain"=>"|hide|",
            "visit_diagnosis"=>"|hide|",
            "visit_status_name"=>r_langline("default.list.visit_status_name",$this->concept_key),
            "status_button"=>"|hide|",
            "_DETAILS"=>"|hide|",
                
            );
            
	 	
	 	
	// ------ --------------------------------------------------- ---------------------------
		// to be used in reading simple & exteded Modes 
		$this->read_select = Array("visit_s.*");
		
		$this->read_select_extended=Array("visit_s.*","patient_name","sys_account_name" ,
											"visit_status_name" , "visit_status_name_ar");
		$this->read_join_extended=Array(
				Array(
				"1"=>"patient_s" , 
				"2"=>"visit_s.visit_patient_id = patient_s.patient_id",
				"3"=>"left"),
				
				Array(
				"1"=>"a_sys_accounts" , 
				"2"=>"visit_s.visit_sys_account_id = a_sys_accounts.sys_account_id",
				"3"=>"left"),
				
				Array(
				"1"=>"visit_status_s" , 
				"2"=>"visit_s.visit_v_status_id = visit_status_s.visit_status_id",
				"3"=>"left"),
				
				);
				
		$this->list_join = $this->read_join_extended ;
		
		$this->list_edit_Col =1 ; 
		
		$this->list_items_where["single_patient"] = array("patient_id"=>"visit_s.visit_patient_id" ) ;	
		$this->list_items_where["single_date"] = array() ;
		$this->list_items_where["arrived_visit"] = array() ; 
		$this->list_items_where["checked_visit"] = array() ;
        $this->list_items_where["visits_custom_list"] = array() ;  //  1 patient 2 status 3 date 
        $this->list_items_where["visit_report"] = array() ; 
        
      // $this->agsums["XCALCX_SUMX_1"] = " ( select visit_breif_1 (  visit_id  ) )   ";
	   $this->agsums["XCALCX_SUMX_1"] = " ( select visit_id  )   ";
        
		
	}
	public function list_items_extension($db,$use_list,$filter_data)
	{
		
		if ($use_list=="visit_report")
		{
				
			if ($filter_data["1"]!="")
			{
			$where = " patient_name like '%".$filter_data["1"]."%'
						and patient_s.patient_sys_account_id = " . $this->admin_public->DATA["sys_account_id"] . " "  ;		
			$this->db->where($where,NULL, FALSE);		
			
			}
			
			if ($filter_data["2"]!="")
			{
			$where = " visit_s.visit_date = '".$filter_data["2"]."
						'and visit_s.visit_sys_account_id = " . $this->admin_public->DATA["sys_account_id"] . " "  ;	
			$this->db->where($where,NULL, FALSE);		
			
			}		
			
			 $where = " visit_s.visit_v_status_id =  3 " ; 
                   
            $this->db->where($where,NULL, FALSE);       
            
			
			return true;	
		}
		
		if ($use_list=="single_date")
		{
			$where = " visit_s.visit_date = '".$filter_data["1"]."'
					wwwwwwand visit_s.visit_sys_account_id = " . $this->admin_public->DATA["sys_account_id"] . " "  ;		
			$this->db->where($where,NULL, FALSE);		
			return true;		
		}
		
		if ($use_list=="arrived_visit")
		{
			$where = " visit_s.visit_date = '".$filter_data["1"]."' and visit_v_status_id = 2 
						sssssssand visit_s.visit_sys_account_id = " . $this->admin_public->DATA["sys_account_id"] . " "  ; // 2 = Arrived		
			$this->db->where($where,NULL, FALSE);		
			return true;		
		}
		
		if ($use_list=="checked_visit")
		{
			$where = " visit_s.visit_patient_id = '".$filter_data["1"]."' and visit_s.visit_v_status_id = 3 
						and visit_s.visit_sys_account_id = " . $this->admin_public->DATA["sys_account_id"] . " "  ; // 3 = checked in		
			$this->db->where($where,NULL, FALSE);		
			return true;		
		}
        
        if ($use_list=="visits_custom_list")
        {
           // print_r($filter_data) ; 
            if ($filter_data[1]!="")
            {
            	//patient_visits and appointments tab in patient page
            $where = " visit_s.visit_patient_id = ".$filter_data["1"]."
					"  ;        
            $this->db->where($where,NULL, FALSE);       
           
            }
            if ($filter_data[2]=="checked_in")
            {
            $where = " visit_s.visit_v_status_id = 3 
					and visit_s.visit_sys_account_id = " . $this->admin_public->DATA["sys_account_id"] . " "  ;  // 3 = checked in
            $this->db->where($where,NULL, FALSE);       
           
            }
            if ($filter_data[2]=="appointments")
            {
            $where = " visit_s.visit_v_status_id = 1 
					and visit_s.visit_sys_account_id = " . $this->admin_public->DATA["sys_account_id"] . " "  ; //1=appoint
            $this->db->where($where,NULL, FALSE);       
            
            }
            
            if ($filter_data[2]=="arrivals")
            {
            $where = " visit_s.visit_v_status_id = 2 
					and visit_s.visit_sys_account_id = " . $this->admin_public->DATA["sys_account_id"] . " "  ; //2=arrived   
            $this->db->where($where,NULL, FALSE);       
            
            }
            
            
            if ($filter_data[3]!="")
            {
            $where = " visit_s.visit_date = '".$filter_data[3]."
					'and visit_s.visit_sys_account_id = " . $this->admin_public->DATA["sys_account_id"] . " "  ;       
            $this->db->where($where,NULL, FALSE);       
  
            }

        }
		
		return false ; 
		
	}	 
	/* further configure table columns */

		public function more_config_cols(rTable $irTable,$view_name="")
	{
			//$this->get_max("drug_active");
			//$irTable->Cols["drug_available"]->Type = rColumnType::ColTypeBoolean;
			  
	}
	/* further configure single table row */ 

		public function more_config_row(rTableRow $itable_row,Array $data_row,$view_name)
	{
		$visit_id = $data_row[$this->id_field_name] ; 	
		
		if ($data_row["visit_v_status_id"]!=1)
        {
		 $itable_row->Cells["visit_date"]->Value  = "<a href='".site_url('clinic/patients/info/0/')."/".$data_row['visit_id']."'>".$itable_row->Cells["visit_date"]->Value  ."</a>" ;
        }
        if($view_name == "patient_visits" )
        {
             $itable_row->Cells["_DETAILS"]->Value = $data_row["XCALCX_SUMX_1"] ; 
        }
		if($view_name == "day_visits" )
		{
				
             if ($data_row["visit_v_status_id"] == 1)//1=appointment
             {		
				$itable_row->Cells["status_button"]->Value = '
						<div
							class="btn green ajax_action"
							caller_verb="change_status"
						    caller_id="change_status_button"
						    caller_url= "'.site_url('clinic/visits/change_status/'.$visit_id.'/arrived').'"
						    caller_target="" 
						>
						'.r_langline("arrived_button","visit.master.").'
						
						</div>
						
						<div
							class="btn green ajax_action"
							caller_verb="change_status_to_checked"
						    caller_id="change_status_button_to_checked"
						    caller_url= "'.site_url('clinic/visits/info/'.$visit_id.'/checked/').'"
						    caller_target="" 
						> 
						
						'.r_langline("checked_button","visit.master.").' 
						
						</div>
				' ;
				
			
             }
			 elseif ($data_row["visit_v_status_id"] == 2)//2=arrived
             {
			 	$itable_row->Cells["status_button"]->Value = '
						<div
							class="btn green ajax_action"
							caller_verb="change_status_to_checked"
						    caller_id="change_status_button_to_checked"
						    caller_url= "'.site_url('clinic/visits/info/'.$visit_id.'/checked/').'"
						    caller_target="" 
						> 
						
						'.r_langline("checked_button","visit.master.").'  
						
						</div>
				' ;
			 }
			 
			 
        }		
				
      //  $itable_row->Cells["_DETAILS"]->Value =  "something" ; 
	}	

	function schedule_data($today,$month)
	{	
		$query = "select visit_date , count(visit_id) as num_visits 
		
				  from visit_s
				  where visit_date >= '$today' and visit_date <= '$month'
				  and  visit_sys_account_id = " . $this->admin_public->DATA["sys_account_id"] . " 
				  
				  group by visit_date
		";
		
		$data = $this->db->query($query);
		$result = $data->result_array();
		$schedule[] = array();
		
		foreach($result as $row )
		{
			$visit_date = $row["visit_date"];
			$visit_number = $row["num_visits"];
			
			$schedule[$visit_date] = $visit_number;
		}
	//echo">>>>>>>>>>>";
	//print_r($schedual);
		return $schedule;
	}	

	function typeahead_list($fieldname="",$search_value = "" , $and_where = array() ) 
        {
            $this_and_where = $and_where ; 
            $this_and_where []= "visit_sys_account_id =  ".sysDATA("sys_account_id");  
            return parent::typeahead_list($fieldname,$search_value,$this_and_where);
        }

}
/* END OF CLASS * Started By Anwar APR 14/2013 */ 
