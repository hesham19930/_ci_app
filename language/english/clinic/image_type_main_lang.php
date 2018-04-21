<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "image_type." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Image Types";
	$lang[$section.'page_subtitle']="_";
	
	
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "image_types list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Image Type";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'image_type_id'] = 	"#" ; 
	$lang[$section.'image_type_name'] = 	"Name" ;
	$lang[$section.'image_type_description'] = 	"Description" ;
	
	
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Image Types" ;
	$lang[$section.'create_title'] = "Add image_type" ;
	$lang[$section.'read_title'] = "image_type" ;
	$lang[$section.'delete_title'] = "Delete image_type" ;
	
	$field_name=$section."image_type_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."image_type_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	$field_name=$section."image_type_description" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Description :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	
	
	?>