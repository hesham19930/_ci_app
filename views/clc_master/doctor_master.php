<?php

	// BEGIN PAGE SETTINGS 
	$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
	if (!isset ( $this_lang_file)) $this_lang_file = "business/".$this_concept.'_main' ; 	
	$this->lang->load($this_lang_file, $this->admin_public->DATA["system_lang"]);
	 
	$this_title = "" ; // $this_item->business_data["JOURNAL_TYPE_NAME"] . " : " ; 
	
	if ($this_item->ID() == 0) { $this_title = $this_title." NEW ";} 
	else { $this_title = $this_title . $this_item->ID();} 
	
	$public_data["page_title_formatted"] ="" ; //'<i class="icon-file big"></i>'.$this_title ;
	$this_title = "" ; 
	$public_data["page_title"] = "Patient Profile" ; 
	$public_data["page_subtitle"] =r_langline('page_subtitle',$this_concept.".master.");  
	$public_data["page_description"] = r_langline('page_description',$this_concept.".master.");		  
	$public_data["page_scripts"] = array("bootstrap","chart" ); 	//
	
	$public_data["bread_crumbs"] = array(
							"settings"=>array("text"=>r_langline("settings",$this_concept.".bread_crumbs."),"url"=>site_url("account/dashboard/settings")),
							"country.list"=>array("text"=>r_langline($this_concept."s",$this_concept.".bread_crumbs."),"url"=>site_url($this_controller))) ; 
			 
	$tool_box_vars["file_id"]= $this_item->ID();
	$public_data["tool_box_name"] = "file_tool_box" ; 
	$public_data["tool_box_vars"] = $tool_box_vars ; 
	$public_data["show_toolbox"]= "yes" ; 
  
	$this->load->view($public_data["template_folder"].'header',$public_data);
	?>
	
	<!-- Open visits button  handler -->	
			<a class="r_automation" 
	    
    		caller_key = "visit_table" 
    		automation_verb = "open_document"
    		
			automation_target = "_blank"
			automation_action ="just_go_to_page"
			automation_url="[get_from_caller]"   
			
			></a>
			 <!-- delete visits  handler -->	
		    <a 
			class="r_automation" 
			
			caller_key = "visit_table" 
			automation_verb="delete"
			
			automation_target = "visit_edit_section"
			automation_action ="load_form_modal"
			automation_url="[get_from_caller]"   
			   
		    ></a>
			<!-- cancel delete form  visit handler -->	
	        <a class="r_automation" 
	    
    		caller_key = "visit_edit_form" 
    		automation_verb="form_cancel"
    		
			automation_target = "visit_edit_section"
			automation_action ="clear_modal"
			automation_url="[get_from_caller]"   
			
			></a>
			<!-- post form delete visit  handler -->	
	        <a class="r_automation" 
	    
    		caller_key = "visit_delete_form" 
    		automation_verb="post_form"
    		
			automation_target = "[get_from_caller]"
			automation_action ="post_form"
			automation_url="[get_from_caller]"   
			
			></a>
			<!-- clear delete visit form handler -->	   
			<a class="r_automation" 
			caller_key = "visit_delete_form"  
			automation_verb="form_post_success"
			
			automation_target = "visit_edit_section"
			automation_action ="clear_modal"
			automation_url=""   
			></a>
			<!-- refresh visit list after delete handler -->	
		    <a class="r_automation" 
	    
	    	caller_key = "visit_delete_form" 
	    	automation_verb="form_post_success"
	    	
			automation_target = "today_visit_list_section"  
			automation_action ="reload"
			automation_url=""
			   
		></a>	
		 <!-------------------Change Status Button----------------------->
			<a 
			class="r_automation" 
			
			caller_key = "change_status_button" 
			automation_verb="change_status"
			
			automation_target = "_blank"
			automation_action ="just_go_to_page"
			automation_url="[get_from_caller]"   
			   
		    ></a>  
		    
			<!-- refresh today visits list handler -->	
		  	
		    <a class="r_automation" 
	    
	    	caller_key = "change_status_button" 
	    	automation_verb="form_post_success"
	    	
			automation_target = "arrived_visit_list_section"  
			automation_action ="reload"
			automation_url=""
			   
			></a>
		
	<!-------------------------------------------------------------------------------->
	
	<div class="tabbable tabbable-custom">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab_1_1" data-toggle="tab"><i class=""></i>&nbsp;Arrived Appointments</a></li>
					<li><a href="#tab_1_2" data-toggle="tab"><i class=""></i>&nbsp;All Appointments</a></li>
						
				</ul>
			
			<div class="tab-content">
	
				<div class="tab-pane active" id="tab_1_1">
					
					<?php
					
					//---------------------------------------------------arrived VISIT SECTION-----------------------
	  	  			r_theme_row_start() ; 	
					r_theme_section_start(12,array("id"=>"arrived_visit_list_section","attributes"=>array(
												  'class'=>'autoload hide_with_menu' ,
												  'url'=>site_url('clinic/visits/ajax_table/doctor/'.date("Y-m-d").'') )));	
					echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
					r_theme_section_end();
					r_theme_row_end() ;
					echo "<br><br><br>";	
		
					?>
					
				</div>
				<div class="tab-pane" id="tab_1_2">
				
					<?php
					
					//---------------------------------------------------today VISIT SECTION-----------------------
	  	  			r_theme_row_start() ; 	
					r_theme_section_start(12,array("id"=>"today_visit_list_section","attributes"=>array(
												  'class'=>'autoload hide_with_menu' ,
												  'url'=>site_url('clinic/visits/ajax_table/doctor/'.date("Y-m-d").'/doc') )));	
					echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
					r_theme_section_end();
					r_theme_row_end() ;
					echo "<br><br><br>";	
		
					?>
						
				</div>	
				
		<?php		
		// -------------------------------------------- total services list SECTION ------------------------------------------------------- 
		r_theme_row_start() ; 	
		r_theme_section_start(12,array("id"=>"total_services_list_section","attributes"=>array(
									  'class'=>'autoload hide_with_menu' ,
									  'url'=>site_url('clinic/dashboards/total_services') )));	
		echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
		r_theme_section_end();
		r_theme_row_end() ;	
		
		?>
				
				
				 
	<?php
	
		// ---------------------------------------------- visit FORM EDIT SECTION -------------------------------------------------------
		r_theme_row_start() ; 	
		r_theme_section_start(6,array("id"=>"visit_edit_section","attributes"=>array('class'=>'modal transparent container hide' )));
		echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
		r_theme_section_end();
		r_theme_row_end() ;	
			
 // ----------------------------------------------  FOOTER -------------------------------------------------------------		
   $this->load->view($public_data["template_folder"].'footer',$public_data);

?> 