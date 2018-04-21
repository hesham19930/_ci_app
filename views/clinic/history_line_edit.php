<?php


	$this_concept = "history_line" ; 
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
			("",12,
				array("body_id"=>"edit_".$this_concept."_body",
						"box_id"=>"edit_".$this_concept."_box",
						"tools"=>"")
			);	
		}

		r_theme_startform(   $this_concept."_form",  $this_concept."_form" ,"","post"); //echo form_open('form');
		
		$lang_section =$this_concept.".form_data.";  

	   ////////////////////to disable patient-name when validation = false////////
		$patient_id = $item->business_data["hl_patient_id"] ;
	   ///////////////////////////////////////////////////////////////////////////	
			
		
		// ID FIELD  // _____________________________________________________________________________________________________		
		if ( $item->ID()!=0)
		{
				$field_name = "history_line_id" ;
				
				$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
				if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
				$Label = r_langline($field_name.'_label',$lang_section);
				r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "small",$SubTip ,0);
		}
		
		//  // _____________________________________________________________________________________________________
	//	echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
	//	echo '<div class="span11 m-wrap">';
		
		$field_name = "hl_patient_id" ;

		$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
		if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
		$Label = r_langline($field_name.'_label',$lang_section);
		
		$lookup_class= "bi_patient" ; 
		$lookup_filter="" ; 	
		
		//echo"idddddddddddddd>>>>>>".$patient_id;
		
		if($patient_id != 0)
		{
			$input_values[$field_name ] = $patient_id ;
			r_theme_Inputhidden($field_name,$input_values[$field_name],$Label , "meduim ",$SubTip ,$read_only);
			//r_theme_InputText($field_name,$input_values[$field_name],$Label , "meduim",$SubTip ,$read_only);
		}
		elseif ($patient_id == 0)
			 r_theme_InputSelect($field_name , $input_values[$field_name ], $Label,r_listbox_items($lookup_class,$lookup_filter),"meduim",$SubTip,0,1);
		
	//	echo '</div></div>'; 
		//----------------------------------------------------------------------------------------------------------------------------------------------
		r_theme_InputHidden( "is_an_action", "yes");       
        echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
      echo '<div class="span5 m-wrap">';   
        echo "Enter History and Click Save" ;
         
      echo '</div>';echo '</div>';
		//__________________________________________________________________________________________ 	
		echo '<div class="controls-row">'; // START RIGHT HALF ---------------------------------------------
		echo '<div class="span10 m-wrap">';   
		$field_name = "history_line" ;
		 
		$SubTip = r_langline($field_name.'_tip',$lang_section)." ";
		if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
		$Label = r_langline($field_name.'_label',$lang_section);
		  	
		r_theme_inputtext($field_name,$input_values[$field_name],$Label,"xlarge typeahead ","",0,1,0,site_url("clinic/history_lines/typeahead_data"));
		echo '</div>';
         
		//_____________________________________________________________________________________________
		echo '<div class="span2 m-wrap">';
		// obligatory // _____________________________________________________________________________________________________	
			 
		?> 
	
	
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
		
		
		<?php		
		  echo '</div>';
		r_theme_endform();
	 
		r_theme_box_end();	
					
		?>