<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class sys_account_s extends Base_Controller {
	
function __construct()
{
	parent::__construct();

    $this->concept  = "sys_account" ; 
    $this->controller = "account/sys_account_s";    
    
    $this->class_name    = "bi_sys_account" ; 
    $this->class_path =  "admin/bi_sys_account" ; 
 
        $this->view_folder = "account"; 
    $this->id_field  = "sys_account_id"; 
    
    $this->use_lang_files = array("business/sys_account_main") ; 
    $this->security_component = "security.sys_account" ; 
    $this->use_master = master_type::TableMaster ;
	
}
		
//_________________________________________________________________________________________________	
	public function ajax_edit()
	{
		$access_component_name = $this->security_component ;
		if (!$this->_top_function($access_component_name,'yes')) return ;

		$access_verb="read" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;

		if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
		$this->load->library("form_validation");
		$this->load->model("clinic/bi_department") ;
		
		// load & read Existing object  ----------------------------------------------------
		$this_item = & $this->main_class;
		$this_item->clear();

		$incoming_id = $this->uri->segment(4, 0);
	 
		if ($incoming_id !=0) 
		{
			$this_item->Read($incoming_id,"",1);
			if (!$this_item->is_published )
			{
				//redirect with error not found object  
			}
		}
		
		//to set the created date in case NEW ACCOUNT
		else if($incoming_id ==0)
		{
			$this_item->business_data["sys_acc_date_created"] = date("Y-m-d");//today date
		}

		//setting the validation rules ,, 
		$this->form_validation->set_rules("sys_account_name","account name", "required") ;
		$this->form_validation->set_rules("sys_acc_admin_email", "sys_acc admin email", "required|valid_email");
		  
		if ($this->form_validation->run() == FALSE )
		{					 
			$data["this_item"] = $this_item ; 			
			$data["public_data"] = $this->admin_public->DATA;
			$data["disable_edit"] = false;
					
			$template_folder = "_templates/".$this->template_name."/" ;  
			$this->load->helper($this->theme_helper)	;
										
			$this->load->view( $this->view_folder.'/'.$this->concept .'_edit',$data);	
			return ; 
		}
		
		else 
		{
			
			if ($this_item->ID()==0)
			{
				 if ($this->admin_public->verify_access("new",0) == false ) return ;
			}
			else
			{
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
		
			//it's for check-box when it's unchecked return 0
			$this_item->business_data["sys_acc_is_active"] = 0 ;
			$this_item->business_data["sys_acc_enable_logo"] = 0 ;
			
		
				foreach ($this_item->business_data as $key => $value) 
				{
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
					$this->load->view( $this->view_folder.'/'.'sys_account_edit',$data);	 
					echo "<center><b>".$this_item->error_message."</b></center>" ; 
						
				}
				else
				{
					//$this_item->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
					
					$this_item->update();
					echo "FINE: OK :"."<a msg=record_update_success /><ID>".$this_item->ID()."</ID>" ; 
				}
			return;
		}

	//_________________________________________________________________________________________________
	public function ajax_table()
	{
		$access_component_name = $this->security_component ;
		if (!$this->_top_function($access_component_name,'yes')) return ;

		$access_verb="read" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;

		if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;

		$this_item = & $this->main_class; 
	
		$data["list_table"] = $this_item->list_items_rtable( "master_acc_filter",array() ,"");
		
		$data["this_concept"] = $this->concept ; 
		$data["this_controller"] = $this->controller ; 
		$data["this_id_field"] = $this->id_field ; 
		
		$data["this_name_field"] = "sys_account_name" ; 
					
		$data["options"]["hide_add_button"] = false ; 
		$data["options"]["disable_line_add"] = true ; 
		$data["options"]["disable_line_edit"] = false ; 
		$data["options"]["disable_line_delete"] = false ;
		$data["options"]["hide_line_verbs"] = false ; 
		$data["options"]["disable_datatable"] = false ; 
		$data["options"]["line_verbs_colors"] = true ; 
		$data["options"]["line_verbs_buttons"] = true ; 
				
		$this->view_data = $data ; 
            
        return parent::ajax_table();
	}

	//_________________________________________________________________________________________________
	
	
	
}

/* end of file */ 