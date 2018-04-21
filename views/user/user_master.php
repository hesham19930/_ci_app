	<?php
	
	// BEGIN PAGE SETTINGS 
	$this->lang->load('business/user_main', $this->admin_public->DATA["system_lang"]);
	
	$public_data["page_title"] =r_langline('page_title');
	$public_data["page_subtitle"] =r_langline('page_subtitle');  
	$public_data["page_description"] = r_langline('page_description');		  
	$public_data["page_scripts"] = array("bootstrap","chart" ); 	//
	
		 
	$this->load->view($public_data["template_folder"].'header',$public_data);
	?>	
	
	<!-- SETTING UP EDIT  FORM ACTIONS WORK ---------------------------------------------------------------------- -->	

	<!-- Deletion Action Automatino ..................................................................... -->
	<a  
		class="r_automation" 
		
		accesskey=""
		
		event_caller_type="edit_form" 
		caller_key = "user_delete_form"
		
		automation_verb="form_post_success"
		automation_target = "user_list_section"
		automation_action ="reload"
		automation_url=""   
	/>
	
	<a  
		class="r_automation" 
		
		accesskey=""
		
		event_caller_type="edit_form" 
		caller_key = "user_delete_form"
		
		automation_verb="post_form"
		automation_target = "[get_from_caller]"
		automation_action ="post_form"
		automation_url="[get_from_caller]"   
	/>
	
	<!-- Edit and New Action Automatino ..................................................................... -->
	<a  
		class="r_automation" 
		
		accesskey=""
		
		event_caller_type="edit_form" 
		caller_key = "user_edit_form"
		
		automation_verb="form_post_success"
		automation_target = "user_list_section"
		automation_action ="reload"
		automation_url=""   
	/>
	
	<a  
		class="r_automation" 
		
		accesskey=""
		
		event_caller_type="edit_form" 
		caller_key = "user_edit_form"
		
		automation_verb="form_post_success"
		automation_target = "user_edit_section"
		automation_action ="clear"
		automation_url=""   
	/>
	
	<a  
		class="r_automation" 
		
		accesskey=""
		
		event_caller_type="edit_form" 
		caller_key = "user_edit_form"
		
		automation_verb="post_form"
		automation_target = "[get_from_caller]"
		automation_action ="post_form"
		automation_url="[get_from_caller]"   
	/>
	
	<!-- List Actions Automatino ..................................................................... -->
	
	<a  
		class="r_automation" 
		
		event_caller_type="list_records" 
		caller_key = "users_table"
		
		automation_verb="add"
		automation_target = "user_edit_section"
		automation_action ="load_form"
		automation_url="[get_from_caller]"   
	/>
	
	<a  
		class="r_automation" 
		
		event_caller_type="list_records" 
		caller_key = "users_table"
		automation_verb="edit"
		automation_target = "user_edit_section"
		automation_action ="load_form"
		automation_url="[get_from_caller]"   
	/>
	
	<a  
		class="r_automation" 
		
		event_caller_type="list_records" 
		caller_key = "users_table"
	
		automation_verb="delete"
		automation_target = "user_edit_section"
		automation_action ="load_form"
		automation_url="[get_from_caller]"   
		
	/>
	
	<!-- END SETTING UP LIST ACTIONS WORK ---------------------------------------------------------------------- -->	
			
	<?php
	
		// ---------------------------------------------- EDIT SECTION ------------------------------ 
		r_theme_row_start() ; 

		// section of the edit 		
		r_theme_section_start(12,array("id"=>"user_edit_section"));
		r_theme_section_end();
		r_theme_row_end() ;
		
		// ----------------------------------------------  LIST SECTION ------------------------------
		
		r_theme_row_start() ;
		r_theme_section_start(12,array("id"=>"user_list_section","attributes"=>array(
									  'class'=>'autoload' ,
									  'url'=>site_url('account/users/ajax_list') )));
									  
	
		echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  
		
	
		r_theme_section_end();
		r_theme_row_end() ; 
		
		// ----------------------------------------------  FOOTER ------------------------------		
		?>
		<?php 
			$this->load->view($public_data["template_folder"].'footer',$public_data);
		?> 
		