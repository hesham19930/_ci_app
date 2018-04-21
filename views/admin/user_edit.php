	<?php
			/*
			 * shoud come in the data array with
			 * $thisItem = > Instance of Sample item 
			 */ 
			
			$item = $this_item ; 				
			r_theme_box_start(iif(($item->ID()==0), $item->creating_title , $item->editing_title));

	?> 
	
	<div id="body" dir="rtl">
		<p>
		</p>
		
		<?php
		
		// if the form is newely opened , take the value from the database 
		// else 
		// take the value from the previous form submit
					
		$input_values = array() ; // this is our array 
					
		if (set_value("isAnAction") == "yes")
		{
				//echo "ACTION=yes" ;
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
		
		  
		r_theme_startform( "iFormName",  "iFormName" ,""); //echo form_open('form');
		
		
		if ( $item->ID()!=0)
		{
		$SubTip = ""  ; 
		$Label = "رقم النظام "; 
		r_theme_InputText( "user_id"  ,  $input_values["user_id"],$Label , 2,$SubTip ,1);
		}
	
		
		$SubTip = "تأكد من كود الدخول .. لو سمحت "." ... " .form_error('user_login','<span style="color:red;">', '</span>');  
		$Label = " كود الدخول ";
		r_theme_InputText("user_login",$input_values["user_login"],$Label , 2,$SubTip ,0);
		
		$SubTip = "تأكد من اسم المستخدم .. لو سمحت "." ... " .form_error('user_name','<span style="color:red;">', '</span>');  
		$Label = " اسم المستخدم ";
		r_theme_InputText("user_name",$input_values["user_name"],$Label , 3,$SubTip ,0);
		
			$SubTip = "تأكد من البريد  الحساب .. لو سمحت "." ... " .form_error('account_name','<span style="color:red;">', '</span>');  
		$Label = " بريد  الحساب ";
		r_theme_InputText("user_email",$input_values["user_email"],$Label , 6,$SubTip ,0);

		$SubTip = "تأكد من كلمة السر .. لو سمحت "." ... " .form_error('user_pass','<span style="color:red;">', '</span>');  
		$Label = " كلمة السر ";
		r_theme_inputPassword("user_pass",$input_values["user_pass"],$Label , 2,$SubTip ,0);

		$SubTip = "تأكد من تأكيد كلمة السر .. لو سمحت "." ... " .form_error('user_pass','<span style="color:red;">', '</span>');  
		$Label = " كلمة السر ";
		r_theme_inputPassword("user_pass_confirm",$input_values["user_pass"],$Label , 2,$SubTip ,0);

				
		$Label = " الفرع ";
 		r_theme_InputSelect("account_id", $input_values["account_id"], $Label,
					r_listbox_items("bi_sys_account",""),2,$SubTip,0);
					
		
		
		$Label = " الصلاحيات ";
 		r_theme_InputSelect("group_id", $input_values["group_id"], $Label,
					r_listbox_items("bi_user_group",""),2,$SubTip,0);
					
		$SubTip = "";  
		$Label = " السجل فعال ";
		r_theme_InputCheck("is_active",$input_values["is_active"],$Label , 6,$SubTip ,0);

	
		r_theme_InputHidden( "isAnAction", "yes");		
				
		r_theme_endform();		
			
		?>
		
	</div>
	
	<?php 
			r_theme_box_end();
	?> 