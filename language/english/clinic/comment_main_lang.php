<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "comment." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Comments";
	$lang[$section.'page_subtitle']="_"; 

// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Comments list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Comments";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'comment_id'] = 	"#" ; 
	$lang[$section.'comment'] = 	"Comment" ;
	$lang[$section.'comment_visit_id'] = 	"Visit" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Comments" ;
	$lang[$section.'create_title'] = "Add Comment" ;
	$lang[$section.'read_title'] = "Comment" ;
	$lang[$section.'delete_title'] = "Delete Comment" ;
	
	$field_name=$section."comment_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."comment_visit_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Visit :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."comment" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Enter Comment :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	?>