		<?php

		
		// those should come from controller ---------------------------------- 
		
	   // $this_lang_folder = "trans" ; 
	   // $this_lang_file = "ssss"
	   // $$this_report_name = "title "
	   // $this_controller = " " 
		//$edit_type 
		
		// BEGIN PAGE SETTINGS
		$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
		//$this->lang->load($this_lang_folder.'/'.$this_lang_file, $this->admin_public->DATA["system_lang"]);
		
		$public_data["page_title_formatted"] ='<i class="icon-tags big"></i>'.$this_report_name ; 
		
		$public_data["page_title"] =r_langline('.page_title',$this_report_name);
		$public_data["page_subtitle"] ="";  
		$public_data["page_description"] = r_langline('.page_description',$this_report_name);		  
		$public_data["page_scripts"] = array("bootstrap","chart" ); 	//
	
		
		$public_data["bread_crumbs"] = array(
											
											"country.list"=>array("text"=>r_langline($this_report_name.".bread_crumbs."),"url"=>site_url($this_controller))) ; 
				 
		echo loadView($public_data["template_folder"].'header',$public_data); 		 
		echo loadView("page_title_view",$public_data); 		
	?>	
	
	<!-- -------------------------------------------------------------- DETAILS FORM ACTIONS  DELETE --> 	
	
		<a class="r_automation" caller_key = "execute_fresh_air" automation_verb="post_form"
			automation_target = "search_form_section"
			automation_action ="post_form"
			automation_url="[get_from_caller]"   	
		 ></a>
		 
		 <a class="r_automation" caller_key = "execute_device" automation_verb="post_form"
			automation_target = "search_form_section"
			automation_action ="post_form"
			automation_url="[get_from_caller]"   	
		 ></a>
		 
		 <a class="r_automation" caller_key = "execute_supplement_trad" automation_verb="post_form"
			automation_target = "search_form_section"
			automation_action ="post_form"
			automation_url="[get_from_caller]"   	
		 ></a>
		 
		  <a class="r_automation" caller_key = "execute_power" automation_verb="post_form"
			automation_target = "search_form_section"
			automation_action ="post_form"
			automation_url="[get_from_caller]"   	
		 ></a>
		 
		 <a class="r_automation" caller_key = "execute_compare" automation_verb="post_form"
			automation_target = "search_form_section"
			automation_action ="post_form"
			automation_url="[get_from_caller]"   	
		 ></a>
		 
		 <a class="r_automation" caller_key = "cancel_project" automation_verb="post_form"
			automation_target = "search_form_section"
			automation_action ="post_form"
			automation_url="[get_from_caller]"   	
		 ></a>
		 
		 
		 <a class="r_automation" caller_key = "execute_all" automation_verb="post_form"
			automation_target = "search_form_section"
			automation_action ="post_form"
			automation_url="[get_from_caller]"   	
		 ></a>
		 
		<!---------------------------------------------------------------------->
		
		<a class="r_automation" caller_key = "fresh_air_prop_edit_form" automation_verb="form_cancel"
			automation_target = "edit_fresh_air_prop_body"
			automation_action ="form_cancel"
			automation_url="[get_from_caller]"   	
		 ></a>
		
		 
		<?php
				 
		// ---------------------------------------------- MAIN FORM EDIT SECTION ------------------------------------------------------- 
		r_theme_row_start() ; 	
		r_theme_section_start(12,array("id"=>"search_form_section","attributes"=>array(
									  'class'=>'autoload' ,
									  'url'=>site_url($this_controller.'/find_form' ))));	
									  
		echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
		r_theme_section_end();
		r_theme_row_end() ;	
		// ----------------------------------------------  DETAILS LIST SECTION ------------------------------------------------------			
		/*
		
		r_theme_row_start() ;
		r_theme_section_start(12,array("id"=>"_list_section","attributes"=>array())); 						  		
		r_theme_section_end();
		r_theme_row_end() ;
		
		// ----------------------------------------------  DETAILS EDIT SECTION ------------------------------------------------------
		r_theme_row_start() ; 
		
		r_theme_section_end();
	
		r_theme_row_end() ;		
		
	*/
		// ----------------------------------------------  FOOTER -------------------------------------------------------------		

		echo loadView($public_data["template_folder"].'footer',$public_data); 		
	?> 