<?php

// Master View Section -----------------------------------------------------------------------------------------

	$main_file = "task_group." ; 
	$section = $main_file."master." ; 

	$lang[$section.'page_title'] = "Task Groups";
	$lang[$section.'page_subtitle']="_";
	
	
	


// Class & List View Section -----------------------------------------------------------------------------------------

	$lang[$section.'list_title'] = "Task Group Lists";
	
	$section=$main_file."bread_crumbs." ; 
	$lang[$section.'settings'] = 	"Settings" ;
	$lang[$section.'item_types'] = "Task Groups ";
	
	$section=$main_file."buttons." ; 
	$lang[$section.'save'] = 	"Save" ;


		
	// DEFAULT LISTVIEW FIELD TITLES 
	
	$section = $main_file."default.list." ;
	$lang[$section.'task_group_id'] = 	"#" ; 
	$lang[$section.'task_group_name'] = 	"Task Group Name  " ;
	$lang[$section.'task_group_description'] = 	"Task Group Description  " ;
        $lang[$section.'task_group_project_id'] = 	"Project Name " ;
         $lang[$section.'task_group_creation_date'] = 	"Creation Date  " ;
	 $lang[$section.'task_group_estimated_days'] = 	"Estemated Days  " ;
         $lang[$section.'task_group_end_date'] = 	"Delivery Date " ;
         $lang[$section.'task_group_status'] = 	"Task Group Status  " ;
	
	
	// ADDITIONAL VIEW FIELD TITLES //
		
	// edit view section -----------------------------------------------------------------------------------------
	
	$section = $main_file."form_data." ; 
	
	$lang[$section.'edit_title'] = "Task Group" ;
	$lang[$section.'create_title'] = "Add Group Task  " ;
	$lang[$section.'read_title'] = "Task Groups" ;
	$lang[$section.'delete_title'] = "Delete Group Task " ;
	
	$field_name=$section."task_group_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"#" ;
	$lang[$field_name.'_is_required'] = 	"_" ;
	
	
	$field_name=$section."task_group_name" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Task Group Name  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
	
	
	$field_name=$section."task_group_description" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Task Group Description :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        $field_name=$section."task_group_project_id" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Project Name :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."task_group_creation_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Creation Date  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."task_group_estimated_days" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Estimate Date  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."task_group_status" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Task Group Status  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
        
        $field_name=$section."task_group_end_date" ;
	$lang[$field_name.'_tip'] = 	"_" ;
	$lang[$field_name.'_label'] = 	"Delivery Date  :" ;
	$lang[$field_name.'_is_required'] = 	"Required" ;
        
      
	
	
	?>