<?php


         
        
		$this_lang_folder = "trans" ; 
		$box_color = "green" ; 
	
		// BEGIN PAGE SETTINGS
		$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
		$this->lang->load($this_lang_folder.'/'."strans_main".'_main', $this->admin_public->DATA["system_lang"]);
		
		$public_data["page_title_formatted"] ='<a herf="javascript;"  id="hide_edits" name ="hide_edits" >edit</a><i class="icon-tags big"></i>Visit :  <a href="'.site_url("/clinic/patients/info/".@$visit_data["visit_patient_id"]."/").'">'.@$visit_data["patient_name"].'</a>'
		
											
											.'<span style="margin-left:50px"> :: '.@$visit_data["visit_date"].' </span>';		
		
		$public_data["page_title"] = r_langline('page_title',$this_concept.".master.");
		$public_data["page_subtitle"] =r_langline('page_subtitle',$this_concept.".master.");  
		$public_data["page_description"] = r_langline('page_description',$this_concept.".master.");		  
		$public_data["page_scripts"] = array("bootstrap","chart" ); 	//
	
		
		$public_data["bread_crumbs"] = array() ; 
		$public_data["show_toolbox"]= "yes" ;  
		echo loadView($public_data["template_folder"].'header',$public_data); 		 
		echo loadView("page_title_view",$public_data);
	
	?>		
	
	
    
		  
