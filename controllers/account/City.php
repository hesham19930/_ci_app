<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class city extends CI_Controller {


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
		$this->list_all() ;  
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
		$this->load->model("admin/bi_city");
		return true; 
	}	
		
	//_________________________________________________________________________________________________
	
	public function list_all()
	{
		
		if (!$this->_top_function("user.list")) return ; // takes care of login / header loading 
		if ($this->admin_public->verify_access("read",1) == false ) return ; 
		
		$this_item = & $this->bi_city; 
		
		$this->admin_public->DATA["page_title"] = $this_item->list_title ;
		
		$main_data["public_data"] = $this->admin_public->DATA; // needed to activate features based on 
		 
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
		if (!$this->_top_function("user.edit")) return ; // takes care of login / header loading 
		if ($this->admin_public->verify_access("read",1) == false ) return ; 
		
		
		
		$this->load->library("form_validation");
		$this->load->model("admin/bi_account"); 
		$this->load->model("admin/bi_user_group");
		
		// load & read Existing object  ----------------------------------------------------
		$this_item = & $this->bi_user; 
		$this_item->clear();
	
		$this->admin_public->DATA["page_title"] = $this_item->editing_title ;
		
		$incoming_id = $this->uri->segment(4, 0);
		
	
		 
		if ($incoming_id !=0) {
			$this_item->Read($incoming_id,"",1);
			if (!$this_item->is_published )
			{
				//redirect with error not found object  
			}
		}
		
	
		
		
		if ($this_item->business_data["group_id"]==1)  
			{
			redirect("admin/user/list_all");
			return; 
			}
		
		//setting the validation rules ,, 
		$this->form_validation->set_rules("user_name","اسم - االحساب", "required") ;
			
		
		if ($this->form_validation->run() == FALSE )
		{
		//	echo "H".$this_item->business_data["group_id"] ; return ;
									 
			$main_data["this_item"] = $this_item ; 
			$main_data["public_data"] = $this->admin_public->DATA; // needed to activate features based on 
						
			$data["body_data"] = $main_data; 			
			$data["public_data"] = $this->admin_public->DATA;										
			$this->template->load($this->template_name ,  'admin/user_edit', $data,$this->theme_helper);
			return ; 
		} 
		
		else 
		{
				
			if ($this_item->ID()==0) 
				{ if ($this->admin_public->verify_access("new",0) == false ) return ;}
				else { if ($this->admin_public->verify_access("edit",0) == false ) return ; }
			}
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
						return ; 
					}
					else
					{
						if ($this_item->business_data["group_id"]==1)
						{
							// canot chnage me 
							redirect("admin/user/list_all");
						} 
						$this_item->Update();
						redirect("admin/user/list_all");
					}
				//}
					
			return;
		}
	
	}
	

/* end of file */ 
