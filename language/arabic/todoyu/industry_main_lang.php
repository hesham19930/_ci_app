<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "Industry." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Industry";
	$lang[$section.'page_subtitle']="_";
	
	
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = " Industries";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Group Of Industries ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;


		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'industry_id'] = 	"#" ; 
	$lang[$section.'industry_name'] = 	"Industry Name " ;
	$lang[$section.'industry_remarks'] = 	"Industry Remarks " ;
       
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Industry" ;
	$lang[$section.'create_title'] = " Add Industry " ;
	$lang[$section.'read_title'] = "Industry" ;
	$lang[$section.'delete_title'] = "Delete Industry " ;
	
	$field_name=$section."industry_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."industry_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Industry Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."industry_remarks" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Industry Remarks :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
       
        
       
	
	
	
	?>