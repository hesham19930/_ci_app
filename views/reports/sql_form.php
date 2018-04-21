<?php


	//coming from controller 
			
	//$this_concept = "store_balance" ; 
	//$this_lang_folder = "trans" ; 
	
	


	$read_only = 0 ;  			 	 
		// take the value from the previous form submit
	
	
	$input_values = array() ; // this is our array 
	$input_values["sql"] = "" ; 
	$input_values["autotable"] = 1 ; 
	
		
	
	if (set_value("is_an_action") == "yes")
		{
			foreach ($input_values as $key => $value) {
				$input_values[$key] = set_value($key) ;
				}	
			
			//echo "action" ; 
		}
	else {
			 
			
	
	}

	
			r_theme_box_start
			(r_langline(''),12,
				array("body_id"=>"edit_body",
						"box_id"=>"edit__box","back_color"=>"blue",
						"tools"=>"")
			);
		
	
		
		$url_extend = "" ; 	
		
		r_theme_startform(   "search_form",  "search_form" ,"","post"); //echo form_open('form');
		$lang_section ="item.form_data.";  
		
	
		//  \/ ______________________________ _______________________________________________________________________\/

		echo '<div class="controls-row">'; 	
		echo '<div class="span12 m-wrap">';
		
			$field_name = "sql" ; 
		
			?>
			<textarea name="sql" rows="7" cols="120" class="span10 m-wrap" ><?php echo $input_values[$field_name]; ?></textarea>
			<?php
			
			//r_theme_InputArea($field_name,$input_values[$field_name] ,  "SQL", "large" );
			
		
		echo '</div></div>'; 
		//  /\_____________________________________________________________________________________________________/\
		

		//  /\_____________________________________________________________________________________________________/\

		echo '<div class="controls-row">'; 	
		echo '<div class="span6 m-wrap">';

		$field_name = "autotable" ;		
		if($input_values[$field_name]==="on") {	$input_values[$field_name] =1;  }
		if($input_values[$field_name]==="") {	$input_values[$field_name] =0;    }
		
		$SubTip = ""; 
		if (form_error($field_name)!=""){	$SubTip = r_theme_input_error(r_langline($field_name.'_is_required',$lang_section));	}
		$Label = "AutoTable?";
							
		r_theme_InputCheck($field_name,$input_values[$field_name],$Label , 6,$SubTip ,$read_only);
		echo '</div></div>'; 	
	
		// obligatory // _____________________________________________________________________________________________________	
		r_theme_InputHidden( "is_an_action", "yes");
		
			
		?> 
		<div class="table-toolbar pull-right">
		<!--
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
		-->
		
		<div class="btn-group">
		<button  
				type="submit" 
			
				class="btn blue ajax_action right master_font autoaction"
				
				caller_verb="post_form"
				caller_id="search_form"
				caller_url="<?php echo site_url($this_controller."/find_form"). $url_extend  ; ?>" 
				
				caller_target="_"				
				form_type="POST"		
				form_name="search_form"
				
			>
			<?php echo r_langline("general.button_ok") ; ?>
		</button>
	
	
		
		</div></div>
		<?php		
		r_theme_endform();
		
		r_theme_box_end();	
					
		?>
		
	