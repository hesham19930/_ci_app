<?php

	Class bi_eval_field extends Simple_business implements iSimple_Business 
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
			"eval_field_id"=>0,
			"eval_field_form_id"=>0,
			"eval_field_name"=>"",
			"eval_field_text"=>"",
			"eval_field_order"=>0 , 
			"efld_print_order"=>0 , 
			"eval_field_type_id"=>0 , 
			"eval_field_forumula"=>"" , 
			"efld_default_value"=>"" , 
			"efld_lookup_class_name"=> "" ,	
			"efld_is_hidden"=>0 , 
			"efld_is_totalamount_field"=>0 , 
			"eval_field_text_arabic"=>"",
			"efld_is_obligatory"=>0 , 
			"efld_hide_in_print"=>0 , 
			"efld_field_width"=>0 , 
			"efld_field_format"=>"" , 
			"efld_lookup_class_filter"=>"" , 
			"efld_is_unit_price_field"=>0 , 
			"efld_is_quanitity_field"=>0 , 
			"efld_is_units_field"=>0 , 
			"efld_options"=>"",
			"field_type_name"=>0,
			
			
			
			);
	}  

	
	// class configuration 
	public function bi_config()
	{
		
		$CI =& get_instance();
		$lang = $CI->admin_public->DATA["system_lang"] ; 
		$CI->lang->load("business/ar_main",$lang);
	
	//create the class stamp -------------------------------------------
	
		$this->class_name="bi_eval_field";
		$this->table_name="eval_field_s";
		
		$this->concept_key="eval_field." ; 
		
		$this->id_field_name="eval_field_id" ; 
		$this->name_field_name="eval_field_name";
			 
		$this->list_title = r_langline(".list_title",$this->concept_key);
		
		// create array containing fields to show in the table , with listoption =""
	 
		$this->list_view_edit_icon["default"] = 1 ; 				
		// create array containing fields to show in the table , with listoption ="" 
		$this->list_views["default"] = Array (
			"eval_field_id"=>r_langline("default.list.eval_field_id",$this->concept_key) , 
			"eval_field_name"=>r_langline("default.list.eval_field_name",$this->concept_key),
			"eval_field_text"=>r_langline("default.list.eval_field_text",$this->concept_key),
			"field_type_name"=>r_langline("default.list.field_type_name",$this->concept_key),
			"eval_field_order"=>r_langline("default.list.eval_field_order",$this->concept_key),
			"efld_options"=>r_langline("default.list.efld_options",$this->concept_key),
			"efld_lookup_class_name"=>r_langline("default.list.efld_lookup_class_name",$this->concept_key),
						);
			
			$this->list_items_where["list_search"] = Array("search"=>"") ;  
		    $this->list_items_order["list_search"]=array("item_s.item_code"=>"asc") ; 
	 
			
			$this->list_view_edit_icon["selector"] =0 ;	
			$this->list_views["selector"] = Array (
				"eval_field_id"=>r_langline("default.list.eval_field_id",$this->concept_key) , 
				"eval_field_name"=>r_langline("default.list.eval_field_name",$this->concept_key),
				
				);
		 
		
			
		// ------ --------------------------------------------------- ---------------------------
			// to be used in reading simple & exteded Modes 
			$this->read_select = Array("eval_field_s.*");	
			$this->read_select_extended=Array("eval_field_s.*" ,  
			                                   "evaluation_form_name" , "field_type_s.field_type_name");
			                                  
			                                 
			$this->read_join_extended=Array(
					Array(
					"1"=>"evaluation_form_s" ,
					"2"=>"evaluation_form_s.evaluation_form_id = eval_field_s.eval_field_form_id" ,
					"3"=>"left") , 
					
					Array(
					"1"=>"field_type_s" ,
					"2"=>"field_type_s.field_type_id =eval_field_s.eval_field_type_id" ,
					"3"=>"left") 
					) ; 
						
					
		
			$this->list_join = $this->read_join_extended ;
			
		
			
			$this->list_edit_Col =2 ; 
			
			$this->list_items_where["all"] = array();
		
			//$this->agsums["xcalc_sumx_fullnumname"] = " patient_number ";
		//	$this->simple_list_override_sql["fullname"] = ' SELECT CONCAT_WS(" .: ",department_code,department_name)  as FULLNAME ,department_id   from department_s '; 
			$this->list_items_where["fullname"] = array(); 
			
			$this->list_items_where["by_eval_field_id"] = array("eval_field_form_id"=>"eval_field_s.eval_field_form_id" ) ;		                                           
			$this->list_items_order["by_eval_field_id"]=array("eval_field_s.eval_field_order"=>"asc") ; 
				
	}
	
	/* further configure table columns */
	/*public function more_config_cols(rTable $irTable,$view_name="")
		{
			//$irTable->Cols["is_unit_price_field"]->Type = rColumnType::ColTypeBoolean;
			//$irTable->Cols["is_totalamount_field"]->Type = rColumnType::ColTypeBoolean;
			
			//$irTable->Cols["is_quanitity_field"]->Type = rColumnType::ColTypeBoolean;
			//$irTable->Cols["is_units_field"]->Type = rColumnType::ColTypeBoolean;
			$irTable->Cols["efld_is_hidden"]->Type = rColumnType::ColTypeBoolean;
			
			//$itable_row->Cols["open_icon"]->Type = rColumnType::ColTypeImage ;    
		}	
		*/
	/* further configure single table row */ 
	public function more_config_row(rTableRow $itable_row,Array $data_row,$view_name)
		{
			$new_id_name = $this->id_field_name ;
			$this_id = $data_row[$new_id_name] ;  	
			//$itable_row->Cells["open_icon"]->URL = site_url('records/patient_file/master/'.$this_id) ;		
			//$itable_row->Cells["open_icon"]->Value='<button class="pull-right"><li class="icon-file" style="color:green;"></li></button>' ; 
		}
		
    

 public function update_post_process($new_record_flag,$post_read)
		{
			if ($post_read!=true)
			{
				
			}
			if ($post_read===true)
			{
		
			}
	}		
		