<!-- BODY --> 
        
    <?php   
    
                  r_theme_row_start() ;   
                    r_theme_section_start(12,array())
                    ?>
                        
            <div class="tabbable tabbable-custom ">
                                 <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab_1_1" data-toggle="tab"><i class=""></i>
                                       
                                     <?php echo  r_langline('visit_info_tab',"visit.master."); ?>
                                        
                                    </a></li>
                                    
                                    <li><a href="#tab_1_2" data-toggle="tab"><i class=""></i>
                                    
                                       <?php echo  r_langline('service_measurment_tab',"visit.master."); ?>   
                                    
                                    </a></li>
                                    
                                      <li><a href="#tab_1_3" data-toggle="tab"><i class=""></i>
                                    
                                       <?php echo  r_langline('prescription_tab',"visit.master."); ?> 
                                    
                                    </a></li>
                                    
                                 <!--   <li><a href="#tab_1_4" data-toggle="tab"><i class=""></i>
                                    
                                       <?php echo  r_langline('patient_tab',"visit.master."); ?>    
                                    
                                    </a></li>
                                    -->
                                </ul>
            
            
            <div class="tab-content">
                    
                    <div class="tab-pane active" id="tab_1_1">
                     <?php  // Patient Information Tab --------------------------------------------------------------------------------------------------
                     
                        r_theme_row_start() ;     
		
		
                		r_theme_section_start(12,array()) ; 
                		r_theme_row_start() ;     
                		r_theme_section_start(12,array("id"=>$this_concept."_edit_section","attributes"=>array(
                									  'class'=>'autoload' ,
                									  'url'=>site_url($this_controller.'/ajax_edit'). '/' . $visit_id )));	
                		echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
                		r_theme_section_end();
                        r_theme_row_end() ;
	    
                        r_theme_row_start() ; 
                        r_theme_section_start(12,array("id"=>"comment_edit_section",
                                            "attributes"=>array('class'=>'autoload transparent container' ,
                                            'url'=>site_url('clinic/comments/ajax_edit/0/'.$visit_id.'/0' ))));
                        echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                        r_theme_section_end();
                        r_theme_row_end() ;
        
                        r_theme_row_start() ;
                        r_theme_section_start(12,array("id"=>"comment_list_section","attributes"=>array(
                                                      'class'=>'autoload' ,
                                                      'url'=>site_url("clinic/comments/ajax_table/".$visit_id )))); 
                        echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                        r_theme_section_end();
                        r_theme_row_end() ;
                        
                        r_theme_section_end();
                        r_theme_row_end() ;
                        r_theme_row_start() ;   
                        r_theme_section_start(12,array("id"=>"prescription_edit_section",
                            "attributes"=>array('class'=>'transparent container autoload',
                            'url'=>site_url('clinic/prescriptions/ajax_edit/0/'.$visit_id.'/0' ))));
                        echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                        r_theme_section_end();
                        r_theme_row_end() ;     
        
        
                        r_theme_row_start() ;
                        r_theme_section_start(12,array("id"=>"prescription_list_section","attributes"=>array(
                                                      'class'=>'autoload' ,
                                                      'url'=>site_url('clinic/prescriptions/ajax_table/'.$visit_id ))));    
                        echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                        r_theme_section_end();           
                        r_theme_row_end();

						//----------------------------------------------------------------
                        
                        r_theme_row_start() ;   
                        r_theme_section_start(12,array("id"=>"test_request_edit_section",
                            "attributes"=>array('class'=>'transparent container autoload',
                            'url'=>site_url('clinic/test_requests/ajax_edit/0/'.$visit_id.'/0' ))));
                        echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                        r_theme_section_end();
                        r_theme_row_end() ; 
						
                        r_theme_row_start() ;
                        r_theme_section_start(12,array("id"=>"test_request_list_section","attributes"=>array(
                                                      'class'=>'autoload' ,
                                                      'url'=>site_url('clinic/test_requests/ajax_table/'.$visit_id ))));    
                        echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                        r_theme_section_end();           
                        r_theme_row_end();
						
						//----------------------------------------------------------------
                        
                        r_theme_row_start() ;   
                        r_theme_section_start(12,array("id"=>"test_result_edit_section",
                            "attributes"=>array('class'=>'transparent container autoload',
                            'url'=>site_url('clinic/test_results/ajax_edit/0/'.$visit_id.'/0' ))));
                        echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                        r_theme_section_end();
                        r_theme_row_end() ; 
						
                        r_theme_row_start() ;
                        r_theme_section_start(12,array("id"=>"test_result_list_section","attributes"=>array(
                                                      'class'=>'autoload' ,
                                                      'url'=>site_url('clinic/test_results/ajax_table/'.$visit_id ))));    
                        echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                        r_theme_section_end();           
                        r_theme_row_end();
                        ?>
                 </div>
                     
                     
                    <div class="tab-pane " id="tab_1_2">
                   <?php 
                      r_theme_row_start() ;   
                        r_theme_section_start(12,array()) ; 
         
                         r_theme_row_start() ;
                        r_theme_section_start(12,array("id"=>"vital_sign_value_edit_section",
                                                "attributes"=>array('class'=>' transparxent cxontainer autoload' ,
                                                'url'=>site_url('clinic/vital_sign_value_s/ajax_edit/0/'.$visit_id.'/0' ))));
                        echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                        r_theme_section_end();
                         r_theme_row_end();   
                        
         
                        r_theme_row_start() ;
                        r_theme_section_start(12,array("id"=>"vital_sign_value_list_section","attributes"=>array(
                                                      'class'=>'autoload' ,
                                                      'url'=>site_url("clinic/vital_sign_value_s/ajax_table/".$visit_id ))));   
                        echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                        r_theme_section_end();
                        r_theme_row_end();
        
                    echo "<br>"; 
                        r_theme_row_start() ;
                        r_theme_section_start(12,array("id"=>"visit_service_edit_section",
                                                    "attributes"=>array('class'=>'autoload transparent container' ,
                                                    'url'=>site_url('clinic/visit_service_s/ajax_edit/0/'.$visit_id.'/0' ))));
                        echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                        r_theme_section_end();
                        r_theme_row_end();
        
                        r_theme_row_start() ;
                        r_theme_section_start(12,array("id"=>"visit_service_list_section","attributes"=>array(
                                                      'class'=>'autoload' ,
                                                      'url'=>site_url("clinic/visit_service_s/ajax_table/".$visit_id ))));  
                        echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
                        r_theme_section_end();
                        r_theme_row_end();
                
                        r_theme_section_end(); // end right ection 
                       r_theme_row_end(); // final end basic row 
        
               ?>
                 </div>
                     
                     
				<div class="tab-pane" id="tab_1_3" >
                   <?php 
                      //  r_theme_row_start() ;   
                       // r_theme_section_start(12,array()) ; 
                        
                      
						                                              
                    //    r_theme_section_end();     
                     //   r_theme_row_end();
                        
                        
                        
                       ?>
					</div>
                       
                    <div class="tab-pane " id="tab_1_4">
                            echo "....s." ; 
                    </div>
          
          </div></div>
                
       
	   <?php 
		r_theme_section_end();
        r_theme_row_end();
        
       // ---------------------------------------------- comment FORM DELETE SECTION -------------------------------------------------------
		r_theme_row_start() ; 	
		r_theme_section_start(8,array("id"=>"comment_delete_section",
							"attributes"=>array('class'=>'modal hide transparent container' ,
						)));
		echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;  						
		r_theme_section_end();
		r_theme_row_end() ;
        
        
           // ---------------------------------------------- comment FORM DELETE SECTION -------------------------------------------------------
          r_theme_row_start() ;   
        r_theme_section_start(8,array("id"=>"_delete_section",
                            "attributes"=>array('class'=>'modal hide transparent container' ,
                        )));
        echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;                         
        r_theme_section_end();
        r_theme_row_end() ;
     
        ?>
        
        
		  <!-- HANDLERS ------------------------------------------------------------------------------------------------------------------------->
		  <!-- 
        
        PLEASE MAKE HANLDERS LIKE THIS IN ALL HANLDERS  
            - TABLE - >EDIT 
            - EDIT FORM - CANCEL 
            - EDIT FORM - POST 
            - EDIT FORM pOST SUCCES ( many hanlders )
            
            - TABLE - DELETE 
            - DELETE FORM POST 
            - DELETE FORM POST SUCCESS ( many hanlders ) 
        -->        
    
	      <!-- VISIT ACTIONS HANLDERS -->
        <a  class="r_automation"   caller_key = "visit_edit_form" automation_verb="post_form"
        
        automation_action ="post_form"  
        automation_target = "[get_from_caller]"
        automation_url="[get_from_caller]"
           
        ></a>
        
       <!-- refresh page list handler -->   
         <a  class="r_automation"   caller_key = "visit_edit_form" automation_verb="form_post_success"

            automation_target = "_self"  
            automation_action ="just_go_to_page"
            automation_url="<?php echo site_url('clinic/visits/info/').'/'.$visit_id ; ?>"
               
        ></a>
         
   
    <!-------------------------------- comment Automation------------------------------------------>
       <!-- COMMENT  ACTIONS HANLDERS -->
       <a   class="r_automation"        
            caller_key = "comment_table" 
            automation_verb="edit"      
            
            automation_target = "comment_edit_section"
            automation_action ="load_form"
            automation_url="[get_from_caller]"   
           
        ></a>
       
        
       <!-- post form  comment  handler -->    
       <a class="r_automation"      
        
        caller_key = "comment_edit_form" 
        automation_verb="post_form"             
        
        automation_target = "[get_from_caller]"
        automation_action ="post_form"
        automation_url="[get_from_caller]"   
    
        ></a>
         
        <a class="r_automation" 
    
            caller_key = "comment_edit_form" 
            automation_verb="form_post_success"     
            automation_target = "comment_edit_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>
        
                <!-- refresh comment list handler -->   
            <a class="r_automation" 
        
            caller_key = "comment_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "comment_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>
            
        <!-- delete comment handler --> 
        <a 
        
        class="r_automation"        
        caller_key = "comment_table" 
        automation_verb="delete"        
        automation_target = "comment_delete_section"
        automation_action ="load_form_modal"
        automation_url="[get_from_caller]"   
       
        ></a>
        <!-- post form  comment  handler -->    
       <a class="r_automation"      
        
        caller_key = "comment_delete_form" 
        automation_verb="post_form"             
        automation_target = "[get_from_caller]"
        automation_action ="post_form"
        automation_url="[get_from_caller]"   
    
        ></a>

           <a class="r_automation" 
        
                caller_key = "comment_delete_form" 
                automation_verb="post_form"
                
                automation_target = "[get_from_caller]"
                automation_action ="post_form"
                automation_url="[get_from_caller]"   
            
        ></a>
            
        <!-- clear delete comment form handler -->     
        <a class="r_automation" 
            caller_key = "comment_delete_form"  
            automation_verb="form_post_success"
            
            automation_target = "comment_delete_section"
            automation_action ="clear_modal"
            automation_url=""   
        ></a>
        

        <!-- refresh comment list after delete handler -->  
            <a class="r_automation" 
        
            caller_key = "comment_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "comment_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>    	

       <a class="r_automation" 
        
            caller_key = "comment_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "comment_edit_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>        

        
             
