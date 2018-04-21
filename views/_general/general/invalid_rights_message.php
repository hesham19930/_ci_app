<?php

	if (!isset($load_full_page)) $load_full_page ="yes" ;
	if (isset($load_full_page))
	{
		if ($load_full_page =="yes")
		{
			
			    $this_concept = "shift" ; 
				$this_lang_folder = "trans" ; 
					
				// BEGIN PAGE SETTINGS
				$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);  
				$this->lang->load($this_lang_folder.'/'."shift", $this->admin_public->DATA["system_lang"]);
				
				$public_data["page_title_formatted"] ='<i class="icon-tags big"></i>'.r_langline('page_title',"shift.master.");
				
				$public_data["page_title"] =r_langline('page_title',"shift.master.");
				$public_data["page_subtitle"] =r_langline('page_subtitle',"shift.master.");  
				$public_data["page_description"] = r_langline('page_description',"shift.master.");		  
				$public_data["page_scripts"] = array("bootstrap","chart" ); 	//
				$public_data["show_toolbox"]= "no" ; 
		
				$public_data["bread_crumbs"] = array();
													
													
				$this->load->view($public_data["template_folder"].'header',$public_data);
		
		
		}
	}
	
	
	if (!isset($message_title)) {$message_title = "رسالة" ; }
	if (!isset($message_text1)) {$message_text1 = "نظام الحماية"; ; }
	if (!isset($message_text2)) {$message_text2 = "هذه الصفحة غير مصرح لك بمحتوياتها - يمكنك مراجعة مدير الظام";; }
	if (!isset($message_icon)) {$message_icon = "general.message_icon" ; }
	if (!isset($access_component_name)) {$access_component_name = ":(" ; }
	if (!isset($access_verb)) {$access_verb = ":(" ; }

	
	
	// BEGIN PAGE SETTINGS 
	$this->lang->load('business/general', $this->admin_public->DATA["system_lang"]);
				 	 
	
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
					<b><?php echo '<h4><b>'. r_langline($message_text1).'</h4>'; ?></b>
					<h4><i class="icon-question-sign big"></i>
					<b><?php echo r_langline($message_text2) ; ?>  </b>
					</h4>
			 	</div>
			 	<div class="alert alert-info" dir=ltr style="font-family: tahoma;color:red;">Security Information
					<?php echo '<h4>'. $this->admin_public->DATA["user_group_code"] .'</h4>'; ?>
					<h4>
					<?php echo $access_component_name.".....".$access_verb ; ?>  
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
		?>