public function delete_pre_process()
	{
		
			return true;
	}
	
public function get_all_department_descriptors ($department_id , $detail_id , $is_income )
    {
    			
		$qry = "SELECT * FROM Eval_field_S
							WHERE Eval_field_S.eval_field_form_ID = '$department_id' order by FIELD_ORDER";
		$data = $this->db->query($qry);
		$result = $data->result_array();

		if(count($result) >0 )
		{
			
			$i = 0 ; 	
			
			foreach ($result as  $value) 
			{
			     	
				 $result[$i]["Tdd_FIELD_VALUE_NUMBER"] = "" ; 
                 $result[$i]["Tdd_FIELD_VALUE_DATE"] = "" ; 
				 $result[$i]["Tdd_FIELD_VALUE_STRING"] = "" ; 
				 
				 if ($detail_id != 0 )
				 {	
				
			         $fieldname = $value["Tdd_FIELD_NAME"] ; 
			         
			         if ($is_income == true)
			          {
			          $qry = "SELECT * FROM Eval_field_S LEFT JOIN T_INCOME_DETAIL_S
			                ON Eval_field_S.Tdd_INCOME_DETAIL_ID = T_INCOME_DETAIL_S.T_INCOME_DETAIL_ID
			                WHERE Tdd_INCOME_DETAIL_ID = " . $detail_id .  " and Tdd_FIELD_NAME = '$fieldname'" ;
					  }
					  
					 if ($is_income == false)
			          {
			          $qry = "SELECT * FROM Eval_field_S  LEFT JOIN T_COST_DETAIL_S
			                ON Eval_field_S.Tdd_COST_DETAIL_ID = T_COST_DETAIL_S.T_COST_DETAIL_ID
			                WHERE Tdd_COST_DETAIL_ID = " . $detail_id .  " and Tdd_FIELD_NAME = '$fieldname'" ;
					  } 
					  		 
			         $data = $this->db->query($qry);
			         $details = $data->result_array();
					 if(count($details) >0 ) 
					 {
						$result[$i]["Tdd_FIELD_VALUE_NUMBER"] = $details[0]["Tdd_FIELD_VALUE_NUMBER"] ; 
						$result[$i]["Tdd_FIELD_VALUE_DATE"] = $details[0]["Tdd_FIELD_VALUE_DATE"] ; 
						$result[$i]["Tdd_FIELD_VALUE_STRING"] = $details[0]["Tdd_FIELD_VALUE_STRING"] ;
					}
                       
				}
					
					 ++$i ;
						  
			}	
			
			
			
			return $result;
						
		}
		
		else
			
		return false ; 
    }	

    public function get_department_descriptor_type ($departmentid , $fieldname)
   {
	   	$qry = "SELECT 	eval_DD_FIELD_TYPE_ID FROM Eval_field_S
							WHERE Eval_field_S.eval_field_form_ID = '$departmentid' AND FIELD_NAME = '$fieldname'";
		$data = $this->db->query($qry);
		$result = $data->result_array();
		return $result ; 
   }


