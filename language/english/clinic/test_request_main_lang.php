<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "test_request." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Test Request";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Test Request list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Test Requests";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'test_request_id'] = 	"#" ; 
	
	$lang[$section.'test_name'] = 	"Test Name" ;
	$lang[$section.'visit_date'] = 	"Visit Date" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Test Request" ;
	$lang[$section.'create_title'] = "Add Test Request" ;
	$lang[$section.'read_title'] = "Test Request" ;
	$lang[$section.'delete_title'] = "Delete Test Request" ;
	
	$field_name=$section."test_request_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."test_request_visit_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Visit date :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."test_request_test_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Test Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	?>