<?php


	
	// BEGIN PAGE SETTINGS
	$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
	$this->lang->load($this_lang_file, $this->admin_public->DATA["system_lang"]);

	$read_only = 0 ;  			 	 
		// take the value from the previous form submit
	$item = $this_item ; 	
	
	
	
	$input_values = array() ; // this is our array 
					
	if (!isset($use_item_info)) $use_item_info = false ; 
	
	if ( ($use_item_info==true)OR(set_value("is_an_action") != "yes"))
		{
			foreach ($item->business_data as $key => $value) {
					$input_values[$key] = $value ; 
			}
		} 
		else //if (set_value("is_an_action") == "yes") 				
		{
				//echo "ACTION=yes" ;
				foreach ($item->business_data as $key => $value) {
					$input_values[$key] = set_value($key) ;
				}		
		}

		if (set_value("is_an_action") != "yes")
		{
			
			r_theme_box_start
			(r_langline('edit_title',$this_concept.".form_data."),12,
				array("body_id"=>"edit_".$this_concept."_body",
						"box_id"=>"edit_".$this_concept."_box",
						"tools"=>"","box_icon"=>"icon-pencil")
			);	
		}

		if (isset($disable_edit))
		{
		if ($disable_edit) $read_only = 1 ; 
		}
			
		
		
		r_theme_startform(   $this_concept."_form",  $this_concept."_form" ,"","post"); //echo form_open('form');
		$lang_section =$this_concept.".form_data.";  
		
		
		
		
		// ID FIELD  // _____________________________________________________________________________________________________		
		if ( $item->ID()!=0)
		{
			$field_name = "eval_field_id" ;
			
			$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
			if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
			$Label = r_langline($field_name.'_label',$lang_section);
			r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0);
		}
		
		
		$field_name = "eval_field_form_id" ;
				
		$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
		if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
		$Label = r_langline($field_name.'_label',$lang_section);
		r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0);

	
		

		echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
		echo '<div class="span5 m-wrap">';
		
		
		$field_name = "eval_field_name" ;
		 
		$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
		if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
		$Label = r_langline($field_name.'_label',$lang_section);
		  	
		r_theme_InputText($field_name,$input_values[$field_name],$Label , "large",$SubTip ,$read_only);
		
		echo "</div></div>" ;
		
		
		//--------------------------------------------------------------------------------------------------------
		
		echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
		echo '<div class="span5 m-wrap">';
		
		
		$field_name = "eval_field_text" ;
		 
		$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
		if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
		$Label = r_langline($field_name.'_label',$lang_section);
		  	
		r_theme_InputText($field_name,$input_values[$field_name],$Label , "large",$SubTip ,$read_only);
		
		echo "</div></div>" ;
		/////////////////
		echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
		echo '<div class="span5 m-wrap">';
		
		
		$field_name = "eval_field_text_arabic" ;
		 
		$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
		if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
		$Label = r_langline($field_name.'_label',$lang_section);
		  	
		r_theme_InputText($field_name,$input_values[$field_name],$Label , "large",$SubTip ,$read_only);
		
       echo '</div><div class="span5 m-wrap">';
        
        
        $field_name = "eval_field_order" ;
         
        $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
        if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
        $Label = r_langline($field_name.'_label',$lang_section);
            
        r_theme_InputText($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only);
		echo '</div></div>' ;
		
		//--------------------------------------------------------------------------------------------------------
		
		echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
	   echo '<div class="span5 m-wrap">' ; 
		
		 $field_name = "eval_field_type_id" ;
		 $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
		 if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
	    	$Label = r_langline($field_name.'_label',$lang_section);
			
					$lookup_class= "bi_field_type" ; 
					$lookup_filter="" ; 
					r_theme_InputSelect($field_name , $input_values[$field_name ], $Label,r_listbox_items($lookup_class,$lookup_filter),"small",$SubTip,$read_only,0);
		
		
	
	    
		echo ' </div></div> ';
            echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
        echo '<div class="span5 m-wrap">';
	
		   $field_name = "efld_lookup_class_name" ;
					$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
					if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
					$Label = r_langline($field_name.'_label',$lang_section);
			
					$lookup_class= "" ; 
					$lookup_filter="" ; 
					$classname["empty"] = "" ;
					$classname["bi_blood_group"] = "blood_group" ;
					$classname["bi_city"] = "City" ;
			
					
					
				r_theme_InputSelect($field_name , $input_values[$field_name ], $Label,$classname,"3",$SubTip,$read_only,0);
				

	   	
		echo '</div></div>' ;
		
		//--------------------------------------------------------------------------------------------------------
		
    	echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
		echo '<div class="span5 m-wrap">';
		
		$field_name = "efld_lookup_class_filter" ;

		$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
		if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
		$Label = r_langline($field_name.'_label',$lang_section);
							
		r_theme_InputText($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only);
		
	
        echo '</div><div class="span5 m-wrap">';
        
        
    $field_name = "efld_is_obligatory" ;

        $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
        if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
        $Label = r_langline($field_name.'_label',$lang_section);
                            
        r_theme_InputCheck($field_name,$input_values[$field_name],$Label , 6,$SubTip ,0);
        

        
        echo "</div></div>" ;
        
		  echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------        
        echo '</div><div class="span5 m-wrap">' ; 
        
        $field_name = "efld_options" ;

        $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
        if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
        $Label = r_langline($field_name.'_label',$lang_section);
                            
    r_theme_InputArea($field_name,$input_values[$field_name],$Label , "meduim",$SubTip ,$read_only);
        
        echo "</div>" ;
		// obligatory // _____________________________________________________________________________________________________	
		r_theme_InputHidden( "is_an_action", "yes");
		
			
		?> 
		<div class="table-toolbar pull-right">
		<div class="btn-group">
			<button  
				type="submit" 
				
				class="btn blue ajax_action pull-right master_font"
				
				caller_verb="form_cancel"
				caller_id="<?php echo $this_concept ; ?>_edit_form"
				caller_url='_'
				caller_target="edit_<?php echo $this_concept ; ?>_body"
				
				form_type="POST"				
				form_name="<?php echo $this_concept ; ?>_form" 	
		>			
		<?php echo r_langline("general.button_cancel") ; ?>		
		</button>	
		</div>
		
		<div class="btn-group">
		<button  
				type="submit" 
			
				class="btn green ajax_action right master_font"
				
				caller_verb="post_form"
				caller_id="<?php echo $this_concept ; ?>_edit_form"
				caller_url="<?php echo site_url($this_controller."/ajax_edit/".$item->ID()) ; ?>"
				caller_target="edit_<?php echo $this_concept ; ?>_body"
				
				form_type="POST"				
				form_name="<?php echo $this_concept ; ?>_form" 	
				
			>
			<?php echo r_langline("general.button_save") ; ?>
		</button>
	
	
		
		</div></div>
		<?php		
		r_theme_endform();
	 
		r_theme_box_end();	
					
		?>
		
	