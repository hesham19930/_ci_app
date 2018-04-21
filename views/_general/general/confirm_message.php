<?php 
		r_theme_box_start($message_title);
		?>
<div class="container_12">
	
		
	<div class="grid_10 prefix_1 arabic_font red">
		<center>
		<img src="<?php echo base_url( r_theme_config("icon_path")."/questionmark.png") ; ?>" >
		<?php //echo $message_title; ?>
		<br/><br/><br/><span style="font-size:16px;">
		<?php echo $message_question; ?> 
		</span>
			<br/><br/><br/><span class="green" style="font-size:14px;">
		<?php echo $message_text; ?> 
		</span>
	
	
		
	</center>
	</div>
	
	<div class="clear"></div>
	<br/><br/><br/>
	
	<?php 
		//if ($message_type==="confirm") 
		//{
			
		?>
		<div class="clear"></div>
			<div class="grid_2 prefix_4">
			<?php 
				r_theme_startform( "iFormName",  "iFormName" ,""); //echo form_open('form');
				r_theme_InputHidden("answer", "yes");
				r_theme_InputHidden("is_an_action", "yes");
			?>
				<input type="submit"  value="تأكيد - نعم"  />
				</div>
				<div class="grid_2">
			<?php 
				r_theme_startform( "iFormName",  "iFormName" ,""); //echo form_open('form');
				r_theme_InputHidden("answer", "no");
				r_theme_InputHidden("is_an_action", "yes");
			?>
				<input type="submit" value="تراجع - عن ذلك" />
				</div>
		<?php
		//}
		?>
		
	<div class="clear"></div>	
		
</div>
<?php 
		r_theme_box_end();
		?>