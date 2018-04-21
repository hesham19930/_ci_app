	<?php

	
	
	
	
	
	
	// BEGIN PAGE SETTINGS 
		// BEGIN PAGE SETTINGS
	$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
	if (isset ( $this_lang_file))
    { 	
	$this->lang->load($this_lang_file, $this->admin_public->DATA["system_lang"]);
    }
	$public_data["page_title_formatted"] ='<i class="icon-tags big"></i>'.r_langline('page_title',$this_concept.".master.");
	
	$public_data["page_title"] =r_langline('page_title',$this_concept.".master.");
	$public_data["page_subtitle"] =r_langline('page_subtitle',$this_concept.".master.");  
	$public_data["page_description"] = r_langline('page_description',$this_concept.".master.");		  
	$public_data["page_scripts"] = array("bootstrap","chart" ); 	//

	
	$public_data["bread_crumbs"] = array(
										"settings"=>array("text"=>r_langline("settings",$this_concept.".bread_crumbs."),"url"=>site_url("account/dashboard/settings")),
										"country.list"=>array("text"=>r_langline($this_concept."s",$this_concept.".bread_crumbs."),"url"=>site_url($this_controller))) ; 
			 
	$this->load->view($public_data["template_folder"].'header',$public_data);
	
	 
	
		$this->load->view('page_title_view',$public_data);
		
		
	
	//echo $this_lang_folder.'/'.$this_lang_file ; 
	if (isset($full_item_page))
	{
		
		?>	
		<!-- List Actions Automation ..................................................................... -->
		<a class="r_automation"  caller_key = "<?php echo $this_concept.'_table' ;?>" automation_verb="add"
			automation_target = "_blank"
			automation_action ="just_go_to_page"
			automation_url="<?php echo site_url($this_controller.'/addedit/').'/'; ?>"		
		></a>
			
		<a class="r_automation" 	caller_key = "<?php echo $this_concept.'_table' ;?>" automation_verb="edit" 
			automation_target = "_blank"
			automation_action ="just_go_to_page"
			automation_url="[get_from_caller]"   	
		></a>
	
		<!--- DELETE ---------------------------------------------------------------------------------->
		<a class="r_automation"  caller_key = "<?php echo $this_concept.'_table' ;?>"  automation_verb="delete"
			automation_target = "<?php echo $this_concept.'_edit_section' ;?>"
			automation_action ="load_form_modal"
			automation_url="[get_from_caller]"   
			
		></a>	
		<a class="r_automation" caller_key = "<?php echo $this_concept.'_delete_form' ;?>" automation_verb="post_form"
			automation_target = "[get_from_caller]"
			automation_action ="post_form"
			automation_url="[get_from_caller]"   
		></a>
		
		<a class="r_automation" caller_key = "<?php echo $this_concept.'_delete_form' ;?>" automation_verb="form_post_success"
			automation_target = "<?php echo $this_concept.'_list_section' ;?>" 
			automation_action ="reload"
			automation_url=""   
		></a>
		
		<a class="r_automation" caller_key = "<?php echo $this_concept.'_delete_form' ;?>" automation_verb="form_post_success"
			automation_target = "<?php echo $this_concept.'_edit_section' ;?>"
			automation_action ="clear_modal"
			automation_url=""   
		></a>

	<?php
	
	}
	else {
		
	
		?>	
		<!-- List Actions Automation ..................................................................... -->
		<a class="r_automation"  caller_key = "<?php echo $this_concept.'_table' ;?>" automation_verb="add"
			automation_target = "<?php echo $this_concept.'_edit_section' ;?>"
			automation_action ="load_form_modal"
			automation_url="[get_from_caller]"   
		></a>
			
		<a class="r_automation" 	caller_key = "<?php echo $this_concept.'_table' ;?>" automation_verb="edit" 
			automation_target = "<?php echo $this_concept.'_edit_section' ;?>"
			automation_action ="load_form_modal"
			automation_url="[get_from_caller]"   
		></a>
		
		
		<a class="r_automation" caller_key = "<?php echo $this_concept.'_edit_form' ;?>" automation_verb="post_form"
			automation_target = "[get_from_caller]"
			automation_action ="post_form"
			automation_url="[get_from_caller]"   
		></a>
			
		<a class="r_automation"  caller_key = "<?php echo $this_concept.'_edit_form' ;?>" automation_verb="form_post_success"
			automation_target = "<?php echo $this_concept.'_list_section' ;?>" 
			automation_action ="reload"
			automation_url=""   
		></a>
		
		<a class="r_automation" caller_key = "<?php echo $this_concept.'_edit_form' ;?>" automation_verb="form_post_success"		
			automation_target = "<?php echo $this_concept.'_edit_section' ;?>"
			automation_action ="clear_modal"
			automation_url=""   
		></a>
		
		<a class="r_automation" caller_key = "<?php echo $this_concept.'_edit_form' ;?>" automation_verb="form_cancel"
				
				event_caller_type="edit_form" 	
				automation_target = "<?php echo $this_concept.'_edit_section' ;?>"
				automation_action ="clear_modal"
				automation_url=""   
		></a>
	
		<!--- DELETE ---------------------------------------------------------------------------------->
		<a class="r_automation"  caller_key = "<?php echo $this_concept.'_table' ;?>"  automation_verb="delete"
			automation_target = "<?php echo $this_concept.'_edit_section' ;?>"
			automation_action ="load_form_modal"
			automation_url="[get_from_caller]"   
			
		></a>	
		<a class="r_automation" caller_key = "<?php echo $this_concept.'_delete_form' ;?>" automation_verb="post_form"
			automation_target = "[get_from_caller]"
			automation_action ="post_form"
			automation_url="[get_from_caller]"   
		></a>
		
		<a class="r_automation" caller_key = "<?php echo $this_concept.'_delete_form' ;?>" automation_verb="form_post_success"
			automation_target = "<?php echo $this_concept.'_list_section' ;?>" 
			automation_action ="reload"
			automation_url=""   
		></a>
		
		<a class="r_automation" caller_key = "<?php echo $this_concept.'_delete_form' ;?>" automation_verb="form_post_success"
			automation_target = "<?php echo $this_concept.'_edit_section' ;?>"
			automation_action ="clear_modal"
			automation_url=""   
		></a>

	<?php
	}

		
		// ---------------------------------------------- EDIT SECTION ------------------------------------------------------- 
		r_theme_row_start() ; 	
		r_theme_section_start(12,array("id"=>$this_concept."_edit_section","attributes"=>array('class'=>'modal transparent container hide' )));
		echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
		r_theme_section_end();
		r_theme_row_end() ;		
		// ----------------------------------------------  LIST SECTION ------------------------------------------------------		
		
		
		
		
		r_theme_row_start() ;
		//echo site_url($this_controller.'/ajax_list') ; 
		r_theme_section_start(12,array("id"=>$this_concept."_list_section","attributes"=>array(
									  'class'=>'autoload' ,
									  'url'=>site_url($this_controller.'/ajax_table') )));									  
		echo '<div align="center"><img align="center" src='.base_url("loading.gif").'>';
		echo site_url($this_controller.'/ajax_table'); 
		echo '</div>' ;  
		r_theme_section_end();
		r_theme_row_end() ;
		
		
		
		  		
		// ----------------------------------------------  FOOTER -------------------------------------------------------------		

		$this->load->view($public_data["template_folder"].'footer',$public_data);
	?> 