<?php


	$this_concept = "test_request" ; 
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
		}else{
				foreach ($item->business_data as $key => $value) {
					$input_values[$key] = $value ; 
				}
		
			if ($disable_edit) $read_only = 1 ; 
            $expand_string = "" ; 
            if ( $item->ID()==0) $expand_string = "expand" ; 
			r_theme_box_start
			("Enter Test Request",12,
			array("body_id"=>"edit_".$this_concept."_body",
					"box_id"=>"edit_".$this_concept."_box", "assumxe_edit"=>"hide assume_edit" , 
				"tools"=>"" . $expand_string )
			);	
            
		}
		
		r_theme_startform(   $this_concept."_form",  $this_concept."_form" ,"","post"); //echo form_open('form');
		$lang_section =$this_concept.".form_data.";  

		// ID FIELD  // _____________________________________________________________________________________________________		
		if ( $item->ID()!=0)
		{
			
			$field_name = "test_request_id" ;
					
			$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
			if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
			$Label = r_langline($field_name.'_label',$lang_section);
			r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0);
		}
	
        $field_name = "test_request_visit_id" ;
                
        $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
        if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
        $Label = r_langline($field_name.'_label',$lang_section);
        r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "meduim",$SubTip ,0);
        r_theme_InputHidden( "is_an_action", "yes");
          			
		// obligatory // _____________________________________________________________________________________________________	
	
        	echo '<div class="controls-row">'; 	
			echo '<div class="span6 m-wrap">';
			
			$field_name = "test_request_test_name" ;
	        
	        $SubTip = r_langline($field_name.'_tip',$lang_section)." ";
	        if (form_error($field_name)!=""){   $SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));    }
	        $Label = r_langline($field_name.'_label',$lang_section);
	        
	        r_theme_InputText($field_name,$input_values[$field_name],$Label , "large typeahead",$SubTip ,$read_only,0,1,site_url("clinic/tests/typeahead_data"));
	    
			echo '</div></div><br>';
//______________________________________________________________________________________________________                     
             			
		if($input_values["test_request_visit_id"]!=0)			 
		{
		?> 
		<div class="table-toolbar pull-right">
<div class="btn-group">
		<button  
		type="submit" 
	
		class="btn green ajax_action right master_font"
		
		caller_verb="post_form"
		caller_id="<?php echo $this_concept ; ?>_edit_form"
		caller_url="<?php echo site_url($this_controller)."/ajax_edit/".$item->ID()  ; ?>"
		caller_target="edit_<?php echo $this_concept ; ?>_body"
		
		form_type="POST"				
		form_name="<?php echo $this_concept ; ?>_form" 	
			
		>
		
		<?php echo r_langline("general.button_save") ; ?>
		
		</button>	
		
		</div>
	</div>
	
		<?php }
else
{
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
				caller_url="<?php echo site_url($this_controller)."/ajax_edit/".$item->ID()  ; ?>"
				caller_target="edit_<?php echo $this_concept ; ?>_body"
				
				form_type="POST"				
				form_name="<?php echo $this_concept ; ?>_form" 	
				
			>
			<?php echo r_langline("general.button_save") ; ?>
		</button>
		
		</div></div>
		<?php
			}		
		echo "<form>" ; 
		//r_theme_endform();
	 
	//	r_theme_box_end();	
					
		?>