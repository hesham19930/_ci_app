<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "user." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Users";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Users list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Users";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'user_id'] = "#" ; 
	$lang[$section.'user_email'] = 	" Email" ;
	$lang[$section.'user_name'] = 	"User Name" ;
	$lang[$section.'user_pass'] = 	"Password" ;
	$lang[$section.'create_date'] = 	"Create Date" ;
	$lang[$section.'sys_account_name'] = 	"Account" ;
	$lang[$section.'is_active'] = 	"Active" ;
	$lang[$section.'user_privileges'] = 	"Privileges" ;
	$lang[$section.'user_login'] = 	"User Login" ;
	$lang[$section.'modified_date'] = 	"modified date" ;
	$lang[$section.'last_login'] = 	"last login" ;
	$lang[$section.'group_name'] = 	"group name" ;
	
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
	$lang[$field_name.'_label'] = 	"User Login :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."user_email" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Email :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."user_pass" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Password :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."user_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"User Name :" ;
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
	$lang[$field_name.'_label'] = 	"modified_date :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
			$field_name=$section."create_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"create_date :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
			$field_name=$section."group_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Group Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."is_active" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Is Active? :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	?>