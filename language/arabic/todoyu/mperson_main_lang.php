<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "mperson." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Persons";
	$lang[$section.'page_subtitle']="_";
	
	
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "List Of Persons  ";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Persons Group ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;


		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'mperson_id'] = 	"#" ; 
	$lang[$section.'mperson_name'] = 	"Person Name  " ;
	$lang[$section.'mperson_phone'] = 	"Phone " ;
        $lang[$section.'mperson_type'] = 	"Person Type " ;
         $lang[$section.'mperson_email'] = 	"Email  " ;
	 $lang[$section.'mperson_status'] = 	"Status  " ;
         $lang[$section.'mperson_creation_date'] = 	"Join Date " ;
        $lang[$section.'mperson_created_by'] = 	"Add By " ;
        
        
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Person Group " ;
	$lang[$section.'create_title'] = "Add Person  " ;
	$lang[$section.'read_title'] = "Persons" ;
	$lang[$section.'delete_title'] = "Delete Person " ;
	
	$field_name=$section."mperson_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."mperson_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Name  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."mperson_phone" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Phone :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        $field_name=$section."mperson_email" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Email :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."mperson_type" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Person Type  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."mperson_status" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Status  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."mperson_creation_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Join Date  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	$field_name=$section."mperson_created_by" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Added By  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	?>