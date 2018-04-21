<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "history_line." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Patient Medical History";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Patient Medical History";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "histooooory_lines";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'history_line_id'] = 	"#" ; 
	$lang[$section.'history_line'] = 	"History line" ;
	$lang[$section.'patient_name'] = 	"Patient Name" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "History Details" ;
	$lang[$section.'create_title'] = "Add history_line" ;
	$lang[$section.'read_title'] = "history_line" ;
	$lang[$section.'delete_title'] = "Delete history_line" ;
	
	$field_name=$section."history_line_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."history_line" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"History line :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."hl_patient_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Patient Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	
	?>