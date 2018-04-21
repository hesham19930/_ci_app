<?php

Class bi_evaluation extends Simple_business implements iSimple_Business 
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
			"evaluation_id"=>0,
			"evaluation_eval_form_id"=>"",
			"evaluation_date"=>"",
			"evaluation_company_id"=>"",
			"evaluation_person_id"=>"",
			"evaluation_person"=>"",
			
			"evaluation_conclusion"=>"",
			"person_name"=>"",
			"evaluation_patient_id"=>"",
			"patient_name"=>"" ,
			"company_name"=>"",
			"evaluation_form_id"=>"",
			"evaluation_sys_account_id"=>sysDATA("sys_account_id") , 
			"evaluation_form_name"=>"" ,
			);
			
		
		
		  
	}  

//-------------------------------------------------
	// class configuration 

	public function bi_config()
	{
			$CI =& get_instance();
			$lang = $CI->admin_public->DATA["system_lang"] ; 
			$CI->lang->load("clinic/evaluation_main",$lang);
		
		//create the class stamp -------------------------------------------
		
			$this->class_name="bi_evaluation";
			$this->table_name="evaluation_s";
			
			$this->concept_key="evaluation." ; 
			
			$this->id_field_name="evaluation_id" ; 

			$this->name_field_name=r_langcase("evaluation_id","evaluation_id");
			$this->name_field_name="evaluation_id" ;
				 
			$this->list_title = r_langline(".list_title",$this->concept_key);
			$this->editing_title = r_langline(".editing_title",$this->concept_key); 
			$this->creating_title = r_langline(".creating_title",$this->concept_key);
			
			// create array containing fields to show in the table , with listoption =""
		 
			$this->list_view_edit_icon["default"] = 1 ; 				
			/// create array containing fields to show in the table , with listoption ="" 
		
		
			$this->list_views["default"] = Array (
				"evaluation_id"=>"|hide|", 
				
				
				
				"evaluation_date"=>r_langline("default.list.evaluation_date",$this->concept_key),
				"company_name"=>r_langline("default.list.company_name",$this->concept_key),
			
			//	"evaluation_conclusion"=>r_langline("default.list.evaluation_conclusion",$this->concept_key),
			     "evaluation_patient_id"=>"#",
				"patient_name"=>r_langline("default.list.patient_name",$this->concept_key) ,
				"evaluation_form_name"=>r_langline("default.list.evaluation_form_name",$this->concept_key),
				"evaluation_person"=>r_langline("default.list.person_name",$this->concept_key) ,
				
	
				);

			
		//---------------------------------------------------------- ---------------------------
			// to be used in reading simple & exteded Modes 
			$this->read_select = Array("evaluation_s.*");		
			$this->read_select_extended=Array("evaluation_s.*" , "patient_name","evaluation_form_name","company_name");
			$this->read_join_extended=Array(
								
						Array(
							"1"=>"patient_s" , 
							"2"=>"patient_s.patient_id = evaluation_s.evaluation_patient_id",
							"3"=>"left"),
							Array(
								"1"=>"evaluation_form_s" , 
								"2"=>"evaluation_form_s.evaluation_form_id = evaluation_s.evaluation_eval_form_id",
								"3"=>"left"),
							
									Array(
										"1"=>"company_s" , 
										"2"=>"company_s.company_id = evaluation_s.evaluation_company_id",
										"3"=>"left")

							);



							
			$this->list_join = $this->read_join_extended ;
			
			$this->list_edit_Col =2 ; 
			

        $this->list_items_where["evaluation_report"] = array() ; 
		
			$this->list_items_where["all"] = array();  
			$this->list_items_where["single_patient"] = array("patient_id"=>"evaluation_s.evaluation_patient_id" ) ;				
	}


    function list_items_extension($db,$use_list,$filter_data)
        {
        
            if ($use_list=="evaluation_report")
            {
                
                
                if ($filter_data["patient_number"]!="")  /// number 
                {
                             $where = "evaluation_s.evaluation_patient_id = ".$filter_data["patient_number"];
                             $this->db->where($where,NULL, FALSE);   
                            return true ;
                }
                else 
                {        
                            if ($filter_data["patient_name"]!="") // name 
                            {
                            $where = " patient_name like '%".$filter_data["patient_name"]."%'
                                        and patient_s.patient_sys_account_id  = " . $this->admin_public->DATA["sys_account_id"] . " "  ;        
                            $this->db->where($where,NULL, FALSE);       
                            
                            }

                         if (($filter_data["first_date"]!="")   AND ($filter_data["second_date"]!="")  )          
                            {
                            $where = "( evaluation_s.evaluation_date BETWEEN  '".$filter_data["first_date"]."' AND '".$filter_data["second_date"]."')";
                            $this->db->where($where,NULL, FALSE);   
                            }  
                            else
                            {
                                    if ($filter_data["first_date"]!="")
                                    {          
                                    $where = " evaluation_s.evaluation_date = '".$filter_data["first_date"]."' " ;  
                                    $this->db->where($where,NULL, FALSE); 
                                    }    
                            }
                            
                        if ($filter_data["form_id"]!="")
                        {
                        $where = "evaluation_s.evaluation_eval_form_id =".$filter_data["form_id"];
                                        
                        $this->db->where($where,NULL, FALSE);       
                        
                        }   
                
                        if ($filter_data["person_name"]!="")
                        {
                        $where = " evaluation_person like '%".$filter_data["person_name"]."%'
                                    " ;     
                        $this->db->where($where,NULL, FALSE);       
                        
                        }
                
                /*if ( ($filter_data["1"] =="") && ($filter_data["2"] ==""))
                {
                    echo "nothing foundddd";
                    
                
                }*/
                return true;    
            }
            }
            
        return false ;
            
            
            
            
        }   
    
    public function get_evaluation_fields ($evaluation_form_id , $evaluationl_id )
    {
                
             //   echo "FORM:".$evaluation_form_id ; 
        $qry = "SELECT * FROM eval_field_s 
                            WHERE eval_field_form_id  = '$evaluation_form_id' ";
        $qry = $qry . " order by  eval_field_order" ; 
                        
        $data = $this->db->query($qry);
        $result = $data->result_array();
        
   //   echo "<pre>"; print_r($result) ; echo "</pre>" ;  

        if(count($result) >0 )
        {
            
            $i = 0 ;    
            
            foreach ($result as  $value) {
                    
                 $result[$i]["evdata_value_number"] = "" ; 
                 $result[$i]["evdata_value_date"] = "" ; 
                 $result[$i]["evdata_value_string"] = "" ; 
                 
                 if ($evaluationl_id != 0 )
                    {   
                
                     $fieldname = $value["eval_field_name"] ; 
                     
                     if ($is_income == true)
                      {
                      $qry = "SELECT * FROM evaluation_data_s 
                            WHERE evdata_evaluation_id = " . $evaluationl_id .  " and eval_field_name = '$fieldname'" ;
                      }
                      
                   
                             
                     $data = $this->db->query($qry);
                     $details = $data->result_array();
                     if(count($details) >0 ) {
                        $result[$i]["evdata_value_number"] = $details[0]["evdata_value_number"] ; 
                        $result[$i]["evdata_value_date"] = $details[0]["evdata_value_date"] ; 
                        $result[$i]["evdata_value_string"] = $details[0]["evdata_value_string"] ;
                        
                        if ($result[$i]["eval_field_type_id"]==5 )
                        {
                            $ClassName = $result[$i]["efld_lookup_class_name"] ; 
                             $CI =& get_instance();
                             
                            $CI->load->model("clinic/data/".$ClassName);
                            $newObject = new $ClassName;
                            $calcvalue  = $newObject->get_name($result[$i]["evdata_value_number"]  ) ; 
                            $result[$i]["evdata_value_string"]  = $calcvalue   ; 
                        }
                        // update text to reflect look ups 
                        
                        }
                       
                    }
                    
                    
                    
                    
                     ++$i ;
                          
            }   
            
            
            
            return $result;
                        
        }
        
        else
            
        return false ; 
    }   

    public function get_service_descriptor_type ($serviceid , $fieldname)
       {
        $qry = "SELECT SD_FIELD_TYPE_ID FROM T_SERVICE_DESCRIPTOR_S
                            WHERE T_SERVICE_DESCRIPTOR_S.SD_SERVICE_ID = '$serviceid' AND FIELD_NAME = '$fieldname'";
        $data = $this->db->query($qry);
        $result = $data->result_array();
        return $result ; 
       }

//----------------End OF The Class---------------------------------
}