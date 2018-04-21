<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class persons extends Base_Controller
 {

	function __construct()
	{
        parent::__construct();
    
        $this->concept  = "person" ; 
        $this->controller = "clinic/persons";    
        
        $this->class_name    = "bi_person" ; 
        $this->class_path =  "clinic/bi_person" ; 
 
        $this->view_folder = "clinic"; 
        $this->id_field  = "person_id"; 
        
        $this->use_lang_files = array("clinic/person_main") ; 
        $this->security_component = "security.person" ; 
        $this->use_master = master_type::TableMaster ;

	
	}
//---------------------------------------------------------------
	public function ajax_table()
	{
		
		$access_component_name = $this->security_component ;
		$access_verb = "read" ;
        if (!$this->_top_function($access_component_name)) return ;
        if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;
			
		$this_item = & $this->main_class;
	
		$data["list_table"] = $this_item->list_items_rtable( "all",array() ,"");
		
		$data["this_concept"] = "person" ;
		$data["this_controller"] = $this->controller; 

        $data["this_lang_file"] = "clinic/person_main" ; 	
		$data["this_id_field"] = "person_id" ; 
		$data["this_name_field"] = "person_name" ; 
		$data["this_name_field_ar"] = "person_name" ;
		
		
		
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
	

//---------------------------------------------------
		
	public function ajax_edit()
	{
		$access_component_name = $this->security_component ;
		$access_verb = "read" ;
        if (!$this->_top_function($access_component_name)) return ;
        if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;

	$this->load->library("form_validation");
	
	$this->load->model("clinic/bi_company");
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
		//echo "serer";
		
		
		$data["this_controller"] = $this->controller; 	
	//	echo $this->concept ; 
	
	$this->form_validation->set_rules('person_email', 'Email', 'valid_email');
	$this->form_validation->set_rules('person_email', 'Email', 'required');
		$this->form_validation->set_rules("person_name","person name", "required") ;
	
		
		echo $this_item->error_message;//to test read_pre_process()
		if ($this->form_validation->run() == FALSE )
		{
				 
			$data["this_item"] = $this_item ; 			
			$data["public_data"] = $this->admin_public->DATA;
			$data["disable_edit"] = false;						
			$this->load->view('clc_edit/person_edit',$data);	
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
				//	$this_item->business_data["drug_available"] = 0 ; //it's for check-box when it's unchecked return 0
					//to add new values
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
						
						
						echo "<b><center>This Blood Group is already exist</center></b>";
						
						return ;
					}
					else
					{
							
						//$this_item->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
						
						$this_item->update();
						echo "FINE: OK :"."<a msg=record_update_success /><ID>".$this_item->ID()."</ID>" ; 
					}					
				return;
			}		
			
	}


}

	