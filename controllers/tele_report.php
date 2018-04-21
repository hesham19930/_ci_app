<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tele_report  extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	
	}
	
	public $template_name ; 
	public $theme_helper;
	
	public $concept  = "_" ; 
	public $controller = "reports/tele_report";  	
		
	public $lang_folder = "trans" ; 
		
	public $class_name    = "bi_fin_trans" ; 
	public $class_path =  "trans/bi_fin_trans" ; 
 
 	public $view_folder = "transactions"; 
	public $id_field  = "finance_trans_id"; 
	
	
	
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
		$this->load->model($this->class_path); 
		$this->load->model("data/bi_account") ; 
		$this->load->model("data/bi_person") ;
		$this->load->model("data/bi_item") ;
		$this->load->model("data/bi_brand") ;
		$this->load->model("data/bi_item_type") ;
			 
		$this->load->model("trans/bi_strans_main") ;
		$this->load->model("lookup/bi_store_trans_type") ; 
		
		return true;
		 
	}	
		
	
	
		//_________________________________________________________________________________________________
	public function master($purpose="")
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
		$data["this_id_field"] = $this->id_field ; 

		$data["this_report_title"] = "تقرير التليفونات " ; 
				
		$this->load->view( 'reports/a_report_main',$data);	
		
		
	}
	
	public function for_gard()
	{
		
		$this->master("for_gard") ; 
		
				
		
	}	
	//_________________________________________________________________________________________________	
	public function find_form($purpose="")
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
		$this_item = & $this->bi_strans_main; 
		$this_item->clear();
		
	
		$incoming_id = $this->uri->segment(4, 0);
	 	 
		if ($incoming_id !=0) {
			$this_item->Read($incoming_id,"",1);
			if (!$this_item->is_published )
			{
				//redirect with error not found object  
			}
			
		}
	 
		//setting the validation rules ,, 
		echo $purpose ; 
		$this->form_validation->set_rules("is_an_action","Invoice ", "required") ;
	//	$this->form_validation->set_rules("for_season_id","Invoice ", "required") ;
		$this->form_validation->set_rules("to_date","Invoice ", "required") ;
		$this->form_validation->set_rules("from_date","Invoice ", "required") ;
			
		$data["this_concept"] = $this->concept ; 
		$data["this_controller"] = $this->controller ; 	
	
		$data["this_lang_folder"] = $this->lang_folder	;
		$data["this_lang_file"] = "store_balance";
		$this->lang->load($this->lang_folder.'/'.'fin_trans_main', $this->admin_public->DATA["system_lang"]);
		
		
		$data["enable_store_selection"] = true ; 
		$data["enable_todate_selection"] = true ;
		$data["enable_fromdate_selection"] = true ;
		$data["enable_season_selection"] = true ;
		$data["enable_item_selection"] = false ;
		$data["enable_autotable_selection"] = true ;
		$data["enable_short_selection"] = false ;
		$data["enable_supplier_selection"] = false ;
		$data["enable_gard_prepare"] = false ;
	
		//print_r($this_item->business_data) ; 
		if ($this->form_validation->run() == FALSE )
		{
			$data["this_item"] = $this_item ; 			
			$data["public_data"] = $this->admin_public->DATA;
			$data["disable_edit"] = false;
					
			$template_folder = "_templates/".$this->template_name."/" ;  
			$this->load->helper($this->theme_helper)	;
										
			$this->load->view( 'reports/item_filters_form',$data);	
			return ; 
		} 
		
		else 
		{
			
			//		$this->load->view( 'reports/item_filters_form',$data);	
			
				$filter_data = array() ; 
			//	print_r($this->input->post());
				
				if ($this->input->post("account_id")) {
			    		 $filter_data["account_id"]=$this->input->post("account_id") ; }		 
			    		 
				if ($this->input->post("for_season_id")) {
			    		 $filter_data["season_id"]=$this->input->post("for_season_id") ; }	
				
	    		if ($this->input->post("to_date")) {
			    		 $filter_data["to_date"]=$this->input->post("to_date") ; }			 
				
				if ($this->input->post("from_date")) {
			    		 $filter_data["from_date"]=$this->input->post("from_date") ; }			 
			
			//print_r($filter_data);
				$view_name = "" ; 
			
			//	print_r($this->input->post()	);
				$this->load->model("reports/bi_rep_telephone_totals") ; 
				$this->bi_rep_telephone_totals->set_filters($filter_data) ; 
			//	print_r($this->bi_rep_sales_totals_main->filters) ; 
				//$these_results = $this->bi_report_store_balance->run() ; 
				//print_r($these_results); 
				//print_r ($filter_data) ; 
			
				$data["list_table"] =  $this->bi_rep_telephone_totals->run_to_list($view_name) ; 
				$data["table_purpose"] ="" ; 
				
				$data["this_concept"] = $this->concept ; 
				$data["this_controller"] = $this->controller ; 
				$data["this_id_field"] = "ACCOUNT_ID" ; 
				
				$data["this_name_field"] = "item_brand_name" ; 
				$data["this_name_field_ar"] = "item_brand_name" ;
							
				$data["this_lang_folder"] = $this->lang_folder	;
			
				$data["options"]["hide_add_button"] = true ; 
				$data["options"]["disable_line_add"] = true ; 
				$data["options"]["disable_line_edit"] = true ; 
				$data["options"]["disable_line_delete"] = true ;
				$data["options"]["hide_line_verbs"] = false ; 
				if (!$this->input->post("autotable")) { $data["options"]["disable_datatable"] = true ; }
				
				$data["options"]["line_verbs_colors"] = true ; 
				$data["options"]["line_verbs_buttons"] = true ; 
		
				$data["options"]["enable_open_button"] = false ; 
				$data["options"]["open_url_suffix"] = site_url("reports/batch_card/index/")   ; 
				$data["options"]["open_url_field"] = "ACCOUNT_ID" ; 

		    	if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
				$template_folder = "_templates/".$this->template_name."/" ;  
				$this->load->helper($this->theme_helper)	;
	
			//	$this_item = $this->bi_account ; 
			//	$this_item->read( $filter_data["account_id"],"",1) ; 
				$data["total_cols"] = array("TOTAL_COST"=>"sum",
									"TOTAL"=>"sum",
									"DISCOUNT"=>"sum",
									"SALES"=>"sum",
									"IRETURN"=>"sum",
									"NETSALES"=>"sum",
								
									
									) ; 
		      $this->load->view( '_general/concept_table_aj',$data);
				echo "<a msg=record_update_success /></a><ID></ID>" ; 
				
				}
					
			return;
		}
		
	//_________________________________________________________________________________________________

}


/* end of file */ 
