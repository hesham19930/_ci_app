<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');




class history_lines extends Base_Controller  {

	
	function __construct()
	{
		parent::__construct();
	
        $this->concept  = "history_line" ; 
        $this->controller = "clinic/history_lines";    
        
        $this->class_name    = "bi_history_line" ; 
        $this->class_path =  "clinic/bi_history_line" ; 
 
        $this->view_folder = "clinic"; 
        $this->id_field  = "history_line_id"; 
        
        $this->use_lang_files = array("clinic/history_line_main") ; 
        $this->security_component = "security.history" ; 
        $this->use_master = master_type::NoMaster ; 
         
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
			
		$this_item = & $this->main_class; 
	 
	
	//--------------when enter the history page direct--------------------------------
	$patient_id = $this->uri->segment(4, 0);
	if ($patient_id=="")
	{
		$data["list_table"] = $this_item->list_items_rtable( "all",array() ,"");
		
	    $data["options"]["hide_add_button"] = true ; 				
		$data["options"]["disable_line_add"] = true ; 
		$data["options"]["disable_line_edit"] = true ; 
		$data["options"]["disable_line_delete"] = false ;
		$data["options"]["hide_line_verbs"] = false ; 
		$data["options"]["disable_datatable"] = false ; 
		$data["options"]["line_verbs_colors"] = true ; 
		$data["options"]["line_verbs_buttons"] = true ; 
           // $data["show_box_title"] = "";
			$data["show_table_box"] = "yes" ; 
		
	}
	//--------------when enter the history page from Patient page--------------------------------
	
	else 
	{
		
	$data["list_table"] = $this_item->list_items_array( "single_patient",array("patient_id"=>$patient_id) ,"");	
	$data["list_table"] = array_reverse($data["list_table"]) ;    
	$data["options"]["hide_add_button"] = true ; 				
		$data["options"]["disable_line_add"] = true ; 
		$data["options"]["disable_line_edit"] = false ; 
		$data["options"]["disable_line_delete"] = false ;
		$data["options"]["hide_line_verbs"] = false ; 
		$data["options"]["disable_datatable"] = true ; 
		$data["options"]["line_verbs_colors"] = true ; 
		$data["options"]["line_verbs_buttons"] = true ;
		$data["enable_search"] = false ;
		$data["hscroll"] = true ;
		//$data["show_box_title"] = "Medical History Details";
		//$data["show_box_title"] = "";
		$data["show_table_box"] = "yes" ; 

	}
	
    
	   $this->view_data = $data ; 
	    $this->view_data["public_data"] = $this->admin_public->DATA;   
            $this->view_data["this_concept"] = $this->concept ;
            $this->view_data["this_controller"] = $this->controller; 
       
            $this->view_data["this_id_field"] = $this->id_field ; 
            $this->view_data["this_name_field"] = $this->id_field;
            $this->view_data["this_name_field_ar"] = $this->id_field; 
    
            if (!isset ($this->view_data["options"]["show_table_box"]))
            {
                $this->view_data["options"]["show_table_box"]="yes" ; 
            }
            
            if (!isset ($this->view_data["options"]["show_box_title"]))
            {
                $this->view_data["options"]["show_box_title"] ="" ; 
            } 
            if (1==2)
            {
            if ($this->view_data["options"]["show_table_box"] =="yes")
            {
                    r_theme_box_start($this->view_data["options"]["show_box_title"],12,
                    array("body_id"=>$this->concept."_list_body",
                    "box_id"=>$this->concept."_list_box",
                    "tools"=>"relxoad"   ,
                    "body_attributes"=>array('url'=>site_url($this->view_data["this_controller"].'/ajax_table'))
                    ,   "back_color"=>"green" 
                    ) 
                    );
            } 
            }
              if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
            
              $this->view_data["columns"] = array("history_line_id"=>"#","hl_prefix"=>"Title","history_line"=>"Information") ;
                        $this->view_data["colorcol"] = "hl_color" ; 
              $this->view_data["verbs"][ "edit"]=array("E " , site_url($this->controller) . "/ajax_edit/vvv_ID_vvv" , "blue" ) ; 
              $this->view_data["verbs"]["delete"]=array("X" , site_url($this->controller) . "/ajax_delete/vvv_ID_vvv" , "red" ) ; 
              
              $template_folder = "_templates/".$this->template_name."/" ;  
              $this->load->helper($this->theme_helper)  ;
              $this->load->view( '_general/compact_table_aj',$this->view_data);
              return ; 
	// return parent::ajax_table(); 
   
	
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
	$this->load->model('clinic/bi_patient');
	

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
		
		//------------to hide patient-name
		else 
		{
			$patient_id = $this->uri->segment(5, 0);
		} 
		//----------------------------------------
		
		
		$data["this_controller"] = $this->controller; 	
	
		
		$this->form_validation->set_rules("history_line","history_line", "required") ;
		
		echo $this_item->error_message;//to test read_pre_process()
		if ($this->form_validation->run() == FALSE )
		{
				 
			$data["this_item"] = $this_item ; 			
			$data["public_data"] = $this->admin_public->DATA;
			$data["disable_edit"] = false;	
			
			//to hide patient name 
			
			if($incoming_id == 0 ){
				
				$this_item->business_data['hl_patient_id'] = $patient_id ;
				
			}
			//--------------------------
			
								
			$this->load->view( 'clc_edit/history_line_edit',$data);	
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
					// /just a quick fix for boolean // should find a long term solution
				//	$this_item->business_data["drug_available"] = 0 ; //it's for check-box when it's unchecked return 0
					//to add new values

					$this_item->business_data["hl_color"] = 0 ; 
					
					foreach ($this_item->business_data as $key => $value)
					{
					if (key_exists($key, $this->input->post())) // if ($this->input->post($key))
						{ 
						$this_item->business_data[$key] =$this->input->post($key);  	
						}
					}
					if($this_item->business_data["hl_color"]==="on") { $this_item->business_data["hl_color"] =1;  }
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
						
						
						echo "<b><center>This Drug Name is already exist</center></b>";
						
						return ;
					}
					else
					{
						$this_item->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
						
						$this_item->update();
						echo "FINE: OK :"."<a msg=record_update_success /><ID>".$this_item->ID()."</ID>" ; 
					}					
				return;
			}		
			
	}

}

	