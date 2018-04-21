<?php



    // BEGIN PAGE SETTINGS
    $this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
    $this->lang->load("clinic/evaluation_main", $this->admin_public->DATA["system_lang"]);
    

    $read_only = 0 ;                 
        // take the value from the previous form submit
    
    $this_form_title = "" ; 
    if (isset($form_title)) $this_form_title = $form_title ;  
    
    $input_values = array() ; // this is our array 
    //$input_values["from_date"] =  date('Y-01-01 H:i:s');
    
    $input_values["evaluation_date"] = ""  ;
    $input_values["evaluation_date2"] = ""  ;
    
    $input_values["patient_name"] = ""  ; 
    $input_values["evaluation_eval_form_id"] = ""  ; 
    $input_values["person_name"] = ""  ; 
    $input_values["patient_id"] = ""  ; 
    
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

        $this_form_title = "Search For evaluation" ; 
        $this_form_title = "" ; 
            r_theme_box_start
            ($this_form_title,12,
                array("body_id"=>"SearchForm",
                        "box_id"=>"SearchBox","back_color"=>"blue",
                        "tools"=>"")
            );
    
    
        
    //  echo form_error("patient_name") ;  
        $url_extend = "" ;  
        
        
        r_theme_startform(   "search_form",  "search_form" ,"","post"); //echo form_open('form');
        $lang_section ="evaluation.form_data.";  
        
        echo '<div class="hide_with_menu" >';

        
        //  \/ ______________________________ _______________________________________________________________________\/



        echo '<div class="controls-row">';  
        echo '<div class="span6 m-wrap">';
        
        $field_name = "patient_id" ;
         $SubTip = "";
        if (form_error($field_name)!="")
        {   $SubTip = r_theme_input_error('patient name Required'); }
        $Label = r_langline($field_name.'_label',$lang_section);
          
        
        //r_theme_InputText($field_name,$input_values[$field_name],$Label , "large",$SubTip ,$read_only);
        r_theme_InputText($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only ,0,1);      
        
        echo '</div></div>'; 

            echo '<div class="controls-row">';  
            echo '<div class="span11 m-wrap">';
            
            $field_name = "patient_name" ;
             $SubTip = "";
            if (form_error($field_name)!="")
            {   $SubTip = r_theme_input_error('patient name Required'); }
            $Label = r_langline($field_name.'_label',$lang_section);
            
            
            //r_theme_InputText($field_name,$input_values[$field_name],$Label , "large",$SubTip ,$read_only);
            r_theme_InputText($field_name,$input_values[$field_name],$Label , "large  ",$SubTip ,$read_only ,0,1);    
            
            echo '</div></div>'; 
            
        //  /\_____________________________________________________________________________________________________/\

            echo '<div class="controls-row">';  
            echo '<div class="span6 m-wrap">';
            
            $field_name = "evaluation_date" ;
             $SubTip = "";
            if (form_error($field_name)!="")
            {   $SubTip = r_theme_input_error('evaluation date Required');  }
            $Label = r_langline($field_name.'_label',$lang_section);
            
            r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0,"date-picker");
                
            echo '</div></div>'; 



            echo '<div class="controls-row">';  
            echo '<div class="span6 m-wrap">';
            
            $field_name = "evaluation_date2" ;
             $SubTip = "";
            if (form_error($field_name)!="")
            {   $SubTip = r_theme_input_error('evaluation date Required');  }
            $Label = r_langline($field_name.'_label',$lang_section);
            
            r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0,"date-picker");
                
            echo '</div></div>'; 



            echo '<div class="controls-row">';  
            echo '<div class="span6 m-wrap">';
            
            $field_name = "evaluation_eval_form_id" ;
            
                    $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
                    if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
                    $Label = r_langline($field_name.'_label',$lang_section);
                    
                    $lookup_class= "bi_evaluation_form" ; 
                    $lookup_filter="" ;     
                    r_theme_InputSelect($field_name , $input_values[$field_name ], $Label,r_listbox_items($lookup_class,$lookup_filter),"meduim",$SubTip,0,1);

            
            echo '</div></div></div>'; 


            echo '<div class="controls-row">';  
            echo '<div class="span6 m-wrap">';
            
            $field_name = "person_name" ;
             $SubTip = "";
            if (form_error($field_name)!="")
            {   $SubTip = r_theme_input_error('person name Required');  }
            $Label = r_langline($field_name.'_label',$lang_section);
            
            
            //r_theme_InputText($field_name,$input_values[$field_name],$Label , "large",$SubTip ,$read_only);
            r_theme_InputText($field_name,$input_values[$field_name],$Label , "small typeahead",$SubTip ,$read_only ,0,1,site_url("clinic/evaluations/typeahead_data"));    
            
            echo '</div></div>'; 
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
                    
        ?>
        
    