<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "doctor." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Doctors";
	$lang[$section.'page_subtitle']="_"; 
	
	
// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Doctors list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Doctors";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'doctor_id'] = 	"#" ; 
	$lang[$section.'doctor_name'] = 	" Name" ;
	$lang[$section.'doctor_phone'] = 	"Phone" ;
	$lang[$section.'doctor_address'] = 	" Address" ;
	$lang[$section.'doctor_department'] = 	"Department" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Doctors" ;
	$lang[$section.'create_title'] = "Add Doctor" ;
	$lang[$section.'read_title'] = "Doctor" ;
	$lang[$section.'delete_title'] = "Delete Doctor" ;
	
	$field_name=$section."doctor_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."doctor_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Doctor Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."doctor_phone" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Doctor Phone :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."doctor_address" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Doctor Address :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."doctor_department" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Doctor Department :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	?>