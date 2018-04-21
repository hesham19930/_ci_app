<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sql extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	
	}
	
	public $template_name ; 
	public $theme_helper;
	
	public $concept  = "" ; 
	public $controller = "util/sql";  	
		
	
	
	
	public function index()
	{
		$this->master()  ; 
	}

	//_________________________________________________________________________________________________			
	// main public loader & rights validator 		
	public function _top_function($component_code)
	{
	
		$this->my_output->nocache(); 		
		$this->load->model("admin/admin_public") ; 	
		// start with the public items always 
		
		
		$this->lang->load("config/config",$this->admin_public->DATA["system_lang"]) ;
	
		if ($this->template_name=="") $this->template_name=r_langline("admin_template_name");
		if ($this->theme_helper=="") $this->theme_helper = r_langline("admin_template_helper"); 
		  
		$this->load->helper($this->theme_helper)	;    		
		$this->admin_public->DATA["template_folder"] =  "_templates/".$this->template_name."/" ;	
		
		if (!$this->admin_public->load($component_code)) return false;  
		 
		// needed in all the controllers functions,  
		// loaded any way ..............$this->load->model("admin/bi_user");
			
		return true;
		 
	}	
		
	//_________________________________________________________________________________________________
	
	
	public function master()
	{
				
		$access_component_name = "security.general" ; 
		$access_verb="read" ;
		
		if (!$this->_top_function($access_component_name)) return ; 
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;  			
		if ($this->admin_public->verify_access("read",0) == false ) 
			{
				$data["access_component_name"] = $access_component_name ; 
				$data["access_verb"] = $access_verb ; 					
				$this->load->view( '_general/general/invalid_rights_message',$data);		; // takes care of login / header loading 
			}
	
		
	
		
		$data["public_data"] = $this->admin_public->DATA;
		$data["store_trans_id"] = $this->uri->segment(4, 0); 
		
		$data["this_concept"] = $this->concept ; 
		$data["this_controller"] = $this->controller ; 
		
		$data["this_report_title"] = "RUNSQL" ; 
				
		$this->load->view( 'reports/a_report_main',$data);	
		
		
	}
	//_________________________________________________________________________________________________	
	public function find_form()
	{
		
		
		$access_component_name = "security.general" ; 
		$access_verb="read" ;
		
		if (!$this->_top_function($access_component_name)) return ; 
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;  			
		if ($this->admin_public->verify_access("read",0) == false ) 
			{
				$data["access_component_name"] = $access_component_name ; 
				$data["access_verb"] = $access_verb ; 					
				$this->load->view( '_general/general/invalid_rights_message',$data);		; // takes care of login / header loading 
			}
		
		
		
		$this->load->library("form_validation");
	
		
		// load & read Existing object  ----------------------------------------------------
	
	
		$incoming_id = $this->uri->segment(4, 0);
	 	 
	 
		//setting the validation rules ,, 
		$this->form_validation->set_rules("is_an_action","Invoice ", "required") ;
		
		//$this->form_validation->set_rules("st_person_id","Invoice ", "required") ;
		
		
		$data["this_controller"] = $this->controller ; 	
	
		$data["enable_store_selection"] = true ; 
		$data["enable_todate_selection"] = true ;
		$data["enable_fromdate_selection"] = true ;
		$data["enable_season_selection"] = true ;
		$data["enable_season_selection"] = true ;
		$data["enable_transtype_selection"] = true ;
		$data["transtype_filter"] = "sales" ;
		$data["enable_item_selection"] = true ;
		$data["enable_autotable_selection"] = true ;
		$data["enable_short_selection"] = true ;
		$data["enable_supplier_selection"] = false ;
		$data["enable_go_selection"] = true ;
		$data["enable_telephone_selection"] = true ;
			
		//print_r($this_item->business_data) ; 
		if ($this->form_validation->run() == FALSE )
		{
			
							 
				
			$data["public_data"] = $this->admin_public->DATA;
			$data["disable_edit"] = false;
					
					
			$template_folder = "_templates/".$this->template_name."/" ;  
			$this->load->helper($this->theme_helper)	;
										
			$this->load->view( 'reports/sql_form',$data);	
			return ; 
		} 
		
		else 
		{
			
				$sql = $this->input->post("sql") ; 					
				if (!$this->input->post("autotable")) { $data["options"]["disable_datatable"] = true ; }
				 			
					echo "<table width=100% border=1 ><tr><td>".  strtoupper($sql)."</td></tr></table><br/><br/>";	
				
				try
				{ 
				
						$query = $this->db->query($sql);
			
						$newtable = new rTable();
						if (strpos("_".strtolower($sql), "select")==0)
						{
							echo  "<hr/>OK" ; 
						}
				       else 
						{
						
				
						$fld_list = $query->list_fields() ; 
						
						foreach ($fld_list as $value)
							{
							 
							$newtable->Addcol($value,$value,rColumnType::ColTypeText,30) ;				 	
							}
							
						foreach ( $query->result_array() as $row )
							{
					
							$NewRow = rTableRow::CreateNew($newtable);
							foreach ($fld_list as $value){
								$NewRow->Cells[$value]->Value = $row[$value] ;
							//	echo "ROW:".$row[$value] ; 
							
							}
							}
						}
						$main_data["this_table"] = $newtable;   
					}
					catch (Exception $e) {
						
						echo "<table><tr><td>".  $e->getMessage() ."</td></tr></table>";	
						echo "<a msg='FINE: OK :'></a>"."<a msg=record_update_success /></a>" ; 
						return ; 
					}	
		
					
				
					 
				$data["list_table"] =  $newtable; //   $this_item->list_items_rtable( "sales_details_report",$filter_data,1,"sales_details",$row_limit);
			
				$data["table_purpose"] ="" ; 
				
				
				$data["this_controller"] = $this->controller ; 
				 
				$data["this_id_field"] = "" ; 
				
				$data["this_name_field"] = "_" ; 
				$data["this_name_field_ar"] = "_" ;
			
				$data["options"]["hide_add_button"] = true ; 
				$data["options"]["disable_line_add"] = true ; 
				$data["options"]["disable_line_edit"] = true ; 
				$data["options"]["disable_line_delete"] = true ;
				$data["options"]["hide_line_verbs"] = true ; 
				
				$data["options"]["line_verbs_colors"] = true ; 
		
			
				if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
				$template_folder = "_templates/".$this->template_name."/" ;  
				$this->load->helper($this->theme_helper)	;
		

				//$this->load->view( 'browsers/find_trans_table_aj',$data);
				$this->load->view( '_general/concept_table_aj',$data);	
				echo "<a msg='FINE: OK :'></a>"."<a msg=record_update_success /></a>" ; 
					return ; 	
			}
			
			
				//}
					
			return;
		}
	
		
}


/* end of file */ 
