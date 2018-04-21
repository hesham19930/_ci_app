<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class users extends Base_Controller {

	
function __construct()
	{
		parent::__construct();
    
        $this->concept  = "user" ; 
        $this->controller = "account/users";    
        
        $this->class_name    = "bi_user" ; 
        $this->class_path =  "admin/bi_user" ; 
 
        $this->view_folder = "account"; 
        $this->id_field  = "user_id"; 
        
        $this->use_lang_files = array("business/user_main") ; 
        $this->security_component = "security.user" ; 
        $this->use_master = master_type::TableMaster ; 
	
	}
	
//---------------------------------------------------------------
	public function ajax_table()
	{
		

		$access_component_name = $this->security_component ;
		if (!$this->_top_function($access_component_name,'yes')) return ;

		$access_verb="read" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;

		if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;

		$data = array() ;
		
		$this_item = & $this->main_class; 
		
		$sys_account = $this_item->business_data["user_sys_account_id"];
		
		$data["list_table"] = $this_item->list_items_rtable( "all",array() ,"");
		$data["list_table"] = $this_item->list_items_rtable("group_name_filter" , array() , "" , "default");
		//$data["list_table"] = $this_item->list_items_rtable( "single_account",array("1"=>2) ,"");
		
		$data["table_purpose"] = ""; 
		
		$data["this_concept"] = "user" ;
		$data["this_controller"] = $this->controller; 
	
		$data["this_id_field"] = "user_id" ; 
		$data["this_name_field"] = "user_name" ; 
		$data["this_name_field_ar"] = "user_name" ;
				
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

//--------------------------------------------------	
public function ajax_edit()
{
	$access_component_name = $this->security_component ;
	if (!$this->_top_function($access_component_name,'yes')) return ;

	$access_verb="read" ;
	$data = array() ;
	$data["public_data"] = $this->admin_public->DATA;

	if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;

	$this->load->library("form_validation");
	$this->load->model("admin/bi_user_group") ;
	$this->load->model("admin/bi_sys_account") ; 

	// load & read Existing object  ----------------------------------------------------
		$this_item = & $this->main_class;  
		$this_item->clear();

		$incoming_id = $this->uri->segment(4, 0);//3 is number of segements in the url after /index.php 
	 
		if ($incoming_id !=0) {
			$this_item->Read($incoming_id,"",1);
			if (!$this_item->is_published )
			{
				//redirect with error not found object  
			}
		}

		$data["this_controller"] = $this->controller; 	

		$this->form_validation->set_rules("user_name","user name", "required") ;
		$this->form_validation->set_rules("user_email", "user email", "required|valid_email");
		
		echo $this_item->error_message;//to test read_pre_process()
		if ($this->form_validation->run() == FALSE )
		{
				 
			$data["this_item"] = $this_item ; 			
			$data["public_data"] = $this->admin_public->DATA;
			$data["disable_edit"] = false;						
			$this->load->view( $this->view_folder.'/'.'user_edit',$data);
				
			return ; 
		}
		
		else {
			
			 
			if ($this_item->ID()==0) 
			{ if ($this->admin_public->verify_access("new",0) == false ) return ;}
			else { if ($this->admin_public->verify_access("edit",0) == false ) return ; }

			/*
			// ---------------------------------------------------------------------------------------------
			// this assumes that you only expose business_data from editing or filling 						/
			// you may require the input->post manually if you have additional fields , that_ 				/
			// are not in the data base or the business data 												/
			// ---------------------------------------------------------------------------------------------
			
			 */
					// just a quick fix for boolean // should find a long term solution
			
			//it's for check-box when it's unchecked return 0
			$this_item->business_data["is_active"] = 0 ;
			
			
					//to add new values
					foreach ($this_item->business_data as $key => $value)
					{
					if (key_exists($key, $this->input->post())) // if ($this->input->post($key))
						{ 
						$this_item->business_data[$key] =$this->input->post($key);  	
						}
					}
					if($this_item->business_data["is_active"]==="on") { $this_item->business_data["is_active"] =1;  }
					// in this moment , where would be the new value of the field before update ?
					$this_item->validate();
					
					
					
					if ($this_item->success==FALSE)
					{
						//goto redo; 
						
						$data["this_item"] = $this_item ; 			
						$data["public_data"] = $this->admin_public->DATA;
						$data["disable_edit"] = false;		
						
						$template_folder = "_templates/".$this->template_name."/" ;  
						$this->load->helper($this->theme_helper)	;							
						$this->load->view( $this->view_folder.'/'.$this->concept .'_edit',$data);
						
						
						echo "<b><center>This User is already exist</center></b>";
						
						return ;
					}
					else
					{
						$this_item->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
                        if ($this_item->ID > 0 )
                        {
						$this_item->business_data["create_date"] = date("Y-m-d h:m:s");
                        }
                        $this_item->business_data["modified_date"] = date("Y-m-d h:m:s");
						//$this_item->business_data["user_sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
						
						$this_item->update();
						echo "FINE: OK :"."<a msg=record_update_success /><ID>".$this_item->ID()."</ID>" ; 
					}					
				return;
			}		
			
	}

	
}

	