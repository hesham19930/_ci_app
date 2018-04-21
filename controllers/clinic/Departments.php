<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class departments extends Base_Controller
 {

	function __construct()
	{
        parent::__construct();
    
        $this->concept  = "department" ; 
        $this->controller = "clinic/departments";    
        
        $this->class_name    = "bi_department" ; 
        $this->class_path =  "clinic/bi_department" ; 
 
        $this->view_folder = "clinic"; 
        $this->id_field  = "department_id"; 
        
        $this->use_lang_files = array("clinic/department_main") ; 
        $this->security_component = "security.department" ; 
        $this->use_master = master_type::TableMaster ;

	
	}
//---------------------------------------------------------------
	public function info()
	{
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
            
            $data=array();
	
	 	$incoming_id = $this->uri->segment(4, 0); 
		if ($incoming_id!="")
		{
		
		}
		
		$this_item = & $this->main_class; 
		$this_item->clear();
		
		$this_view = 'clc_master/department_master';
		  
		$this_item->read($incoming_id,"",true) ; 
			if (!$this_item->is_published)
			{
			echo "Record Not Found"; 
			return ; 
			}
		
		
		$data["this_item"] = $this_item; 
		$data["public_data"] = $this->admin_public->DATA;
		//$data["T_SERVICE_ID"] = $this->uri->segment(4, 0); 
		
		$data["this_concept"] = $this->concept ; 
		$data["this_controller"] = $this->controller ; 
		$data["this_lang_folder"] = "business"	;
		$data["this_lang_file"] = "clinic/department_main" ;
		$data["this_id_field"] = $this->id_field ; 
		$data["department_id"] = $incoming_id ; 
		
			
		$this->load->view($this_view,$data);
	}

//---------------------------------------------------------------------

	public function ajax_table()
	{
		
		$access_component_name = $this->security_component ;
		if (!$this->_top_function($access_component_name,'yes')) return ;

		$access_verb="read" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;

		if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
			
		$this_item = & $this->main_class;
	
		$data["list_table"] = $this_item->list_items_rtable( "all",array() ,"");
		
		$data["this_concept"] = "department" ;
		$data["this_controller"] = $this->controller; 

        $data["this_lang_file"] = "clinic/department_main" ; 	
		$data["this_id_field"] = "department_id" ; 
		$data["this_name_field"] = "department_name" ; 
		$data["this_name_field_ar"] = "department_name" ;
		
		
		$data["options"]["hide_add_button"] = false ; 
		$data["options"]["disable_line_add"] = true ; 
		$data["options"]["disable_line_edit"] = false ; 
		$data["options"]["disable_line_delete"] = false ;
		$data["options"]["hide_line_verbs"] = false ; 
		$data["options"]["disable_datatable"] = false ; 
		$data["options"]["line_verbs_colors"] = true ; 
		$data["options"]["line_verbs_buttons"] = true ; 
				 
		$data["options"]["enable_open_button"] = true ; 
		$data["options"]["open_url_suffix"] = site_url("clinic/departments/info")   ; 
		$data["options"]["open_url_field"] = "department_id" ; 
		
		           
        $this->view_data = $data ; 
        
        return parent::ajax_table(); 
     }
	

//---------------------------------------------------
		
	public function ajax_edit()
	{
		$access_component_name = $this->security_component ;
		if (!$this->_top_function($access_component_name,'yes')) return ;

		$access_verb="read" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;

		if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;

	$this->load->library("form_validation");
	

	// load & read Existing object  ----------------------------------------------------
		$this_item = & $this->main_class; 
		$this_item->clear();

  
		$incoming_id = $this->uri->segment(4, 0);//3 is number of segements in the url after /index.php 
		$type_of_edit = $this->uri->segment(5,"e");
	   
		if ($incoming_id !=0) {
			$this_item->Read($incoming_id,"",1);
			if (!$this_item->is_published )
			{
				//redirect with error not found object  
			}
		}
		//echo "serer";
		
		
		$data["this_controller"] = $this->controller; 	
	//	echo $this->concept ; 
		
		$this->form_validation->set_rules("department_name","department name", "required") ;
		
		echo $this_item->error_message;//to test read_pre_process()
		if ($this->form_validation->run() == FALSE )
		{
				 
			$data["this_item"] = $this_item ; 			
			$data["public_data"] = $this->admin_public->DATA;
      
			$data["disable_edit"] = false;
           if ($type_of_edit ==="view_only") $data["disable_edit"] = true;						
			$this->load->view('clc_edit/department_edit',$data);	
			return ; 
		}
		
		else {
			
			 
			if ($this_item->ID()==0) 
			{ if ($this->admin_public->verify_access("new",0) == false ) return ;}
			else { if ($this->admin_public->verify_access("edit",0) == false ) return ; }

			
					foreach ($this_item->business_data as $key => $value)
					{
					if (key_exists($key, $this->input->post())) // if ($this->input->post($key))
						{ 
						$this_item->business_data[$key] =$this->input->post($key);  	
						}
					}
					
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
						
						
						echo "<b><center>This Department is already exist</center></b>";
						
						return ;
					}
					else
					{
							
						//$this_item->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
						
						$this_item->update();
						
					}					
				return;
			}		
			
	}


}

	