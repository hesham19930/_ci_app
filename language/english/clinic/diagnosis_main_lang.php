<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "diagnosis." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Diagnosis";
	$lang[$section.'page_subtitle']="_"; 


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Diagnosis list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Diagnosis";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'diagnosis_id'] = 	"#" ; 
	$lang[$section.'diagnosis_name'] = 	" Name" ;
	$lang[$section.'diagnosis_code'] = 	"Code" ;
	$lang[$section.'diagnosis_abbreviations'] = 	" Abbreviations" ;
	$lang[$section.'diagnosis_description'] = 	"Description" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Diagnosis" ;
	$lang[$section.'create_title'] = "Add Diagnosis" ;
	$lang[$section.'read_title'] = "Diagnosis" ;
	$lang[$section.'delete_title'] = "Delete Diagnosis" ;
	
	$field_name=$section."diagnosis_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."diagnosis_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Diagnosis Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."diagnosis_code" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Diagnosis Code :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."diagnosis_abbreviations" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Abbreviations :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."diagnosis_description" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Description :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	?>