<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "department." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "تخصصات العيادات";
	$lang[$section.'page_subtitle']="_"; 
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "قائمة التخصصات";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"الاعدادات" ;
	$lang[$section.'item_types'] = "departments";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;

	
		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'department_id'] = 	"#" ; 
	$lang[$section.'department_name'] = 	"التخصص" ;
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "التخصصات" ;
	$lang[$section.'create_title'] = "Add department" ;
	$lang[$section.'read_title'] = "departments" ;
	$lang[$section.'delete_title'] = "Delete department" ;
	
	$field_name=$section."department_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."department_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	" التخصص :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;

	
	?>