<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "vital_sign_value." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Vital Sign values";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Vital Sign values list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Vital Sign values";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'vital_sign_value_id'] = 	"#" ; 
	$lang[$section.'vital_sign_type'] = 	"Vital Sign" ;
	//$lang[$section.'vsv_vital_sign_id'] = 	"Vital Sign" ;
	$lang[$section.'vsv_visit_id'] = 	"Vital Sign" ;
	$lang[$section.'vsv_value'] = 	" Values" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Vital Sign values" ;
	$lang[$section.'create_title'] = "Add Vital Sign value" ;
	$lang[$section.'read_title'] = "Vital Sign value" ;
	$lang[$section.'delete_title'] = "Delete Vital Sign value" ;
	
	$field_name=$section."vital_sign_value_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."vsv_vital_sign_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Vital Sign :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."vsv_visit_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Visit :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."vsv_value" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Value :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	?>