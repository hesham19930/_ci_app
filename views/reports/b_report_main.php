		<?php

		
		// those should come from controller ---------------------------------- 
		
	   // $this_lang_folder = "trans" ; 
	   // $this_lang_file = "ssss"
	   // $$this_report_name = "title "
	   // $this_controller = " " 
		//$edit_type 
		
		// BEGIN PAGE SETTINGS
		$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
		$this->lang->load($this_lang_folder.'/'.$this_lang_file, $this->admin_public->DATA["system_lang"]);
		
		$public_data["page_title_formatted"] ='<i class="icon-tags big"></i>'.r_langline('.page_title',$this_report_name) ; 
		
		$public_data["page_title"] =r_langline('.page_title',$this_report_name);
		$public_data["page_subtitle"] =r_langline('.page_subtitle',$this_report_name);  
		$public_data["page_description"] = r_langline('.page_description',$this_report_name);		  
		$public_data["page_scripts"] = array("bootstrap","chart" ); 	//
	
		
		$public_data["bread_crumbs"] = array(
											
											"country.list"=>array("text"=>r_langline($this_report_name.".bread_crumbs."),"url"=>site_url($this_controller))) ; 
				 
		$this->load->view($public_data["template_folder"].'header',$public_data);
		
		$this->load->view('page_title_view',$public_data);	
	?>	
	
	<!-- -------------------------------------------------------------- DETAILS FORM ACTIONS  DELETE --> 	
	
		<a class="r_automation" caller_key = "search_form" automation_verb="post_form"
			automation_target = "search_form_section"
			automation_action ="post_form"
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
		r_theme_row_start() ;
		r_theme_section_start(12,array("id"=>"_list_section","attributes"=>array())); 						  		
		r_theme_section_end();
		r_theme_row_end() ;
		
		// ----------------------------------------------  DETAILS EDIT SECTION ------------------------------------------------------
		r_theme_row_start() ; 
		switch ($edit_type) {
			case 'modal':
					r_theme_section_start(12,array("id"=>"_edit_section","attributes"=>array('class'=>'modal transparent container hide' )));
					echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ; 				
				break;
			case 'inline':
					r_theme_section_start(12,array("id"=>"_edit_section","attributes"=>array('class'=>'transparent container hide' )));
					echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ; 
				break;
			case 'new_window':
				r_theme_section_start(12,array("id"=>"_edit_section","attributes"=>array('class'=>'transparent container hide' )));
				echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ; 
				break;
			default:
				break;
		}		
		r_theme_section_end();
		r_theme_row_end() ;		
		
	
		// ----------------------------------------------  FOOTER -------------------------------------------------------------		

		$this->load->view($public_data["template_folder"].'footer',$public_data);
	?> 