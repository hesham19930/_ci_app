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
		r_theme_InputText( "account_id"  ,  $input_values["account_id"],$Label , 2,$SubTip ,1);
		}
	
		
		$SubTip = "تأكد من كود الحساب .. لو سمحت "." ... " .form_error('account_name','<span style="color:red;">', '</span>');  
		$Label = " كود الحساب ";
		r_theme_InputText("account_name",$input_values["account_name"],$Label , 6,$SubTip ,0);
		
		$SubTip = "تأكد من اسم الحساب .. لو سمحت "." ... " .form_error('account_name','<span style="color:red;">', '</span>');  
		$Label = " اسم الحساب ";
		r_theme_InputText("account_title",$input_values["account_title"],$Label , 6,$SubTip ,0);
		
			$SubTip = "تأكد من البريد لمدير الحساب .. لو سمحت "." ... " .form_error('account_name','<span style="color:red;">', '</span>');  
		$Label = " بريد مدير الحساب ";
		r_theme_InputText("admin_email",$input_values["admin_email"],$Label , 6,$SubTip ,0);

		$SubTip = "";  
		$Label = " ملاحظات";
		r_theme_InputArea("remarks",$input_values["remarks"],$Label );
		
			$SubTip = "";  
		$Label = " رسائل";
		r_theme_InputArea("message",$input_values["message"],$Label );
		
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