<?php

Class bi_rep_total_services extends simple_report  
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
				$this->use_sql = true ; 
				
				$this->select_sql = "" . 
						" SELECT 
						     visit_service_s.*,service_name,sum(service_cost) as cost ,count(vs_visit_id) as service_count
								
 							 from visit_service_s
                             inner join service_s
                             on visit_service_s.vs_service_id = service_s.service_id 
                             inner join visit_s
                             on visit_service_s.vs_visit_id = visit_s.visit_id
                             
							 where ( visit_date = '(@date)' )
							  
							 group by vs_service_id		
						
						" ;  
    				 
				$this->columns = array (
				
					"visit_service_id"=>"|hide|",
					"service_name"=>"Service Name",
					"service_count"=>"Count",
					"cost"=>"Cost",
					
					"_DETAILS"=>"|hide|" ,
					
				) ; 
				
				
						
				$this->column_prefix = array (	);	
						
				$this->table_name = ""	;
				$this->join_list= Array();
					
				
				$this->filters = Array(
					"date"=>"!XX!" ,
					
				);
				
				
				$this->filter_prefix = Array();
				
				$this->row_keys = Array("visit_service_id");
				
				$this->list_edit_Col = 2 ;
				
				$this->order_by = Array(
					"visit_service_id"=>"asc" , 
			 
					) ;    			
		}
	
		//_________________________________________________________________________________________
		function Clear()
		{
			
		}

		/* further configure table columns */     
		public function more_config_cols(rTable $irTable,$view_name ="")
			{
			
		
			}	
			
		/* further configure single table row */ 
		public function more_config_row(rTableRow $itable_row,Array $data_row)
			{
			
			}

		function read_sql_segment($segment_key)
		{
			
		}
	}
	
/* 	end of report code */ 