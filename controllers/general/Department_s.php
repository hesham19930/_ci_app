<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class department_s extends CI_Controller {


	public $template_name ; 
	public $theme_helper;
	
	public $concept  = "department" ; 
	public $controller = "general/department_s";  	
		
	public $class_name    = "bi_department" ; 
	public $class_path =  "general/bi_department" ; 
 
 	public $view_folder = "general"; 
	public $id_field  = "DEPARTMENT_ID"; 
	
	public $lang_file = "business/ar_main" ; 

	
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
	//_________________________________________________________________________________________________
	public function master()
	{
		
		$access_component_name = "security.general" ; 
		$access_verb="read" ;
		
		
		
		if (!$this->_top_function($access_component_name)) return ; 
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;  
		
		
		
		 
				
		if ($this->admin_public->verify_access("read",0) == false ) 
			{
				$data["public_data"] = $this->admin_public->DATA;
				$data["access_component_name"] = $access_component_name ; 
				$data["access_verb"] = $access_verb ; 					
				$this->load->view( '_general/general/invalid_rights_message',$data);		; // takes care of login / header loading
				 return false; 
			}
			
		
	
		$data["public_data"] = $this->admin_public->DATA;
		$data["this_concept"] = $this->concept ; 
		$data["this_controller"] = $this->controller ; 		
		$data["this_lang_file"] = $this->lang_file ; 
		
		$this->load->view( '_general/concept_master_aj',$data);						
		return ; 				
		
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

		// load & read Existing object  ----------------------------------------------------
		$this_item = & $this->bi_department; 
		$this_item->clear();

		$incoming_id = $this->uri->segment(4, 0);
		
	 
		if ($incoming_id !=0) {
			$this_item->Read($incoming_id,"",1);
			if (!$this_item->is_published )
			{
				//redirect with error not found object  
			}
		}

		//setting the validation rules ,,
		$this->form_validation->set_rules("is_an_action","ACTION", "required") ;
		$this->form_validation->set_rules("DEPARTMENT_NAME","ITEM_NAME", "required") ;
		
			
		$data["this_concept"] = $this->concept ; 
		$data["this_controller"] = $this->controller ; 		
		$data["this_lang_file"] = $this->lang_file ; 
		
		if ($this->form_validation->run() == FALSE )
		{
			
							 
			$data["this_item"] = $this_item ; 			
			$data["public_data"] = $this->admin_public->DATA;
			$data["disable_edit"] = false;
					
			$template_folder = "_templates/".$this->template_name."/" ;  
			$this->load->helper($this->theme_helper)	;
			
			$this->load->view('general/department_edit',$data);	
			return ; 
		} 
		
		else 
		{
					
			 // REMEMBER HERE THE ITEM IS POPULATED TO ITS DB OLD VALUES // COMING FROM THE READ 
			 
		 
			
			if ($this_item->ID()===0) 
				{
					
					if ($this->admin_public->verify_access("new",0) == false ) return ;
					else { if ($this->admin_public->verify_access("edit",0) == false ) return ; }
					
					//$this_item->business_data["app_account_id"] = $this->admin_public->DATA["account_id"];
					$iNow = date('Y-m-d H:i') ; 
					//$this_item->business_data["S_TIME_CREATED"] =  "to_date('$iNow','yyyy-mm-dd HH24:MI')";
					
				}
			
			// ---------------------------------------------------------------------------------------------
			// this assumes that you only expose business_data from editing or filling 						/
			// you may require the input->post manually if you have additional fields , that_ 				/
			// are not in the data base or the business data 												/
			// ---------------------------------------------------------------------------------------------
				
			//$this_item->business_data["MEDICAL_STATUS_ONHOLD"] = 0 ;
			foreach ($this_item->business_data as $key => $value) {
					if (key_exists($key, $this->input->post())) // if ($this->input->post($key))
					{ 
						$this_item->business_data[$key] =$this->input->post($key);  	
					}
			}
			
			$this_item->business_data["DEP_BRANCH_ID"] = sysdata("branch_id") ; 
					
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
						$this->load->view('general/department_edit',$data);	
						return ;
						
					}
					else
					{
						$this_item->update();
						r_theme_message("info", "", "Last Saved @ " . date("Y-m-d h:i:s")) ; 
						echo "<span class='hidden'> FINE OK <a msg=record_update_success /></a><ID>".$this_item->ID() ."</ID></span>" ;
						
					}
				//}
					
			return;
		}
		}
	//_________________________________________________________________________________________________
		public function ajax_select($search_string="",$use_ajax_search =false , $autotable=true) 
	{
			
		$access_component_name = "security.general" ; 
		if (!$this->_top_function($access_component_name)) return ; 
				
	
		if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
	
		$template_folder = "_templates/".$this->template_name."/" ;  
		$this->load->helper($this->theme_helper)	;
		
		r_theme_box_start(r_langline('list_title',"patient.master."),12,
				array("body_id"=>"patient_list_body",
						"box_id"=>"patient_list_box",
						"tools"=>"config,reload,hide,close,more,collapse"	,
						"body_attributes"=>array('url'=>site_url('ar/item_s/ajax_table/seno/no') )				
						) 
			); 
			
			?>
				<input type="text" 
				name="select_action_search" 
				id="select_action_search"
				caller_target = 'department_list_selector'  
				value ="<?php echo $search_string ; ?>" 
				caller_url='<?php echo site_url($this->controller."/ajax_table/selector/no/yes") ; ?>' 
				>
			<?php
			if ($search_string =="") $search_string = "_111" ; 
			echo $search_string ; 
			$this->ajax_table("selector","no","yes",$search_string) ; 
		
		
		return ; 
	}
	//_________________________________________________________________________________________________
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
	//_________________________________________________________________________________________________
	public function ajax_table($purpose="" , $show_box = 'no',$allow_search="no",$search_string="")
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
				$this->load->view( '_general/general/invalid_rights_message_message',$data);		; // takes care of login / header loading
				return ; 				
			}
			
		$this_item = & $this->bi_department; 
				$search_string =urldecode ($search_string) ;  
		
		if ($allow_search =="no")
		{
	 			$data["list_table"] = $this_item->list_items_rtable( "all",array() ,"");
				$data["list_table"] = $this_item->list_items_rtable(  "clients",array(), "" );
		}
		else
		{ 
				$data["list_table"] = $this_item->list_items_rtable( "list_search",array("search"=>$search_string) ,"");
				
		}	
		$data["table_purpose"] =$purpose ; 
		
		$data["this_concept"] = $this->concept ; 
		$data["this_controller"] = $this->controller ; 		
		$data["this_lang_file"] = $this->lang_file ; 
		$data["this_id_field"] = "DEPARTMENT_ID" ; 
		$data["this_name_field"] = "DEPARTMENT_NAME" ; 
		$data["this_name_field_ar"] = "DEPARTMENT_NAME" ;
					
		$data["options"]["hide_add_button"] = false ; 
		$data["options"]["disable_line_add"] = false ; 
		$data["options"]["disable_line_edit"] = false ; 
		$data["options"]["disable_line_delete"] = false ;
		$data["options"]["hide_line_verbs"] = false ; 
		$data["options"]["disable_datatable"] = false; 
		$data["options"]["line_verbs_colors"] = true ; 
		$data["options"]["line_verbs_buttons"] = true ; 
		
		$data["options"]["add_url_extension"] = "item/vvv_ID_vvv"; 
				
		if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
		$template_folder = "_templates/".$this->template_name."/" ;  
		$this->load->helper($this->theme_helper)	;

               if ( $show_box == 'yes' )
                 {
                         r_theme_box_start(r_langline('list_title',"department.master."),12,
							array("body_id"=>"gl_account_list_body",
									"box_id"=>"gl_account_list_box",
									"tools"=>"reload"	,
									"body_attributes"=>array('url'=>site_url($data["this_controller"].'/ajax_table'))
								,	"back_color"=>"green" 
									) 
						); 
                  }

         if ($allow_search=="yes")
         {
         	
        	
				 $data["enlosed_in_div"]  = "department_list_selector" ; 
         }
		
		 $this->load->view( '_general/concept_table_aj',$data);
		return ; 
	}
	//_________________________________________________________________________________________________
	public function ajax_delete()
	{
			
		
		$access_component_name = "security.general" ; 
		$access_verb="read" ;
		
		if (!$this->_top_function($access_component_name)) return ; 
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;  			
		if ($this->admin_public->verify_access("read",1) == false ) 
			{
				$data["access_component_name"] = $access_component_name ; 
				$data["access_verb"] = $access_verb ; 					
				$this->load->view( '_general/general/invalid_rights_message',$data);		; // takes care of login / header loading 
			}
			

		
		// load & read Existing object  ----------------------------------------------------
		$this_item = & $this->bi_department; 
		$this_item->clear();
		
		$incoming_id = $this->uri->segment(4, 0);
	 
	 	
		if ($incoming_id !=0) {
			$this_item->Read($incoming_id,"",1);
			if (!$this_item->is_published )
			{
				//redirect with error not found object  
			}
		}

		//setting the validation rules ,, 
		$data["this_concept"] = $this->concept ; 
		$data["this_controller"] = $this->controller ; 		
		$data["this_lang_file"] = $this->lang_file ; 
		$data["this_id_field"] = "DEPARTMENT_ID" ; 
		$data["this_name_field"] = "DEPARTMENT_NAME" ; 
		$data["this_name_field_ar"] = "DEPARTMENT_NAME" ;
		
		if (!$this->input->post("is_an_action"))
		{
			
							 
			$data["this_item"] = $this_item ; 			
			$data["public_data"] = $this->admin_public->DATA;
					
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
						echo '<button class="btn blue ajax_action right master_font" caller_verb="form_cancel" caller_id="department_edit_form">';
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
						echo '<button class="btn blue ajax_action right master_font" caller_verb="form_cancel" caller_id="department_edit_form">';
						echo r_langline("general.button_close");
						echo '</button><a msg=record_update_success /><ID>';
					
					
					return ;
				}		
				/*
				$this_item->delete($this_id);
				if ($this_item->success===false)
				{
				 		$data["message_text"] = "general.delete_error|<h4>[ ". $this_name ." ]</h4>|".$this_item->error_message  ;
						$data["message_lang_file"] = "business/general" ;  	
						$data["message_type"] = "error" ; 
						$data["message_modal"] = "yes" ; 
				 		$this->load->view( 'general/action_message',$data);
						return ;
						 						
				}
					else
				{
						$data["message_text"] = "general.delete_success|<h4>[ ". $this_name ." ]</h4>|<a msg=record_update_success /></a>"  ;
						$data["message_lang_file"] = "business/general" ;  	
						$data["message_type"] = "success" ;
						$data["message_modal"] = "yes" ;  
				 		$this->load->view( 'general/action_message',$data);
						return ;
				}
				 */
					
		}
	}
	
	//-------------------------------------------------------------------------------------
	public function get_item_name($item_code)
	{
	
		$access_component_name = "security.general" ; 
		$access_verb="read" ;
		
		if (!$this->_top_function($access_component_name)) return ; 
		$data = array() ;
		$data["public_data"] = $this->admin_public->DATA;  			
		if ($this->admin_public->verify_access("read",1) == false ) 
			{
				echo "no rights" ; 
				return ; 
			}
			
		$this_item = & $this->bi_item;
		$this_item->clear() ;  
		$incoming_id = $this->uri->segment(4, 0);
		
		
		$this_item->read($incoming_id,"ITEM_S.ITEM_CODE",true);
		if (!$this_item->is_published )
		{ 	echo "NOT_FOUND<!/><!/><!/>" ; return ; }
		else 
		{
			
			$item_name =$this_item->business_data["ITEM_NAME"] ;
			$item_price =$this_item->business_data["ITEM_PRICE"] ;
			$item_gl_account_code =$this_item->business_data["GL_ACCOUNT_CODE6"] ;  
			$item_gl_account_name =$this_item->business_data["GL_ACCOUNT_NAME6"] ; 
			$item_gl_account_id =$this_item->business_data["ITEM_GL_ACCOUNT_ID"] ; 
			
			echo 'AJAX_FOUND<!/>'.$this_item->ID()."<!/>".$item_name."<!/>" .$item_price."<!/>" .$item_gl_account_code."<!/>" .$item_gl_account_name."<!/>" .$item_gl_account_id."<!/>";
		
		    return ; 		
		}
	
		
		}
	//_________________________________________________________________________________________________
	
	
	
}


/* end of file */ 