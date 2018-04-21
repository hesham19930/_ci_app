<?php

	// BEGIN PAGE SETTINGS
//	$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
	$this->lang->load("clinic/visit_main", $this->admin_public->DATA["system_lang"]);

	$read_only = 0 ;  			 	 
		// take the value from the previous form submit
	
	$this_form_title = "" ; 
	if (isset($form_title)) $this_form_title = $form_title ;  
	
	$input_values = array() ; // this is our array 
	//$input_values["from_date"] =  date('Y-01-01 H:i:s');
	
	$input_values["visit_date"] = ""  ;
	$input_values["visit_date2"] = ""  ;
	$input_values["no_show"] = ""  ; 
    $input_values["patient_name"] = ""  ;
    
	$input_values["arrival"] = ""  ; 
	$input_values["checkedin"] = ""  ;
    $input_values["cancelled"] = ""  ;
    $input_values["visit_visit_type_id"] = ""  ;
    
     

	
	// poplulating this one from the controller first time 
	

	
	
	if (set_value("is_an_action") == "yes")
	{
		foreach ($input_values as $key => $value) 
		{
			$input_values[$key] = set_value($key) ;

		}	
		
		//echo "action" ; 
	}
	else {
			 
			
	
	}

        $this_form_title = "Search For visit" ; 
        $this_form_title = "" ; 
			r_theme_box_start
			($this_form_title,12,
				array("body_id"=>"edit_".$this_concept."_body",
						"box_id"=>"edit_".$this_concept."_box","back_color"=>"blue",
						"tools"=>"")
			);
	
	
		
	//	echo form_error("patient_name") ;  
		$url_extend = "" ; 	
		
		
		r_theme_startform(   "search_form",  "search_form" ,"","post"); //echo form_open('form');
		$lang_section ="item.form_data.";  
		
		echo '<div class="hide_with_menu" >';

		
		//  \/ ______________________________ _______________________________________________________________________\/

			


			
		//  /\_____________________________________________________________________________________________________/\

			echo '<div class="controls-row">'; 	
			echo '<div class="span3 m-wrap">';
			
			$field_name = "visit_date" ;
			 $SubTip = "";
			if (form_error($field_name)!="")
			{	$SubTip = r_theme_input_error('visit date Required');	}
			$Label = r_langline($field_name.'_label',$lang_section);
		    
			r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0,"date-picker");
			   	
			echo '</div>'; 



	
			echo '<div class="span3 m-wrap">';
			
			$field_name = "visit_date2" ;
			 $SubTip = "";
			if (form_error($field_name)!="")
			{	$SubTip = r_theme_input_error('visit date Required');	}
			$Label = r_langline($field_name.'_label',$lang_section);
		    
			r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0,"date-picker");
			   	
			echo '</div></div>'; 



               echo '<div class="controls-row">';  
            
                        echo '<div class="span11 m-wrap">';
            $field_name = "visit_visit_type_id" ;

                    $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
                    if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
                    $Label = r_langline($field_name.'_label',$lang_section);

                    $lookup_class= "bi_visit_type" ;
                    $lookup_filter="" ;
                    r_theme_InputSelect($field_name , $input_values[$field_name ], $Label,r_listbox_items($lookup_class,$lookup_filter),"3",$SubTip,0,1);

                    echo "</div></div><br>";
                    
                    
                    echo '<div class="controls-row">';  
                    
                                echo '<div class="span11 m-wrap">';
                    
                                
                    
                                $field_name = "patient_name" ;
                    
                                 $SubTip = "";
                    
                                if (form_error($field_name)!="")
                    
                                {   $SubTip = r_theme_input_error('patient name Required'); }
                    
                                $Label ="Patient Name :" ; 
                                r_theme_InputText($field_name,$input_values[$field_name],$Label , "large",$SubTip ,$read_only ,0,1);     
                    
                                
                    
                                echo '</div></div>'; 
       
       echo '<div class="controls-row">';   
            echo '<div class="span3 m-wrap">';
            
              $field_name = "no_show" ;
        
             
             //if($input_values[$field_name]==="") {   $input_values[$field_name] =0;    }
             
             $SubTip = " ";
             $Label =  "No Show" ;
             if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
             
             
             r_theme_InputCheck($field_name,$input_values[$field_name],$Label , 6,$SubTip ,$read_only);
            
            echo '</div>';
            echo '<div class="span3 m-wrap">';
            
            
        $field_name = "arrival" ;
        
             
             //if($input_values[$field_name]==="") {   $input_values[$field_name] =0;    }
             
             $SubTip = " ";
             $Label =  "Arrivals " ;
             if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
             
             
             r_theme_InputCheck($field_name,$input_values[$field_name],$Label , 6,$SubTip ,$read_only);
            
            echo '</div>'; 
        echo '</div>'; 
            echo '<div class="controls-row">';  
    echo '<div class="span3 m-wrap">';
            
            
        $field_name = "cancelled" ;
        
             
             //if($input_values[$field_name]==="") {   $input_values[$field_name] =0;    }
             
             $SubTip = " ";
             $Label =  "Cancelled " ;
             if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
             
             
             r_theme_InputCheck($field_name,$input_values[$field_name],$Label , 6,$SubTip ,$read_only);
            
            echo '</div>'; 

            echo '<div class="span3 m-wrap">';
            
            
        $field_name = "checkedin" ;
        
             
             //if($input_values[$field_name]==="") {   $input_values[$field_name] =0;    }
             
             $SubTip = " ";
             $Label =  "Checked ins " ;
             if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
             
             
             r_theme_InputCheck($field_name,$input_values[$field_name],$Label , 6,$SubTip ,$read_only);
            
            echo '</div></div><br>';                          
        //  /\_____________________________________________________________________________________________________/\			
		
		// obligatory // _____________________________________________________________________________________________________	
		r_theme_InputHidden( "is_an_action", "yes");
		
		?>
		
		
		<div class="table-toolbar pull-right">
		
		<div class="btn-group">
		<button  
				type="submit" 
				
				id="item_filters_go"
				name="item_filters_go"
				
				class="btn blue ajax_action right master_font autoaction"
				
				caller_verb="post_form"
				caller_id="search_form"
				caller_url="<?php echo site_url($this_controller."/find_form"). $url_extend  ; ?>" 
				
				caller_target="_"				
				form_type="POST"		
				form_name="search_form"
				
			>
			<?php echo r_langline('search_button',$this_concept.".master."); ?>
		</button>
	
	
		
		</div></div>
		
		<!--
		<div class="table-toolbar pull-right">
		<div class="btn-group">
		<button  
				type="submit" 
				
				id="item_filters_go"
				name="item_filters_go"
				
				class="btn green ajax_action right master_font autoaction"
				
				caller_verb="anyverb"
				caller_id="add_patient_button"
				caller_url="<?php echo site_url('clinic/patients/info'). $url_extend  ; ?>" 
				
				caller_target="_"				
				form_type="POST"		
				form_name="search_form"
				
			>
			<?php echo "Add New Patient" ; ?>
		</button>
	
	
		
		</div></div>
	   -->
		
		
		
		
		
		<?php		
		r_theme_endform();
	 
	 			
		r_theme_box_end();	
			 r_theme_row_end() ;
          r_theme_row_start() ;
       r_theme_section_start(8,array("id"=>"appointmentt_section",
                           "attributes"=>array('class'=>'modal hide transparent container' ,
                       )));
       echo '<div align="center"><img align="center" src='.base_url("loading.gif").'></div>' ;
       r_theme_section_end();
   r_theme_row_end() ;
       		
		?>
		
		
        <a class="r_automation"

            caller_key = "modify_appointment_button"
            automation_verb="click"
            automation_target = "appointmentt_section"
              automation_action ="load_form_modal"
            automation_url="[get_from_caller]"

        ></a>
               
               
               
               
		  <a class="r_automation" 
        
            caller_key = "modify_appointment_form" 
            automation_verb="form_cancel"
            
            automation_target = "appointmentt_section"
            automation_action ="clear_modal"
            automation_url="[get_from_caller]"   
            
            ></a> 
            
            <a class="r_automation"
            caller_key = "modify_appointment_form"
            automation_verb="post_form"
            automation_action ="post_form"
            automation_target = 'appointmentt_section'
           automation_url="[get_from_caller]"   
       
            ></a>
	
    <a class="r_automation"
            caller_key = "modify_appointment_form"
            automation_verb="form_post_success"

            automation_target = "appointmentt_section"
            automation_action ="clear_modal"
            automation_url=""
        ></a>




 <!-- revert -->
 
 <a class="r_automation"

            caller_key = "change_status_button"
            automation_verb="change_status"

            automation_target = "appointmentt_section"
              automation_action ="load_form_modal"
            automation_url="[get_from_caller]"

        ></a>

        <a class="r_automation" 
        
            caller_key = "change_status_form" 
            automation_verb="form_cancel"
            
            automation_target = "appointmentt_section"
            automation_action ="clear_modal"
            automation_url="[get_from_caller]"   
            
            ></a> 
            
     <a class="r_automation"
            caller_key = "change_status_form"
            automation_verb="post_form"
            automation_action ="post_form"
            automation_target = 'appointmentt_section'
          automation_url="[get_from_caller]"   
        ></a>


    <a class="r_automation"
            caller_key = "change_status_form"
            automation_verb="form_post_success"

            automation_target = "appointmentt_section"
            automation_action ="clear_modal"
            automation_url=""
        ></a>
        
        