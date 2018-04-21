<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class users extends CI_Controller {


	public $template_name ; 
	public $theme_helper;
	
	public $concept  = "user" ; 
	public $controller = "clinic/users";  	
		
	public $class_name    = "bi_user" ; 
	public $class_path =  "clinic/bi_user" ; 
 
 	public $view_folder = "clinic"; 
	public $id_field  = "user_id"; 

	
function __construct()
	{
		parent::__construct();
	
	}
	
public function index()
	{
		$this->master()  ; 
	}

	//_________________________________________________________________________________________________			
	// main public loader & rights validator 		
	public function _top_function($component_code,$second_time='no')
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
		 
		// needed in all the controllers functions,  
		// loaded any way ..............$this->load->model("admin/bi_user");
	
		$this->load->model($this->class_path); 
		return true;
		 
	}	

//---------------------------------------------------------------
	public function master()
	{
		
		//logging	
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
			}
	
		$data["public_data"] = $this->admin_public->DATA;
		$data["this_concept"] = "user" ;
		$data["this_controller"] = $this->controller;
		$data["this_lang_file"] = "business/user_main" ; 
		
		$this->load->view( '_general/concept_master_aj',$data);						
		return ; 				
		
	}

//---------------------------------------------------------------
	public function ajax_table($purpose="" , $show_box = 'no')
	{
		
		$access_component_name = "security.general" ; 
		if (!$this->_top_function($access_component_name,'yes')) return ; 
		
		$access_verb="read" ;
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;  	
		
				
		if ($this->admin_public->verify_access($access_verb,0) == false ) 
			{
				$data["access_component_name"] = $access_component_name ; 
				$data["access_verb"] = $access_verb ;							
				$this->load->view( '_general/general/invalid_rights_message',$data);		; // takes care of login / header loading
				return ; 
				
			}
			
		$this_item = & $this->bi_user; 
		$sys_account = $this_item->business_data["user_sys_account_id"];
		
		$data["list_table"] = $this_item->list_items_rtable( "single_account",array("1"=>2) ,"");
		
		$data["table_purpose"] = ""; 
		
		$data["this_concept"] = "user" ;
		$data["this_controller"] = $this->controller; 
		$data["this_lang_file"] = "business/user_main" ;
	
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
				 
			 if ( $show_box == 'yes' )
             {
                         r_theme_box_start(r_langline('list_title',$this->concept.".master."),12,
							array("body_id"=>$this->concept."_list_body",
									"box_id"=>$this->concept."_list_box",
									"tools"=>"reload"	,
									"body_attributes"=>array('url'=>site_url($this->controller.'/ajax_table'))
								,	"back_color"=>"green" 
					
								) 
							); 
              }		
				if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
					$template_folder = "_templates/".$this->template_name."/" ;  
					$this->load->helper($this->theme_helper)	;				
					$this->load->view( '_general/concept_table_aj',$data);
					return ; 
				}
	

//-----------------------------------------------------------------
	public function ajax_list() 
	{
		$access_component_name = "security.general" ; 
		if (!$this->_top_function($access_component_name)) return ; 
					
		if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
	
		$template_folder = "_templates/".$this->template_name."/" ;  
		$this->load->helper($this->theme_helper)	;

		$this->ajax_table('','yes') ; // i did this because of 
		return ; 
	}
//--------------------------------------------------	
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
		}

	$this->load->library("form_validation");
	

	// load & read Existing object  ----------------------------------------------------
		$this_item = & $this->bi_user; 
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
						
						
						echo "<b><center>This User is already exist</center></b>";
						
						return ;
					}
					else
					{
						$this_item->business_data["sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
						$this_item->business_data["create_date"] = date("Y-m-d h:m:s");
						$this_item->business_data["user_sys_account_id"] = $this->admin_public->DATA["sys_account_id"];
						
						$this_item->update();
						echo "FINE: OK :"."<a msg=record_update_success /><ID>".$this_item->ID()."</ID>" ; 
					}					
				return;
			}		
			
	}

	public function ajax_delete()
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
			}
			

		
		// load & read Existing object  ----------------------------------------------------
		$this_item = & $this->bi_user; 
		$this_item->clear();
		
		$incoming_id = $this->uri->segment(4, 0);
	 
		if ($incoming_id !=0) {
			$this_item->Read($incoming_id,"",1);
			if (!$this_item->is_published )
			{
				//redirect with error not found object  
			}
		}
		
		$data["this_lang_folder"] = "clinic"	;
		$data["this_lang_file"] = "clinic/user_main";
		//setting the validation rules ,, 
		
		if (!$this->input->post("is_an_action"))
		{
			
			$data["this_item"] = $this_item ; 			
			$data["public_data"] = $this->admin_public->DATA;
		
			$data["this_concept"] = $this->concept ; 
			$data["this_controller"] = $this->controller ; 
			$data["this_id_field"] = $this->id_field ; 
	
					
			$template_folder = "_templates/".$this->template_name."/" ;  
			$this->load->helper($this->theme_helper)	;
										
			$this->load->view( '_general/concept_delete_aj',$data);	
			return ; 
		} 
		
		else 
		{
							
			$this_id = $this->input->post($this_item->id_field_name) ; 
			
			// ---------------------------------------------------------------------------------------------
			// this assumes that you only expose business_data from editing or filling 						/
			// you may require the input->post manually if you have additional fields , that_ 				/
			// are not in the data base or the business data 												/
			// ---------------------------------------------------------------------------------------------
				
			// ---------------------------------------------------------------------------------------------
				$this_item->read($this_id,"",1);
				$this_name = $this_item->get_name() ;
			
				$this->lang->load("business/general", $this->admin_public->DATA["system_lang"]);
			 	$this_item->delete($this_id);
				if ($this_item->success===false)
				{
						echo '<div class="alert alert-error">';	
						echo '<h4><i class="icon-warning-sign big"></i>  '.r_langline("general.delete_error")."</h4><hr/>" ; 
						echo "<h4>[ ". $this_name ." ]</h4><br/>".$this_item->error_message  ;
						echo '</div></div></div>';
						echo '<button class="btn blue ajax_action right master_font" caller_verb="form_cancel" caller_id="'.$this->concept.'_edit_form">';
						echo r_langline("general.button_close");
						echo '</button>';
						return ;
						 						
				}
					else
				{

						echo '<div class="alert alert-success">';	
						echo '<h4><i class="icon-ok-sign big"></i>  '.r_langline("general.delete_success")."</h4><hr/>" ; 
						echo "<h4>[ ". $this_name ." ]</h4><br/>" ;
						echo '</div></div></div>';
						echo '<button class="btn blue ajax_action right master_font" caller_verb="form_cancel" caller_id="'.$this->concept.'_edit_form">';
						echo r_langline("general.button_close");
						echo '</button><a msg=record_update_success /><ID>';
					
					
					return ;
				}		
				
		}
	}

}

	