<!---------------------------------------- Vital Signs ---------------------------------------------  -->
    <!-- VITAL SIGNES HANDLER -->
        
        
        <!-- edit handler vital_sign_value  --> 
     
        <a 
        class="r_automation" 
        
        caller_key = "vital_sign_value_table" 
        automation_verb="edit"
        
        automation_target = "vital_sign_value_edit_section"
        automation_action ="load_form"
        automation_url="[get_from_caller]"   
           
        ></a>
        
         <!-- post form  vital_sign_value  handler -->   
       <a class="r_automation" 
    
        caller_key = "vital_sign_value_edit_form" 
        automation_verb="post_form"
        
        automation_target = "[get_from_caller]"
        automation_action ="post_form"
        automation_url="[get_from_caller]"   
        
        ></a>
       
    
        <!-- refresh vital signs edit section handler -->   
            <a class="r_automation" 
        
            caller_key = "vital_sign_value_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "vital_sign_value_edit_section"  
            automation_action ="load_form"
            automation_url="<?php echo site_url('clinic/vital_sign_value_s/ajax_edit/0/'.$visit_id.'/0' ); ?>" 
               
        ></a> 
        
           <!-- refresh vital_sign_value list handler -->  
            <a class="r_automation" 
        
            caller_key = "vital_sign_value_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "vital_sign_value_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>
        
        
     
        <!-- delete vital_sign_value  handler -->   
            <a 
            class="r_automation" 
            
            caller_key = "vital_sign_value_table" 
            automation_verb="delete"
            
            automation_target = "_delete_section"
            automation_action ="load_form_modal"
            automation_url="[get_from_caller]"   
               
            ></a>
        

        <!-- post form delete vital_sign_value  handler --> 
       <a class="r_automation" 
    
        caller_key = "vital_sign_value_delete_form" 
        automation_verb="post_form"
        
        automation_target = "_delete_section"
        automation_action ="post_form"
        automation_url="[get_from_caller]"   
    
        ></a>
       
        
        <!-- clear delete vital_sign_value form handler -->    
        <a class="r_automation" 
            caller_key = "vital_sign_value_delete_form"  
            automation_verb="form_post_success"
            
            automation_target = "_delete_section"
            automation_action ="clear_modal"
            automation_url=""   
        ></a>
        
  
        <!-- refresh vital_sign_value list after delete handler --> 
            <a class="r_automation" 
        
            caller_key = "vital_sign_value_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "vital_sign_value_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>
        
        
        <!-- PRESCRIPTION HANDLERS 
            
            <!-------------------------------------------Prescription Automation-------------------------------->
    
       
        
        <!-- edit handler prescription  --> 
        <a 
        class="r_automation" 
        
        caller_key = "prescription_table" 
        automation_verb="edit"
        
        automation_target = "prescription_edit_section"
        automation_action ="load_form"
        automation_url="[get_from_caller]"   
           
        ></a>
    
                  <!-- post form  prescription  handler -->   
           <a class="r_automation" 
        
                caller_key = "prescription_edit_form" 
                automation_verb="post_form"
                
                automation_target = "[get_from_caller]"
                automation_action ="post_form"
                automation_url="[get_from_caller]"   
            
        ></a>
    
     <!-- refresh prescription edit section handler -->  
            <a class="r_automation" 
        
            caller_key = "prescription_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "prescription_edit_section"  
              automation_action ="load_form"
            automation_url="<?php echo site_url('clinic/prescriptions/ajax_edit/0/'.$visit_id.'/0' ); ?>" 
               
        ></a>
        
  
        
          <!-- refresh prescription list handler -->  
            <a class="r_automation" 
        
            caller_key = "prescription_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "prescription_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>
        
        <a 
        class="r_automation" 
        
        caller_key = "prescription_table" 
        automation_verb="delete"
        
        automation_target = "_delete_section"
        automation_action ="load_form_modal"
        automation_url="[get_from_caller]"   
           
        ></a>

        
        <!-- post form delete prescription  handler --> 
           <a class="r_automation" 
        
                caller_key = "prescription_delete_form" 
                automation_verb="post_form"
                
                automation_target = "[get_from_caller]"
                automation_action ="post_form"
                automation_url="[get_from_caller]"   
            
        ></a>
        
               <a class="r_automation" 
        
            caller_key = "prescription_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "prescription_edit_section"  
              automation_action ="load_form"
            automation_url="<?php echo site_url('clinic/prescriptions/ajax_edit/0/'.$visit_id.'/0' ); ?>" 
               
        ></a>
        
        <!-- clear delete prescription form handler -->    
        <a class="r_automation" 
            caller_key = "prescription_delete_form"  
            automation_verb="form_post_success"
            
            automation_target = "_delete_section"
            automation_action ="clear_modal"
            automation_url=""   
        ></a>
        
      
        <!-- refresh prescription list after delete handler --> 
            <a class="r_automation" 
        
            caller_key = "prescription_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "prescription_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>   
        

       
        <!---------------------------------- visit Service Automation------------------------------------------>
        
           <a  class="r_automation"   
           caller_key = "visit_service_table"   
           automation_verb="edit"
        
            automation_target = "visit_service_edit_section"
            automation_action ="load_form"
            automation_url="[get_from_caller]"   
       
     	   ></a>
       
      
       
        <a class="r_automation"   
        	caller_key = "visit_service_edit_form" 
        	automation_verb="post_form"
                
            automation_target = "[get_from_caller]"
            automation_action ="post_form"
            automation_url="[get_from_caller]"   
        
        ></a>
        
        
        <!-- refresh visit Service edit section handler --> 
            <a class="r_automation"   caller_key = "visit_service_edit_form"   automation_verb="form_post_success"
            
            automation_target = "visit_service_edit_section"  
            automation_action ="load_form"
            automation_url="<?php echo site_url('clinic/visit_service_s/ajax_edit/0/'.$visit_id.'/0' ); ?>"  
               
        ></a>
        
          <!-- refresh visit_service list handler --> 
        <a class="r_automation"  caller_key = "visit_service_edit_form"        automation_verb="form_post_success"
            
            automation_target = "visit_service_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>
       
        <!-- edit handler visit_service  -->    
     
        <!-- delete visit_service  handler -->  
        <a  class="r_automation"   
        	caller_key = "visit_service_table"  
        	automation_verb="delete" 

            automation_target = "_delete_section"
            automation_action ="load_form_modal"
            automation_url="[get_from_caller]"   
           
        ></a>
       
        <!-- cancel delete form  visit_service  handler --> 
           <a class="r_automation" 
        
                caller_key = "visit_service_delete_form" 
                automation_verb="form_cancel"
                
                automation_target = "_delete_section"
                automation_action ="clear_modal"
                automation_url="[get_from_caller]"   
            
        ></a>
        <!-- post form delete visit_service  handler -->    
           <a class="r_automation" 
        
                caller_key = "visit_service_delete_form" 
                automation_verb="post_form"
                
                automation_target = "[get_from_caller]"
                automation_action ="post_form"
                automation_url="[get_from_caller]"   
            
        ></a>
    
        <!-- clear delete visit_service form handler -->       
        <a class="r_automation" 
            caller_key = "visit_service_delete_form"  
            automation_verb="form_post_success"
            
            automation_target = "visit_service_edit_section"
            automation_action ="load_form"
            automation_url="<?php echo site_url('clinic/visit_service_s/ajax_edit/0/'.$visit_id.'/0' ); ?>"  
        ></a>
        
           <!-- clear delete visit_service form handler -->       
        <a class="r_automation" 
            caller_key = "visit_service_delete_form"  
            automation_verb="form_post_success"
            
            automation_target = "_delete_section"
            automation_action ="clear_modal"
            automation_url=""   
        ></a>
      
        <!-- refresh visit_service list after delete handler -->    
            <a class="r_automation" 
        
            caller_key = "visit_service_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "visit_service_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>   

