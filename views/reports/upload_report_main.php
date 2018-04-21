		<?php
		
		//---------------------------------------------------------------------------------------
		// 																			Requirements 
		// $this_concept  : important 
		// $this_controller :important 
		// $this_report_title : important 
		// $this_lang_file : optional 
		// $this_lang_file : more optional 
		// $edit_type : optional 		
	  
	  	//---------------------------------------------------------------------------------------
		// BEGIN PAGE SETTINGS
		$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
		$this->lang->load("trans/report_main", $this->admin_public->DATA["system_lang"]);
		if (isset($this_lang_file))
		{
			if (isset($this_lang_folder)) $this_lang_file =$this_lang_folder.'/'.$this_lang_file ;  
			$this->lang->load($this_lang_file, $this->admin_public->DATA["system_lang"]);
		}
		
		$public_data["page_title_formatted"] ='<i class="icon-tags big"></i>'.r_langline($this_report_title);
		
		$public_data["page_title"] =r_langline($this_report_title) ; 
		$public_data["page_subtitle"] ="";
		$public_data["page_description"] = "";		  
		$public_data["page_scripts"] = array("bootstrap","chart" ); 	//
	
		
		$public_data["bread_crumbs"] = array("country.list"=>array("text"=>r_langline("find_trans","find_trans".".bread_crumbs."),"url"=>site_url($this_controller))) ; 
				 
		echo loadView($public_data["template_folder"].'header',$public_data); 		 	
		?>	
		<!--
		<div class="table-toolbar hide_with_menu " style="background-color: #f0f7f0;padding:0px;"  >			
			<div class="btn-group pull-right">
				<button 
				class="btn green ajax_action master_font" 	
			 	><i class="icon-plus"> </i>
				</button>
	
		<div class="clearfix"></div></div>
		-->	
		<?php
		echo loadView("page_title_view",$public_data); 		
		?>
		
		<!-- -------------------------------------------------------------- SEARCH FORM --> 
		<a class="r_automation" caller_key = "search_form" automation_verb="post_form"
		
			automation_target = "@differ"
			
			automation_form_fail_target="_edit_section" 
			automation_form_success_target="_list_section"
			
			automation_action ="post_form"
			automation_url="[get_from_caller]"   
		></a>
		
		<a class="r_automation" caller_key = "find_trans_table" automation_verb="open_document"
			automation_url="[get_from_caller]"   
			automation_target = "_blank"
			automation_action ="just_go_to_page"
		></a>
		
		<?php		  
		// ---------------------------------------------- MAIN FORM EDIT SECTION ------------------------------------------------------- 
		r_theme_row_start() ; 	
		r_theme_section_start(12,array("id"=>"_edit_section","attributes"=>array(
									  'class'=>'autoload hide_with_menu' ,
									  'url'=>site_url($this_controller.'/upload_file'). '/' )));	
		echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
		r_theme_section_end();
		r_theme_row_end() ;	
		// ----------------------------------------------  DETAILS LIST SECTION ------------------------------------------------------			
		
		r_theme_row_start() ;
		r_theme_section_start(12,array("id"=>"_list_section","attributes"=>array()));								  		
		r_theme_section_end();
		r_theme_row_end() ;
		
		// ----------------------------------------------  DETAILS EDIT SECTION ------------------------------------------------------
		if (!isset($edit_type))
		{		
		r_theme_row_start() ; 	
		r_theme_section_start(12,array("id"=>"std_edit_section","attributes"=>array('class'=>'modal transparent container hide' )));
		echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
		r_theme_section_end();
		r_theme_row_end() ;		
		}
		// ----------------------------------------------  DETAILS EDIT SECTION 2------------------------------------------------------
	
		if (isset($edit_type))
		{
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
		}
		
		else {
					r_theme_row_start() ; 
					r_theme_section_start(12,array("id"=>$this_concept."_edit_section","attributes"=>array('class'=>'modal transparent container hide' )));
					echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ; 		
							r_theme_section_end();
					r_theme_row_end() ;	
		}
		?>
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
		// ----------------------------------------------  FOOTER -------------------------------------------------------------		

		echo loadView($public_data["template_folder"].'footer',$public_data); 	
	?> 