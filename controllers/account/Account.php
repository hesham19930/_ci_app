<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class account extends CI_Controller {


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
		redirect ("/admin/account/list_all"); 
	}

	//_________________________________________________________________________________________________			
	// main public loader & rights validator 		
	public function _top_function($component_code)
	{
		$this->my_output->nocache(); 		
		$this->load->model("admin/admin_public") ; 	
		// start with the public items always 
		
		
		$this->lang->load("config",$this->admin_public->DATA["system_lang"]) ;
	
		if ($this->template_name=="") $this->template_name=r_langline("admin_template_name");
		if ($this->theme_helper=="") $this->theme_helper = r_langline("admin_template_helper"); 
		
		if (!$this->admin_public->load($component_code)) return false;  
			$this->load->model("admin/bi_sys_account") ; 
		// needed in all the controllers functions,  
		// loaded any way ..............$this->load->model("admin/bi_user");
		return true;
	}	
			
	public function list_all()
	{
		
		if (!$this->_top_function("account.list")) return ; // takes care of login / header loading 
		if ($this->admin_public->verify_access("read",1) == false ) return ; 
		
		$this_item = & $this->bi_sys_account; 
		
		$this->admin_public->DATA["page_title"] = $this_item->list_title ;
		
		$main_data["public_data"] = $this->admin_public->DATA; // needed to activate features based on userel
		 
		$main_data["list_message"] = "" ;
		$main_data["list_title"] = $this_item->list_title ;
		$main_data["list_table"] = $this_item->create_list();
		
		
						
		$data["body_data"] = $main_data; 			
		$data["public_data"] = $this->admin_public->DATA;										
		$this->template->load($this->template_name ,  'admin/general_list', $data,$this->theme_helper);
			
		
		
	}
	//_________________________________________________________________________________________________
	
	
	public function edit()
	{
		if (!$this->_top_function("account.edit")) return ; // takes care of login / header loading 		
		if ($this->admin_public->verify_access("read",1) == false ) return ; 
					
		// load & read Existing object  ----------------------------------------------------		
		$this->load->library("form_validation");
		
		$this_item = & $this->bi_sys_account; 
		
	
		$this->admin_public->DATA["page_title"] = $this_item->editing_title ;
		
		$incoming_id = $this->uri->segment(4, 0);
		 
		if ($incoming_id !=0) {
			$this_item->Read($incoming_id,"",1);
			if (!$this_item->is_published )
			{
				// cannot find organization // redirect with error 
			}
		}
		
		
		//setting the validation rules ,, 
		$this->form_validation->set_rules("sys_account_name","اسم - االحساب", "required") ;
		
		
		if ($this->form_validation->run() == FALSE )
		{

									 
			$main_data["this_item"] = $this_item ; 
			$main_data["public_data"] = $this->admin_public->DATA; // needed to activate features based on 
						
			$data["body_data"] = $main_data; 			
			$data["public_data"] = $this->admin_public->DATA;										
			$this->template->load($this->template_name ,  'admin/account_edit', $data,$this->theme_helper);
	
		} 
		
		else 
		{
			
			if ($this_item->ID()==0) 
				{ if ($this->admin_public->verify_access("new",0) == false ) return ;}
				else { if ($this->admin_public->verify_access("edit",0) == false ) return ; }
			
			// ---------------------------------------------------------------------------------------------
			// this assumes that you only expose business_data from editing or filling 						/
			// you may require the input->post manually if you have additional fields , that_ 				/
			// are not in the data base or the business data 												/
			// ---------------------------------------------------------------------------------------------
				
			 	// just a quick fix for boolean // should find a long term solution
			 		$this_item->business_data["is_active"] = 0 ; 
			 	
					foreach ($this_item->business_data as $key => $value) {
							if (key_exists($key, $this->input->post())) // if ($this->input->post($key))
							{ 
								$this_item->business_data[$key] =$this->input->post($key);  	
							}
					}
					
					$this_item->business_data["date_created"] =  date('Y-m-d H:i:s');
					
			// ---------------------------------------------------------------------------------------------
												
					$this_item->Validate();
					if ($this_item->Success==FALSE)
					{
						//goto redo; 
							
						$main_data["rErrors"] = Array($this_item->error_message);	
						$main_data["this_item"] = $this_item;   
						$main_data["public_data"] = $this->admin_public->DATA; // needed to activate features based on  	
						
						$data["body_data"] = $main_data; 						
						$data["public_data"] = $this->admin_public->DATA;				
						$this->template->load($this->template_name ,  'admin/account_edit', $data,$this->theme_helper);
					}
					else
					{ 
						$this_item->Update();
						redirect("admin/account/list_all");
					}
				//}
		}
		
	}
	
	public function ajax_list()
	{
		if (!$this->_top_function("account.list")) return ; // takes care of login / header loading 
		if ($this->admin_public->verify_access("read",1) == false ) return ; 
		
		$this_item = & $this->bi_sys_account; 
		
	
		$data["list_table"] = $this_item->list_items_rtable(
								"all",
								array("BY_account_id"=>$this->admin_public->DATA["sys_account_id"])
								,0);
	
		if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
	
		$template_folder = "_templates/".$this->template_name."/" ;  
		$this->load->helper($this->theme_helper)	;
	
	
		// BEGIN PAGE SETTINGS 
		$this->lang->load('users_list', $this->admin_public->DATA["system_lang"]);
	
	
		$this->load->view( 'account\accounts_table',$data);	
	}
}
/* end of file */ 
