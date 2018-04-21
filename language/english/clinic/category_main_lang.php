<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "category." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Companies";
	$lang[$section.'page_subtitle']="_";
	
	
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "categorys list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "category";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'category_id'] = 	"#" ; 
	$lang[$section.'category_name'] = 	"Name" ;
	$lang[$section.'category_phone'] = 	"Phone" ;

	$lang[$section.'category_address'] = 	"Address" ;
	$lang[$section.'category_email'] = 	"Email" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = " Add category" ;
	$lang[$section.'create_title'] = "Add category" ;
	$lang[$section.'read_title'] = "category" ;
	$lang[$section.'delete_title'] = "Delete category" ;
	
	$field_name=$section."category_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."category_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."category_phone" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Phone :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	$field_name=$section."category_address" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Address :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	$field_name=$section."category_email" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Email :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	?>