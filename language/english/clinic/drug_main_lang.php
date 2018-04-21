<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "drug." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Drugs";
	$lang[$section.'page_subtitle']="_"; 

	$lang[$section.'search_button']="Search";
	$lang[$section.'report_title']="Drugs Report";
	$lang['drug_search_report'] = "Drugs Search";
		


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Drugs list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Drugs";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'drug_id'] = 	"#" ; 
	$lang[$section.'drug_name'] = 	" Name" ;
	$lang[$section.'drug_description'] = 	"Description" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Drugs" ;
	$lang[$section.'create_title'] = "Add Drug" ;
	$lang[$section.'read_title'] = "Drug" ;
	$lang[$section.'delete_title'] = "Delete Drug" ;
	
	$field_name=$section."drug_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."drug_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Drug Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."drug_description" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Drug Description :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
//----------------------drug Filter ------------------------------------------------------------------
	$section = "item.form_data." ;
	
	$field_name=$section."drug_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Find Drug" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	
	
	?>