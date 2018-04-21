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
	//$public_data["tool_box_name"] = "file_tool_box" ; 
	//$public_data["tool_box_vars"] = $tool_box_vars ; 
	$public_data["show_toolbox"]= "yes" ; 
  
	$this->load->view($public_data["template_folder"].'header',$public_data);
		

?>
	
<!---------------------------------- Patient handler ------------------------------------->
	<a class="r_automation" 
		caller_key = "patient_edit_form" 
		automation_verb="post_form"
		automation_action ="post_form"
		automation_target = 'patient_edit_section' 
		automation_url="[get_from_caller]"   
	></a>
	
	<a class="r_automation" 
		caller_key = "patient_edit_form" 
		automation_verb="form_post_success"
	    automation_target = 'patient_edit_section' 
	    automation_action ="reload"
	    automation_url=""   
	></a>

<!---------------------------------- add appoint from schedule handler ------------------------------------->
		<a 	
		class="r_automation" 
		
		   caller_key = "calendar_day" 
        automation_verb="click"
        automation_target = "appointment_edit_section"
        automation_action ="load_form_modal"
        automation_url="[get_from_caller]"   
        
			   
	    ></a>
	    
	       <a  
        class="r_automation" 
        
           caller_key = "calendar_day" 
        automation_verb="book"
        automation_target = "appointment_edit_section"
        automation_action ="load_form_modal"
        automation_url="[get_from_caller]"   
        
               
        ></a>
        
	<!-- post appoint form(to press save) handler -->	
       <a class="r_automation"    
		caller_key = "visit_edit_form" 
		automation_verb="post_form"
		automation_target = "[get_from_caller]"
		automation_action ="post_form"
		automation_url="[get_from_caller]"   
			
		></a>
	<!-- clear add appoint form (after press save) handler -->	   
		<a class="r_automation" 
		caller_key = "visit_edit_form"  
		automation_verb="form_post_success"
		
		automation_target = "appointment_edit_section"
		automation_action ="clear_modal"
		automation_url=""   
		></a>
	<!-- refresh appoint list (after press save) handler -->	
	    <a class="r_automation" 
    
    	caller_key = "visit_edit_form" 
    	automation_verb="form_post_success"
    	
		automation_target = "new_visit_list_section"  
		automation_action ="hide_section"
		automation_url=""
			   
		></a>	

	<!-- cancel handler -->
	        <a class="r_automation" 
	    
    		caller_key = "visit_edit_form" 
    		automation_verb="form_cancel"
    		
			automation_target = "appointment_edit_section"
			automation_action ="clear_modal"
			automation_url="[get_from_caller]"   
			
			></a>   
	    	
<!-----------------------------------------Open - delete visit ---------------->
	      
	<!-- delete visit handler -->	
	    <a 
		class="r_automation" 		
		caller_key = "visit_table" 
		automation_verb="delete"		
		automation_target = "new_visit_edit_section"
		automation_action ="load_form_modal"
		automation_url="[get_from_caller]"   
		   
	    ></a>
	    
	<!-- open visit handler -->	
	    <a 
		class="r_automation" 		
		caller_key = "visit_table" 
		automation_verb="open_document"		
		automation_target = "_blank"
		automation_action ="just_go_to_page"
		automation_url="[get_from_caller]"   
		   
	    ></a>
	    
<!------------------------------- delete handler ------------------------------>
	
	<!-- cancel delete form visit handler -->	
       <a class="r_automation"     
		caller_key = "visit_edit_form" 
		automation_verb="form_cancel"		
		automation_target = "new_visit_edit_section"
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
		automation_target = "new_visit_edit_section"
		automation_action ="clear_modal"
		automation_url=""   
		></a>
		
	<!-- refresh visit list after delete handler -->	
	    <a class="r_automation"     
    	caller_key = "visit_delete_form" 
    	automation_verb="form_post_success"   	
		automation_target = "visit_list_section"  
		automation_action ="reload"
		automation_url=""
			   
		></a>
<!-----------------------------Appointment Automation------------------------------------------>
		  <!-- add new appoint handler -->
        <a  
        class="r_automation" 
        
        caller_key = "new_appointment_button" 
        automation_verb="add_new_appointment"
        automation_target = "new_visit_list_section"
        automation_action ="load_form"
        automation_url="<?php echo site_url('clinic/visits/ajax_schedule/patient_master/'.$patient_id) ; ?>"   
           
        ></a>       
		<a  
        class="r_automation" 
        
        caller_key = "hide_calendar" 
        automation_verb="hide_calendar"
        automation_target = "new_visit_list_section"
        automation_action ="hide_section"
        automation_url=""   
           
        ></a>    
		
	  
 
	    