<!--------------------------------------------- Test results Handler-------------------------------------
	
	 <!-- edit handler prescription  --> 
        <a 
        class="r_automation" 
        
        caller_key = "test_result_table" 
        automation_verb="edit"
        
        automation_target = "test_result_edit_section"
        automation_action ="load_form"
        automation_url="[get_from_caller]"   
           
        ></a>
    
                  <!-- post form  test_result  handler -->   
           <a class="r_automation" 
        
                caller_key = "test_result_edit_form" 
                automation_verb="post_form"
                
                automation_target = "[get_from_caller]"
                automation_action ="post_form"
                automation_url="[get_from_caller]"   
            
        ></a>
    
     <!-- refresh test_result edit section handler -->  
            <a class="r_automation" 
        
            caller_key = "test_result_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_result_edit_section"  
              automation_action ="load_form"
            automation_url="<?php echo site_url('clinic/test_results/ajax_edit/0/'.$visit_id.'/0' ); ?>" 
               
        ></a>
        
  
        
          <!-- refresh test_result list handler -->  
            <a class="r_automation" 
        
            caller_key = "test_result_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_result_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>
        
        <a 
        class="r_automation" 
        
        caller_key = "test_result_table" 
        automation_verb="delete"
        
        automation_target = "_delete_section"
        automation_action ="load_form_modal"
        automation_url="[get_from_caller]"   
           
        ></a>

        
        <!-- post form delete test_result  handler --> 
           <a class="r_automation" 
        
                caller_key = "test_result_delete_form" 
                automation_verb="post_form"
                
                automation_target = "[get_from_caller]"
                automation_action ="post_form"
                automation_url="[get_from_caller]"   
            
        ></a>
        
               <a class="r_automation" 
        
            caller_key = "test_result_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_result_edit_section"  
              automation_action ="load_form"
            automation_url="<?php echo site_url('clinic/test_results/ajax_edit/0/'.$visit_id.'/0' ); ?>" 
               
        ></a>
        
        <!-- clear delete test_result form handler -->    
        <a class="r_automation" 
            caller_key = "test_result_delete_form"  
            automation_verb="form_post_success"
            
            automation_target = "_delete_section"
            automation_action ="clear_modal"
            automation_url=""   
        ></a>
        
      
        <!-- refresh test_result list after delete handler --> 
            <a class="r_automation" 
        
            caller_key = "test_result_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_result_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>   

