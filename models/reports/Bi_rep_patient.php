<?php

Class bi_rep_patient extends simple_report  
	{
			
		/* Important Class Behavior Definition -- THIS MAY NOT BE EDITED */ 
		function __construct() {
		  		$this->rep_config(); 			
				// setup all variables 
				$this->Clear();
		}
		
		//_________________________________________________________________________________________
		function rep_config()
		{
			     
			 $this->concept_key="patient." ;
			 $this->use_sql = true ; 
				
			 $this->select_sql = "" . 
						"  
						      SELECT 
    						     patient_s.* , company_name ,
    						     ( 
    						     select Concat_WS (' ' , visit_date , visit_type_name)  
    						     from visit_s 
    						     inner join visit_type_s on visit_s.visit_visit_type_id = visit_type_s.visit_type_id 
    						     where visit_s.visit_v_status_id = 3 
    						     and visit_patient_id = patient_id order by visit_date desc limit 1 ) visit_date  
    						     	
     							 from patient_s
     							 left outer join company_s on 
     							 patient_s.patient_company_id = company_s.company_id 
     							 
    							 where  
    							 patient_sys_account_id = " . $this->admin_public->DATA["sys_account_id"] . "   
							 
					           (@_sqlsegment_name_all_filter) "; 
                               
               $this->id_field_name="patient_id"   ;
                     
    			//visit_s.visit_v_status = 3  = checked in	 
				$this->columns = array (
				
					"patient_id"=>"#",
					"patient_name"=>r_langline("default.list.patient_name",$this->concept_key) ,
					"patient_phone"=>r_langline("default.list.patient_phone",$this->concept_key) ,
					
					"company_name"=>r_langline("default.list.company_name",$this->concept_key) ,
					"patient_address"=>r_langline("default.list.patient_address",$this->concept_key) ,
					
					"visit_date"=>r_langline("default.list.visit_date",$this->concept_key) ,
					"appointement"=>r_langline("default.list.appointement",$this->concept_key) ,
					
					"_DETAILS"=>"|hide|" ,
					
				) 	; 
						
				$this->column_prefix = array (	);	
						
				$this->table_name = ""	;
				$this->join_list= Array();
				
				$this->filters = Array(
					"patient_name"=>"!XX!" ,
					  "patient_phone"=>"!XX!" ,
                      "patient_sex"=>"!XX!" ,
					  "patient_birth_date"=>"!XX!" ,
					  "patient_company_id"=>"!XX!" ,
					  "patient_id"=>"!XX!" ,
				);
				
				   $this->sql_segments["sqlsegment_name_all_filter"] = "!XX!" ;
				$this->filter_prefix = Array();
				
				$this->row_keys = Array("patient_id");
				
				$this->list_edit_Col = 2 ;
				
				$this->order_by = Array(
					"patient_id"=>"asc" , 
			 
					) ;    			
		}
	
		//_________________________________________________________________________________________
		function Clear()
		{
			
		}

		/* further configure table columns */     
		function more_config_cols(rTable $irTable,$view_name="")
		
			{
				    
		
			}	
			
		/* /further configure single table row */ 
		function more_config_row(rTableRow $itable_row,Array $data_row)
			{
				

			$itable_row->Cells["patient_name"]->Value  = "<a href='".site_url('clinic/patients/info/')."/".$data_row['patient_id']."'>".$itable_row->Cells["patient_name"]->Value  ."</a>" ;
			$patient_id = $data_row[$this->id_field_name] ; 
			$itable_row->Cells["appointement"]->Value = '
			<div 
				class="btn green ajax_action"
				caller_verb="Click"
				caller_id="visit_appo"
				caller_url= "'.site_url('clinic/visits/appointment/0/'.$patient_id).'"
				caller_target="" 
			>
			'.r_langline("appointment_button","patient.master.").'
			
			</div>
			
			
	' ;
			}

		function read_sql_segment($segment_key)
		{
		//    print_r($this->filters) ; 
		
            if ($segment_key=="sqlsegment_name_all_filter")
                {
                    if (  ($this->filters["patient_name"]!= "!XX!" ) AND  ($this->filters["patient_id"]!= "!XX!" ) AND  ($this->filters["patient_phone"]!= "!XX!"  )AND  ($this->filters["patient_sex"]!= "!XX!" AND  ($this->filters["patient_birth_date"]!= "!XX!"  )))  
                    {

                    return "AND (  patient_name like '%(@patient_name)%' or patient_company_id like '%(@patient_company_id)%' or patient_phone like '%(@patient_phone)%' or patient_sex = '(@patient_sex)'or patient_id = '(@patient_id)' or patient_birth_date = '(@patient_birth_date)'  ) " ;
                    } 

                    if (($this->filters["patient_name"]!= "!XX!" ))
                    {
              //              echo "2<br/>" ; 
                        return "AND (  patient_name like '%(@patient_name)%' ) " ;
                    }
                //       echo "ssssf";
                    if (($this->filters["patient_phone"]!= "!XX!" ))
                    {
                    //       echo "3<br/>" ; 
                        return "AND (  patient_phone like '%(@patient_phone)%' ) " ;
					} 
					if (($this->filters["patient_sex"]!= "!XX!" ))
                    {
                    //       echo "3<br/>" ; 
                        return "AND (  patient_sex = '(@patient_sex)' ) " ;
					}

					if (($this->filters["patient_id"]!= "!XX!" ))
                    {
                    //       echo "3<br/>" ; 
                        return "AND (  patient_id = '(@patient_id)' ) " ;
					}
					if (($this->filters["patient_birth_date"]!= "!XX!" ))
                    {
                    //       echo "3<br/>" ; 
                        return "AND (  patient_birth_date = '(@patient_birth_date)' ) " ;
					}   
					if (($this->filters["patient_company_id"]!= "!XX!" ))
                    {
              //              echo "2<br/>" ; 
                        return "AND (  patient_company_id like '%(@patient_company_id)%' ) " ;
					} 
					           
                }
          return " AND false " ;                
		}
	
	}
	
/* 	end of report code **/ 