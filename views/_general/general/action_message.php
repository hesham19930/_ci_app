	<div id="message_" >
<?php


	/* expects
	 * variable message_type (successs/fail/info/warning/confirmation) 
	 * variable message_lang_file OBLIGATORY 
	 * variable message_title_bar  
	 * variable message_title 
	 * variable message_text   
	 */ 
	$this->lang->load("business/general", $this->admin_public->DATA["system_lang"]);
	$this->lang->load($message_lang_file, $this->admin_public->DATA["system_lang"]);

	if (!isset($message_type))
	{
		$message_type = "info" ; 
	}
	$divclass="alert alert-info master_font" ; 
	switch ($message_type) {
		case 'error':
			$divclass="alert alert-info master_font" ;
			break;
		default:
			$divclass="alert alert-info master_font" ;
			break;
	}
	
	echo "<div class=".$divclass.">" ; 
	if (isset($message_title)) 
	{
	echo "<div>".r_langline($message_title)."</div>";
	}
	
	$messages = explode("|", $message_text);
	foreach ($messages as $key => $value) {
		echo "<div>".r_langline($value)."</div>";	
	}
	
	echo "</div>" ; 
	
	
?>

	<div class="table-toolbar pull-right">
		<div xclass="btn-group">
			<button  
				type="submit" 
				
				class="btn blue ajax_action pull-right master_font"
				
				caller_verb="message_notified"
				caller_id="message"
				 	
		>			
		<?php echo r_langline("general.button_ok") ; ?>		
		</button>	
	</div>
	</div>		
		
	
		
	
	
