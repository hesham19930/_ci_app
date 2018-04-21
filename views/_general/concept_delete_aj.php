<?php

	

	$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
	if(isset($this_lang_file))
	{
			$this->lang->load($this_lang_file, $this->admin_public->DATA["system_lang"]);
	}

			 	 
	// take the value from the previous form submit
	$item = $this_item ; 			
	//print_r ($item->business_data) ; 
	$input_values = array() ; // this is our array 
	
	
	
	foreach ($item->business_data as $key => $value) {
					$input_values[$key] = $item->business_data[$key] ;
				}					
		if (set_value("is_an_action") == "yes")
		{
				//echo "ACTION=yes" ;
		
		}
		else
		{
		
       if (!isset($message_title)) $message_title = "Delete Record Confirmation";
       
        
		r_theme_box_start
			($message_title,12,
				array("body_id"=>"edit_".$this_concept."_body",
						"box_id"=>"edit_".$this_concept."_box",
						"tools"=>"",
						"box_icon"=>"icon-trash")
			);	
			
	
		}
		
        
        if (!isset($message_header )) $message_header =  '<h4><b><i class="icon-trash big"></i>'. r_langline("general.deleting"). ' [ '.$item->get_name().' ] </h4>' ; 
        if (!isset($message_question)) $message_question  =  r_langline("general.are_you_sure_you_want_to_delete"); 
        if (!isset($message_button)) $message_button = '<i class="icon-trash"></i>'.r_langline("general.button_delete").' ?  ' ;
        
        if (!isset($message_caller_key)) $message_caller_key = $this_concept."_delete_form" ;
           
		r_theme_startform(   $this_concept."_delete_form",  $this_concept."_delete_form" ,"","post"); //echo form_open('form');
		$lang_section =$this_concept.".form_data.";  
		
		if ( $item->ID()!=0)
		{
			$SubTip = ""  ; 
			$Label = r_langline($this_id_field.'_label',$this_concept.".form_data.");  
			r_theme_Inputhidden( $this_id_field ,  $input_values[$this_id_field]);
		}
		
	
		r_theme_InputHidden( "is_an_action", "yes");
	
	//	echo  $input_values[$this_id_field] ; 
	//	print_r ($this_item->business_data) ; 
	
		?> 
		<div class="portlet-body">
		<div id="pulsate-regular" >
				<div class="alert alert-info">
					<b><?php echo $message_header ; ?></b>
					<h4><i class="icon-question-sign big"></i>
					<b><?php echo $message_question; ?>  </b>
					</h4>
			 	</div>
		</div>
		</div>
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
				form_name="<?php echo $this_concept ; ?>_delete_form" 	
		>			
		No 	
		</button>	
		</div>
		
		<div class="btn-group">
		<button  
				type="submit" 
			
				class="btn green ajax_action right master_font"
				
				caller_verb="post_form"
				caller_id="<?php echo $message_caller_key ; ?>"
				caller_url="<?php echo site_url($this_controller."/ajax_delete") ; ?>"
				caller_target="edit_<?php echo $this_concept ; ?>_body"
				
				form_type="POST"				
				form_name="<?php echo $this_concept ; ?>_delete_form" 	
				
			><?php echo $message_button ; ?> 
		</button>
	
	
		</div></div>
		<?php		
		r_theme_endform();
	 
		r_theme_box_end();	
					
		?>
		
	