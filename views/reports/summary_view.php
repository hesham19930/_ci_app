<?php
	
		$draw_this_box = true ; 
		if (isset($draw_box)) $draw_this_box = $draw_box ;  
		
		if ($draw_this_box)
		{
			r_theme_box_start("") ; 	
		}
		
		r_theme_startform(   $this_concept."_fxxxxorm",  $this_concept."_fxxxxorm" ,"","post"); //echo form_open('form');
		$lang_section =$this_concept.".form_data.";  
		
		foreach ($summary_array as $key => $value) {
			
			$item_array = $value ; 
			$item_width="small" ; 
			$item_label = 	r_langline($item_array["title"]);
			$item_value = $item_array["value"] ; 
			$SubTip = "" ; 
			if (key_exists( "subtip" , $item_array)) $SubTip = $item_array["subtip"] ; 
			if (key_exists( "width" , $item_array)) $item_width = $item_array["width"] ; 
			
			switch ($item_label) {
				case 'separator':
						?>
						<div class="control-group" style="height: 3px;border-top: 2px solid; border-color: red;"> </div>
						<?php 
					break;
				case 'space':
					?>
						<div class="control-group" style="height: 15px;borxder-top: 2px solid; bordxer-color: red;"> </div>
						<?php 
					break;
				
				default:
							if ($item_width=="solarge")
							{	r_theme_input_textlabel($key,$item_value,$item_label , $item_width,$SubTip ,1); 	}
							else {
								
								if ($item_width=="focus")
								{ r_theme_inputtext($key,$item_value,"<b>".$item_label."</b>" , $item_width,$SubTip ,1); } 
								else 
								{ r_theme_inputtext($key,$item_value,$item_label , $item_width,$SubTip ,1); }
								 
							}
								break;
							}
				
			}
	
				
			

	
		
		r_theme_endform() ; 
		if ($draw_this_box)
		{
			r_theme_box_end() ; 	
		}
		
?>
	