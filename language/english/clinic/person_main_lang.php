<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "person." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Evaluators";
	$lang[$section.'page_subtitle']="_";
	
	
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "persons list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "person";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'person_id'] = 	"#" ; 
	$lang[$section.'person_name'] = 	"Name" ;
	$lang[$section.'person_phone'] = 	"Phone" ;

	$lang[$section.'person_address'] = 	"Address" ;
	
	$lang[$section.'person_email'] = 	"Email" ;
	$lang[$section.'person_company_id'] = 	"Company" ;
	$lang[$section.'company_name'] = 	"Company" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = " Add Evaluator" ;
	$lang[$section.'create_title'] = "Add person" ;
	$lang[$section.'read_title'] = "person" ;
	$lang[$section.'delete_title'] = "Delete person" ;
	
	$field_name=$section."person_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."person_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."person_phone" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Phone :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	$field_name=$section."person_address" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Address :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	$field_name=$section."person_email" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Email :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."person_company_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Company :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	$field_name=$section."company_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Company :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	?>