<!--------------------------------------------- Test requests Handler-------------------------------------
	
	 <!-- edit handler prescription  --> 
        <a 
        class="r_automation" 
        
        caller_key = "test_request_table" 
        automation_verb="edit"
        
        automation_target = "test_request_edit_section"
        automation_action ="load_form"
        automation_url="[get_from_caller]"   
           
        ></a>
    
                  <!-- post form  test_request  handler -->   
           <a class="r_automation" 
        
                caller_key = "test_request_edit_form" 
                automation_verb="post_form"
                
                automation_target = "[get_from_caller]"
                automation_action ="post_form"
                automation_url="[get_from_caller]"   
            
        ></a>
    
     <!-- refresh test_request edit section handler -->  
            <a class="r_automation" 
        
            caller_key = "test_request_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_request_edit_section"  
              automation_action ="load_form"
            automation_url="<?php echo site_url('clinic/test_requests/ajax_edit/0/'.$visit_id.'/0' ); ?>" 
               
        ></a>
        
  
        
          <!-- refresh test_request list handler -->  
            <a class="r_automation" 
        
            caller_key = "test_request_edit_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_request_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a>
        
        <a 
        class="r_automation" 
        
        caller_key = "test_request_table" 
        automation_verb="delete"
        
        automation_target = "_delete_section"
        automation_action ="load_form_modal"
        automation_url="[get_from_caller]"   
           
        ></a>

        
        <!-- post form delete test_request  handler --> 
           <a class="r_automation" 
        
                caller_key = "test_request_delete_form" 
                automation_verb="post_form"
                
                automation_target = "[get_from_caller]"
                automation_action ="post_form"
                automation_url="[get_from_caller]"   
            
        ></a>
        
               <a class="r_automation" 
        
            caller_key = "test_request_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_request_edit_section"  
              automation_action ="load_form"
            automation_url="<?php echo site_url('clinic/test_requests/ajax_edit/0/'.$visit_id.'/0' ); ?>" 
               
        ></a>
        
        <!-- clear delete test_request form handler -->    
        <a class="r_automation" 
            caller_key = "test_request_delete_form"  
            automation_verb="form_post_success"
            
            automation_target = "_delete_section"
            automation_action ="clear_modal"
            automation_url=""   
        ></a>
        
      
        <!-- refresh test_request list after delete handler --> 
            <a class="r_automation" 
        
            caller_key = "test_request_delete_form" 
            automation_verb="form_post_success"
            
            automation_target = "test_request_list_section"  
            automation_action ="reload"
            automation_url=""
               
        ></a> 
          
        
        <a  class="r_automation"  
         caller_key = "visit_appo"
          automation_verb="post_formm"
        
        automation_action ="post_form"  
        automation_target = "[get_from_caller]"
        automation_url="[get_from_caller]"
           
        ></a>
        <a class="r_automation" 
        
            caller_key = "visit_appo" 
            automation_verb=""
            
            automation_target = "[get_from_caller]"  
              automation_action ="load_form"
            automation_url="[get_from_caller]"
               
        ></a>
	   <?php 
		
		// ----------------------------------------------  FOOTER -------------------------------------------------------------		 
		
		echo loadView($public_data["template_folder"].'footer',$public_data); 		
	?> 