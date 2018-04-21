<?php

	//coming from controller 
			
	//$this_concept = "store_balance" ; 
	//$this_lang_folder = "trans" ; 
	
	
	
	// BEGIN PAGE SETTINGS
//	$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
	$this->lang->load("business/item_main", $this->admin_public->DATA["system_lang"]);

	$read_only = 0 ;  			 	 
		// take the value from the previous form submit
	
	$this_form_title = "" ; 
	if (isset($form_title)) $this_form_title = $form_title ;  
	
	$input_values = array() ; // this is our array 
	//$input_values["from_date"] =  date('Y-01-01 H:i:s');

	//values to filter
	$input_values["FROM_DATE"] = "" ; 
	$input_values["TO_DATE"] = "" ; 
	
	$input_values["air_creation_date"] = "" ; 
	$input_values["pnr_creation_date"] = "" ;
	$input_values["origin_city"] = "" ;
	$input_values["dest_city"] = "" ;
	$input_values["flight_number"] = "" ;
	$input_values["class_of_segment"] = "" ;
	$input_values["tkt_number"] = "" ;
	$input_values["first_name"] = "" ;
	$input_values["last_name"] = "" ;
	
	// poplulating this one from the controller first time 
	
	if (set_value("is_an_action") == "yes")
		{
			foreach ($input_values as $key => $value) {
				$input_values[$key] = set_value($key) ;
				}	
			
			//echo "action" ; 
		}
	else {}	
			r_theme_box_start
			($this_form_title,12,
				array("body_id"=>"edit_".$this_concept."_body",
						"box_id"=>"edit_".$this_concept."_box","back_color"=>"blue",
						"tools"=>"")
			);
					
		/* 						
		if (set_value("is_an_action") == "yes")
		{
				//echo "ACTION=yes" ;
				foreach ($item->business_data as $key => $value) {
					$input_values[$key] = set_value($key) ;
				}	
				
						echo "action" ; 
		}
		else
		{
			foreach ($item->business_data as $key => $value) {
			$input_values[$key] = $value ; 
				}
		
		
		if ($disable_edit) $read_only = 1 ; 
			
		}
		 */ 
	
		
		$url_extend = "" ; 	
				
		r_theme_startform(   "search_form",  "search_form" ,"","post"); //echo form_open('form');
		$lang_section ="item.form_data.";  
		
		echo '<div class="hide_with_menu" >';
		
		//  \/ ______________________________ _______________________________________________________________________\/
			echo '<div class="controls-row">'; 	
			
			echo '<div class="span6 m-wrap">';
			
				$field_name = "FROM_DATE" ; 
			 
				$SubTip = " ";
				if (form_error($field_name)!="")
				{	$SubTip = r_theme_input_error('Full Date_is_required');	}
				$Label = "From Date";
				  	
				r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only,"mask_date2");	
				
			echo '</div>';	
				
			echo '<div class="span5 m-wrap">';
			
				$field_name = "TO_DATE" ; 
			 
				$SubTip = " ";
				if (form_error($field_name)!="")
				{	$SubTip = r_theme_input_error('Full Date_is_required');	}
				$Label = "To Date";
				  	
				r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only,"mask_date2");	
			echo '</div>
			</div>'; 
			
		//  /\_____________________________________________________________________________________________________/\
		 	
		 	echo '<div class="controls-row">'; 	
			echo '<div class="span6 m-wrap">';
			 
			 	$field_name = "air_creation_date" ;
			
				$SubTip = "";
				if (form_error($field_name)!="")
				{	$SubTip = r_theme_input_error('Full org_dest_is_required');	}
				$Label = "AIR Creation Date";
			  	
				r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only,"mask_date2");
			echo '</div>'; 
		
			echo '<div class="span6 m-wrap">';
			
				$field_name = "pnr_creation_date" ; 
			 
				$SubTip = " ";
				if (form_error($field_name)!="")
				{	$SubTip = r_theme_input_error('Full Date_is_required');	}
				$Label = "PNR Creation Date";
				  	
				r_theme_inputtext_mask($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only,"mask_date2");	
			echo '</div>
			</div>'; 
			
	//------------------------------------------------------------------------------
			echo '<div class="controls-row">'; 		
			echo '<div class="span6 m-wrap">';
			
				$field_name = "origin_city" ; 
			 
				$SubTip = " ";
				if (form_error($field_name)!="")
				{	$SubTip = r_theme_input_error('Full Date_is_required');	}
				$Label = "Origin City";
				  	
				r_theme_InputText($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only);	
				echo '</div>'; 
		
			echo '<div class="span6 m-wrap">';
			
				$field_name = "dest_city" ; 
			 
				$SubTip = " ";
				if (form_error($field_name)!="")
				{	$SubTip = r_theme_input_error('Full Date_is_required');	}
				$Label = "Destenation City";
				  	
				r_theme_InputText($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only);	
				echo '</div>
				</div>'; 
		//  \/ ______________________________ _______________________________________________________________________\/
			echo '<div class="controls-row">'; 	
			echo '<div class="span6 m-wrap">';
			
				$field_name = "flight_number" ; 
			 
				$SubTip = " ";
				if (form_error($field_name)!="")
				{	$SubTip = r_theme_input_error('Full Date_is_required');	}
				$Label = "Flight Number";
				  	
				r_theme_InputText($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only);	
				echo '</div>'; 
		
			echo '<div class="span6 m-wrap">';
			
				$field_name = "class_of_segment" ; 
			 
				$SubTip = " ";
				if (form_error($field_name)!="")
				{	$SubTip = r_theme_input_error('Full Date_is_required');	}
				$Label = "Class of Segment";
				  	
				r_theme_InputText($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only);	
				echo '</div></div>'; 

		//  \/ ______________________________ _______________________________________________________________________\/
			echo '<div class="controls-row">'; 	
			echo '<div class="span6 m-wrap">';
			
				$field_name = "first_name" ; 
			 
				$SubTip = " ";
				if (form_error($field_name)!="")
				{	$SubTip = r_theme_input_error('Full Date_is_required');	}
				$Label = "First Name";
				  	
				r_theme_InputText($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only);	
				echo '</div>'; 
		 	
			echo '<div class="span6 m-wrap">';
			
				$field_name = "last_name" ; 
			 
				$SubTip = " ";
				if (form_error($field_name)!="")
				{	$SubTip = r_theme_input_error('Full Date_is_required');	}
				$Label = "Last Name";
				  	
				r_theme_InputText($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only);	
				echo '</div>'; 
	
	//----------------------------------------------------------------------------------------
			echo '<div class="controls-row">'; 	
			echo '<div class="span6 m-wrap">';
			
				$field_name = "tkt_number" ; 
			 
				$SubTip = " ";
				if (form_error($field_name)!="")
				{	$SubTip = r_theme_input_error('Full Date_is_required');	}
				$Label = "Ticket Number";
				  	
				r_theme_InputText($field_name,$input_values[$field_name],$Label , "small",$SubTip ,$read_only);	
				echo '</div></div>'; 
				
			
			
		//  /\_____________________________________________________________________________________________________/\
	 	
				
		// obligatory // _____________________________________________________________________________________________________	
		r_theme_InputHidden( "is_an_action", "yes");
		
		?>
		
		
		<div class="table-toolbar pull-left">
		
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
			<?php echo "Execute" ; ?>
		</button>
		
		</div></div>
		<?php		
		r_theme_endform();
	 			
		r_theme_box_end();	
					
		?>
		
	