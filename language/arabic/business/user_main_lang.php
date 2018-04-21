<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "user." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "المستخدمين";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة المستخدمين";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Users";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'user_id'] = "#" ; 
	$lang[$section.'user_email'] = 	" الايميل" ;
	$lang[$section.'user_name'] = 	"اسم المستخدم" ;
	$lang[$section.'user_pass'] = 	"كلمة المرور" ;
	$lang[$section.'create_date'] = 	"تاريخ الانشاء" ;
	$lang[$section.'sys_account_name'] = 	"الحساب" ;
	$lang[$section.'is_active'] = 	"نَشِط" ;
	$lang[$section.'user_privileges'] = 	"Privileges" ;
	$lang[$section.'user_login'] = 	"اسم الدخول" ;
	$lang[$section.'modified_date'] = 	"تاريخ التعديل" ;
	$lang[$section.'last_login'] = 	"آخر تسجيل دخول" ;
	$lang[$section.'group_name'] = 	"الصلاحيات" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Users" ;
	$lang[$section.'create_title'] = "Add User" ;
	$lang[$section.'read_title'] = "Users" ;
	$lang[$section.'delete_title'] = "Delete User" ;
	
	$field_name=$section."user_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."user_login" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اسم الدخول :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."user_email" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الايميل :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."user_pass" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"كلمة المرور :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."user_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"اسم المستخدم :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."user_privileges" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"User Privileges :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."user_sys_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Account Login Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."modified_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تاريخ التعديل :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."create_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"تاريخ الانشاء :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."group_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"الصلاحيات :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."is_active" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" نَشِط :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	?>