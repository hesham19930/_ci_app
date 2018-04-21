<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class dashboards extends Base_controller {


	
    function __construct()
	{
		parent::__construct();

        $this->concept  = "patient" ;
        $this->controller = "clinic/Dashboards";

        $this->class_name    = "bi_patient" ;
        $this->class_path =  "clinic/bi_patient" ;

        $this->view_folder = "clinic";
        $this->id_field  = "patient_id";

				$this->report_title  = r_langline('report_title',"patient.master.");

        $this->use_lang_files = array("clinic/patient_main") ;
        $this->security_component = "security.dashboard" ;
        $this->use_master = master_type::ReportAMaster ;

	}


	
public function index()
	{
		$this->master()  ; 
	}

	//_________________________________________________________________________________________________			
	// main public loader & rights validator 		


	public function assistant(){
			
		$access_component_name = $this->security_component ;
		$access_verb = "read" ;

		if (!$this->_top_function($access_component_name)) return ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;
		if ($this->admin_public->verify_access($access_verb,0) == false )
			{
				$data["access_component_name"] = $access_component_name ;
				$data["access_verb"] = $access_verb ;
				$this->load->view( 'clc_master/no_access_master',$data);		; // takes care of login / header loading
				return ;
			}

		
		$data["this_controller"] = $this->controller ;
		$data['this_concept'] = 'dashboard';
		$this->load->model("clinic/bi_patient") ; 
		$data["this_item"] = $this->bi_patient;
		$data["this_lang_file"] = "clinic/dashboard_main" ;
		
		// prepare array to fill the days with numbers 
		$today_date =date("Y-m-d");//today date
		$time = strtotime(date("Y-m-d"));
		
		$today = date('l',$time);//return the name of day
		
		$week_array = array("Saturday"=>1,"Sunday"=>2,"Monday"=>3,"Tuesday"=>4,
							"Wednesday"=>5,"Thursday"=>6,"Friday"=>7);
		
		$day_number = $week_array[$today];//return the number of the day
	
		
		$data["start_date"] = $today_date;
		$data["start_day_number"] = $day_number ;//number of the day

		
		//$data["max_per_day"] = 17 ;
			
 
		$new_day = new DateTime($today_date);
		$new_day->modify('+30 day');
		$new_day = $new_day->format('Y-m-d');//the next day of to_day

		$this->load->model("clinic/bi_visit");
		
		$reserv_array = $this->bi_visit->schedule_data($today_date,$new_day);
		
		$data["reservation"] = $reserv_array;	
					
		$this->load->view( 'clc_master/assistant_master',$data);
		
		//$this->load->view("clinic/assistant_master",$data);
	}
		
	public function doctor(){
			
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
		
		$data["this_controller"] = $this->controller ;
		$data["this_lang_file"] = "clinic/dashboard_main" ;
		$data['this_concept'] = 'dashboard';
		$data["this_item"] = $this->bi_patient;

		
		$this->load->view( $this->view_folder.'/'.'doctor_master',$data);
	
	}
		
	public function total_services()
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
			
			$account_id = $this->uri->segment(4) ; 
			
			$data["this_concept"] = $this->concept ; 
			$data["this_controller"] = $this->controller ; 
			$data["this_lang_file"] = "clinic/dashboard_main" ; 	

				
					$filter_data = array() ; 
		
					$filter_data["date"]= date("Y-m-d") ; 	
							 
				   // print_r($filter_data) ; 
				   
					$this->load->model("reports/bi_rep_total_services") ;
					$this_report =$this->bi_rep_total_services ;  
					 
					$this_report->set_filters( $filter_data) ;
					 
		//			print_r ($filter_data) ;
					$data["list_table"] = $this_report->run_to_list("") ; 
					
					
					$data["table_purpose"] ="" ; 
					
					$data["this_concept"] = $this->concept ; 
					$data["this_controller"] = "clinic/visit_service_s" ; 
					$data["this_id_field"] = "visit_service_id" ; 
					
					$data["this_name_field"] = "visit_service_id" ; 
					$data["this_name_field_ar"] = "visit_service_id" ;
								
				//	$data["this_lang_folder"] = $this->lang_folder	;
				
					$data["options"]["hide_add_button"] = true ; 
					$data["options"]["disable_line_add"] = true ; 
					$data["options"]["disable_line_edit"] = true ; 
					$data["options"]["disable_line_delete"] = true ;
					$data["options"]["hide_line_verbs"] = false ; 
					$data["options"]["disable_datatable"] = true ; 
					$data["options"]["line_verbs_colors"] = true ; 
					$data["options"]["line_verbs_buttons"] = true ; 
					
					if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
					$template_folder = "_templates/".$this->template_name."/" ;  
					$this->load->helper($this->theme_helper)	;
					
					//$data["total_cols"] = array("debit"=>"sum","credit"=>"sum") ; 
					$this->load->view( '_general/concept_table_aj',$data);
					
					
					
					
					//}
						
				return;
			}

			
}

	