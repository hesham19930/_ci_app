<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class vital_sign_value_s extends Base_Controller {
	
	
function __construct()
    {   
        parent::__construct();
    
        $this->concept  = "vital_sign_value" ; 
        $this->controller = "clinic/vital_sign_value_s";    
        
        $this->class_name    = "bi_vital_sign_value" ; 
        $this->class_path =  "clinic/bi_vital_sign_value" ; 
 
        $this->view_folder = "clinic"; 
        $this->id_field  = "vital_sign_value_id"; 
        
        $this->use_lang_files = array("clinic/vital_sign_value_main") ; 
        $this->security_component = "security.general" ; 
        $this->use_master = master_type::TableMaster ; 
        
        
        
    }

	//_________________________________________________________________________________________________	
	public function ajax_edit()
	{
		$access_component_name = $this->security_component ; 
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
		$this->load->model('clinic/bi_visit');
		$this->load->model('clinic/bi_vital_sign');
		
		
		// load & read Existing object  ----------------------------------------------------
		$this_item = & $this->main_class; 
		$this_item->clear();

		$incoming_id = $this->uri->segment(4, 0);
	 
		if ($incoming_id !=0) {
			$this_item->Read($incoming_id,"",1);
			if (!$this_item->is_published )
			{
				//redirect with error not found object  
			}
		}else{
			$visit_id = $this->uri->segment(5, 0); //
		}

		//setting the validation rules ,, 

		$this->form_validation->set_rules("vsv_value","value", "required") ;
	
		if ($this->form_validation->run() == FALSE )
		{					 
			$data["this_item"] = $this_item ; 			
			$data["public_data"] = $this->admin_public->DATA;
			$data["disable_edit"] = false;
					
			$template_folder = "_templates/".$this->template_name."/" ;  
			$this->load->helper($this->theme_helper)	;
			
			if($incoming_id == 0 ){
				$this_item->business_data['vsv_visit_id'] = $visit_id;
			}
		
			$this->load->view( 'clc_edit/vital_sign_value_edit',$data);	
			return ; 
		}else{	
			if ($this_item->ID()==0){
				 if ($this->admin_public->verify_access("new",0) == false ) return ;
			}else{
				 if ($this->admin_public->verify_access("edit",0) == false ) return ; 
			}
				$this_item->business_data["date_created"] =  date('Y-m-d H:i:s');
		}
			// ---------------------------------------------------------------------------------------------
			// this assumes that you only expose business_data from editing or filling 						/
			// you may require the input->post manually if you have additional fields , that_ 				/
			// are not in the data base or the business data 												/
			// ---------------------------------------------------------------------------------------------
				
			// just a quick fix for boolean // should find a long term solution
		
					foreach ($this_item->business_data as $key => $value) {
							if (key_exists($key, $this->input->post())) // if ($this->input->post($key))
							{ 
								$this_item->business_data[$key] =$this->input->post($key);  	
							}
					}
			// ---------------------------------------------------------------------------------------------
					
					$this_item->validate();
				
					if ($this_item->success==FALSE)
					{
						$data["this_item"] = $this_item ; 			
						$data["public_data"] = $this->admin_public->DATA;
						$data["disable_edit"] = false;						
						$this->load->view( $this->view_folder.'/'.'vital_sign_value_edit',$data);	 
						echo "<center><b>".$this_item->error_message."</b></center>" ; 
							
					}
					else
					{
						$this_item->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
						$this_item->update();
						echo "FINE: OK :"."<a msg=record_update_success /><ID>".$this_item->ID()."</ID>" ; 
					}
			return;
		}
		
	
	//_________________________________________________________________________________________________
	public function ajax_table($purpose="" , $show_box = 'no')
	{
		$access_component_name =$this->security_component; 
		if (!$this->_top_function($access_component_name,'yes')) return ; 
		
		$access_verb="read" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;  	
				
		if ($this->admin_public->verify_access($access_verb,0) == false ) 
		{
			$data["access_component_name"] = $access_component_name ; 
			$data["access_verb"] = $access_verb ;							
			$this->load->view( '_general/general/invalid_rights_message',$data);		; // takes care of login / header loading
			return ; 
				
		}
			
		$this_item = & $this->main_class; 
		
		$visit_id = $this->uri->segment(4, 0); 
		
		if($visit_id == ""){
				$data["list_table"] = $this_item->list_items_rtable( "all",array() ,"");		
				$data["options"]["hide_add_button"] = false ; 
				$data["options"]["disable_line_add"] = true ; 
				$data["options"]["disable_line_edit"] = false ; 
				$data["options"]["disable_line_delete"] = false ;
				$data["options"]["hide_line_verbs"] = false ; 
				$data["options"]["disable_datatable"] = false ; 
				$data["options"]["line_verbs_colors"] = true ; 
				$data["options"]["line_verbs_buttons"] = true ; 
		}else{
				$data["list_table"] = $this_item->list_items_rtable( "single_visit",array("visit_id"=>$visit_id) ,"");
				
			 	$data["options"]["hide_add_button"] = true ; 
				$data["options"]["disable_line_add"] = true ; 
				$data["options"]["disable_line_edit"] = false ; 
				$data["options"]["disable_line_delete"] = false ;
				//$data["options"]["hide_line_verbs"] = false ; 
				$data["options"]["disable_datatable"] = true ; 
				$data["options"]["line_verbs_colors"] = true ; 
				$data["options"]["line_verbs_buttons"] = true ; 
				//$data["show_box_title"] = "Vital Signs Values";	
		}
		
		
		$data["this_concept"] = $this->concept ; 
		$data["this_controller"] = $this->controller ; 
		$data["this_id_field"] = $this_item->id_field_name ; 
		
		$data["this_name_field"] = "vital_sign_value_id" ;
		
    
        $this->view_data = $data ; 
        
        return parent::ajax_table();     
	}

	//_________________________________________________________________________________________________


}
/* end of file */ 