public function calc_total_formula($total_formula , $details_array , $department_id)
	{
		$y = $total_formula ;	
		$foundparam = false ; 
		
		                  
		while (strlen($y) > 1)
		{
		   if ($foundparam == true)
		   {
		       $dec = get_chr_position($y , ")") ; 
			   
			   if ($dec !==false) 
			   {  
				    $foundparam = false ; 
					$paramarray[] = substr ($y , 0 , $dec  ) ; 
					$y = substr ($y , $dec +1) ; 
				   
			   }
			   else {$y = "" ; }
		   }   
		   else 	     	 
		   {	
				$dec = get_chr_position($y , '(') ; 
				
				
				if ($dec === false) 
				{ 
					 $y = "" ;
				}
				else 
				{
				
					$y = substr ($y , $dec+ 1) ; 	
					$foundparam = true ; 
					
				}
		   }	
		}
						
												
		$xx = 1 ; 
		$yy = 1 ; 
		
		//print_r($paramarray) ; 
		
		
		foreach ($paramarray as $value)
		{
		  	
			$s = $value ; 
			$dec = strpos($s , "-") ;
			
			
			if ($dec===false) 
			{
			  	
			  $fieldtypearray = $this->get_department_descriptor_type($department_id  , trim($value)) ;	
			  
			  $tt = get_array_element_value($details_array , trim($value) , $department_id , $fieldtypearray) ; 	
			  $rr = $tt["value"] ; 
			  $xx = $xx * $rr ;
			  
			}	
			else
			{
              	
              $fistoperand 	= substr($s , 0 , $dec ) ; 
			  $secondoperand 	= substr($s , $dec + 1 ) ; 
			  
			  
			  $fieldtypearray = $this->get_department_descriptor_type($department_id  , trim($fistoperand)) ;	
			  	
				 
			  			 
              $tt = get_array_element_value($details_array , trim($fistoperand) , $department_id , $fieldtypearray) ;
			  
			  
			   
              $valfistoperand = $tt["value"] ; 
			  $firstoperandtype = $tt["type"] ; 
			  
			  $fieldtypearray = $this->get_department_descriptor_type($department_id  , trim($secondoperand)) ;
			  $tt = get_array_element_value($details_array , trim($secondoperand) , $department_id , $fieldtypearray) ; 
			  
			  
			  $valsecondoperand = $tt["value"] ; 
			  $secondoperandtype = $tt["type"] ; 
				  
				  
                  if ($firstoperandtype != $secondoperandtype)
				    {$yy = 1 ; }
				  else 
					{
					  $yy = calc_diff($firstoperandtype ,$valfistoperand , $valsecondoperand ) ;
					  if ($yy <=0)
					   {$yy = 1 ; }
				    
					}  
				
			}
               	
		}
			
		$incomearray["quantity"] = $yy ; 
		$incomearray["total"] = $yy * $xx ;
		 
		 
		return  $incomearray; 
						
	}
 
   
	
}
/* END OF CLASS * Started By Anwar APR 14/2013 */ 
