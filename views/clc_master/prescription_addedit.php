		<?php
		$this_lang_folder = "trans" ; 
		$box_color = "green" ; 
	
		// BEGIN PAGE SETTINGS
		$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
		$this->lang->load($this_lang_folder.'/'."strans_main".'_main', $this->admin_public->DATA["system_lang"]);
		
		$public_data["page_title_formatted"] ='<i class="icon-tags big"></i>'.r_langline('page_title',$this_concept.".master.");		
		$public_data["page_title"] =r_langline('page_title',$this_concept.".master.");
		$public_data["page_subtitle"] =r_langline('page_subtitle',$this_concept.".master.");  
		$public_data["page_description"] = r_langline('page_description',$this_concept.".master.");		  
		$public_data["page_scripts"] = array("bootstrap","chart" ); 	//
	
		
		$public_data["bread_crumbs"] = array() ; 
				 
		echo loadView($public_data["template_folder"].'header',$public_data); 		 
		echo loadView("page_title_view",$public_data);
	
	?>		
	
	<!--  handler -->
		<a 
		class="r_automation" 
		
		caller_key = "<?php echo $this_concept.'_edit_form' ;?>" 
		automation_verb="post_form"
		
		automation_action ="post_form"	
		automation_target = "[get_from_caller]"
		automation_url="[get_from_caller]"
		   
	    ></a>
	    
	    
	   <!-- -----------------------------------------------------------------------------------  -->
	    
	    <!--add new prescription_drug button handler  -->
	    <a 
		class="r_automation" 
		
		caller_key = "new_prescription_drug_button" 
		automation_verb="add_prescription_drug"
		
		automation_target = "prescription_drug_edit_section"
		automation_action ="load_form_modal"
		automation_url="[get_from_caller]"   
		   
	    ></a>
	    
	    <!-- edit handler check_up_value  -->	
	    <a 
		class="r_automation" 
		
		caller_key = "prescription_drug_table" 
		automation_verb="edit"
		
		automation_target = "prescription_drug_edit_section"
		automation_action ="load_form_modal"
		automation_url="[get_from_caller]"   
		   
	    ></a>
	    <!-- delete prescription_drug  handler -->	
	    <a 
		class="r_automation" 
		
		caller_key = "prescription_drug_table" 
		automation_verb="delete"
		
		automation_target = "prescription_drug_edit_section"
		automation_action ="load_form_modal"
		automation_url="[get_from_caller]"   
		   
	    ></a>
		<!-- post form  prescription_drug  handler -->	
	       <a class="r_automation" 
	    
	    		caller_key = "prescription_drug_edit_form" 
	    		automation_verb="post_form"
	    		
				automation_target = "[get_from_caller]"
				automation_action ="post_form"
				automation_url="[get_from_caller]"   
			
		></a>
		<!-- cancel form  prescription_drug handler -->	
	       <a class="r_automation" 
	    
	    		caller_key = "prescription_drug_edit_form" 
	    		automation_verb="form_cancel"
	    		
				automation_target = "prescription_drug_edit_section"
				automation_action ="clear_modal"
				automation_url="[get_from_caller]"   
			
		></a>
		<!-- cancel delete form  prescription_drug  handler -->	
	       <a class="r_automation" 
	    
	    		caller_key = "prescription_drug_edit_form" 
	    		automation_verb="form_cancel"
	    		
				automation_target = "prescription_drug_edit_section"
				automation_action ="clear_modal"
				automation_url="[get_from_caller]"   
			
		></a>
		<!-- post form delete prescription_drug  handler -->	
	       <a class="r_automation" 
	    
	    		caller_key = "prescription_drug_delete_form" 
	    		automation_verb="post_form"
	    		
				automation_target = "[get_from_caller]"
				automation_action ="post_form"
				automation_url="[get_from_caller]"   
			
		></a>
		
		
		<!-- clear  prescription_drug  form handler -->	   
		<a class="r_automation" 
			caller_key = "prescription_drug_edit_form"  
			automation_verb="form_post_success"
			
			automation_target = "prescription_drug_edit_section"
			automation_action ="clear_modal"
			automation_url=""   
		></a>
		<!-- clear delete prescription_drug form handler -->	   
		<a class="r_automation" 
			caller_key = "prescription_drug_delete_form"  
			automation_verb="form_post_success"
			
			automation_target = "prescription_drug_edit_section"
			automation_action ="clear_modal"
			automation_url=""   
		></a>
		<!-- refresh prescription_drug list handler -->	
		    <a class="r_automation" 
	    
	    	caller_key = "prescription_drug_edit_form" 
	    	automation_verb="form_post_success"
	    	
			automation_target = "prescription_drug_list_section"  
			automation_action ="reload"
			automation_url=""
			   
		></a>
		<!-- refresh prescription_drug list after delete handler -->	
		    <a class="r_automation" 
	    
	    	caller_key = "prescription_drug_delete_form" 
	    	automation_verb="form_post_success"
	    	
			automation_target = "prescription_drug_list_section"  
			automation_action ="reload"
			automation_url=""
			   
		></a>
	
		
		<?php		  
		// ---------------------------------------------- MAIN FORM EDIT SECTION ------------------------------------------------------- 
		r_theme_row_start() ; 	
		r_theme_section_start(12,array("id"=>$this_concept."_edit_section","attributes"=>array(
									  'class'=>'autoload' ,
									  'url'=>site_url($this_controller.'/ajax_edit'). '/' . $prescription_id )));	
		echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
		r_theme_section_end();
		r_theme_row_end() ;
		//--------------------------------------------------------------------------------------------
		?>	
		<!-- Add New Drug Button  -->
		<div class="btn-group pull-left">
		<button  
				type="submit" 
			
				class="btn blue ajax_action  master_font"
				
				caller_verb="add_prescription_drug"
				caller_id="new_prescription_drug_button"
				caller_url= "<?php echo site_url('clinic/prescription_drug_s/ajax_edit/0/'.$prescription_id.'/0')  ; ?>" 
				caller_target="prescription_drug_edit_section"
			
		>
		Add Drug 
		</button>
		</div>
		<?php
		// ----------------------------------------------  prescription_drug DETAIL LIST SECTION  ------------------------------------------------------
					
		r_theme_row_start() ; 	
		r_theme_section_start(12,array("id"=>"prescription_drug_list_section","attributes"=>array(
									  'class'=>'autoload' ,
									  'url'=>site_url("clinic/prescription_drug_s/ajax_table/".$prescription_id ))));	
		echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
		r_theme_section_end();
		r_theme_row_end() ;
		// ---------------------------------------------- prescription_drug  FORM EDIT SECTION -------------------------------------------------------
		r_theme_row_start() ; 	
		r_theme_section_start(12,array("id"=>"prescription_drug_edit_section","attributes"=>array('class'=>'modal transparent container hide' )));
		echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
		r_theme_section_end();
		r_theme_row_end() ;	
		
		// ----------------------------------------------  FOOTER -------------------------------------------------------------		
		$public_data["include_sird_edit_form_script"] = true ; 
		echo loadView($public_data["template_folder"].'footer',$public_data); 		
	?> 