<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class department_fields extends Base_Controller {

	function __construct()
	{
		parent::__construct();
		
		$this->concept  = "department_field" ; 
        $this->controller = "clinic/department_fields";    
        
        $this->class_name    = "bi_department_field" ; 
        $this->class_path =  "clinic/bi_department_field" ; 
 
        $this->view_folder = "clinic"; 
        $this->id_field  = "department_field_id"; 
        
        $this->use_lang_files = array("clinic/department_field_main") ; 
        $this->security_component = "security.general" ; 
        $this->use_master = master_type::TableMaster ; 
	}	

//_________________________________________________________________________________________________	

	public function ajax_edit()
	{
			
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
				return false ;  
			}
			

		$this->load->library("form_validation");
		$this->load->model("lookup/bi_field_type");

		// load & read Existing object  ----------------------------------------------------
		$this_item = & $this->main_class; 
		$this_item->clear();

		$incoming_id = $this->uri->segment(4, 0);
		$department_id = $this->uri->segment(5, 0);

 
		if ($incoming_id !=0) 
		{
			$this_item->Read($incoming_id,"",1);
			if (!$this_item->is_published )
			{
				//redirect with error not found object  
			}
			$department_id = $this_item->business_data["df_department_id"] ; 
		}


		//setting the validation rules ,,
		$this->form_validation->set_rules("is_an_action","ACTION", "required") ;
		$this->form_validation->set_rules("df_field_name","field_name", "required") ;
		$this->form_validation->set_rules("df_field_text","field_text", "required") ;
		$this->form_validation->set_rules("df_field_order","field_order", "required") ;
		
		$this->form_validation->set_rules("df_field_type_id","df_field_type_id", "required") ;
		//$this->form_validation->set_rules("dd_department_id","dd_department_id", "required") ;
		$this->form_validation->set_rules("df_field_order","df_field_order", "required") ;
		
			
		$data["this_concept"] = $this->concept ; 
		$data["this_controller"] = $this->controller ; 		
		$data["this_lang_file"] = "clinic/department_field_main" ; 

	
		//echo "dddd" . $this_item->business_data["dd_department_id"] ; 
		//return ; 
		
		if ($this->form_validation->run() == FALSE )
		{
			
			if ($incoming_id == 0 )
			{
				if ($this->input->post("is_an_action")=="yes")    //this is adding with form validation miss must field
				{ $department_id = $this->input->post("df_department_id"); }  //echo $client_invoice_id ;  
					
					
				$this_item->business_data["df_department_id"] = $department_id ; 
				
			}
			
			
			//echo "department :" . $this_item->business_data["dd_department_id"] ; 
							 
			$data["this_item"] = $this_item ; 			
			$data["public_data"] = $this->admin_public->DATA;
			$data["disable_edit"] = false;
					
			$template_folder = "_templates/".$this->template_name."/" ;  
			$this->load->helper($this->theme_helper)	;
			
			$this->load->view('clc_edit/department_field_edit',$data);	
			return ; 
		} 
		
		else 
		{
					
			 // REMEMBER HERE THE ITEM IS POPULATED TO ITS DB OLD VALUES // COMING FROM THE READ 
			 
		   $department_id = $this->input->post("df_department_id");
		   
		   //print_r($this->input->post()) ; 
		   //return ; 
			
			if ($this_item->ID()==0) 
				{
					
					//$this_item->business_data["dd_department_ID"] = $department_id;
					
					if ($this->admin_public->verify_access("new",0) == false ) return ;
					else { if ($this->admin_public->verify_access("edit",0) == false ) return ; }
					
					//$this_item->business_data["app_account_id"] = $this->admin_public->DATA["account_id"];
					$iNow = date('Y-m-d H:i') ; 
					//$this_item->business_data["S_TIME_CREATED"] =  "to_date('$iNow','yyyy-mm-dd HH24:MI')";
					
					
		           // $this_item->business_data["dd_department_ID"] = 4 ; 
		           //$this->bi_department->read ($department_id) ; 
		            //$this_item->business_data["department_NAME"] = $this->bi_department->business_data['T_department_NAME'] ; 
				
				}
				
				
			// ---------------------------------------------------------------------------------------------
			// this assumes that you only expose business_data from editing or filling 						/
			// you may require the input->post manually if you have additional fields , that_ 				/
			// are not in the data base or the business data 												/
			// ---------------------------------------------------------------------------------------------
			
			$this_item->business_data["df_is_hidden"] = 0 ; 
			$this_item->business_data["df_is_totalamount_field"] = 0 ; 
			$this_item->business_data["df_is_obligatory"] = 0 ; 
			$this_item->business_data["df_hide_in_print"] = 0 ; 
			$this_item->business_data["df_is_unit_price_field"] = 0 ; 
			$this_item->business_data["df_is_quanitity_field"] = 0 ;
			$this_item->business_data["df_is_units_field"] = 0 ;  
			
				
			//$this_item->business_data["MEDICAL_STATUS_ONHOLD"] = 0 ;
			foreach ($this_item->business_data as $key => $value) 
			{
				if (key_exists($key, $this->input->post())) // if ($this->input->post($key))
				{ 
					$this_item->business_data[$key] =$this->input->post($key);  	
				}
			}
			
			
			$this_item->business_data["df_field_name"] = strtoupper($this_item->business_data["df_field_name"]) ; 
			//$this_item->business_data["df_field_forumula"] = strtoupper($this_item->business_data["df_field_forumula"]) ;
			
					
			$iNow = date('Y-m-d H:i') ; 
			//$this_item->business_data["S_TIME_UPDATED"] =  "to_date('".date('Y-m-d H:i')."','yyyy-mm-dd HH24:MI')";
			//$this_item->business_data["S_USER_NAME"] = sysDATA("user_name") ; 
			//$this_item->business_data["S_USER_ID"] = sysDATA("user_id") ;
		
			// ---------------------------------------------------------------------------------------------
			/* sometime u use this 
			
							$data["this_item"] = $this_item ;
							$data["use_item_info"] = true ; 
							r_theme_message( "error", "رسالة", "لا يمكن اقفال سجل بدون اصناف") ; 
							
			*/							
			// --------------------------------------------------------------------------------------------- 
					
					
					$this_item->validate();
					
					
					if ($this_item->success==FALSE)
					{
						echo "<span style='color:red';>Error Validation Information or Incomplete</span><br/>" ; 
						echo "<span style='color:red';>".$this_item->error_message."</span><hr/>" ;
						$data["this_item"] = $this_item ; 
						$this->load->view('efile/department_field_edit',$data);	
						return ;
						
					}
					else
					{
						
							
						$this_item->update();
						r_theme_message("info", "", "Last Saved @ " . date("Y-m-d h:i:s")) ; 
					
						
					}
				//}
					
			return;
		}
		}
