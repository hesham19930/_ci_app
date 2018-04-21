<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class app___ointment_schedual_s extends CI_Controller {


	public $template_name ; 
	public $theme_helper;
	
	public $concept  = "appointment_schedual" ; 
	public $controller = "clinic/appointment_schedual_s";  	
		
	public $class_name    = "bi_blood_group" ; 
	public $class_path =  "clinic/bi_blood_group" ; 
 
 	public $view_folder = "clinic"; 
	public $id_field  = "blood_group_id"; 

	
	function __construct()
	{
		parent::__construct();
	
	}
	
	public function index()
	{
		$this->master()  ; 
	}

	//_________________________________________________________________________________________________			
	// main public loader & rights validator 		
	public function _top_function($component_code,$second_time='no')
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
		return true;
		 
	}	

//---------------------------------------------------------------
	public function master()
	{
		
		//logging	
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
		$data["this_concept"] = "blood_group" ;
		$data["this_controller"] = $this->controller; 
		
		$this->load->view( '_general/concept_master_aj',$data);						
		return ; 				
		
	}

//---------------------------------------------------------------
	public function appointment_schedual(){
		
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
		
		$this->load->view("clinic/appointment_schedual");
		
	}




}