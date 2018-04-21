<?php

	/*	MAP OF THE CODE 
	 *  Find out langauge of selection of the page ( or set lang to fixed value ) 
	 * 	Find out template based on language or pre-set template   
	 *  Get Page Specific Strings In Selected Langage
	 * 	Load the Template Helper Based On Selected Language
	 * 	Set Tempalate Scripts Loading Varaibles based on needs     
	 *  Load the Tempate Files  // header , etc , sending public data  
	 *  ( DO THE VIEW CODE OR VIEW SUB VIEWS )  
	 *  Load Footer and Post Page Files 
	*/  

	if (!isset ($page_langauge)) $page_langauge = $this->admin_public->DATA["system_lang"] ;
	
	$template_folder = "_templates/".$template_name."/" ;  
	$this->load->helper($theme_helper)	;
	
	
	// BEGIN PAGE SETTINGS 
	$this->lang->load('business\user_main', $this->admin_public->DATA["system_lang"]);
	 
 

	 
		// take the value from the previous form submit
		$item = $this_item ; 			
		$input_values = array() ; // this is our array 
					
		if (set_value("isAnAction") == "yes")
		{
				echo "ACTION=yes" ;
				foreach ($item->business_data as $key => $value) {
					$input_values[$key] = set_value($key) ;
				}	
		}
		else
		{
				foreach ($item->business_data as $key => $value) {
					$input_values[$key] = $value ; 
				}	
		}
		
		  
		r_theme_startform(  "user_form",  "user_form" ,"","post"); //echo form_open('form');
		
		
		if ( $item->ID()!=0)
		{
		$SubTip = ""  ; 
		$Label = r_langline('User_ID');  
		r_theme_InputText( "user_id"  ,  $input_values["user_id"],$Label , 2,$SubTip ,1);
		}
	
	
		$SubTip = r_langline('enter_login_name')." ... " .form_error('user_login','<span style="color:red;">', '</span>');
		$Label = r_langline('user_login');  
		
		r_theme_InputText("user_login",$input_values["user_login"],$Label , "small",$SubTip ,0);
		
		$SubTip = r_langline('enter_user_name')." ... " .form_error('user_name','<span style="color:red;">', '</span>');  
		$Label = r_langline('user_name');
		r_theme_InputText("user_name",$input_values["user_name"],$Label ,  "small",$SubTip ,0);
		
		
		$SubTip = r_langline('enter_user_email')." ... " .form_error('user_email','<span style="color:red;">', '</span>');  
		$Label = r_langline('user_email');
		r_theme_InputText("user_email",$input_values["user_email"],$Label ,  "meduim",$SubTip ,0);

		
		$SubTip = r_langline('enter_user_pass')." ... " .form_error('user_email','<span style="color:red;">', '</span>');  
		$Label = r_langline('user_pass');
		r_theme_inputPassword("user_pass",$input_values["user_pass"],$Label ,  "small",$SubTip ,0);

		$SubTip = r_langline('enter_user_pass_confirm')." ... " .form_error('user_email','<span style="color:red;">', '</span>');  
		$Label = r_langline('user_pass_confirm');
		r_theme_inputPassword("user_pass_confirm",$input_values["user_pass"],$Label ,  "small",$SubTip ,0);

		$SubTip = "" ; 		
		$Label = r_langline('account_name');
 		//r_theme_InputSelect_Normal("account_id", $input_values["account_id"], $Label,
			//		r_listbox_items("bi_sys_account",""),"large",$SubTip,0);
					
		
		$SubTip = r_langline('enter_user_rights_group')." ... " .form_error('user_email','<span style="color:red;">', '</span>');  
		$Label = r_langline('user_rights_group');
 		r_theme_InputSelect_Normal("group_id", $input_values["group_id"], $Label,
					r_listbox_items("bi_user_group",""),"meduim",$SubTip,0);
					
		$SubTip = r_langline('check_if_still_active')." ... " .form_error('user_email','<span style="color:red;">', '</span>');  
		$Label = r_langline('record_active');
		r_theme_InputCheck("is_active",$input_values["is_active"],$Label , 6,$SubTip ,0);

	
		r_theme_InputHidden( "isAnAction", "yes");		
		
	//	r_theme_save_button(array("ajaxform"=>"","target"=>"users_list" , "href"=>"account/users/ajax_post"));
	
		?> 
		<div class="table-toolbar pull-right">
			<div class="btn-group">
		<button class="btn green ajaxithis right" type="submit" id="save" 
		
				form_submit = "yes"
				form_name="user_form"
				form_url ="<?php echo site_url("account/users/ajax_edit") ; ?>"
				form_type="POST"				
				form_target="edit_user_body" 	
				dxata_tables="datatable_of_users" 
							  
			 	form_success_goto = ""  
			 	form_fail_gotto = ""  
			 	
			 	txarget = "users_list_body"
			 	uxrl = "<?php echo site_url() ; ?>\account\users\ajax_list" 
			 	
		
			>
			Save User
		</button>
		</div></div>
		<?php		
		r_theme_endform();
				
		?>
		
	