<?php 
		
		r_theme_box_start($message_data["message_title"]);
	//	print_r($this_item->business_data) ; 
		?>
<div class="container_12">
	
		
	<div class="grid_10 prefix_1 arabic_font red">
		<center>
		<?php 
			if ($message_data["message_type"] ==="confirm")
			{
				?>
				<img src="<?php echo base_url( r_theme_config("icon_path")."/questionmark.png") ; ?>" >
				<?php
			}
			
			if ($message_data["message_type"] ==="error")
			{
				?>
				<img src="<?php echo base_url( r_theme_config("icon_path")."/icon_33.png") ; ?>" >
				<?php
			}
			
			if ($message_data["message_type"] ==="done")
			{
				?>
				<img src="<?php echo base_url( r_theme_config("icon_path")."/request_done_clock.png") ; ?>" >
				<?php
			}
			?>
			
		<?php //echo $message_title; ?>
		<br/><br/><br/><span style="font-size:16px;">
		<?php echo $message_data["message_text"]; ?> 
		</span>
			<br/><br/><br/><span class="green" style="font-size:14px;">
		<?php echo $message_data["MESSAGE_EXPLAIN"]; ?> 
		</span>
	
		<?php
			if ($message_data["MESSAGE_RETURN_URL"]!="")
			{
		?>
		</span><br/><br/>
		<span>
			<a class="button green" xhref="<?php echo site_url($message_data["MESSAGE_RETURN_URL"]); ?>"
				href="javascript:history.go(-1);" 

				>عودة</a>
		 
		</span>
		<?php				
			}
		?>
		
	</center>
	</div>
	
	<div class="clear"></div>
	<br/><br/><br/>
	
	<?php 
		if ($message_data["message_type"]==="confirm") 
		{
			
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
		}
		?>
		
	<div class="clear"></div>	
		
</div>
<?php 
		r_theme_box_end();
		?>