//_________________________________________________________________________________________________

	public function ajax_table()
	{
    $access_component_name = $this->security_component ;
        if (!$this->_top_function($access_component_name,'yes')) return ;

        $access_verb="list" ;
        $data = array() ;
        $data["public_data"] = $this->admin_public->DATA;

        if ($this->admin_public->verify_access($access_verb,0) == false ) return say_no_access($access_component_name,$access_verb) ;

		$this_item = & $this->main_class;
			
		$department_id = $this->uri->segment(4) ; 
	
		$view_name = "default" ;		
	
		$data["list_table"] = $this_item->list_items_rtable(  "by_department_id",array("df_department_id"=>$department_id) ,1,$view_name);
		//$data["table_purpose"] =$purpose ; 
		
		$data["this_concept"] = $this->concept ; 
		$data["this_controller"] = $this->controller ; 		
		$data["this_lang_file"] = "clinic/department_field_main" ;
		$data["this_id_field"] = "department_field_id" ; 
		$data["this_name_field"] = "df_field_name" ; 
		$data["this_name_field_ar"] = "df_field_name" ;
	
		
		$data["options"]["hide_add_button"] = true ; 
		$data["options"]["disable_line_add"] = true ; 
		$data["options"]["disable_line_edit"] = false ; 
		$data["options"]["disable_line_delete"] = false ;
		
		$data["options"]["hide_line_verbs"] = false ; 
		$data["options"]["disable_datatable"] = true ; 
		$data["options"]["line_verbs_colors"] = true ; 
		$data["options"]["line_verbs_buttons"] = true ; 
		
	/*	$data["options"]["show_line_copy"] = true;
				
		$data["options"]["copy_url_suffix"] = site_url($this->controller."/ajax_copy/")   ; 
		$data["options"]["copy_url_field"] = "AR_INVOICE_DETAIL_ID" ; 
	*/			
		
      	$this->view_data = $data ; 
	    return parent::ajax_table();
	}

}

/* end of file */ 