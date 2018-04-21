<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class general_forms extends CI_Controller {


	function __construct()
	{
		parent::__construct();
	
	}
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 * 
	 */
	 
	public $template_name ; 
	public $theme_helper;
	
	public function index()
	{
		echo "controller index page" ; 
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
		
			return true;
		 
		 
	}	
		
	//_________________________________________________________________________________________________
	
	//_________________________________________________________________________________________________
	// Showing the Error Page ,  
	
	public function show()
	{
					
		if (!$this->_top_function("message")) return ; // takes care of login / header loading 
						
		// load & read Existing object  ----------------------------------------------------		
		//$this_item = & $this->bi_organization; 
		
		$this->admin_public->DATA["page_title"] = "Error Report Page" ;
		
		$message_id = $this->uri->segment(4, 0);
		$this->bi_message_log->read($message_id) ; 
		
		$main_data["message_data"] = $this->bi_message_log->business_data ;  
		$data["public_data"] = $this->admin_public->DATA;
			
		$data["body_data"] = $main_data; 
										
		$this->template->load($this->template_name ,  '_general/general/message_log_view', $data,$this->theme_helper);
			
			
	}
	
	public function dates_plus_form()
	{
	
		$access_component_name = "security.general" ; 
		$access_verb="read" ;
		
		if (!$this->_top_function($access_component_name)) return ; 
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;  			
		if ($this->admin_public->verify_access("read",1) == false ) 
			{
				$data["access_component_name"] = $access_component_name ; 
				$data["access_verb"] = $access_verb ; 					
				$this->load->view( '_general/general/invalid_rights_message',$data);		; // takes care of login / header loading 
			}
		
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules("store_trans_date","Invoice ", "required") ;
		
		
		//print_r($this_item->business_data) ; 
		if ($this->form_validation->run() == FALSE )
		{
			
							 
			$data["caller_key"] = $this->uri->segment(4, 0);
			$data["public_data"] = $this->admin_public->DATA;
			$data["disable_edit"] = false;
					
					
			$template_folder = "_templates/".$this->template_name."/" ;  
			$this->load->helper($this->theme_helper)	;
										
			$this->load->view( 'browsers/browser_form',$data);	
			return ; 
		} 
		
		else 
		{
				$filter_data = array() ; 			
				if ($this->input->post("store_trans_date")) {
						 $filter_data["store_trans_date"]=$this->input->post("store_trans_date") ; }	
				if ($this->input->post("store_trans_date2")) {
						 $filter_data["store_trans_date2"]=$this->input->post("store_trans_date2") ; }
		}		
			
	}
	
	
	
}
/* end of file */ 
