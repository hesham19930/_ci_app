<?php


		foreach ($totals as $key => $value) {				
		?> &nbsp;

		<div class="taxble-toolbar pull-left">
	
		<div class="btn-group"> 
		<button  
				type="submit" 			
				class="btn blue ajax_action right master_font"
			>
			<?php echo $value["the_caption"]  ; ?>
		</button>	
		<button  
				type="submit" 
				class="btn  ajax_action right master_font"
			>
			<?php echo $value["the_value"]  ; ?>
		</button>
	</div>	
	
		<?php
		}		
		r_theme_endform();
	 
		r_theme_box_end();	
					
		?>
		
	