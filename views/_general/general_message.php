<?php

	if (isset($load_full_page))
	{
		if ($load_full_page =="yes")
		{
			
			  		// BEGIN PAGE SETTINGS
				$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
				
				//$public_data["page_title_formatted"] ='<i class="icon-tags big"></i>'.r_langline('page_title',"shift.master.");
				
				$public_data["page_title"] =r_langline('page_title',"shift.master.");
				$public_data["page_subtitle"] =r_langline('page_subtitle',"shift.master.");  
				$public_data["page_description"] = r_langline('page_description',"shift.master.");		  
				$public_data["page_scripts"] = array("bootstrap","chart" ); 	//
	
		
				$public_data["bread_crumbs"] = array();
													
													
				$this->load->view($public_data["template_folder"].'header',$public_data);
		
		
		}
	}
	else {
			// BEGIN PAGE SETTINGS 
	$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);
	}
	
	if (!isset($message_title)) {$message_title = "Message " ; }
	if (!isset($message_text1)) {$message_text1 = "general.message_text1" ; }
	if (!isset($message_text2)) {$message_text2 = "general.message_text2" ; }
	if (!isset($message_icon)) {$message_icon = "general.message_icon" ; }
	

	if (isset($message_type))
	{
	    if ($message_type =="small_box" )
	    {
	        r_theme_box_start
            ("",12,
                array("body_id"=>"message_body",
                        "box_id"=>"message__box",
                        "tools"=>""));
                        ?>
                       <?php echo r_langline($message_text1) ; ?> 
                        <?php 
                        r_theme_box_end();  
	    }
	}
    else 
    {
	   r_theme_box_start
			(r_langline($message_title),12,
				array("body_id"=>"message_body",
						"box_id"=>"message__box",
						"tools"=>"")
			);	
		
		r_theme_startform(   "_form",  "_form" ,"","post"); //echo form_open('form');
		
	
		?> 
		<div class="portlet-body">
		<div id="pulsate-regular" >
				<div class="alert alert-info">
					<b><?php echo '<h><b>'. r_langline($message_text1).'</h4>'; ?></b>
					<h4><i class="icon-comment big"></i>
					<b><?php echo r_langline($message_text2) ; ?>  </b>
					</h4>
			 	</div>
		</div>
		</div>
		<div class="table-toolbar pull-right">
		<!--<div class="btn-group">
			<button  
				type="submit" 
				
				class="btn blue ajax_action pull-right master_font"
				
				caller_verb="form_cancel"
				caller_id="_form"
				caller_url='_'
				caller_target="_edit_section"
				
				form_type="POST"				
				form_name="_form" 	
		>	
				
		<?php echo r_langline("general.button_ok") ; ?>		
		</button>	
		</div>
		-->
		</div>
		<?php		
		r_theme_endform();
	 
		r_theme_box_end();	
		
		
		if (isset($load_full_page))
	{
		if ($load_full_page =="yes")
		{
			$this->load->view($public_data["template_folder"].'footer',$public_data);
		}}	
    
    }   		
		?>
		
	
	
	