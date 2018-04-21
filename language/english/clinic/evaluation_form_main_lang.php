<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "evaluation_form." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Evaluations|تقييمات";
	$lang[$section.'page_subtitle']="_"; 
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Evaluations list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "evaluation_forms";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'evaluation_form_id'] = 	"#" ; 
	$lang[$section.'evaluation_form_name'] = 	"Name" ;
	$lang[$section.'evaluation_form_description'] = 	"Description" ;

	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "evaluation_forms" ;
	$lang[$section.'create_title'] = "Add evaluation" ;
	$lang[$section.'read_title'] = "evaluation_forms" ;
	$lang[$section.'delete_title'] = "Delete Evaluation" ;
	
	$field_name=$section."evaluation_form_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."evaluation_form_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."evaluation_form_description" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Description :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		
	
	?>