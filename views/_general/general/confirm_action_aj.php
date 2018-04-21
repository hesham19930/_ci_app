<?php

	
	
	if (!isset ( $this_lang_folder)) $this_lang_folder = "business" ; 
	if (!isset ( $this_lang_file)) $this_lang_file = $this_concept.'_main' ; 
	
	
	// BEGIN PAGE SETTINGS 
	$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);
	$this->lang->load($this_lang_folder.'/'.$this_lang_file, $this->admin_public->DATA["system_lang"]);
				 	 
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
		
		r_theme_box_start
			(r_langline('edit_title',$this_concept.".form_data."),12,
				array("body_id"=>"edit_".$this_concept."_body",
						"box_id"=>"edit_".$this_concept."_box",
						"tools"=>"",
						"box_icon"=>"icon-trash")
			);	
			
	
		}
		
		r_theme_startform(   $this_concept."_form",  $this_concept."_form" ,"","post"); //echo form_open('form');
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
					<b><?php echo '<h4><b><i class="icon-comment big"></i>'. r_langline($message_title). ' </h4>'; ?></b>
					<h4><i class="icon-question-sign big"></i>
					<b><?php echo r_langline($message_to_confirm) ; ?>  </b></h4>
					<?php if (isset($message_data))
					{
						echo '<h4><br/><center> [ '.$message_data.' ] </center></h4>' ;  
					}
					?>
					
			 	</div>
		</div>
		</div>
		<div class="table-toolbar pull-right">
		<div class="btn-group">
			<button  
				type="submit" 
				
				class="btn blue ajax_action pull-right master_font"
				
				caller_verb="form_cancel"
				caller_id="<?php echo $this_concept ; ?>_confirm"
				caller_url='_'
				caller_target="edit_<?php echo $this_concept ; ?>_body"
				
				form_type="POST"				
				form_name="<?php echo $this_concept ; ?>_form" 	
		><i class="icon-undo"></i>			
		<?php echo r_langline("general.button_cancel") ; ?>		
		</button>	
		</div>
		
		<div class="btn-group">
		<button  
				type="submit" 
			
				class="btn green ajax_action right master_font"
				
				caller_verb="post_form"
				caller_id="<?php echo $this_concept ; ?>_confirm"
				caller_url="<?php echo site_url($this_controller."/ajax_delete") ; ?>"
				caller_target="edit_<?php echo $this_concept ; ?>_body"
				
				form_type="POST"				
				form_name="<?php echo $this_concept ; ?>_form" 	
				
			><i class="icon-ok"></i>
			<?php echo r_langline("general.button_ok") ; ?> 
		</button>
	
	
		</div></div>
		<?php		
		r_theme_endform();
	 
		r_theme_box_end();	
					
		?>
		
	