	<?php
			r_theme_box_start($list_title);	
	?> 
	
	<div id="body" >
		<?php
			
			if (isset($new_one_link))
			{
			if ($new_one_link!="")
			{
			?><div class="left"><p><a href="<?php echo site_url($new_one_link) ?>" >
			 اضافة جديد <img src='<?php echo base_url("case_images")."/icons/paperplus32.png" ?>' >
			</a></p></div>
			<?php 	
			}
			} 
		?>
		
		<p><?php 
		
			if (isset($list_message))
				{
					echo $list_message ; 
				}
		?>
		</p>
		
		<?php
			
		//	echo count($listtable -> Rows); 
		//	print_r($listtable);
		//	echo count($listtable->Cols) ; 
			r_theme_draw_table($list_table);
				
		?>
		
	</div>
	
	<?php 
			r_theme_box_end();
	?> 