<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "sys_account." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "الحساب الرسمي";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "System Accounts list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'sys_account'] = "System Accounts";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'sys_account_id'] = 	"ID" ; 
	$lang[$section.'sys_account_name'] = 	"اسم الدخول" ;
	$lang[$section.'sys_account_title'] = 	"اسم العيادة الرسمي" ;
	$lang[$section.'sys_acc_admin_email'] = 	"ايميل الادمن" ;
	$lang[$section.'sys_acc_is_active'] = "نشط" ;
	$lang[$section.'sys_acc_type'] = 	"نوع الحساب" ;
	$lang[$section.'sys_acc_remarks'] = 	"ملاحظات" ;
	$lang[$section.'sys_acc_message'] = 	"رسالة" ;
	$lang[$section.'sys_acc_enable_logo'] = 	"لوجو" ;
	$lang[$section.'sys_acc_date_created'] = 	"تاريخ الانشاء" ;
	$lang[$section.'sys_account_title_ar'] = 	"الاسم العربي الرسمي للعيادة" ;
		$lang[$section.'department_name'] = 	"تخصص العيادة" ;
					
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "حساب مدير النظام" ;
	$lang[$section.'create_title'] = "اضافة حساب مدير النظام" ;
	$lang[$section.'read_title'] = "system account" ;
	$lang[$section.'delete_title'] = "Delete system account" ;
	
	$field_name=$section."sys_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."sys_account_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اسم الحساب :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."sys_account_title" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اسم العيادة الرسمي :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."sys_account_title_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اسم العيادة الرسمي بالعربي :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."sys_acc_admin_email" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ايميل الادمن :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;

	$field_name=$section."sys_acc_is_active" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" نشط :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."sys_acc_type" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" نوع الحساب :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."sys_acc_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"ملاحظات :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."sys_acc_message" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"رسالة :" ;
	$lang[$field_name.'_is_required'] = 	"_" ;

	$field_name=$section."sys_acc_enable_logo" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" لوجو :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."sys_acc_date_created" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" تاريخ الانشاء :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
			$field_name=$section."sys_acc_dep_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"التخصص :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;	
	
	?>