<!-----------------------------history Automation------------------------------------------>
		
		<!-- add new history handler -->
		<a 	
		class="r_automation" 
		
		caller_key = "new_history_button" 
		automation_verb="add_new_history"
		automation_target = "history_edit_section"
		automation_action ="load_form"
		automation_url="[get_from_caller]"   
		   
	    ></a>
	    
	    <!-- edit handler history  -->	
	    <a 
		class="r_automation" 
		
		caller_key = "history_line_table" 
		automation_verb="edit"
		
		automation_target = "history_edit_section"
		automation_action ="load_form"
		automation_url="[get_from_caller]"   
		   
	    ></a>
	    <!-- delete history  handler -->	
	    <a 
		class="r_automation" 
		
		caller_key = "history_line_table" 
		automation_verb="delete"
		
		automation_target = "history_edit_section"
		automation_action ="load_form"
		automation_url="[get_from_caller]"   
		   
	    ></a>
		<!-- post form  history  handler -->	
       <a class="r_automation" 

		caller_key = "history_line_edit_form" 
		automation_verb="post_form"
		
		automation_target = "[get_from_caller]"
		automation_action ="post_form"
		automation_url="[get_from_caller]"   
	
		></a>
		<!-- cancel form  history handler -->	
       <a class="r_automation" 
	    
		caller_key = "history_line_edit_form" 
		automation_verb="form_cancel"
		
		automation_target = "history_edit_section"
		automation_action ="clear_modal"
		automation_url="[get_from_caller]"   
	
		></a>
		<!-- cancel delete form  history  handler -->	
       <a class="r_automation" 
	    
		caller_key = "history_line_edit_form" 
		automation_verb="form_cancel"
		
		automation_target = "history_edit_section"
		automation_action ="clear_modal"
		automation_url="[get_from_caller]"   
			
		></a>
		<!-- post form delete history  handler -->	
       <a class="r_automation" 
	    
		caller_key = "history_line_delete_form" 
		automation_verb="post_form"
		
		automation_target = "[get_from_caller]"
		automation_action ="post_form"
		automation_url="[get_from_caller]"   
		
		></a>
		
		
		<!-- clear  history  form handler -->	   
		<a class="r_automation" 
		caller_key = "history_line_edit_form"  
		automation_verb="form_post_success"
		
		automation_target = "history_edit_section"
		automation_action ="reload"
		automation_url=""   
		></a>
		<!-- clear delete history form handler -->	   
		<a class="r_automation" 
			caller_key = "history_line_delete_form"  
			automation_verb="form_post_success"
			
			automation_target = "history_edit_section"
			automation_action ="clear_modal"
			automation_url=""   
		></a>
		<!-- refresh history list handler -->	
		    <a class="r_automation" 
	    
	    	caller_key = "history_line_edit_form" 
	    	automation_verb="form_post_success"
	    	
			automation_target = "history_list_section"  
			automation_action ="reload"
			automation_url=""
			   
		></a>
		<!-- refresh history list after delete handler -->	
		    <a class="r_automation" 
	    
	    	caller_key = "history_line_delete_form" 
	    	automation_verb="form_post_success"
	    	
			automation_target = "history_list_section"  
			automation_action ="reload"
			automation_url=""
			   
		></a>	

		
		
	<?php	
//-------------------------------------------appointment Schedule Button-------------------------
r_theme_row_start() ;
r_theme_section_start(12,array());
?>

<div class="table-toolbar hide_with_menu " style="background-color: #f0f7f0;padding:0px;"  >		
			<div class="btn-group pull-left">			
				<button 
				type="submit"
				class="btn blue ajax_action master_font" 
				caller_url= "_"
				caller_id = "new_appointment_button" 
				caller_verb="add_new_appointment"
				caller_target=""
								
			 	><i class="icon-calendar"> </i>
				&nbsp;&nbsp;&nbsp;&nbsp;	
				&nbsp;&nbsp;&nbsp;
				
				<?php echo r_langline('add_appointment_button',$this_concept.".master."); ?> 
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
				</button>
				
				</div>
            <div class="btn-group pull-left">&nbsp;</div>


            <div class="btn-group pull-left">           
                
			 <button 
                type="submit"
                class="btn blue ajax_action master_font" 
                caller_url= "_"
                caller_id = "hide_calendar" 
                caller_verb="hide_calendar"
                caller_target=""
                                
                ><i class="icon-minus"> </i>
              
                </button>
            
			</div>
			<div class="btn-group pull-left">&nbsp;</div>
        <!--

			<div class="btn-group pull-left">			
				<button 
				type="submit"
				class="btn blue ajax_action master_font" 
				caller_url= "<?php echo site_url('clinic/history_lines/ajax_edit/0/'.$patient_id.'/0/')  ; ?>"
				caller_id = "new_history_button" 
				caller_verb="add_new_history"
				caller_target="history_edit_section"
								
			 	><i class="icon-plus"> </i>
			 
				&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;Add New History &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</button>
			
			</div>-->		
</div>
	<?php     
	r_theme_section_end();

