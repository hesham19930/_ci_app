	<?php
			/*
			 * shoud come in the data array with
			 * $thisItem = > Instance of Sample item 
			 */ 
			
							
			r_theme_box_start("SQL_RUN");
			$input_values["sql_to_run"] = "";
			$input_values["no_rs"] = 0;
			

	?> 
	
	<div id="body" >
		<p>
		</p>
		
		<?php
		
		// if the form is newely opened , take the value from the database 
		// else 
		// take the value from the previous form submit
					
		  
		r_theme_startform( "iFormName",  "iFormName" ,""); //echo form_open('form');
		
		foreach ($rErrors as $key => $value) {
			ECHO $value ; 
		}

		?>
		<div class="grid-1-12"></div>
		<div class="grid-3-12" align="left"><label></label></div>
		<div class="grid-8-12">
		<textarea class="txt_autogrow" dir=ltr  name="sql_to_run" rows=10 /><?php echo $sql_to_run; ?></textarea>
		</div>
		<div class="clear"></div>
		<?php 

		$SubTip = "";  
		$Label = "NO RS ";
		r_theme_InputCheck("no_rs",$input_values["no_rs"],$Label , 6,$SubTip ,0);

	
		r_theme_InputHidden( "is_an_action", "yes");		
		
		r_theme_InputArea("message", $message,"");		
		r_theme_endform();		
		
		
		
	//	print_r ($this_table); 
		if (isset($this_table))
		{
		r_theme_draw_table($this_table);
		} 
		?>
		
	</div>
	
	<?php 
			r_theme_box_end();
	?> 