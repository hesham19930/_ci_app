<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class message extends CI_Controller {


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
		redirect ("/admin/message"); 
	}

	//_________________________________________________________________________________________________			
	// main public loader & rights validator 		
		public function _top_function($component_code)
	{
		
		if ($this->template_name=="") $this->template_name="metronic_en" ; 
		if ($this->theme_helper=="") $this->theme_helper = "metronic_en";
			
		$this->my_output->nocache(); 		
		$this->load->model("admin/admin_public") ; 	
		// start with the public items always 
		
		if (!$this->admin_public->load($component_code)) return false;  
		 
		// needed in all the controllers functions,  
				$this->load->model("lorenzo/bi_estimara");
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
	
}
/* end of file */ 
