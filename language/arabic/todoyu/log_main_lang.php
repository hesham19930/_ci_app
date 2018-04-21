<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "log." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Log";
	$lang[$section.'page_subtitle']="_";
	
	
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = " Log";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Group Of Logs ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;


		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'log_id'] = 	"#" ; 
	$lang[$section.'log_name'] = 	"Log Name" ;
	$lang[$section.'log_description'] = 	"Log Description" ;
	$lang[$section.'log_person_id'] = 	"User" ;
	$lang[$section.'log_task_id'] = 	"Task Name" ;
	$lang[$section.'log_create_date'] = 	"Create Date" ;
	

       
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Log" ;
	$lang[$section.'create_title'] = " Add Log" ;
	$lang[$section.'read_title'] = "Log" ;
	$lang[$section.'delete_title'] = "Delete Log" ;
	
	$field_name=$section."log_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."log_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Log Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."log_description" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Log Description :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	$field_name=$section."log_create_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Create Date :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
       
        
       
	
	
	
	?>