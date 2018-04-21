<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "sys_account." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "System Account";
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
	$lang[$section.'sys_account_name'] = 	"Login Name" ;
	$lang[$section.'sys_account_title'] = 	"Official Clinic Name" ;
	$lang[$section.'sys_acc_admin_email'] = 	"Admin Email" ;
	$lang[$section.'sys_acc_is_active'] = "Active" ;
	$lang[$section.'sys_acc_type'] = 	"Type" ;
	$lang[$section.'sys_acc_remarks'] = 	"remarks" ;
	$lang[$section.'sys_acc_message'] = 	"message" ;
	$lang[$section.'sys_acc_enable_logo'] = 	"Logo" ;
	$lang[$section.'sys_acc_date_created'] = 	"Date Created" ;
	$lang[$section.'sys_account_title_ar'] = 	"Arabic Official Clinic Name" ;
	$lang[$section.'department_name'] = 	"Department" ;

					
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "system account" ;
	$lang[$section.'create_title'] = "Add system account" ;
	$lang[$section.'read_title'] = "system account" ;
	$lang[$section.'delete_title'] = "Delete system account" ;
	
	$field_name=$section."sys_account_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."sys_account_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Account Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."sys_account_title" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Official Clinic Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."sys_account_title_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Arabic Official Clinic Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."sys_acc_admin_email" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Admin Email:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;

	$field_name=$section."sys_acc_is_active" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Active :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."sys_acc_type" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Type :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."sys_acc_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"remarks :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."sys_acc_message" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"message:" ;
	$lang[$field_name.'_is_required'] = 	"_" ;

	$field_name=$section."sys_acc_enable_logo" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" logo :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."sys_acc_date_created" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Date Created :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."sys_acc_dep_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Department :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		
	
	?>