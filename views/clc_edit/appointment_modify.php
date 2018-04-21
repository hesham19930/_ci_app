<?php

        $this_concept = "visit" ; 
    $this_controller = "clinic/".$this_concept."s";
    
    // BEGIN PAGE SETTINGS
    $this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
    $this->lang->load('clinic/'.$this_concept.'_main', $this->admin_public->DATA["system_lang"]);

    $read_only = 0 ;                 
        // take the value from the previous form submit
    $item = $this_item ;            
    $input_values = array() ; // this is our array 
      
          $input_values ["visit_date"] = "" ; 
      
          $input_values ["patient_name"] = "" ;
     
        $input_values ["visit_cost"] = "" ;
        
        $input_values["visit_visit_type_id"] = ""  ; 
        if (set_value("is_an_action") == "yes")
        {
                //echo "ACTION=yes" ;
                foreach ($item->business_data as $key => $value) {
                    $input_values[$key] = set_value($key) ;
                }   
        }
        else
        {
                foreach ($item->business_data as $key => $value) {
                    $input_values[$key] = $value ; 
                }
        
         if ( $item->ID()!=0)
        {
            $title = r_langline('edit_title',$this_concept.".form_data.") ;
        }
        else {
            $title = r_langline('appointment_title',$this_concept.".form_data.") ;
        } 
        
        
       if ($disable_edit) $read_only = 1 ; 
      
      
      
        }
        
        $disable_date_change = 1; 
        if (isset($enable_date_change))
        {
            if ($enable_date_change==1) $disable_date_change = 0 ; 
        }
         
        
              r_theme_box_start
            ("CHANGE APPOINTMENT",12,
                array("body_id"=>"edit_".$this_concept."_body",
                        "box_id"=>"edit_".$this_concept."_box",
                        "tools"=>"")
            );  
        r_theme_startform(   "appointment_form",  "appointment_form" ,"","post"); //echo form_open('form');
        $lang_section =$this_concept.".form_data.";  
        
        $field_name = "visit_id" ;
        
         
                
                r_theme_InputHidden($field_name, $input_values[$field_name]);
       
                $field_name = "visit_patient_id" ;
                
                        $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
                        if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
                        $Label =  r_langline($field_name.'_label',$lang_section);
                        $SubTip = "" ;  
                        $Label = r_langline($field_name.'_label',$lang_section);
                        
                        r_theme_InputHidden($field_name, $input_values[$field_name]);
                       

                $field_name = "patient_name" ;
                
                        $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
                        if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
                        $Label =  r_langline($field_name.'_label',$lang_section);
                        $SubTip = "" ;  
                        $Label = r_langline($field_name.'_label',$lang_section);
                        
                        
                        r_theme_InputText($field_name,$input_values[$field_name],$Label , "large",$SubTip ,1);


        // ID FIELD  // _____________________________________________________________________________________________________       
        // NO ID 
        //  // _____________________________________________________________________________________________________
        if (isset($message))
		{
        if ($message!="") echo $message ; 
		}
       // echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
        //echo '<div class="span11 m-wrap">';



        
      
        $field_name = "visit_date" ;
        
        $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
        if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
        $Label = r_langline($field_name.'_label',$lang_section);
                    
                    if ($disable_date_change==1)
                    {
                        r_theme_InputText($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$disable_date_change);
                    }
                    else {
                         r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$disable_date_change,"date-picker");
                    }
        //
            
  
           $field_name = "visit_time" ;
           
           $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
           if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
           $Label = r_langline($field_name.'_label',$lang_section);
                       
          r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0,"mask_time2");   
               
  
           $field_name = "visit_visit_type_id" ;
                    $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
                    if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
                    $Label = r_langline($field_name.'_label',$lang_section);
            
        $lookup_class= "bi_visit_type" ; 
                $lookup_filter="" ;     
                r_theme_InputSelect($field_name , $input_values[$field_name ], $Label,r_listbox_items($lookup_class,$lookup_filter),"3",$SubTip,0,0);
               echo '</div>';  
               // echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
                echo '<div class=" m-wrap red_color">';
                $field_name = "visit_cost" ;
                 
                $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
                if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
                $Label = r_langline($field_name.'_label',$lang_section);
                      
                r_theme_InputText($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only);
               echo '</div>';    
            
    //    echo '</div></div>';
  
        //-----------------------------------------------------------------------
        
        // obligatory // _____________________________________________________________________________________________________  
        r_theme_InputHidden( "is_an_action", "yes");
        
      
        ?>
        <div class="table-toolbar pull-right">
        <div class="btn-group">
            <button  
            type="submit" 
            
            class="btn blue ajax_action pull-right master_font"
            
            caller_verb="form_cancel"
            caller_id="modify_appointment_form"
               caller_url="<?php echo site_url('clinic/visits/change_appointment') ; ?>"
            caller_target="edit_<?php echo $this_concept ; ?>_body"
            
        
        >           
        <?php echo r_langline("general.button_cancel") ; ?>     
        </button>   
        </div>
        ]<?php 
        if ( $read_only!=1) 
        {
            ?>
       
        <div class="btn-group">
        <button  
            type="submit" 
        
            class="btn green ajax_action right master_font"
            
            caller_verb="post_form"
            caller_id="modify_appointment_form"
           caller_url="<?php echo site_url('clinic/visits/change_appointment') ; ?>"
            
            caller_target="edit_<?php echo $this_concept ; ?>_body" 
            
            form_type="POST"                
            form_name="appointment_form"  
            
            >
            <?php echo r_langline("general.button_save") ; ?>
        </button>
        
        </div></div>
        
        <?php
        }  
        r_theme_endform();
     
        r_theme_box_end();  
		?>