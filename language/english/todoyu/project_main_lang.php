<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "project." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "projects";
	$lang[$section.'page_subtitle']="_";
	
	
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Projects List";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Projects ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;


		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'project_id'] = 	"#" ; 
	$lang[$section.'project_name'] = 	"Project Name  " ;
	$lang[$section.'project_description'] = 	"Project Description  " ;
        $lang[$section.'project_client_id'] = 	"Client Name " ;
         $lang[$section.'project_creation_date'] = 	"Creation Date  " ;
	 $lang[$section.'project_estimated_days'] = 	"Estemated Days  " ;
         $lang[$section.'project_end_time'] = 	"Delivery Date " ;
         $lang[$section.'project_status'] = 	"Project Status  " ;
	
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Projects " ;
	$lang[$section.'create_title'] = "Add Project  " ;
	$lang[$section.'read_title'] = "Projects" ;
	$lang[$section.'delete_title'] = "Delete Project " ;
	
	$field_name=$section."project_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."project_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Project Name  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."project_description" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Project Description :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        $field_name=$section."project_client_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Client Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."project_creation_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Creation Date  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."project_estimated_days" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"  Project Estimate Date  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."project_status" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Project Status  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."project_end_time" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Project Delivery Date  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	
	
	?>