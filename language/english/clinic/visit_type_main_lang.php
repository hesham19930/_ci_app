<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "visit_type." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Visits Types";
	$lang[$section.'page_subtitle']="_";
	
	
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "visit_types list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "visit_type";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'visit_type_id'] = 	"#" ; 
	$lang[$section.'visit_type_name'] = 	"Name(en)" ;
	$lang[$section.'visit_type_name_ar'] = 	"Name(ar)" ;

	
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = " Add visit_type" ;
	$lang[$section.'create_title'] = "Add visit_type" ;
	$lang[$section.'read_title'] = "visit_type" ;
	$lang[$section.'delete_title'] = "Delete visit_type" ;
	
	$field_name=$section."visit_type_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."visit_type_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Name(en) :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."visit_type_name_ar" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Name(ar) :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	
	
	?>