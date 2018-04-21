<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "test_result." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Test Results";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Test Result list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Test Result";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'test_result_id'] = 	"#" ; 
	$lang[$section.'test_result_report'] = 	"Test Result Report" ;
	$lang[$section.'test_result_img'] = 	"Test Result Img" ;
	$lang[$section.'test_result_lab'] = 	"Test Result Lab" ;
	$lang[$section.'test_result_date'] = 	"Test Result Date" ;
	
	$lang[$section.'test_result_test_name'] = 	"Test Name" ;
	$lang[$section.'visit_date'] = 	"Visit Date" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Test Result" ;
	$lang[$section.'create_title'] = "Add Test Result" ;
	$lang[$section.'read_title'] = "Test Result" ;
	$lang[$section.'delete_title'] = "Delete Test Result" ;
	
	$field_name=$section."test_result_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."test_result_visit_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Visit date :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."test_result_report" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Test Result Report :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."test_result_img" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Upload Test-Result Img :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."test_result_lab" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Test Result Lab :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
		$field_name=$section."test_result_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Test Result Date :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."test_result_test_name";
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Test Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	?>