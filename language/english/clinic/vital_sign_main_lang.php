<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "vital_sign." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Vital Sign";
	$lang[$section.'page_subtitle']="_"; 



// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Vital Sign list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Vital Sign";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'vital_sign_id'] = 	"#" ; 
	$lang[$section.'vital_sign_type'] = 	" Name" ;
	$lang[$section.'vital_sign_description'] = 	"Description" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Vital Sign" ;
	$lang[$section.'create_title'] = "Add Vital Sign" ;
	$lang[$section.'read_title'] = "Vital Sign" ;
	$lang[$section.'delete_title'] = "Delete Vital Sign" ;
	
	$field_name=$section."vital_sign_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."vital_sign_type" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Type :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."vital_sign_description" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Description :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	
	?>