r_theme_row_end() ;
// ----------------------------------------------Main Patient EDIT Section ---------------------------------------------- 
	r_theme_row_start() ;                 
    r_theme_section_start(9,array("id"=>"new_visit_list_section",
                                "attributes"=>array(
                                    'class'=>'transparent container hide autxoload' ,
                                    'url'=>site_url('xzxzxzxzxzxzxzxzxzxzx/'.$patient_id) ))); 
    echo '..' ;                         
    r_theme_section_end();

    
    r_theme_row_end() ; 
    
	r_theme_row_start() ; 
    r_theme_section_start(6,array()) ; 
	r_theme_row_start() ;    	
	r_theme_section_start(12,array("id"=>$this_concept."_edit_section","attributes"=>array(
								  'class'=>'autoload '  ,
								  'url'=>site_url($this_controller.'/ajax_edit/'.$patient_id) )));	
	echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
	r_theme_section_end();
     r_theme_row_end() ;
     r_theme_row_start() ;    
          r_theme_section_start(12,array("id"=>"appointment_list",
                                "attributes"=>array(
                                    'class'=>'transparent container hixde autoload' ,
                                            'url'=>site_url('clinic/visits/ajax_table/'.$patient_id."/appointments/0/patient_appointments")  ))); 
    echo '..' ;                         
    r_theme_section_end();   
           r_theme_row_end() ; 
    r_theme_section_end();       
	r_theme_section_start(6,array()) ; 
    
           
    r_theme_row_start() ;     
    r_theme_section_start(12 , array(
                                "id"=>"history_edit_section",
                                   "attributes"=>array(
                                    'class'=>'autoload rezload' ,
                                    'url'=>site_url('clinic/history_lines/ajax_edit/0/'.$patient_id.'/0/') ))); 
                                    
                                
   // echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
    r_theme_section_end();
        r_theme_row_end() ; 
        
            r_theme_row_start() ;     
        r_theme_section_start(12,array("id"=>"history_list_section",
                                "attributes"=>array(
                                    'class'=>'autoload reload' ,
                                    'url'=>site_url('clinic/history_lines/ajax_table/'.$patient_id) ))); 
    echo '<div align="right"><img align="right" src='.base_url("loading.gif").'></div>' ;                         
    r_theme_section_end();
        r_theme_row_end() ; 
    r_theme_section_end();
	r_theme_row_end() ; 
	
// ----------------------------------------------History table Section ----------------------------------------------
	
	r_theme_row_start() ;      
	 
    
	
 	// ----------------------------------------------Visit table Section ----------------------------------------------     
    
	r_theme_section_start(12,array("id"=>"visit_list_section",
    							"attributes"=>array(
    								'class'=>'autoload' ,
                                  'url'=>site_url('clinic/visits/ajax_table/'.$patient_id."/checked_in/0/patient_visits")  ))); 
    echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
    r_theme_section_end();

	// ----------------------------------------------ADD new-history form edit Section ----------------------------------------------

	

  		   
// ----------------------------------------------Visit form edit Section ----------------------------------------------
	
	r_theme_section_start(12 , array(
								"id"=>"new_visit_edit_section",
								"attributes"=>array('class'=>'modal transparent container hide'))
						);
	echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
	r_theme_section_end();

	r_theme_row_end() ;	
	
// ----------------------------------------------schedule table Section ----------------------------------------------
	
	

// ----------------------------------------------add appoint from schedule table Section ----------------------------------------------	

	r_theme_row_start() ;     
    
    r_theme_section_start(12,array("id"=>"appointment_edit_section",
    							"attributes"=>array(
    								'class'=>'modal transparent container hide' ,
                                  	 ))); 
    echo '<div align="center"><img align="center" src='.base_url("loading.gif").'>1111</div>' ;                         
    r_theme_section_end();
	
    
    r_theme_row_end() ; 
	?>

<!-- in case the transaction is new dont show details & respond to saving by reloding details --> 
<?php

	if (!$this_item->ID()==0)
	{
// related to payments schedule
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------
?>

	<!-- List Actions Automation ..................................................................... -->
	
	<?php
	
	
	// ----------------------------------------------  DETAIL SECTION ------------------------------------------------------------------------------------------------------------		
	r_theme_row_start() ;
	
	r_theme_section_start(12,array("id"=>"add_visit_section","attributes"=>array('class'=>'modal transparent container hide' )));			
	echo "here" ; 						  
	r_theme_section_end();
	r_theme_row_end() ;
	
	?>

	<?php 
	r_theme_row_start() ;
	
	r_theme_section_start(12,array("id"=>"service_cost_edit_section","attributes"=>array('class'=>'modal transparent container hide' )));			
	echo "here" ; 						  
	r_theme_section_end();
	r_theme_row_end() ;
	
}
  	
  // ----------------------------------------------  FOOTER -------------------------------------------------------------		
   $this->load->view($public_data["template_folder"].'footer',$public_data);

?> 