<?php

    $this_concept = "evaluation" ; 
    $this_controller = "clinic/".$this_concept."s";
    
    // BEGIN PAGE SETTINGS
    $this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
    $this->lang->load('clinic/'.$this_concept.'_main', $this->admin_public->DATA["system_lang"]);

    $read_only = 0 ;                 
        // take the value from the previous form submit
    $item = $this_item ;            
    $input_values = array() ; // this is our array 
                    
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
        
        
        
        if ($disable_edit) $read_only = 1 ; 
            r_theme_box_start
            ('',12,
                array("body_id"=>"new_eval_body",
                        "box_id"=>"new_eval_box",
                        "tools"=>"")
            );  
        }
        
        
        r_theme_startform(   "new_eval_form",  "new_eval_form" ,"","post"); //echo form_open('form');
        $lang_section =$this_concept.".form_data.";  
        
        
        
        // ID FIELD  // _____________________________________________________________________________________________________       
        if ( $item->ID()!=0)
        {
                $field_name = "evaluation_id" ;
                
                $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
                if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
                $Label = r_langline($field_name.'_label',$lang_section);
                r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0);
        }
   //     echo "<pre>";print_r($item) ; echo "<pre>" ; 
        
          $field_name = "evaluation_patient_id" ;
                
        $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
        if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
        $Label = r_langline($field_name.'_label',$lang_section);
        r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0);
        
      //      echo "<ID>". $input_values[$field_name] ; 
            
        
        //  // _____________________________________________________________________________________________________        
        
        
        //_____________________________________________________________________________________________
        echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
        echo '<div class="span11 m-wrap">';
        $field_name = "evaluation_eval_form_id" ;
        
                $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
                if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
                $Label = r_langline($field_name.'_label',$lang_section);
                
                $lookup_class= "bi_evaluation_form" ; 
                $lookup_filter="" ;     
                r_theme_InputSelect($field_name , $input_values[$field_name ], $Label,r_listbox_items($lookup_class,$lookup_filter),"large",$SubTip,0,0);
                
                echo '</div></div>';    

            //_____________________________________________________________________________________________
                
        //__________________________________________________________________________________________________________
    
        //__________________________________________________________________________________________________________
     // START RIGHT HALF ---------------------------------------------
            
        // obligatory // _____________________________________________________________________________________________________  
     
        ?>
        <div class="table-toolbar pull-right">
        <div class="btn-group">
            <button  
                type="submit" 
                
                class="btn blue ajax_action pull-right master_font"
                
                caller_verb="form_cancel"
                caller_id="new_eval_form"
                caller_url='_'
                caller_target=""
                
                form_type="POST"                
                form_name="new_eval_form"  
        >           
        <?php echo r_langline("general.button_cancel") ; ?>     
        </button>   
        </div>
        
        <div class="btn-group">
        <button  
                type="submit" 
            
                class="btn green ajax_action right master_font"
                
                caller_verb="post_form"
                caller_id="new_eval_form"
                caller_url="<?php echo site_url($this_controller).'/ajax_edit/'  ; ?>"
                caller_target="new_eval_body"
                
                form_type="POST"                
                form_name="new_eval_form"  
                
            >
            <?php echo r_langline("general.button_save") ; ?>
        </button>
        
        </div></div>
        
        <?php
      
        r_theme_endform();
     
        r_theme_box_end();  
                    
        ?>