<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "blood_group." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Blood Group";
	$lang[$section.'page_subtitle']="_";
	
	
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Blood Groups list";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Blood Groups";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'blood_group_id'] = 	"#" ; 
	$lang[$section.'blood_group_type'] = 	"Type" ;
	$lang[$section.'blood_group_description'] = 	"Description" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Blood Groups" ;
	$lang[$section.'create_title'] = "Add Blood Group" ;
	$lang[$section.'read_title'] = "Blood Groups" ;
	$lang[$section.'delete_title'] = "Delete Blood Group" ;
	
	$field_name=$section."blood_group_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."blood_group_type" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" Type :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."blood_group_description" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Description :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	?>