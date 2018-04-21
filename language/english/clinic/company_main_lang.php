<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "company." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Companies";
	$lang[$section.'page_subtitle']="_";
	
	
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "companys list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "company";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'company_id'] = 	"#" ; 
	$lang[$section.'company_name'] = 	"Name" ;
	$lang[$section.'company_phone'] = 	"Phone" ;

	$lang[$section.'company_address'] = 	"Address" ;
	$lang[$section.'company_email'] = 	"Email" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = " Add Company" ;
	$lang[$section.'create_title'] = "Add Company" ;
	$lang[$section.'read_title'] = "Company" ;
	$lang[$section.'delete_title'] = "Delete Company" ;
	
	$field_name=$section."company_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."company_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."company_phone" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Phone :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	$field_name=$section."company_address" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Address :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	$field_name=$section."company_email" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Email :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	?>